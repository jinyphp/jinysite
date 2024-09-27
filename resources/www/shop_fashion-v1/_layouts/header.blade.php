<!-- Navigation bar (Page header) -->
<header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0" data-sticky-navbar='{"offset": 500}'>
    <div class="container py-2 py-lg-3">
        <div class="d-flex align-items-center gap-3">

            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Country slect visible on screens > 768px wide (md breakpoint) -->
            {{-- <x-www_nav-country>
        </x-www_nav-country> --}}
            @livewire('site-country')

            <!-- City slect visible on screens > 768px wide (md breakpoint) -->
            {{-- <x-www_nav-city>
        </x-www_nav-city> --}}
            @livewire('site-location')
        </div>

        <!-- Navbar brand (Logo) -->

        <x-www_navbar-brand>
            {{ \Jiny\Site\Header('brand') }}
        </x-www_navbar-brand>

        <!-- Button group -->
        <div class="d-flex align-items-center">

            <!-- Navbar stuck nav toggler -->
            <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse"
                data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false"
                aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Theme switcher (light/dark/auto) -->
            <div class="dropdown">
                <button type="button"
                    class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                    {{-- <span class="theme-icon-active d-flex animate-target">
                        <i class="ci-sun"></i>
                    </span> --}}
                    <i class="ci-user animate-target"></i>
                    <span class="visually-hidden">Account</span>
                </button>
                <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                    <li>
                        {{-- <button type="button" class="dropdown-item active" data-bs-theme-value="light"
                            aria-pressed="true">
                            <span class="theme-icon d-flex fs-base me-2">
                                <i class="ci-sun"></i>
                            </span>
                            <span class="theme-label">Light</span>
                            <i class="item-active-indicator ci-check ms-auto"></i>
                        </button> --}}
                        <a href="/login" class="dropdown-item">
                            <span class="theme-icon d-flex fs-base me-2">
                                <i class="ci-sun"></i>
                            </span>
                            <span class="theme-label">Login</span>
                            {{-- <i class="item-active-indicator ci-check ms-auto"></i> --}}
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="dropdown-item">
                            <span class="theme-icon d-flex fs-base me-2">
                                <i class="ci-log-out fs-base opacity-75"></i>
                            </span>
                            <span class="theme-label">Logout</span>
                            {{-- <i class="item-active-indicator ci-check ms-auto"></i> --}}
                        </a>
                    </li>
                    <li>
                        <a href="/admin" class="dropdown-item">
                            <span class="theme-icon d-flex fs-base me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                                </svg>
                            </span>
                            <span class="theme-label">Admin</span>
                            {{-- <i class="item-active-indicator ci-check ms-auto"></i> --}}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
            <button type="button"
                class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none"
                data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox"
                aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
            </button>

            <!-- Account button visible on screens > 768px wide (md breakpoint) -->

            {{-- <x-login-link class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Account</span>
            </x-login-link> --}}


            <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
            <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex"
                href="#!">
                <i class="ci-heart animate-target"></i>
                <span class="visually-hidden">Wishlist</span>
            </a>

            <!-- Cart button -->
            <button type="button"
                class="btn btn-icon btn-lg fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale"
                data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart"
                aria-label="Shopping cart">
                <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2"
                    style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                <i class="ci-shopping-bag animate-target me-1"></i>
            </button>
        </div>
    </div>


    {{-- 헤더 두번째줄 카테고리, 메뉴, 검색 출력 --}}
    <x-www_nav-browse>

    </x-www_nav-browse>

</header>
