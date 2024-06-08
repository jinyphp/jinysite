<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='200'>타입</th>
        <th width='200'>이름</th>
        <th>조건</th>
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
                <td width='200'>{{$item->type}}</td>
                <td width='200'>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->name}}
                    </x-click>
                </td>

                <td>
                    {{$item->condition}}
                    <p>{{$item->description}}</p>
                </td>
                <td width='200'>{{$item->created_at}}</td>

            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>


