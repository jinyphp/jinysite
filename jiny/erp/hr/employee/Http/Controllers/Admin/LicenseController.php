<?php
namespace Jiny\Erp\Hr\Employee\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class LicenseController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_license";

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";
        $this->actions['view']['filter'] = "jinyerp-hr-employee::admin.license.filter";
        $this->actions['view']['list'] = "jinyerp-hr-employee::admin.license.list";
        $this->actions['view']['form'] = "jinyerp-hr-employee::admin.license.form";

        //$this->rules['nested']['table'] = "hr_employee";

        $this->actions['title'] = "자격증";
        $this->actions['subtitle'] = "사원별 보유 자격증을 관리합니다.";
        //$this->actions['view']['title'] = "jinyerp-hr-employee::admin.license.title";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");


    }



}
