<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            // Actual fields you want to translate
            $table->string('title');
            $table->string('description');
            $table->string('button');
            $table->unsignedBigInteger('ad_id');
            $table->foreign('ad_id')->references('id')->on('ads');
            $table->unique(['ad_id', 'locale']);
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
        Schema::dropIfExists('ad_translations');
    }
}
