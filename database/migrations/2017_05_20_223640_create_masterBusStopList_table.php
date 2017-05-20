<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterBusStopListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('masterBusStopList', function(Blueprint $table)
		{
			$table->integer('StopNumber')->nullable();
			$table->string('Location')->nullable();
			$table->string('Corner')->nullable();
			$table->string('Accessibility')->nullable();
			$table->string('Shelter')->nullable();
			$table->string('RoutesServed')->nullable();
			$table->integer('Routes')->nullable();
			$table->string('Branch')->nullable();
			$table->string('Direction')->nullable();
			$table->integer('Sequence')->nullable();
			$table->string('CBD')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('masterBusStopList');
	}

}
