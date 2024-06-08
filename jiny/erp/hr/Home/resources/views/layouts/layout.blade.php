<x-theme theme="admin.sidebar">
    <div class="wrapper">

        @includeIf("jinyerp-hr-home::layouts.sidebar")

        <div class="main">
            <x-theme-header></x-theme-header>
            <x-theme-main>
                {{-- Title --}}
                <section class="p-2">
                @if(isset($actions['view']['title']))
                    @includeIf($actions['view']['title'])
                @else
                    @includeIf("jinyerp-hr-home::layouts.title")
                @endif
                </section>


                {{-- CRUD 테이블 --}}
                <section class="p-2">
                    <main>
                        @livewire('WireTable-PopupForm', [
                            'actions'=>$actions
                        ])
                    </main>
                </section>

            </x-theme-main>
            <x-theme-footer></x-theme-footer>
        </div>

    </div>
</x-theme>


