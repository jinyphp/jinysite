<?php
namespace Jiny\Erp\Hr\Payroll\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class PayrollSalary extends WireTablePopupForms
{

    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_payroll_salary";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];

        $this->actions['view']['filter'] = "jinyerp-hr-payroll::admin.salary.filter";
        $this->actions['view']['list'] = "jinyerp-hr-payroll::admin.salary.list";
        $this->actions['view']['form'] = "jinyerp-hr-payroll::admin.salary.form";

        $this->actions['title'] = "급여테이블";
        $this->actions['subtitle'] = "사원별 계약된 급여 기준을 관리합니다.";

    }






}
