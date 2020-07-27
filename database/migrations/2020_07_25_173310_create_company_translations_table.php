<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateCompanyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            // Actual fields you want to translate
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('footer');
            $table->foreignId('company_id');
            $table->foreign('company_id')
                ->references('id')
                ->on('company')
                ->onDelete('cascade');
 
            $table->unique(['company_id', 'locale']);
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
        Schema::dropIfExists('company_translations');
    }
}
