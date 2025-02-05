<x-www-app>
    <x-www-layout>
        <x-www-main>


            <h4 class="h4 mb-1 mb-sm-2">비밀번호 관리</h4>
            <p class="fs-sm text-muted mb-2">회원님의 계정 보안을 위해 비밀번호를 주기적으로 변경해 주세요.</p>
            <div>
                @livewire('home-profile_password', [])
            </div>


            <hr class="my-4">


            <h4 class="h4 mb-1 mb-sm-2">2FA 인증</h4>
            <p class="fs-sm text-muted mb-2">2단계 인증을 통해 계정의 보안을 강화할 수 있습니다.</p>
            <div>
                @livewire('home-profile_two_factor_authentication_form')
            </div>


        </x-www-main>
    </x-www-layout>
</x-www-app>
