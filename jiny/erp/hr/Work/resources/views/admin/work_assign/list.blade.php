{{-- <div class="row gap-4">
    @if(!empty($rows))
        @foreach ($rows as $item)
            <div class="col-2 border">
                <x-click wire:click="edit({{$item->id}})">
                    {{$item->title}}
                </x-click>
            </div>
        @endforeach
    @endif
</div> --}}



<x-wire-table>
    <x-wire-thead>
        <th width='50'>Id</th>
        <th>이메일</th>
        <th>근무형태</th>
            <th width='100'>사원수</th>


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
                    <div>{{$item->user_name}}</div>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->email}}
                    </x-click>
                </td>
                <td>
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->title}}
                    </x-click>
                </td>

                <td width='100'></td>



                <td width='200'>{{$item->created_at}}</td>





            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>

