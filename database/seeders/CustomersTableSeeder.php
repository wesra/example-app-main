<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Siti',       
            'phone_number' => '0812 9253 7143',       
            'gender' => 'Perempuan'       
         ]);
        Customer::create([
            'name' => 'Stepen',       
            'phone_number' => '0812 9253 7143',       
            'gender' => 'Laki-laki ',              
         ]);
    }
    
}
