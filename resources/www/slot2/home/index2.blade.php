<x-www-app>
    <x-www-layout>
        @php
            $user = Auth::user();
            $profile = userProfile();
        @endphp

        <x-www-main>
            <h2 class="h2 mt-lg-3 mb-4">환영합니다.</h2>

            <!-- User info -->
            <section class="pb-5 mb-md-3">
                <div class="d-flex justify-content-between gap-2">
                    <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden mb-3 mb-md-4"
                        style="width: 124px">
                        <img src="/home/user/avatar/{{ $user->id }}" alt="{{ $user->name }}">
                    </div>
                    <div>

                        @if (isAdmin())
                            <a href="/admin/auth" class="btn btn-outline-secondary">
                                Admin 페이지
                            </a>
                        @endif
                    </div>
                </div>

                <h2 class="h5 pb-1 pb-sm-0 mb-2 mb-sm-3">{{ $user->name }}</h2>
                <ul class="list-unstyled flex-row flex-wrap gap-sm-3 fs-sm mb-3">
                    <li class="d-flex align-items-center me-2 gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        {{ $user->email }}
                    </li>
                    <li class="d-flex align-items-center me-2 gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        {{ $profile->phone }}
                        (212) 555-7890
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>


                        {{ $profile->country }}
                        New York, Brooklyn
                    </li>
                </ul>
                <p class="fs-sm pb-sm-1 pb-md-0 mb-md-4">
                    {{ $profile->description }}
                </p>
                <a class="btn btn-outline-secondary" href="/home/profile">
                    프로필 정보 수정
                </a>
            </section>

            <!-- Subscription CTA -->
            <section>
                @livewire('site-subscription')
            </section>





            <!-- Reviews -->
            {{-- <section class="pb-5 mb-md-3">
                            <div class="d-flex align-items-center justify-content-between pb-1 pb-sm-0 mb-3 mb-sm-4">
                                <h2 class="h4 mb-0 me-3">리뷰</h2>
                                <div class="nav">
                                    <a class="nav-link position-relative px-0" href="account-reviews.html">
                                        <span class="hover-effect-underline stretched-link me-1">전체보기</span>
                                        <i class="fi-chevron-right fs-base"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-body-tertiary rounded p-4">
                                <div class="p-sm-3">
                                    <div class="row row-cols-2 row-cols-sm-4 g-3 gx-md-4">
                                        <div class="col">
                                            <h3 class="fs-sm fw-normal text-body mb-2">나에 대한 리뷰</h3>
                                            <div class="h5 mb-0">8</div>
                                        </div>
                                        <div class="col">
                                            <h3 class="fs-sm fw-normal text-body mb-2">내가 작성한 리뷰</h3>
                                            <div class="h5 mb-0">12</div>
                                        </div>
                                        <div class="col">
                                            <h3 class="fs-sm fw-normal text-body mb-2">"유용함" 표시</h3>
                                            <div class="h5 mb-0">3</div>
                                        </div>
                                        <div class="col">
                                            <h3 class="fs-sm fw-normal text-body mb-2">전체 평점</h3>
                                            <div class="h5 d-flex align-items-center lh-base mb-0"><i
                                                    class="fi-star-filled text-warning me-2"></i>4.9</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-sm-flex align-items-center pt-1 pt-md-2 mb-3">
                                        <div class="d-flex align-items-center pe-3">
                                            <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                                                style="width: 48px">
                                                <img src="assets/img/account/reviews/ava01.jpg" alt="아바타">
                                            </div>
                                            <div class="ps-3">
                                                <h6 class="mb-1">랜디 워커</h6>
                                                <div class="fs-xs text-body-secondary">2024년 11월 12일</div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                                            <i class="fi-star-filled text-warning"></i>
                                            <i class="fi-star-filled text-warning"></i>
                                            <i class="fi-star-filled text-warning"></i>
                                            <i class="fi-star-filled text-warning"></i>
                                            <i class="fi-star-filled text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="fs-sm mb-2">리뷰 대상:<a
                                            class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2"
                                            href="#!">67-04 머틀 애비뉴 글렌데일, 뉴욕 11385</a></p>
                                    <p class="fs-sm mb-0">도시 중심부에 위치한 훌륭한 아파트입니다. 관광 명소와 엔터테인먼트 시설이 숙소에서 50m 거리에 있습니다. 숙소는 완벽하게 청결했으며 기본적인 슬리퍼, 샴푸, 깨끗한 수건이 구비되어 있었습니다.</p>
                                </div>
                            </div>
                        </section> --}}


            <!-- Help center -->
            {{-- <section>
                            <h2 class="h4 mb-4">Need help?</h2>
                            <div class="row row-cols-1 row-cols-sm-2 g-4 g-md-5">
                                <div class="col">
                                    <div class="position-relative">
                                        <i class="fi-globe fs-4 text-dark-emphasis pb-1 pb-md-0 mb-2 mb-md-3"></i>
                                        <h3 class="h6 pb-md-1 mb-2">
                                            <a class="hover-effect-underline stretched-link" href="#!">Join a
                                                Finder property club</a>
                                        </h3>
                                        <p class="fs-sm mb-0">Join your local Host Club to connect with your hosting
                                            community both online and through in-person or virtual meetups.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <i class="fi-headphones fs-4 text-dark-emphasis pb-1 pb-md-0 mb-2 mb-md-3"></i>
                                        <h3 class="h6 pb-md-1 mb-2">
                                            <a class="hover-effect-underline stretched-link" href="#!">Get
                                                professional support</a>
                                        </h3>
                                        <p class="fs-sm mb-0">I'm your virtual assistant from the Help Center, ready to
                                            assist you in finding the information and resources you're looking for.</p>
                                    </div>
                                </div>
                            </div>
                        </section> --}}
        </x-www-main>
    </x-www-layout>
</x-www-app>
