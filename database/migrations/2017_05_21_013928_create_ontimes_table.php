<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOntimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ontimes', function(Blueprint $table)
		{
			$table->string('ServiceDateTime')->nullable();
			$table->integer('Routes')->nullable();
			$table->string('RouteName')->nullable();
			$table->integer('EarlyDeparture')->nullable();
			$table->integer('OnTime')->nullable();
			$table->integer('LateArrival')->nullable();
			$table->integer('Missing')->nullable();
			$table->integer('TimePointCount')->nullable();
			$table->string('OTP')->nullable();
			$table->string('AverageDwellTime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ontimes');
	}

}
