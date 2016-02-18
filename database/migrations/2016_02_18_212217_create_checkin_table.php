<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkin', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->unique('user_id_UNIQUE');
			$table->integer('webinar_id')->unsigned()->unique('webinar_id_UNIQUE');
			$table->dateTime('date_reg');
			$table->dateTime('date_enter');
			$table->string('ref_id', 45);
			$table->string('group_name', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('checkin');
	}

}
