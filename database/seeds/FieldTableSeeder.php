<?php
/**
 * Created by PhpStorm.
 * User: sebastian
 * Date: 17/04/15
 * Time: 12:11 AM
 */

use Illuminate\Database\Seeder;
use Faker\Factory as Fake;

class FieldTableSeeder extends Seeder {

    public function run()
    {
        $fake = Fake::create();
        for($i = 0; $i < 100; $i++){
            \DB::table('fields')->insert(array(
                'uuid'          => \Uuid::generate(),
                'company_id'    => $fake->numberBetween(1, 30),
                'title'         => $fake->sentence($nbWords = 4),
                'description'   => $fake->paragraph($nbSentences = 5),
                'active'        => true
            ));
        }
    }

}