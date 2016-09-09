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
            ['id' => 1, 'name' => 'Limassol', 'country_id' => 1],
            ['id' => 2, 'name' => 'Nicosia', 'country_id' => 1],
            ['id' => 3, 'name' => 'Larnaca', 'country_id' => 1],
            ['id' => 4, 'name' => 'Valletta', 'country_id' => 2],
            ['id' => 5, 'name' => 'Birkirkara', 'country_id' => 2],
            ['id' => 6, 'name' => 'Mosta', 'country_id' => 2],
            ['id' => 7, 'name' => 'Sofia', 'country_id' => 3],
            ['id' => 8, 'name' => 'Veliko Tarnovo', 'country_id' => 3],
            ['id' => 9, 'name' => 'Varna', 'country_id' => 3],
        );
 
        // Uncomment the below to run the seeder
        DB::table('cities')->insert($cities);
        Schema::enableForeignKeyConstraints();
    }
}
