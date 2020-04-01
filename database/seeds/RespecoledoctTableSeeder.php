<?php

use Illuminate\Database\Seeder;

class CitationTableSeeder extends Seeder {

      public function date()
    {
        $now = Carbon::now();
        //$now->locale('fr')->isoFormat('dddd, MMMM Do YYYY');

        return $now;
    }

    public function run()
    {
        DB::table('respecoledoct')->delete();

        $date = $this->date();

        DB::table('respecoledoct')->insert([
            'name' => 'Mr NDZANA ',
            'prenom' => 'ERVE',
            'poste' => 'Responsable de l\'ecole doctorale',
            'email' => 'adminRigobert@gamil.com',
            'password' => bcrypt('adminRigobert'),
            'created_at' => $date
        ]);

    
    }
}