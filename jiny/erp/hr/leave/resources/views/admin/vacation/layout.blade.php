<x-theme theme="admin.sidebar">
    <x-theme-layout>

        <!-- Section -->
        <section class="p-2">
            <x-flex class="align-items-center gap-2">
                <h1 class="inline">
                    HR System
                </h1>
                <x-badge-primary>Admin</x-badge-primary>
            </x-flex>
            휴가관리
        </section>

        <section class="p-2">
            <main>
                {{-- CRUD 테이블 --}}
                @livewire('WireTable-PopupForm', ['actions'=>$actions])
            </main>
        </section>

    </x-theme-layout>
</x-theme>
