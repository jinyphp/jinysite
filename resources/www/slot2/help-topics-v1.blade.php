<x-www-app>
    <x-www-layout>
        <x-www-main>

            @partials("help1")

            @livewire('site-help')
            {{-- @partials("help2") --}}

        @partials("help3")

        <hr class="my-0 my-sm-2 my-md-3 my-lg-4">

        @partials("faq1")

        </x-www-main>
    </x-www-layout>
</x-www-app>

