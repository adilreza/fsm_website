<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplReportTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampl_report_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sampl_report_from',50);
            $table->string('sampl_report_to',50);
            $table->string('seen_by_client',50)->default('unseen');
            $table->string('sample_report_name',130);
            $table->string('optional1')->default('green');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sampl_report_tables');
    }
}
