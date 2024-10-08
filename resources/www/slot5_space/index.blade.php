<x-www-app>

    <!-- ========== HEADER ========== -->
    <header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
        <div class="container">
          <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Default Logo -->
            <a class="navbar-brand" href="/index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="/assets/svg/logos/logo.svg" alt="Image Description">
            </a>
            <!-- End Default Logo -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>
            <!-- End Toggler -->

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <!-- Landings -->
                <li class="hs-has-mega-menu nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "maxWidth": "30rem"
                      }
                    }'>
                  <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" aria-current="page" href="#" role="button" aria-expanded="false">Landings</a>

                  <!-- Mega Menu -->
                  <div class="hs-mega-menu hs-position-right-fix dropdown-menu" aria-labelledby="landingsMegaMenu" style="min-width: 30rem;">
                    <!-- Main Content -->
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm mb-3 mb-sm-0">
                          <span class="dropdown-header">Classic</span>
                          <a class="dropdown-item active" href="./index.html">Corporate</a>
                          <a class="dropdown-item " href="./landing-agency.html">Agency</a>
                          <a class="dropdown-item " href="./landing-consulting.html">Consulting</a>
                          <a class="dropdown-item " href="./landing-services.html">Services</a>
                          <a class="dropdown-item " href="./landing-business.html">Business</a>
                        </div>

                        <div class="col-sm">
                          <span class="dropdown-header">Services</span>
                          <a class="dropdown-item " href="./landing-services-growth.html">Growth</a>
                          <a class="dropdown-item " href="./landing-services-saas.html">SaaS</a>
                          <a class="dropdown-item " href="./landing-services-wallet.html">Wallet</a>
                          <a class="dropdown-item " href="./landing-services-api.html">API</a>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Main Content -->
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Landings -->

                <!-- Pages -->
                <li class="hs-has-mega-menu nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Pages</a>

                  <!-- Mega Menu -->
                  <div class="hs-mega-menu hs-position-right dropdown-menu w-100" aria-labelledby="pagesMegaMenu" style="min-width: 42rem;">
                    <!-- Main Content -->
                    <div class="navbar-dropdown-menu-inner">
                      <div class="row">
                        <div class="col-sm-6 col-md-3">
                          <span class="dropdown-header">Company</span>
                          <a class="dropdown-item " href="./page-about.html">About</a>
                          <a class="dropdown-item " href="./page-services.html">Services</a>
                          <a class="dropdown-item " href="./page-customer-stories.html">Customer Stories</a>
                          <a class="dropdown-item " href="./page-customer-story.html">Customer Story</a>
                          <a class="dropdown-item " href="./page-help-center.html">Help Center</a>
                          <a class="dropdown-item " href="./page-help-center-categories.html">Help Center: Categories</a>
                          <a class="dropdown-item " href="./page-help-center-article.html">Help Center: Article</a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0">
                          <span class="dropdown-header invisible">Company</span>
                          <a class="dropdown-item " href="./page-careers.html">Careers</a>
                          <a class="dropdown-item " href="./page-careers-overview.html">Careers: Overview</a>
                          <a class="dropdown-item " href="./page-hire-us.html">Hire Us</a>
                          <a class="dropdown-item " href="./page-contacts.html">Contacts</a>
                          <a class="dropdown-item " href="./page-login.html">Log In</a>
                          <a class="dropdown-item " href="./page-signup.html">Sign Up</a>
                          <a class="dropdown-item " href="./page-reset-password.html">Forgot Password</a>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0">
                          <span class="dropdown-header">Portfolio</span>
                          <a class="dropdown-item " href="./portfolio-modern.html">Modern</a>
                          <a class="dropdown-item " href="./portfolio-classic.html">Classic</a>
                          <a class="dropdown-item " href="./portfolio-case-study.html">Case Study</a>
                        </div>

                        <div class="col-sm-6 col-md-3">
                          <span class="dropdown-header">Specialty pages</span>
                          <a class="dropdown-item " href="./page-pricing.html">Pricing</a>
                          <a class="dropdown-item " href="./page-coming-soon.html">Coming Soon</a>
                          <a class="dropdown-item " href="./page-coming-soon-simple.html">Coming Soon: Simple</a>
                          <a class="dropdown-item " href="./page-error-404.html">Error 404</a>
                          <a class="dropdown-item " href="./page-terms.html">Terms &amp; Conditions</a>
                          <a class="dropdown-item " href="./page-privacy.html">Privacy &amp; Policy</a>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Main Content -->
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Pages -->

                <!-- Blog -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Blog</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 12rem;">
                    <a class="dropdown-item " href="./blog-classic.html">Classic</a>
                    <a class="dropdown-item " href="./blog-article.html">Article</a>
                    <a class="dropdown-item " href="./blog-author-profile.html">Author Profile</a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Blog -->

                <!-- Docs -->
                <li class="hs-has-mega-menu nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "maxWidth": "20rem"
                      }
                    }'>
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Docs</a>

                  <!-- Mega Menu -->
                  <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
                    <!-- Link -->
                    <a class="navbar-dropdown-menu-media-link" href="./documentation/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v2.3</span></span>
                          <p class="navbar-dropdown-menu-media-desc">Development guides for building projects with Space</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Link -->

                    <div class="dropdown-divider"></div>

                    <!-- Link -->
                    <a class="navbar-dropdown-menu-media-link" href="./snippets/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M21 2H13C12.4 2 12 2.4 12 3V13C12 13.6 12.4 14 13 14H21C21.6 14 22 13.6 22 13V3C22 2.4 21.6 2 21 2ZM15.7 8L14 10.1V5.80005L15.7 8ZM15.1 4H18.9L17 6.40002L15.1 4ZM17 9.59998L18.9 12H15.1L17 9.59998ZM18.3 8L20 5.90002V10.2L18.3 8ZM9 2H3C2.4 2 2 2.4 2 3V21C2 21.6 2.4 22 3 22H9C9.6 22 10 21.6 10 21V3C10 2.4 9.6 2 9 2ZM4.89999 12L4 14.8V9.09998L4.89999 12ZM4.39999 4H7.60001L6 8.80005L4.39999 4ZM6 15.2L7.60001 20H4.39999L6 15.2ZM7.10001 12L8 9.19995V14.9L7.10001 12Z" fill="#035A4B"/>
                            <path d="M21 18H13C12.4 18 12 17.6 12 17C12 16.4 12.4 16 13 16H21C21.6 16 22 16.4 22 17C22 17.6 21.6 18 21 18ZM19 21C19 20.4 18.6 20 18 20H13C12.4 20 12 20.4 12 21C12 21.6 12.4 22 13 22H18C18.6 22 19 21.6 19 21Z" fill="#035A4B"/>
                            </svg>

                          </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Snippets</span>
                          <p class="navbar-dropdown-menu-media-desc">Move quickly with copy-to-clipboard feature</p>
                        </div>
                      </div>
                    </a>
                    <!-- End Link -->
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Docs -->

                <li class="nav-divider"></li>

                <!-- Log in -->
                <li class="nav-item">
                  <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                     data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormLogin",
                             "groupName": "idForm"
                           }'>Log in</a>

                  <a class="js-animation-link d-lg-none btn btn-primary" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                     data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormSignup",
                             "groupName": "idForm"
                           }'>
                    <i class="bi-person-circle me-1"></i> Sign up
                  </a>
                </li>
                <!-- End Log in -->

                <!-- Sign up -->
                <li class="nav-item">
                  <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal"
                     data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormSignup",
                             "groupName": "idForm"
                           }'>
                    <i class="bi-person-circle me-1"></i> Sign up
                  </a>
                </li>
                <!-- End Sign up -->
              </ul>
            </div>
            <!-- End Collapse -->
          </nav>
        </div>
      </header>

      <!-- ========== END HEADER ========== -->

      <!-- ========== MAIN CONTENT ========== -->
      <main id="content" role="main">
        <!-- Hero -->
        <div class="bg-primary-dark position-relative overflow-hidden">
          <div class="container content-space-2">
            <div class="row justify-content-center align-items-lg-center">
              <div class="col-md-8 col-lg-6 mb-7 mb-lg-0">
                <!-- Heading -->
                <div class="pe-lg-3 mb-7">
                  <h1 class="display-3 text-white mb-3 mb-md-5">Solving problems for every
                    <span class="text-warning">
                      <span class="js-typedjs"
                            data-hs-typed-options='{
                              "strings": ["team.", "startup.", "business."],
                              "typeSpeed": 90,
                              "loop": true,
                              "backSpeed": 30,
                              "backDelay": 2500
                            }'></span>
                    </span>
                  </h1>
                  <p class="lead text-white-70">Built on standard web technology, teams use Space to build beautiful cross-platform hybrid apps in a fraction of the time.</p>
                </div>
                <!-- End Heading -->

                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <!-- Info Block -->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <span class="svg-icon text-white">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M22.1671 18.1421C22.4827 18.4577 23.0222 18.2331 23.0206 17.7868L23.0039 13.1053V5.52632C23.0039 4.13107 21.8729 3 20.4776 3H8.68815C7.2929 3 6.16183 4.13107 6.16183 5.52632V9H13C14.6568 9 16 10.3431 16 12V15.6316H19.6565L22.1671 18.1421Z" fill="#035A4B"/>
                          <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M1.98508 18V13C1.98508 11.8954 2.88051 11 3.98508 11H11.9851C13.0896 11 13.9851 11.8954 13.9851 13V18C13.9851 19.1046 13.0896 20 11.9851 20H4.10081L2.85695 21.1905C2.53895 21.4949 2.01123 21.2695 2.01123 20.8293V18.3243C1.99402 18.2187 1.98508 18.1104 1.98508 18ZM5.99999 14.5C5.99999 14.2239 6.22385 14 6.49999 14H11.5C11.7761 14 12 14.2239 12 14.5C12 14.7761 11.7761 15 11.5 15H6.49999C6.22385 15 5.99999 14.7761 5.99999 14.5ZM9.49999 16C9.22385 16 8.99999 16.2239 8.99999 16.5C8.99999 16.7761 9.22385 17 9.49999 17H11.5C11.7761 17 12 16.7761 12 16.5C12 16.2239 11.7761 16 11.5 16H9.49999Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </div>

                      <div class="flex-grow-1 ms-4">
                        <h6 class="text-white mb-0">24 hours</h6>
                        <p class="text-white-70">Response time</p>
                      </div>
                    </div>
                    <!-- End Info Block -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Info Block -->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <span class="svg-icon text-white">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M4.875 20.75C4.63542 20.75 4.39583 20.6542 4.20417 20.4625L2.2875 18.5458C1.90417 18.1625 1.90417 17.5875 2.2875 17.2042C2.67083 16.8208 3.29375 16.8208 3.62917 17.2042L4.875 18.45L8.0375 15.2875C8.42083 14.9042 8.99583 14.9042 9.37917 15.2875C9.7625 15.6708 9.7625 16.2458 9.37917 16.6292L5.54583 20.4625C5.35417 20.6542 5.11458 20.75 4.875 20.75Z" fill="#035A4B"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3C3.34315 3 2 4.34315 2 6V11.865C3.04486 11.3127 4.23591 11 5.5 11C9.47412 11 12.7263 14.091 12.9836 18H18.0249L20.3178 20.2929C20.9478 20.9229 22.0249 20.4767 22.0249 19.5858V15L22 15.0098L22 15V6C22 4.34315 20.6569 3 19 3H5ZM6 7C5.44772 7 5 7.44772 5 8C5 8.55228 5.44771 9 6 9H15C15.5523 9 16 8.55228 16 8C16 7.44772 15.5523 7 15 7H6Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </div>

                      <div class="flex-grow-1 ms-4">
                        <h6 class="text-white mb-0">92%</h6>
                        <p class="text-white-70">Satisfaction rate</p>
                      </div>
                    </div>
                    <!-- End Info Block -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->

              <div class="col-md-8 col-lg-6">
                <div class="ps-lg-5">
                  <!-- Card -->
                  <div class="card card-lg">
                    <div class="card-body">
                      <div class="row align-items-sm-center mb-5">
                        <div class="col-sm-auto order-sm-2 mb-3 mb-sm-0">
                          <img class="avatar avatar-xxl avatar-4x3" src="/assets/svg/illustrations/oc-chatting.svg" alt="Image Description">
                        </div>
                        <!-- End Col -->

                        <div class="col-sm">
                          <h5 class="card-title">Join Space</h5>
                          <p class="card-text">Hundreds of companies using Space to build their business.</p>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <form>
                        <!-- Form -->
                        <div class="mb-4">
                          <label class="form-label" for="registerEmail">Your name</label>
                          <input type="text" class="form-control form-control-lg" name="name" id="registerName" placeholder="Type your name" aria-label="Type your name" required data-msg="Please enter your name.">
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="mb-4">
                          <label class="form-label" for="registerEmail">Your email</label>
                          <input type="email" class="form-control form-control-lg" name="email" id="registerEmail" placeholder="example@site.com" aria-label="example@site.com" required data-msg="Please enter a valid email address.">
                        </div>
                        <!-- End Form -->

                        <div class="mb-4">
                          <label class="form-label" for="registerEmail">Company Size</label>

                          <div class="row">
                            <div class="col-sm mb-4 mb-sm-0">
                              <!-- Form Check -->
                              <label class="form-control form-control-lg" for="registerRadio1">
                                <span class="form-check form-check-custom">
                                  <input type="radio" class="form-check-input" name="registerRadio" id="registerRadio1" checked>
                                  <span class="form-check-label">1-10</span>
                                </span>
                              </label>
                              <!-- End Form Check -->
                            </div>

                            <div class="col-sm">
                              <!-- Form Check -->
                              <label class="form-control form-control-lg" for="registerRadio2">
                                <span class="form-check form-check-custom">
                                  <input type="radio" class="form-check-input" name="registerRadio" id="registerRadio2">
                                  <span class="form-check-label">More than 10</span>
                                </span>
                              </label>
                              <!-- End Form Check -->
                            </div>
                          </div>
                          <!-- End Row -->
                        </div>

                        <div class="d-grid text-center">
                          <button type="submit" class="btn btn-primary btn-lg">Start your free 30-days trial</button>
                          <span class="form-text">Need help? <a class="link" href="./page-help-center.html">Visit our Help Center <i class="bi-chevron-right small ms-1"></i></a></span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="border-top border-white-10 my-10"></div>

            <div class="row">
              <div class="col-sm mb-5 mb-sm-0">
                <!-- Rating -->
                <div class="d-flex gap-1 mb-2">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                </div>
                <!-- End Rating -->

                <blockquote class="blockquote blockquote-sm text-white mb-4">“ This is a beautiful template with exciting components. ”</blockquote>

                <img class="avatar avatar-lg avatar-4x3" src="/assets/svg/brands/amazon-white-50.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col-sm mb-5 mb-sm-0">
                <!-- Rating -->
                <div class="d-flex gap-1 mb-2">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star-half.svg" alt="Review rating" width="16">
                </div>
                <!-- End Rating -->

                <blockquote class="blockquote blockquote-sm text-white mb-4">“ The best template I've ever come across. ”</blockquote>

                <img class="avatar avatar-lg avatar-4x3" src="/assets/svg/brands/airbnb-white-50.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col-sm mb-5">
                <!-- Rating -->
                <div class="d-flex gap-1 mb-2">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                  <img src="/assets/svg/illustrations/star-half.svg" alt="Review rating" width="16">
                </div>
                <!-- End Rating -->

                <blockquote class="blockquote blockquote-sm text-white mb-4">“ There one theme is everything that user wants. ”</blockquote>

                <img class="avatar avatar-lg avatar-4x3" src="/assets/svg/brands/google-white-50.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>

          <!-- Background Shapes -->
          <div class="position-absolute top-0 end-0">
            <img src="/assets/svg/components/shape-3-soft-light.svg" alt="SVG" width="500">
          </div>
          <div class="position-absolute bottom-0 end-0 me-10">
            <img src="/assets/svg/components/shape-1-soft-light.svg" alt="SVG" width="250">
          </div>
          <div class="position-absolute bottom-0 start-0">
            <img src="/assets/svg/components/shape-2-soft-light.svg" alt="SVG" width="400">
          </div>
          <!-- End Background Shapes -->
        </div>
        <!-- End Hero -->

        <!-- Features -->
        <div class="container content-space-t-1 content-space-t-md-3">
          <!-- Heading -->
          <div class="w-lg-65 text-center mx-lg-auto mb-7">
            <h3>Take the best path forward</h3>
            <p class="fs-6">Actionable strategies and business marketing advice help you to grow faster.</p>
          </div>
          <!-- End Heading -->

          <!-- Nav Scroller -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

            <!-- Nav Pills -->
            <ul class="nav nav-pills mb-7" id="featuresTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#featuresOne" id="featuresOne-tab" data-bs-toggle="tab" data-bs-target="#featuresOne" role="tab" aria-controls="featuresOne" aria-selected="true" style="width: 22rem;">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.6 5.59998L20.9 10.9C21.3 11.3 21.3 11.9 20.9 12.3L17.6 15.6L11.6 9.59998L15.6 5.59998ZM2.3 12.3L7.59999 17.6L11.6 13.6L5.59999 7.59998L2.3 10.9C1.9 11.3 1.9 11.9 2.3 12.3Z" fill="#035A4B"/>
                        <path opacity="0.3" d="M17.6 15.6L12.3 20.9C11.9 21.3 11.3 21.3 10.9 20.9L7.59998 17.6L13.6 11.6L17.6 15.6ZM10.9 2.3L5.59998 7.6L9.59998 11.6L15.6 5.6L12.3 2.3C11.9 1.9 11.3 1.9 10.9 2.3Z" fill="#035A4B"/>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <h6 class="nav-title">All-in-one workspace</h6>
                      <p class="nav-text text-body">Create a business, whether you’ve got a fresh idea.</p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#featuresTwo" id="featuresTwo-tab" data-bs-toggle="tab" data-bs-target="#featuresTwo" role="tab" aria-controls="featuresTwo" aria-selected="false" style="width: 22rem;">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="#035A4B"/>
                        <path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="#035A4B"/>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <h6 class="nav-title">Automation on a whole new level</h6>
                      <p class="nav-text text-body">Use automation to scale campaigns profitably and save time doing it.</p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#featuresThree" id="featuresThree-tab" data-bs-toggle="tab" data-bs-target="#featuresThree" role="tab" aria-controls="featuresThree" aria-selected="false" style="width: 22rem;">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="#035A4B"/>
                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="#035A4B"/>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <h6 class="nav-title">Solving problems for every team</h6>
                      <p class="nav-text text-body">One tool for your company to share knowledge and ship projects.</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- End Nav Pills -->
          </div>
          <!-- End Nav Scroller -->

          <!-- Tab Content -->
          <div class="tab-content" id="featuresTabContent">
            <div class="tab-pane fade show active" id="featuresOne" role="tabpanel" aria-labelledby="featuresOne-tab">
              <!-- Devices -->
              <div class="devices">
                <!-- Mobile Device -->
                <figure class="device-mobile">
                  <div class="device-mobile-frame">
                    <img class="device-mobile-img" src="/assets/img/240x480/img3.jpg" alt="Image Description">
                  </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="device-browser">
                  <div class="device-browser-header">
                    <div class="device-browser-header-btn-list">
                      <span class="device-browser-header-btn-list-btn"></span>
                      <span class="device-browser-header-btn-list-btn"></span>
                      <span class="device-browser-header-btn-list-btn"></span>
                    </div>
                    <div class="device-browser-header-browser-bar">www.htmlstream.com/space/</div>
                  </div>

                  <div class="device-browser-frame">
                    <img class="device-browser-img" src="/assets/img/800x500/img8.jpg" alt="Image Description">
                  </div>
                </figure>
                <!-- End Browser Device -->
              </div>
              <!-- End Devices -->
            </div>

            <div class="tab-pane fade" id="featuresTwo" role="tabpanel" aria-labelledby="featuresTwo-tab">
              <!-- Devices -->
              <div class="devices">
                <!-- Mobile Device -->
                <figure class="device-mobile">
                  <div class="device-mobile-frame">
                    <img class="device-mobile-img" src="/assets/img/240x480/img4.jpg" alt="Image Description">
                  </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="device-browser">
                  <div class="device-browser-header">
                    <div class="device-browser-header-btn-list">
                      <span class="device-browser-header-btn-list-btn"></span>
                      <span class="device-browser-header-btn-list-btn"></span>
                      <span class="device-browser-header-btn-list-btn"></span>
                    </div>
                    <div class="device-browser-header-browser-bar">www.htmlstream.com/space/</div>
                  </div>

                  <div class="device-browser-frame">
                    <img class="device-browser-img" src="/assets/img/800x500/img6.jpg" alt="Image Description">
                  </div>
                </figure>
                <!-- End Browser Device -->
              </div>
              <!-- End Devices -->
            </div>

            <div class="tab-pane fade" id="featuresThree" role="tabpanel" aria-labelledby="featuresThree-tab">
              <!-- Devices -->
              <div class="devices">
                <!-- Mobile Device -->
                <figure class="device-mobile">
                  <div class="device-mobile-frame">
                    <img class="device-mobile-img" src="/assets/img/240x480/img2.jpg" alt="Image Description">
                  </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="device-browser">
                  <div class="device-browser-header">
                    <div class="device-browser-header-btn-list">
                      <span class="device-browser-header-btn-list-btn"></span>
                      <span class="device-browser-header-btn-list-btn"></span>
                      <span class="device-browser-header-btn-list-btn"></span>
                    </div>
                    <div class="device-browser-header-browser-bar">www.htmlstream.com/space/</div>
                  </div>

                  <div class="device-browser-frame">
                    <img class="device-browser-img" src="/assets/img/800x500/img1.jpg" alt="Image Description">
                  </div>
                </figure>
                <!-- End Browser Device -->
              </div>
              <!-- End Devices -->
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Features -->

        <!-- Features -->
        <div class="position-relative">
          <div class="container">
            <div class="row justify-content-end align-items-md-center">
              <div class="d-none d-md-block col-md-6 position-absolute top-0 start-0 bg-img-center h-100" style="background-image: url(./assets/img/900x700/img7.jpg);"></div>
              <div class="d-md-none mb-5 mb-md-0">
                <img class="img-fluid" src="/assets/img/900x700/img7.jpg" alt="Image Description">
              </div>

              <div class="col-md-6">
                <div class="p-md-5 p-lg-7">
                  <!-- Heading -->
                  <div class="mb-4 mb-sm-7">
                    <span class="text-cap">Create a website</span>
                    <h3>Less overhead, more collaboration</h3>
                    <p>Start with award-winning templates, then customize to fit your style and professional needs.</p>
                  </div>
                  <!-- End Heading -->

                  <div class="row mb-sm-5">
                    <div class="col-sm-6 col-md-12 col-lg-6">
                      <!-- List Checked -->
                      <ul class="list-checked list-checked-primary mb-0">
                        <li class="list-checked-item">Corporate-based Business</li>
                        <li class="list-checked-item">Creative Services</li>
                        <li class="list-checked-item">New Business Innovation</li>
                        <li class="list-checked-item">Online E-commerce</li>
                        <li class="list-checked-item">Real Estate</li>
                      </ul>
                      <!-- End List Checked -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-12 col-lg-6">
                      <!-- List Checked -->
                      <ul class="list-checked list-checked-primary mb-0">
                        <li class="list-checked-item">Portfolio</li>
                        <li class="list-checked-item">Blogs</li>
                        <li class="list-checked-item">Booking.com</li>
                        <li class="list-checked-item">and more...</li>
                      </ul>
                      <!-- End List Checked -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <a class="link" href="#">Explore all templates <i class="bi-chevron-right small ms-1"></i></a>
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Features -->

        <!-- Services -->
        <div class="container content-space-1 content-space-md-3">
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-5">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="#035A4B"/>
                <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="#035A4B"/>
                </svg>

              </span>

              <h6>Task Management</h6>
              <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-5">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0021 10.9128V3.01281C13.0021 2.41281 13.5021 1.91281 14.1021 2.01281C16.1021 2.21281 17.9021 3.11284 19.3021 4.61284C20.7021 6.01284 21.6021 7.91285 21.9021 9.81285C22.0021 10.4129 21.5021 10.9128 20.9021 10.9128H13.0021V10.9128Z" fill="#035A4B"/>
                <path opacity="0.3" d="M11.0021 13.7128V4.91283C11.0021 4.31283 10.5021 3.81283 9.90208 3.91283C5.40208 4.51283 1.90209 8.41284 2.00209 13.1128C2.10209 18.0128 6.40208 22.0128 11.3021 21.9128C13.1021 21.8128 14.7021 21.3128 16.0021 20.4128C16.5021 20.1128 16.6021 19.3128 16.1021 18.9128L11.0021 13.7128Z" fill="#035A4B"/>
                <path opacity="0.3" d="M21.9021 14.0128C21.7021 15.6128 21.1021 17.1128 20.1021 18.4128C19.7021 18.9128 19.0021 18.9128 18.6021 18.5128L13.0021 12.9128H20.9021C21.5021 12.9128 22.0021 13.4128 21.9021 14.0128Z" fill="#035A4B"/>
                </svg>

              </span>

              <h6>Activity Reporting</h6>
              <p>We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-5">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 7.19995H10C10.6 7.19995 11 6.79995 11 6.19995V3.19995C11 2.59995 10.6 2.19995 10 2.19995H3C2.4 2.19995 2 2.59995 2 3.19995V6.19995C2 6.69995 2.4 7.19995 3 7.19995Z" fill="#035A4B"/>
                <path opacity="0.3" d="M10.1 22H3.10001C2.50001 22 2.10001 21.6 2.10001 21V10C2.10001 9.4 2.50001 9 3.10001 9H10.1C10.7 9 11.1 9.4 11.1 9V20C11.1 21.6 10.7 22 10.1 22ZM13.1 18V21C13.1 21.6 13.5 22 14.1 22H21.1C21.7 22 22.1 21.6 22.1 21V18C22.1 17.4 21.7 17 21.1 17H14.1C13.5 17 13.1 17.4 13.1 18ZM21.1 2H14.1C13.5 2 13.1 2.4 13.1 3V14C13.1 14.6 13.5 15 14.1 15H21.1C21.7 15 22.1 14.6 22.1 14V3C22.1 2.4 21.7 2 21.1 2Z" fill="#035A4B"/>
                </svg>

              </span>

              <h6>Smart Dashboards</h6>
              <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="#035A4B"/>
                <path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="#035A4B"/>
                </svg>

              </span>

              <h6>SSO Authentication</h6>
              <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="#035A4B"/>
                <path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="#035A4B"/>
                </svg>

              </span>

              <h6>Competitive Analysis</h6>
              <p>We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.2718 8.68537C16.8933 8.28319 16.9125 7.65032 17.3146 7.2718C17.7168 6.89329 18.3497 6.91246 18.7282 7.31464L22.7282 11.5646C23.0906 11.9497 23.0906 12.5503 22.7282 12.9354L18.7282 17.1854C18.3497 17.5875 17.7168 17.6067 17.3146 17.2282C16.9125 16.8497 16.8933 16.2168 17.2718 15.8146L20.6268 12.25L17.2718 8.68537Z" fill="#035A4B"/>
                <path d="M6.7282 8.68537C7.10671 8.28319 7.08754 7.65032 6.68536 7.2718C6.28319 6.89329 5.65031 6.91246 5.2718 7.31464L1.2718 11.5646C0.909397 11.9497 0.909397 12.5503 1.2718 12.9354L5.2718 17.1854C5.65031 17.5875 6.28319 17.6067 6.68536 17.2282C7.08754 16.8497 7.10671 16.2168 6.7282 15.8146L3.37325 12.25L6.7282 8.68537Z" fill="#035A4B"/>
                <rect opacity="0.3" x="12.7388" y="3.97168" width="2" height="16" rx="1" transform="rotate(12.3829 12.7388 3.97168)" fill="#035A4B"/>
                </svg>

              </span>

              <h6>API Access</h6>
              <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Services -->

        <!-- Features -->
        <div class="bg-soft-warning">
          <div class="container content-space-1 content-space-md-3">
            <!-- Heading -->
            <div class="w-lg-65 text-center mx-lg-auto mb-7">
              <h3>Unlock Space’s full potential</h3>
              <p class="fs-6">Modernize all the ways you work.</p>
            </div>
            <!-- End Heading -->

            <div class="row align-items-md-center mb-5 mb-md-10">
              <div class="col-md-6 mb-5 mb-md-0">
                <div class="text-center">
                  <img class="img-fluid" src="/assets/svg/illustrations/oc-error.svg" alt="Image Description" style="max-width: 20rem;">
                </div>
              </div>
              <!-- End Col -->

              <div class="col-md-6">
                <!-- Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col" class="table-text-end">Others</th>
                      <th scope="col" class="table-text-end">Space</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Storage</th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Custom Fields <i class="bi-info-circle text-muted small ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Custom fields allow you to record additional information unique to your contacts, cases or sales opportunities."></i></th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-muted">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="5.63602" y="16.9498" width="16" height="2" rx="1" transform="rotate(-45 5.63602 16.9498)" fill="#008060"/>
                          <rect opacity="0.3" x="7.05029" y="5.63605" width="16" height="2" rx="1" transform="rotate(45 7.05029 5.63605)" fill="#008060"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Task Management</th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-muted">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="5.63602" y="16.9498" width="16" height="2" rx="1" transform="rotate(-45 5.63602 16.9498)" fill="#008060"/>
                          <rect opacity="0.3" x="7.05029" y="5.63605" width="16" height="2" rx="1" transform="rotate(45 7.05029 5.63605)" fill="#008060"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Activity Reporting <i class="bi-info-circle text-muted small ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Shows activities completed by each user and the specific activity types."></i></th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Two-Factor Authentication <i class="bi-info-circle text-muted small ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Add an extra layer of security to your Capsule Account using your mobile device."></i></th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">API Access <i class="bi-info-circle text-muted small ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Use Capsule’s API to integrate with your custom or third party application."></i></th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-muted">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="5.63602" y="16.9498" width="16" height="2" rx="1" transform="rotate(-45 5.63602 16.9498)" fill="#008060"/>
                          <rect opacity="0.3" x="7.05029" y="5.63605" width="16" height="2" rx="1" transform="rotate(45 7.05029 5.63605)" fill="#008060"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Implementation Support</th>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-muted">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="5.63602" y="16.9498" width="16" height="2" rx="1" transform="rotate(-45 5.63602 16.9498)" fill="#008060"/>
                          <rect opacity="0.3" x="7.05029" y="5.63605" width="16" height="2" rx="1" transform="rotate(45 7.05029 5.63605)" fill="#008060"/>
                          </svg>

                        </span>
                      </td>
                      <td class="table-text-end">
                        <span class="svg-icon svg-icon-sm text-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.738 6.35233C18.0957 5.93153 18.7268 5.88036 19.1476 6.23804C19.5684 6.59573 19.6196 7.22682 19.2619 7.64763L10.7619 17.6476C10.3986 18.075 9.75488 18.1201 9.33562 17.7474L4.83562 13.7474C4.42283 13.3805 4.38565 12.7484 4.75257 12.3356C5.11949 11.9228 5.75156 11.8857 6.16434 12.2526L9.90019 15.5733L17.738 6.35233Z" fill="#035A4B"/>
                          </svg>

                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="w-lg-75 text-center mx-lg-auto">
              <div class="row col-sm-divider">
                <div class="col-sm-4">
                  <!-- Info -->
                  <div class="text-center p-3">
                    <h2 class="text-primary">45k+</h2>
                    <p class="mb-0">clients from freelancers to corporate companies</p>
                  </div>
                  <!-- End Info -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Info -->
                  <div class="text-center p-3">
                    <h2 class="text-primary">8...</h2>
                    <p class="mb-0">years of experience in this business already</p>
                  </div>
                  <!-- End Info -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Info -->
                  <div class="text-center p-3">
                    <h2 class="text-primary">12k+</h2>
                    <p class="mb-0">resolved all kinds of questions and inquiries</p>
                  </div>
                  <!-- End Info -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
        </div>
        <!-- End Features -->

        <!-- Blog -->
        <div class="container content-space-1 content-space-md-3">
          <!-- Heading -->
          <div class="w-lg-65 text-center mx-lg-auto mb-7">
            <h3>All about Space</h3>
            <p class="fs-6">Explore all Space guides and resources.</p>
          </div>
          <!-- End Heading -->

          <div class="row mb-5 mb-sm-5">
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <a class="card card-lg card-transition bg-primary-dark" href="./blog-article.html" style="min-height: 22rem;">
                <div class="card-body">
                  <div class="mb-3">
                    <span class="badge bg-soft-light">Data insights</span>
                  </div>
                  <h4 class="card-title text-white mb-5">State of product analytics report</h4>
                  <span class="card-link link-light">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                  <div class="position-absolute bottom-0 start-0 end-0">
                    <img class="card-img" src="/assets/svg/components/shape-4-soft-light.svg" alt="Image Description">
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <a class="card card-lg card-transition bg-primary-dark" href="./blog-article.html" style="min-height: 22rem;">
                <div class="card-body">
                  <div class="mb-3">
                    <span class="badge bg-soft-light">Ebooks &amp; reports</span>
                  </div>
                  <h4 class="card-title text-white mb-5">Space 2020 system architecture</h4>
                  <span class="card-link link-light">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                  <div class="position-absolute bottom-0 start-0 end-0">
                    <img class="card-img" src="/assets/svg/components/shape-5-soft-light.svg" alt="Image Description">
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <a class="card card-lg card-transition bg-primary-dark" href="./blog-article.html" style="min-height: 22rem;">
                <div class="card-body">
                  <div class="mb-3">
                    <span class="badge bg-soft-light">Ebooks &amp; reports</span>
                  </div>
                  <h4 class="card-title text-white mb-5">A guide to Space product materials</h4>
                  <span class="card-link link-light">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                  <div class="position-absolute bottom-0 start-0 end-0">
                    <img class="card-img" src="/assets/svg/components/shape-6-soft-light.svg" alt="Image Description">
                  </div>
                </div>
              </a>
              <!-- End Card -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Info -->
          <div class="text-center">
            <p class="mb-0">Want to read more?</p>
            <a class="link" href="./blog-classic.html">Explore all Space resources <i class="bi-chevron-right small ms-1"></i></a>
          </div>
          <!-- End Info -->
        </div>
        <!-- End Blog -->

        <div class="border-top mx-auto" style="max-width: 30rem;"></div>

        <!-- FAQ -->
        <div class="container content-space-t-1 content-space-t-md-3">
          <!-- Heading -->
          <div class="w-lg-50 text-center mx-lg-auto mb-7">
            <h3>Frequently Asked Questions</h3>
          </div>
          <!-- End Heading -->

          <div class="w-md-75 w-lg-65 mx-md-auto">
            <!-- Card -->
            <div class="card card-lg">
              <div class="card-body">
                <!-- Accordion -->
                <div class="accordion accordion-flush" id="accordionFAQ">
                  <!-- Accordion Item -->
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                      <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What methods of payments are supported?
                      </a>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                      <div class="accordion-body">
                        You can purchase the themes on Bootstrap Themes via any major credit/debit card (via Stripe) or with your Paypal account. We don't support cryptocurrencies or invoicing at this time.
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion Item -->

                  <!-- Accordion Item -->
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                      <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Can I cancel at anytime?
                      </a>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                      <div class="accordion-body">
                        If you'd like a refund please reach out to us at <a href="#">themes@getbootstrap.com</a>. If you need technical help with the theme before a refund please reach out to the seller first and they can get in touch with us if they're unable to resolve the issue.
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion Item -->

                  <!-- Accordion Item -->
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                      <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do I get a receipt for my purchase?
                      </a>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                      <div class="accordion-body">
                        You'll receive an email from Bootstrap themes once your purchase is complete.
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion Item -->

                  <!-- Accordion Item -->
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingFour">
                      <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Which license do I need?
                      </a>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                      <div class="accordion-body">
                        There are three license types - <a href="#">Standard</a>, <a href="#">Multisite</a>, and <a href="#">Extended</a>. We've provided the table below for a quick look at the difference between the them, as well as a few examples of ways each license could be used. If you'd like more of the nitty-gritty details you can find them below and always feel free to reach out with any questions you have at <a href="#">themes@getbootstrap.com</a>.
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion Item -->
                </div>
                <!-- End Accordion -->
              </div>

              <div class="card-footer bg-soft-warning text-center">
                <p class="mb-0">Still have questions?</p>
                <a class="link" href="./page-contacts.html">Contact our friendly support team <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End FAQ -->

        <!-- Shape -->
        <div class="shape-container">
          <div class="shape shape-bottom text-primary-dark">
            <svg width="3000" height="400" viewBox="0 0 3000 400" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 400H3000V0L0 400Z" fill="#fff"/>
            </svg>
          </div>
        </div>
        <!-- End Shape -->

        <!-- Clients -->
        <div class="bg-primary-dark">
          <div class="container content-space-b-1 content-space-t-2">
            <!-- Heading -->
            <div class="text-center mb-4">
              <h5 class="text-white">Thousands of world’s leading companies trust Space</h5>
            </div>
            <!-- End Heading -->

            <div class="row">
              <div class="col py-3">
                <img class="avatar avatar-xl avatar-4x3" src="/assets/svg/brands/vidados-white.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-3">
                <img class="avatar avatar-xl avatar-4x3" src="/assets/svg/brands/fitbit-white.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-3">
                <img class="avatar avatar-xl avatar-4x3" src="/assets/svg/brands/forbes-white.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-3">
                <img class="avatar avatar-xl avatar-4x3" src="/assets/svg/brands/mailchimp-white.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-3">
                <img class="avatar avatar-xl avatar-4x3" src="/assets/svg/brands/layar-white.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Clients -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->

      <!-- ========== FOOTER ========== -->
      <footer class="bg-primary-dark border-top border-white-10">
        <div class="container">
          <div class="row content-space-1">
            <div class="col-lg-3 mb-7 mb-lg-0">
              <!-- Logo -->
              <div class="mb-5">
                <a class="navbar-brand" href="./index.html" aria-label="Space">
                  <img class="navbar-brand-logo" src="/assets/svg/logos/logo-white.svg" alt="Image Description">
                </a>
              </div>
              <!-- End Logo -->

              <span class="d-block">
                <label for="selectLanguage" class="form-label text-white">Choose language</label>
              </span>

              <!-- Button Group -->
              <div class="btn-group">
                <button type="button" class="btn btn-soft-light btn-sm dropdown-toggle" id="selectLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </span>
                </button>

                <div class="dropdown-menu">
                  <a class="dropdown-item d-flex align-items-center active" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/>
                    <span>English (UK)</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/>
                    <span>Deutsch</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/>
                    <span>Dansk</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/>
                    <span>Español</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/>
                    <span>Nederlands</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/>
                    <span>Italiano</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/>
                    <span>中文 (繁體)</span>
                  </a>
                </div>
              </div>
              <!-- End Button Group -->
            </div>
            <!-- End Col -->

            <div class="col-sm mb-7 mb-sm-0">
              <span class="text-cap text-primary-light">Resources</span>

              <!-- List -->
              <ul class="list-unstyled list-py-1 mb-0">
                <li><a class="link-sm link-light" href="#">Blog</a></li>
                <li><a class="link-sm link-light" href="#">Guidance</a></li>
                <li><a class="link-sm link-light" href="#">Customer Stories</a></li>
                <li><a class="link-sm link-light" href="#">Support <i class="bi-box-arrow-up-right ms-1"></i></a></li>
                <li><a class="link-sm link-light" href="#">API</a></li>
                <li><a class="link-sm link-light" href="#">Packages</a></li>
              </ul>
              <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm mb-7 mb-sm-0">
              <span class="text-cap text-primary-light">Company</span>

              <!-- List -->
              <ul class="list-unstyled list-py-1 mb-0">
                <li><a class="link-sm link-light" href="#">Belonging <i class="bi-box-arrow-up-right ms-1"></i></a></li>
                <li><a class="link-sm link-light" href="#">Company</a></li>
                <li><a class="link-sm link-light" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-2">We're hiring</span></a></li>
                <li><a class="link-sm link-light" href="#">Contacts</a></li>
                <li><a class="link-sm link-light" href="#">Security</a></li>
              </ul>
              <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <span class="text-cap text-primary-light">Platform</span>

              <!-- List -->
              <ul class="list-unstyled list-py-1 mb-0">
                <li><a class="link-sm link-light" href="#">Web</a></li>
                <li><a class="link-sm link-light" href="#">Mobile</a></li>
                <li><a class="link-sm link-light" href="#">iOS</a></li>
                <li><a class="link-sm link-light" href="#">Android</a></li>
                <li><a class="link-sm link-light" href="#">Figma Importing</a></li>
              </ul>
              <!-- End List -->
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <span class="text-cap text-primary-light">Legal</span>

              <!-- List -->
              <ul class="list-unstyled list-py-1 mb-5">
                <li><a class="link-sm link-light" href="#">Terms of use</a></li>
                <li><a class="link-sm link-light" href="#">Privacy policy <i class="bi-box-arrow-up-right ms-1"></i></a></li>
              </ul>
              <!-- End List -->

              <span class="text-cap text-primary-light">Docs</span>

              <!-- List -->
              <ul class="list-unstyled list-py-1 mb-0">
                <li><a class="link-sm link-light" href="#">Documentation</a></li>
                <li><a class="link-sm link-light" href="#">Snippets</a></li>
              </ul>
              <!-- End List -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="border-top border-white-10"></div>

          <div class="row align-items-md-end py-5">
            <div class="col-md mb-3 mb-md-0">
              <p class="text-white mb-0">© Space. 2021 Htmlstream. All rights reserved.</p>
            </div>

            <div class="col-md d-md-flex justify-content-md-end">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                    <i class="bi-github"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-icon btn-sm btn-soft-light rounded-circle" href="#">
                    <i class="bi-slack"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>
        </div>
      </footer>
      <!-- ========== END FOOTER ========== -->

      <!-- ========== SECONDARY CONTENTS ========== -->
      <!-- Sign Up -->
      <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-- Header -->
            <div class="modal-close">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body p-sm-5">
              <!-- Log in -->
              <div id="signupModalFormLogin" style="display: none; opacity: 0;">
                <!-- Heading -->
                <div class="text-center mb-7">
                  <h4>Log in</h4>
                  <p>Don't have an account yet?
                    <a class="js-animation-link" href="javascript:;" role="button"
                       data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormSignup",
                             "groupName": "idForm"
                           }'>Sign up here</a>
                  </p>
                </div>
                <!-- End Heading -->

                <div class="d-grid gap-2">
                  <a class="btn btn-white btn-lg" href="#">
                      <span class="d-flex justify-content-center align-items-center">
                        <img class="avatar avatar-xss me-2" src="/assets/svg/brands/google-icon.svg" alt="Image Description">
                        Log in with Google
                      </span>
                  </a>

                  <a class="js-animation-link btn btn-primary btn-lg" href="#"
                     data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLoginWithEmail",
                           "groupName": "idForm"
                         }'>Log in with Email</a>
                </div>
              </div>
              <!-- End Log in -->

              <!-- Log in with Modal -->
              <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
                <!-- Heading -->
                <div class="text-center mb-7">
                  <h4>Log in</h4>
                  <p>Don't have an account yet?
                    <a class="js-animation-link" href="javascript:;" role="button"
                       data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormSignup",
                             "groupName": "idForm"
                           }'>Sign up here</a>
                  </p>
                </div>
                <!-- End Heading -->

                <form class="js-validate needs-validation" novalidate>
                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                    <span class="invalid-feedback">Please enter a valid email address.</span>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                      <a class="js-animation-link form-label-link" href="javascript:;"
                         data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormResetPassword",
                           "groupName": "idForm"
                         }'>Forgot Password?</a>
                    </div>

                    <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                    <span class="invalid-feedback">Please enter a valid password.</span>
                  </div>
                  <!-- End Form -->

                  <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                  </div>
                </form>
              </div>
              <!-- End Log in with Modal -->

              <!-- Sign up -->
              <div id="signupModalFormSignup">
                <!-- Heading -->
                <div class="text-center mb-7">
                  <h4>Sign up</h4>
                  <p>Already have an account?
                    <a class="js-animation-link" href="javascript:;" role="button"
                       data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormLogin",
                             "groupName": "idForm"
                           }'>Log in here</a>
                  </p>
                </div>
                <!-- End Heading -->

                <div class="d-grid gap-3">
                  <a class="btn btn-white btn-lg" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss me-2" src="/assets/svg/brands/google-icon.svg" alt="Image Description">
                      Sign up with Google
                    </span>
                  </a>

                  <a class="js-animation-link btn btn-primary btn-lg" href="#"
                     data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignupWithEmail",
                           "groupName": "idForm"
                         }'>Sign up with Email</a>

                  <div class="text-center">
                    <p class="small mb-0">By continuing you agree to our <a href="./page-terms.html">Terms and Conditions</a></p>
                  </div>
                </div>
              </div>
              <!-- End Sign up -->

              <!-- Sign up with Modal -->
              <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
                <!-- Heading -->
                <div class="text-center mb-7">
                  <h4>Sign up</h4>
                  <p>Already have an account?
                    <a class="js-animation-link" href="javascript:;" role="button"
                       data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormLogin",
                             "groupName": "idForm"
                           }'>Log in here</a>
                  </p>
                </div>
                <!-- End Heading -->

                <form class="js-validate need-validate" novalidate>
                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                    <span class="invalid-feedback">Please enter a valid email address.</span>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                    <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="mb-3" data-hs-validation-validate-class>
                    <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                    <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-hs-validation-equal-field="#signupModalFormSignupPassword">
                    <span class="invalid-feedback">Password does not match the confirm password.</span>
                  </div>
                  <!-- End Form -->

                  <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
                  </div>

                  <div class="text-center">
                    <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
                  </div>
                </form>
              </div>
              <!-- End Sign up with Modal -->

              <!-- Reset Password -->
              <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
                <!-- Heading -->
                <div class="text-center mb-7">
                  <h4>Forgot password?</h4>
                  <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
                </div>
                <!-- En dHeading -->

                <form class="js-validate need-validate" novalidate>
                  <div class="mb-3">
                    <!-- Form -->
                    <div class="d-flex justify-content-between align-items-center">
                      <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                      <a class="js-animation-link form-label-link" href="javascript:;"
                         data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormLogin",
                             "groupName": "idForm"
                           }'>
                        <i class="bi-chevron-left small me-1"></i> Back to Log in
                      </a>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                      <span class="invalid-feedback">Please enter a valid email address.</span>
                    </div>
                    <!-- End Form -->

                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- End Reset Password -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="modal-footer d-block text-center py-sm-5">
              <small class="text-cap mb-4">Trusted by the world's best teams</small>

              <div class="w-85 mx-auto">
                <div class="row justify-content-between">
                  <div class="col">
                    <img class="img-fluid" src="/assets/svg/brands/gitlab-gray.svg" alt="Logo">
                  </div>
                  <!-- End Col -->

                  <div class="col">
                    <img class="img-fluid" src="/assets/svg/brands/fitbit-gray.svg" alt="Logo">
                  </div>
                  <!-- End Col -->

                  <div class="col">
                    <img class="img-fluid" src="/assets/svg/brands/flow-xo-gray.svg" alt="Logo">
                  </div>
                  <!-- End Col -->

                  <div class="col">
                    <img class="img-fluid" src="/assets/svg/brands/layar-gray.svg" alt="Logo">
                  </div>
                  <!-- End Col -->
                </div>
              </div>
              <!-- End Row -->
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>


      <!-- Go To -->
      <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
         data-hs-go-to-options='{
           "offsetTop": 700,
           "position": {
             "init": {
               "right": "2rem"
             },
             "show": {
               "bottom": "2rem"
             },
             "hide": {
               "bottom": "-2rem"
             }
           }
         }'>
        <i class="bi-chevron-up"></i>
      </a>
      <!-- ========== END SECONDARY CONTENTS ========== -->

</x-www-app>
