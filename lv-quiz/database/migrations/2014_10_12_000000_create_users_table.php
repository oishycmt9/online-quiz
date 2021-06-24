<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('role')->default('user');
            $table->string('user_type')->default('free');
            $table->integer('points')->default(5);
            $table->boolean('status')->default(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('city')->nullable(true);
            $table->string('region')->nullable(true);
            $table->string('street_or_village')->nullable(true);
            $table->string('country')->nullable(true);
            $table->date('dob')->nullable(true);
            $table->string('interests')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
