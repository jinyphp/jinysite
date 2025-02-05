<x-www-app>
    {{-- page-center --}}
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">

                <div class="col-sm-10 col-md-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <section>
                            <header class="d-flex justify-content-between">
                                <div>
                                    <h1 class="h2 mt-auto">반갑습니다</h1>
                                    <div class="nav fs-sm mb-4">
                                        아직 회원이 아니신가요?
                                        <a class="nav-link text-decoration-underline p-0 ms-2"
                                            href="/regist">
                                            회원가입
                                        </a>
                                    </div>
                                </div>
                                {{-- <div>
                                    <a href="/" class="text-2xl text-decoration-none pt-0 text-dark fw-semibold">
                                        {{ \Jiny\Site\Header('brand') }}
                                    </a>
                                </div> --}}
                            </header>

                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <div class="alert-message">
                                        {{ session('error') }}
                                    </div>
                                </div>
                            @endif


                            <!-- Form -->
                            <x-login-form>
                                <div class="position-relative mb-4">
                                    <x-login-email>
                                    </x-login-email>
                                </div>

                                <div class="position-relative mb-4">
                                    <x-login-password>
                                    </x-login-password>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check me-2">

                                        <x-login-remember>
                                            30일 동안 기억하기
                                        </x-login-remember>
                                    </div>
                                    <div class="nav">
                                        <x-login-forgot class="nav-link animate-underline p-0">
                                            <span class="animate-target">비밀번호를 잊으셨나요?</span>
                                        </x-login-forgot>
                                    </div>
                                </div>

                                <x-login-submit class="btn-lg w-100">
                                    로그인
                                </x-login-submit>

                            </x-login-form>


                            {{-- 소셜 로그인 --}}

                            <!-- Divider -->
                            @includeIf('jiny-social::social')





                            <!-- Footer -->
                            <footer class="mt-4">
                                <div class="nav mb-4">
                                    <a class="nav-link text-decoration-underline p-0" href="/support/help">도움이
                                        필요하신가요?</a>
                                </div>
                                <p class="fs-xs mb-0">
                                    &copy; All rights reserved.
                                    Made by <span class="animate-underline"><a
                                            class="animate-target text-dark-emphasis text-decoration-none"
                                            href="https://jinyphp.com/" target="_blank" rel="noreferrer">jinyphp</a>
                                    </span>
                                </p>
                            </footer>
                        </section>

                        <!-- -->
                    </div>
                </div>


            </div>
        </div>
    </main>

</x-www-app>
