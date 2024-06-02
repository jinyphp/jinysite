<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrWorktypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_worktype', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사업장
            $table->string('business')->nullable();

            ## 부서
            $table->string('division')->nullable();

            $table->string('enable')->nullable();

            ## 근무형태
            $table->string('title')->nullable();

            ## 출근시간
            $table->string('starttime')->nullable();

            ## 퇴근시간
            $table->string('endtime')->nullable();

            ## 근무요일
            $table->string('mon')->nullable();
            $table->string('the')->nullable();
            $table->string('wed')->nullable();
            $table->string('thu')->nullable();
            $table->string('fri')->nullable();
            $table->string('sat')->nullable();
            $table->string('sun')->nullable();

            ## 비고
            $table->string('description')->nullable();

            // 작업자ID
            $table->unsignedBigInteger('user_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_worktype');
    }
}
