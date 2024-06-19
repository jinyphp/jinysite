<?php
namespace Jiny\Erp\Hr\Work\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class WorkTypeController extends WireTablePopupForms
{

    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_worktype";

        // 컨트롤러 페이지 레이아웃
        // $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];

        $this->actions['view']['filter'] = "jinyerp-hr-work::admin.worktime.filter";
        $this->actions['view']['list'] = "jinyerp-hr-work::admin.worktype.list";
        $this->actions['view']['form'] = "jinyerp-hr-work::admin.worktype.form";

        // $this->actions['validate'] = [
        //     'title' => "required"
        // ];

        $this->actions['title'] = "근무유형";
        $this->actions['subtitle'] = "기업에서 다양한 유형의 근무방식을 설정하고 관리할 수 있습니다.";
        // $this->actions['view']['title'] = "jinyerp-hr-work::admin.worktime.title";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");



    }






}
