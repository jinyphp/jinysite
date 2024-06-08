<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='200'>분류코드</th>
        <th>질문명</th>
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

                <td width='200'>
                    {{$item->code}}
                </td>

                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->question}}
                    </x-click>
                    <div>
                        {{$item->answer}}
                    </div>
                </td>

                <td width='200'>
                    {{$item->created_at}}
                </td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
