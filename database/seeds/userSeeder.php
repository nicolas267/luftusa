<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'lastname' => 'test',
            'email' => 'test@test.com',
            'password' => 'test',
            'user_type_id' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'test2',
            'lastname' => 'test2',
            'email' => 'test2@test.com',
            'password' => 'test2',
            'user_type_id' => '1'
        ]);
    }
}
