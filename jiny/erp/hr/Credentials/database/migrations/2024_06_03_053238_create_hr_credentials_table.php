<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_credentials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // 신청자
            $table->text('email')->nullable();
            $table->text('type')->nullable();
            $table->text('status')->nullable();

            ## 비고
            $table->text('description')->nullable();

            // 처리담당자
            $table->text('manager')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_credentials');
    }
};
