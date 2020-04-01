<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelechargementsTable extends Migration {

	public function up()
	{
		Schema::create('telechargements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('media_id')->unsigned();
			$table->string('titreTelech', 100)->index();
		});
	}

	public function down()
	{
		Schema::drop('telechargements');
	}
}