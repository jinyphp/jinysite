<?php
namespace Jiny\Erp\Hr\Onboard\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WorkStatus extends Component
{
    public $work_status;
    public $work_time;

    public function render()
    {
        ## 사용자 출퇴근 조회
        $user = Auth::user();
        if($user) {
            $work = DB::table('hr_worktime')
            ->where('email',$user->email)
            ->orderBy('time', "desc")
            ->first();

            if($work) {
                $this->checkStatus($work);
            } else {
                // 테이터베이스가 없는경우
                // 첫출근 기록
                $this->work_status = false; // 퇴근상태
            }
        }

        return view("jinyerp-hr::user.worktime.livewire.status");
    }

    private function checkStatus($work)
    {
        if($work->status == "go") {
            // 출근상태
            $this->work_status = true; // 근무상태

            // 지속적인 근무시간 계산
            $commuteTime = Carbon::parse($work->time);
            $this->work_time = $commuteTime->toIso8601String();

        } else {
            // 퇴근상태
            $this->work_status = false; // 퇴근상태
        }
    }

    public function checkIfDateIsPast($dateString) {
        // Parse the given date string into a Carbon instance
        $givenDate = Carbon::parse($dateString);

        // Get the current date and time
        $currentDate = Carbon::now();

        // Compare the dates
        if ($givenDate->isPast()) {
            // 'The given date and time are older than the current date and time.'
            return true;
        } else {
            // 'The given date and time are not older than the current date and time.'
            return false;
        }
    }

    /**
     * 출근상태를 DB에 기록합니다.
     */
    public function goToWork()
    {
        // 출근상태 변경
        $this->work_status = true;

        $user = Auth::user();
        $date = explode("-",date("Y-m-d"));
        DB::table('hr_worktime')->insert([
            'email' => $user->email,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'time' => date("Y-m-d H:i:s"),

            'status' => "go" // 출근상태
        ]);

        // 지속적인 근무시간 계산
        $commuteTime = Carbon::parse(date("Y-m-d"));
        $this->work_time = $commuteTime->toIso8601String();

    }

    /**
     * 퇴근상태를 DB에 기록합니다.
     */
    public function getOffWork()
    {
        // 출근상태 변경
        $this->work_status = false;

        $user = Auth::user();
        $date = explode("-",date("Y-m-d"));

        // 퇴근시, 출근후 총 근무시간 계산
        $goWork = DB::table('hr_worktime')
            ->where('email', $user->email)
            ->orderBy('time', "desc")
            ->first();

        // Parse the date-time values using Carbon
        $carbonDateTime1 = Carbon::createFromFormat('Y-m-d H:i:s', $goWork->time);
        $carbonDateTime2 = Carbon::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"));

        // Calculate the difference in minutes
        $differenceInMinutes = $carbonDateTime1->diffInSeconds($carbonDateTime2);


        // 퇴근 정보 DB 기록
        DB::table('hr_worktime')->insert([
            'email' => $user->email,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'time' => date("Y-m-d H:i:s"),

            'work' => $differenceInMinutes,

            'status' => "off" // 출근상태
        ]);

    }

}
