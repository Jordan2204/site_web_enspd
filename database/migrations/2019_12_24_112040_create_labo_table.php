<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboE3MTable extends Migration {

	public function up()
	{
		Schema::create('laboE3M', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->mediumText('description')->nullable();
			$table->mediumText('objectif');
			$table->string('strucRattach', 65);
			$table->integer('media_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('laboE3M');
	}
}