<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table){
            $table->increments('id');
            $table->integer('staff_id')->unsigned();
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('suburb');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('cel_phone');
            $table->timestamps();
            $table->foreign('staff_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
