<x-www-app>
    <x-www-layout>
        <x-www-main>
            <!-- Page title -->
            <h3 class="mb-0">로그아웃</h3>
            <p class="mb-0">사이트 접속을 해제합니다.</p>

            <div class="d-flex justify-content-end mt-4">

                <a href="/logout" class="btn btn-danger">로그아웃</a>
            </div>

            <hr class="my-4">
            <h4 class="h4 mb-1 mb-sm-2">브라우저 세션</h4>
            <p class="fs-sm text-muted mb-2"></p>
            <div>
                {{-- @livewire('home-profile-browser-sessions') --}}
            </div>

            <hr class="my-4">

            <h4 class="h4 mb-1 mb-sm-2">회원탈퇴</h4>
            <p class="fs-sm text-muted mb-2">자유롭게 회원 가입 탈퇴를 처리할 수 있습니다.</p>
            <div>
                @livewire('home-profile_unregist')
            </div>

        </x-www-main>
    </x-www-layout>
</x-www-app>
