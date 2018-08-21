<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('studentID');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('birthDate');
            $table->string('birthPlace');
            $table->string('sex');
            $table->string('motherTongue');
            $table->string('photo');
            $table->string('studentCountry');
            $table->string('studentRegion');
            $table->string('studentZone');
            $table->string('studentWoreda');
            $table->string('studentKebele');
            $table->string('studentEmergencyFullName');
            $table->string('studentEmergencyAddress');
            $table->string('studentEmergencyRelation');
            $table->string('studentEmergencyEmail');
            $table->string('studentEmergencyPhone');
            //$table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_admissions');
    }
}
