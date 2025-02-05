<!-- Navigation bar (Page header) -->
<header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0"
data-sticky-navbar='{"offset": 500}'>

    <div class="container py-2 py-lg-3">

        <div class="d-flex align-items-center gap-3">
            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Navbar brand (Logo) -->

        <x-www_navbar-brand>
           {{ info('brand') }}
        </x-www_navbar-brand>

        <!-- Button group -->
        <div class="d-flex align-items-center">

            <div class="d-flex align-items-center gap-2">
                <!-- Account button visible on screens > 768px wide (md breakpoint) -->
                @if(Auth::check())
                <a class="d-none d-md-inline-flex text-decoration-none text-body"
                    href="/home">
                    {{Auth::user()->name}}
                </a>
                @else
                <a class="d-none d-md-inline-flex text-decoration-none text-body"
                    href="/login">
                    로그인
                </a>
                @endif

                <span class="d-none d-md-inline-flex text-decoration-none text-gray-200">|</span>

                <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
                @if(Auth::check())
                <a class="d-none d-md-inline-flex text-decoration-none text-red-500"
                    href="/logout">
                    Logout
                </a>
                @else
                <a class="d-none d-md-inline-flex text-decoration-none text-body"
                    href="/regist">
                    회원가입
                </a>
                @endif
            </div>

            <!-- Navbar stuck nav toggler -->
            <button type="button" class="navbar-toggler d-none navbar-stuck-show ms-3" data-bs-toggle="collapse"
                data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false"
                aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
            </button>



        </div>
    </div>


    {{-- 헤더 두번째줄 카테고리, 메뉴, 검색 출력 --}}
    <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
    <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title" id="navbarNavLabel">
                    {{ \Jiny\Site\Header('brand') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body pt-1 pb-3 py-lg-0">
                <div class="container pb-lg-2 px-0 px-lg-3">

                    <div class="position-relative d-lg-flex align-items-center justify-content-between">


                        @livewire('site-widget-menu', [
                            'code' => 'category',
                            'widget_path' => 'category',
                            'viewFile' => inSlotPartial('menu.category1' . '.layout'),
                        ])


                        <!-- Navbar TopMenu -->
                        @livewire('site-widget-menu', [
                            'code' => 'menu',
                            'widget_path' => 'topmenu',
                            'viewFile' => inSlotPartial('menu.header1' . '.layout'),
                        ])


                        <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
                        @livewire('site-screen')



                    </div>
                </div>
            </div>

            <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
            <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
                <div class="nav nav-justified w-100">
                    @if(Auth::check())
                    <a class="nav-link border-end" href="/home">
                        <i class="ci-user fs-lg opacity-60 me-2"></i>
                        마이홈
                    </a>
                    @else
                    <a class="nav-link border-end" href="/login">
                        <i class="ci-user fs-lg opacity-60 me-2"></i>
                        로그인
                    </a>
                    @endif

                    @if(Auth::check())
                    <a class="nav-link" href="/logout">
                        <i class="ci-heart fs-lg opacity-60 me-2"></i>
                        로그아웃
                    </a>
                    @else
                    <a class="nav-link" href="/regist">
                        <i class="ci-heart fs-lg opacity-60 me-2"></i>
                        회원가입
                    </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>


</header>
