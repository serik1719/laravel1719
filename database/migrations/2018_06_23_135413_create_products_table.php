<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');                         //  Название 
            $table->integer('product_category_id');
            $table->integer('user_id');
            $table->text('description');                    //  Полный текст новости
            $table->string('image')->nullable();            //  Изображение к новости
            $table->boolean('novelty');                    //  Новинка
            $table->integer('quantity')->nullable();        //  Колиество
            
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
        Schema::dropIfExists('products');
    }
}
