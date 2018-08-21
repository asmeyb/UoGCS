<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_emergency_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->string('fullName');
            $table->string('relationship');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('region');
            $table->string('zone');
            $table->string('woreda');
            $table->string('kebele');
            $table->timestamps();

            $table->foreign('studentId')->references('id')->on('student_bio_graphies');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_emergency_contacts');
    }
}
