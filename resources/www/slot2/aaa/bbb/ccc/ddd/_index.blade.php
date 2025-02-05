<x-www-app>
    <x-www-layout>
        @foreach (sitePageWidgets() as $i => $widget)
        <div id="widget" data-pos="{{ $i }}">
            <div wire:key="widget-{{ $i }}">
                @livewire(
                    $widget['element'],
                    [
                        'widget' => $widget,
                    ],
                    key($i)
                )
            </div>
        </div>
    @endforeach
    </x-www-layout>
</x-www-app>
