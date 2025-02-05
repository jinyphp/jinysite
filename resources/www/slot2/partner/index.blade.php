<x-www-app>
    <x-www-layout>
        {{-- section1 : hero --}}
        <div class="" style="background-color: #F1F5F9;">
            <div class="container mb-10">
                <div class="row py-8 align-items-center">
                    <div class="col-8">
                        <span class="text-primary fw-semibold">지니PHP 협력사</span>
                        <h1 class="display-3 my-3">파트너 프로그램</h1>
                        <p class="mb-5 fs-3">파트너를 통하여 프로젝트를 원활하게 진행할 수 있습니다.</p>

                        <div class="d-flex gap-2 align-items-center">
                            <a href="/partner/list" class="btn btn-primary">파트너 찾기</a>
                            <a href="/partner/join" class="text-dark text-decoration-none">
                                <span>파트너 가입하기</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="/assets/images/job/png/job-hero-section.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>

        {{-- section2 --}}
        <div class="container mb-3" style="margin-top:-30px">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="bg-white rounded-3 mt-n8 border">
                        <div class="row justify-content-around py-5 gy-4 gy-lg-0">
                            <div class="col-xl-2 col-md-4 text-center px-4">
                                <div class="h1 mb-0">25+</div>
                                <span>Years of Experience</span>
                            </div>
                            <div class="col-xl-2 col-md-4 text-center px-4">
                                <div class="h1 mb-0">450</div>
                                <span>Top University Partner</span>
                            </div>
                            <div class="col-xl-2 col-md-4 text-center px-4">
                                <div class="h1 mb-0">99%</div>
                                <span>Successful Visa Process Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section3 --}}
        <section class="py-10">
            <div class="container py-8">
                <!--row-->
                <div class="row">
                    <div class="col-12">
                        <!--text-->
                        <div class="text-center mb-8">
                            <h4>최고의 브랜드 창업자/운영자로부터 배우세요.</h4>
                        </div>
                    </div>
                </div>
                <style>
                    .brand-item:not(:nth-child(4n)) {
                        border-right: 1px solid #dee2e6;
                    }
                </style>
                <!--row-->
                <div class="row row-cols-2 row-cols-md-4 row-cols-lg-7 g-4">
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-slack.svg" alt="logo 1">
                    </div>
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-linkedin.svg" alt="logo 2">
                    </div>
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-zoom.svg" alt="logo 3">
                    </div>
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-nvidia.svg" alt="logo 4">
                    </div>
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-microsoft.svg" alt="logo 5">
                    </div>
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-google.svg" alt="logo 6">
                    </div>
                    <!--logo-->
                    <div class="col text-center brand-item">
                        <img src="/assets/images/mentor/brand-netflix.svg" alt="logo 7">
                    </div>
                </div>
            </div>
        </section>


        {{-- section4 --}}
        <section class="py-5">
            <div class="container">
                <!-- 제목 -->
                <div class="text-center mb-5">
                    <h2 class="h1">카테고리별 파트너 찾기</h2>
                </div>

                <!-- 카드 그리드 -->
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-4">
                    <!-- Engineering -->
                    <div class="col">
                        <a href="/partner/category" class="card h-100 text-decoration-none text-dark border-2">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <div class="d-inline-block p-3 rounded-circle bg-light">
                                        <i class="bi bi-gear fs-4 text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="card-title mb-1">Engineering</h5>
                                <p class="card-text text-muted">21 Mentors</p>
                            </div>
                        </a>
                    </div>

                    <!-- Design -->
                    <div class="col">
                        <a href="/partner/category" class="card h-100 text-decoration-none text-dark border-2">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <div class="d-inline-block p-3 rounded-circle bg-light">
                                        <i class="bi bi-palette2 fs-4 text-danger"></i>
                                    </div>
                                </div>
                                <h5 class="card-title mb-1">Design</h5>
                                <p class="card-text text-muted">23 Mentors</p>
                            </div>
                        </a>
                    </div>

                    <!-- Data Science -->
                    <div class="col">
                        <a href="/partner/category" class="card h-100 text-decoration-none text-dark border-2">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <div class="d-inline-block p-3 rounded-circle bg-light">
                                        <i class="bi bi-diagram-3 fs-4 text-info"></i>
                                    </div>
                                </div>
                                <h5 class="card-title mb-1">Data Science</h5>
                                <p class="card-text text-muted">42 Mentors</p>
                            </div>
                        </a>
                    </div>

                    <!-- Business -->
                    <div class="col">
                        <a href="/partner/category" class="card h-100 text-decoration-none text-dark border-2">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <div class="d-inline-block p-3 rounded-circle bg-light">
                                        <i class="bi bi-briefcase fs-4 text-success"></i>
                                    </div>
                                </div>
                                <h5 class="card-title mb-1">Business</h5>
                                <p class="card-text text-muted">45 Mentors</p>
                            </div>
                        </a>
                    </div>

                    <!-- Product -->
                    <div class="col">
                        <a href="/partner/category" class="card h-100 text-decoration-none text-dark border-2">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <div class="d-inline-block p-3 rounded-circle bg-light">
                                        <i class="bi bi-box fs-4 text-warning"></i>
                                    </div>
                                </div>
                                <h5 class="card-title mb-1">Product</h5>
                                <p class="card-text text-muted">56 Mentors</p>
                            </div>
                        </a>
                    </div>

                    <!-- Explore All -->
                    <div class="col">
                        <a href="/partner/category" class="card h-100 text-decoration-none text-dark border-2">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <div class="d-inline-block p-3 rounded-circle bg-light">
                                        <i class="bi bi-grid fs-4 text-primary"></i>
                                    </div>
                                </div>
                                <h5 class="card-title mb-1">Explore All</h5>
                                <p class="card-text text-muted">700+ Mentors</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- section5 --}}
        <section class="py-lg-8 bg-light" style="padding-top: 4rem;padding-bottom: 4rem">
            <div class="container py-lg-12">
                <!--row-->
                <div class="row mb-4">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="text-center mb-6 d-flex flex-column gap-2">
                            <!--heading-->
                            <h2 class="mb-0 mx-xl-8 h1">다양한 파트너를 만나보세요</h2>
                            <!--para-->
                            <p class="mb-0">자신에게 맞는 파트너를 찾아 기술 지원을 요청해 보세요.</p>
                        </div>
                    </div>
                </div>

                @livewire('site-partner')

            </div>
        </section>

        {{-- section6 --}}
        <section class="" style="padding-top: 6rem;padding-bottom: 6rem">
            <div class="container py-lg-6">
                <!--row-->
                <div class="row mb-8">
                    <div class="col-12">
                        <div class="text-center d-flex flex-column gap-2">
                            <!--heading-->
                            <h2 class="mb-0 h1">3단계로 시작하기</h2>
                            <!--para-->
                            <p class="mb-0">파트너 협력을 위해서 3단계를 따라해보세요
                            </p>
                        </div>
                    </div>
                </div>
                <!--row-->
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-8 align-items-center gy-4">
                            <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                                <div class="d-flex flex-column gap-4">
                                    <div class="d-flex flex-column gap-2">
                                        <!--heading-->
                                        <h3 class="mb-0 h2">이상적인 파트너 찾기</h3>
                                        <!--para-->
                                        <p class="mb-0 fs-3">검증된 파트너 중에서 선호도에 맞는
                                            이상적인 파트너를 선택하세요</p>
                                    </div>
                                    <div>
                                        <a href="/partner/list" class="btn btn-outline-secondary">파트너 찾기</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                                <!--img-->
                                <div>
                                    <img src="/assets/images/mentor/mento-step-one.jpg" alt="stpes 1"
                                        class="img-fluid rounded-4 w-100">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-8 align-items-center gy-4">
                            <div
                                class="col-md-6 col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 order-md-1 order-2 mb-xxl-6">
                                <!--img-->
                                <div>
                                    <img src="../assets/images/mentor/mento-step-two.jpg" alt="stpes 2"
                                        class="img-fluid rounded-4 w-100">
                                </div>
                            </div>
                            <div
                                class="col-md-6 col-xxl-4 offset-xxl-1 col-xl-5 offset-xl-1 order-xl-2 order-1 mb-xxl-6">
                                <div class="d-flex flex-column gap-4">

                                    <div class="d-flex flex-column gap-2">
                                        <!--heading-->
                                        <h3 class="mb-0 h2">파트너와 상담하기</h3>
                                        <!--para-->
                                        <p class="mb-0 fs-3">파트너와 상담을 통해 프로젝트의 목표와 방향을
                                            정확하게 설정하고 진행할 수 있습니다.</p>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#signupModal">상담 신청하기</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center gy-4">
                            <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                                <div class="d-flex flex-column gap-4">

                                    <div class="d-flex flex-column gap-2">
                                        <!--heading-->
                                        <h3 class="mb-0 h2">배우고, 소통하고, 즐기세요</h3>
                                        <!--para-->
                                        <p class="mb-0 fs-3">축하합니다!! 선택하신 파트너와 함께
                                            올바른 방향으로 맞춤형 프로젝트를 시작하세요.</p>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-outline-secondary">파트너 만나기</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                                <!--img-->
                                <div>
                                    <img src="/assets/images/mentor/mento-step-three.jpg" alt="stpes 3"
                                        class="img-fluid rounded-4 w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section7 --}}
        <div class="bg-blue-500" style="padding-top: 4rem;padding-bottom: 4rem">
            <div class="container py-lg-6">
                <!--row-->
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-12">
                        <div class="text-center mb-6 d-flex flex-column gap-2">
                            <!--heading-->
                            <h2 class="mb-0 text-white h1">고객 리뷰</h2>
                            <!--para-->
                            <p class="mb-0 text-white">
                                다양한 기업들과 1:1 파트너를 제공해왔습니다. 더욱 기쁜 것은 우리 파트너들이 5점 만점에 4.9점이라는 높은 평가를 받았다는 것입니다.
                            </p>
                        </div>
                    </div>
                </div>
                {{--
                <div class="row gy-4">
                  <div class="col-lg-4 col-12 d-flex flex-column gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <!--card-->
                      <div class="card card-light-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-3">
                          <!--img-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar 1" class="avatar avatar-md rounded-circle">
                            <h5 class="mb-0">John Deo</h5>
                          </div>

                          <div>
                            <!--para-->
                            <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                              “The generated lorem Ipsum is therefore always free from repetition,
                              <span class="text-primary">injected humour, or words etc generate</span>
                              lorem Ipsum which looks racteristic reasonable...”
                            </p>
                          </div>
                          <div class="d-flex flex-xl-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                            <!--avatar-->
                            <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar 2" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                            <div>
                              <!--content-->
                              <div class="d-flex flex-row gap-2 align-items-center">
                                <h4 class="mb-0">Akshay sharma</h4>
                                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                              </div>
                              <span class="fs-6">Software Engineer at Palantir</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <!--card-->
                      <div class="card card-light-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-3">
                          <!--img-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar 3" class="avatar avatar-md rounded-circle">
                            <h5 class="mb-0">Gladys Colbert</h5>
                          </div>
                          <div>
                            <!--para-->
                            <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                              “Velit consectetur in adipisicing culpa eiusmod commodo eu ex dolore. Officia irure nisi dolor dolore velit fugiat. Aliqua sint aliqua aute elit eu sunt.”
                            </p>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                            <!--avatar-->
                            <img src="../assets/images/avatar/avatar-8.jpg" alt="avatar 4" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                            <div>
                              <!--content-->
                              <div class="d-flex flex-row gap-2 align-items-center">
                                <h4 class="mb-0">Jessica Lupien</h4>
                                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                              </div>
                              <span class="fs-6">Senior Data Engineer at Zoom</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 col-12 d-flex flex-column gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <!--card-->
                      <div class="card card-light-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-3">
                          <!--img-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar 5" class="avatar avatar-md rounded-circle">
                            <h5 class="mb-0">Bev Robertson</h5>
                          </div>
                          <div>
                            <!--para-->
                            <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                              “Velit consectetur in adipisicing culpa eiusmod commodo eu ex dolore.
                              <span class="text-primary">Officia irure nisi dolor</span>
                              dolore velit fugiat. Aliqua sint aliqua aute elit eu sunt.”
                            </p>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                            <!--avatar-->
                            <img src="../assets/images/avatar/avatar-4.jpg" alt="avatar 6" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                            <div>
                              <!--content-->
                              <div class="d-flex flex-row gap-2 align-items-center">
                                <h4 class="mb-0">Andrew Lupien</h4>
                                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                              </div>
                              <span class="fs-6">Quality Assurance Engineer at Amazon</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <!--card-->
                      <div class="card card-light-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-3">
                          <!--img-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <img src="../assets/images/avatar/avatar-9.jpg" alt="avatar 7" class="avatar avatar-md rounded-circle">
                            <h5 class="mb-0">Doris Esparza</h5>
                          </div>
                          <div>
                            <!--para-->
                            <p class="mb-0 fst-italic fs-4 pe-xxl-5">Proident quis deserunt qui ex exercitation veniam id Lorem est cupidatat ipsum irure aliquip ad.</p>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                            <!--avatar-->
                            <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar 8" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                            <div>
                              <!--content-->
                              <div class="d-flex flex-row gap-2 align-items-center">
                                <h4 class="mb-0">James Anderson</h4>
                                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                              </div>
                              <span class="fs-6">UI/UX Designer at Figma</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 col-12 d-flex flex-column gap-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <!--card-->
                      <div class="card card-light-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-3">
                          <!--img-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <img src="../assets/images/avatar/avatar-5.jpg" alt="avatar 9" class="avatar avatar-md rounded-circle">
                            <h5 class="mb-0">Marlene Turner</h5>
                          </div>
                          <div>
                            <!--para-->
                            <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                              Id duis velit enim officia ad nisi incididunt magna ex dolor minim deserunt dolor. Esse incididunt cillum nostrud esse do quis amet labore amet nulla eiusmod amet nulla Lorem.
                              Incididunt ex voluptate irure officia laboris ea proident est qui.
                            </p>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                            <!--avatar-->
                            <img src="../assets/images/avatar/avatar-6.jpg" alt="avatar 10" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                            <div>
                              <!--content-->
                              <div class="d-flex flex-row gap-2 align-items-center">
                                <h4 class="mb-0">Bernice Perry</h4>
                                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                              </div>
                              <span class="fs-6">Senior business analyst at InstaCart</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <!--card-->
                      <div class="card card-light-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-3">
                          <!--img-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <img src="../assets/images/avatar/avatar-11.jpg" alt="avatar 11" class="avatar avatar-md rounded-circle">
                            <h5 class="mb-0">Daniel Groleau</h5>
                          </div>
                          <div>
                            <!--para-->
                            <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                              “The generated lorem Ipsum is therefore always free from repetition, injected humour, or words etc generate lorem Ipsum which looks racteristic reasonable...”.
                            </p>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                            <!--avatar-->
                            <img src="../assets/images/avatar/avatar-12.jpg" alt="avatar 12" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block">
                            <div>
                              <!--content-->
                              <div class="d-flex flex-row gap-2 align-items-center">
                                <h4 class="mb-0">Patrice Long</h4>
                                <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                              </div>
                              <span class="fs-6">Software Engineer at Microsoft</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                --}}
            </div>
        </div>

        {{-- section8 --}}
        <section style="padding-top: 4rem;padding-bottom: 4rem">
            <div class="container py-lg-8">
              <!--row-->
              <div class="row align-items-center">
                <div class="offset-xl-1 col-xl-4 col-lg-6 d-none d-lg-block">
                  <!--img-->
                  <div class="position-relative">
                    <img src="/assets/images/mentor/become-mentor.jpg" alt="mentor img" class="img-fluid w-100 rounded-4">

                </div>
                </div>
                <div class="col-xl-6 col-lg-5 offset-lg-1 offset-xl-1">
                  <div class="d-flex flex-column gap-6">
                    <div class="d-flex flex-column gap-2">
                      <!--heading-->
                      <h2 class="mb-0 h1">지금 바로 파트너 가입을 신청하세요</h2>
                      <!--para-->
                      <p class="mb-0 fs-5">파트너를 시작하기 위한 세 가지 간단한 단계를 따라하세요</p>
                    </div>
                    <div class="d-flex flex-column gap-8">
                      <div class="d-flex flex-column gap-5">
                        <div class="row">
                          <!--text-->
                          <div class="col-12">
                            <h4 class="mb-0">당신의 기술, 전문성을 통하여 나누어 보세요.</h4>
                          </div>
                        </div>
                        <div class="row gap-xxl-3">
                          <!--text-->
                          <div class="col-12">
                            <h4 class="mb-0">기술을 공유하고 수익을 창출해 보세요</h4>
                          </div>
                        </div>
                        <div class="row gap-xxl-3">
                          <!--text-->
                          <div class="col-12">
                            <h4 class="mb-0">일정을 설정하고 시간에 맞춰 만나세요</h4>
                          </div>
                        </div>
                      </div>
                      <div>
                        <a href="/partner/join" class="btn btn-primary">파트너 되기</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="container">
            <hr>
          </div>

    </x-www-layout>
</x-www-app>
