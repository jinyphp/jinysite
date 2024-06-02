<?php
namespace Jiny\Erp\Hr\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\LiveController;
class DivisionController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);


        ## 테이블 정보
        $this->actions['table'] = "hr_division";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr::admin.employee.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr::admin.employee.table";

        /*


        $this->actions['view_title'] = "jinyerp-hr::admin.division.title";
        $this->actions['view_filter'] = "jinyerp-hr::admin.division.filter";

        */
        $this->actions['view']['list'] = "jinyerp-hr::admin.division.list";
        $this->actions['view']['form'] = "jinyerp-hr::admin.division.form";


    }



}
