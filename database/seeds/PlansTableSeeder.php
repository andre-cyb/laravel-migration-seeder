<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\CreatePlansTable;


class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $test= new CreatePlansTable();
            $test->destinazione = $faker->city();
            $test->hotel = $faker->company();
            $test->volo = $faker->company();
            $test->andata = $faker->date($format = 'Y-m-d');
            $test->ritorno = $faker->date($format = 'Y-m-d');
            $test->totale = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 30000);
        }
    }
}
