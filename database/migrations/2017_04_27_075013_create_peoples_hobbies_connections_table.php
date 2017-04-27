<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeoplesHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peoples_hobbies_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('peoples_id', 36)->index('fk_peoples_hobbies_connections_people1_idx');
			$table->string('hobbies_id', 45)->index('fk_peoples_hobbies_connections_hobbies_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('peoples_hobbies_connections');
	}

}
