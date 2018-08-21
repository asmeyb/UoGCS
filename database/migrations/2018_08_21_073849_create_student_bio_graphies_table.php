<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentBioGraphiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_bio_graphies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('secondName');
            $table->string('lastName');
            $table->date('birthDate');
            $table->boolean('gender');
            $table->string('martialStatus');
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
        Schema::dropIfExists('student_bio_graphies');
    }
}
