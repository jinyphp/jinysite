<x-www-app>
    <x-www-layout>

        {{-- 사이트 브렌드 : {{siteInfo('brand')}} --}}
        <div class="bg-gray-100">
            <div class="container">
                @partials('hero.split_hero_section1')
            </div>
        </div>

        <div class="bg-gray-100">
            <div class="container">
                @partials('brands.brand1')
            </div>
        </div>

        @partials('features.features_section1')

        <!-- divider -->
        {{-- <div class="container">
            <hr class="my-8">
        </div> --}}

        {{-- <div class="container my-8">
            @partials('hero.split_hero_section2')
        </div> --}}


        <!-- divider -->
        {{-- <div class="container">
            <hr class="my-8">
        </div> --}}

        {{-- <div class="container my-8">
            @partials('hero.split_hero_section3')
        </div> --}}











        <!-- Hero slider -->
        {{-- @partials("hero_slider") --}}
        {{-- <div class="bg-gray-100">
            <div class="container">
                @livewire('site-widget-slider', [
                    'code' => 'main',
                    //'viewFile' => inSlotPartial("hero_slider")
                ])
            </div>
        </div> --}}


        <main class="content-wrapper">

            <!-- Popular products carousel -->
            {{-- @partials('popular_products_carousel') --}}



            <!-- Featured products -->
            {{-- @partials('featured_products') --}}

            <!-- Special collection carousel -->
            {{-- @partials('special_collection_carousel') --}}

            <!-- Brands -->
            {{-- @partials('brands') --}}

                <!-- Reviews carousel -->
                {{-- @partials('reviews_carousel') --}}

            <!-- Instagram feed -->
            {{-- @partials('instagram_feed') --}}

        </main>

    </x-www-layout>
</x-www-app>
