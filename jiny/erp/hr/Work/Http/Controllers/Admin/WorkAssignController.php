<?php
namespace Jiny\Erp\Hr\Work\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class WorkAssignController extends WireTablePopupForms
{

    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_work_assign";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];

        $this->actions['view']['filter'] = "jinyerp-hr-work::admin.work_assign.filter";
        $this->actions['view']['list'] = "jinyerp-hr-work::admin.work_assign.list";
        $this->actions['view']['form'] = "jinyerp-hr-work::admin.work_assign.form";

        // $this->actions['validate'] = [
        //     'title' => "required"
        // ];

        $this->actions['title'] = "사원별 지정 근무 유형";
        $this->actions['subtitle'] = "사원별로 기존적으로 근무하는 유형을 지정합니다.";
        $this->actions['view']['title'] = "jinyerp-hr-work::admin.work_assign.title";

    }

    // 목록의 DB를 조회하기 전에 호출되는 Hook 입니다.
    public function HookIndexing($wire)
    {
        /*
        $wire->db()
        ->orderBy('id', "desc")
            ->groupBy('email');
            */


    }

    // 목록의 DB를 조회한 후에 호출되는 HooK 입니다.
    public function HookIndexed($wire, $rows)
    {
        $ids = getIdsFromRows($rows);
        $users = getUsersWhereIn($ids);

        foreach($rows as &$row) {
            foreach($users as $user) {
                if($row->email == $user->email) {
                    $row->user_name = $user->name;
                }
            }
        }

        return $rows;
    }


}
