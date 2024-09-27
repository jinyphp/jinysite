@once
<style>
    .jiny-sidebar-item {
        font-weight: 400;
        font-size: 0.875rem;
        color: rgba(233, 236, 239, 0.5);
        background-color: #222E3C;
        /* padding: 0.625rem 1.625rem; */
        text-decoration: none;
    }
    .jiny-sidebar-item:hover {
        color: rgba(233, 236, 239, 0.75);
        text-decoration: none;
    }
</style>
@endonce

<style>
    .jiny-side-menu {
        padding: 10px 0px;
        font-size: 1rem;s
    }

    .jiny-side-menu ul {
        padding-left: 20px;
        padding-right: 10px;
        list-style-type: none;
    }

    .jiny-side-menu li {
        padding: 6px 0px;
        font-size: 1rem;
        /* font-size: 0.9375rem; */
    }

    .jiny-side-menu li i {
        font-size: 1.1rem;
    }

    .jiny-side-menu ul ul li {
        padding: 8px 0 0 0;
        font-size: 0.9rem;
    }

    .jiny-side-menu .menu-title {
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
        margin-left: 10px;
        transition: transform 0.3s ease;
    }

    /* When the collapse is open (aria-expanded="true"), rotate the arrow up */
    a[aria-expanded="true"] + .collapse-icon {
        transform: rotate(0deg); /* Rotate arrow up */
    }

    /* When the collapse is closed (aria-expanded="false"), keep the arrow pointing down */
    a[aria-expanded="false"] + .collapse-icon {
        transform: rotate(90deg); /* Default arrow down */
    }
</style>

<div class="jiny-side-menu">
    <ul
    style="list-style-type: none; padding-left: 1rem;">
    @if(isset($rows['items']) && count($rows['items'])>0)
        @includeIf(inThemePartial("menus.style1.node"),[
            'ref' => "",
            'rows' => $rows['items']])
    @else
    <li>등록된 메뉴가 없습니다.</li>
    @endif

    @if($design_mode)
    <li>
        <x-click wire:click="create('0')" class="jiny-sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
            </svg>
        </x-click>
    </li>
    @endif
</ul>

</div>
