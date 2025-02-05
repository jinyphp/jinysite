<x-www-app>
    <x-www-layout>
        <x-www-main>

            <!-- Page title -->
            <h3 class="mb-0">프로필 상세정보</h3>
            <p class="mb-0">귀하의 계정 설정을 직접 관리할 수 있습니다.</p>


            {{-- 아바타 이미지 --}}
            <div class="d-lg-flex align-items-center justify-content-between mt-4">
                <div class="d-flex align-items-center mb-4 mb-lg-0">

                    <img src="/home/avatas/{{Auth::user()->id}}"
                        alt="{{Auth::user()->name}}"
                        class="w-24 rounded-circle">

                    {{-- @livewire('avata-image', [
                        'width' => '96px',
                    ]) --}}

                    {{-- <img src="/assets/images/avatar/avatar-3.jpg" id="img-uploaded"
                        class="w-24 rounded-circle" alt="avatar"> --}}

                    <div class="ms-3">
                        <h4 class="mb-0">{{Auth::user()->name}}</h4>
                        <p class="mb-0">{{Auth::user()->email}}</p>
                        {{-- <p class="mb-0">PNG or JPG no bigger than 800px wide and tall.</p> --}}
                    </div>
                </div>
                <div>

                    @if(Auth::user()->isAdmin == 1)
                    <a href="/admin" class="btn btn-outline-primary btn-sm">Admin</a>
                    @endif
                    {{-- <a href="#" class="btn btn-outline-danger btn-sm">Delete</a> --}}
                </div>
            </div>

            <hr class="my-4">

            <!-- Subscription CTA -->
            @livewire('site-subscription')




        </x-www-main>
    </x-www-layout>
</x-www-app>
