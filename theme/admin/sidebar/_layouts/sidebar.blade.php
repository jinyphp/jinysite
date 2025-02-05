<nav id="sidebar" class="sidebar js-sidebar">

        <a class='d-flex justify-content-center border-bottom border-gray-900 sidebar-brand'
            href='/admin'>
            <span class="sidebar-brand-text align-middle">
                JinyPHP
                <sup><small class="badge bg-primary text-uppercase">Admin</small></sup>
            </span>
        </a>

        <style>

            /* Custom scrollbar styling */
            .jiny-sidebar-scroll::-webkit-scrollbar {
                width: 6px;
            }

            .jiny-sidebar-scroll::-webkit-scrollbar-track {
                background: transparent;
            }

            .jiny-sidebar-scroll::-webkit-scrollbar-thumb {
                background-color: #adb5bd; /* Scrollbar color */
                border-radius: 10px; /* Rounded edges */
                border: 2px solid transparent; /* Optional: space around the thumb */
            }
        </style>
        <div style="height: 100vh;overflow-y: auto;" class="jiny-sidebar-scroll">

            @livewire('site-widget-menu',[
                'code' => "admin_hyper",
                'key' => "side",
                'widget_path' => "side_menu",
                'viewFile' => inThemePartial("menus.style1.layout")
            ])
        </div>

</nav>
