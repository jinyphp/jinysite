<x-www-layout>
    <div class="wrapper">
        <aside style="width: 240px;">
            @includeIf("jinyerp-hr-home::users.menu_users")
        </aside>

        <div class="main">

            <x-flex-between>
                <div class="page-title-box">
                    <x-flex class="align-items-center gap-2">
                        <h1 class="align-middle h3 d-inline">
                            @if (isset($actions['title']))
                            {{$actions['title']}}
                            @endif
                        </h1>
                        <x-badge-info>Admin</x-badge-info>
                    </x-flex>
                    <p>
                        @if (isset($actions['subtitle']))
                            {{$actions['subtitle']}}
                        @endif
                    </p>
                </div>

                <div class="page-title-box">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        @foreach (explode("/",$actions['route']['uri']) as $item)
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{$item}}</a></li>
                        @endforeach
                    </ol>


                    <div class="mt-2 d-flex justify-content-end gap-2">
                        <button class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                            </svg>

                            Video
                        </button>

                        <button class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
                                <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"/>
                                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                                <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
                            </svg>

                            Manual
                        </button>
                    </div>
                </div>

            </x-flex-between>


            <!-- Section -->
            <section class="py-5">
                <div class="container px-5">
                    <h1>HR System</h1>
                    <a href="/admin/hr">
                        <x-badge-info>Admin</x-badge-info>
                    </a>
                </div>
            </section>

            <div class="container">

                <div class="row">
                    <div class="col-3">


                    </div>
                    <main class="col-9">










                        {{-- Admin Rule Setting --}}
                        {{-- @include('jinytable::setActionRule') --}}

                    </main>
                </div>

            </div>

        </div>
    </div>
</x-www-layout>