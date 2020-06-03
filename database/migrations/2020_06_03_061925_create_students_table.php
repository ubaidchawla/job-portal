<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('regno');
            $table->string('fullname');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('picture');
            $table->bigInteger('phone');
            $table->string('cover_letter');
            $table->string('university');
            $table->string('workspace');
            $table->string('employeed');
            $table->string('verified');            
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
        Schema::dropIfExists('students');
    }
}
