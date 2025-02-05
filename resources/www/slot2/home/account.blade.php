<x-www-app>
    <x-www-layout>
        <x-www-main>

            <h4 class="header-title">
                프로파일 사진변경
            </h4>
            <p class="text-muted font-14">
                프로필을 돋보이게 하고 사람들이 볼 수 있도록 사진을 업로드하세요.
                귀하의 의견과 기여를 쉽게 인식하십시오!
            </p>

            <div class="row g-8">
                <div class="col-3">
                    @livewire('avata-image', ['width' => '128px'])
                </div>
                <div class="col-9">
                    @livewire('avata-update')
                </div>
            </div>

            <hr class="my-4">

            <h4 class="h4 mb-1 mb-sm-2">이메일 주소 변경</h4>
            <p class="fs-sm text-muted mb-2">계정과 연결된 이메일 주소를 업데이트하여 최신 상태로 유지하세요.</p>
            @livewire('home-profile_email', [])

            <hr class="my-4">

            {{-- 커스텀화면 주소록 --}}
            <h4 class="h4 mb-1 mb-sm-2">주소 관리</h4>
            <p class="fs-sm text-muted mb-0">여러 배송지 주소를 등록하고 관리할 수 있습니다.</p>
            @livewire('home-profile_address', [
                'viewFile' => inSlotPartial('address.table'),
                'viewList' => inSlotPartial('address.list'),
            ])

            <hr class="my-4">

            <h4 class="h4 mb-1 mb-sm-2">전화번호</h4>
            <p class="fs-sm text-muted mb-0">연락처를 추가/수정하고 기본 연락처를 설정할 수 있습니다.</p>
            @livewire('home-profile_phone')



        </x-www-main>
    </x-www-layout>
</x-www-app>
