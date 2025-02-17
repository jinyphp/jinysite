<x-www-app>
    <x-www-app>
        <!-- Page content -->
        <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
            <div class="d-lg-flex">

                <!-- Login form + Footer -->
                <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">

                    <!-- Logo -->
                    @partials('../login/header')

                    <h1 class="h2 mt-auto">반갑습니다</h1>
                    <div class="nav fs-sm mb-4">
                        아직 회원이 아니신가요?
                        <a class="nav-link text-decoration-underline p-0 ms-2"
                            href="/regist">
                            회원가입</a>
                    </div>

                    @partials('../login/form')

                    <!-- Divider -->
                    <x-ui-divider>
                        <span class="text-body-emphasis fw-medium text-nowrap mx-4">
                            또는 다음으로 로그인
                        </span>
                    </x-ui-divider>

                    @partials('login.seocial')

                    <!-- Footer -->
                    @partials('../login/footer')
                </div>

                {{-- Cover image visible on screens > 992px wide (lg breakpoint) --}}
                @partials('../login/cover')

            </div>
        </main>
    </x-www-app>
</x-www-app>



