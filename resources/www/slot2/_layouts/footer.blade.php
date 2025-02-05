<!-- Page footer -->
<footer class="footer pt-5 pb-4">
    <div class="container pt-sm-2 pt-md-3 pt-lg-4">
        <div class="row pb-5 mb-lg-3">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class="col-md-8 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0 mt-n3 mt-sm-0">
                {{-- @partials('footer/menu') --}}

                @livewire('site-widget-menu',[
                    'code' => "footer",
                    'widget_path' => "footer_menu",
                    'viewFile' => inSlotPartial("menu.footer1.layout")//"jiny-site::site.menus.footer1.layout"
                ])

            </div>

            <!-- Subscription -->
            <div class="col-md-4 offset-xl-1">
                @partials('footer/joinus')
            </div>
        </div>

        <!-- Social account links -->
        @partials('footer/social_link')

        <x-www-copyright></x-www-copyright>

    </div>
</footer>
