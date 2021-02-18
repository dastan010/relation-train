<?php

use Illuminate\Database\Seeder;
use \App\Models\Staffs\Staffs;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Staffs::class, 50)->create()->each(function ($staff)
        {
            $staff->save();
        });
    }
}
