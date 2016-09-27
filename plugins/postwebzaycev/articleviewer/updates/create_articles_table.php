<?php namespace PostwebZaycev\ArticleViewer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('postwebzaycev_articleviewer_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('article_name');
            $table->string('directory_name');
            $table->date('date_of_creation');
            $table->string('place_of_creation');
            $table->string('image_format');
            $table->integer('number_of_pages');
            $table->boolean('explicit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postwebzaycev_articleviewer_articles');
    }

}
