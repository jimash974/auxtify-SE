<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Item::create([
        'judul' => 'ZET Bomber || Bomber Jacket || Jacket Pilot',
        'slug' => 'zet-bomber',
        'category_id' =>  1,
        'price' => '50000',
        'bid' => '50000',
        'buyNow' => '250000',
        'deskripsi' => 'Bomber Jacket <br>bahan tebal <br>lebar : 50cmcm <br>panjang : 98cm <br>realpict',
        'gambar' => 'cloth.png',
        'End_date' => '2022-06-21 00:00:00'
        ]);
        
        Item::create([
        'judul' => 'Chain Decor Buckle Belt',
        'slug' => 'chain-decor',
        'category_id' => 2,
        'price' => '30000',
        'bid' => '30000',
        'buyNow' => '250000',
        'deskripsi' => 'belt free rantai <br>bahan biasa <br>lebar : 4cm <br>panjang : 98cm <br>realpict',
        'gambar' => 'pants.png',
        'End_date' => '2022-06-24 00:00:00'
        ]);
        
        Item::create([
        'judul' => 'Mr.SHOES KD-111 2021 Casual Shoes Autumn',
        'slug' => 'mr-shoes',
        'category_id' => 3,
        'price' => '300000',
        'bid' => '300000',
        'buyNow' => '800000',
        'deskripsi' => 'belt free rantai <br>bahan biasa <br>lebar : 4cm <br>panjang : 98cm <br>realpict',
        'gambar' => 'shoes.png',
        'End_date' => '2022-07-2 00:00:00'
        ]);
        
        Item::create([
        'judul' => 'Nike AirMax 1 x Cact.us Corporation ',
        'slug' => 'nike-airmax',
        'category_id' => 3,
        'price' => '8000000',
        'bid' => '8000000',
        'buyNow' => '7500000',
        'deskripsi' => 'Sepatu nike airmax <br>cact.us corporation Collaboration <br>Travis Scott<br>Ukuran : 40-48<br>realpict',
        'gambar' => 'Airmax.png',
        'End_date' => '2022-07-28 00:00:00'
        ]);
        
        Item::create([
        'judul' => 'Shirt Atmos x Zodiac',
        'slug' => 'shirt-atmos',
        'category_id' => 1,
        'price' => '500000',
        'bid' => '500000',
        'buyNow' => '450000',
        'deskripsi' => 'Baju brand atmos <br>zodiac Collaboration <br> Baru sekali pakai<br>Ukuran : L<br>realpict',
        'gambar' => 'ShirtAtmos.png',
        'End_date' => '2022-06-25 00:00:00'
        ]);
        
        Item::create([
        'judul' => 'Short Pants Nike x Cact.us Corporation',
        'slug' => 'pants-nike',
        'category_id' => 1,
        'price' => '450000',
        'bid' => '450000',
        'buyNow' => '400000',
        'deskripsi' => 'Nike Short Pants <br>cact.us Collaboration <br> Baru sekali pakai<br>Ukuran : L<br>realpict',
        'gambar' => 'Celana.jpg',
        'End_date' => '2022-06-26 00:00:00'
        ]);
        
        Category::create([
        'name' => 'BAJU DAN CELANA',
        'slug' => 'baju-dan-celana'
        ]);
        
        Category::create([
        'name' => 'AKSESORIS',
        'slug' => 'aksesoris'
        ]);
        
        Category::create([
        'name' => 'SEPATU',
        'slug' => 'sepatu'
        ]);

        // password nya = testing
        User::create([
            'name' => 'test',
            'email' => 'test@mail.com',
            'username' => 'testuser',
            'password' => '$2y$10$hB7tZdE.ZcDhaXbr2iUqkugPPBd3CqiLEr8a2Cv3Bk.qEUXpp68.O',
            'saldo' => 50000000,
            'title' => 'bidder'
        ]);
    
    }
}
