<?php
namespace Jiny\Erp\Hr\Home\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\WireTable\Http\Controllers\WireDashController;
class HrHomeUserDashboard extends WireDashController
{
    public function __construct()
    {
        parent::__construct();

        ## 지니ERP 업무관리자 공용 레이아웃
        $this->actions['view']['layout'] = "jinyerp-base::layouts.www_user_dash";
        $this->actions['view']['sidebar'] = "jinyerp-base::layouts.www_user_sidebar"; // 사이드 메뉴

        $this->actions['title'] = "HR 관리";
        $this->actions['subtitle'] = "사원별 HR 업무를 확인합니다.";

        // 데시보드 메인화면
        $this->actions['view']['main'] = "jinyerp-hr-home::users.dash.main";

        // 레이아웃 전환
        $this->setLayout('www');

    }



}
