<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeMembreTable extends Migration {

	public function up()
	{
		Schema::create('typeMembre', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 25);
		});
	}

	public function down()
	{
		Schema::drop('typeMembre');
	}
}