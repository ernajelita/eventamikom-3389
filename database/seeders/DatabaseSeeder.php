<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. AKUN ADMIN
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. KATEGORI (3 Kategori)
        $kategoriTeknologi = \App\Models\Category::create([
            'name' => 'Teknologi & IT',
            'slug' => 'teknologi-it',  // ← slug untuk categories (boleh tetap ada)
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        $kategoriHiburan = \App\Models\Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',  // ← slug untuk categories
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        $kategoriOlahraga = \App\Models\Category::create([
            'name' => 'Olahraga & E-Sport',
            'slug' => 'olahraga-esport',  // ← slug untuk categories
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. EVENT (HAPUS 'slug' DARI SINI!)
        \App\Models\Event::create([
            'category_id' => $kategoriHiburan->id,
            'title' => 'Jazz Night 2025',
            // 'slug' => 'jazz-night-2025',  // ← HAPUS BARIS INI!
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu. Menampilkan musisi jazz ternama dari Yogyakarta.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Event::create([
            'category_id' => $kategoriTeknologi->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            // 'slug' => 'hackathon-unleash-your-inner-dev',  // ← HAPUS BARIS INI!
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Event::create([
            'category_id' => $kategoriTeknologi->id,
            'title' => 'AI & Future Tech Summit 2026',
            // 'slug' => 'ai-future-tech-summit-2026',  // ← HAPUS BARIS INI!
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Event::create([
            'category_id' => $kategoriOlahraga->id,
            'title' => 'E-Sport U-Champ: Mobile Legends Tournament',
            // 'slug' => 'esport-uchamp-mlbb',  // ← HAPUS BARIS INI!
            'description' => 'Turnamen Mobile Legends antar mahasiswa se-Jogja. Total hadiah Rp 5.000.000!',
            'date' => '2026-05-15 09:00:00',
            'location' => 'E-Sport Arena Amikom',
            'price' => 75000,
            'stock' => 50,
            'poster_path' => 'posters/event-4.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Event::create([
            'category_id' => $kategoriTeknologi->id,
            'title' => 'UI/UX Masterclass with Industry Expert',
            // 'slug' => 'ui-ux-masterclass',  // ← HAPUS BARIS INI!
            'description' => 'Pelajari prinsip UI/UX dari praktisi senior! Dapatkan sertifikat!',
            'date' => '2026-05-20 13:00:00',
            'location' => 'Lab Desain Amikom',
            'price' => 100000,
            'stock' => 40,
            'poster_path' => 'posters/event-5.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Event::create([
            'category_id' => $kategoriOlahraga->id,
            'title' => 'Amikom Futsal Championship 2026',
            // 'slug' => 'amikom-futsal-championship',  // ← HAPUS BARIS INI!
            'description' => 'Liga futsal antar fakultas! Hadiah Rp 5.000.000 + Trophy!',
            'date' => '2026-05-25 07:00:00',
            'location' => 'GOR Futsal Amikom',
            'price' => 250000,
            'stock' => 80,
            'poster_path' => 'posters/event-6.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        echo "\n✅ SEEDING BERHASIL!\n";
        echo "📊 RINGKASAN:\n";
        echo "   - Users: " . \App\Models\User::count() . " data\n";
        echo "   - Categories: " . \App\Models\Category::count() . " data\n";
        echo "   - Events: " . \App\Models\Event::count() . " data\n\n";
    }
}