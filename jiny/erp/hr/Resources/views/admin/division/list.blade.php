<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>Id</th>
        <th width='100'>국가</th>
        <th> {!! xWireLink('부서명', "orderBy('name')") !!}</th>
        <th width='100'>사원수</th>
        <th width='200'>관리자</th>
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
                <td width='100'>{{$item->country}}</td>
                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->name}}
                    </x-click>

                </td>
                <td width='100'></td>
                <td width='200'>
                    {{_getValue($item->manager)}}
                </td>

                <td width='200'>{{$item->created_at}}</td>



            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>

