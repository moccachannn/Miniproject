<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'code_product'=> 'RT01',
            'name_product'=> 'Tas slingbag',
            'price_product'=> '54000',
            'desc_product'=> 'Harga terjangkau kualitas oke',
            'unit_id'=> 1
        ]);
    }
}
