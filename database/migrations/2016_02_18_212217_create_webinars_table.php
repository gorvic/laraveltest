<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebinarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webinars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 45)->unique('name_UNIQUE');
			$table->text('description', 65535);
			$table->dateTime('start_time');
			$table->string('picture', 45);
			$table->string('url', 45)->unique('url_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webinars');
	}

}
