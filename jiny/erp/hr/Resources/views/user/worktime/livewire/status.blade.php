<div>
    @if($work_status)
        {{-- 출근상태 --}}
        <button class="btn btn-danger w-48 h-16" wire:click="getOffWork">
            <div>퇴근등록</div>
            <div id="elapsed-time">...</div>
        </button>

        <script>
            const commuteTime = new Date('{{ $work_time }}');

            function updateClock() {
                const now = new Date();

                // 경과 시간
                const elapsed = now - commuteTime;
                const elapsedHours = Math.floor(elapsed / (1000 * 60 * 60));
                const elapsedMinutes = Math.floor((elapsed % (1000 * 60 * 60)) / (1000 * 60));
                const elapsedSeconds = Math.floor((elapsed % (1000 * 60)) / 1000);
                const elapsedTime = `${elapsedHours}h ${elapsedMinutes}m ${elapsedSeconds}s`;
                document.getElementById('elapsed-time').textContent = `${elapsedTime}`;
            }

            setInterval(updateClock, 1000);
            updateClock(); // 페이지 로드 시 즉시 시간을 표시
        </script>

    @else
        {{-- 퇴근 상태 --}}
        <button class="btn btn-primary w-48 h-16" wire:click="goToWork">출근등록</button>

    @endif

</div>
