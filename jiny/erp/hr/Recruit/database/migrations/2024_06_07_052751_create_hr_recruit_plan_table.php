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
        Schema::create('hr_recruit_plan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('enable')->default(1);

            // 작성자
            $table->string('email')->nullable();

            // 채용형태
            $table->string('type')->nullable();

            // 채용부서
            $table->string('division')->nullable();

            // 채용명
            $table->string('title')->nullable();

            // 채용인원
            $table->string('people')->nullable();

            // 잡 요청서
            $table->text('recruitment')->nullable();

            // 전자결제
            $table->string('comfirms')->nullable();

            // 진행상태
            $table->string('status')->nullable();

            ## 비고
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
        Schema::dropIfExists('hr_recruit_plan');
    }
};
