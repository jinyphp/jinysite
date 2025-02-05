@foreach ($rows as $item)
    @if(isset($item['items']))
        @includeIf(inSlotPartial("menu.header3.sub"),[
            'rows' => $item
        ])
    @else
        @includeIf(inSlotPartial("menu.header3.item"),[
            'rows' => $item
        ])
    @endif
@endforeach
