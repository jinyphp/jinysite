<x-www-app>
    <x-www-layout>

        <section style="background-color: #343a40;">
            @livewire('site-widget', [
                    //'filename' => "about/hero_text1"
                ])
        </section>

        <x-www-main>

            {{-- <section class="p-5">
                @livewire('site-widget', [
                    'filename' => "about/card_left"
                ])
            </section> --}}

            {{-- <section class="p-5">
                @livewire('site-widget', [
                    'filename' => "about/card_right"
                ])
            </section> --}}

            <!-- Section Header-->
            {{-- <section class="p-5">
                @livewire('WidgetHero-Heading', [
                    'filename' => "about/hero_text1"
                ])
            </section> --}}

            <!-- About section one-->
            {{-- <section class="py-5 bg-light" id="scroll-target">
                <div class="px-5 my-5">
                    @livewire('WidgetCard-Left', [
                        'filename' => "about/card_left"
                    ])
                </div>
            </section> --}}

            <!-- About section two-->
            {{-- <section class="py-5">
                <div class="px-5 my-5">

                    @livewire('WidgetCard-Right', [
                        'filename' => "about/card_right"
                    ])

                </div>
            </section> --}}

            <!-- Team members section-->
            <section class="py-5">
                <div class="px-5 my-5">
                    @livewire('site-widget', [
                        //'name' => "widget-teams2", //위젯의 종류 지정
                        'filename' => "about_teams"
                    ])
                </div>
            </section>




        </x-www-main>
    </x-www-layout>
</x-www-app>
