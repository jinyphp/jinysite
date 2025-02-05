<section class="py-8 my-4">
    <div class="container mt-lg-8">
        <div class="row">

            <!-- 각 feature 항목에 대해 반복 -->
            @foreach (['간편한 설정 과정', '확장성', '빌더', '지원'] as $index => $title)
                <div class="col-md-6 col-lg-3 col-12">
                    <div class="mb-6 mb-lg-0">

                        <!-- 아이콘 (기존 코드 유지) -->
                        <div class="bg-primary text-light-primary rounded-circle d-flex align-items-center justify-content-center mb-4"
                            style="width: 64px; height: 64px;">
                            <!-- SVG 아이콘 코드 (생략) -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-lightning-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="fw-bold fs-4 mb-3">{{ $title }}</h3>
                        <p class="fs-5 text-muted">
                            @switch($index)
                                @case(0)
                                    기본 라라벨 베이스에서 확장 패키지 설치만으로 간단하게 시작할 수 있습니다.
                                @break

                                @case(1)
                                    라라벨의 기본 고유기능과 설계방식을 따라 커스텀 확장이 가능합니다.
                                @break

                                @case(2)
                                    빌더 기능을 통하여 간단한 웹사이트를 손쉽게 만들 수 있습니다.
                                @break

                                @case(3)
                                    지니 컨트리뷰터 및 전문 파트너를 통하여 원하는 기술을 지원 받을 수 있습니다.
                                @break
                            @endswitch
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
