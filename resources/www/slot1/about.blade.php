<x-www-layout>

    <!-- Section Header-->
    <section class="py-5">
        <div class="container px-5">
            @livewire('WidgetHero', [
                'filename' => "jiny.widgets.hero_text1",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-widgets::hero.text1.main"
                    ]
                ]
            ],"aa")

        </div>
    </section>

    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">

            @livewire('WidgetCard', [
                'filename' => "jiny.widgets.visual_text_card",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-widgets::card.visual_text.list_left"
                    ]
                ]
            ],"aa")

        </div>
    </section>

    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">

            @livewire('WidgetCard', [
                'filename' => "jiny.widgets.visual_text_card",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-widgets::card.visual_text.list_right"
                    ]
                ]
            ],"bb")

        </div>
    </section>

    <!-- Team members section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">

            @livewire('WidgetList-ourteams', [
                'filename' => "jiny.widgets.about_teams"
            ])

        </div>
    </section>

</x-www-layout>

