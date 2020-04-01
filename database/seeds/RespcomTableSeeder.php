<?php

use Illuminate\Database\Seeder;

class RespcomTableSeeder extends Seeder {

     public function date()
    {
        $now = Carbon::now();
        //$now->locale('fr')->isoFormat('dddd, MMMM Do YYYY');

        return $now;
    }

    public function run()
    {
        DB::table('respcoms')->delete();

        $date = $this->date();

        DB::table('respcoms')->insert([
            'name' => 'Dr ANE',
            'prenom' => 'Jordan',
            'poste' => 'Responsable de la cellule de communication',
            'email' => 'respcomJordan@gamil.com',
            'password' => bcrypt('respcomJordan'),
            'auth' => 0,
            'created_at' => $date
        ]);

    }
}