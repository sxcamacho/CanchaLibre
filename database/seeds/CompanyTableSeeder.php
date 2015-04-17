<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 16/04/15
 * Time: 10:30 PM
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Fake;

class CompanyTableSeeder extends Seeder {

    public function run()
    {
        $fake = Fake::create();
        for($i = 0; $i < 30; $i++){
            \DB::table('companies')->insert(array(
                'name'          => $fake->unique()->company,
                'address'       => $fake->address,
                'uuid'          => \Uuid::generate(),
                'phone_number'  => $fake->phoneNumber,
                'state'         => 1,
                'city'          => 1,
                'location'      => $fake->latitude . ' ' . $fake->longitude,
                'active'        => true
            ));
        }
    }

}