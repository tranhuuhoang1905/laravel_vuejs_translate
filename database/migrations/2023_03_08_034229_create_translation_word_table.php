<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translation_word', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('word_id');
            $table->foreign('word_id')->references('id')->on('words');  
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->string('translate');
            $table->text('description')->nullable()->default(null);
            $table->string('pronunciation')->nullable()->default(null);
            $table->string('user_manual')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->boolean('status')->default(1);
            $table->text('comments')->nullable()->default(null);

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
        Schema::dropIfExists('translation_word');
    }
}
