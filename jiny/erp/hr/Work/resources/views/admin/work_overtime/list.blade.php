<div>
    <x-wire-table>
        {{-- 테이블 제목 --}}
        <x-wire-thead>
            <th width='50'>Id</th>
            <th width='200'>
                이메일
            </th>
            <th width='100'>시간(초)</th>
            <th>
            설명
            </th>
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
                        <x-click wire:click="edit({{$item->id}})">
                            {{$item->email}}
                        </x-click>
                    </td>
                    <td width='100'>
                        {{$item->overtime}}
                    </td>
                    <td>
                        {{$item->description}}
                    </td>
                    <td width='200'>
                        {{$item->created_at}}
                    </td>
                </x-wire-tbody-item>
                @endforeach
            @endif
        </tbody>
    </x-wire-table>
</div>