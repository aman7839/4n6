<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extemps', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['domestic','foreign'])->nullable();
            $table->string('question')->nullable();
            $table->string('month')->nullable();
            $table->year('year')->nullable();


            $table->bigInteger('topic_id')->nullable();

            $table->boolean('public')->default(0);

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
        Schema::dropIfExists('extemps');
    }
}
