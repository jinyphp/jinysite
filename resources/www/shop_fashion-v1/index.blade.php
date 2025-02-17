<x-www-app>
    <x-www-layout>

        {{-- 사이트 브렌드 : {{siteInfo('brand')}} --}}

        <!-- Hero slider -->
        {{-- @partials("hero_slider") --}}
        @livewire('site-widget-slider',[
            'code'=>"main"
            //'viewFile' => inSlotPartial("hero_slider")
        ])

        <main class="content-wrapper">

          <!-- Popular products carousel -->
          @partials("popular_products_carousel")

          <!-- Featured products -->
          @partials("featured_products")

          <!-- Special collection carousel -->
          @partials("special_collection_carousel")

          <!-- Brands -->
          @partials("brands")

          <!-- Reviews carousel -->
          @partials("reviews_carousel")

          <!-- Instagram feed -->
          @partials("instagram_feed")

        </main>

    </x-www-layout>
</x-www-app>
