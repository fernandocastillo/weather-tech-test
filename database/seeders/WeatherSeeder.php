<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weather;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data =[
            [
                'name'=>'Hot',
                'min_grades'=>35,
                'max_grades'=>40
            ],
            [
                'name'=>'Warm',
                'min_grades'=>24,
                'max_grades'=>34
            ],
            [
                'name'=>'Sunny',
                'min_grades'=>18,
                'max_grades'=>23
            ],
            [
                'name'=>'Cold',
                'min_grades'=>0,
                'max_grades'=>27
            ],

        ];


        foreach ($data as $weather){
            Weather::create($weather);
        }

    }
}
