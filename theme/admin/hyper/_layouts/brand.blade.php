<!-- Logo Light -->
{{-- <a href="index" class="logo logo-light">
    <span class="logo-lg">

        {{$slot}}
    </span>
    <span class="logo-sm">

        {{$slot}}
    </span>
</a> --}}

<style>
    .navbar-brand {
    align-items: center;
    display: inline-flex;
    font-weight: var(600);
}
</style>
{{--  fs-2 py-0 m-0 me-auto me-sm-n5 --}}
<a class="fs-3" href="/">
    {{$slot}}
</a>
