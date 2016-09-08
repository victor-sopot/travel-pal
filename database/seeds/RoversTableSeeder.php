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
            ['city_id' => NULL, 'country_code' => 'CYP', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 3.4, 'user_id' => '2'],
            ['city_id' => NULL, 'country_code' => 'ALB', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 4.4, 'user_id' => '4'],
            ['city_id' => NULL, 'country_code' => 'DZA', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 1.4, 'user_id' => NULL],
            ['city_id' => NULL, 'country_code' => 'ASM', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 3.4, 'user_id' => NULL],
            ['city_id' => NULL, 'country_code' => 'ASM', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 4.4, 'user_id' => '1'],
            ['city_id' => NULL, 'country_code' => 'MHL', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 1.4, 'user_id' => NULL],
            ['city_id' => NULL, 'country_code' => 'MRT', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 3.4, 'user_id' => '5'],
            ['city_id' => NULL, 'country_code' => 'SGP', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 4.4, 'user_id' => NULL],
            ['city_id' => NULL, 'country_code' => 'SGP', 'bio' => 'Hi there im a tour guide nice to meet you', 'rating' => 1.4, 'user_id' => NULL]
        );
 
        // Uncomment the below to run the seeder
        DB::table('rovers')->insert($rovers);
        Schema::enableForeignKeyConstraints();
    }
}
