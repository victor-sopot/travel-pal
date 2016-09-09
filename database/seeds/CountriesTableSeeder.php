<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('countries')->delete();
 
        $countries = array(
            ['id' => 1, 'name' => 'Cyprus', 'country_code' => 'CYP'],
            ['id' => 2, 'name' => 'Malta', 'country_code' => 'MLT'],
            ['id' => 3, 'name' => 'Bulgaria', 'country_code' => 'BGR'],
        );
 
        // Uncomment the below to run the seeder
        DB::table('countries')->insert($countries);   
        Schema::enableForeignKeyConstraints();
    }
}
