<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Codescandy" />

        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

        <!-- darkmode js -->
        <script src="./assets/js/vendors/darkMode.js"></script>

        <!-- Libs CSS -->
        <link href="./assets/fonts/feather/feather.css" rel="stylesheet" />
        <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
        <link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="./assets/css/theme.min.css" />

        <link rel="canonical" href="https://geeksui.codescandy.com/geeks/index.html" />
        <link href="./assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
        <title>Geeks - Bootstrap 5 Template</title>
    </head>

    <body>
        <main>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <a class="navbar-brand" href="./index.html"><img src="./assets/images/brand/logo/logo.svg" alt="Geeks" /></a>
                    <!-- Mobile view nav wrap -->
                    <div class="ms-auto d-flex align-items-center order-lg-3">
                        <div class="dropdown">
                            <button
                                class="btn btn-light btn-icon rounded-circle d-flex align-items-center"
                                type="button"
                                aria-expanded="false"
                                data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
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
                        <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
                            <li class="dropdown d-inline-block stopevent position-static">
                                <a
                                    class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
                                    href="#"
                                    role="button"
                                    id="dropdownNotificationSecond"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5" aria-labelledby="dropdownNotificationSecond">
                                    <div>
                                        <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                            <span class="h5 mb-0">Notifications</span>
                                            <a href="# ">
                                                <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                                            </a>
                                        </div>
                                        <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                                            <li class="list-group-item bg-light">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                                    <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
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
                                                                <img src="./assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                                    <p class="mb-3 text-body">Just launched a new Courses React for Beginner.</p>
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
                                                                <img src="./assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                                    <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
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
                                                                <img src="./assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                                    <p class="mb-3 text-body">You earn new certificate for complete the Javascript Beginner course.</p>
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
                                            <a href="./pages/notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown ms-2 d-inline-block position-static">
                                <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="./assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="./assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
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
                                            <a class="dropdown-item" href="./pages/profile-edit.html">
                                                <i class="fe fe-user me-2"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./pages/student-subscriptions.html">
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
                                            <a class="dropdown-item" href="./index.html">
                                                <i class="fe fe-power me-2"></i>
                                                Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <!-- Button -->
                        <button
                            class="navbar-toggler collapsed ms-2"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbar-default"
                            aria-controls="navbar-default"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <ul class="navbar-nav mt-3 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Browse</a>
                                <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web Development</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Bootstrap</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">React</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">GraphQl</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Gatsby</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Grunt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Svelte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Meteor</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">HTML5</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Angular</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Design</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Graphic Design</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Illustrator</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">UX / UI Design</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Figma Design</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Adobe XD</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Sketch</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Icon Design</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Photoshop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">Mobile App</a>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">IT Software</a>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">Music</a>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">Life Style</a>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">Business</a>
                                    </li>
                                    <li>
                                        <a href="./pages/course-category.html" class="dropdown-item">Photography</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                                    <li>
                                        <h4 class="dropdown-header">Landings</h4>
                                    </li>

                                    <li>
                                        <a href="./pages/landings/landing-education.html" class="dropdown-item justify-content-between">Education</a>
                                    </li>
                                    <li>
                                        <a href="./pages/landings/home-academy.html" class="dropdown-item justify-content-between">Home Academy</a>
                                    </li>
                                    <li>
                                        <a href="./pages/landings/landing-courses.html" class="dropdown-item">Courses</a>
                                    </li>
                                    <li>
                                        <a href="./pages/landings/course-lead.html" class="dropdown-item">Lead Course</a>
                                    </li>
                                    <li>
                                        <a href="./pages/landings/request-access.html" class="dropdown-item">Request Access</a>
                                    </li>
                                    <li>
                                        <a href="./pages/landings/landing-sass.html" class="dropdown-item">SaaS</a>
                                    </li>

                                    <li>
                                        <a href="./pages/landings/landing-job.html" class="dropdown-item justify-content-between">Job Listing</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Courses</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-single.html">Course Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-single-v2.html">Course Single v2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-resume.html">Course Resume</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-category.html">Course Category</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-checkout.html">Course Checkout</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/course-filter-list.html">Course List/Grid</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/add-course.html">Add New Course</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="./pages/course-path.html" class="dropdown-item">Browse Path</a>
                                            </li>
                                            <li>
                                                <a href="./pages/course-path-single.html" class="dropdown-item">Path Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/blog.html">Listing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/blog-single.html">Article</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/blog-category.html">Category</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/blog-sidebar.html">Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/career.html">Overview</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/career-list.html">Listing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/career-single.html">Opening</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/portfolio.html">List</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/portfolio-single.html">Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/landings/landing-job.html">Home</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/jobs/job-listing.html">List</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/jobs/job-grid.html">Grid</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/jobs/job-single.html">Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/jobs/company-list.html">Company List</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/jobs/company-about.html">Company Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/404-error.html">Error 404</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/maintenance-mode.html">Maintenance Mode</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/terms-condition-page.html">Terms & Conditions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="./pages/about.html">About</a>
                                    </li>

                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="./pages/help-center.html">Help Center</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/help-center-faq.html">FAQ's</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/help-center-guide.html">Guide</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/help-center-guide-single.html">Guide Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/help-center-support.html">Support</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/compare-plan.html">Compare Plan</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="./pages/contact.html">Contact</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                                <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                                    <li>
                                        <h4 class="dropdown-header">Accounts</h4>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Instructor</a>
                                        <ul class="dropdown-menu">
                                            <li class="text-wrap">
                                                <h5 class="dropdown-header text-dark">Instructor</h5>
                                                <p class="dropdown-text mb-0">Instructor dashboard for manage courses and earning.</p>
                                            </li>
                                            <li>
                                                <hr class="mx-3" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/dashboard-instructor.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-courses.html">My Courses</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-order.html">Orders</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-reviews.html">Reviews</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-students.html">Students</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-payouts.html">Payouts</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/instructor-earning.html">Earning</a>
                                            </li>
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                    Quiz
                                                    <span class="badge bg-primary ms-1">New</span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/instructor-quiz.html">Quiz</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/instructor-quiz-details.html">Single</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/instructor-quiz-result.html">Result</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Students</a>
                                        <ul class="dropdown-menu">
                                            <li class="text-wrap">
                                                <h5 class="dropdown-header text-dark">Students</h5>
                                                <p class="dropdown-text mb-0">Students dashboard to manage your courses and subscriptions.</p>
                                            </li>
                                            <li>
                                                <hr class="mx-3" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/dashboard-student.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/student-subscriptions.html">Subscriptions</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/payment-method.html">Payments</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/billing-info.html">Billing Info</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/invoice.html">Invoice</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/invoice-details.html">Invoice Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/dashboard-student.html">Bookmarked</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./pages/dashboard-student.html">My Path</a>
                                            </li>
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                    Quiz
                                                    <span class="badge bg-primary ms-1">New</span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/student-quiz.html">Quiz</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/student-quiz-attempt.html">Attempt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/student-quiz-start.html">Start</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="./pages/student-quiz-result.html">Result</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Admin</a>
                                        <ul class="dropdown-menu">
                                            <li class="text-wrap">
                                                <h5 class="dropdown-header text-dark">Master Admin</h5>
                                                <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user, site setting , and work with amazing apps.</p>
                                            </li>
                                            <li>
                                                <hr class="mx-3" />
                                            </li>
                                            <li class="px-3 d-grid">
                                                <a href="./pages/dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/sign-in.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/sign-up.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/forget-password.html">Forgot Password</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/profile-edit.html">Edit Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/security.html">Security</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/social-profile.html">Social Profiles</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/profile-privacy.html">Privacy Settings</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/delete-profile.html">Delete Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./pages/linked-accounts.html">Linked Accounts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action border-0" href="./docs/index.html">
                                            <div class="d-flex align-items-center">
                                                <i class="fe fe-file-text fs-3 text-primary"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Documentations</h5>
                                                    <p class="mb-0 fs-6">Browse the all documentation</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0" href="./docs/bootstrap-5-snippets.html">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-files fs-3 text-primary"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Snippet</h5>
                                                    <p class="mb-0 fs-6">Bunch of Snippet</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0" href="./docs/changelog.html">
                                            <div class="d-flex align-items-center">
                                                <i class="fe fe-layers fs-3 text-primary"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">
                                                        Changelog
                                                        <span class="text-primary ms-1" id="changelog"></span>
                                                    </h5>
                                                    <p class="mb-0 fs-6">See what's new</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0" href="https://geeksui.codescandy.com/geeks-rtl/" target="_blank">
                                            <div class="d-flex align-items-center">
                                                <i class="fe fe-toggle-right fs-3 text-primary"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">RTL demo</h5>
                                                    <p class="mb-0 fs-6">RTL Pages</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <label for="search" class="visually-hidden"></label>
                            <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <section class="bg-primary">
                <div class="container">
                    <!-- Hero Section -->
                    <div class="row align-items-center g-0">
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="py-7 py-lg-0">
                                <h1 class="text-white display-4 fw-bold">Welcome to Geeks UI Learning Application</h1>
                                <p class="text-white-50 mb-4 lead">Hand-picked Instructor and expertly crafted courses, designed for the modern students and entrepreneur.</p>
                                <a href="pages/course-filter-list.html" class="btn btn-dark">Browse Courses</a>
                                <a href="pages/sign-in.html" class="btn btn-white">Are You Instructor?</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
                            <img src="assets/images/hero/hero-img.png" alt="heroimg" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white py-4 shadow-sm">
                <div class="container">
                    <div class="row align-items-center g-0">
                        <!-- Features -->
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                            <div class="d-flex align-items-center">
                                <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4">
                                    <i class="fe fe-video"></i>
                                </span>
                                <div class="ms-3">
                                    <h4 class="mb-0 fw-semibold">30,000 online courses</h4>
                                    <p class="mb-0">Enjoy a variety of fresh topics</p>
                                </div>
                            </div>
                        </div>
                        <!-- Features -->
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                            <div class="d-flex align-items-center">
                                <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4">
                                    <i class="fe fe-users"></i>
                                </span>
                                <div class="ms-3">
                                    <h4 class="mb-0 fw-semibold">Expert instruction</h4>
                                    <p class="mb-0">Find the right instructor for you</p>
                                </div>
                            </div>
                        </div>
                        <!-- Features -->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="d-flex align-items-center">
                                <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4">
                                    <i class="fe fe-clock"></i>
                                </span>
                                <div class="ms-3">
                                    <h4 class="mb-0 fw-semibold">Lifetime access</h4>
                                    <p class="mb-0">Learn on your schedule</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content -->
            <section class="pt-lg-8 pb-lg-3 pt-5 pb-6">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <h2 class="mb-0">Recommended to you</h2>
                        </div>
                    </div>
                    <div class="position-relative">
                        <ul class="controls" id="sliderFirstControls">
                            <li class="prev">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <div class="sliderFirst">
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">How to easily create a website with React</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>3h 56m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(7,700)</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="lh-1 mt-3">
                                            <span class="text-dark fw-bold">$600</span>
                                            <del class="fs-6">$750</del>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Morris Mccoy</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 46m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                </svg>
                                                Advance
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(9,300)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Ted Hawkins</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-angular.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>1h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(8,890)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Juanita Bell</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Intermediate
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(13,245)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Claire Robertson</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 46m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                </svg>
                                                Advance
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(9,300)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Ted Hawkins</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-angular.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>1h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(8,890)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Juanita Bell</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Intermediate
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(13,245)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Claire Robertson</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-lg-3 pt-lg-3">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <h2 class="mb-0">Most Popular</h2>
                        </div>
                    </div>
                    <div class="position-relative">
                        <ul class="controls" id="sliderSecondControls">
                            <li class="prev">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <div class="sliderSecond">
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-gatsby.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Gatsby JS: build blog with GraphQL and React</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>3h 56m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(9,370)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Morris Mccoy</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-javascript.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Getting Started with JavaScript</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 46m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                </svg>
                                                Advance
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(5,245)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Ted Hawkins</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-css.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">CSS: ultimate CSS course from beginner to advanced</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>3h 56m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(17,000)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Juanita Bell</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-wordpress.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Wordpress: complete WordPress theme & plugin development</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Intermediate
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(16,500)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Claire Robertson</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-javascript.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Getting Started with JavaScript</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 46m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                </svg>
                                                Advance
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(5,245)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Ted Hawkins</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-css.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">CSS: ultimate CSS course from beginner to advanced</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>1h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(17,000)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Juanita Bell</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-wordpress.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Wordpress: complete WordPress theme & plugin development</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Intermediate
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(16,500)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Claire Robertson</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-lg-8 pt-lg-3 py-6">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <h2 class="mb-0">Trending</h2>
                        </div>
                    </div>
                    <div class="position-relative">
                        <ul class="controls" id="sliderThirdControls">
                            <li class="prev">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <div class="sliderThird">
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">How to easily create a website with React</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>3h 56m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(12,245)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Morris Mccoy</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 46m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                </svg>
                                                Advance
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(15,350)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-10.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Ted Hawkins</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-angular.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>1h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(6,600)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Juanita Bell</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Intermediate
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(2,500)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Claire Robertson</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 46m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                </svg>
                                                Advance
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(15,350)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-10.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Ted Hawkins</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-angular.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>1h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Beginner
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(6,600)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Juanita Bell</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="pages/course-single.html"><img src="assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>
                                                </span>
                                                <span>2h 30m</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                </svg>
                                                Intermediate
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="align-text-top">
                                                <span class="fs-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="text-warning">4.5</span>
                                            <span class="fs-6">(2,500)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="avatar" />
                                            </div>
                                            <div class="col ms-2">
                                                <span>Claire Robertson</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-reset bookmark">
                                                    <i class="fe fe-bookmark fs-4"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center g-0 border-top py-2">
                    <!-- Desc -->
                    <div class="col-md-6 col-12 text-center text-md-start">
                        <span>
                            ©
                            <span id="copyright">
                                <script>
                                    document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                                </script>
                            </span>
                            Geeks. All Rights Reserved.
                        </span>
                    </div>
                    <!-- Links -->
                    <div class="col-12 col-md-6">
                        <nav class="nav nav-footer justify-content-center justify-content-md-end">
                            <a class="nav-link active ps-0" href="#!">Privacy</a>
                            <a class="nav-link" href="#!">Terms</a>
                            <a class="nav-link" href="#!">Feedback</a>
                            <a class="nav-link" href="#!">Support</a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll top -->
        <div class="btn-scroll-top">
            <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
                <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
            </svg>
        </div>

        <x-set-actions></x-set-actions>
    <x-site-setting></x-site-setting>

        <!-- Scripts -->
        <!-- Libs JS -->
        <script src="./assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
        <script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="./assets/js/theme.min.js"></script>

        <script src="./assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>

        <script src="./assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
        <script src="./assets/js/vendors/tnsSlider.js"></script>
        <script src="./assets/js/vendors/tooltip.js"></script>
    </body>
</html>