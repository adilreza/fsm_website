<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishedArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('published_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_title',300);
            $table->string('application_type',50);
            $table->string('display_image',130);
            $table->text('main_content',4000);
            $table->string('blasting')->default('blasting');
            $table->string('admin_email');
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
        Schema::dropIfExists('published_articles');
    }
}
