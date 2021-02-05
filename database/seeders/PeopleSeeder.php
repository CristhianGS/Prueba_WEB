<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = range(0,20);
        foreach ($arrays as $valor) {
          DB::table('people')->insert([	            
              'nameUser' => Str::random(10),
              'nameComplete' => Str::random(10),
              'email' => Str::random(10),
              'number' => Str::random(10),
              'age' => rand(1, 99),
              'dayBrithday' => Str::random(10),
             
          ]);
    }
}
}