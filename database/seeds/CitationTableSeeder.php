<?php

use Illuminate\Database\Seeder;

class CitationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('citations')->delete();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('citations')->insert([
                'nomAuteur' => 'Anafack Diderot' . $i,
                'citationAuteur' => 'Je suis une très belle citation  tu vous n\'etes pas ce qure vous penser que vous etes vou n\'est pas ce que les autres pense que vous etes mais qous etes ce qur vous penser que les autres pensent que vous etes' . $i . '@blop.fr',
            ]);
        }
    }
}