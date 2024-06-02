<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrPersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_personnel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사원별 의존성
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            $table->string('enable')->default(1);
            $table->string('title')->nullable();

            ## 인사발령 (Personnel Appointment)
            ## 인사이동 (Personnel Transfer)
            $table->string('type')->nullable();

            ## 내용
            $table->string('content')->nullable();

            ## 인사동의
            $table->string('agree')->nullable();

            ## 이의제기
            $table->string('reject')->nullable();

            ## 비고
            $table->string('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_personnel');
    }
}
