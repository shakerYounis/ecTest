<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        $faker = Faker::create ();


        for ( $i = 0; $i < 3; $i++ )
        {
            $dictionary    = \App\Models\Dictionary::query ()->firstOrCreate ( [ 'name' => $faker->word () ] );
            $numberOfTerms = random_int ( 10 , 24 );
            for ( $j = 0; $j <= $numberOfTerms; $j++ )
            {
                $term          = $dictionary->Terms ()->firstOrCreate ( [ 'name' => $faker->word () ] );
                $numberOfTrans = random_int ( 0 , 10 );
                for ( $k = 0; $k <= $numberOfTrans; $k++ )
                {
                    $term->Translations ()->create ( [ 'name' => $faker->word () ] );
                }
            }
        }
    }
}
