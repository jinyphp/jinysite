<?php
namespace Jiny\Erp\Hr\Employee\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

use Jiny\WireTable\Http\Controllers\LiveController;
class LicenseController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_license";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr::user.worktime.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr::user.worktime.table";

        $this->actions['view']['title'] = "jinyerp-hr-employee::user.license.title";
        //$this->actions['view']['filter'] = "jinyerp-hr-employee::user.license.filter";
        $this->actions['view']['list'] = "jinyerp-hr-employee::user.license.list";
        $this->actions['view']['form'] = "jinyerp-hr-employee::user.license.form";

        //$this->rules['nested']['table'] = "hr_employee";


    }

    ## index 데이터 패치전 후킹동작
    public function hookIndexing($wire)
    {
        if($row = cUserEmployee()) {
            // 제한 조건 설정
            $wire->DB()->where('employee', 'like', $row->id.":%");
            return false;
        }

        return view("jinytable::error.message",[
            'message'=>"오류가 있습니다."
        ]);
    }

    public function hookCreating($wire, $value)
    {
        if($row = cUserEmployee()) {
            $wire->form['employee'] = $row->id.":".$row->name;
            $wire->form['employee_id'] = $row->id;
        }
    }


}
