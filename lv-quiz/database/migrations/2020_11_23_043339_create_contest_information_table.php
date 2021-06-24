<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('author_id');
            $table->string('name');
            $table->text('description');
            $table->integer('course_id');
            $table->integer('no_of_question');
            $table->time('time'); //Contest running time
            $table->date('started_date'); //When start
            $table->time('started_time'); //When start
            $table->string('contest_type'); //Contest type: free/paid
            $table->boolean('negative_marking')->default(true); //true/false
            $table->integer('contest_fee')->default(0);// default: null
            $table->dateTime('last_reg_date');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('contest_information');
    }
}
