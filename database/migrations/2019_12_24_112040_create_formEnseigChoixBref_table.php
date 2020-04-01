<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormEnseigChoixBrefTable extends Migration {

	public function up()
	{
		Schema::create('formEnseigChoixBref', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titreFECB', 45);
			$table->text('contenuFECB');
			$table->integer('media_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('formEnseigChoixBref');
	}
}