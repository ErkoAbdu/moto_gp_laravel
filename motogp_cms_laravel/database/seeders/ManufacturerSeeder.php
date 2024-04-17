<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::factory()->create([
            'manufacturer_name' => 'Ducati',
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Ducati_red_logo.svg/300px-Ducati_red_logo.svg.png'
        ]);
        Manufacturer::factory()->create([
            'manufacturer_name' => 'KTM',
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/KTM-Logo.svg/440px-KTM-Logo.svg.png'
        ]);
        Manufacturer::factory()->create([
            'manufacturer_name' => 'Aprilia',
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/5/54/Aprilialogo.png'
        ]);
        Manufacturer::factory()->create([
            'manufacturer_name' => 'Honda',
            'imageURL' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh1HThXddilKbNmfwLaoLQ8caa8jB-e6MTHg&usqp=CAU'
        ]);
        Manufacturer::factory()->create([
            'manufacturer_name' => 'Yamaha',
            'imageURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Yamaha_Motor_Logo_%28full%29.svg/500px-Yamaha_Motor_Logo_%28full%29.svg.png'
        ]);
        Manufacturer::factory()->create([
            'manufacturer_name' => 'BMW Mottorad',
            'imageURL' => 'https://i.pinimg.com/originals/18/01/e3/1801e3be1854ca4107e143fe0f996ea8.jpg'
        ]);
    }
}
