<div class="row">
    @foreach ($rows as $item)
    <div class="col-3">
        <div class="p-2 border">
            <div class="p-2">
                <div>
                    {{$item->user_name}}
                </div>
                <x-click wire:click="edit({{$item->id}})">
                    {{$item->email}}
                </x-click>
            </div>
            <div class="p-2">
                @if($item->status == "go")
                    <button class="btn btn-primary">출근</button>
                @else
                    <button class="btn btn-danger">퇴근</button>
                @endif

            </div>
        </div>
    </div>
    @endforeach


    {{-- <x-wire-table>

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

                <x-wire-tbody-item :selected="$selected" :item="$item">
                    <td width='50'>
                        {{$item->id}}
                    </td>
                    <td>


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
    </x-wire-table> --}}
</div>
