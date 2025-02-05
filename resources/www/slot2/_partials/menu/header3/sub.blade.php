<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" data-bs-display="static">
        {{$rows['title']}}
    </a>


    <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">

        @foreach ($rows['items'] as $item)
            @if(isset($item['items']))
            <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    {{$item['title']}}2
                </a>
                @if(isset($item['items']))
                <ul class="dropdown-menu">
                    @foreach ($item['items'] as $item2)
                    <li>
                        <a class="dropdown-item" href="/pages/course-category">{{$item2['title']}}</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @else
            <li>
                <a href="/pages/course-category" class="dropdown-item">
                    {{$item['title']}}2
                </a>
            </li>
            @endif
        @endforeach

    </ul>

</li>

