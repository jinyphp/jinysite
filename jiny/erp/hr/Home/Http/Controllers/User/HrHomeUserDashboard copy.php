<?php
namespace Jiny\Erp\Hr\Home\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\WireTable\Http\Controllers\BaseController;
class HrHomeUserDashboard extends BaseController
{
    // 화면처리
    protected $viewFileLayout;
    protected $viewFileTable;
    protected $viewFileList;
    protected $viewFileItem;
    protected $viewFileTitle;
    protected $viewFileForms;

    protected $packageName = "jiny-wire-table";
    use \Jiny\WireTable\Http\Trait\Permit;

    public function __construct()
    {
        parent::__construct();
    }


    public function index(Request $request)
    {
        // IP확인
        $ipAddress = $request->ip();
        $this->actions['request']['ip'] = $ipAddress;

        // request로 전달되는 uri 파라미터값을 분석합니다.
        $this->checkRequestNesteds($request);

        // request로 전달되는 uri 쿼리스트링을 확인합니다.
        $this->checkRequestQuery($request);

        // 권한
        $this->permitCheck();
        if($this->permit['read']) {

            $view = $this->getViewFileLayout();
            if (view()->exists($view)) {
                $_data = [
                    'actions'=>$this->actions,
                    'nested'=>$this->nested,
                    'request'=>$request
                ];
                return view($view,$_data);
            }

            return view($this->packageName."::errors.message",[
                'message' => "layouts.table을 읽어올수 없습니다."
            ]);
        }



        // 권한 접속 실패
        return view("jiny-wire-table::error.permit",[
            'actions'=>$this->actions,
            'request'=>$request
        ]);




        // $viewFile = "jinyerp-hr-home"."::users.home";
        // return view($viewFile,[
        //     'actions' => $this->actions
        // ]);
    }

    // 인덱스의 Layout view를 확인합니다.
    protected function getViewFileLayout()
    {
        $view = $this->packageName."::layouts.table";
        // 기본값
        if($this->viewFileLayout) {
            $view = $this->viewFileLayout;
        }

        // 사용자 레이아웃 우선설정
        if (isset($this->actions['view']['layout'])) {
            $view = $this->actions['view']['layout'];
        }

        return $view;
    }

    // Request에서 전달된 query 스트링값을 저장합니다.
    private function checkRequestQuery($request)
    {
        if($request->query) {
            foreach($request->query as $key => $q) {
                $this->actions['request']['query'][$key] = $q;
                $this->actions['query'][$key] = $q;

                // 필터검색 요건확인
                $len = strlen("filter_");
                if(strlen($key) > $len) {
                    if(substr($key,0,$len) == "filter_") {
                        $_key = substr($key,$len);
                        $this->actions['filter'][$_key] = $q;
                    }
                }
            }
        }
        //dd($this->actions);
        return $this;
    }

    private function checkRequestNesteds($request)
    {
        //dd($request->id);
        //dd($request);

        if (isset($this->actions['nesteds'])) {
            foreach($this->actions['nesteds'] as $i => $nested) {
                if(isset($request->$nested)) {
                    unset($this->actions['nesteds'][$i]);
                    $this->actions['nesteds'][$nested] = $request->$nested;
                    $this->actions['request'][$nested] = $request->$nested;
                }
            }
        }

        return $this;
    }

}
