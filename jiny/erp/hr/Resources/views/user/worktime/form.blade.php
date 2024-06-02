<div>
    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >

            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">근태기록</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>직원 이메일</x-form-label>
                <x-form-item>
                    <input type="text" class="form-control" wire:model.defer="forms.email">
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>상태</x-form-label>
                <x-form-item>
                    <input type="text" class="form-control" wire:model.defer="forms.status">
                </x-form-item>
            </x-form-hor>

            {{-- <x-form-hor>
                <x-form-label>직원ID</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.employee_id")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>근무유형</x-form-label>
                <x-form-item>
                    {!! xSelect()
                        ->table('hr_worktype','title')
                        ->setWire('model.defer',"forms.worktype_id")
                        ->setWidth("medium")
                    !!}


                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>년도</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.year")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>월</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.month")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>일</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.day")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}


            {{-- <x-form-hor>
                <x-form-label>출근시간</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.goto")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>퇴근시간</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.off")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}



        </x-navtab-item>





        <!-- formTab -->
        <x-navtab-item >
            <x-navtab-link class="rounded-0">
                <span class="d-none d-md-block">메모</span>
            </x-navtab-link>

            {{-- <x-form-hor>
                <x-form-label>메모</x-form-label>
                <x-form-item>
                    {!! xTextarea()
                        ->setWire('model.defer',"forms.description")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

        </x-navtab-item>

    </x-navtab>
</div>
