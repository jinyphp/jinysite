<x-www-app>
    <x-www-layout>
        <x-www-main>
            <main>
                <section class="pt-5 pb-5">
                  <div class="container">
                    <!-- User info -->
                    <div class="row align-items-center">
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
                          <!-- Collapse navbar -->
                          <div class="collapse navbar-collapse" id="sidenav">
                            <div class="navbar-nav flex-column">
                              <span class="navbar-header">Subscription</span>
                              <!-- List -->
                              <ul class="list-unstyled ms-n2 mb-4">
                                <!-- Nav item -->
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
                                <li class="nav-item">
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
                              <span class="navbar-header">Account Settings</span>
                              <!-- List -->
                              <ul class="list-unstyled ms-n2 mb-0">
                                <!-- Nav item -->
                                <li class="nav-item active">
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
                        <div class="card">
                          <!-- Card header -->
                          <div class="card-header">
                            <h3 class="mb-0">Profile Details</h3>
                            <p class="mb-0">You have full control to manage your own account setting.</p>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="d-lg-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center mb-4 mb-lg-0">
                                <img src="../assets/images/avatar/avatar-3.jpg" id="img-uploaded" class="avatar-xl rounded-circle" alt="avatar" />
                                <div class="ms-3">
                                  <h4 class="mb-0">Your avatar</h4>
                                  <p class="mb-0">PNG or JPG no bigger than 800px wide and tall.</p>
                                </div>
                              </div>
                              <div>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Update</a>
                                <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                              </div>
                            </div>
                            <hr class="my-5" />
                            <div>
                              <h4 class="mb-0">Personal Details</h4>
                              <p class="mb-4">Edit your personal information and address.</p>
                              <!-- Form -->
                              <form class="row gx-3 needs-validation" novalidate>
                                <!-- First name -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditFname">First Name</label>
                                  <input type="text" id="profileEditFname" name="profileEditFname" class="form-control" placeholder="First Name" required />
                                  <div class="invalid-feedback">Please enter first name.</div>
                                </div>
                                <!-- Last name -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditLname">Last Name</label>
                                  <input type="text" id="profileEditLname" name="profileEditLname" class="form-control" placeholder="Last Name" required />
                                  <div class="invalid-feedback">Please enter last name.</div>
                                </div>
                                <!-- Phone -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditPhone">Phone</label>
                                  <input type="text" id="profileEditPhone" name="profileEditPhone" class="form-control" placeholder="Phone" required />
                                  <div class="invalid-feedback">Please enter phone number.</div>
                                </div>
                                <!-- Birthday -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditBirth">Birthday</label>
                                  <input class="form-control flatpickr" type="text" placeholder="Birth of Date" id="profileEditBirth" name="profileEditBirth" />
                                  <div class="invalid-feedback">Please choose a date.</div>
                                </div>
                                <!-- Address -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditAddress1">Address Line 1</label>
                                  <input type="text" id="profileEditAddress1" name="profileEditAddress1" class="form-control" placeholder="Address" required />
                                  <div class="invalid-feedback">Please enter address.</div>
                                </div>
                                <!-- Address -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditAddress2">Address Line 2</label>
                                  <input type="text" id="profileEditAddress2" name="profileEditAddress2" class="form-control" placeholder="Address" required />
                                  <div class="invalid-feedback">Please enter address.</div>
                                </div>
                                <!-- State -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="profileEditState">State</label>
                                  <select class="form-select" data-choices="" id="profileEditState" name="profileEditState" required>
                                    <option value="">Select State</option>
                                    <option value="1">Gujarat</option>
                                    <option value="2">Rajasthan</option>
                                    <option value="3">Maharashtra</option>
                                  </select>
                                  <div class="invalid-feedback">Please choose state.</div>
                                </div>
                                <!-- Country -->
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="editCountry">Country</label>
                                  <select class="form-select" data-choices="" id="editCountry" required>
                                    <option value="">Select Country</option>
                                    <option value="1">India</option>
                                    <option value="2">UK</option>
                                    <option value="3">USA</option>
                                  </select>
                                  <div class="invalid-feedback">Please choose country.</div>
                                </div>
                                <div class="col-12">
                                  <!-- Button -->
                                  <button class="btn btn-primary" type="submit">Update Profile</button>
                                </div>
                              </form>
                            </div>
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
