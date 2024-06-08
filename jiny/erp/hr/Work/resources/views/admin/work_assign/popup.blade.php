<div>
    <!-- BEGIN  modal -->
    <x-modal-layout wire:ignore.self large id="pupupFormLarge">
        <x-modal-header>
            <h5 class="modal-title">Default modal </h5>
        </x-modal-header>
        <x-modal-body>
            @include('hr1::admin.worktype.form')
        </x-modal-body>
        <x-modal-footer>
            @if (isset($actions['id']))
                <x-button danger wire:click.prevent="delete()">삭제</x-button>
                <x-button primary wire:click.prevent="update()">Update</x-button>
            @else
                <x-button secondary wire:click.prevent="close()">Close</x-button>
                <x-button primary wire:click.prevent="store()">Save changes</x-button>
            @endif
        </x-modal-footer>
    </x-modal-layout>
    <!-- END  modal -->
</div>

@push('scripts')
<script>
    window.livewire.on('popupClose', function () {
        $('#pupupFormLarge').modal('hide');
    });
</script>
@endpush
