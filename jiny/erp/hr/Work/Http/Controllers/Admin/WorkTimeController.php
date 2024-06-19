<?php
namespace Jiny\Erp\Hr\Work\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class WorkTimeController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_worktime";

        // 컨트롤러 페이지 레이아웃
        // $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];
        $this->actions['view']['filter'] = "jinyerp-hr-work::admin.worktime.filter";
        $this->actions['view']['list'] = "jinyerp-hr-work::admin.worktime.list";
        $this->actions['view']['form'] = "jinyerp-hr-work::admin.worktime.form";


        $this->actions['title'] = "출퇴근 기록";
        $this->actions['subtitle'] = "사원별 출퇴근 기간을 기록합니다.";
        //$this->actions['view']['title'] = "jinyerp-hr-work::admin.worktime.title";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");

    }



}
