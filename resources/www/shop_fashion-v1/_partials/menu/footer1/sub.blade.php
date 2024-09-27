<div class="accordion-item col border-0">
    <h6 class="accordion-header" id="categoriesHeading">
        <div class="d-flex gap-2">
            <span class="text-dark-emphasis d-none d-sm-block">
                {{$item['title']}}
            </span>

            {{-- 메뉴 수정 --}}
            @if($design_mode)
            <x-click wire:click="edit('{{$ref}}-{{$i}}')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
            </x-click>
            @endif
        </div>
        <button type="button" class="accordion-button collapsed py-3 d-sm-none"
            data-bs-toggle="collapse"
            data-bs-target="#menu-{{$code}}-{{$ref}}-{{$i}}"
            aria-expanded="false"
            aria-controls="menu-{{$code}}-{{$ref}}-{{$i}}">
            {{$item['title']}}
        </button>
    </h6>

    <div class="accordion-collapse collapse d-sm-block"
        id="menu-{{$code}}-{{$ref}}-{{$i}}"
        aria-labelledby="categoriesHeading"
        data-bs-parent="#footerLinks">
        <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
            @if(isset($item['items']))
                @includeIf(inSlotPartial("menu.footer1".".item"),[
                    'ref' => $ref."-".$i,
                    'rows' => $item['items']
                ])
            @endif

            @if($design_mode)
            <li class="d-flex w-100 pt-1">
                <x-click wire:click="create('{{$ref}}-{{$i}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                    </svg>
                </x-click>
            </li>
            @endif

        </ul>
    </div>
    <hr class="d-sm-none my-0">
</div>
