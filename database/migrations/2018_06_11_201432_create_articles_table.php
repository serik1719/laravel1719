<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');                        //  Заголовок 
            $table->string('slug')->unique();               //  человеко-понятный уникальный идентификатор
            $table->text('description_short')->nullable();  //  Краткий текст новости
            $table->text('description');                    //  Полный текст новости
            $table->string('image')->nullable();            //  Изображение к новости
            $table->boolean('image_show')->nullable();      //  Отображать/Не отображать изображение
            $table->string('meta_title')->nullable();       //  Мета заголовок
            $table->string('meta_desription')->nullable();  //  Мета описание
            $table->string('meta_keyword')->nullable();     //  Ключевые слова
            $table->boolean('published');                   //  Опубликована/Неопубликована
            $table->integer('viewed')->nullable();          //  Количество просмотров
            $table->integer('created_by')->nullable();      //  Кто создал новость
            $table->integer('modified_by')->nullable();     //  Кто модифицировал новость
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
        Schema::dropIfExists('articles');
    }
}
