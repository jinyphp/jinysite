<?php
namespace Jiny\Erp\Hr\Issue\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminFaqController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "hr_faq"; // 테이블 정보

        // 컨트롤러 페이지 레이아웃
        //$this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";

        $this->actions['view']['filter'] = "jinyerp-hr-issue::admin.faq.filter";
        $this->actions['view']['list'] = "jinyerp-hr-issue::admin.faq.list";
        $this->actions['view']['form'] = "jinyerp-hr-issue::admin.faq.form";

        $this->actions['title'] = "HR FAQ";
        $this->actions['subtitle'] = "우리회사 HR과 관련된 잦은 질문들을 관리합니다.";
        // $this->actions['view']['title'] = "jinyerp-hr-issue::admin.faq.title";

        // 테마를 적용합니다.
        $this->setTheme("jinyerp/hr-admin");



    }







    /**
     * DashBaord
     */

    public function dashboard()
    {
        $DB = DB::table($this->actions['table']);
        $rows = $DB->orderBy('id',"desc")->paginate(5);

        return view("jinyerp-hr::admin.faq.dash")
            ->with('rows', $rows);
    }


}
