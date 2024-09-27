<div class="container">
    <div class="row">
        <div class="col-9">
            {{$slot}}
        </div>
        <div class="col-3">
            @livewire('site-widget-menu',[
                'widget_path' => "sidebar",
                'viewFile' => "jiny-site::site.submenu.layout"
            ])
        </div>
    </div>
</div>
