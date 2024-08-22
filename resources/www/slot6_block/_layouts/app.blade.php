<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicon/site.webmanifest" />
    <link rel="mask-icon" href="/assets/images/favicon/block-safari-pinned-tab.svg" color="#8b3dff" />
    <link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#8b3dff" />
    <meta name="msapplication-config" content="./assets/images/favicon/tile.xml" />

    <!-- Color modes -->
    <script src="/assets/js/vendors/color-modes.js"></script>

    <!-- Libs CSS -->
    <link href="/assets/libs/simplebar/dist/simplebar.min.css?block" rel="stylesheet" />
    <link href="/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css?block" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="/assets/libs/scrollcue/scrollCue.css?block" />

    <!-- Box icons -->
    <link rel="stylesheet" href="/assets/fonts/css/boxicons.min.css?block" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.min.css?block" />

    <title>Block | Multipurpose Business & Professional Template</title>
</head>

<body>

    {{ $slot }}

    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
           <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
     </div>

    <x-set-actions></x-set-actions>
    <x-site-setting></x-site-setting>

    <!-- Libs JS -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="/assets/libs/headhesive/dist/headhesive.min.js"></script>

    <!-- Theme JS -->
    <script src="/assets/js/theme.min.js"></script>

    <script src="/assets/libs/scrollcue/scrollCue.min.js"></script>
    <script src="/assets/js/vendors/scrollcue.js"></script>
</body>

</html>
