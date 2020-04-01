<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartenairesLaboE3MTable extends Migration {

	public function up()
	{
		Schema::create('partenairesLaboE3M', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomPE3M', 45);
			$table->string('villePE3M', 45);
			$table->integer('idLabE3M')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('partenairesLaboE3M');
	}
}