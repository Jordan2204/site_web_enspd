<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		$this->call(CitationTableSeeder::class);
		$this->call(TypeMediaTableSeeder::class);
		$this->call(RespdeptTableSeeder::class);
	}
}