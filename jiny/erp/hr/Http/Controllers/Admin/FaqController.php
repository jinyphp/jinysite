<?php

namespace Jiny\Hr\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Jiny\Table\Http\Controllers\ResourceController;
class FaqController extends ResourceController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "hr_faq"; // 테이블 정보

        $this->actions['view_title'] = "jinyerp-hr::admin.faq.title";
        $this->actions['view_filter'] = "jinyerp-hr::admin.faq.filter";
        $this->actions['view_list'] = "jinyerp-hr::admin.faq.list";
        $this->actions['view_form'] = "jinyerp-hr::admin.faq.form";



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
