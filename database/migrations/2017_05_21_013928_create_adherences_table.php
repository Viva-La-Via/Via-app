<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdherencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adherences', function(Blueprint $table)
		{
			$table->string('ServiceDate')->nullable();
			$table->integer('Routes')->nullable();
			$table->string('Block')->nullable();
			$table->string('RouteDirectionName')->nullable();
			$table->string('StopNumber')->nullable();
			$table->string('Location')->nullable();
			$table->bigInteger('Latitude')->nullable();
			$table->bigInteger('Longitude')->nullable();
			$table->integer('ScheduledTime(s)')->nullable();
			$table->string('ScheduledTime(HHMMSS)')->nullable();
			$table->integer('ArrivalTime(s)')->nullable();
			$table->string('ArrivalTime(HHMMSS)')->nullable();
			$table->integer('DepartureTime(s)')->nullable();
			$table->string('DepartureTime(HHMMSS)')->nullable();
			$table->string('Odometer')->nullable();
			$table->integer('VehicleNumber')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adherences');
	}

}
