<x-www-app>
    <x-www-layout>
        <x-www-main>

            <h2>파트너 문의관리</h2>
            <p class="mb-8">아직도 어려우신가요? 파트너를 통하여 어려운 문제를 하나씩 해결해 나아가 보세요.</p>

            <section class="mb-8">
                <h6>관심 파트너</h6>
                @livewire('site-partner-like')
            </section>

            <section class="mb-8">
                <h6>내가 문의한 파트너</h6>
                @livewire('site-home-partner')
            </section>

        </x-www-main>
    </x-www-layout>
</x-www-app>
