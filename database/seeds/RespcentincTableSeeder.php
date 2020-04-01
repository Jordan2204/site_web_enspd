<?php

use Illuminate\Database\Seeder;

class RespcentincTableSeeder extends Seeder {

     public function date()
    {
        $now = Carbon::now();
        //$now->locale('fr')->isoFormat('dddd, MMMM Do YYYY');

        return $now;
    }

    public function run()
    {
        DB::table('Respcentincs')->delete();

        $date = $this->date();

        DB::table('respcentincs')->insert([
            'name' => 'Dr NDOUMBE',
            'prenom' => 'Jean',
            'poste' => 'Responsable centre incubation',
            'email' => 'respcentincJeanC@gamil.com',
            'password' => bcrypt('respc'),
            'auth' => 0,
            'created_at' => $date
        ]);

    }
}