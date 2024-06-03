<div>
    {{-- dash 테이블 --}}
    <x-datatable>
        <thead>
            <tr>
                <th>질문명</th>
                <th width='200'>등록일자</th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            <tr>
                <td>
                    {!! $popupView($item, $item->question) !!}
                </td>
                <td width='200'>{{$item->created_at}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </x-datatable>

    <!-- 팝업 뷰 -->
    @if ($popupDashView)
    <x-dialog-modal wire:model="popupDashView" maxWidth="2xl">

        <x-slot name="content">
            {{$form['answer']}}
        </x-slot>

        {{--
        <x-slot name="footer">
            <x-button secondary wire:click="popupViewClose">닫기</x-button>
        </x-slot>
        --}}
    </x-dialog-modal>
    @endif
</div>

