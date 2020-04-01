<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TypeMediaTableSeeder extends Seeder {

    

    public function date()
    {
        $now = Carbon::now();
        //$now->locale('fr')->isoFormat('dddd, MMMM Do YYYY');

        return $now;
    }


    public function run()
    {
        DB::table('typemedia')->delete();

        $date = $this->date();
        DB::table('typemedia')->insert(['libelleType' => 'img','created_at' => $date]);
        DB::table('typemedia')->insert(['libelleType' => 'file','created_at' => $date]);
        DB::table('typemedia')->insert(['libelleType' => 'video','created_at' => $date]);
    
    }
}