<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='150'>직원</th>
        <th >이름</th>
        <th width='100'>주민번호</th>
        <th width='100'>관계</th>
        <th width='100'>공제</th>
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
                <td width='150'>{{$item->employee}}</td>
                <td >
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->name}}
                    </x-click>
                </td>
                <td width='100'>{{$item->ssnum}}</td>
                <td width='100'>{{$item->relations}}</td>
                <td width='100'>{{$item->deduction}}</td>
                <td width='200'>{{$item->created_at}}</td>


            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
