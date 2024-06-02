<x-row >
    <x-col class="col-8">
        <div class="page-title-box">
            <ol class="m-0 breadcrumb">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Hr</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                <li class="breadcrumb-item active">Worktype</li>
            </ol>

            <div class="mb-3">
                <h1 class="align-middle h3 d-inline">
                    @if (isset($actions['title']))
                        {{$actions['title']}}
                    @endif
                </h1>
                <p>
                    근무유형
                </p>
            </div>
        </div>
    </x-col>
</x-row>
