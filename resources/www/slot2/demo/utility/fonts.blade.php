<x-www-app>
    <x-www-layout>
        <x-www-main>

            <h1 class="text-4xl font-bold text-primary mb-4">폰트 크기</h1>
            <p class="text-xl text-gray-600 mb-6">
                jinyCSS는 부트스트랩과 테일윈드를 결합하여 다양한 유형의 폰트 크기를 제공합니다.
                이를 통해 더욱 유연하고 세련된 디자인을 구현할 수 있습니다.
            </p>


            <article>
                <h2 class="text-2xl font-semibold text-gray-800 mb-3 mt-8">fs-* 폰트 크기 지정</h2>
                <p class="text-lg text-gray-600 mb-4 leading-relaxed">
                    fs-* 로 시작하는 클래스는 부트스트랩에서 기본적으로 제공하는 폰트 크기 클래스입니다.
                    작은 수의 클래스가 더 큰 텍스트를 출력합니다. 이를 통해 다양한 크기의 텍스트를 쉽게 구현할 수 있습니다.
                </p>

                <div class="bg-light p-4 rounded-3 mb-4">
                    <p class="fs-1 mb-3"><span class="badge bg-primary me-2">fs-1</span> 가장 큰 폰트 크기</p>
                    <p class="fs-2 mb-3"><span class="badge bg-primary me-2">fs-2</span> 두 번째로 큰 폰트 크기</p>
                    <p class="fs-3 mb-3"><span class="badge bg-primary me-2">fs-3</span> 세 번째로 큰 폰트 크기</p>
                    <p class="fs-4 mb-3"><span class="badge bg-primary me-2">fs-4</span> 네 번째로 큰 폰트 크기</p>
                    <p class="fs-5 mb-3"><span class="badge bg-primary me-2">fs-5</span> 다섯 번째로 큰 폰트 크기</p>
                    <p class="fs-6 mb-3"><span class="badge bg-primary me-2">fs-6</span> 가장 작은 폰트 크기</p>
                </div>

                <div class="bg-light p-4 rounded-3 mb-4">
                    <p class="fs-1 fw-bold mb-3"><span class="badge bg-primary me-2">fs-1 fw-bold</span> fs-1 굵은 글씨</p>
                    <p class="fs-2 fst-italic mb-3"><span class="badge bg-primary me-2">fs-2 fst-italic</span> fs-2 기울임꼴</p>
                    <p class="fs-3 text-primary mb-3"><span class="badge bg-primary me-2">fs-3 text-primary</span> fs-3 파란색 글씨</p>
                    <p class="fs-4 text-uppercase mb-3"><span class="badge bg-primary me-2">fs-4 text-uppercase</span> fs-4 대문자</p>
                    <p class="fs-5 text-lowercase mb-3"><span class="badge bg-primary me-2">fs-5 text-lowercase</span> FS-5 소문자</p>
                    <p class="fs-6 text-capitalize mb-3"><span class="badge bg-primary me-2">fs-6 text-capitalize</span> fs-6 단어 첫 글자 대문자</p>
                </div>

            </article>


            <article>
                <h2 class="text-2xl font-semibold text-gray-800 mb-3 mt-8">text-* 폰트 크기 지정</h2>
                <p class="text-lg text-gray-600 mb-4 leading-relaxed">
                    text-* 로 시작하는 클래스는 테일윈드에서 기본적으로 제공하는 폰트 크기 클래스입니다.
                    부트스트랩과 달리 번호가 클수록 더 큰 글자를 출력합니다.
                </p>

                <div class="bg-light p-4 rounded-3 mb-4">
                    <p class="text-9xl mb-4 text-blue-600 font-bold"><span class="badge bg-primary me-2">text-9xl</span> 가장 큰 폰트 크기</p>
                    <p class="text-8xl mb-4 text-indigo-600 font-semibold"><span class="badge bg-primary me-2">text-8xl</span> 두 번째로 큰 폰트 크기</p>
                    <p class="text-7xl mb-4 text-purple-600"><span class="badge bg-primary me-2">text-7xl</span> 세 번째로 큰 폰트 크기</p>
                    <p class="text-6xl mb-4 text-pink-600"><span class="badge bg-primary me-2">text-6xl</span> 네 번째로 큰 폰트 크기</p>
                    <p class="text-5xl mb-4 text-red-600"><span class="badge bg-primary me-2">text-5xl</span> 다섯 번째로 큰 폰트 크기</p>
                    <p class="text-4xl mb-4 text-orange-600"><span class="badge bg-primary me-2">text-4xl</span> 여섯 번째로 큰 폰트 크기</p>
                    <p class="text-3xl mb-4 text-yellow-600"><span class="badge bg-primary me-2">text-3xl</span> 일곱 번째로 큰 폰트 크기</p>
                    <p class="text-2xl mb-4 text-green-600"><span class="badge bg-primary me-2">text-2xl</span> 여덟 번째로 큰 폰트 크기</p>
                    <p class="text-xl mb-4 text-teal-600"><span class="badge bg-primary me-2">text-xl</span> 아홉 번째로 큰 폰트 크기</p>
                    <p class="text-lg mb-4 text-cyan-600"><span class="badge bg-primary me-2">text-lg</span> 열 번째로 큰 폰트 크기</p>
                    <p class="text-base mb-4 text-gray-600"><span class="badge bg-primary me-2">text-base</span> 기본 폰트 크기</p>
                    <p class="text-sm mb-4 text-gray-500"><span class="badge bg-primary me-2">text-sm</span> 작은 폰트 크기</p>
                    <p class="text-xs text-gray-400"><span class="badge bg-primary me-2">text-xs</span> 가장 작은 폰트 크기</p>
                </div>

                <div class="bg-light p-4 rounded-3 mb-4">
                    <p class="text-4xl font-bold text-indigo-600">
                        <span class="badge bg-primary me-2">text-4xl font-bold</span>
                        굵은 글씨로 강조된 큰 제목
                    </p>
                    <p class="text-3xl italic text-purple-500">
                        <span class="badge bg-primary me-2">text-3xl italic</span>
                        기울어진 서브 제목 스타일
                    </p>
                    <p class="text-2xl text-blue-500 underline">
                        <span class="badge bg-primary me-2">text-2xl text-blue-500</span>
                        파란색으로 강조된 중요 텍스트
                    </p>
                    <p class="text-xl uppercase tracking-wide text-gray-700">
                        <span class="badge bg-primary me-2">text-xl uppercase</span>
                        주목을 끄는 대문자 텍스트
                    </p>
                    <p class="text-lg lowercase text-green-600">
                        <span class="badge bg-primary me-2">text-lg lowercase</span>
                        소문자로 표시된 친근한 메시지
                    </p>
                    <p class="text-base capitalize text-orange-500">
                        <span class="badge bg-primary me-2">text-base capitalize</span>
                        각 단어의 첫 글자가 대문자인 문장
                    </p>
                </div>
            </article>



        </x-www-main>
    </x-www-layout>
</x-www-app>
