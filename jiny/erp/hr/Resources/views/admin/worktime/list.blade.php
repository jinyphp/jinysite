<div>
    <x-wire-table>
        {{-- 테이블 제목 --}}
        <x-wire-thead>
            <th width='50'>Id</th>
            <th>직원명</th>

            <th width='150'>출근시간</th>
            <th width='150'>퇴근시간</th>

            <th width='150'>근무형태</th>

            <th width='200'>등록일자</th>

        </x-wire-thead>
        <tbody>
            @if(!empty($rows))
                @foreach ($rows as $item)
                {{-- 테이블 리스트 --}}
                <x-wire-tbody-item :selected="$selected" :item="$item">
                    <td width='50'>
                        {{$item->id}}
                    </td>
                    <td width='100'>
                        {{$item->employee_id}}
                    </td>

                    <td width='150'>
                        {{$item->goto}}
                    </td>
                    <td width='150'>
                        {{$item->getoff}}
                    </td>

                    <td width='150'>{{$item->worktype_id}}</td>

                    <td width='200'>{{$item->created_at}}</td>

                </x-wire-tbody-item>
                @endforeach
            @endif
        </tbody>
    </x-wire-table>
</div>





<x-datatable>
    <thead>
        <tr>
            <th width='20'>
                <input type='checkbox' class="form-check-input" wire:model="selectedall">
            </th>


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


        </tr>
        @endforeach
    @else
        사업자 목록이 없습니다.
    @endif
    </tbody>
</x-datatable>
