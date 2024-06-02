<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrWorktimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_worktime', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('email')->nullable();

            // 출근 시간을 기록
            $table->string('time')->nullable();

            // 출근 상태를 기록
            $table->string('status')->nullable();

            // 퇴근시, 근무시간을 기록합니다.
            $table->string('work')->nullable();

            // 비고
            $table->string('description')->nullable();

            /*
            ## 직원ID
            ## 사원별 의존성




            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            ## 근무형태
            //$table->unsignedBigInteger('worktype_id')->default(0);
            $table->string('worktype_id')->nullable();

            ## 년도
            $table->string('year')->nullable();

            ## 월
            $table->string('month')->nullable();

            ## 일자
            $table->string('day')->nullable();

            ## 출근
            $table->string('goto')->nullable();
            $table->string('goto_over')->nullable(); //지각

            ## 퇴근
            $table->string('getoff')->nullable();
            $table->string('getoff_over')->nullable(); //연장근무

            ## 조퇴
            $table->string('early')->nullable();



            // 작업자ID
            $table->unsignedBigInteger('user_id')->default(0);
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_worktime');
    }
}
