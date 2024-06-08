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
        Schema::create('hr_request_leave', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('enable')->default(1);

            // 사원명
            $table->string('email')->nullable();

            // 신청한 휴가목록
            $table->string('type')->nullable();
            $table->string('name')->nullable();

            // 신청일수
            $table->string('days')->nullable();
            // 사용일자
            $table->string('priod')->nullable();

            // 사유
            $table->text('reason')->nullable();

            // 승인
            $table->string('confirms')->nullable();

            ## 메모
            $table->text('description')->nullable();


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
        Schema::dropIfExists('hr_request_leave');
    }
};
