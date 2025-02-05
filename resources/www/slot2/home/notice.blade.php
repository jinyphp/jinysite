<x-www-app>
    <x-www-layout>
        <x-www-main>


            <div class="row">
                <div class="col-12 col-lg-6">
                    <x-site-board-snippet code="notice">
                    </x-site-board-snippet>
                </div>

                <div class="col-12 col-lg-6">
                    @livewire('site-board-snippet', [
                        'code' => 'news',
                    ])
                </div>
            </div>


        </x-www-main>
    </x-www-layout>
</x-www-app>
