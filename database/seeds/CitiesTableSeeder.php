<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
    	DB::table('cities')->delete();
 
        $cities = array(
            ['name' => 'Nicosia', 'country_id' => '1'],
            ['name' => 'Albania', 'country_id' => '2'],
            ['name' => 'Algeria', 'country_id' => '3'],
            ['name' => 'American Samoa', 'country_id' => '4'],
            ['name' => 'American Samoa', 'country_id' => '5'],
            ['name' => 'Marshall Islands', 'country_id' => '6'],
            ['name' => 'Mauritania', 'country_id' => '7'],
            ['name' => 'Singapore', 'country_id' => '8'],
            ['name' => 'Singapore', 'country_id' => '9']
        );
 
        // Uncomment the below to run the seeder
        DB::table('cities')->insert($cities);
        Schema::enableForeignKeyConstraints();
    }
}
