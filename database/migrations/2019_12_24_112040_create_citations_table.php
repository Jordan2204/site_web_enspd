<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitationsTable extends Migration {

	public function up()
	{
		Schema::create('citations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomAuteur', 45);
			$table->mediumText('citationAuteur');
		});
	}

	public function down()
	{
		Schema::drop('citations');
	}
}