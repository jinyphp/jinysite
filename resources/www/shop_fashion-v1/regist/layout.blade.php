<x-www-app>
    {{-- @include("www::shop_fashion-v1.regist.signup") --}}
    <x-www-layout>

        <div class="text-center mt-4">
            <h1 class="h2">회원 가입신청</h1>
            <p class="lead"></p>
        </div>

        <div class="card">
            <div class="card-body">

                {{-- @includeIf('jinyauth::regist.form', [
                    //'setting'=>$setting
                ]) --}}
                @livewire('auth-regist-form')

                <div class="text-center">
                    <a href="/login">로그인</a>
                </div>

                <x-social-login>
                    <span>Sign in with your social network.</span>
                </x-social-login>

            </div>
        </div>


        <x-ui-divider>
            <span class="text-body-emphasis fw-medium text-nowrap mx-4">or continue with</span>
        </x-ui-divider>


        @includeIf('jinyauth::regist.seocial', ['setting' => $setting])

        <div class="text-center mb-3">
            Copyright all right reserved JinyPHP
        </div>

    </x-www-layout>
</x-www-app>
