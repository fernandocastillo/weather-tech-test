<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use App\Models\Forecast;
use App\Models\City;
use App\Models\Weather;

class ForecastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



        $date = new DateTime(date('Y-m-d',strtotime('-3 days')));
        for( $days = 7; $days--; ) {
            $city = City::all()->random(1)->first();
            $weather = Weather::all()->random(1)->first();
            Forecast::create([
                'city_id'       =>  $city->id,
                'weather_id'    =>  $weather->id,
                'min_grades'    =>  $weather->min_grades+1,
                'max_grades'    =>  $weather->min_grades+2,
                'forecast_date' =>  $date->modify( '+1 days' )->format( 'Y-m-d' )
            ]);
        }
    }
}
