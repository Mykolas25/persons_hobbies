<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPeoplesHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('peoples_hobbies_connections', function(Blueprint $table)
		{
			$table->foreign('hobbies_id', 'fk_peoples_hobbies_connections_hobbies')->references('id')->on('hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('peoples_id', 'fk_peoples_hobbies_connections_people1')->references('id')->on('people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('peoples_hobbies_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_peoples_hobbies_connections_hobbies');
			$table->dropForeign('fk_peoples_hobbies_connections_people1');
		});
	}

}
