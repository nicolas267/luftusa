<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(usertypeSeeder::class);
        //$this->call(userSeeder::class);
        factory(App\models\usersModels::class, 2)->create();
       // factory(App\Models\carModel::class, 5)->create();
        factory(App\models\carpartModel::class, 5)->create();
        // factory(App\Models\caryearModel::class, 5)->create();
        factory(App\models\cartypeModel::class, 5)->create();





    }
}
