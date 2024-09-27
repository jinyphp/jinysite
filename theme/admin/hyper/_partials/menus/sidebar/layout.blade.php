<style>
    .menu-link {
        color:#8391a2;
    }
    .menu-link:hover {
        color:#A1B1C5;
    }

    .jiny-side-nav ul {
        padding-left: 20px;
        padding-right: 10px;
        list-style-type: none;
    }

    .jiny-side-nav li {
        padding: 10px 0px;
        font-size: 1rem;
        /* font-size: 0.9375rem; */
    }

    .jiny-side-nav li i {
        font-size: 1.1rem;
    }





    .jiny-nav-second li {
        padding: 8px 0 0 0;
        font-size: 0.9rem;
    }


    .jiny-side-nav .side-nav-title {
        padding: 12px 0px;
        letter-spacing: 0.05em;
        pointer-events: none;
        cursor: default;
        font-size: 0.6875rem;
        text-transform: uppercase;
        color: var(--ct-menu-item);
        font-weight: 700;
    }

    .collapse-icon {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        /* When the collapse is open (aria-expanded="true"), rotate the arrow up */
        a[aria-expanded="true"] + .collapse-icon {
            transform: rotate(90deg); /* Rotate arrow up */
        }

        /* When the collapse is closed (aria-expanded="false"), keep the arrow pointing down */
        a[aria-expanded="false"] + .collapse-icon {
            transform: rotate(0deg); /* Default arrow down */
        }

    /*
    .jiny-side-nav .side-nav-link {
        color: var(--ct-menu-item);
        display: block;
        padding: 10px 30px;
        font-size: 0.9375rem;
        position: relative;
        -webkit-transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        list-style: none;
        }
        .jiny-side-nav .side-nav-link:hover,
        .jiny-side-nav .side-nav-link:focus,
        .jiny-side-nav .side-nav-link:active {
            color: var(--ct-menu-item-hover);
            text-decoration: none;
        }
        .jiny-side-nav .side-nav-link span {
            vertical-align: middle;
        }
        .jiny-side-nav .side-nav-link i {
            display: inline-block;
            line-height: 1.0625rem;
            margin: 0 10px 0 0;
            font-size: 1.1rem;
            vertical-align: middle;
            width: 20px;
        }
            */

</style>

{{-- side-nav --}}
<div class="jiny-side-nav">
    <ul>

        @foreach($rows['items'] as $i => $item)
            {{-- header --}}
            @if(isset($item['header']) && $item['header'])
                @includeIf(inThemePartial("menus.sidebar".".header"), [
                    'item' => $item
                ])

            {{-- 서브메뉴 --}}
            @elseif(isset($item['items']))
                @includeIf(inThemePartial("menus.sidebar".".sub"), [
                    'ref' => $ref."-".$i,
                    'item' => $item
                ])
            @else
            <li class="side-nav-item">
                @includeIf(inThemePartial("menus.sidebar".".item"), [
                    'ref' => $ref."-".$i,
                    'item' => $item
                ])
            </li>
            @endif
        @endforeach

        <li class="side-nav-item">
            <x-click wire:click="create('0')" class="side-nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                </svg>
            </x-click>
        </li>




    </ul>
</div>

