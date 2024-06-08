<?php
namespace Jiny\Erp\Hr\Move\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class DivisionController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);


        ## 테이블 정보
        $this->actions['table'] = "hr_division";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";

        $this->actions['view']['filter'] = "jinyerp-hr-move::admin.division.filter";
        $this->actions['view']['list'] = "jinyerp-hr-move::admin.division.list";
        $this->actions['view']['form'] = "jinyerp-hr-move::admin.division.form";

        $this->actions['title'] = "부서";
        $this->actions['subtitle'] = "회사 조직을 관리합니다.";
        $this->actions['view']['title'] = "jinyerp-hr-move::admin.division.title";


    }



}
