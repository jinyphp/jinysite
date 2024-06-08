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
        Schema::create('hr_work_assign', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // 직원명
            $table->string('email')->nullable();

            // 근무유형
            $table->string('type')->nullable();

            ## 비고
            $table->string('description')->nullable();

            // 현재 근무유형으로 일한 횟수
            $table->unsignedBigInteger('num')->default(0);






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
        Schema::dropIfExists('hr_work_assign');
    }
};
