<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/assets/libs/flatpickr/dist/flatpickr.min.css" />

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="/assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="/assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.min.css">

    {{-- <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/dashboard/dashboard-analytics.html" /> --}}

    <title>Analytics | Geeks - Bootstrap 5 Admin Dashboard Template</title>
  </head>

  <body>
    <!-- Wrapper -->
    <div id="db-wrapper">
      <!-- navbar vertical -->
      <!-- Sidebar -->
<nav class="navbar-vertical navbar">
  <div class="vh-100" data-simplebar>
    <!-- Brand logo -->
    <a class="navbar-brand" href="/index.html">
      <img src="/assets/images/brand/logo/logo-inverse.svg" alt="Geeks" />
    </a>
    <!-- Navbar nav -->
    <ul class="navbar-nav flex-column" id="sideNavbar">
      <li class="nav-item">
        <a
          class="nav-link "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navDashboard"
          aria-expanded="false"
          aria-controls="navDashboard">
          <i class="nav-icon fe fe-home me-2"></i>
          Dashboard
        </a>
        <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-dashboard.html">Overview</a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link  active " href="/pages/dashboard/dashboard-analytics.html">Analytics</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
          <i class="nav-icon fe fe-book me-2"></i>
          Courses
        </a>
        <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-course-overview.html">All Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-course-category.html">Courses Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-course-category-single.html">Category Single</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
          <i class="nav-icon fe fe-user me-2"></i>
          User
        </a>
        <div id="navProfile" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-instructor.html">Instructor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-students.html">Students</a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon fe fe-book-open me-2"></i>
          CMS
        </a>
        <div id="navCMS" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-cms-overview.html">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-cms-post.html">All Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-cms-post-new.html">New Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/admin-cms-post-category.html">Category</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
          <i class="nav-icon fe fe-file me-2"></i>
          Project
        </a>
        <div id="navProject" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/project-grid.html">Grid</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/project-list.html">List</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link  collapsed "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navprojectSingle"
                aria-expanded="false"
                aria-controls="navprojectSingle">
                Single
              </a>
              <div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/project-overview.html">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/project-task.html">Task</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/project-budget.html">Budget</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/project-team.html">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/project-files.html">Files</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/project-summary.html">Summary</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/add-project.html">Create Project</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navAuthentication"
          aria-expanded="false"
          aria-controls="navAuthentication">
          <i class="nav-icon fe fe-lock me-2"></i>
          Authentication
        </a>
        <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/sign-in.html">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/sign-up.html">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/forget-password.html">Forget Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/notification-history.html">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/404-error.html">404 Error</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navecommerce"
          aria-expanded="false"
          aria-controls="navecommerce">
          <i class="nav-icon fe fe-shopping-bag me-2"></i>
          Ecommerce
        </a>
        <div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a
                class="nav-link  collapsed "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navproduct"
                aria-expanded="false"
                aria-controls="navproduct">
                Product
              </a>
              <div id="navproduct" class="collapse " data-bs-parent="#navProduct">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/ecommerce/product-grid.html">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/ecommerce/product-grid-with-sidebar.html">Grid Sidebar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/ecommerce/products.html">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/ecommerce/product-single.html">Product Single</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/ecommerce/product-single-v2.html">Product Single v2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/pages/dashboard/ecommerce/add-product.html">Add Product</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/shopping-cart.html">Shopping Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/checkout.html">Checkout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/order.html">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/order-single.html">Order Single</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/order-history.html">Order History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/order-summary.html">Order Summary</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/customers.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/customer-single.html">Customer Single</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/ecommerce/add-customer.html">Add Customer</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navlayouts" aria-expanded="false" aria-controls="navlayouts">
          <i class="nav-icon fe fe-layout me-2"></i>
          Layouts
        </a>
        <div id="navlayouts" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/layouts/layout-horizontal.html">Top</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/layouts/layout-compact.html">Compact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/layouts/layout-vertical.html">Vertical</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Apps</div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="/pages/dashboard/chat-app.html">
          <i class="nav-icon fe fe-message-square me-2"></i>
          Chat
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="/pages/dashboard/task-kanban.html">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-trello">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
              <rect x="7" y="7" width="3" height="9"></rect>
              <rect x="14" y="7" width="3" height="5"></rect>
            </svg>
          </span>
          <span class="ms-2">Task</span>
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="/pages/dashboard/mail.html">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </span>
          <span class="ms-2">Mail</span>
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="/pages/dashboard/calendar.html">
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-calendar">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
          </span>
          <span class="ms-2">Calendar</span>
        </a>
      </li>
      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Components</div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navTables" aria-expanded="false" aria-controls="navTables">
          <i class="nav-icon fe fe-database me-2"></i>
          Tables
        </a>
        <div id="navTables" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/basic-table.html">Basic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/datatables.html">Data Tables</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link " href="/pages/help-center.html">
          <i class="nav-icon fe fe-help-circle me-2"></i>
          Help Center
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navSiteSetting"
          aria-expanded="false"
          aria-controls="navSiteSetting">
          <i class="nav-icon fe fe-settings me-2"></i>
          Site Setting
        </a>
        <div id="navSiteSetting" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/setting-general.html">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/setting-google.html">Google</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/setting-social.html">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/setting-social-login.html">Social Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/setting-payment.html">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/pages/dashboard/setting-smpt.html">SMPT</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a
          class="nav-link  collapsed "
          href="#"
          data-bs-toggle="collapse"
          data-bs-target="#navMenuLevel"
          aria-expanded="false"
          aria-controls="navMenuLevel">
          <i class="nav-icon fe fe-corner-left-down me-2"></i>
          Menu Level
        </a>
        <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a
                class="nav-link "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navMenuLevelSecond"
                aria-expanded="false"
                aria-controls="navMenuLevelSecond">
                Two Level
              </a>
              <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link " href="#">NavItem 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">NavItem 2</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link  collapsed "
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#navMenuLevelThree"
                aria-expanded="false"
                aria-controls="navMenuLevelThree">
                Three Level
              </a>
              <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a
                      class="nav-link  collapsed "
                      href="#"
                      data-bs-toggle="collapse"
                      data-bs-target="#navMenuLevelThreeOne"
                      aria-expanded="false"
                      aria-controls="navMenuLevelThreeOne">
                      NavItem 1
                    </a>
                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link " href="#">NavChild Item 1</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Nav Item 2</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Documentation</div>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link" href="/docs/index.html">
          <i class="nav-icon fe fe-clipboard me-2"></i>
          Documentation
        </a>
      </li>
      <!-- Nav item -->
      <li class="nav-item">
        <a class="nav-link" href="/docs/changelog.html">
          <i class="nav-icon fe fe-git-pull-request me-2"></i>
          Changelog
          <span class="text-primary ms-1" id="changelog"></span>
        </a>
      </li>
    </ul>
    <!-- Card -->
    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8 border-0">
      <div class="card-body py-6">
        <img src="/assets/images/background/giftbox.png" alt="" />
        <div class="mt-4">
          <h5 class="text-white">Unlimited Access</h5>
          <p class="text-white-50 fs-6">Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now</p>
          <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
        </div>
      </div>
    </div>
  </div>
</nav>

      <!-- Page Content -->
      <main id="page-content">
        <div class="header">
    <!-- navbar -->
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
        </a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="search" class="form-control ps-6" placeholder="Search Entire Dashboard" />
            </form>
        </div>
        <!--Navbar nav -->
        <div class="ms-auto d-flex">
            <div class="dropdown">
                <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <i class="bi theme-icon-active"></i>
                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                            <i class="bi theme-icon bi-sun-fill"></i>
                            <span class="ms-2">Light</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <i class="bi theme-icon bi-moon-stars-fill"></i>
                            <span class="ms-2">Dark</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                            <i class="bi theme-icon bi-circle-half"></i>
                            <span class="ms-2">Auto</span>
                        </button>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                <li class="dropdown stopevent">
                    <a
                        class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
                        href="#"
                        role="button"
                        id="dropdownNotification"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fe fe-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                        <div>
                            <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                <span class="h4 mb-0">Notifications</span>
                                <a href="# ">
                                    <span class="align-middle">
                                        <i class="fe fe-settings me-1"></i>
                                    </span>
                                </a>
                            </div>
                            <!-- List group -->
                            <ul class="list-group list-group-flush" data-simplebar style="max-height: 300px">
                                <li class="list-group-item bg-light">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="/assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                        <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                2 hours ago,
                                                            </span>
                                                            <span class="ms-1">2:19 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"></a>
                                            <div>
                                                <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                    <i class="fe fe-x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="/assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                        <p class="mb-3">Just launched a new Courses React for Beginner.</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:20 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="/assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                        <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-info me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:56 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <a class="text-body" href="#">
                                                <div class="d-flex">
                                                    <img src="/assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                        <p class="mb-3">You earn new certificate for complete the Javascript Beginner course.</p>
                                                        <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-award text-warning me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:56 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="border-top px-3 pt-3 pb-0">
                                <a href="/pages/notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- List -->
                <li class="dropdown ms-2">
                    <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                            <img alt="avatar" src="/assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="/assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                                <div class="ms-3 lh-1">
                                    <h5 class="mb-1">Annette Black</h5>
                                    <p class="mb-0">annette@geeksui.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li class="dropdown-submenu dropstart-lg">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    <i class="fe fe-circle me-2"></i>
                                    Status
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-success me-2"></span>
                                            Online
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-secondary me-2"></span>
                                            Offline
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-warning me-2"></span>
                                            Away
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="badge-dot bg-danger me-2"></span>
                                            Busy
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/profile-edit.html">
                                    <i class="fe fe-user me-2"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/student-subscriptions.html">
                                    <i class="fe fe-star me-2"></i>
                                    Subscription
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-settings me-2"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="/index.html">
                                    <i class="fe fe-power me-2"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

        <!-- Container fluid -->
        <section class="container-fluid p-4">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- page header -->
              <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                <div>
                  <h1 class="mb-0 h2 fw-bold">Analytics</h1>
                </div>
                <div class="d-flex gap-3">
                  <!-- form -->
                  <div class="input-group">
                    <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon2" />

                    <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                  </div>
                  <!-- button -->
                  <a href="#" class="btn btn-primary">Setting</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-4">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
              <!-- card -->
              <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                  <div class="row">
                    <!-- col -->
                    <div class="col-12">
                      <span class="fw-semibold text-uppercase fs-6 ls-md">User</span>
                    </div>
                    <!-- col -->
                    <div class="col-6">
                      <h1 class="fw-bold mt-2 mb-0 h2">30.6k</h1>
                      <p class="text-success fw-semibold mb-0">
                        <i class="fe fe-trending-up me-1"></i>
                        +20.9$
                      </p>
                    </div>
                    <!-- chart -->
                    <div class="col-6 d-flex align-items-center">
                      <div id="userChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
              <!-- card -->
              <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                  <div class="row">
                    <!-- col -->
                    <div class="col-12">
                      <span class="fw-semibold text-uppercase fs-6 ls-md">Unique Visitors</span>
                    </div>
                    <!-- col -->
                    <div class="col-6">
                      <h1 class="fw-bold mt-2 mb-0 h2">256k</h1>
                      <p class="text-danger fw-semibold mb-0">
                        <i class="fe fe-trending-down me-1"></i>
                        5%
                      </p>
                    </div>
                    <!-- chart -->
                    <div class="col-6 d-flex align-items-center">
                      <div id="visitorChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
              <!-- card -->
              <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                  <div class="row">
                    <!-- col -->
                    <div class="col-12">
                      <span class="fw-semibold text-uppercase fs-6 ls-md">Bounce Rate</span>
                    </div>
                    <!-- col -->
                    <div class="col-6">
                      <h1 class="fw-bold mt-2 mb-0 h2">51.46%</h1>
                      <p class="text-success fw-semibold mb-0">
                        <i class="fe fe-trending-up me-1"></i>
                        +1200
                      </p>
                    </div>
                    <!-- chart -->
                    <div class="col-6 d-flex align-items-center">
                      <div id="bounceChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
              <!-- card -->
              <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                  <div class="row">
                    <!-- col -->
                    <div class="col-12">
                      <span class="fw-semibold text-uppercase fs-6 ls-md">Average visit time</span>
                    </div>
                    <!-- col -->
                    <div class="col-6">
                      <h1 class="fw-bold mt-2 mb-0 h2">1m:17s</h1>
                      <p class="text-success fw-semibold mb-0">
                        <i class="fe fe-trending-up me-1"></i>
                        12%
                      </p>
                    </div>
                    <!-- chart -->
                    <div class="col-6 d-flex align-items-center">
                      <div id="userChartExample"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-4">
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
              <!-- card -->
              <div class="card h-100">
                <div class="card-header">
                  <h4 class="mb-0">Sessions</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                  <!-- chart -->
                  <div id="sessionChart"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Active User</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                  <div class="row">
                    <!-- col -->
                    <div class="col-4">
                      <div class="d-flex flex-column gap-2">
                        <span class="fw-semibold">30 days</span>
                        <div>
                          <h1 class="fw-bold mb-0 h2">12,698</h1>
                          <p class="text-success fw-semibold mb-0">
                            <i class="fe fe-trending-up me-1"></i>
                            4.6%
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <div class="col-4">
                      <div class="d-flex flex-column gap-2">
                        <span class="fw-semibold">7 days</span>
                        <div>
                          <h1 class="fw-bold mb-0 h2">2.65K</h1>
                          <p class="text-danger fw-semibold mb-0">
                            <i class="fe fe-trending-down me-1"></i>
                            4.6%
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <div class="col-4">
                      <div class="d-flex flex-column gap-2">
                        <span class="fw-semibold">1 days</span>
                        <div>
                          <h1 class="fw-bold mb-0 h2">1.34K</h1>
                          <p class="text-success fw-semibold mb-0">
                            <i class="fe fe-trending-up me-1"></i>
                            4.6%
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- chart -->
                  <div id="support-chart1"></div>
                  <div class="fs-6 d-flex justify-content-between mt-2 ps-2">
                    <div class="chart-label">01 Jan, 2020</div>
                    <div class="chart-label">30 Jan, 2020</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-4">
            <div class="col-12 col-md-12 col-lg-12 col-xl-4">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Users by Country</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                  <!-- map -->
                  <div id="locationmap" style="width: 100%; height: 250px"></div>
                  <table class="table table-sm table-borderless mt-3 mb-0">
                    <tbody>
                      <tr>
                        <td>United States</td>
                        <td>22,120</td>
                        <td>34.54%</td>
                      </tr>
                      <tr>
                        <td>India</td>
                        <td>12,756</td>
                        <td>22.43%</td>
                      </tr>
                      <tr>
                        <td>United Kingdom</td>
                        <td>8,864</td>
                        <td>34.54%</td>
                      </tr>
                      <tr>
                        <td>Sweden</td>
                        <td>6,749</td>
                        <td>5.29%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Traffic Channel</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                  <!-- chart -->
                  <div id="trafficDountChart"></div>
                  <!-- table -->

                  <table class="table table-sm table-borderless mb-0 mt-5">
                    <tbody>
                      <tr>
                        <td class="d-flex flex-row gap-2">
                          <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-primary" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Organic Search</span>
                        </td>
                        <td>2,120</td>
                        <td>4.54%</td>
                      </tr>
                      <tr>
                        <td class="d-flex flex-row gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-success" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Direct</span>
                        </td>
                        <td>639</td>
                        <td>4.37%</td>
                      </tr>
                      <tr>
                        <td class="d-flex flex-row gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-danger" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Refferrals</span>
                        </td>
                        <td>520</td>
                        <td>45.14%</td>
                      </tr>
                      <tr>
                        <td class="d-flex flex-row gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-info" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Social Media</span>
                        </td>
                        <td>116</td>
                        <td>12.24%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Operating System</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                  <div id="operatingSystem"></div>
                  <div class="mt-4 d-flex justify-content-center">
                    <!-- list -->
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item mx-3">
                        <h5 class="mb-0 d-flex align-items-center lh-1 gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-danger" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Window</span>
                        </h5>
                      </li>
                      <li class="list-inline-item mx-3">
                        <h5 class="mb-0 d-flex align-items-center lh-1 gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-success" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>macOS</span>
                        </h5>
                      </li>
                      <li class="list-inline-item mx-3">
                        <h5 class="mb-0 d-flex align-items-center lh-1 gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-primary" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Linux</span>
                        </h5>
                      </li>
                      <li class="list-inline-item ms-3">
                        <h5 class="mb-0 d-flex align-items-center fs-5 lh-1 gap-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-square-fill text-info" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"></path>
                            </svg>
                          </span>
                          <span>Android</span>
                        </h5>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-12 col-md-12 col-lg-12 col-xl-4">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Browsers</h4>
                </div>

                <!-- table -->
                <table class="table mb-0 table-hover table-centered">
                  <tbody>
                    <tr>
                      <td>
                        <img src="/assets/images/browser-svg/chrome.svg" alt="chrome" class="me-2" />
                        <span class="align-middle">Google Chrome</span>
                      </td>
                      <td>21.54%</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="/assets/images/browser-svg/firefox.svg" alt="firefox" class="me-2" />
                        <span class="align-middle">Mozilla Firefox</span>
                      </td>
                      <td>14.43%</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="/assets/images/browser-svg/brave.svg" alt="brave" class="me-2" />
                        <span class="align-middle">Brave</span>
                      </td>
                      <td>14.43%</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="/assets/images/browser-svg/safari.svg" alt="safari" class="me-2" />
                        <span class="align-middle">Apple Safari</span>
                      </td>
                      <td>8.54%</td>
                    </tr>

                    <tr>
                      <td>
                        <img src="/assets/images/browser-svg/ie.svg" alt="ie" class="me-2" />
                        <span class="align-middle">Internet Export</span>
                      </td>
                      <td>6.21%</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="/assets/images/browser-svg/opera.svg" alt="opera" class="me-2" />
                        <span class="align-middle">Opera Mini</span>
                      </td>
                      <td>8%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Social Media Traffic</h4>
                </div>
                <!-- table -->
                <table class="table mb-0 text-nowrap table-hover table-centered">
                  <tbody>
                    <tr>
                      <td>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-facebook text-primary" viewBox="0 0 16 16">
                            <path
                              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                          </svg>
                        </span>
                        <span class="ms-2 d-none d-md-inline-block">Facebook</span>
                      </td>
                      <td>
                        <span>3,454</span>
                        <span>(24%)</span>
                      </td>
                      <td>
                        <div class="progress" style="height: 5px">
                          <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-instagram text-primary" viewBox="0 0 16 16">
                            <path
                              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                          </svg>
                        </span>
                        <span class="ms-2 d-none d-md-inline-block">Instagram</span>
                      </td>
                      <td>
                        <span>2,351</span>
                        <span>(18.5%)</span>
                      </td>
                      <td>
                        <div class="progress" style="height: 5px">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-twitter text-primary" viewBox="0 0 16 16">
                            <path
                              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                          </svg>
                        </span>
                        <span class="ms-2 d-none d-md-inline-block">Twitter</span>
                      </td>
                      <td>
                        <span>2,243</span>
                        <span>(6.5%)</span>
                      </td>
                      <td>
                        <div class="progress" style="height: 5px">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-linkedin text-primary" viewBox="0 0 16 16">
                            <path
                              d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                          </svg>
                        </span>
                        <span class="ms-2 d-none d-md-inline-block">LinkedIn</span>
                      </td>
                      <td>
                        <span>812</span>
                        <span>(5.1%)</span>
                      </td>
                      <td>
                        <div class="progress" style="height: 5px">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-github text-primary" viewBox="0 0 16 16">
                            <path
                              d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                          </svg>
                        </span>
                        <span class="ms-2 d-none d-md-inline-block">Github</span>
                      </td>
                      <td>
                        <span>621</span>
                        <span>(0.3%)</span>
                      </td>
                      <td>
                        <div class="progress" style="height: 5px">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-youtube text-primary" viewBox="0 0 16 16">
                            <path
                              d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                          </svg>
                        </span>
                        <span class="ms-2 d-none d-md-inline-block">Youtube</span>
                      </td>
                      <td>
                        <span>450</span>
                        <span>(0.12%)</span>
                      </td>
                      <td>
                        <div class="progress" style="height: 5px">
                          <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4">
              <!-- card -->
              <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                  <h4 class="mb-0">Most View Pages</h4>
                </div>
                <!-- table -->

                <div class="table-responsive">
                  <table class="table mb-0 table-hover table-centered">
                    <thead class="table-light">
                      <tr>
                        <th>Page</th>
                        <th>Exits</th>
                        <th>Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          /
                          <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                        </td>
                        <td>32</td>
                        <td>1,243</td>
                      </tr>
                      <tr>
                        <td>
                          /landings/courses.html
                          <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                        </td>
                        <td>26</td>
                        <td>943</td>
                      </tr>
                      <tr>
                        <td>
                          /landings/lead.html
                          <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                        </td>
                        <td>22</td>
                        <td>856</td>
                      </tr>
                      <tr>
                        <td>
                          /dashboard.html
                          <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                        </td>
                        <td>18</td>
                        <td>621</td>
                      </tr>
                      <tr>
                        <td>
                          /checkout.html
                          <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                        </td>
                        <td>14</td>
                        <td>316</td>
                      </tr>
                      <tr>
                        <td>
                          /blog.html
                          <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                        </td>
                        <td>9</td>
                        <td>253</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="/assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="/assets/js/theme.min.js"></script>

    <script src="/assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
    <script src="/assets/libs/jsvectormap/dist/maps/world.js"></script>
    <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/js/vendors/chart.js"></script>

    <script src="/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/assets/js/vendors/flatpickr.js"></script>
  </body>
</html>