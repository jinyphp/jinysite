<?php
namespace Jiny\Erp\Hr\Employee\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class BankController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "hr_bank"; // 테이블 정보

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";


        $this->actions['view']['filter'] = "jinyerp-hr-employee::admin.bank.filter";
        $this->actions['view']['list'] = "jinyerp-hr-employee::admin.bank.list";
        $this->actions['view']['form'] = "jinyerp-hr-employee::admin.bank.form";


        $this->actions['title'] = "직원별 급여계좌";
        $this->actions['subtitle'] = "급여를 지급하기 위한 계좌들을 관리합니다.";
        $this->actions['view']['title'] = "jinyerp-hr-employee::admin.bank.title";
    }


}
