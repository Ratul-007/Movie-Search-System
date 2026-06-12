<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('omdb_id')->unique();
            $table->string('title');
            $table->string('year')->nullable();
            $table->string('poster')->nullable();
            $table->text('plot')->nullable();
            $table->string('genre')->nullable();
            $table->string('director')->nullable();
            $table->string('actors')->nullable();
            $table->string('runtime')->nullable();
            $table->decimal('imdb_rating', 3, 1)->nullable();
            $table->integer('rt_rating')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
