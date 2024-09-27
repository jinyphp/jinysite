<div class="wrapper">

    <!-- ========== Topbar Start ========== -->
    {{-- @theme('_partials.topbar') --}}
    <x-theme-header>

    </x-theme-header>
    {{-- @includeIf('theme::admin.hyper._partials.topbar') --}}
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    {{-- @includeIf('theme::admin.hyper._sidebar.sidebar') --}}
    {{-- @theme("_sidebar.sidebar") --}}
    <x-theme-sidebar>

    </x-theme-sidebar>
    <!-- ========== Left Sidebar End ========== -->

    <div class="content-page">
        {{$slot}}

        <!-- Footer Start -->
        <x-theme-footer>

        </x-theme-footer>
    </div>
</div>
