<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->foreignId('blog_id');
            // $table->foreign('blog_id')
            // ->references('id')
            // ->on('blogs');
            // $table->foreignId('project_id');
            // $table->foreign('project_id')
            // ->references('id')
            // ->on('projects');
            $table->foreignId('blog_id')
            ->nullable() 
            ->references('id')
            ->on('blogs');
            $table->foreignId('project_id')
            ->nullable() 
            ->references('id')
            ->on('projects');
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
        Schema::dropIfExists('images');
    }
}
