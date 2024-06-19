<?php
namespace Jiny\Erp\Hr\Leave\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class RequestLeaveController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_request_leave";

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";

        $this->actions['view']['list'] = "jinyerp-hr-leave::admin.request_leave.list";
        $this->actions['view']['form'] = "jinyerp-hr-leave::admin.request_leave.form";

        $this->actions['title'] = "휴가 신청목록";
        $this->actions['subtitle'] = "사원별 신청한 휴가목록을 확인합니다.";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");

    }




}
