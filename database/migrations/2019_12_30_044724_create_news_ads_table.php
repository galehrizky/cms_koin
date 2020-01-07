<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('news_ads_name');
            $table->text('description');
            $table->string('link');
            $table->string('image');
            $table->integer('news_ads_type_id');
            $table->date('start_date');
            $table->date('expired_date');
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
        Schema::dropIfExists('news_ads');
    }
}
