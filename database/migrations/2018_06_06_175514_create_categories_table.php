<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            
//    было ДО следующего коммита за "create admin dashboard"
//            $table->string('name');
//            $table->integer('sorting')->default(0);     //  сортировка
            
//    было ПОСЛЕ следующего коммита за "create admin dashboard"
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('published')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
                        
            
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
        Schema::dropIfExists('categories');
    }
}
