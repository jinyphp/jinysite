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

                        <!-- contents -->
                        <div>
                            <div>
                                <h4 class="header-title">
                                    프로파일 사진변경
                                </h4>
                                <p class="text-muted font-14">
                                    프로필을 돋보이게 하고 사람들이 볼 수 있도록 사진을 업로드하세요.
                                    귀하의 의견과 기여를 쉽게 인식하십시오!
                                </p>

                                <div class="row g-8">
                                    <div class="col-2">
                                        @livewire('avata-image', ['width' => '128px'])
                                    </div>
                                    <div class="col-10">
                                        @livewire('avata-update')
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </x-www-main>
    </x-www-layout>
</x-www-app>
