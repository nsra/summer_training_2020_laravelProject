<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientReviewTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_review_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            // Actual fields you want to translate
            $table->string('review');
            $table->foreignId('client_review_id');
            $table->foreign('client_review_id')
                ->references('id')
                ->on('client_reviews')
                ->onDelete('cascade');

            $table->unique(['client_review_id', 'locale']);
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
        Schema::dropIfExists('client_review_translations');
    }
}
