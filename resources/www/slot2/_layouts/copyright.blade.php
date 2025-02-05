<!-- Copyright + Payment methods -->
<div class="d-lg-flex align-items-center border-top pt-4 mt-3">
    <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-md-4 mb-lg-0 order-lg-2">
        @partials('footer/payment')
    </div>
    <div>{{$slot}}</div>
    <div class="d-md-flex justify-content-center order-lg-1">
        @partials('footer/copyright')
    </div>
</div>
