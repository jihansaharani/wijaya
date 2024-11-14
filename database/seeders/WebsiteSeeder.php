<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Website; // Tambahkan ini

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website = [
            [
                'namaperusahaan' => 'PT WIJAYA PLYWOOD INDONESIA',
                'logo' => 'webwijaya/assets/img/wijaya/logoo.png',
                'banner' => 'webwijaya/assets/img/wijaya/bg.jpg',
                'foto' => 'webwijaya/assets/img/wijaya/wijaya10.jpg',
                'deskripsi' => ' gambaran umum perusahaan dan pemiliknya yang memberikan informasi mengenai kegiatan bisnis dan operasinya. Deskripsi perusahaan dapat menjadi pendukung utama dalam kampanye usaha dan dapat ditulis oleh orang lain untuk membuat ulasan.',
                'instagram' => 'https://www.instagram.com/',
                'facebook' => 'https://www.facebook.com/',
                'website' => 'https://milink.id/',
                'x' => 'https://twitter.com/?lang=id',
            ],
        ];

        Website::insert($website); // Memastikan Website Model diimpor
    }
}
