<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->string('book')->nullable();
            $table->string('publisher')->nullable();
            $table->string('summary',255)->nullable();
            $table->boolean('public')->default(0);
            $table->enum('type', ['humorous','serious'])->nullable();
            $table->enum('characters', ['female','male','all',])->nullable();
          $table->enum('rating', ['G-All Ages','PG-Middle School Appropriate','PG-13-High School','R-rating'])->nullable();
            $table->integer('isbn')->nullable();
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
        Schema::dropIfExists('data');
    }
}
