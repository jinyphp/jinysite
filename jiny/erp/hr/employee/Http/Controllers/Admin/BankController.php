<?php
namespace Jiny\Erp\Hr\Employee\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\LiveController;
class BankController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "hr_bank"; // 테이블 정보

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr::user.worktime.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr::user.worktime.table";

        $this->actions['view']['title'] = "jinyerp-hr-employee::admin.bank.title";
        //$this->actions['view']['filter'] = "jinyerp-hr-employee::admin.bank.filter";
        $this->actions['view']['list'] = "jinyerp-hr-employee::admin.bank.list";
        $this->actions['view']['form'] = "jinyerp-hr-employee::admin.bank.form";



    }


}