<?php
namespace Jiny\Erp\Hr\Leave\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class LeaveTypeController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_leave_type";

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";

        $this->actions['view']['list'] = "jinyerp-hr-leave::admin.leave_type.list";
        $this->actions['view']['form'] = "jinyerp-hr-leave::admin.leave_type.form";

        $this->actions['title'] = "휴가목록";
        $this->actions['subtitle'] = "기업에서 제공하는 휴가 목록을 나열합니다.";
        //$this->actions['view']['title'] = "jinyerp-hr-leave::admin.leave_type.title";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");


    }




}