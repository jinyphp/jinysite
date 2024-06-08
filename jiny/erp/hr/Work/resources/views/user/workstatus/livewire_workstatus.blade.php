<div>
    <style>
        .timeline {
            display: flex;
            align-items: center;
            height: 20px;
            background-color: #f0f0f0;
            position: relative;
        }
        .hour {
            flex: 1;
            height: 100%;
            border-right: 1px solid #ccc;
            position: relative;
            font-size: 12px;
            text-align: center;
            line-height: 20px;
        }
        .hour:last-child {
            border-right: none;
        }
        .work-time {
            position: absolute;
            height: 100%;
            background-color: #007bff;
            z-index: 1;
        }
    </style>

    @php
    // 시작 시간을 Unix 타임스탬프로 변환
    $startTimestamp = strtotime($start);
    @endphp

    <x-card>
        <x-card-header>
            @if($work_status)
            출근
            @else
            퇴근
            @endif
        </x-card-header>
        <x-card-body>
            <div class="timeline">
                @for ($i = 0; $i < 24; $i++)
                    <div class="hour">{{ $i }}</div>
                @endfor
                <div class="work-time" id="workTime"></div>
            </div>
        </x-card-body>
        <x-card-footer>
            @if($work_status)
                {{-- 출근상태 --}}
                <button class="btn btn-danger" wire:click="getOffWork">
                    퇴근등록
                </button>
            @else
                {{-- 퇴근 상태 --}}
                <button class="btn btn-primary" wire:click="goToWork">
                    출근등록
                </button>
            @endif
        </x-card-footer>
    </x-card>


<script>
    // PHP에서 전달된 시작 타임스탬프
    const startTimestamp = {{ $startTimestamp }};

    function updateWorkTime() {
        const currentTimestamp = Math.floor(Date.now() / 1000); // 현재 시간을 Unix 타임스탬프로 변환
        const elapsedSeconds = currentTimestamp - startTimestamp; // 경과 시간(초)
        const elapsedMinutes = elapsedSeconds / 60; // 경과 시간(분)
        const startHour = new Date(startTimestamp * 1000).getHours(); // 시작 시간의 시간 부분
        const startMinute = new Date(startTimestamp * 1000).getMinutes(); // 시작 시간의 분 부분

        const startPercentage = ((startHour * 60 + startMinute) / 1440) * 100; // 시작 시간의 퍼센트
        const elapsedPercentage = (elapsedMinutes / 1440) * 100; // 경과 시간의 퍼센트

        const workTimeElement = document.getElementById('workTime');
        workTimeElement.style.left = `${startPercentage}%`;
        workTimeElement.style.width = `${elapsedPercentage}%`;
    }

    // 1초마다 updateWorkTime 함수를 호출하여 실시간 업데이트
    setInterval(updateWorkTime, 1000);

    // 페이지 로드 시 즉시 함수 호출
    updateWorkTime();
</script>



</div>
