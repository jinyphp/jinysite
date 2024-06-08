<?php
namespace Jiny\Erp\Hr\Work\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\WireTable\Http\Controllers\SiteDashboard;
class HrUserWorkStatus extends SiteDashboard
{
    public function __construct()
    {
        parent::__construct();

        // 타이틀
        $this->actions['title'] = "HR";
        $this->actions['subtitle'] = "근무상태를 확인합니다.";
        $this->actions['view']['title'] = "jinyerp-hr-work::user.workstatus.title";

        // 메인
        $this->actions['view']['main'] = "jinyerp-hr-work::user.workstatus.main";
    }



}
