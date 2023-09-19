<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(3)->create();

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'password' => bcrypt('12345'),
        ]);
        kos::factory(5)->create();

        kos::factory()->create(
            [
            'namaKos' =>'kos banbang',
            'alamatKos' => 'saturan',
            'hargaPerbulan' => '1.000.000',
            'fasilitasKos' => 'kamar mandi dalam',
            ]);
        kos::factory()->create(
            [
            'namaKos' =>'kos banbang',
            'alamatKos' => 'babarsari',
            'hargaPerbulan' => '1.000.000',
            'fasilitasKos' => 'kamar mandi dalam',
            ]);
        kos::factory()->create(
            [
            'namaKos' =>'kos banbang',
            'alamatKos' => 'condong catur',
            'hargaPerbulan' => '1.000.000',
            'fasilitasKos' => 'kamar mandi dalam',
            ]);
        kos::factory()->create(
            [
            'namaKos' =>'kos banbang',
            'alamatKos' => 'demangan',
            'hargaPerbulan' => '1.000.000',
            'fasilitasKos' => 'kamar mandi dalam',
            ]);
        kos::factory()->create(
            [
            'namaKos' =>'kos banbang',
            'alamatKos' => 'taman siswa',
            'hargaPerbulan' => '1.000.000',
            'fasilitasKos' => 'kamar mandi dalam',
            ]);
        kos::factory()->create(
            [
            'namaKos' =>'kos banbang',
            'alamatKos' => 'maguwoharjo',
            'hargaPerbulan' => '1.000.000',
            'fasilitasKos' => 'kamar mandi dalam',
            ]);
    }
}
