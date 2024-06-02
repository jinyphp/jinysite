<div>
    <x-button wire:click="popupOpen">popup</x-button>
    <x-live-form>
    <x-dialog-modal wire:model="popup" maxWidth="2xl">

        <x-slot name="content">
            {{-- @include($actions['form']) --}}
        </x-slot>

        <x-slot name="footer">
            {{--
            @if (isset($actions['id']))
                <x-button danger wire:click="delete">삭제</x-button>
                <x-live-submit primary>수정</x-live-submit>
            @else
                <x-button secondary wire:click="popupClose">취소</x-button>
                <x-live-submit primary>저장</x-live-submit>
            @endif
            --}}

        </x-slot>
    </x-dialog-modal>
    </x-live-form>
</div>
