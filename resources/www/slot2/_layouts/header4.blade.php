<header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element="">
    <div class="container">

      <!-- Mobile offcanvas menu toggler (Hamburger) -->
      <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar brand (Logo) -->
      <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="index.html">
        {{ info('brand') }}
      </a>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
        <div class="offcanvas-header py-3">
          <h5 class="offcanvas-title" id="navbarNavLabel">Browse</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">


          <!-- Navbar TopMenu -->
          @livewire('site-widget-menu', [
            'code' => 'menu',
            'widget_path' => 'topmenu',
            'viewFile' => inSlotPartial('menu.header4' . '.layout'),
            ])

        </div>

      </nav>

      <!-- Button group -->
      {{-- <div class="d-flex gap-sm-1">

        <!-- Theme switcher (light/dark/auto) -->
        <div class="dropdown">
          <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 animate-scale" data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false" aria-label="Toggle theme (light)">
            <span class="theme-icon-active d-flex animate-target">
              <i class="fi-sun"></i>
            </span>
          </button>
          <ul class="dropdown-menu start-50 translate-middle-x" style="--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem">
            <li>
              <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                <span class="theme-icon d-flex fs-base me-2">
                  <i class="fi-sun"></i>
                </span>
                <span class="theme-label">Light</span>
                <i class="item-active-indicator fi-check ms-auto"></i>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                <span class="theme-icon d-flex fs-base me-2">
                  <i class="fi-moon"></i>
                </span>
                <span class="theme-label">Dark</span>
                <i class="item-active-indicator fi-check ms-auto"></i>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                <span class="theme-icon d-flex fs-base me-2">
                  <i class="fi-auto"></i>
                </span>
                <span class="theme-label">Auto</span>
                <i class="item-active-indicator fi-check ms-auto"></i>
              </button>
            </li>
          </ul>
        </div>

        <!-- Account button -->
        <a class="btn btn-icon btn-outline-secondary fs-lg border-0 animate-shake me-2" href="account-signin.html" aria-label="Sign in to account">
          <i class="fi-user animate-target"></i>
        </a>

        <!-- Join button  -->
        <a class="btn btn-primary animate-scale" href="add-contractor-location.html">
          <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
          Join<span class="d-none d-xl-inline ms-1">Pro Network</span>
        </a>
      </div> --}}
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
  </header>
