<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='200'> 유형 / {!! xWireLink('부서명', "orderBy('wage')") !!}</th>
        <th>제목</th>
        <th width='200'>채용인원/상태</th>

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
                    <div>{{$item->type}}</div>
                    <div>
                        {{$item->division}}


                    </div>
                </td>
                <td>
                    <div>
                        <x-click wire:click="edit({{$item->id}})">
                            {{$item->title}}
                        </x-click>
                    </div>
                    <p>{{$item->recruitment}}</p>
                </td>
                <td width='100'>
                    <div>{{$item->people}}명</div>
                    <div>{{$item->status}}</div>
                </td>

                <td width='200'>{{$item->created_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
