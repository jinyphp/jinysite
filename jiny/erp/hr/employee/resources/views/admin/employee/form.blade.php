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
                <x-form-label>이메일</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.email")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>


            {{-- <x-form-hor>
                <x-form-label>프로필 이미지</x-form-label>
                <x-form-item>

                    @if(isset($form['image1']))
                        @if (is_object($form['image1']))
                            <!-- 업로드 미리보기 -->
                            <img src="{{$form['image1']->temporaryUrl()}}" alt="">
                        @else
                            <!-- 저장된 이미지 보기 -->
                            <img src="/images/{{$form['image1']}}" alt="">
                        @endif
                    @endif

                    <div
                        x-data="{ isUploading: false, progress: 0 }"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                        <!-- File Input -->
                        <input type="file" name="filename" wire:model.defer="forms.image1" class="form-control"/>

                        <!-- Progress Bar -->
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>

                    @error('filename') <span class="text-danger">{{$message}}</span> @enderror

                </x-form-item>
            </x-form-hor> --}}


            {{-- <x-form-hor>
                <x-form-label>이름</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.name")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}



            {{-- <x-form-hor>
                <x-form-label>연락처(폰)</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.phone")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>부서</x-form-label>
                <x-form-item>
                    {!! xSelect()
                        ->table('hr_division','name')
                        ->setWire('model.defer',"forms.division")
                        ->setWidth("medium")
                    !!}

                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>직급</x-form-label>
                <x-form-item>
                    {!! xSelect()
                        ->table('hr_position','name')
                        ->setWire('model.defer',"forms.position")
                        ->setWidth("medium")
                    !!}


                </x-form-item>
            </x-form-hor> --}}

            {{-- <x-form-hor>
                <x-form-label>국가</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.country")
                        ->setWidth("medium")
                    !!}
                </x-form-item>
            </x-form-hor> --}}

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
