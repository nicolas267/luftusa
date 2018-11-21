<?php

use Illuminate\Database\Seeder;

class usertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'user_type' => 'test'
        ]);
    }
}
