<x-www-layout>
    <!-- Section -->
    <section class="py-5">
        <div class="container px-5">
            <h1>HR System</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-5">

            <div class="row">
                <div class="col-3">
                    @includeIf("jinyerp-hr::leftmenu")

                </div>
                <main class="col-9">
                    {{-- CRUD 테이블 --}}
                    @livewire('WireTable-PopupForm', ['actions'=>$actions])
                </main>
            </div>


        </div>
    </section>


</x-www-layout>
