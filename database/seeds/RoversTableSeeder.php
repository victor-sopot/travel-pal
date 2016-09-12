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
            ['id' => 1, 'city_id' => 1, 'bio' => 'Hi there i\'m a tour guide ', 'rating' => 3.3, 'user_id' => 1, 'country_id' => 1],
            ['id' => 2, 'city_id' => 1, 'bio' => 'hello again noobs', 'rating' => 3.3, 'user_id' => 2, 'country_id' => 1],
            ['id' => 3, 'city_id' => 2, 'bio' => 'gettin well tired now', 'rating' => 3.3, 'user_id' => null, 'country_id' => 2],
            ['id' => 4, 'city_id' => 2, 'bio' => 'Hi there i\'m a tour guide ', 'rating' => 3.3, 'user_id' => 3, 'country_id' => 2],
            ['id' => 5, 'city_id' => 3, 'bio' => 'hello again noobs', 'rating' => 3.3, 'user_id' => 5, 'country_id' => 3],
            ['id' => 6, 'city_id' => 3, 'bio' => 'gettin well tired now', 'rating' => 3.3, 'user_id' => null, 'country_id' => 3],
            ['id' => 7, 'city_id' => 6, 'bio' => 'Hi there i\'m a tour guide ', 'rating' => 3.3, 'user_id' => 6, 'country_id' => 4],
            ['id' => 8, 'city_id' => 6, 'bio' => 'hello again noobs', 'rating' => 3.3, 'user_id' => NULL, 'country_id' => 4],
            ['id' => 9, 'city_id' => 6, 'bio' => 'gettin well tired now', 'rating' => 3.3, 'user_id' => null, 'country_id' => 4],
        );
 
        // Uncomment the below to run the seeder
        DB::table('rovers')->insert($rovers);
        Schema::enableForeignKeyConstraints();
    }
}
