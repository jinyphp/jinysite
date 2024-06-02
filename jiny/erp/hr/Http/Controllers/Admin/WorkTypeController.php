<?php
namespace Jiny\Erp\Hr\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\LiveController;
class WorkTypeController extends LiveController
{

    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_worktype";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr::admin.employee.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr::admin.employee.table";

        //$this->actions['view']['title'] = "jinyerp-hr::admin.worktype.title";
        $this->actions['view']['list'] = "jinyerp-hr::admin.worktype.list";
        $this->actions['view']['form'] = "jinyerp-hr::admin.worktype.form";

        $this->actions['validate'] = [
            'title' => "required"
        ];



    }






}
