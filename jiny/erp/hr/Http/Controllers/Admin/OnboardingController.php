<?php
namespace Jiny\Erp\Hr\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Jiny\WireTable\Http\Controllers\LiveController;
class OnboardingController extends LiveController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "hr_position";

        $this->actions['view']['layout'] = "jinyerp-hr::admin.onboarding.layout";




    }



}
