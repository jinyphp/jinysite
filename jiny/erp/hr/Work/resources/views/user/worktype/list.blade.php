
<x-wire-table>
    <x-wire-thead>
        <th width='50'>Id</th>
        <th>근무형태</th>
            <th width='100'>사원수</th>
            <th width='100'>출근시간</th>
            <th width='100'>퇴근시간</th>
            <th width='50'>월</th>
            <th width='50'>화</th>
            <th width='50'>수</th>
            <th width='50'>목</th>
            <th width='50'>금</th>
            <th width='50'>토</th>
            <th width='50'>일</th>
            <th width='100'>부서명</th>
            <th width='150'>사업장</th>
            <th width='200'>등록일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)

            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='50'>
                    {{$item->id}}
                </td>
                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->title}}
                    </x-click>
                </td>

                <td width='100'></td>
                <td width='100'>{{$item->starttime}}</td>
                <td width='100'>{{$item->endtime}}</td>

                <td width='50'>{{$item->mon}}</td>
                <td width='50'>{{$item->the}}</td>
                <td width='50'>{{$item->wed}}</td>
                <td width='50'>{{$item->thu}}</td>
                <td width='50'>{{$item->fri}}</td>
                <td width='50'>{{$item->sat}}</td>
                <td width='50'>{{$item->sun}}</td>

                <td width='100'>{{$item->division}}</td>
                <td width='150'>{{$item->business}}</td>

                <td width='200'>{{$item->created_at}}</td>





            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>

