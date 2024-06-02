<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_payment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 급여형태
            // 월고정급,월변동급,일급,시급
            $table->string('enable')->default(1);
            $table->string('title')->nullable();

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
        Schema::dropIfExists('hr_payment');
    }
}
