<x-www-layout>

    <!-- Section -->
    <section class="py-5">
        <div class="container px-5">
            <h1>HR System</h1>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-3">
                @includeIf("jinyerp-hr::leftmenu")

            </div>
            <main class="col-9">
                <!-- 출퇴근 처리-->
                <x-flex-between class="align-items-center">
                    {{-- 출퇴근 컴포넌트 --}}
                    @livewire('ErpHr-work-status')

                    {{-- 현재시간 표시 --}}
                    <x-js-datetime/>
                </x-flex-between>


                <x-card>
                    <x-card-header>
                        <a href="/hr/worktime">출퇴근</a>
                    </x-card-header>
                    <x-card-body>






                    </x-card-body>
                </x-card>




                <x-row>
                    <x-col-6>
                        <x-card>
                            <x-card-header>HR QNA</x-card-header>
                            <x-card-body>

                                {{-- @livewire('DashTable',[
                                    'controller'=>\Jiny\Hr\Http\Controllers\Admin\QnaController::class
                                ]) --}}

                            </x-card-body>
                        </x-card>
                    </x-col-6>
                    <x-col-6>
                        <x-card>
                            <x-card-header>HR FAQ</x-card-header>
                            <x-card-body>

                                {{-- @livewire('DashTable',[
                                    'controller'=>\Jiny\Hr\Http\Controllers\Admin\FaqController::class
                                ]) --}}

                            </x-card-body>
                        </x-card>
                    </x-col-6>
                </x-row>

                {{-- Admin Rule Setting --}}
                {{-- @include('jinytable::setActionRule') --}}

            </main>
        </div>

    </div>

</x-www-layout>
