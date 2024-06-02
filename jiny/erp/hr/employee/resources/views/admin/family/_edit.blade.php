<x-theme theme="admin.sidebar2">
    <x-theme-layout>
        <!-- start page title -->
        <x-row >
            <x-col class="col-8">
                <div class="page-title-box">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hr</a></li>
                        <li class="breadcrumb-item active">Employee Family</li>
                    </ol>

                    <div class="mb-3">
                        <h1 class="align-middle h3 d-inline">부양가족 등록</h1>
                        <p>

                        </p>
                    </div>
                </div>
            </x-col>
        </x-row>
        <!-- end page title -->

        <x-row>
            <x-col-2>
                <x-card>
                    {{$nested->name}}
                </x-card>
            </x-col-2>
            <x-col-8>
                @livewire('nested-form', ['rules'=>$rules])
            </x-col-8>
            <x-col-2>
                <x-list>
                    <x-list-item>
                        부양가족
                    </x-list-item>
                    <x-list-item>
                        급여설정
                    </x-list-item>
                </x-list>
            </x-col-2>
        </x-row>



    </x-theme-layout>
</x-theme>

