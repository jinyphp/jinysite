<x-www-app>
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto d-flex
        align-items-center"
        style="max-width: 1920px;
        height: 100vh;">

        <div class="d-lg-flex w-100 h-100">
            <!-- Login form + Footer -->
            <div class="d-flex flex-column justify-content-between w-100 mx-auto me-lg-5 py-4 py-lg-5"
                style="max-width: 416px;">
                <div>
                    <!-- Logo -->
                    <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
                        <a href="/" class="navbar-brand pt-0">
                            {{ \Jiny\Site\Header('brand') }}
                        </a>
                    </header>

                    <h1 class="h2 mt-auto">반갑습니다</h1>
                    <div class="nav fs-sm mb-4">
                        아직 회원이 아니신가요?
                        <a class="nav-link text-decoration-underline p-0 ms-2" href="/regist">
                            회원가입</a>
                    </div>

                    @partials('../login/form')

                    {{-- 소셜 로그인 --}}
                    <!-- Divider -->
                    {{-- <x-ui-divider>
                        <span class="text-body-emphasis fw-medium text-nowrap mx-4">
                            또는 다음으로 로그인
                        </span>
                    </x-ui-divider> --}}


                    {{-- <div class="d-flex flex-column flex-sm-row gap-3 pb-4 mb-3 mb-lg-4">
                        <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
                            <i class="ci-google ms-1 me-1"></i>
                            Google
                        </button>
                        <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
                            <i class="ci-facebook ms-1 me-1"></i>
                            Facebook
                        </button>
                        <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
                            <i class="ci-apple ms-1 me-1"></i>
                            Apple
                        </button>
                    </div> --}}

                    <!-- Footer -->
                    <footer class="mt-4">
                        <div class="nav mb-4">
                            <a class="nav-link text-decoration-underline p-0" href="/support/help">도움이 필요하신가요?</a>
                        </div>
                        <p class="fs-xs mb-0">
                            &copy; All rights reserved.
                            Made by <span class="animate-underline"><a
                                    class="animate-target text-dark-emphasis text-decoration-none"
                                    href="https://jinyphp.com/" target="_blank" rel="noreferrer">jinyphp</a>
                            </span>
                        </p>
                    </footer>
                </div>
            </div>

            {{-- Cover image visible on screens > 992px wide (lg breakpoint) --}}
            <div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
                <div class="d-flex flex-column justify-content-end h-100 rounded-5 overflow-hidden">

                    {{-- white 모드 배경 그라디언트 --}}
                    <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark"
                        style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)">
                    </span>

                    {{-- dark 모드 배경 그라디언트 --}}
                    {{-- <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark"
            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)">
        </span> --}}

                    {{-- 이미지 출력 --}}
                    <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
                        @if (isset($login['cover']) && $login['cover'])
                            <img src="{{ $login['cover'] }}">
                        @else
                            <img src="/assets/img/account-cover.png" alt="Girl">
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </main>
</x-www-app>
