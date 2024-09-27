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
                                소셜미디어
                            </h4>
                            <p class="text-muted font-14">
                                개인별 소설미디어 링크를 입력합니다.
                            </p>
                            @livewire('profile-social')
                        </div>

                    </div>
                </div>
            </div>

        </x-www-main>
    </x-www-layout>
</x-www-app>
