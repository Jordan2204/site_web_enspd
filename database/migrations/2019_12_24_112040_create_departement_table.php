<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartementTable extends Migration {

	public function up()
	{
		Schema::create('departement', function(Blueprint $table) {
			$table->integer('id', true);
			$table->timestamps();
			$table->string('ABBR', 15);
			$table->string('nomDept', 45);
			$table->string('respDept', 45);
			$table->string('respAcaEtStage', 45)->nullable();
			$table->string('contenuDept')->nullable();
			$table->integer('media_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('departement');
	}
}