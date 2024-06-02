{{--
    <x-table class="datatable">
    <thead>
        <tr>
            <th width='20'>
                <input type='checkbox' class="form-check-input">
            </th>
            <th width='100'>년도</th>
            <th width='100'>월</th>
            <th width='100'>일</th>


            <th width='150'>출근시간</th>
            <th width='150'>퇴근시간</th>



            <th width='150'>근무형태</th>

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
            <td width='100'>{{$item->year}}</td>
            <td width='100'>{{$item->month}}</td>
            <td width='100'>{{$item->day}}</td>


            <td width='150'>{{$item->goto}}</td>
            <td width='150'>{{$item->getoff}}</td>


            <td width='150'>{{$item->worktype_id}}</td>

            <td width='200'>{{$item->created_at}}</td>
        </tr>
        @endforeach
    @else
        사업자 목록이 없습니다.
    @endif
    </tbody>
</x-table>
--}}
