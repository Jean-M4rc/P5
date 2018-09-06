<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesSellersTable extends Migration
{
    /**
     * Run the migrations.
     * Table pivot de suivi des vendeurs par les utilisateurs
     * Les utilisateurs peuvent avoir plusieurs vendeurs favoris
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites_sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_follower_id');
            $table->integer('seller_followed_id');
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
        Schema::dropIfExists('favorites_sellers');
    }
}
