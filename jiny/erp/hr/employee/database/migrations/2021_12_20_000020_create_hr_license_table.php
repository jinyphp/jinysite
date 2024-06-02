<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_license', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사원별 의존성
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            $table->string('enable')->default(1);
            $table->string('title')->nullable();

            ## 기관
            $table->string('institution')->nullable();

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
        Schema::dropIfExists('hr_license');
    }
}
