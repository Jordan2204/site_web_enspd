<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationCentraleTable extends Migration {

	public function up()
	{
		Schema::create('administrationCentrale', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('media_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('administrationCentrale');
	}
}