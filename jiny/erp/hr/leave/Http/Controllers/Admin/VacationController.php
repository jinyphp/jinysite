<?php
namespace Jiny\Erp\Hr\Leave\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\LiveController;
class VacationController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_vacation";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-leave::admin.vacation.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr-leave::admin.vacation.table";

        //$this->actions['view']['title'] = "jinyerp-hr::admin.vacation.title";
        $this->actions['view']['list'] = "jinyerp-hr-leave::admin.vacation.list";
        $this->actions['view']['form'] = "jinyerp-hr-leave::admin.vacation.form";


    }




}