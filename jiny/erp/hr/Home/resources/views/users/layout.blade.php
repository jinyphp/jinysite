<x-www-layout>
    <div class="wrapper">
        {{-- left sidemenu --}}

        <aside style="margin-left:50px;width: 250px;">
            @includeIf("jinyerp-hr-home::users.menu_users")
        </aside>

        {{-- main --}}
        <div class="main">

            <section class="p-4">
                @if(isset($actions['view']['title']))
                    @includeIf($actions['view']['title'])
                @else

                @endif
            </section>

            <section class="p-4">
                <main>
                    @if(isset($actions['view']['main']))
                        @includeIf($actions['view']['main'])
                    @else

                    @endif
                </main>
            </section>

        </div>



    </div>
</x-www-layout>


