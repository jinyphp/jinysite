<?php
namespace Jiny\Erp\Hr\Credentials\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class CredentialsController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_credentials";

        // 컨트롤러 페이지 레이아웃
        $this->actions['view']['layout'] = "jinyerp-hr-home::layouts.layout";

        // 테이블 레이아웃
        //$this->actions['view']['table'];

        $this->actions['view']['title'] = "jinyerp-hr-credentials::credentials.title";
        //$this->actions['view']['filter'] = "jinyerp-hr-credentials::user.bank.filter";
        $this->actions['view']['list'] = "jinyerp-hr-credentials::credentials.list";
        $this->actions['view']['form'] = "jinyerp-hr-credentials::credentials.form";

    }



}
