<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //aqui es donde le decimoq que Factory vamos a crear
        Product::factory()->count(25)->create();
        /* $this->call([
          
        ]); */
    }
}
