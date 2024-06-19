<div>
    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >

            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">기본정보</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>활성화</x-form-label>
                <x-form-item>
                    {!! xCheckbox()
                        ->setWire('model.defer',"forms.enable")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>작성자</x-form-label>
                <x-form-item>
                    {!! xSelect()
                        ->table('hr_employee','name')
                        ->setWire('model.defer',"forms.email")
                        ->setWidth("medium")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>채용형태</x-form-label>
                <x-form-item>
                    {!! xSelect()
                        ->table('hr_recruit_type','name')
                        ->setWire('model.defer',"forms.type")
                        ->setWidth("medium")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>부서</x-form-label>
                <x-form-item>
                    {!! xSelect()
                        ->table('hr_division','name')
                        ->setWire('model.defer',"forms.division")
                        ->setWidth("medium")
                    !!}


                </x-form-item>
            </x-form-hor>







        </x-navtab-item>

        <!-- formTab -->
        <x-navtab-item >
            <x-navtab-link class="rounded-0">
                <span class="d-none d-md-block">요청내용</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>제목</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.title")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>채용인수</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.people")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>요청내용</x-form-label>
                <x-form-item>
                    {!! xTextarea()
                        ->setWire('model.defer',"forms.recruitment")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>

        <x-navtab-item >
            <x-navtab-link class="rounded-0">
                <span class="d-none d-md-block">진행</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>상태</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.status")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>



        <!-- formTab -->
        <x-navtab-item >
            <x-navtab-link class="rounded-0">
                <span class="d-none d-md-block">메모</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>메모</x-form-label>
                <x-form-item>
                    {!! xTextarea()
                        ->setWire('model.defer',"forms.description")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>

    </x-navtab>
</div>
