<?php

namespace Jiny\Erp\Hr\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

use Jiny\WireTable\Http\Controllers\LiveController;
class WorkTimeController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        //dd($this->actions);

        ## 테이블 정보
        $this->actions['table'] = "hr_worktime";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr::user.worktime.layout";

        // 테이블 레이아웃
        $this->actions['view']['table'] = "jinyerp-hr::user.worktime.table";
        $this->actions['view']['list'] = "jinyerp-hr::user.worktime.list";

        /*
        $this->actions['view_title'] = "jinyerp-hr::user.worktime.title";

        $this->actions['view_filter'] = "jinyerp-hr::user.worktime.filter";
        */

        $this->actions['view']['form'] = "jinyerp-hr::user.worktime.form";

        // 데이터추가 폼을 비활성화 합니다.
        $this->createDisable();

        // 선택 삭제기능을 비활성화 합니다.
        $this->checkDeleteDisable();

        // 수정기능 비활성화
        $this->editDisable();

    }




    ## index 데이터 패치전
    public function hookIndexing($wire)
    {
        /*
        if($row = cUserEmployee()) {
            // 제한 조건 설정
            $wire->DB()->where('employee', 'like', $row->id.":%");
            return false;
        }

        return view("jinytable::error.message",[
            'message'=>"오류가 있습니다."
        ]);
        */
        return false;
    }

    public function hookIndexed($wire, $rows)
    {
        foreach($rows as &$item) {

            if($item->status == "off") {
                $item->status = "퇴근";
            } else if($item->status == "go") {
                $item->status = "출근";
            }

        }

        return $rows;
    }


    public function hookCreating($wire, $value)
    {
        /*
        if($row = cUserEmployee()) {
            $wire->form['employee'] = $row->id.":".$row->name;
            $wire->form['employee_id'] = $row->id;
        }
        */
    }

}
