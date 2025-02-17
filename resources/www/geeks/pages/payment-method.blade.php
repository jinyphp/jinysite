<x-www-app>
    <x-www-layout>
        <x-www-main>
            <main>
                <section class="pt-5 pb-5">
                  <div class="container">
                    <div class="row align-items-center">
                      <!-- User info -->
                      <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <!-- Bg -->
                        <div class="rounded-top" style="background: url(../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                        <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                          <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                              <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar" />
                              </div>
                              <div class="lh-1">
                                <h2 class="mb-0">
                                  Stella Flores
                                  <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Beginner">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                    </svg>
                                  </a>
                                </h2>
                                <p class="mb-0 d-block">@stellaflores</p>
                              </div>
                            </div>
                            <div>
                              <a href="profile-edit.html" class="btn btn-primary btn-sm d-none d-md-block">Account Setting</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Content -->

                    <div class="row mt-0 mt-md-4">
                      <div class="col-lg-3 col-md-4 col-12">
                        <!-- Side navbar -->
                        <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
                          <!-- Menu -->
                          <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                          <!-- Button -->
                          <button
                            class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#sidenav"
                            aria-controls="sidenav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="fe fe-menu"></span>
                          </button>
                          <!-- Collpase navbar -->
                          <div class="collapse navbar-collapse" id="sidenav">
                            <div class="navbar-nav flex-column">
                              <span class="navbar-header">Subscription</span>
                              <ul class="list-unstyled ms-n2 mb-4">
                                <li class="nav-item">
                                  <a class="nav-link" href="student-subscriptions.html">
                                    <i class="fe fe-calendar nav-icon"></i>
                                    My Subscriptions
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="billing-info.html">
                                    <i class="fe fe-credit-card nav-icon"></i>
                                    Billing Info
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item active">
                                  <a class="nav-link" href="payment-method.html">
                                    <i class="fe fe-credit-card nav-icon"></i>
                                    Payment
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="invoice.html">
                                    <i class="fe fe-clipboard nav-icon"></i>
                                    Invoice
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="student-quiz.html">
                                    <i class="fe fe-help-circle nav-icon"></i>
                                    My Quiz Attempt
                                  </a>
                                </li>
                              </ul>
                              <!-- Navbar header -->
                              <span class="navbar-header">Account Settings</span>
                              <ul class="list-unstyled ms-n2 mb-0">
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="profile-edit.html">
                                    <i class="fe fe-settings nav-icon"></i>
                                    Edit Profile
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="security.html">
                                    <i class="fe fe-user nav-icon"></i>
                                    Security
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="social-profile.html">
                                    <i class="fe fe-refresh-cw nav-icon"></i>
                                    Social Profiles
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="notifications.html">
                                    <i class="fe fe-bell nav-icon"></i>
                                    Notifications
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="profile-privacy.html">
                                    <i class="fe fe-lock nav-icon"></i>
                                    Profile Privacy
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="delete-profile.html">
                                    <i class="fe fe-trash nav-icon"></i>
                                    Delete Profile
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="linked-accounts.html">
                                    <i class="fe fe-user nav-icon"></i>
                                    Linked Accounts
                                  </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                  <a class="nav-link" href="../index.html">
                                    <i class="fe fe-power nav-icon"></i>
                                    Sign Out
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </nav>
                      </div>
                      <div class="col-lg-9 col-md-8 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                          <div class="d-lg-flex justify-content-between align-items-center card-header">
                            <div class="mb-3 mb-lg-0">
                              <h3 class="mb-0">Current Plan</h3>
                              <span>Below your current active plan information.</span>
                            </div>
                            <div>
                              <a href="#" class="btn btn-outline-primary btn-sm">Switch to Annual Billing</a>
                            </div>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                            <h2 class="fw-bold mb-0">$39/Monthly</h2>
                            <p class="mb-0">
                              Your next monthly charge of
                              <span class="text-success">$39</span>
                              will be applied to your primary payment method on
                              <span class="text-success">July 20, 2020.</span>
                            </p>
                          </div>
                        </div>
                        <!-- Card -->
                        <div class="card mb-4">
                          <!-- Card header -->
                          <div class="card-header">
                            <h3 class="mb-0">Payment Methods</h3>
                            <span>Primary payment method is used by default</span>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush">
                              <!-- List group item -->
                              <li class="list-group-item px-0 pb-3 pt-0">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex">
                                    <img src="../assets/images/creditcard/visa.svg" alt="card" class="me-3" />
                                    <div>
                                      <h5 class="mb-0">Visa ending in 1234</h5>
                                      <p class="mb-0 fs-6">Expires in 10/2021</p>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center">
                                    <span class="badge bg-success me-4">Primary</span>
                                    <span class="dropdown dropstart">
                                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="paymentDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                      </a>
                                      <span class="dropdown-menu" aria-labelledby="paymentDropdown">
                                        <span class="dropdown-header">Setting</span>
                                        <a class="dropdown-item" href="#">
                                          <i class="fe fe-edit dropdown-item-icon"></i>
                                          Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                          <i class="fe fe-trash dropdown-item-icon"></i>
                                          Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                          <i class="fe fe-credit-card dropdown-item-icon"></i>
                                          Make it Primary
                                        </a>
                                      </span>
                                    </span>
                                  </div>
                                </div>
                              </li>
                              <!-- List group item -->
                              <li class="list-group-item px-0 py-3">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex">
                                    <img src="../assets/images/creditcard/mastercard.svg" alt="card" class="me-3" />
                                    <div>
                                      <h5 class="mb-0">Mastercard ending in 1234</h5>
                                      <p class="mb-0 fs-6">Expires in 03/2022</p>
                                    </div>
                                  </div>
                                  <span class="dropdown dropstart">
                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="paymentDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                      <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="paymentDropdown1">
                                      <span class="dropdown-header">Setting</span>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-credit-card dropdown-item-icon"></i>
                                        Make it Primary
                                      </a>
                                    </span>
                                  </span>
                                </div>
                              </li>
                              <!-- List group item -->
                              <li class="list-group-item px-0 py-3">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex">
                                    <img src="../assets/images/creditcard/discover.svg" alt="card" class="me-3" />
                                    <div>
                                      <h5 class="mb-0">Discover ending in 1234</h5>
                                      <p class="mb-0 fs-6">Expires in 07/2021</p>
                                    </div>
                                  </div>
                                  <span class="dropdown dropstart">
                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="paymentDropdown2" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                      <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="paymentDropdown2">
                                      <span class="dropdown-header">Setting</span>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-credit-card dropdown-item-icon"></i>
                                        Make it Primary
                                      </a>
                                    </span>
                                  </span>
                                </div>
                              </li>
                              <!-- List group item -->
                              <li class="list-group-item px-0 py-3">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex">
                                    <img src="../assets/images/creditcard/americanexpress.svg" alt="card" class="me-3" />
                                    <div>
                                      <h5 class="mb-0">American Express ending in 1234</h5>
                                      <p class="mb-0 fs-6">Expires in 12/2021</p>
                                    </div>
                                  </div>
                                  <span class="dropdown dropstart">
                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="paymentDropdown3" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                      <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="paymentDropdown3">
                                      <span class="dropdown-header">Setting</span>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-credit-card dropdown-item-icon"></i>
                                        Make it Primary
                                      </a>
                                    </span>
                                  </span>
                                </div>
                              </li>
                              <!-- List group item -->
                              <li class="list-group-item px-0 py-3 border-bottom">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex">
                                    <img src="../assets/images/creditcard/paypal.svg" alt="card" class="me-3" />
                                    <div>
                                      <h5 class="mb-0">Paypal Express ending in 1234</h5>
                                      <p class="mb-0 fs-6">Expires in 10/2021</p>
                                    </div>
                                  </div>
                                  <span class="dropdown dropstart">
                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="paymentDropdown4" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                      <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="paymentDropdown4">
                                      <span class="dropdown-header">Setting</span>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                        Remove
                                      </a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fe fe-credit-card dropdown-item-icon"></i>
                                        Make it Primary
                                      </a>
                                    </span>
                                  </span>
                                </div>
                              </li>
                            </ul>
                            <!-- button-->
                            <a href="#" class="btn btn-outline-primary mt-4" data-bs-toggle="modal" data-bs-target="#paymentModal">Add Payment Method</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </main>
        </x-www-main>
    </x-www-layout>
</x-www-app>

