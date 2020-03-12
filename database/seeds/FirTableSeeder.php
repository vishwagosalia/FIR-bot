<?php

use App\FirModel;
use Illuminate\Database\Seeder;

class FirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FirModel::class, 10)->create();
    }
}
