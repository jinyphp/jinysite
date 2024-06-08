<?php
namespace Jiny\Erp\Hr\Home\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

use Livewire\Livewire;

class JinyErpHrHomeServiceProvider extends ServiceProvider
{
    private $package = "jinyerp-hr-home";

    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        // 데이터베이스
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // 컴포넌트
        Blade::component($this->package.'::components.'.'js_datetime', 'js-datetime');

    }

    public function register()
    {

        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {
            // 부트스트랩이 이용한 popup
            Livewire::component('BootstrapTable', \Jiny\Hr\Http\Livewire\BootstrapTable::class);
            Livewire::component('BootstrapPopup', \Jiny\Hr\Http\Livewire\BootstrapPopup::class);

            Livewire::component('HrTable', \Jiny\Hr\Http\Livewire\HrTable::class);
            Livewire::component('HrForm', \Jiny\Hr\Http\Livewire\HrForm::class);
            Livewire::component('HrPopup', \Jiny\Hr\Http\Livewire\HrPopup::class);

            //Livewire::component('user-work-time', \Jiny\Hr\Http\Livewire\UserWorkTime::class);



            Livewire::component('user-family', \Jiny\Hr\Http\Livewire\UserFamily::class);
            Livewire::component('user-family-form', \Jiny\Hr\Http\Livewire\UserFamilyForm::class);
        });
    }
}
