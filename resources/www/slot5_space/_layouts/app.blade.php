<!DOCTYPE html>
<html lang="en" dir="">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Corporate | Space - Multipurpose Responsive Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">

    <!-- CSS Space Template -->
    <link rel="stylesheet" href="/assets/css/theme.min.css">
  </head>

  <body>
    {{$slot}}


    <x-set-actions></x-set-actions>
    <x-site-setting></x-site-setting>

    <!-- JS Global Compulsory  -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="/assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="/assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="/assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
    <script src="/assets/vendor/typed.js/lib/typed.min.js"></script>

    <!-- JS Space -->
    <script src="./assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      (function() {
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')


        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF TEXT ANIMATION (TYPING)
        // =======================================================
        const typed = HSCore.components.HSTyped.init('.js-typedjs')
      })()
    </script>
  </body>
</html>
