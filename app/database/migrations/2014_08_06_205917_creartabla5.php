<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creartabla5 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
                $table->increments('id');
                $table->string('username', 16);
                $table->string('name', 16);
                $table->string('lastname', 16);
                $table->string('photo', 50);
                $table->string('password', 64);
                $table->string("email")->nullable()->default(null);
                $table->string('gender', 64);
                $table->string('phone', 20);
                $table->string('location', 120);
                
                
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