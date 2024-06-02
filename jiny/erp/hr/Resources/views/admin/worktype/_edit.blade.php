<x-theme theme="admin.sidebar2">
    <x-theme-layout>
        <!-- start page title -->
        <x-row >
            <x-col class="col-8">
                <div class="page-title-box">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="/hr">Hr</a></li>
                        <li class="breadcrumb-item"><a href="/hr/admin">Admin</a></li>
                        <li class="breadcrumb-item active">WorkType</li>
                    </ol>

                    <div class="mb-3">
                        <h1 class="align-middle h3 d-inline">근무형태</h1>
                        <p>
                            출퇴근 근무형태를 지정합니다.
                        </p>
                    </div>
                </div>
            </x-col>
        </x-row>
        <!-- end page title -->

        <x-row>
            <x-col>
                @livewire('HrForm', ['actions'=>$actions])
            </x-col>
        </x-row>



    </x-theme-layout>
</x-theme>

