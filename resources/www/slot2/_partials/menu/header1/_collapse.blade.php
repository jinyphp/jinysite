<ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem" data-bs-popper="static">
    <li class="dropend">
        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown"
        data-bs-trigger="hover" aria-expanded="false">
        About
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="about-v1.html">About v.111</a></li>
          <li><a class="dropdown-item" href="about-v2.html">About v.2111</a></li>
        </ul>
      </li>

    @foreach ($rows['items'] as $i => $item)
        @if (isset($item['items']))
            <li class="dropend">
                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">
                    {{ $item['title'] }}
                </a>

                <ul class="dropdown-menu">
                    @foreach ($item['items'] as $item2)
                        <li>
                            @if (isset($item2['href']))
                                <a class="dropdown-item" href="{{ $item2['href'] }}">
                                    {{ $item2['title'] }}
                                </a>
                            @else
                                <a class="dropdown-item" href="javascript:void(0);">
                                    {{ $item2['title'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li>
                <div class="d-flex align-items-center">
                    <div>
                        @if (isset($item['href']))
                            <a class="dropdown-item" href="{{ $item['href'] }}">
                                {{ $item['title'] }}
                            </a>
                        @else
                            <a class="dropdown-item" href="javascript:void(0);">
                                {{ $item['title'] }}
                            </a>
                        @endif
                    </div>
                    <div>
                        <x-click wire:click="edit('{{ $ref }}-{{ $i }}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </x-click>
                    </div>
                </div>
            </li>
        @endif
    @endforeach
</ul>




{{--
<ul class="dropdown-menu show" style="--cz-dropdown-spacer: .75rem"
data-bs-popper="static">

      <li class="dropend">
        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View v.1</a></li>
          <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View v.2</a></li>
          <li><a class="dropdown-item" href="blog-list.html">List View</a></li>
          <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a></li>
          <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a></li>
        </ul>
      </li>
      <li class="dropend">
        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
          <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
          <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
        </ul>
      </li>
      <li class="dropend">
        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a></li>
          <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a></li>
          <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single Article v.1</a></li>
          <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single Article v.2</a></li>
        </ul>
      </li>
      <li class="dropend">
        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="404-electronics.html">404 Electronics</a></li>
          <li><a class="dropdown-item" href="404-fashion.html">404 Fashion</a></li>
          <li><a class="dropdown-item" href="404-furniture.html">404 Furniture</a></li>
          <li><a class="dropdown-item" href="404-grocery.html">404 Grocery</a></li>
        </ul>
      </li>
      <li>
        <a class="dropdown-item" href="terms-and-conditions.html">Terms &amp; Conditions</a>
    </li>
/ul>
--}}
