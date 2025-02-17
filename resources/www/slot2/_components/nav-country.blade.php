<div class="dropdown d-none d-md-block nav">
    @php
    $country = country();
    @endphp

    <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
        <div class="ratio ratio-1x1" style="width: 20px">
        {{-- <img src="/assets/img/flags/en-us.png" alt="USA"> --}}
        <img src="{{$country[0]->image}}" alt="{{$country[0]->name}}">
        </div>
    </a>

  <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
    @foreach($country as $item)
    <li>
      <a class="dropdown-item" href="#!">
        <img src="{{$item->image}}" class="flex-shrink-0 me-2" width="20"
            alt="{{$item->name}}">
        {{$item->name}}
      </a>
    </li>
    @endforeach

    {{-- <li>
      <a class="dropdown-item" href="#!">
        <img src="/assets/img/flags/fr.png" class="flex-shrink-0 me-2" width="20" alt="France">
        France
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="#!">
        <img src="/assets/img/flags/de.png" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
        Deutschland
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="#!">
        <img src="/assets/img/flags/it.png" class="flex-shrink-0 me-2" width="20" alt="Italia">
        Italia
      </a>
    </li> --}}
  </ul>
</div>
