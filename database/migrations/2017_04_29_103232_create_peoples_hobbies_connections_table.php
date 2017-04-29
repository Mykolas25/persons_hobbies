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
        Schema::disableForeignKeyConstraints();

        Schema::table('peoples_hobbies_connections', function (Blueprint $table) {
            $table->string('hobbies_id', 36)->change();
        });
        Schema::enableForeignKeyConstraints();

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
