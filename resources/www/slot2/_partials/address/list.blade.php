

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($rows as $i => $item)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0">배송 주소 {{ $i + 1 }}</h5>
                        @if ($item->selected)
                            <x-badge-primary class="cursor-pointer" wire:click="selected({{ $item->id }})">
                                기본
                            </x-badge-primary>
                        @else
                            <x-badge-secondary class="cursor-pointer" wire:click="selected({{ $item->id }})">
                                기본
                            </x-badge-secondary>
                        @endif
                    </div>
                    <ul class="list-unstyled fs-sm mb-3">
                        <li>{{ $item->address1 }}</li>
                        <li>{{ $item->address2 }}</li>
                        <li>{{ $item->country }}</li>
                    </ul>
                    <x-click class="btn btn-sm btn-outline-primary" wire:click="edit({{ $item->id }})">
                        수정
                    </x-click>
                </div>
            </div>
        </div>
    @endforeach

    <div class="col">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center justify-content-center">
                <x-click class="nav-link animate-underline fs-base px-0" wire:click="create">
                    <i class="ci-plus fs-lg ms-n1 me-2"></i>
                    <span class="animate-target">주소 추가</span>
                </x-click>
            </div>
        </div>
    </div>

</div>
