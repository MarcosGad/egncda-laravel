<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_book');
            $table->string('pre_book');
            $table->string('photo_book');
            $table->string('pdf_book');
            $table->text('desc');
            $table->integer('cat_id');
            $table->integer('categoriesofdoctors_id');
            $table->integer('basicmanagements_id');
            $table->integer('cvscurriculums_id');
            $table->integer('diabetescurriculums_id');
            $table->integer('respiratorycurriculums_id');
            $table->integer('oncolcgycurriculums_id');
            $table->integer('miscellaneouscurriculums_id');
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
        Schema::dropIfExists('flights');
    }
}
