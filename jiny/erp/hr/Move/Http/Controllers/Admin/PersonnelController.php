<?php
namespace Jiny\Hr\Move\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\Table\Http\Controllers\ResourceController;
class PersonnelController extends ResourceController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_personnel";

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";

        $this->actions['view_title'] = "jinyerp-hr::admin.personnel.title";
        $this->actions['view_list'] = "jinyerp-hr::admin.personnel.list";
        $this->actions['view_form'] = "jinyerp-hr::admin.personnel.form";

        //$this->rules['nested']['table'] = "hr_employee";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");
    }




}
