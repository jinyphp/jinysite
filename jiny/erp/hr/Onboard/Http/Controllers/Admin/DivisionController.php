<?php
namespace Jiny\Erp\Hr\Onboard\Http\Controllers\Admin;

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

        /*


        $this->actions['view_title'] = "jinyerp-hr::admin.division.title";
        $this->actions['view_filter'] = "jinyerp-hr::admin.division.filter";

        */
        $this->actions['view']['list'] = "jinyerp-hr::admin.division.list";
        $this->actions['view']['form'] = "jinyerp-hr::admin.division.form";


    }



}
