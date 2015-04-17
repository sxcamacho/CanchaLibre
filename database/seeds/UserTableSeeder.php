<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 16/04/15
 * Time: 08:25 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Fake;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $fake = Fake::create();
        for($i = 0; $i < 30; $i++){
            \DB::table('users')->insert(array(
                'first_name' => $fake->firstName,
                'last_name'  => $fake->lastName,
                'uuid'       => \Uuid::generate(),
                'email'      => $fake->unique()->email,
                'password'   => Hash::make('secret'),
                'type'       => $fake->randomElement($array = array ('user','admin','root')),
                'active'     => true
            ));
        }
    }

}