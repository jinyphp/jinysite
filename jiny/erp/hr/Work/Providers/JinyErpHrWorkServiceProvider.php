<?php
namespace Jiny\Erp\Hr\Work\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

use Livewire\Livewire;

class JinyErpHrWorkServiceProvider extends ServiceProvider
{
    private $package = "jinyerp-hr-work";

    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        // 데이터베이스
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');



    }

    public function register()
    {

        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {
            // 출퇴근 기록
            Livewire::component('ErpHr-GoToWork',
                \Jiny\Erp\Hr\Work\Http\Livewire\GoToWork::class);

            // 출퇴근 기록
            Livewire::component('ErpHr-WorkStatus',
                \Jiny\Erp\Hr\Work\Http\Livewire\WorkStatus::class);
        });
    }
}
