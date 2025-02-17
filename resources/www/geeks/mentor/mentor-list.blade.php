<x-www-app>
    <x-www-layout>
        <x-www-main>
<!-- Page Content -->
<main>
    <!--hero section-->
    <section class="pt-xl-8 pt-6" style="background-image: url(../assets/images/mentor/mentor-glow.svg); background-repeat: no-repeat; background-size: cover">
      <div class="container">
        <!--row-->
        <div class="row my-4">
          <div class="col-xxl-6 offset-xxl-3 col-md-8 offset-md-2 col-12">
            <div class="text-center mb-3">
              <div class="d-flex flex-column gap-3">
                <!--heading-->
                <h1 class="display-4 mb-0">
                  Book a
                  <span class="text-primary">mentor</span>
                  of your choice
                </h1>
                <!--form-->
                <form class="form-inline px-xl-8 mx-xl-8">
                  <div class="d-flex align-items-center">
                    <label for="mentorEngineering" class="visually-hidden">Work Email</label>
                    <span class="position-absolute ps-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                      </svg>
                    </span>
                    <input
                      type="search"
                      class="form-control ps-6 form-control-lg"
                      id="mentorEngineering"
                      name="mentorEngineering"
                      value="Engineering"
                      placeholder="Search by company, skills or role" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--search mentor-->
        <div class="offcanvas-xl offcanvas-bottom h-auto start-0 mx-2 mb-2 rounded-3 bottom-md-50" tabindex="-1" id="searchbar" aria-labelledby="searchbar">
          <div class="offcanvas-header pb-0">
            <h3 class="offcanvas-title" id="searchbar">Search Mentors</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#searchbar"></button>
          </div>
          <div class="offcanvas-body d-grid">
            <div class="row align-items-center g-3">
              <div class="col-12 col-xl-3">
                <div class="dropdown d-grid">
                  <button class="btn btn-outline-white dropdown-toggle text-start" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">Skills</button>
                  <div class="dropdown-menu p-4 w-100 dropdown-stick">
                    <div class="mb-4">
                      <label for="searchFormControlInput" class="form-label visually-hidden">Search</label>
                      <input type="search" class="form-control" id="searchFormControlInput" placeholder="Search" />
                    </div>

                    <ul class="list-unstyled" data-simplebar="" style="height: 250px">
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="uiCheckChecked" checked />
                            <label class="form-check-label" for="uiCheckChecked">UI Design</label>
                          </div>
                        </div>
                      </li>
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="uxCheckChecked" />
                            <label class="form-check-label" for="uxCheckChecked">UX Design</label>
                          </div>
                        </div>
                      </li>
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="softwareCheckChecked" />
                            <label class="form-check-label" for="softwareCheckChecked">Software Engineering</label>
                          </div>
                        </div>
                      </li>
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="leaderCheckChecked" />
                            <label class="form-check-label" for="leaderCheckChecked">Leadership</label>
                          </div>
                        </div>
                      </li>
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productCheckChecked" />
                            <label class="form-check-label" for="productCheckChecked">Product Management</label>
                          </div>
                        </div>
                      </li>
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="reactCheckChecked" />
                            <label class="form-check-label" for="reactCheckChecked">React js</label>
                          </div>
                        </div>
                      </li>
                      <!--list-->
                      <li class="mb-3">
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="nextCheckChecked" />
                            <label class="form-check-label" for="nextCheckChecked">Next.Js</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="awsCheckChecked" />
                            <label class="form-check-label" for="awsCheckChecked">Aws</label>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-3">
                <div class="dropdown d-grid">
                  <button class="btn btn-outline-white dropdown-toggle text-start" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Price</button>

                  <ul class="dropdown-menu p-4 w-100 dropdown-stick">
                    <!--list-->
                    <li>
                      <div>
                        <div id="priceRange" class="mb-3"></div>

                        <span id="priceRange-value"></span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-xl-3">
                <div class="dropdown d-grid">
                  <button class="btn btn-outline-white dropdown-toggle text-start" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Experience</button>

                  <ul class="dropdown-menu p-4 w-100 dropdown-stick">
                    <!--list-->
                    <li>
                      <div>
                        <div id="expRange" class="mb-3"></div>
                        <span id="expRange-value"></span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-xl-3">
                <div class="d-flex align-items-center">
                  <!--button-->
                  <button type="reset" value="reset" class="btn btn-outline-white">
                    <span class="me-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                          d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                      </svg>
                    </span>
                    Reset all filters
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--search mentor-->
      </div>
    </section>

    <!--hero section-->
    <div>
      <div class="container">
        <hr class="my-5" />
      </div>
    </div>
    <!--mentors-->
    <section class="pb-xl-8 pb-6">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="mb-4"><h2 class="mb-0 h5">3 mentors found</h2></div>
          </div>
        </div>

        <div class="col-lg-12">
          <!--row-->
          <div class="row border rounded-3 g-0 mb-3">
            <div class="col-xxl-9 col-xl-8 col-12">
              <div class="row p-lg-5 p-4 gy-5">
                <!--img-->
                <div class="col-xl-3 col-md-3">
                  <div>
                    <a href="./mentor-single.html">
                      <img src="../assets/images/mentor/mentors-1.jpg" alt="mentor 1" class="img-fluid w-100 rounded-3" />
                    </a>
                  </div>
                </div>
                <div class="col-xl-9 col-md-9">
                  <div class="d-flex flex-column gap-4">
                    <div>
                      <div class="d-flex flex-row align-items-center gap-2">
                        <!--heading-->
                        <h3 class="mb-0 h2">
                          <a href="./mentor-single.html" class="text-reset">Akshay Sharma</a>
                        </h3>
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                            <path
                              d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                          </svg>
                        </span>
                      </div>
                      <span class="fw-medium">Software Engineer</span>
                    </div>
                    <!--content-->
                    <div>
                      <span>@ Microsoft</span>
                      <div class="vr mx-2 text-gray-200"></div>
                      <span>5yrs Exp.</span>
                    </div>
                    <div class="d-none d-md-block">
                      <!--para-->
                      <p class="mb-0 pe-xl-5 pe-xxl-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam
                        ligula magcing elit. Nam ligula magcing elit. Nam ligula mag eget, tempus faucibus felis...
                      </p>
                    </div>
                    <!--badge-->
                    <div class="gap-2 d-flex flex-wrap">
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                    </div>

                    <div class="d-flex flex-row align-items-center gap-4">
                      <!--icon-->
                      <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                        </span>
                        <!--text-->
                        <span>
                          <span class="text-dark fw-bold">5.0 </span>
                          (16 Reviews)
                        </span>
                      </div>
                      <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                            <path
                              d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                          </svg>
                        </span>
                        <!--text-->
                        <span>
                          <span class="text-dark fw-bold">40+ </span>
                          Mentees
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-12">
              <div class="p-lg-5 p-4 bg-light d-flex flex-column gap-3 rounded-end-xl-3 rounded-bottom-xl-0 rounded-bottom-md-3 h-100">
                <!--content-->
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-column gap-1">
                    <span>Starting from</span>
                    <div class="d-flex flex-row align-items-center gap-1">
                      <h3 class="mb-0 h2">$125.00</h3>
                      <small>/ Month</small>
                    </div>
                  </div>
                  <!--button-->
                  <div class="d-flex d-xl-grid gap-2">
                    <a href="#!" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-outline-primary w-50 w-xl-100">Book a Free Trial</a>

                    <a href="./mentor-single.html" class="btn btn-outline-secondary w-50 w-xl-100">View Profile</a>
                  </div>
                  <div>
                    <span class="text-success fw-medium">Next Available: Tuesday June 05 2025</span>
                  </div>
                </div>
                <div class="d-flex flex-column gap-2">
                  <!--heading-->
                  <div>
                    <h4 class="mb-0">Every Month Of Mentorship</h4>
                  </div>
                  <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                          <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                          <path
                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z" />
                        </svg>
                      </span>
                      <span>1 session/week (1:1 Sessions)</span>
                    </li>
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                          <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                      </span>
                      <span>Within 12hours (Chat Support)</span>
                    </li>
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                          <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                          <path
                            fill-rule="evenodd"
                            d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                        </svg>
                      </span>
                      <span>Everyday (Tasks & Followup)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row border rounded-3 g-0 mb-3">
            <div class="col-xxl-9 col-xl-8 col-12">
              <div class="row p-lg-5 p-4 gy-5">
                <!--img-->
                <div class="col-xl-3 col-md-3">
                  <div>
                    <a href="./mentor-single.html">
                      <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 2" class="img-fluid w-100 rounded-3" />
                    </a>
                  </div>
                </div>
                <div class="col-xl-9 col-md-9">
                  <div class="d-flex flex-column gap-4">
                    <div>
                      <!--heading-->
                      <div class="d-flex flex-row align-items-center gap-2">
                        <h3 class="mb-0 h2">
                          <a href="./mentor-single.html" class="text-reset">Cathy Diehl</a>
                        </h3>
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                            <path
                              d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                          </svg>
                        </span>
                      </div>
                      <span class="fw-medium">UI/UX Designer</span>
                    </div>
                    <!--content-->
                    <div>
                      <span>@ Microsoft</span>
                      <div class="vr mx-2 text-gray-200"></div>
                      <span>3yrs Exp.</span>
                    </div>
                    <div class="d-none d-md-block">
                      <!--para-->
                      <p class="mb-0 pe-xl-5 pe-xxl-8">
                        Consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit. Nam
                        ligula magcing elit. Nam ligula mag eget, tempus faucibus felis...
                      </p>
                    </div>
                    <!--badge-->
                    <div class="gap-2 d-flex flex-wrap">
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>

                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                    </div>
                    <div class="d-flex flex-row align-items-center gap-4">
                      <!--icon-->
                      <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                        </span>
                        <!--text-->
                        <span>
                          <span class="text-dark fw-bold">3.0 </span>
                          (10 Reviews)
                        </span>
                      </div>
                      <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                            <path
                              d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                          </svg>
                        </span>
                        <!--text-->
                        <span>
                          <span class="text-dark fw-bold">20+ </span>
                          Mentees
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-12">
              <div class="p-lg-5 p-4 bg-light d-flex flex-column gap-3 rounded-end-xl-3 rounded-bottom-xl-0 rounded-bottom-md-3 h-100">
                <!--content-->
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-column gap-1">
                    <span>Starting from</span>
                    <div class="d-flex flex-row align-items-center gap-1">
                      <h3 class="mb-0 h2">$110.00</h3>
                      <small>/ Month</small>
                    </div>
                  </div>
                  <!--buttons-->
                  <div class="d-grid flex-column gap-2">
                    <div class="d-flex d-xl-grid gap-2">
                      <a href="#!" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-outline-primary w-50 w-xl-100">Book a Free Trial</a>

                      <a href="./mentor-single.html" class="btn btn-outline-secondary w-50 w-xl-100">View Profile</a>
                    </div>
                  </div>
                  <div>
                    <span class="text-success fw-medium">Next Available: Tuesday June 05 2025</span>
                  </div>
                </div>
                <div class="d-flex flex-column gap-2">
                  <!--heading-->
                  <div>
                    <h4 class="mb-0">Every Month Of Mentorship</h4>
                  </div>
                  <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                          <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                          <path
                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z" />
                        </svg>
                      </span>
                      <span>2 session/week (1:1 Sessions)</span>
                    </li>
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                          <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                      </span>
                      <span>Within 12hours (Chat Support)</span>
                    </li>
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                          <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                          <path
                            fill-rule="evenodd"
                            d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                        </svg>
                      </span>
                      <span>Everyday (Tasks & Followup)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row border rounded-3 g-0 mb-3">
            <div class="col-xxl-9 col-xl-8 col-12">
              <div class="row p-lg-5 p-4 gy-5">
                <!--img-->
                <div class="col-xl-3 col-md-3">
                  <div>
                    <a href="./mentor-single.html">
                      <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 3" class="img-fluid w-100 rounded-3" />
                    </a>
                  </div>
                </div>
                <div class="col-xl-9 col-md-9">
                  <div class="d-flex flex-column gap-4">
                    <div>
                      <!--heading-->
                      <div class="d-flex flex-row align-items-center gap-2">
                        <h3 class="mb-0 h2">
                          <a href="./mentor-single.html" class="text-reset">Andrew Lupien</a>
                        </h3>
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                            <path
                              d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                          </svg>
                        </span>
                      </div>
                      <span class="fw-medium">Senior Data Engineer</span>
                    </div>
                    <!--content-->
                    <div>
                      <span>@ Microsoft</span>
                      <div class="vr mx-2 text-gray-200"></div>
                      <span>6yrs Exp.</span>
                    </div>
                    <div class="d-none d-md-block">
                      <!--para-->
                      <p class="mb-0 pe-xl-5 pe-xxl-8">
                        Consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit. Nam
                        ligula magcing elit. Nam ligula mag eget, tempus faucibus felis...
                      </p>
                    </div>
                    <!--badges-->
                    <div class="gap-2 d-flex flex-wrap">
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                      <a href="./mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>
                    </div>
                    <div class="d-flex flex-row align-items-center gap-4">
                      <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                        </span>
                        <!--text-->
                        <span>
                          <span class="text-dark fw-bold">6.0 </span>
                          (10 Reviews)
                        </span>
                      </div>
                      <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <!--icon-->
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                            <path
                              d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                          </svg>
                        </span>
                        <!--text-->
                        <span>
                          <span class="text-dark fw-bold">50+ </span>
                          Mentees
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-12">
              <div class="p-lg-5 p-4 bg-light d-flex flex-column gap-3 rounded-end-xl-3 rounded-bottom-xl-0 rounded-bottom-md-3 h-100">
                <!--content-->
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-column gap-1">
                    <span>Starting from</span>
                    <div class="d-flex flex-row align-items-center gap-1">
                      <h3 class="mb-0 h2">$150.00</h3>
                      <small>/ Month</small>
                    </div>
                  </div>
                  <!--buttons-->
                  <div class="d-grid flex-column gap-2">
                    <div class="d-flex d-xl-grid gap-2">
                      <a href="#!" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-outline-primary w-50 w-xl-100">Book a Free Trial</a>

                      <a href="./mentor-single.html" class="btn btn-outline-secondary w-50 w-xl-100">View Profile</a>
                    </div>
                  </div>
                  <div>
                    <span class="text-success fw-medium">Next Available: Tuesday June 05 2025</span>
                  </div>
                </div>
                <div class="d-flex flex-column gap-2">
                  <!--heading-->
                  <div>
                    <h4 class="mb-0">Every Month Of Mentorship</h4>
                  </div>
                  <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                          <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                          <path
                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z" />
                        </svg>
                      </span>
                      <span>2 session/week (1:1 Sessions)</span>
                    </li>
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                          <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                      </span>
                      <span>Within 12hours (Chat Support)</span>
                    </li>
                    <!--list-->
                    <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                          <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                          <path
                            fill-rule="evenodd"
                            d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                        </svg>
                      </span>
                      <span>Everyday (Tasks & Followup)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 d-xl-none d-block">
          <div class="position-fixed start-0 m-3 bottom-0">
            <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#searchbar" aria-controls="searchbar">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders text-white me-2" viewBox="0 0 16 16">
                  <path
                    fill-rule="evenodd"
                    d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                </svg>
              </span>
              Filters
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--mentors-->
  </main>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="d-flex flex-row gap-3 align-items-center">
            <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
            <h5 class="mb-0">John Deo</h5>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-4">
            <p class="mb-0 fst-italic fs-4 pe-xxl-5">
              “The generated lorem Ipsum is therefore always free from repetition,
              <span class="text-primary">injected humour, or words etc generate</span>
              lorem Ipsum which looks racteristic reasonable...”
            </p>
          </div>
          <div class="d-flex flex-xl-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
            <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar" class="avatar avatar-md rounded-circle d-none d-xl-block" />
            <div>
              <div class="d-flex flex-row gap-2 lh-1 align-items-center align-items-center">
                <h4 class="mb-0">Akshay sharma</h4>
                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
              </div>
              <span class="fs-6">Software Engineer at Palantir</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold mb-0">Sign up</h3>
            <div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <!-- Form -->
          <form class="needs-validation" novalidate="">
            <!-- Username -->
            <div class="mb-3">
              <label for="mentorListName" class="form-label">User Name</label>
              <input type="text" id="mentorListName" class="form-control" name="mentorListName" placeholder="User Name" required="" />
              <div class="invalid-feedback">Please enter valid username.</div>
            </div>
            <!-- Email -->
            <div class="mb-3">
              <label for="mentorListEmail" class="form-label">Email</label>
              <input type="email" id="mentorListEmail" class="form-control" name="mentorListEmail" placeholder="Email address here" required="" />
              <div class="invalid-feedback">Please enter valid Email.</div>
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="mentorListPassword" class="form-label">Password</label>
              <input type="password" id="mentorListPassword" class="form-control" name="mentorListPassword" placeholder="**************" required="" />
              <div class="invalid-feedback">Please enter valid password.</div>
            </div>
            <!-- Checkbox -->

            <div>
              <!-- Button -->
              <div>
                <button type="submit" class="btn btn-primary">Create Free Account</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
        </x-www-main>
    </x-www-layout>
</x-www-app>
