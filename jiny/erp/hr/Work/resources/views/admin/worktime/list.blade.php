<div>
    <x-wire-table>
        {{-- 테이블 제목 --}}
        <x-wire-thead>
            <th width='50'>Id</th>
            <th>
                이메일
            </th>
            <th>
                기준일자/상태</th>
            <th width='100'>시간(초)</th>

        </x-wire-thead>
        <tbody>
            @if(!empty($rows))
                @foreach ($rows as $item)
                {{-- 테이블 리스트 --}}
                <x-wire-tbody-item :selected="$selected" :item="$item">
                    <td width='50'>
                        {{$item->id}}
                    </td>
                    <td>
                        <x-click wire:click="edit({{$item->id}})">
                            {{$item->email}}
                        </x-click>

                    </td>
                    <td>
                        {{$item->time}} /
                        {{$item->status}}
                    </td>
                    <td width='100'>
                        {{$item->work}}
                    </td>

                </x-wire-tbody-item>
                @endforeach
            @endif
        </tbody>
    </x-wire-table>
</div>