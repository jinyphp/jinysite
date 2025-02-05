
@foreach ($rows as $item)

    @if(isset($item['items']))

        @includeIf(inSlotPartial("menu.header.sub"),['rows' => $item])
    @endif
@endforeach
