<?php
namespace Jiny\Erp\Hr\Home\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function __construct()
    {
    }


    public function index(Request $request)
    {
        $viewFile = "jinyerp-hr-home"."::admin.dashboard";
        return view($viewFile);
    }

}
