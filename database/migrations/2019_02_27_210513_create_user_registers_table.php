<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname',40);
            $table->string('lname',40);
            $table->string('city',40);
            $table->string('state',40);
            $table->string('zip',40);
            $table->string('title',40);
            $table->string('company',100);
            $table->string('email',40);
            $table->string('username',40);
            $table->string('password1',40);
            $table->string('token',200);
            $table->integer('verification_status');

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
        Schema::dropIfExists('user_registers');
    }
}
