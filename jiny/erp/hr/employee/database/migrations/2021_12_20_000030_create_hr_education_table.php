<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_education', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사원별 의존성
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            $table->string('enable')->default(1);
            $table->string('title')->nullable();

            ## 수료기간
            $table->string('period1')->nullable();
            $table->string('period2')->nullable();

            ## 수료시간
            $table->string('time1')->nullable();
            $table->string('time2')->nullable();

            ## 교육기관
            $table->string('institution')->nullable();

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
        Schema::dropIfExists('hr_education');
    }
}
