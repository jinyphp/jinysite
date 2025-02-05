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

            {{-- 페이지 삽입된 widgets 을 loop로 출력합니다. --}}
            @livewire('site-widget-loop')

            {{-- 드레그 하여 element 요소를 삽입합니다. --}}
            @includeIf('jiny-site-page::design.dropzone')

        </div>
    </div>
</div>
