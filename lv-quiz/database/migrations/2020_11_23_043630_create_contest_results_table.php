<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('contest_id');
            $table->integer('no_of_question');
            $table->integer('score');
            $table->integer('attempt_questions');
            $table->integer('unattempt_questions');
            $table->integer('correct_answer');
            $table->integer('wrong_answer');
            $table->integer('mark_deduction');
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
        Schema::dropIfExists('contest_results');
    }
}
