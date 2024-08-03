<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Jiny\Site\Http\Controllers\SiteController;
class SiteAboutPage extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        $this->setLayout("jiny-site::www.container");

        // 메인 내용
        $this->actions['view']['main'] []= "jiny-site::site.about";
        $this->actions['view']['main'] []= "jiny-site::site.about2";

    }


}
