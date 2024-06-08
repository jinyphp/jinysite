<?php
namespace Jiny\Erp\Hr\Work\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class WorkStatusController extends WireTablePopupForms
{

    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_work_status";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        $this->actions['view']['filter'] = "jinyerp-hr-work::admin.work_status.filter";
        $this->actions['view']['list'] = "jinyerp-hr-work::admin.work_status.list";
        $this->actions['view']['form'] = "jinyerp-hr-work::admin.work_status.form";

        $this->actions['title'] = "근태 상태 모니터링";
        $this->actions['subtitle'] = "사원별로 근태 상태를 모니터링 할 수 있습니다.";

        // 선택 삭제기능을 비활성화 합니다.
        $this->checkDeleteDisable();

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
            $row->user_name = ""; // 초기값
            foreach($users as $user) {
                if($row->email == $user->email) {
                    $row->user_name = $user->name;
                }
            }
        }

        return $rows;
    }


}
