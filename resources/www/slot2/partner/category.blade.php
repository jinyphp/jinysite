<x-www-app>
    <x-www-layout>
        <main>
            <!--hero section-->
            <section class="pt-xl-8 pt-6">
                <div class="container">
                    <!--row-->
                    <div class="row my-4">
                        <div class="col-xxl-6 offset-xxl-3 col-md-8 offset-md-2 col-12">
                            <div class="text-center mb-3">
                                <div class="d-flex flex-column gap-3">
                                    <!--heading-->
                                    <h1 class="display-4 mb-0">
                                        분야별
                                        <span class="text-primary">파트너</span>
                                        찾아보기
                                    </h1>

                                    <div class="px-xl-8 mx-xl-8">
                                        <div class="d-flex align-items-center">
                                            <input type="search" class="form-control ps-6 form-control-lg"
                                                id="search-keyword" name="search_keyword" value=""
                                                placeholder="Search by company, skills or role">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

            <!--hero section-->
            <div>
                <div class="container">
                    <hr class="my-5">
                </div>
            </div>

            <!--mentors-->
            <section class="pb-xl-8 pb-6">
                <div class="container">

                    @livewire('site-partner', [
                        'viewFile' => 'jiny-site-partner::site.partner_category.table',
                    ])


                </div>
            </section>
            <!--mentors-->
        </main>

    </x-www-layout>
</x-www-app>
