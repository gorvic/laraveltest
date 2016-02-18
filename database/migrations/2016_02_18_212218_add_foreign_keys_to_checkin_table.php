<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCheckinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('checkin', function(Blueprint $table)
		{
			$table->foreign('user_id', 'checkin_user')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('webinar_id', 'checkin_webinar')->references('id')->on('webinars')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('checkin', function(Blueprint $table)
		{
			$table->dropForeign('checkin_user');
			$table->dropForeign('checkin_webinar');
		});
	}

}
