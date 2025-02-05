{{-- 메인 레이아웃 with sidebar --}}
<div class="container">
    <div class="row">
        <div class="col-3">
            @livewire('site-widget-menu',[
                'code_key' => "side",
                'widget_path' => "sidebar"
            ])
        </div>
        <div class="col-9">
            {{$slot}}
        </div>
    </div>
</div>
