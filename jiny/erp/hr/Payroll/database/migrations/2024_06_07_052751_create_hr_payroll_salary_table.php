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
        Schema::create('hr_payroll_salary', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // 직원명
            $table->string('email')->nullable();

            // 근무유형salary
            $table->string('salary')->nullable();

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
        Schema::dropIfExists('hr_payroll_salary');
    }
};
