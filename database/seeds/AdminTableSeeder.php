<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

     public function date()
    {
        $now = Carbon::now();
        //$now->locale('fr')->isoFormat('dddd, MMMM Do YYYY');

        return $now;
    }

    public function run()
    {
        DB::table('admins')->delete();

        $date = $this->date();

        DB::table('admins')->insert([
            'name' => 'Mr NDZANA ',
            'prenom' => 'Rigobert',
            'poste' => 'Chef de la cellule informatique',
            'email' => 'adminRigobert@gamil.com',
            'password' => bcrypt('adminRigobert'),
            'created_at' => $date
        ]);

        DB::table('admins')->insert([
            'name' => 'Mr HERNES ',
            'prenom' => 'Hugue',
            'poste' => 'Administrteur de base de données',
            'email' => 'adminHugue@gamil.com',
            'password' => bcrypt('adminHugue'),
            'created_at' => $date
        ]);

        DB::table('admins')->insert([
            'name' => 'Mr BILLY ',
            'prenom' => 'Paul',
            'poste' => 'che sous cellule développement',
            'email' => 'adminPaul@gamil.com',
            'password' => bcrypt('adminPaul'),
            'created_at' => $date
        ]);

        DB::table('admins')->insert([
            'name' => 'Mr KAMDEN ',
            'prenom' => 'Ivan',
            'poste' => 'Webnestre',
            'email' => 'adminIvan@gamil.com',
            'password' => bcrypt('adminIvan'),
            'created_at' => $date
        ]);

    
    }
}