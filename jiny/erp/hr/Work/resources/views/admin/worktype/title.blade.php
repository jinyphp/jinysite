<div class="page-title-box">
    <ol class="m-0 breadcrumb">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Hr</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
        <li class="breadcrumb-item active">Worktype</li>
    </ol>

    <div class="mb-3">
        <x-flex class="align-items-center gap-2">
            <h1 class="align-middle h3 d-inline">
                @if (isset($actions['title']))
                {{$actions['title']}}
                @endif
            </h1>
            <x-badge-primary>Admin</x-badge-primary>
        </x-flex>
        <p>
        </p>
    </div>

</div>
