<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');

        categorie::insert([
            ['name' => 'History & Heritage', 'created_at' => $timestamp,'updated_at'=>$timestamp],
            ['name' => 'Museum', 'created_at' => $timestamp,'updated_at'=>$timestamp],
            ['name' => 'Religi', 'created_at' => $timestamp,'updated_at'=>$timestamp],
        ]);

    }
}
