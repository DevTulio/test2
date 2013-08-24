<?php

use Illuminate\Database\Migrations\Migration;

class CreateBusReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bus_reservations',function($table)
		{
				$table->increments('bus_resvid');
				$table->integer('busid');
				$table->string('seatno');
				$table->integer('ticketno');
				$table->integer('userid');
				$table->enum('status',array('RESERVED','PAID','CANCELLED'));
				$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}