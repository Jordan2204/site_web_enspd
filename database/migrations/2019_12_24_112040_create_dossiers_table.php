<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDossiersTable extends Migration {

	public function up()
	{
		Schema::create('dossiers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomDOC', 45);
			$table->integer('numBCA');
			$table->date('date_intr');
			$table->string('infosActu', 45);
			$table->string('etape', 5);
			$table->string('observations', 100);
		});
	}

	public function down()
	{
		Schema::drop('dossiers');
	}
}