<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="/assets/js/vendors/darkMode.js?slot=geeks"></script>

    <!-- Libs CSS -->
    <link href="/assets/fonts/feather/feather.css?slot=geeks" rel="stylesheet" />
    <link href="/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css?slot=geeks" rel="stylesheet" />
    <link href="/assets/libs/simplebar/dist/simplebar.min.css?slot=geeks" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.min.css?slot=geeks" />

    <link rel="stylesheet" href="/assets/libs/tiny-slider/dist/tiny-slider.css?slot=geeks" />
    <title>Homepage | Geeks - Bootstrap 5 Template</title>

    {{-- jinyphp core head --}}
    @vite('resources/css/tailwind.scss')
    @stack('css')
  </head>

  <body class="bg-white">
    {{$slot}}



    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>


    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="/assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>



    <script src="/assets/libs/simplebar/dist/simplebar.min.js?slot=geeks"></script>

    <!-- Theme JS -->
    <script src="/assets/js/theme.min.js?slot=geeks"></script>

    <script src="/assets/libs/tiny-slider/dist/min/tiny-slider.js?slot=geeks"></script>
    <script src="/assets/js/vendors/tnsSlider.js?slot=geeks"></script>


    {{-- --}}
    <x-set-actions></x-set-actions>
    <x-site-setting></x-site-setting>

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
