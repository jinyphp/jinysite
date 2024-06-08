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
