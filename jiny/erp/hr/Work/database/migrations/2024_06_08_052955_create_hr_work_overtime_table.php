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
        Schema::create('hr_work_overtime', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('email')->nullable();

            // 출근 시간을 기록
            $table->string('overtime')->nullable();

            // 비고
            $table->string('description')->nullable();


            $table->string('status')->nullable();






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_work_overtime');
    }
};

