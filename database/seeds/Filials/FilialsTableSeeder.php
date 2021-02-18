<?php

use Illuminate\Database\Seeder;
use \App\Models\Filials\Filials;

class FilialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Filials::class, 50)->create()->each(function ($filial) {
            $filial->save();
        });
    }
}
