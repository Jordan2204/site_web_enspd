<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterIIRechTable extends Migration {

	public function up()
	{
		Schema::create('masterIIRech', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('masterIIRech');
	}
}