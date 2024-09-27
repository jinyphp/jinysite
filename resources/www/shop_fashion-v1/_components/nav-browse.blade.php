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

          <!-- Categories mega menu -->
          {{-- <div class="navbar-nav">
            <div class="dropdown position-static pb-lg-2">
              <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
                <i class="ci-menu fs-lg me-2"></i>
                <span class="animate-target">Categories1</span>
              </button>
              <div class="dropdown-menu w-100 p-4 px-xl-5" style="--cz-dropdown-spacer: .75rem">

                <!-- Nav tabs -->
                <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link text-uppercase active" id="womens-tab" data-bs-toggle="tab" data-bs-target="#womens-tab-pane" role="tab" aria-controls="womens-tab-pane" aria-selected="true">
                      Women's
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link text-uppercase" id="mens-tab" data-bs-toggle="tab" data-bs-target="#mens-tab-pane" role="tab" aria-controls="mens-tab-pane" aria-selected="false">
                      Men's
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link text-uppercase" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids-tab-pane" role="tab" aria-controls="kids-tab-pane" aria-selected="false">
                      Kids'
                    </button>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pb-xl-4">

                  <!-- Women's tab -->
                  <div class="tab-pane fade show active" id="womens-tab-pane" role="tabpanel" aria-labelledby="womens-tab">
                    <div class="row g-4">
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Clothing</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shirts &amp; Tops</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Underwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Dresses</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Swimwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Shoes</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Boots</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sandals</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Heels</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Loafers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Slippers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Oxfords</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Accessories</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Handbags</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Eyewear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hats</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Watches</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Jewelry</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Belts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <div class="h6 mb-2">Specialty Sizes</div>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Plus Size</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Petite</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Wide Shoes</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Narrow Shoes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                        <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                          <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                            <div class="h4 lh-base">Women's<br>Heels<br>Collection</div>
                            <div>
                              <a class="btn btn-sm btn-dark stretched-link" href="/shop-catalog-fashion" data-bs-theme="light">Shop now</a>
                            </div>
                          </div>
                          <img src="assets/img/mega-menu/fashion/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Men's tab -->
                  <div class="tab-pane fade" id="mens-tab-pane" role="tabpanel" aria-labelledby="mens-tab">
                    <div class="row g-4">
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Clothing</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">T-Shirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Jeans</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Underwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Pants</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Shoes</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sneakers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Oxfords</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Loafers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sandals</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Boots</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Slippers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Accessories</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Backpacks</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sunglasses</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Bags</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Watches</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hats</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Belts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <div class="h6 mb-2">Specialty Shops</div>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Active Wear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sports Clothing</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Athletic Shoes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 d-none d-lg-block" data-bs-theme="dark">
                        <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                          <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                            <div class="h4 lh-base">Men's<br>Sunglasses<br>Offers</div>
                            <div>
                              <a class="btn btn-sm btn-dark stretched-link" href="/shop-catalog-fashion" data-bs-theme="dark">Shop now</a>
                            </div>
                          </div>
                          <img src="assets/img/mega-menu/fashion/02.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Kids' tab -->
                  <div class="tab-pane fade" id="kids-tab-pane" role="tabpanel" aria-labelledby="kids-tab">
                    <div class="row g-4">
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Boys</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Pants</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sneakers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Boots</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shorts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Girls</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shirts &amp; Tops</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Dresses</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sneakers</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hoodies</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sandals</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
                          <span class="animate-target">Accessories</span>
                        </a>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Backpacks</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Gloves</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shoe Laces</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Scarves</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Hats</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Belts</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-2">
                        <div class="h6 mb-2">Shop by Age</div>
                        <ul class="nav flex-column gap-2 mt-0">
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Infant</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Toddler</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Little Kid</a>
                          </li>
                          <li class="d-flex w-100 pt-1">
                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Big Kid</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                        <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                          <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                            <div class="h4 lh-base">Kids'<br>Spring<br>Collection</div>
                            <div>
                              <a class="btn btn-sm btn-dark stretched-link" href="/shop-catalog-fashion" data-bs-theme="light">Shop now</a>
                            </div>
                          </div>
                          <img src="assets/img/mega-menu/fashion/03.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

          <!-- Categories mega menu -->
          {{-- <x-www_category-layout>
          </x-www_category-layout> --}}
          @livewire('site-widget-menu', [
                'code' => 'category',
                'widget_path' => 'category',
                'viewFile' => inSlotPartial("menu.category1".".layout")
            ])


            <!-- Navbar TopMenu -->
            {{-- @livewire('site-menu',[
                'code' => "menu.json",
                'viewFile' => inSlotPartial("menu.top".".layout")
            ]) --}}
            @livewire('site-widget-menu', [
                'code' => 'menu',
                'widget_path' => 'topmenu',
                'viewFile' => inSlotPartial("menu.top1".".layout")
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
