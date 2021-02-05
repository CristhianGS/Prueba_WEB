<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //PEOPLE
      //  People::factory()->count(5)->create();
      $this->call(PeopleSeeder::class);
      $this->call(RolSeeder::class);
      $this->call(ConfigurationSeeder::class);   
    }
}