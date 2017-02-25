<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => str_random(10),
            'cust_number' => str_random(10),
            'address' => str_random(10),
            'city' => str_random(10),
            'state' => str_random(10),
            'zip' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'home_phone' => str_random(10),
            'cell_phone' => str_random(10),
        ]);
    }
}
