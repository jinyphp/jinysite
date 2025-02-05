<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta accept-charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @if (isset($seo_title))
                {{$seo_title}}
            @endif
        </title>



        {{-- <link rel="stylesheet" href="/assets/sidebar.css?theme=admin.sidebar"> --}}
        @vite('resources/css/admin/app.scss')
        @vite('resources/css/tailwind.scss')
        @vite('resources/css/jiny.scss')
        @stack('css')

        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
        <!-- ChartJS https://www.chartjs.org/ -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <!-- Include stylesheet -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" /> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <!-- 한글 NotoSans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">

        {{-- @livewireStyles --}}
    </head>

    <body>
        {{$slot}}

        <script src="https://jinyphp.github.io/css/assets/js/app.js" defer></script>

        <!-- Include the Quill library -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <x-set-actions></x-set-actions>
        <x-site-setting></x-site-setting>

        @stack('scripts')

        {{-- HotKey 단축키 이벤트 --}}
        @livewire('HotKeyEvent')

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
