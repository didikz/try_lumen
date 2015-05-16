<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserHobby extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_hobby', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('hobby_id', false)->unsigned();
			$table->integer('user_id', false)->unsigned();
			$table->timestamps();

			$table->index('hobby_id');
			$table->index('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_hobby');
	}

}
