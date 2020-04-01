<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class RespdeptTableSeeder extends Seeder {

    public function date()
    {
        $now = Carbon::now();
        //$now->locale('fr')->isoFormat('dddd, MMMM Do YYYY');

        return $now;
    }

    public function run()
    {
        DB::table('respdepts')->delete();

        $date = $this->date();

        DB::table('respdepts')->insert([
            'name' => 'Dr KAMDEM ',
            'prenom' => 'Jean',
            'poste' => 'Chef du Département TTIC',
            'email' => 'respdeptTTIC@gmail.com',
            'password' => bcrypt('respdeptTTIC'),
            'auth' => 0,
            'refDept' => 'TTIC',
            'created_at' => $date
        ]);

        DB::table('respdepts')->insert([
            'name' => 'Dr AMBA ',
            'prenom' => 'Chil',
            'poste' => 'Chef du Département GCI',
            'email' => 'respdeptGCI@gmail.com',
            'password' => bcrypt('respdeptGCI'),
            'auth' => 0,
            'refDept' => 'GCI',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Dr NDOUMBE ',
            'prenom' => 'Martin',
            'poste' => 'Chef du Département GCH',
            'email' => 'respdeptGCH@gmail.com',
            'password' => bcrypt('respdeptGCH'),
            'auth' => 0,
             'refDept' => 'GCH',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Dr NGAYIHI  ',
            'prenom' => 'Claude',
            'poste' => 'Chef du Département TCI',
            'email' => 'respdeptTCI@gmail.com',
            'password' => bcrypt('respdeptTCI'),
            'auth' => 0,
             'refDept' => 'TCI',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Dr NDOUMBE ',
            'prenom' => 'Donald',
            'poste' => 'Chef du Département GPR',
            'email' => 'respdeptGPR@gmail.com',
            'password' => bcrypt('respdeptGPR'),
            'auth' => 0,
             'refDept' => 'GPR',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Dr AYISSI ',
            'prenom' => 'Zacharie',
            'poste' => 'Chef du Département TAU',
            'email' => 'respdeptTAU@gmail.com',
            'password' => bcrypt('respdeptTAU'),
            'auth' => 0,
            'refDept' => 'TAU',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Dr YEREMOU ',
            'prenom' => 'Aurelie',
            'poste' => 'Chef du Département ROI',
            'email' => 'respdeptROI@gmail.com',
            'password' => bcrypt('respdeptROI'),
            'auth' => 0,
            'refDept' => 'ROI',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Dr PANDON  ',
            'prenom' => 'Achille',
            'poste' => 'Chef du Département PGM',
            'email' => 'respdeptPGM@gmail.com',
            'password' => bcrypt('respdeptPGM'),
            'auth' => 0,
            'refDept' => 'PGM',
            'created_at' => $date
        ]);
        DB::table('respdepts')->insert([
            'name' => 'Pr BITONDO ',
            'prenom' => 'Dieudonné',
            'poste' => 'Chef du Département HSSI',
            'email' => 'respdeptHSSI@gmail.com',
            'password' => bcrypt('respdeptHSSI'),
            'auth' => 0,
            'refDept' => 'HSSI',
            'created_at' => $date
        ]);


    
        
    }
}