<?php

use Illuminate\Database\Seeder;
use \App\Models\Drivers\Drivers;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Drivers::class, 50)->create()->each(function ($driver)
        {
            $driver->save();
        });
    }
}
