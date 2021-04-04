<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQiitaArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qiita_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->text('rendered_body');
            $table->text('body');
            $table->string('url', 200);
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
        Schema::dropIfExists('qiita_articles');
    }
}
