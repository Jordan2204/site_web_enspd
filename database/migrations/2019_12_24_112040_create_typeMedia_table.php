<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeMediaTable extends Migration {

	public function up()
	{
		Schema::create('typeMedia', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelleType', 10);
		});
	}

	public function down()
	{
		Schema::drop('typeMedia');
	}
}