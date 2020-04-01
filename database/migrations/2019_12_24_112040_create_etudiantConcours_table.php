<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantConcoursTable extends Migration {

	public function up()
	{
		Schema::create('etudiantConcours', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomETC', 45);
			$table->string('prenomETC', 45);
			$table->integer('concours_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('etudiantConcours');
	}
}