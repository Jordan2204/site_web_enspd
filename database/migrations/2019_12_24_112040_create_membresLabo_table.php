<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembresLaboE3MTable extends Migration {

	public function up()
	{
		Schema::create('membresLaboE3M', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomME3M', 45);
			$table->string('prenomME3M', 45)->nullable();
			$table->string('gradeME3M', 45)->nullable();
			$table->string('lieuME3M', 45)->nullable();
			$table->integer('id_typeME3M')->unsigned();
			$table->integer('idLabE3M')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('membresLaboE3M');
	}
}