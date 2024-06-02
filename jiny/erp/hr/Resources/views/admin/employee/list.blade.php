<div>
    <x-wire-table>
        {{-- 테이블 제목 --}}
        <x-wire-thead>
            <th width='50'>Id</th>
            <th width='100'>User</th>
            <th>사원명</th>
            <th>이메일</th>
            <th>연락처</th>
            <th width='100'>직급</th>
            <th width='100'>부서</th>
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
                        {!! xCellString($item->user) !!}
                    </td>
                    <td>
                        {!! xCellAvatar($item, 'image1') !!}
                        {{$item->name}}

                    </td>
                    <td>
                        <x-click wire:click="edit({{$item->id}})">
                            {{$item->email}}
                        </x-click>
                    </td>
                    <td>{{$item->phone}}</td>
                    <td width='100'>
                        @if($item->position)
                            {{$item->position}}
                        @else
                        <a href="/admin/hr/onboarding">Onboarding</a>

                        @endif
                    </td>
                    <td width='100'>
                        <a href="javascript: void(0);" wire:click="call('division','{{$item->division}}')">
                        {{$item->division}}
                        </a>
                    </td>
                    <td width='200'>{{$item->created_at}}</td>

                </x-wire-tbody-item>
                @endforeach
            @endif
        </tbody>
    </x-wire-table>
</div>

