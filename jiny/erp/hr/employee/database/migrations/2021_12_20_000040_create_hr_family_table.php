<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrFamilyTable extends Migration
{
    /**
     * Run the migrations.
     * 부양가족(dependents)
     * 근로자본인은 자동으로 등록
     * @return void
     */
    public function up()
    {
        Schema::create('hr_family', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 사원별 의존성
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('employee_id')->default(0);

            $table->string('enable')->default(1);
            ## 성명
            $table->string('name')->nullable();

            ## 주민번호
            $table->string('ssnum')->nullable();

            ## 관계
            $table->string('relations')->nullable();

            ## 공제여부(tax deduction)
            $table->string('deduction')->nullable();

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
        Schema::dropIfExists('hr_family');
    }
}
