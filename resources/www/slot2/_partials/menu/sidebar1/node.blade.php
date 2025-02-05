@foreach($rows as $i => $item)
    @if(isset($item['header']) && $item['header'] )
        @includeIf(inSlotPartial("menu.sidebar1".".header"))
    @elseif (isset($item['items']))
        @includeIf(inSlotPartial("menu.sidebar1".".sub"))
    @else
        @includeIf(inSlotPartial("menu.sidebar1".".item"))
    @endif
@endforeach


{{-- <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
<nav class="list-group list-group-borderless">
    <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active"
        href="account-info">
        <i class="ci-user fs-base opacity-75 me-2"></i>
        Personal info
    </a>
    <a class="list-group-item list-group-item-action d-flex align-items-center"
        href="account-addresses">
        <i class="ci-map-pin fs-base opacity-75 me-2"></i>
        Addresses
    </a>
    <a class="list-group-item list-group-item-action d-flex align-items-center"
        href="account-notifications">
        <i class="ci-bell fs-base opacity-75 mt-1 me-2"></i>
        Notifications
    </a>
</nav>
<h6 class="pt-4 ps-2 ms-1">Customer service</h6>
<nav class="list-group list-group-borderless">
    <a class="list-group-item list-group-item-action d-flex align-items-center"
        href="help-topics-v1">
        <i class="ci-help-circle fs-base opacity-75 me-2"></i>
        Help center
    </a>
    <a class="list-group-item list-group-item-action d-flex align-items-center"
        href="terms-and-conditions">
        <i class="ci-info fs-base opacity-75 me-2"></i>
        Terms and conditions
    </a>
</nav>
<nav class="list-group list-group-borderless pt-3">
    <a class="list-group-item list-group-item-action d-flex align-items-center"
        href="account-signin">
        <i class="ci-log-out fs-base opacity-75 me-2"></i>
        Log out
    </a>
</nav> --}}
