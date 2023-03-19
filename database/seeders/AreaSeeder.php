<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        area::insert([
            ['name'=> 'Surabaya Pusat'],
            ['name'=> 'Surabaya Barat'],
            ['name'=> 'Surabaya Timur'],
            ['name'=> 'Surabaya Utara'],
            ['name'=> 'Surabaya Selatan'],

        ]);

    }
}
