<?php

use Illuminate\Database\Seeder;

class UsersBookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();
     	DB::table('users_bookings')->delete();   
     	Schema::enableForeignKeyConstraints();
    }
}
