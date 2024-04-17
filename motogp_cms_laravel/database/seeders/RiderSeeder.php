<?php

namespace Database\Seeders;

use App\Models\Rider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rider::factory()->create([
        'fname' => 'Francesco',
        'lname' => 'Bagnaia',
        'team' => 'Ducati Lenovo Team',
        'manufacturer_id' => 1,
        'nationality' => 'Italy',
        'imageURL' => 'https://cdn-8.motorsport.com/images/mgl/6AEjG1G6/s400/francesco-bagnaia-ducati-team.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Enea',
        'lname' => 'Bastianini',
        'team' => 'Ducati Lenovo Team',
        'manufacturer_id' => 1,
        'nationality' => 'Italy',
        'imageURL' => 'https://cdn-4.motorsport.com/images/mgl/6l9Xvb10/s600/enea-bastianini-ducati-team.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Aleix',
        'lname' => 'Espargaro',
        'team' => 'Aprilia Racing',
        'manufacturer_id' => 3,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-1.motorsport.com/images/mgl/0RrVnBO0/s600/aleix-espargaro-aprilia-racing-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Maverick',
        'lname' => 'Vinales',
        'team' => 'Aprilia Racing',
        'manufacturer_id' => 3,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-9.motorsport.com/images/mgl/2jXnZAg6/s600/maverick-vinales-aprilia-racin-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Joan',
        'lname' => 'Mir',
        'team' => 'Repsol Honda Team',
        'manufacturer_id' => 4,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-9.motorsport.com/images/mgl/0rG3dkd2/s600/joan-mir-repsol-honda-team.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Luca',
        'lname' => 'Marini',
        'team' => 'Repsol Honda Team',
        'manufacturer_id' => 4,
        'nationality' => 'Italy',
        'imageURL' => 'https://cdn-9.motorsport.com/images/mgl/6zQegBLY/s600/luca-marini-repsol-honda-team.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Jack',
        'lname' => 'Miller',
        'team' => 'Red Bull KTM Factory Racing',
        'manufacturer_id' => 2,
        'nationality' => 'Australia',
        'imageURL' => 'https://cdn-2.motorsport.com/images/mgl/6b7knZn0/s600/jack-miller-red-bull-ktm-facto-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Brad',
        'lname' => 'Binder',
        'team' => 'Red Bull KTM Factory Racing',
        'manufacturer_id' => 2,
        'nationality' => 'South Africa',
        'imageURL' => 'https://cdn-2.motorsport.com/images/mgl/68yNAvD0/s600/brad-binder-red-bull-ktm-facto-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Marc',
        'lname' => 'Marquez',
        'team' => 'Gresini Racing MotoGP',
        'manufacturer_id' => 1,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-1.motorsport.com/images/mgl/0rG37m52/s600/marc-marquez-gresini-racing.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Alex',
        'lname' => 'Marquez',
        'team' => 'Gresini Racing MotoGP',
        'manufacturer_id' => 1,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-8.motorsport.com/images/mgl/68yrKZx0/s600/alex-marquez-gresini-racing.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Jorge',
        'lname' => 'Martin',
        'team' => 'Prima Pramac Racing',
        'manufacturer_id' => 1,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-5.motorsport.com/images/mgl/6AEAknD6/s600/jorge-martin-pramac-racing-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Franco',
        'lname' => 'Morbidelli',
        'team' => 'Prima Pramac Racing',
        'manufacturer_id' => 1,
        'nationality' => 'Italy',
        'imageURL' => 'https://cdn-1.motorsport.com/images/mgl/2wBV1Lb0/s600/franco-morbidelli-yamaha-facto-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Fabio',
        'lname' => 'di Giannantonio',
        'team' => 'Mooney VR46 Racing Team',
        'manufacturer_id' => 1,
        'nationality' => 'Italy',
        'imageURL' => 'https://cdn-3.motorsport.com/images/mgl/0qXxG7Q6/s600/fabio-di-giannantonio-vr46-rac.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Marco',
        'lname' => 'Bezzechi',
        'team' => 'Mooney VR46 Racing Team',
        'manufacturer_id' => 1,
        'nationality' => 'Italy',
        'imageURL' => 'https://cdn-5.motorsport.com/images/mgl/2QzqEKmY/s600/marco-bezzecchi-vr46-racing-te.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Miguel',
        'lname' => 'Oliveira',
        'team' => 'Trackhouse Racing',
        'manufacturer_id' => 3,
        'nationality' => 'Portugal',
        'imageURL' => 'https://cdn-1.motorsport.com/images/mgl/6D1QAJ70/s600/miguel-oliveira-rnf-racing-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Raul',
        'lname' => 'Fernandez',
        'team' => 'Trackhouse Racing',
        'manufacturer_id' => 3,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-5.motorsport.com/images/mgl/2jXnLPp6/s600/raul-fernandez-rnf-racing-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Agusto',
        'lname' => 'Fernandez',
        'team' => 'Tech3 GASGAS Factory Racing',
        'manufacturer_id' => 2,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-1.motorsport.com/images/mgl/254gALn0/s600/augusto-fernandez-gasgas-facto-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Pedro',
        'lname' => 'Acosta',
        'team' => 'Tech3 GASGAS Factory Racing',
        'manufacturer_id' => 2,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-4.motorsport.com/images/mgl/0mb1Amk2/s600/pedro-acosta-tech3-gasgas-fact.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Johann',
        'lname' => 'Zarco',
        'team' => 'LCR Honda Castrol/Idemitsu',
        'manufacturer_id' => 4,
        'nationality' => 'France',
        'imageURL' => 'https://cdn-3.motorsport.com/images/mgl/6l9yZQx0/s600/johann-zarco-pramac-racing-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Takaaki',
        'lname' => 'Nakagami',
        'team' => 'LCR Honda Castrol/Idemitsu',
        'manufacturer_id' => 4,
        'nationality' => 'Japan',
        'imageURL' => 'https://cdn-9.motorsport.com/images/mgl/0rGynXG2/s600/takaaki-nakagami-lcr-honda-1.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Fabio',
        'lname' => 'Quartararo',
        'team' => 'Monster Energy Yamaha MotoGP',
        'manufacturer_id' => 5,
        'nationality' => 'France',
        'imageURL' => 'https://cdn-6.motorsport.com/images/mgl/YP3wdKQ2/s600/fabio-quartararo-yamaha-factor.webp'
    ]);

    Rider::factory()->create([
        'fname' => 'Alex',
        'lname' => 'Rins',
        'team' => 'Monster Energy Yamaha MotoGP',
        'manufacturer_id' => 5,
        'nationality' => 'Spain',
        'imageURL' => 'https://cdn-1.motorsport.com/images/mgl/2wBdQGM0/s600/alex-rins-yamaha-factory-racin.webp'
    ]);

    }
}
