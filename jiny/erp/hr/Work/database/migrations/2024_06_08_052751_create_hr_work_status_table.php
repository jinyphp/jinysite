<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_work_status', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // 직원명
            $table->string('email')->nullable();

            // 근무유형
            $table->string('type')->nullable();

            // 근무유형
            $table->string('status')->nullable();

            // 출근횟수
            $table->unsignedBigInteger('go_num')->default(0);

            $table->unsignedBigInteger('year')->default(0);
            $table->unsignedBigInteger('hours')->default(0);
            $table->unsignedBigInteger('second')->default(0);

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
        Schema::dropIfExists('hr_work_status');
    }
};
