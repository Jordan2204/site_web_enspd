<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('serv_dept', 45);
			$table->string('email', 100);
			$table->string('tel', 45);
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}