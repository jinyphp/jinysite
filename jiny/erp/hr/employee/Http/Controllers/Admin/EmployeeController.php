<?php
namespace Jiny\Erp\Hr\Employee\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class EmployeeController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_employee";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        // $this->actions['view']['table']";

        $this->actions['view']['list'] = "jinyerp-hr::admin.employee.list";
        $this->actions['view']['form'] = "jinyerp-hr::admin.employee.form";


        // $this->actions['view']['title'] = "jinyerp-hr::admin.employee.title";
        // $this->actions['view']['filter'] = "jinyerp-hr::admin.employee.filter";
        //
        //
    }


    public function hookStoring($wire, $form)
    {
        // 이메일 매칭, 회원 번호 입력
        if(isset($form['email']) && $form['email']) {
            $row = DB::table('users')->where('email', $form['email'])->first();
            if($row) {
                $form['user'] = $row->id.":".$row->name;
                $form['user_id'] = $row->id;
            }
        }

        return $form;
    }

    /** ----- ----- ----- ----- -----
     *  liewire call method
     */

    public function division($wire, $args)
    {
        $div = explode(':',$args[0]);
        $wire->filter['division'] = $div[1];
    }
}
