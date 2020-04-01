<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMiseAJoursTable extends Migration {

	public function up()
	{
		Schema::create('miseAJours', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->timestamps();
			$table->datetime('date');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('miseAJours');
	}
}