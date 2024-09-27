<div class="leftside-menu">

    <x-theme-brand>
        {{ \Jiny\Site\Header('brand') }}
    </x-theme-brand>


    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button"
        class="btn button-sm-hover p-0"
        data-bs-toggle="tooltip"
        data-bs-placement="right"
        title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!-- Leftbar User -->
        {{-- <div class="leftbar-user">
            <a href="pages-profile">
                <img src="/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                    class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div> --}}

        @livewire('site-widget-menu',[
            'code' => "admin_hyper",
            'widget_path' => "side_menu",
            'viewFile' => inThemePartial("menus.style1.layout")
        ])

{{-- inSlotPartial("menu.footer1.layout") --}}

        <!--- Sidemenu -->
        {{-- @theme("_partials/menus/sidebar/layout") --}}
        <!--- End Sidemenu -->


        <!-- Help Box -->
        {{-- <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
        </div> --}}
        <!-- end Help Box -->

        <div class="clearfix"></div>
    </div>
</div>
