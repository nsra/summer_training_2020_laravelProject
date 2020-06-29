<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyFeatureTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_feature_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            // Actual fields you want to translate
            $table->string('title');
            $table->string('description');
            $table->foreignId('company_feature_id');
            $table->foreign('company_feature_id')
                ->references('id')
                ->on('company_features')
                ->onDelete('cascade');
            $table->unique(['company_feature_id', 'locale']);
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
        Schema::dropIfExists('company_feature_translations');
    }
}
