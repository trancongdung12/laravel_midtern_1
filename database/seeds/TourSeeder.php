<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            DB::table('tours')->insert(
            [
                'name'=>$faker->text,
                'image'=>'public/tour.jpg',
                'typetour'=>$faker->city,
                'shedule'=>$faker->numberBetween(1,5).'đến'.$faker->numberBetween(6,10).'ngày',
                'depart'=>$faker->dateTimeBetween('now', '+21 days'),
                'number'=>$faker->numberBetween(5,20),
                'price'=>$faker->numberBetween(10000000,20000000)
            ]
            );
        }
    }
}
