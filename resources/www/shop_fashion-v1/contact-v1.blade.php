<x-www-app>
    <x-www-layout>
        {{-- @if (isset($actions['blade']))
            @php
                $slot = www_slot();
            @endphp
            @foreach ($actions['blade'] as $item)

                @includeIf('www::' . $slot . '._partials.' . $item)
            @endforeach
        @endif --}}

        @partials('contact1')

        @partials('contact2')

        @partials('contact3')

        @partials('contact4')

        @partials('contact5')

        {{-- <!-- cartzila instagram -->
        @partials('contact6') --}}

    </x-www-layout>
</x-www-app>

