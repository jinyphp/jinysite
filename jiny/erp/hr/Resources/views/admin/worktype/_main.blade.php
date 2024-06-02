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

        <div class="relative">
            <div class="absolute right-0 bottom-4">
                <div class="btn-group">
                    <a href="#" class="btn btn-secondary">메뉴얼</a>
                    <a href="{{route($actions['routename'].".create")}}" class="btn btn-primary">신규추가</a>
                </div>
            </div>
        </div>



        @livewire('BootstrapTable', ['actions'=>$actions])

        <x-modal-button success data-bs-target="#pupupFormLarge" wire:click="$emit('create')">
            new
        </x-modal-button>
        @livewire('BootstrapPopup', ['actions'=>$actions])
    </x-theme-layout>
</x-theme>
