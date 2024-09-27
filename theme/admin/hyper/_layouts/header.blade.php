<div class="navbar-custom topnav-navbar">
    <div class="container-fluid detached-nav">

        <!-- Topbar Logo -->
        <div class="logo-topbar">
            <!-- Logo light -->
            <a href="/" class="logo-light">
                <span class="logo-lg">
                    <img src="/assets/images/logo.png" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="/assets/images/logo-sm.png" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="/" class="logo-dark">
                <span class="logo-lg">
                    <img src="/assets/images/logo-dark.png" alt="dark logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                </span>
            </a>
        </div>

        <!-- Sidebar Menu Toggle Button -->
        <button class="button-toggle-menu">
            <i class="mdi mdi-menu"></i>
        </button>



        <!-- Horizontal Menu Toggle Button -->
        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <x-theme-header-menu>

        </x-theme-header-menu>

        <!-- Topbar Search Form -->
        <x-theme-header-search></x-theme-header-search>
    </div>
</div>
