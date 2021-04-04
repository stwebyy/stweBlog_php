<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMergeArticleIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merge_article_ids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('qiita_article_id');
            $table->unsignedBigInteger('article_id');
            $table->timestamps();

            $table->foreign('qiita_article_id')->references('id')->on('qiita_articles');
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merge_article_ids');
    }
}
