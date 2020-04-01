<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediasTable extends Migration {

	public function up()
	{
		Schema::create('medias', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('tire', 50);
			$table->string('nom', 45);
			$table->string('chemin', 50);
			$table->string('description', 50);
			$table->integer('id_type')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('medias');
	}
}