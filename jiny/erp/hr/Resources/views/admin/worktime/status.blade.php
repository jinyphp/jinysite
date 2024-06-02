<div>

    @if($goto)
        <x-button primary disabled>출근 {{$goto}}</x-button>
    @else
        <x-button primary wire:click="goToWork">출근</x-button>
    @endif

    @if($getoff)
        <x-button danger disabled>퇴근 {{$getoff}}</x-button>
    @else
        <x-button danger wire:click="getOffWork">퇴근</x-button>
    @endif




</div>
