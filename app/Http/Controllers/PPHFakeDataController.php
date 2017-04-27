<?php
/**
 * Created by PhpStorm.
 * User: mikis_asus
 * Date: 4/27/2017
 * Time: 11:11 AM
 */

namespace App\Http\Controllers;
use App\models\HCPeoples;
use App\models\HCHobbies;
use App\models\HCCity;
use App\models\HCPeoplesHobbiesConnections;
use Faker\Factory;

class PPHFakeDataController extends Controller
{
    /*
     *
     *1. "pcrm_persons" fake data generator
     *
     */

    public function generatePeoples(int $count = 100)
{
    $faker = Factory::create('lt_LT');

    for ($i = 0; $i < $count; $i++)
    {

        HCPeoples::create([
            'name' => $faker->name,
            'city_id' => $faker->phoneNumber,
        ]);
    }
}

    public function generateCities(int $count = 3)
    {
        $faker = Factory::create('lt_LT');

        for ($i = 0; $i < $count; $i++)
        {
            HCCity::create([
                'name' => $faker->city,
            ]);
        }
    }
}

