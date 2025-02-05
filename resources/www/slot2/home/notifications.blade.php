<x-www-app>
    <x-www-layout>
        <x-www-main>
            {{-- 사용자별 알람 허용설정 --}}
            @livewire('site-notification-user')

            <!-- Communication channels -->

            @livewire('site-noti-channel-user')

        </x-www-main>
    </x-www-layout>
</x-www-app>
