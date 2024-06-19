<?php
namespace Jiny\Erp\Hr\Recruit\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class RecruitPlan extends WireTablePopupForms
{

    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_recruit_plan";

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];

        $this->actions['view']['filter'] = "jinyerp-hr-recruit::admin.plan.filter";
        $this->actions['view']['list'] = "jinyerp-hr-recruit::admin.plan.list";
        $this->actions['view']['form'] = "jinyerp-hr-recruit::admin.plan.form";

        $this->actions['title'] = "채용요청";
        $this->actions['subtitle'] = "부서별 필요한 사원 채용을 요청합니다.";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");

    }






}
