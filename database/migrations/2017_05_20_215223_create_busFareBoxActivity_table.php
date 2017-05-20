<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusFareBoxActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('busFareBoxActivity', function(Blueprint $table)
		{
			$table->string('ServiceDate')->nullable();
			$table->integer('Routes')->nullable();
			$table->string('RouteName')->nullable();
			$table->string('CurrentRevenue')->nullable();
			$table->integer('Ridership')->nullable();
			$table->integer('TokenCount')->nullable();
			$table->integer('TicketCount')->nullable();
			$table->integer('PassCount')->nullable();
			$table->integer('BillCount')->nullable();
			$table->string('UnclassifiedRevenue')->nullable();
			$table->integer('DumpCount')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('busFareBoxActivity');
	}

}
