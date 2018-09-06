<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * Table pivot de suivi des categories par les vendeurs
     * Les vendeurs peuvent avoir plusieurs categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_follower_id');
            $table->integer('category_followed_id');
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
        Schema::dropIfExists('sellers_categories');
    }
}
