<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. AKUN ADMIN
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name' => 'Admin Amikom',
                'email' => 'admin@amikom.ac.id',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
            ]
        );

        // 2. KATEGORI (3 Kategori dengan logo placeholder)
        $kategoriTeknologi = \App\Models\Category::updateOrCreate(
            ['slug' => 'teknologi-it'],
            ['name' => 'Teknologi & IT', 'image' => 'categories/teknologi-it.png']
        );
        
        $kategoriHiburan = \App\Models\Category::updateOrCreate(
            ['slug' => 'entertainment'],
            ['name' => 'Entertainment', 'image' => 'categories/entertainment.png']
        );
        
        $kategoriOlahraga = \App\Models\Category::updateOrCreate(
            ['slug' => 'olahraga-esport'],
            ['name' => 'Olahraga & E-Sport', 'image' => 'categories/olahraga-esport.png']
        );

        $this->generateCategoryPlaceholders();

        // 3. EVENT
        $eventsData = [
            ['category_id' => $kategoriHiburan->id, 'title' => 'Jazz Night 2025', 'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu. Menampilkan musisi jazz ternama dari Yogyakarta.', 'date' => '2026-05-10 19:00:00', 'location' => 'Amikom Baru', 'price' => 50000, 'stock' => 100, 'poster_path' => 'posters/event-1.png'],
            ['category_id' => $kategoriTeknologi->id, 'title' => 'Hackathon - Unleash Your Inner Developer', 'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!', 'date' => '2026-05-05 10:00:00', 'location' => 'Inkubator Amikom', 'price' => 50000, 'stock' => 100, 'poster_path' => 'posters/event-2.png'],
            ['category_id' => $kategoriTeknologi->id, 'title' => 'AI & Future Tech Summit 2026', 'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.', 'date' => '2026-05-01 13:00:00', 'location' => 'Cinema Unit 6', 'price' => 50000, 'stock' => 100, 'poster_path' => 'posters/event-3.png'],
            ['category_id' => $kategoriOlahraga->id, 'title' => 'E-Sport U-Champ: Mobile Legends Tournament', 'description' => 'Turnamen Mobile Legends antar mahasiswa se-Jogja. Total hadiah Rp 5.000.000!', 'date' => '2026-05-15 09:00:00', 'location' => 'E-Sport Arena Amikom', 'price' => 75000, 'stock' => 50, 'poster_path' => 'posters/event-4.png'],
            ['category_id' => $kategoriTeknologi->id, 'title' => 'UI/UX Masterclass with Industry Expert', 'description' => 'Pelajari prinsip UI/UX dari praktisi senior! Dapatkan sertifikat!', 'date' => '2026-05-20 13:00:00', 'location' => 'Lab Desain Amikom', 'price' => 100000, 'stock' => 40, 'poster_path' => 'posters/event-5.png'],
            ['category_id' => $kategoriOlahraga->id, 'title' => 'Amikom Futsal Championship 2026', 'description' => 'Liga futsal antar fakultas! Hadiah Rp 5.000.000 + Trophy!', 'date' => '2026-05-25 07:00:00', 'location' => 'GOR Futsal Amikom', 'price' => 250000, 'stock' => 80, 'poster_path' => 'posters/event-6.png'],
        ];

        foreach ($eventsData as $eventData) {
            \App\Models\Event::updateOrCreate(
                ['title' => $eventData['title']],
                $eventData
            );
        }

        echo "\n✅ SEEDING BERHASIL!\n";
        echo "📊 RINGKASAN:\n";
        echo "   - Users: " . \App\Models\User::count() . " data\n";
        echo "   - Categories: " . \App\Models\Category::count() . " data\n";
        echo "   - Events: " . \App\Models\Event::count() . " data\n";
        echo "   - Transactions: " . \App\Models\Transaction::count() . " data\n\n";

        $events = \App\Models\Event::all();

        // 4. TRANSAKSI (hanya 1 data seperti modul)
        $firstEvent = $events->first();
        if ($firstEvent) {
            \App\Models\Transaction::updateOrCreate(
                ['order_id' => 'TRX-1234567890-ABC12'],
                [
                    'event_id' => $firstEvent->id,
                    'customer_name' => 'Donni Prabowo',
                    'customer_email' => 'donni@example.com',
                    'customer_phone' => '081234567890',
                    'total_price' => 155000,
                    'status' => 'Pending',
                ]
            );
        }

        //User

    }

    private function generateCategoryPlaceholders(): void
    {
        $categories = \App\Models\Category::all();
        $colors = [
            'Teknologi & IT' => ['bg' => '6366f1', 'text' => 'fff', 'icon' => '💻'],
            'Entertainment' => ['bg' => 'f59e0b', 'text' => 'fff', 'icon' => '🎵'],
            'Olahraga & E-Sport' => ['bg' => '10b981', 'text' => 'fff', 'icon' => '⚽'],
        ];

        foreach ($categories as $category) {
            $palette = $colors[$category->name] ?? ['bg' => '6366f1', 'text' => 'fff', 'icon' => '📁'];

            $img = imagecreatetruecolor(200, 200);
            $bg = hexdec($palette['bg']);
            $bgColor = imagecolorallocate($img, ($bg >> 16) & 0xFF, ($bg >> 8) & 0xFF, $bg & 0xFF);
            imagefill($img, 0, 0, $bgColor);

            $textColor = imagecolorallocate($img, 255, 255, 255);
            $fontSize = 5;
            $text = $palette['icon'];
            $x = (200 - imagefontwidth($fontSize) * mb_strlen($text)) / 2;
            $y = (200 + imagefontheight($fontSize)) / 2;
            imagestring($img, $fontSize, $x, $y, $text, $textColor);

            $dir = storage_path('app/public/categories');
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }

            $filename = Str::slug($category->name) . '.png';
            $path = $dir . DIRECTORY_SEPARATOR . $filename;
            imagepng($img, $path);
            imagedestroy($img);

            $category->update(['image' => 'categories/' . $filename]);
        }

        echo "\n🖼️  Category placeholders generated!\n";
    }
}