<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalCrmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_crms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('msg_from',100);
            $table->string('msg_to',100);
            $table->string('msg_file');
            $table->string('msg_file_type');
            $table->string('msg_seen_unseen')->default('unseen');
            $table->string('msg_optional_comment',1000);
            

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
        Schema::dropIfExists('global_crms');
    }
}
