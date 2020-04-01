<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorat1Table extends Migration {

	public function up()
	{
		Schema::create('doctorat1', function(Blueprint $table) {
			$table->timestamps();
			$table->increments('id');
		});
	}

	public function down()
	{
		Schema::drop('doctorat1');
	}
}