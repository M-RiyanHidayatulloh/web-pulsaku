<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // xl
        Provider::create([
            'name' => 'XL',
            'image' => 'https://upload.wikimedia.org/wikipedia/id/thumb/5/55/XL_logo_2016.svg/300px-XL_logo_2016.svg.png'
        ]);

        // telkomsel
        Provider::create([

            'name' => 'Telkomsel',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Telkomsel_2021_icon.svg/1491px-Telkomsel_2021_icon.svg.png'
        ]);

        // indosat
        Provider::create([
            'name' => 'Indosat',
            'image' => 'https://w7.pngwing.com/pngs/798/962/png-transparent-indosat-multi-media-mobile-im3-ooredoo-telecommunication-otomotif-text-logo-computer-wallpaper-thumbnail.png'
        ]);
        // indosat
        Provider::create([
            'name' => 'axis',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Axis_logo_2015.svg/1200px-Axis_logo_2015.svg.png'
        ]);
    }
}
