<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="/assets/js/vendors/darkMode.js?slot=geeks"></script>

    <!-- Libs CSS -->
    <link href="/assets/fonts/feather/feather.css?slot=geeks" rel="stylesheet" />
    <link href="/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css?slot=geeks" rel="stylesheet" />
    <link href="/assets/libs/simplebar/dist/simplebar.min.css?slot=geeks" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.min.css?slot=geeks">

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/course-checkout.html" />
    <title>Checkout | Geeks - Bootstrap 5 Template</title>
</head>

<body>
    <!-- Page content -->
    <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <a class="navbar-brand" href="/index.html"><img src="/assets/images/brand/logo/logo.svg"
                    alt="Geeks" /></a>
            <!-- Mobile view nav wrap -->
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">
                    <a href="#langaugeModal" class="text-inherit me-2" data-bs-toggle="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-globe text-gray-500" viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                    </a>
                    <a href="/pages/sign-in.html" class="btn btn-outline-dark">Login</a>
                    <a href="/pages/sign-up.html" class="btn btn-dark d-none d-md-block">Join Now</a>
                </div>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-bs-display="static">Categories</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web
                                    Development</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">React</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">GraphQl</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Gatsby</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Grunt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Svelte</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Meteor</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">HTML5</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Angular</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Design</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Graphic Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Illustrator</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">UX / UI Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Figma Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Adobe XD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Sketch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Icon Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Photoshop</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">Mobile App</a>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">IT Software</a>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">Marketing</a>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">Music</a>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">Life Style</a>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">Business</a>
                            </li>
                            <li>
                                <a href="/pages/course-category.html" class="dropdown-item">Photography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLanding"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                            <li>
                                <h4 class="dropdown-header">Landings</h4>
                            </li>
                            <li>
                                <a href="/index.html" class="dropdown-item">
                                    <span>Home Default</span>
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="/pages/landings/landing-abroad.html" class="dropdown-item">
                                    <span>Home Abroad</span>
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="/mentor/mentor.html" class="dropdown-item">
                                    <span>Home Mentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="/pages/landings/landing-education.html" class="dropdown-item">Home
                                    Education</a>
                            </li>
                            <li>
                                <a href="/pages/landings/home-academy.html" class="dropdown-item">Home Academy</a>
                            </li>
                            <li>
                                <a href="/pages/landings/landing-courses.html" class="dropdown-item">Home Courses</a>
                            </li>
                            <li>
                                <a href="/pages/landings/landing-sass.html" class="dropdown-item">Home Sass</a>
                            </li>
                            <li class="border-bottom my-2"></li>
                            <li>
                                <a href="/pages/landings/course-lead.html" class="dropdown-item">Lead Course</a>
                            </li>
                            <li>
                                <a href="/pages/landings/request-access.html" class="dropdown-item">Request Access</a>
                            </li>

                            <li>
                                <a href="/pages/landings/landing-job.html" class="dropdown-item">Job Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Courses</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-filter-grid.html">
                                            Course Grid
                                            <span class="badge bg-primary ms-2">New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-filter-list.html">
                                            Course List
                                            <span class="badge bg-primary ms-2">New</span>
                                        </a>
                                    </li>
                                    <li class="border-bottom my-2"></li>

                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category.html">Course Category
                                            v1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-category-v2.html">
                                            Course Category v2
                                            <span class="badge bg-primary ms-2">New</span>
                                        </a>
                                    </li>
                                    <li class="border-bottom my-2"></li>

                                    <li>
                                        <a class="dropdown-item" href="/pages/course-single.html">Course Single v1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-single-v2.html">Course Single
                                            v2</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-single-v3.html">
                                            Course Single v3
                                            <span class="badge bg-primary ms-2">New</span>
                                        </a>
                                    </li>
                                    <li class="border-bottom my-2"></li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-resume.html">Course Resume</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/course-checkout.html">Course
                                            Checkout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/add-course.html">Add New Course</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Paths</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/pages/course-path.html" class="dropdown-item">Browse Path</a>
                                    </li>
                                    <li>
                                        <a href="/pages/course-path-single.html" class="dropdown-item">Path Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/blog.html">Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/blog-single.html">Article</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/blog-category.html">Category</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/blog-sidebar.html">Sidebar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Career</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/career.html">Overview</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/career-list.html">Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/career-single.html">Opening</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/portfolio.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/portfolio-single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    <span>Mentor</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/mentor/mentor.html">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/mentor/mentor-list.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/mentor/mentor-single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Job</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/landings/landing-job.html">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/jobs/job-listing.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/jobs/job-grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/jobs/job-single.html">Single</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/jobs/company-list.html">Company List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/jobs/company-about.html">Company
                                            Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Specialty</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/coming-soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/404-error.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/maintenance-mode.html">Maintenance
                                            Mode</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/terms-condition-page.html">Terms &
                                            Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>

                            <li>
                                <a class="dropdown-item" href="/pages/about.html">About</a>
                            </li>

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help
                                    Center</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/pages/help-center.html">Help Center</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/help-center-faq.html">FAQ's</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/help-center-guide.html">Guide</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/help-center-guide-single.html">Guide
                                            Single</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/help-center-support.html">Support</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/compare-plan.html">Compare Plan</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/pages/contact.html">Contact</a>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>

                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAccount"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                            <li>
                                <h4 class="dropdown-header">Accounts</h4>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Instructor</a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Instructor</h5>
                                        <p class="dropdown-text mb-0">Instructor dashboard for manage courses and
                                            earning.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/dashboard-instructor.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-courses.html">My Courses</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-order.html">Orders</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-reviews.html">Reviews</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-students.html">Students</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-payouts.html">Payouts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/instructor-earning.html">Earning</a>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Quiz</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/pages/instructor-quiz.html">Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="/pages/instructor-quiz-details.html">Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="/pages/instructor-quiz-result.html">Result</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Students</a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Students</h5>
                                        <p class="dropdown-text mb-0">Students dashboard to manage your courses and
                                            subscriptions.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/dashboard-student.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="/pages/student-subscriptions.html">Subscriptions</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/payment-method.html">Payments</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/billing-info.html">Billing Info</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/invoice-details.html">Invoice
                                            Details</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/dashboard-student.html">Bookmarked</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/dashboard-student.html">My Path</a>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Quiz</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/pages/student-quiz.html">Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="/pages/student-quiz-attempt.html">Attempt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="/pages/student-quiz-start.html">Start</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="/pages/student-quiz-result.html">Result</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Admin</a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Master Admin</h5>
                                        <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user,
                                            site setting , and work with amazing apps.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li class="px-3 d-grid">
                                        <a href="/pages/dashboard/admin-dashboard.html"
                                            class="btn btn-sm btn-primary">Go to Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/forget-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/profile-edit.html">Edit Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/security.html">Security</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/social-profile.html">Social Profiles</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/profile-privacy.html">Privacy Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/delete-profile.html">Delete Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pages/linked-accounts.html">Linked Accounts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-action border-0" href="/docs/index.html">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-file-text fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Documentations</h5>
                                            <p class="mb-0 fs-6">Browse the all documentation</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0"
                                    href="/docs/bootstrap-5-snippets.html">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-files fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Snippet</h5>
                                            <p class="mb-0 fs-6">Bunch of Snippet</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0"
                                    href="/docs/changelog.html">
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
                                <a class="list-group-item list-group-item-action border-0"
                                    href="https://geeksui.codescandy.com/geeks-rtl/" target="_blank">
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
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="langaugeModal" tabindex="-1" aria-labelledby="langaugeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="modal-title" id="langaugeModalLabel">Choose a language</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                        <a class="text-inherit fw-semibold active" href="#!">English</a>
                        <a class="text-inherit fw-semibold" href="#!">Deutsch</a>
                        <a class="text-inherit fw-semibold" href="#!">Español</a>
                        <a class="text-inherit fw-semibold" href="#!">Français</a>
                        <a class="text-inherit fw-semibold" href="#!">Indonesia</a>
                        <a class="text-inherit fw-semibold" href="#!">Italiano</a>
                        <a class="text-inherit fw-semibold" href="#!">日本語</a>
                        <a class="text-inherit fw-semibold" href="#!">한국어</a>
                        <a class="text-inherit fw-semibold" href="#!">Nederlands</a>
                        <a class="text-inherit fw-semibold" href="#!">Polski</a>
                        <a class="text-inherit fw-semibold" href="#!">Português</a>
                        <a class="text-inherit fw-semibold" href="#!">Română</a>
                        <a class="text-inherit fw-semibold" href="#!">Русский</a>
                        <a class="text-inherit fw-semibold" href="#!">ภาษาไทย</a>
                        <a class="text-inherit fw-semibold" href="#!">Türkçe</a>
                        <a class="text-inherit fw-semibold" href="#!">Tiếng Việt</a>
                        <a class="text-inherit fw-semibold" href="#!">中文(简体)</a>
                        <a class="text-inherit fw-semibold" href="#!">中文(繁體)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Page header -->
        <section class="py-lg-6 py-4 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div>
                            <h1 class="text-white display-4 mb-0">Checkout Page</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content -->
        <section class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                        <!-- Form -->
                        <form class="needs-validation" novalidate>
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card header -->
                                <div class="card-header">
                                    <h4 class="mb-0">Billing Address</h4>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row g-3">
                                        <!-- First name  -->
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="courseCheckoutFname">First Name</label>
                                            <input type="text" id="courseCheckoutFname" name="courseCheckoutFname"
                                                class="form-control" placeholder="First Name" required />
                                            <div class="invalid-feedback">Please enter first name.</div>
                                        </div>
                                        <!-- Last name  -->
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="courseCheckoutLname">Last Name</label>
                                            <input type="text" id="courseCheckoutLname" name="courseCheckoutLname"
                                                class="form-control" placeholder="Last Name" required />
                                            <div class="invalid-feedback">Please enter last name.</div>
                                        </div>
                                        <!-- Phone number  -->
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="courseCheckoutPhone">
                                                Phone Number
                                                <span>(Optional)</span>
                                            </label>
                                            <input type="text" id="courseCheckoutPhone" class="form-control"
                                                placeholder="Phone" name="courseCheckoutPhone" required />
                                            <div class="invalid-feedback">Please enter Phone Number.</div>
                                        </div>
                                        <!-- Address  -->
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="courseCheckoutAddress1">Address Line
                                                1</label>
                                            <input type="text" id="courseCheckoutAddress1" class="form-control"
                                                placeholder="Address" name="courseCheckoutAddress1" required />
                                            <div class="invalid-feedback">Please enter Address.</div>
                                        </div>
                                        <!-- Address  -->
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="courseCheckoutAddress2">
                                                Address Line 2
                                                <span>(Optional)</span>
                                            </label>
                                            <input type="text" id="courseCheckoutAddress2"
                                                name="courseCheckoutAddress2" class="form-control"
                                                placeholder="Address" required />
                                            <div class="invalid-feedback">Please enter first Address.</div>
                                        </div>
                                        <!-- State -->
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="courseCheckoutState">State</label>
                                            <select class="form-select" data-choices="" id="courseCheckoutState"
                                                required>
                                                <option value="">Select State</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose a State.</div>
                                        </div>
                                        <!-- Country  -->
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="courseCheckoutCountry">Country</label>
                                            <select class="form-select" data-choices="" id="courseCheckoutCountry"
                                                name="courseCheckoutCountry" required>
                                                <option value="">Select Country</option>
                                                <option value="India">India</option>
                                                <option value="UK">UK</option>
                                                <option value="USA">USA</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose a country.</div>
                                        </div>
                                        <!-- Zip code  -->
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="courseCheckoutZipcode">Zip/Postal
                                                Code</label>
                                            <input type="text" id="courseCheckoutZipcode" class="form-control"
                                                name="courseCheckoutZipcode" placeholder="Zip" required />
                                            <div class="invalid-feedback">Please enter post code.</div>
                                        </div>
                                        <div class="col-12">
                                            <!-- Checkbox  -->
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    name="courseCheckoutShipping" id="courseCheckoutShipping"
                                                    required />
                                                <label class="form-check-label" for="courseCheckoutShipping">Shipping
                                                    address is the same as my billing address</label>
                                            </div>
                                            <!-- Checkbox  -->
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    name="courseCheckoutInformation" id="courseCheckoutInformation"
                                                    required />
                                                <label class="form-check-label" for="courseCheckoutInformation">Save
                                                    this information for next time</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card mb-3 mb-lg-0">
                                <!-- Card header -->
                                <div class="card-header">
                                    <h4 class="mb-0">Payment Method</h4>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-inline-flex">
                                        <div class="form-check me-3">
                                            <input type="radio" id="cardRadioone" name="cardRadioone"
                                                class="form-check-input" checked required />
                                            <label class="form-check-label" for="cardRadioone">Credit or Debit
                                                card</label>
                                        </div>
                                        <!-- Radio -->
                                        <div class="form-check">
                                            <input type="radio" id="cardRadioTwo" name="cardRadioone"
                                                class="form-check-input" required />
                                            <label class="form-check-label" for="cardRadioTwo">PayPal</label>
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <div class="row g-3" id="cardpayment">
                                        <!-- Card number -->
                                        <div class="col-12 mt-6">
                                            <!-- Card Number -->
                                            <label class="d-flex justify-content-between align-items-center form-label"
                                                for="card-mask">
                                                Card Number
                                                <span>
                                                    <svg width="18" height="18" aria-hidden="true"
                                                        focusable="false" data-prefix="fab" data-icon="cc-amex"
                                                        class="svg-inline--fa fa-cc-amex text-primary" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M325.1 167.8c0-16.4-14.1-18.4-27.4-18.4l-39.1-.3v69.3H275v-25.1h18c18.4 0 14.5 10.3 14.8 25.1h16.6v-13.5c0-9.2-1.5-15.1-11-18.4 7.4-3 11.8-10.7 11.7-18.7zm-29.4 11.3H275v-15.3h21c5.1 0 10.7 1 10.7 7.4 0 6.6-5.3 7.9-11 7.9zM279 268.6h-52.7l-21 22.8-20.5-22.8h-66.5l-.1 69.3h65.4l21.3-23 20.4 23h32.2l.1-23.3c18.9 0 49.3 4.6 49.3-23.3 0-17.3-12.3-22.7-27.9-22.7zm-103.8 54.7h-40.6v-13.8h36.3v-14.1h-36.3v-12.5h41.7l17.9 20.2zm65.8 8.2l-25.3-28.1L241 276zm37.8-31h-21.2v-17.6h21.5c5.6 0 10.2 2.3 10.2 8.4 0 6.4-4.6 9.2-10.5 9.2zm-31.6-136.7v-14.6h-55.5v69.3h55.5v-14.3h-38.9v-13.8h37.8v-14.1h-37.8v-12.5zM576 255.4h-.2zm-194.6 31.9c0-16.4-14.1-18.7-27.1-18.7h-39.4l-.1 69.3h16.6l.1-25.3h17.6c11 0 14.8 2 14.8 13.8l-.1 11.5h16.6l.1-13.8c0-8.9-1.8-15.1-11-18.4 7.7-3.1 11.8-10.8 11.9-18.4zm-29.2 11.2h-20.7v-15.6h21c5.1 0 10.7 1 10.7 7.4 0 6.9-5.4 8.2-11 8.2zm-172.8-80v-69.3h-27.6l-19.7 47-21.7-47H83.3v65.7l-28.1-65.7H30.7L1 218.5h17.9l6.4-15.3h34.5l6.4 15.3H100v-54.2l24 54.2h14.6l24-54.2v54.2zM31.2 188.8l11.2-27.6 11.5 27.6zm477.4 158.9v-4.5c-10.8 5.6-3.9 4.5-156.7 4.5 0-25.2.1-23.9 0-25.2-1.7-.1-3.2-.1-9.4-.1 0 17.9-.1 6.8-.1 25.3h-39.6c0-12.1.1-15.3.1-29.2-10 6-22.8 6.4-34.3 6.2 0 14.7-.1 8.3-.1 23h-48.9c-5.1-5.7-2.7-3.1-15.4-17.4-3.2 3.5-12.8 13.9-16.1 17.4h-82v-92.3h83.1c5 5.6 2.8 3.1 15.5 17.2 3.2-3.5 12.2-13.4 15.7-17.2h58c9.8 0 18 1.9 24.3 5.6v-5.6c54.3 0 64.3-1.4 75.7 5.1v-5.1h78.2v5.2c11.4-6.9 19.6-5.2 64.9-5.2v5c10.3-5.9 16.6-5.2 54.3-5V80c0-26.5-21.5-48-48-48h-480c-26.5 0-48 21.5-48 48v109.8c9.4-21.9 19.7-46 23.1-53.9h39.7c4.3 10.1 1.6 3.7 9 21.1v-21.1h46c2.9 6.2 11.1 24 13.9 30 5.8-13.6 10.1-23.9 12.6-30h103c0-.1 11.5 0 11.6 0 43.7.2 53.6-.8 64.4 5.3v-5.3H363v9.3c7.6-6.1 17.9-9.3 30.7-9.3h27.6c0 .5 1.9.3 2.3.3H456c4.2 9.8 2.6 6 8.8 20.6v-20.6h43.3c4.9 8-1-1.8 11.2 18.4v-18.4h39.9v92h-41.6c-5.4-9-1.4-2.2-13.2-21.9v21.9h-52.8c-6.4-14.8-.1-.3-6.6-15.3h-19c-4.2 10-2.2 5.2-6.4 15.3h-26.8c-12.3 0-22.3-3-29.7-8.9v8.9h-66.5c-.3-13.9-.1-24.8-.1-24.8-1.8-.3-3.4-.2-9.8-.2v25.1H151.2v-11.4c-2.5 5.6-2.7 5.9-5.1 11.4h-29.5c-4-8.9-2.9-6.4-5.1-11.4v11.4H58.6c-4.2-10.1-2.2-5.3-6.4-15.3H33c-4.2 10-2.2 5.2-6.4 15.3H0V432c0 26.5 21.5 48 48 48h480.1c26.5 0 48-21.5 48-48v-90.4c-12.7 8.3-32.7 6.1-67.5 6.1zm36.3-64.5H575v-14.6h-32.9c-12.8 0-23.8 6.6-23.8 20.7 0 33 42.7 12.8 42.7 27.4 0 5.1-4.3 6.4-8.4 6.4h-32l-.1 14.8h32c8.4 0 17.6-1.8 22.5-8.9v-25.8c-10.5-13.8-39.3-1.3-39.3-13.5 0-5.8 4.6-6.5 9.2-6.5zm-57 39.8h-32.2l-.1 14.8h32.2c14.8 0 26.2-5.6 26.2-22 0-33.2-42.9-11.2-42.9-26.3 0-5.6 4.9-6.4 9.2-6.4h30.4v-14.6h-33.2c-12.8 0-23.5 6.6-23.5 20.7 0 33 42.7 12.5 42.7 27.4-.1 5.4-4.7 6.4-8.8 6.4zm-42.2-40.1v-14.3h-55.2l-.1 69.3h55.2l.1-14.3-38.6-.3v-13.8H445v-14.1h-37.8v-12.5zm-56.3-108.1c-.3.2-1.4 2.2-1.4 7.6 0 6 .9 7.7 1.1 7.9.2.1 1.1.5 3.4.5l7.3-16.9c-1.1 0-2.1-.1-3.1-.1-5.6 0-7 .7-7.3 1zm20.4-10.5h-.1zm-16.2-15.2c-23.5 0-34 12-34 35.3 0 22.2 10.2 34 33 34h19.2l6.4-15.3h34.3l6.6 15.3h33.7v-51.9l31.2 51.9h23.6v-69h-16.9v48.1l-29.1-48.1h-25.3v65.4l-27.9-65.4h-24.8l-23.5 54.5h-7.4c-13.3 0-16.1-8.1-16.1-19.9 0-23.8 15.7-20 33.1-19.7v-15.2zm42.1 12.1l11.2 27.6h-22.8zm-101.1-12v69.3h16.9v-69.3z">
                                                        </path>
                                                    </svg>
                                                    <svg width="18" height="18" aria-hidden="true"
                                                        focusable="false" data-prefix="fab" data-icon="cc-mastercard"
                                                        class="svg-inline--fa fa-cc-mastercard text-primary"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M482.9 410.3c0 6.8-4.6 11.7-11.2 11.7-6.8 0-11.2-5.2-11.2-11.7 0-6.5 4.4-11.7 11.2-11.7 6.6 0 11.2 5.2 11.2 11.7zm-310.8-11.7c-7.1 0-11.2 5.2-11.2 11.7 0 6.5 4.1 11.7 11.2 11.7 6.5 0 10.9-4.9 10.9-11.7-.1-6.5-4.4-11.7-10.9-11.7zm117.5-.3c-5.4 0-8.7 3.5-9.5 8.7h19.1c-.9-5.7-4.4-8.7-9.6-8.7zm107.8.3c-6.8 0-10.9 5.2-10.9 11.7 0 6.5 4.1 11.7 10.9 11.7 6.8 0 11.2-4.9 11.2-11.7 0-6.5-4.4-11.7-11.2-11.7zm105.9 26.1c0 .3.3.5.3 1.1 0 .3-.3.5-.3 1.1-.3.3-.3.5-.5.8-.3.3-.5.5-1.1.5-.3.3-.5.3-1.1.3-.3 0-.5 0-1.1-.3-.3 0-.5-.3-.8-.5-.3-.3-.5-.5-.5-.8-.3-.5-.3-.8-.3-1.1 0-.5 0-.8.3-1.1 0-.5.3-.8.5-1.1.3-.3.5-.3.8-.5.5-.3.8-.3 1.1-.3.5 0 .8 0 1.1.3.5.3.8.3 1.1.5s.2.6.5 1.1zm-2.2 1.4c.5 0 .5-.3.8-.3.3-.3.3-.5.3-.8 0-.3 0-.5-.3-.8-.3 0-.5-.3-1.1-.3h-1.6v3.5h.8V426h.3l1.1 1.4h.8l-1.1-1.3zM576 81v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V81c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM64 220.6c0 76.5 62.1 138.5 138.5 138.5 27.2 0 53.9-8.2 76.5-23.1-72.9-59.3-72.4-171.2 0-230.5-22.6-15-49.3-23.1-76.5-23.1-76.4-.1-138.5 62-138.5 138.2zm224 108.8c70.5-55 70.2-162.2 0-217.5-70.2 55.3-70.5 162.6 0 217.5zm-142.3 76.3c0-8.7-5.7-14.4-14.7-14.7-4.6 0-9.5 1.4-12.8 6.5-2.4-4.1-6.5-6.5-12.2-6.5-3.8 0-7.6 1.4-10.6 5.4V392h-8.2v36.7h8.2c0-18.9-2.5-30.2 9-30.2 10.2 0 8.2 10.2 8.2 30.2h7.9c0-18.3-2.5-30.2 9-30.2 10.2 0 8.2 10 8.2 30.2h8.2v-23zm44.9-13.7h-7.9v4.4c-2.7-3.3-6.5-5.4-11.7-5.4-10.3 0-18.2 8.2-18.2 19.3 0 11.2 7.9 19.3 18.2 19.3 5.2 0 9-1.9 11.7-5.4v4.6h7.9V392zm40.5 25.6c0-15-22.9-8.2-22.9-15.2 0-5.7 11.9-4.8 18.5-1.1l3.3-6.5c-9.4-6.1-30.2-6-30.2 8.2 0 14.3 22.9 8.3 22.9 15 0 6.3-13.5 5.8-20.7.8l-3.5 6.3c11.2 7.6 32.6 6 32.6-7.5zm35.4 9.3l-2.2-6.8c-3.8 2.1-12.2 4.4-12.2-4.1v-16.6h13.1V392h-13.1v-11.2h-8.2V392h-7.6v7.3h7.6V416c0 17.6 17.3 14.4 22.6 10.9zm13.3-13.4h27.5c0-16.2-7.4-22.6-17.4-22.6-10.6 0-18.2 7.9-18.2 19.3 0 20.5 22.6 23.9 33.8 14.2l-3.8-6c-7.8 6.4-19.6 5.8-21.9-4.9zm59.1-21.5c-4.6-2-11.6-1.8-15.2 4.4V392h-8.2v36.7h8.2V408c0-11.6 9.5-10.1 12.8-8.4l2.4-7.6zm10.6 18.3c0-11.4 11.6-15.1 20.7-8.4l3.8-6.5c-11.6-9.1-32.7-4.1-32.7 15 0 19.8 22.4 23.8 32.7 15l-3.8-6.5c-9.2 6.5-20.7 2.6-20.7-8.6zm66.7-18.3H408v4.4c-8.3-11-29.9-4.8-29.9 13.9 0 19.2 22.4 24.7 29.9 13.9v4.6h8.2V392zm33.7 0c-2.4-1.2-11-2.9-15.2 4.4V392h-7.9v36.7h7.9V408c0-11 9-10.3 12.8-8.4l2.4-7.6zm40.3-14.9h-7.9v19.3c-8.2-10.9-29.9-5.1-29.9 13.9 0 19.4 22.5 24.6 29.9 13.9v4.6h7.9v-51.7zm7.6-75.1v4.6h.8V302h1.9v-.8h-4.6v.8h1.9zm6.6 123.8c0-.5 0-1.1-.3-1.6-.3-.3-.5-.8-.8-1.1-.3-.3-.8-.5-1.1-.8-.5 0-1.1-.3-1.6-.3-.3 0-.8.3-1.4.3-.5.3-.8.5-1.1.8-.5.3-.8.8-.8 1.1-.3.5-.3 1.1-.3 1.6 0 .3 0 .8.3 1.4 0 .3.3.8.8 1.1.3.3.5.5 1.1.8.5.3 1.1.3 1.4.3.5 0 1.1 0 1.6-.3.3-.3.8-.5 1.1-.8.3-.3.5-.8.8-1.1.3-.6.3-1.1.3-1.4zm3.2-124.7h-1.4l-1.6 3.5-1.6-3.5h-1.4v5.4h.8v-4.1l1.6 3.5h1.1l1.4-3.5v4.1h1.1v-5.4zm4.4-80.5c0-76.2-62.1-138.3-138.5-138.3-27.2 0-53.9 8.2-76.5 23.1 72.1 59.3 73.2 171.5 0 230.5 22.6 15 49.5 23.1 76.5 23.1 76.4.1 138.5-61.9 138.5-138.4z">
                                                        </path>
                                                    </svg>

                                                    <svg width="18" height="18" aria-hidden="true"
                                                        focusable="false" data-prefix="fab" data-icon="cc-discover"
                                                        class="svg-inline--fa fa-cc-discover text-primary"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M520.4 196.1c0-7.9-5.5-12.1-15.6-12.1h-4.9v24.9h4.7c10.3 0 15.8-4.4 15.8-12.8zM528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-44.1 138.9c22.6 0 52.9-4.1 52.9 24.4 0 12.6-6.6 20.7-18.7 23.2l25.8 34.4h-19.6l-22.2-32.8h-2.2v32.8h-16zm-55.9.1h45.3v14H444v18.2h28.3V217H444v22.2h29.3V253H428zm-68.7 0l21.9 55.2 22.2-55.2h17.5l-35.5 84.2h-8.6l-35-84.2zm-55.9-3c24.7 0 44.6 20 44.6 44.6 0 24.7-20 44.6-44.6 44.6-24.7 0-44.6-20-44.6-44.6 0-24.7 20-44.6 44.6-44.6zm-49.3 6.1v19c-20.1-20.1-46.8-4.7-46.8 19 0 25 27.5 38.5 46.8 19.2v19c-29.7 14.3-63.3-5.7-63.3-38.2 0-31.2 33.1-53 63.3-38zm-97.2 66.3c11.4 0 22.4-15.3-3.3-24.4-15-5.5-20.2-11.4-20.2-22.7 0-23.2 30.6-31.4 49.7-14.3l-8.4 10.8c-10.4-11.6-24.9-6.2-24.9 2.5 0 4.4 2.7 6.9 12.3 10.3 18.2 6.6 23.6 12.5 23.6 25.6 0 29.5-38.8 37.4-56.6 11.3l10.3-9.9c3.7 7.1 9.9 10.8 17.5 10.8zM55.4 253H32v-82h23.4c26.1 0 44.1 17 44.1 41.1 0 18.5-13.2 40.9-44.1 40.9zm67.5 0h-16v-82h16zM544 433c0 8.2-6.8 15-15 15H128c189.6-35.6 382.7-139.2 416-160zM74.1 191.6c-5.2-4.9-11.6-6.6-21.9-6.6H48v54.2h4.2c10.3 0 17-2 21.9-6.4 5.7-5.2 8.9-12.8 8.9-20.7s-3.2-15.5-8.9-20.5z">
                                                        </path>
                                                    </svg>

                                                    <svg width="18" height="18" aria-hidden="true"
                                                        focusable="false" data-prefix="fab" data-icon="cc-visa"
                                                        class="svg-inline--fa fa-cc-visa text-primary" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2.3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4.2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2.2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2.1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </label>
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" id="card-mask"
                                                    placeholder="xxxx-xxxx-xxxx-xxxx" required />
                                                <span class="input-group-text" id="basic-addon2"><i
                                                        class="fe fe-lock"></i></span>
                                                <div class="invalid-feedback">Please enter card number.</div>
                                            </div>
                                            <small>Full name as displayed on card.</small>
                                        </div>
                                        <!-- Month -->
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="courseCheckoutMonth">Month</label>
                                            <select class="form-select" data-choices="" id="courseCheckoutMonth"
                                                name="courseCheckoutMonth" required>
                                                <option value="">Month</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="Sep">Sep</option>
                                                <option value="Oct">Oct</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose a Month.</div>
                                        </div>
                                        <!-- Year -->
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="courseCheckoutYear">Year</label>
                                            <select class="form-select" data-choices="" id="courseCheckoutYear"
                                                required>
                                                <option value="">Year</option>
                                                <option value="June">2018</option>
                                                <option value="July">2019</option>
                                                <option value="August">2020</option>
                                                <option value="Sep">2021</option>
                                                <option value="Oct">2022</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose a Year.</div>
                                        </div>
                                        <!-- CVV Code -->
                                        <div class="col-12 col-md-4">
                                            <label for="digit-mask" class="form-label">
                                                CVV Code
                                                <i class="fe fe-help-circle ms-1 fs-6" data-bs-toggle="tooltip"
                                                    data-placement="right"
                                                    title="A 3 - digit number, typically printed on the back of a card."></i>
                                            </label>
                                            <input type="password" class="form-control" name="cvv"
                                                id="digit-mask" placeholder="xxx" maxlength="3" required />
                                            <div class="invalid-feedback">Please enter a code.</div>
                                        </div>
                                        <!-- Name on card -->
                                        <div class="col-12">
                                            <label for="courseCheckoutName" class="form-label">Name on Card</label>
                                            <input id="courseCheckoutName" type="text" class="form-control"
                                                name="courseCheckoutName" placeholder="Name" required />
                                            <div class="invalid-feedback">Please enter a card name.</div>
                                        </div>
                                        <!-- Country -->
                                        <div class="mb-3 col-6">
                                            <label class="form-label" for="courseCheckoutCountry2">Country</label>
                                            <select class="form-select" data-choices="" id="courseCheckoutCountry2"
                                                name="courseCheckoutCountry2" required>
                                                <option value="">Choose</option>
                                                <option value="India">India</option>
                                                <option value="uk">UK</option>
                                                <option value="usa">USA</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose a country.</div>
                                        </div>
                                        <!-- Zip Code -->
                                        <div class="mb-3 col-6">
                                            <label for="postalcode" class="form-label">Zip/Postal Code</label>
                                            <input id="postalcode" type="text" class="form-control"
                                                name="postalcode" placeholder="Zipcode" required />
                                            <div class="invalid-feedback">Please enter postal code.</div>
                                        </div>
                                        <!-- CheckBox -->
                                        <div class="col-12 mb-5">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="courseCheckoutRemember" required />
                                                <label class="form-check-label" for="courseCheckoutRemember">Remember
                                                    this card</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <!-- Button -->
                                            <div>
                                                <button type="submit" class="btn btn-primary mb-3 mb-lg-0 me-4">Make
                                                    a Payment</button>
                                            </div>
                                        </div>
                                        <!-- Text -->
                                        <div class="col-md-8 col-12 d-flex align-items-center justify-content-end">
                                            <small class="mb-0">
                                                By click start learning, you agree to our
                                                <a href="#">Terms of Service and Privacy Policy.</a>
                                            </small>
                                        </div>
                                    </div>
                                    <!-- Paypal -->
                                    <div id="internetpayment" class="row g-3">
                                        <div class="col-12 mt-6">
                                            <label for="courseCheckoutPaypal" class="form-label">PayPal</label>
                                            <input type="email" id="courseCheckoutPaypal"
                                                name="courseCheckoutPaypal" placeholder="Enter your PayPal email"
                                                class="form-control" required />
                                        </div>
                                        <div class="col-12 mt-6">
                                            <button type="submit" class="btn btn-primary">PayPal Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card border-0 mb-3">
                            <!-- Card body -->
                            <div class="p-5 text-center">
                                <span class="badge bg-warning">Selected Plan</span>
                                <div class="mb-5 mt-3">
                                    <h1 class="fw-bold">Individual</h1>
                                    <p class="mb-0">
                                        Access all
                                        <span class="text-dark fw-medium">premium courses, workshops, and mobile
                                            apps.</span>
                                        Renewed monthly.
                                    </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <span class="h3 mb-0 fw-bold text-primary">$</span>
                                    <div class="display-4 fw-bold text-primary">39</div>
                                    <span class="align-self-end mb-1">/Monthly</span>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <div class="p-5">
                                <h4 class="fw-bold mb-4">Everything in Starter, plus:</h4>
                                <!-- List -->
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-check-circle text-success"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                            </svg>
                                        </span>
                                        <span>Offline viewing</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="me-1">
                                            <span class="me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    fill="currentColor" class="bi bi-check-circle text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg>
                                            </span>
                                            <span>
                                                <span class="fw-bold text-dark">Offline</span>
                                                projects
                                            </span>
                                        </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="me-1">
                                            <span class="me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    fill="currentColor" class="bi bi-check-circle text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg>
                                            </span>
                                            <span>
                                                <span class="fw-bold text-dark">Unlimited</span>
                                                storage
                                            </span>
                                        </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="me-1">
                                            <span class="me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    fill="currentColor" class="bi bi-check-circle text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg>
                                            </span>
                                            <span>Custom domain support</span>
                                        </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="me-1">
                                            <span class="me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    fill="currentColor" class="bi bi-check-circle text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg>
                                            </span>
                                            <span>Bulk editing</span>
                                        </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="me-1">
                                            <span class="me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    fill="currentColor" class="bi bi-check-circle text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg>
                                            </span>
                                            <span>12 / 5 support</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!-- hr -->
                            <hr class="m-0" />
                            <div class="p-4">
                                <a href="#" class="btn btn-outline-primary">Change the Plan</a>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card border-0 mb-3 mb-lg-0">
                            <!-- Card body -->
                            <div class="card-body">
                                <h3 class="mb-2">Discount Codes</h3>
                                <form>
                                    <div class="input-group">
                                        <label for="courseCheckoutApply" class="visually-hidden">Apply</label>
                                        <input type="text" class="form-control" id="courseCheckoutApply"
                                            name="courseCheckoutApply" placeholder="Enter your code"
                                            aria-describedby="couponCode" />
                                        <button class="btn btn-secondary" id="couponCode">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer bg-dark-stable py-8">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            <img src="/assets/images/svg/geeks-logo.svg" alt="geeks logo" />
                        </div>
                        <p class="mb-0">Nascetur nibh feugiat vulputate urna mauris tincidunt porttitor ultricies. Et
                            dis augue praesent congue.</p>
                        <div class="d-flex gap-2">
                            <a href="#langaugeModal" class="btn btn-outline-secondary" data-bs-toggle="modal">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                        <path
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                                    </svg>
                                </span>
                                <span class="ms-2">English</span>
                            </a>
                            <div class="dropdown">
                                <button
                                    class="btn btn-outline-secondary btn-icon rounded-circle d-flex align-items-center"
                                    type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                    aria-label="Toggle theme (auto)">
                                    <i class="bi theme-icon-active"></i>
                                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text"
                                    data-bs-theme="dark">
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="light" aria-pressed="false">
                                            <i class="bi theme-icon bi-sun-fill"></i>
                                            <span class="ms-2">Light</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark" aria-pressed="false">
                                            <i class="bi theme-icon bi-moon-stars-fill"></i>
                                            <span class="ms-2">Dark</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="auto" aria-pressed="true">
                                            <i class="bi theme-icon bi-circle-half"></i>
                                            <span class="ms-2">Auto</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Company</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">About us</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Contact us</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">News and Blogs</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Career</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Investors</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Community</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">Help and Support</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Affiliate</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Blog</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Geeks Business</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-12">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Teaching</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">Become a teacher</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">How to guide</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Documentation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-white-stable">Contact</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                                <li>
                                    Toll free:
                                    <span class="fw-semibold">+1234 567 890</span>
                                </li>
                                <li>
                                    Time:
                                    <span class="fw-semibold">9AM to 8:PM IST</span>
                                </li>
                                <li>
                                    Email:
                                    <span class="fw-semibold">example@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <a href="#"><img src="/assets/images/svg/appstore.svg" alt=""
                                    class="img-fluid" /></a>
                            <a href="#"><img src="/assets/images/svg/playstore.svg" alt=""
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
                <!-- Desc -->
                <div class="col-lg-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        GeeksTheme. Powered Codescandy
                    </span>
                </div>
                <!-- Links -->
                <div class="col-12 col-lg-6">
                    <nav
                        class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
                        <a class="nav-link active" href="#!">Terms of use</a>
                        <a class="nav-link" href="#!">Cookies Settings</a>
                        <a class="nav-link" href="#!">Privacy policy</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="/assets/libs/@popperjs/core/dist/umd/popper.min.js?slot=geeks"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js?slot=geeks"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js?slot=geeks"></script>

    <!-- Theme JS -->
    <script src="/assets/js/theme.min.js?slot=geeks?slot=geeks"></script>

    <script src="/assets/libs/imask/dist/imask.min.js?slot=geeks"></script>
    <script src="/assets/js/vendors/inputmask.js?slot=geeks"></script>
    <script src="/assets/js/vendors/validation.js?slot=geeks"></script>
    <script src="/assets/libs/choices.js/public/assets/scripts/choices.min.js?slot=geeks"></script>

    <script src="/assets/js/vendors/choice.js?slot=geeks"></script>
</body>

</html>