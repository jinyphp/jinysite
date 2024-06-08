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
        Schema::create('hr_leave_type', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('enable')->default(1);

            // Annual Leave: 주로 연간 주어지는 유급 휴가를 의미합니다.
            // 예를 들어, "Employees are entitled to 15 days of annual leave each year"라고
            // 할 수 있습니다.

            // Paid Time Off (PTO): 이 용어는 병가, 개인 휴가, 공휴일 등을 포함한
            // 모든 유급 휴가를 포괄적으로 의미하는 경우가 많습니다.
            // 예를 들어, "Our company offers 20 days of paid time off annually"라고 할 수 있습니다.
            $table->string('type')->nullable();

            $table->string('name')->nullable();

            // 사용조건
            $table->string('condition')->nullable();

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
        Schema::dropIfExists('hr_leave_type');
    }
};
