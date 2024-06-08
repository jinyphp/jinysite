<?php
namespace Jiny\Erp\Hr\Home\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\WireTable\Http\Controllers\DashboardController;
class HrHomeUserDashboard extends DashboardController
{


    public function __construct()
    {
        parent::__construct();

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::users.layout";

        $this->actions['view']['main'] = "jinyerp-hr-home::users.main";

        $this->actions['title'] = "HR";
        $this->actions['subtitle'] = "HR 회사 업무를 신청합니다.";
        $this->actions['view']['title'] = "jinyerp-hr-home::users.title_user";
    }



}
