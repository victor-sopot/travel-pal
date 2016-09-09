<?php

use Illuminate\Database\Seeder;

class RoversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();
        DB::table('rovers')->delete();
 
        $rovers = array(
            ['id' => 1, 'city_id' => 2, 'country_code' => 'CYP', 'bio' => 'Hi there i\'m a tour guide ', 'rating' => 3.3, 'user_id' => 2],
            ['id' => 2, 'city_id' => 1, 'country_code' => 'CYP', 'bio' => 'hello again noobs', 'rating' => 3.3, 'user_id' => 2],
            ['id' => 3, 'city_id' => 3, 'country_code' => 'CYP', 'bio' => 'gettin well tired now', 'rating' => 3.3, 'user_id' => null],
        );
 
        // Uncomment the below to run the seeder
        DB::table('rovers')->insert($rovers);
        Schema::enableForeignKeyConstraints();
    }
}
