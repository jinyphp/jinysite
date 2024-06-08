<?php
namespace Jiny\Erp\Hr\Move\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class PositionMove extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_position_move";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";


        $this->actions['view']['filter'] = "jinyerp-hr::admin.position_move.filter";
        $this->actions['view']['list'] = "jinyerp-hr-move::admin.position_move.list";
        $this->actions['view']['form'] = "jinyerp-hr-move::admin.position_move.form";

        $this->actions['title'] = "직급 발령";
        $this->actions['subtitle'] = "사원의 직급을 변경합니다.";


    }



}
