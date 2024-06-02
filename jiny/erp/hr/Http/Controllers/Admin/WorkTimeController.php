<?php
namespace Jiny\Erp\Hr\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\LiveController;
class WorkTimeController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_worktime";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr::admin.employee.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr::admin.employee.table";

        $this->actions['view']['list'] = "jinyerp-hr::admin.worktime.list";
        $this->actions['view']['form'] = "jinyerp-hr::admin.worktime.form";


    }



}
