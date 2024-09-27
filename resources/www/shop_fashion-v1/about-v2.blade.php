<x-www-app>
    <x-www-layout>

        @partials('about9')
        @partials('about10')

        @partials('about11')
        @partials('about12')
        @partials('about13')
        @partials('about14')

        @if (isset($actions['blade']))
            @php
                $slot = www_slot();
            @endphp
            @foreach ($actions['blade'] as $item)
                {{-- {{dump($blade)}} --}}
                {{-- @partials($item) --}}
                @includeIf('www::' . $slot . '._partials.' . $item)
            @endforeach
        @endif

    </x-www-layout>
</x-www-app>
