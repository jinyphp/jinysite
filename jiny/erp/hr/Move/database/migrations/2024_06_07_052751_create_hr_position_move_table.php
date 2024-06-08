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
        Schema::create('hr_position_move', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // 직원명
            $table->string('email')->nullable();

            // 근무유형
            $table->string('position')->nullable();

            // 승인
            $table->string('confirms')->nullable();

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
        Schema::dropIfExists('hr_position_move');
    }
};
