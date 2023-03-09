<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('word');
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->integer('number_search')->default(0);
            $table->integer('number_add_notebook')->default(0);
            $table->text('description')->nullable()->default(null);
            $table->string('pronunciation')->nullable()->default(null);
            $table->text('user_manual')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->boolean('status')->default(1);
            $table->text('synonym')->nullable()->default(null);

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
        Schema::dropIfExists('words');
    }
}
