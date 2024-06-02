<x-theme theme="admin.sidebar2">
    <x-theme-layout>
        <!-- start page title -->
        <x-row >
            <x-col class="col-8">
                <div class="page-title-box">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hr</a></li>
                        <li class="breadcrumb-item active">Family</li>
                    </ol>

                    <div class="mb-3">
                        <h1 class="align-middle h3 d-inline">부양가족</h1>
                        <p>

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

                    @if (isset($rules['nested']))
                        <a href="{{route($rules['routename'].".create", $rules['nested']['id'])}}" class="btn btn-primary">신규추가</a>
                    @else
                        <a href="{{route($rules['routename'].".create")}}" class="btn btn-primary">신규추가</a>
                    @endif

                </div>
            </div>
        </div>

        <x-row>
            <x-col-3>
                <x-card class="h-100">
                    {{$nested->name}}
                </x-card>
            </x-col-3>
            <x-col-9>
                <x-card class="h-100">
                    <x-card-header>

                    </x-card-header>
                    <x-card-body>
                        @livewire('nested-table', ['rules'=>$rules])
                    </x-card-body>

                    <x-card-footer>
                        <x-button danger id="selected-delete" disabled>선택삭제</x-button>
                    </x-card-footer>
                </x-card>
            </x-col-9>
        </x-row>

    </x-theme-layout>
</x-theme>
