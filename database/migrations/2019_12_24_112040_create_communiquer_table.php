<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommuniquerTable extends Migration {

	public function up()
	{
		Schema::create('communiquer', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->mediumText('contenuCom');
			$table->string('destinataireCom', 45);
		});
	}

	public function down()
	{
		Schema::drop('communiquer');
	}
}