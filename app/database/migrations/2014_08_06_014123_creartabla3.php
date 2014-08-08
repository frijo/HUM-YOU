<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creartabla3 extends Migration {

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
                $table->string('photo', 16);
                $table->string('password', 64);
                $table->string("email")->nullable()->default(null);
                $table->string('gender', 64);
                $table->string('status', 64);
                $table->string('remember_token', 100)->nullable()->default(null);
                
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
