<!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
<div class="collapse navbar-stuck-hide" id="stuckNav">
  <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
    <div class="offcanvas-header py-3">
      <h5 class="offcanvas-title" id="navbarNavLabel">Browse</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Country and City slects visible on screens < 768px wide (md breakpoint) -->
    <div class="offcanvas-header gap-3 d-md-none pt-0 pb-3">

        <div class="dropdown nav">
        <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
          <div class="ratio ratio-1x1" style="width: 20px">
            <img src="/assets/img/flags/en-us.png" alt="USA">
          </div>
        </a>
        <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/en-uk.png" class="flex-shrink-0 me-2" width="20" alt="United Kingdom">
              United Kingdom
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/fr.png" class="flex-shrink-0 me-2" width="20" alt="France">
              France
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/de.png" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
              Deutschland
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#!">
              <img src="assets/img/flags/it.png" class="flex-shrink-0 me-2" width="20" alt="Italia">
              Italia
            </a>
          </li>
        </ul>
      </div>

      <div class="dropdown nav">
        <a class="nav-link animate-underline dropdown-toggle fw-normal py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="animate-target">Washington</span>
        </a>
        <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
          <li><a class="dropdown-item" href="#!">Chicago</a></li>
          <li><a class="dropdown-item" href="#!">Los Angeles</a></li>
          <li><a class="dropdown-item" href="#!">New York</a></li>
          <li><a class="dropdown-item" href="#!">Philadelphia</a></li>
        </ul>
      </div>

    </div>


    <div class="offcanvas-body pt-1 pb-3 py-lg-0">
      <div class="container pb-lg-2 px-0 px-lg-3">

        <div class="position-relative d-lg-flex align-items-center justify-content-between">


          @livewire('site-widget-menu', [
                'code' => 'category',
                'widget_path' => 'category',
                'viewFile' => inSlotPartial("menu.category1".".layout")
            ])


            <!-- Navbar TopMenu -->
            @livewire('site-widget-menu', [
                'code' => 'menu',
                'widget_path' => 'topmenu',
                'viewFile' => inSlotPartial("menu.header1".".layout")
            ])


            <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
            <button type="button" class="btn btn-outline-secondary justify-content-start w-100 px-3 mb-lg-2 ms-3 d-none d-lg-inline-flex" style="max-width: 240px" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox">
                <i class="ci-search fs-base ms-n1 me-2"></i>
                <span class="text-body-tertiary fw-normal">Search</span>
            </button>

        </div>
      </div>
    </div>

    <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
    <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
      <div class="nav nav-justified w-100">
        <a class="nav-link border-end" href="account-signin">
          <i class="ci-user fs-lg opacity-60 me-2"></i>
          Account
        </a>
        <a class="nav-link" href="#!">
          <i class="ci-heart fs-lg opacity-60 me-2"></i>
          Wishlist
        </a>
      </div>
    </div>
  </nav>
</div>
