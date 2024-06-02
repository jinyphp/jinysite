<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrCareerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //dd($this::class);

        Schema::create('hr_career', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사원별 의존성
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            $table->string('enable')->default(1);
            $table->string('company')->nullable();

            $table->string('period1')->nullable();
            $table->string('period2')->nullable();

            $table->string('content')->nullable();

            ## 확인가능한 담당자 연락처
            $table->string('phone')->nullable();
            $table->string('manager')->nullable();

            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();

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
        Schema::dropIfExists('hr_career');
    }
}
