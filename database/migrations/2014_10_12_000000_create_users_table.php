<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
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
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('zone_id')->unsigned();
            $table->enum('type', ['Staff', 'Supervisor']);
            $table->rememberToken();
            $table->timestamps();
            //$table->foreign('zone_id')->references('id')->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
