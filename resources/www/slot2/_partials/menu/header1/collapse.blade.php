<ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem" data-bs-popper="static">
    @foreach($rows as $i => $item)
        @if(isset($item['items']))
        <li class="dropend">
            <div class="dropdown-item dropdown-toggle d-flex gap-2"
                role="button" data-bs-toggle="dropdown"
                data-bs-trigger="hover" aria-expanded="false">

                <a class="" href="#!" style="text-decoration-line: none; color:#000;">{{$item['title']}}</a>

                @if($design_mode)
                <x-click wire:click="edit('{{$ref}}-{{$i}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </x-click>
                @endif
            </div>

            <ul class="dropdown-menu">
                @foreach($item['items'] as $k => $sub)
                <li>
                    <div class="d-flex">
                        @if(isset($sub['href']))
                        <a class="dropdown-item" href="{{$sub['href']}}"
                        style="text-decoration-line: none; color:#000;">
                            {{$sub['title']}}
                        </a>
                        @else
                        <a class="dropdown-item" href="javascript:void(0);"
                        style="text-decoration-line: none; color:#000;">
                            {{$sub['title']}}
                        </a>
                        @endif

                        @if($design_mode)
                        <x-click wire:click="edit('{{$ref}}-{{$i}}-{{$k}}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </x-click>
                        @endif
                    </div>

                </li>
                @endforeach
                {{-- <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li> --}}
            </ul>

        </li>
        @else
        <li>
            <div class="d-flex">
                @if(isset($item['href']))
                <a class="dropdown-item" href="{{$item['href']}}"
                    style="text-decoration-line: none; color:#000;">
                    {{$item['title']}}
                </a>
                @else
                <a class="dropdown-item" href="javascript:void(0);"
                    style="text-decoration-line: none; color:#000;">
                    {{$item['title']}}
                </a>
                @endif

                @if($design_mode)
                <x-click wire:click="edit('{{$ref}}-{{$i}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </x-click>
                @endif
            </div>
        </li>
        @endif
    @endforeach

    @if($design_mode)
    <li class="dropdown-item">
        <x-click wire:click="create('{{$ref}}')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
            </svg>
        </x-click>
    </li>
    @endif


  </ul>
