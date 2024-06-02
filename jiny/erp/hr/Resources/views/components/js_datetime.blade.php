<div>
    <style>
        #clock {
            font-size: 5em;
            color: #333;
        }
        #date {
            font-size: 1.5em;
            color: #666;
        }
    </style>

    {{-- flex-column  --}}
    <x-flex class="justify-content-end align-items-baseline">
        <div id="date">
            Loading date...
        </div>
        <div id="clock">
            Loading time...
        </div>
    </x-flex>

    {{$slot}}

    <script>
        function updateClock() {
            const now = new Date();

            // Time
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const currentTime = `${hours}:${minutes}:${seconds}`;
            document.getElementById('clock').textContent = currentTime;

            // Date and Day
            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const day = days[now.getDay()];
            const date = now.toLocaleDateString();
            const fullDate = `${day}, ${date}`;
            document.getElementById('date').textContent = fullDate;
        }

        setInterval(updateClock, 1000);
        updateClock(); // Initial call to display the clock immediately
    </script>
</div>
