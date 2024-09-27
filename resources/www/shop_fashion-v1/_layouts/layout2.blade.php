<!-- Topbar -->
{{-- @partials("topbar_banner",['rows'=>getSiteBanner(3)]) --}}
@livewire('site-banner',[
    //'viewFile' => "_partials.topbar_banner"
])

<div class="container">
    <x-www-header>
    </x-www-header>
</div>
    {{$slot}}

<div class="container">
    <x-www-footer>
    </x-www-footer>
</div>

