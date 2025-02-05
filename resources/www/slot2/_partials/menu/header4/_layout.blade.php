
{{-- topbar menu layout --}}
<ul class="navbar-nav position-relative me-xl-n5 gap-4">

    {{-- 커스텀 스타일1 --}}
    <li class="d-flex align-items-center gap-2 me-lg-n1 me-xl-0">
        @if($design_mode)
        <div class="pb-lg-2 ">
            <x-click wire:click="edit('-0')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
            </x-click>
        </div>
        @endif

        <div class="nav-item dropdown pb-lg-2 ">
            @includeIf(inSlotPartial("menu.header1".".snap"), [
                'ref' => "0",
                'rows' => $rows['items'][0]
            ])
        </div>
    </li>



    {{-- 커스텀 스타일2 --}}
    <li class="d-flex align-items-center gap-2 me-lg-n1 me-xl-0">
        @if($design_mode)
        <div class="pb-lg-2">
            <x-click wire:click="edit('-2')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
            </x-click>
        </div>
        @endif

        <div class="nav-item dropdown pb-lg-2 ">
            {{-- nav-link  --}}
            <a href="#" class="dropdown-toggle" aria-current="page" role="button"
                data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false"
                style="text-decoration-line: none; color:#000;">
                {{$rows['items'][2]['title']}}
            </a>

            @includeIf(inSlotPartial("menu.header1".".tile"), [
                'ref' => "2",
                'rows' => $rows['items'][2]['items']
            ])
        </div>
    </li>


    {{-- 커스텀 스타일3 --}}
    @for($i=3;$i<count($rows['items']);$i++)
        @if(isset($rows['items'][$i]['items']))
        <li class="d-flex align-items-center gap-2 me-lg-n1 me-xl-0">
            @if($design_mode)
            <div class="pb-lg-2">
                <x-click wire:click="edit('-{{$i}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </x-click>
            </div>
            @endif

            <div class="nav-item dropdown pb-lg-2">
                <a class="dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" data-bs-trigger="hover"
                    data-bs-auto-close="outside" aria-expanded="true"
                    style="text-decoration-line: none; color:#000;">
                    {{$rows['items'][$i]['title']}}
                </a>

                @includeIf(inSlotPartial("menu.header1".".collapse"), [
                            'ref' => $i,
                            'rows' => $rows['items'][$i]['items']
                        ])
            </div>
        </li>
        @else
        <li class="d-flex align-items-center gap-2 me-lg-n1 me-xl-0">
            @if($design_mode)
            <div class="pb-lg-2">
                <x-click wire:click="edit('-{{$i}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </x-click>
            </div>
            @endif

            <div class="nav-item pb-lg-2">
                @if(isset($rows['items'][$i]['href']))
                <a  href="{{$rows['items'][$i]['href']}}" style="text-decoration-line: none; color:#000;">
                    {{$rows['items'][$i]['title']}}
                </a>
                @else
                <a  href="javascript:void(0);" style="text-decoration-line: none; color:#000;">
                    {{$rows['items'][$i]['title']}}
                </a>
                @endif
            </div>
        </li>
        @endif

    @endfor




</ul>
