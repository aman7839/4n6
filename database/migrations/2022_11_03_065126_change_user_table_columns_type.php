<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserTableColumnsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('user', function (Blueprint $table) {
           
    
            $table->string('password',255)->change();
            $table->string('school_phone_no',255)->change();
            $table->string('personal_phone_no',255)->change();
            $table->string('school_zip_code',255)->change();
            $table->string('billing_phone_no',255)->change();




        });
    }

    /**p
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
