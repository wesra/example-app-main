<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=> 'Glade Air Freshner 225 ML ',
            'detail'=> 'Pewangi Ruangan - Glade Air Freshner 225 ML ',
        ]);
        Product::create([
            'name'=> 'Aqua 330 ML ',
            'detail'=> 'Air Mineral - Gunung salak  330 ML ',   
        ]);
    }
}
