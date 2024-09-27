<x-www-app>
    <x-www-layout>
        <x-www-main>

            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
                <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                <aside class="col-lg-3">
                    <x-www-sidebar>

                    </x-www-sidebar>
                </aside>

                <!-- Personal info content -->
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <div>
                            <h4 class="header-title">
                                로그아웃
                            </h4>
                            <p class="text-muted font-14">
                                사이트 접속을 해제합니다.
                            </p>
                            <button class="btn btn-danger">로그아웃</button>
                        </div>

                        <x-ui-divider></x-ui-divider>

                        <div>
                            <h4 class="header-title">
                                회원탈퇴
                            </h4>
                            <p class="text-muted font-14">
                                회원을 탈퇴합니다.
                            </p>
                            @livewire('auth-out')
                        </div>


                    </div>
                </div>
            </div>

        </x-www-main>
    </x-www-layout>
</x-www-app>
