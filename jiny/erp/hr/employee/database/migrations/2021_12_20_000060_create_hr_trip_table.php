<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_trip', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사원별 의존성
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            $table->string('enable')->nullable();
            $table->string('title')->nullable();

            $table->string('period1')->nullable();
            $table->string('period2')->nullable();

            $table->string('time1')->nullable();
            $table->string('time2')->nullable();

            ## 장소
            $table->string('place')->nullable();

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
        Schema::dropIfExists('hr_trip');
    }
}
