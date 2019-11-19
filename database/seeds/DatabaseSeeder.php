<?php

use Illuminate\Database\Seeder;
use App\pelanggan;
use App\produk;
use App\kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(pelanggan::class, 100)->create();
        factory(produk::class, 100)->create();
        factory(kategori::class, 100)->create();
    }
}
