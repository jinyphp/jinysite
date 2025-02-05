@foreach ($rows['items'] as $key => $item)
<div class="flex-fill">
    <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2"
        href="javascript:void(0);">
        <span class="animate-target">
            {{ $item['title'] }}
        </span>
    </a>

    @if($design_mode)
    <x-click wire:click="edit('{{ $ref }}-{{ $key }}')">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-node-plus" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
        </svg>
    </x-click>
    @endif

    @if (isset($item['items']))
        <ul class="nav flex-column gap-2 mt-0">
            @foreach ($item['items'] as $j => $sub)
                <li class="d-flex w-100 pt-1 gap-2">

                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                        href="javascript:void(0);">
                        {{ $sub['title'] }}
                    </a>

                    @if($design_mode)
                    <x-click wire:click="edit('{{ $ref }}-{{ $key }}-{{ $j }}')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                        </svg>
                    </x-click>
                    @endif
                </li>
            @endforeach

            @if($design_mode)
            <li class="d-flex w-100 pt-1 gap-2">
                <x-click wire:click="create('{{ $ref }}-{{ $key }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-node-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                    </svg>
                </x-click>
            </li>
            @endif
        </ul>
    @endif
</div>
@endforeach
