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
            ['name' => 'Cyprus', 'country_code' => 'CYP'],
            ['name' => 'Albania', 'country_code' => 'ALB'],
            ['name' => 'Algeria', 'country_code' => 'DZA'],
            ['name' => 'American Samoa', 'country_code' => 'ASM'],
            ['name' => 'American Samoa', 'country_code' => 'ASM'],
            ['name' => 'Marshall Islands', 'country_code' => 'MHL'],
            ['name' => 'Mauritania', 'country_code' => 'MRT'],
            ['name' => 'Singapore', 'country_code' => 'SGP'],
            ['name' => 'Singapore', 'country_code' => 'SGP']
        );
 
        // Uncomment the below to run the seeder
        DB::table('countries')->insert($countries);
        Schema::enableForeignKeyConstraints();
    }
}
