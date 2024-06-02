<x-datatable>
    <thead>
        <tr>
            <th width='20'>
                <input type='checkbox' class="form-check-input" wire:model="selectedall">
            </th>
            <th>질문명</th>
            <th width='200'>등록일자</th>
        </tr>
    </thead>
    <tbody>
    @if(!empty($rows))
        @foreach ($rows as $item)

        {{-- row-selected --}}
        @if(in_array($item->id, $selected))
        <tr class="row-selected">
        @else
        <tr>
        @endif

            <td width='20'>
                <input type='checkbox' name='ids' value="{{$item->id}}"
                class="form-check-input"
                wire:model="selected">
            </td>
            <td>
                {!! $popupEdit($item, $item->question) !!}
            </td>

            <td width='200'>{{$item->created_at}}</td>
        </tr>
        @endforeach
    @else
        목록이 없습니다.
    @endif
    </tbody>
</x-datatable>
