<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRoversId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('rovers', function($table){
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });

        Schema::table('users', function($table){
            $table->integer('rover_id')->unsigned()->nullable();
            $table->foreign('rover_id')->references('id')->on('rovers');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('rovers', function($table){
            $table->foreign('user_id')-references('id')->on('users');
        });
        Schema::enableForeignKeyConstraints();
    }
}
