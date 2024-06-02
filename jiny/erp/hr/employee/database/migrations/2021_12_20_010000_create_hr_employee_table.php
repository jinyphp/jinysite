<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_employee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('user')->nullable();
            // user 테이블과의 관계
            $table->unsignedBigInteger('_id')->default(0);

            $table->string('enable')->default(1);
            $table->string('name')->nullable();

            $table->string('country')->nullable();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // 직급
            $table->string('division')->nullable();
            $table->unsignedBigInteger('division_id')->default(0);

            // 직급
            $table->string('position')->nullable();
            $table->unsignedBigInteger('position_id')->default(0);

            ## 직원 재직 상태를 구분합니다.
            ## 재직자(incumbent) / 퇴직자(retiree)
            $table->string('status')->nullable();

            ## 사원번호(employee number)
            $table->string('emnum')->nullable();

            ## 주민번호(Social Security Number)
            $table->string('ssnum')->nullable();

            ## 입사일자(accede date)
            $table->string('accede')->nullable();

            ## 퇴사일자(retiree date)
            $table->string('retiree')->nullable();

            ## 주소
            $table->string('address')->nullable();


            ## 급여설정
            ## 근무형태 (정규직,계약직,임시직,일용직)
            $table->string('work_type')->nullable();




            ## 국민연금(National Pension) , 계산안함 check
            $table->string('Pension')->nullable();

            ## 건강보험(Health Insurance) , 계산안함 check

            ## 고용보험 , 계산안함 check

            ## 간이세액(simplified tax)-80%/100%/120%

            ## 감면코드

            ## 감면기간

            ## 감면율





            ## 기타정보
            ### 계정과목 급여
            ### 계정과목 상여



            ### 근무기간, 직장명, 담당업무

            ## 입사일(entering)
            $table->string('entering')->nullable();

            ## 퇴사일(leave)
            $table->string('leave')->nullable();

            ## 사진
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();

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
        Schema::dropIfExists('hr_employee');
    }
}
