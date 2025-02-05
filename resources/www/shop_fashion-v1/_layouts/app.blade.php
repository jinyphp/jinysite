<!DOCTYPE html>
<html lang="ko">

    <head>
        <meta charset="utf-8">

        <!-- Viewport -->
        <meta name="viewport"
                content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

        <!-- SEO Meta Tags -->
        @if(isset($actions['title']))
        <title>
            {{$actions['title']}}
        </title>
        @endif

        @if(isset($actions['description']))
        <meta name="description" content="{{$actions['description']}}">
        @endif

        @if(isset($actions['keyword']))
        <meta name="keyword" content="{{$actions['keyword']}}">
        @endif



        <!-- Theme switcher (color modes) -->
        <script src="/assets/js/theme-switcher.js"></script>

        <!-- Preloaded local web font (Inter) -->
        <link rel="preload" href="/assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

        <!-- Font icons -->
        <link rel="preload" href="/assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="/assets/icons/cartzilla-icons.min.css">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="/assets/vendor/choices.js/public/assets/styles/choices.min.css">

        <link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="/assets/vendor/simplebar/dist/simplebar.min.css">
        <link rel="stylesheet" href="/assets/vendor/glightbox/dist/css/glightbox.min.css">

        <!-- Bootstrap + Theme styles -->
        <link rel="preload" href="/assets/css/theme.min.css" as="style">
        <link rel="stylesheet" href="/assets/css/theme.min.css" id="theme-styles">

		{{-- sass 컴파일 with Vite --}}
        @vite('resources/css/tailwind.scss')

		{{-- blade내의 css 처리--}}
		@stack('css')

    </head>

    <!-- Body -->
    <body>

		{{ $slot }}

        <!-- Back to top button -->
        @partials("back_to_top")



        <x-set-actions></x-set-actions>
        <x-site-setting></x-site-setting>




        {{-- 자바스크립트 코드 부분, 계속 추가해야 --}}
        <!-- Vendor scripts - home-fashion-v1 -->
        <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/assets/vendor/simplebar/dist/simplebar.min.js"></script>
        <!-- Vendor scripts - shop-product-fashion -->
        <script src="/assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="/assets/vendor/glightbox/dist/js/glightbox.min.js"></script>


        <!-- Bootstrap + Theme scripts -->
        <script src="/assets/js/theme.min.js"></script>


        {{-- HotKey 단축키 이벤트 --}}
		@livewire('HotKeyEvent')



		{{-- blade내의 script 처리 --}}
		@stack('script')

        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('page-realod', (event) => {
                    console.log("page-realod");
                    location.reload();
                });

                Livewire.on('history-back', (event) => {
                    console.log("history-back");
                    history.back();
                });
            });
        </script>

    </body>

</html>
