<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $xl = Provider::where('name', 'XL')->first();
        // paket 3 gb 1 bulan
        Product::create([
            'provider_id' => $xl->id,
            'description' => 'sdgasgdsaghjasgdewgdhsgdhsgdhgdvdasddg',
            'name' => 'Paket 3 GB 1 Bulan',
            'price' => 50000
        ]);

        // paket 5 gb 1 bulan
        Product::create([
            'provider_id' => $xl->id,
            'description' => 'sdgasgdsaghjasgdewgdhsgdhsgdhgdvdasddg',
            'name' => 'Paket 5 GB 1 Bulan',
            'price' => 100000
        ]);

        // paket 10 gb 1 bulan
        Product::create([
            'provider_id' => $xl->id,
            'description' => 'sdgasgdsaghjasgdewgdhsgdhsgdhgdvdasddg',
            'name' => 'Paket 10 GB 1 Bulan',
            'price' => 200000
        ]);
    }
}
