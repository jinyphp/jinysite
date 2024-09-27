@foreach($rows as $i => $item)
    @if(isset($item['header']) && $item['header'] )
    <li>
        @includeIf(inThemePartial("menus.style1.header"))
    </li>
    @elseif (isset($item['items']))
    <li>
        @includeIf(inThemePartial("menus.style1.sub"))
    </li>
    @else
    <li>
        @includeIf(inThemePartial("menus.style1.item"))
    </li>
    @endif
@endforeach
