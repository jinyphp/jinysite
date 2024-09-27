{{-- nav-link  --}}
<a href="#" class="dropdown-toggle active" aria-current="page" role="button"
    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false"
    style="text-decoration-line: none; color:#000;">
    {{$rows['title']}}
</a>

<ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
    @foreach($rows['items'] as $item)
    <li class="hover-effect-opacity px-2 mx-n2">
        <a class="dropdown-item d-block mb-0" href="home-electronics">
            <span class="fw-medium">{{$item['title']}}</span>
            <span class="d-block fs-xs text-body-secondary">
                {{$item['description']}}
            </span>
            {{-- <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">

                <img class="position-relative z-2 d-none-dark"
                    src="assets/img/mega-menu/demo-preview/electronics-light.jpg"
                    alt="Electronics Store">



                    <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>

                    <span
                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
            </div> --}}
        </a>
    </li>
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

