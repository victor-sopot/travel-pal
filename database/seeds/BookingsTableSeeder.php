<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();
    	DB::table('bookings')->delete();
    	
        $bookings = array(
            ['user_id' => '1', 'rover_id' => '2'],
            ['user_id' => '1', 'rover_id' => '1'],
            ['user_id' => '2', 'rover_id' => '3'],
            ['user_id' => '3', 'rover_id' => '3'],
            ['user_id' => '4', 'rover_id' => '2'],
            ['user_id' => '5', 'rover_id' => '2'],
            ['user_id' => '6', 'rover_id' => '1'],
            ['user_id' => '7', 'rover_id' => '5'],
            ['user_id' => '6', 'rover_id' => '4']
        );
 
        // Uncomment the below to run the seeder
        DB::table('bookings')->insert($bookings);
        Schema::EnableForeignKeyConstraints();
    }
}
