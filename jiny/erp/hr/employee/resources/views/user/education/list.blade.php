<x-datatable>
    <thead>
        <tr>
            <th width='20'>
                <input type='checkbox' class="form-check-input">
            </th>

            <th>기관명</th>
            <th>기간1</th>
            <th>기간2</th>

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
                {!! $popupEdit($item, $item->institution) !!}
            </td>
            <td>{{$item->period1}}</td>
            <td>{{$item->period2}}</td>
            <td width='200'>{{$item->created_at}}</td>
        </tr>
        @endforeach
    @else
        목록이 없습니다.
    @endif
    </tbody>
</x-datatable>
