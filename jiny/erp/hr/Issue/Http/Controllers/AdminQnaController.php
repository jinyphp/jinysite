<?php
namespace Jiny\Erp\Hr\Issue\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminQnaController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "hr_qna"; // 테이블 정보

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";


        $this->actions['view']['filter'] = "jinyerp-hr-issue::admin.qna.filter";
        $this->actions['view']['list'] = "jinyerp-hr-issue::admin.qna.list";
        $this->actions['view']['form'] = "jinyerp-hr-issue::admin.qna.form";

        $this->actions['title'] = "HR QNA";
        $this->actions['subtitle'] = "사원별 HR 질문을 관리 합니다.";
        $this->actions['view']['title'] = "jinyerp-hr-issue::admin.qna.title";



    }




    /**
     * DashBaord
     */
    public function dashboard()
    {
        $DB = DB::table($this->actions['table']);
        $rows = $DB->orderBy('id',"desc")->paginate(5);

        return view("jinyerp-hr::admin.qna.dash")
            ->with('rows', $rows);
    }

}
