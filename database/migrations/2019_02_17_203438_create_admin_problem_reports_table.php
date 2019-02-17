<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminProblemReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_problem_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_reporter_name',200);
            $table->string('adnin_reporter_email', 40);
            $table->longText('admin_reporter_message',2000);
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
        Schema::dropIfExists('admin_problem_reports');
    }
}
