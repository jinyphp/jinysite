<?php
namespace Jiny\Erp\Hr\Work\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class WorkOverTimeController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_work_overtime";

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];
        $this->actions['view']['filter'] = "jinyerp-hr-work::admin.work_overtime.filter";
        $this->actions['view']['list'] = "jinyerp-hr-work::admin.work_overtime.list";
        $this->actions['view']['form'] = "jinyerp-hr-work::admin.work_overtime.form";


        $this->actions['title'] = "초과 근무 관리";
        $this->actions['subtitle'] = "법정 기준 초과 근무를 관리합니다.";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");

    }



}
