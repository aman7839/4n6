<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('paypal_transaction_id')->nullable();
            $table->float('amount', 8, 2)->nullable();
            $table->float('discount', 8, 2)->nullable();
            $table->integer('offer_id')->nullable();
            $table->string('cheque_number')->nullable();
            $table->string('cheque_date')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('accountholder_name')->nullable();
            $table->string('cheque_image')->nullable();
            $table->string('cheque_status')->nullable();
            $table->string('payment_mode')->nullable();
            $table->dateTime('start_date', $precision = 0)->nullable();
            $table->dateTime('end_date', $precision = 0)->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('membership');
    }
}
