<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event - Event Platform</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Background hologram kalem */
        body {
            background: linear-gradient(135deg, 
                rgba(230, 240, 255, 0.7), 
                rgba(240, 230, 255, 0.7), 
                rgba(230, 255, 240, 0.7), 
                rgba(255, 240, 230, 0.7));
            background-size: 300% 300%;
            animation: hologramMove 14s ease infinite;
            min-height: 100vh;
            padding: 2rem 1rem;
        }

        @keyframes hologramMove {
            0% { background-position: 0% 0%; }
            25% { background-position: 100% 0%; }
            50% { background-position: 100% 100%; }
            75% { background-position: 0% 100%; }
            100% { background-position: 0% 0%; }
        }

        /* Efek card hover */
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 35px -12px rgba(0, 0, 0, 0.2);
        }

        /* Efek kilau halus pada card */
        .card-shine {
            position: relative;
            overflow: hidden;
        }
        .card-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 80%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
            transform: rotate(25deg);
        }
        .card-shine:hover::after {
            opacity: 0.6;
            animation: shine 0.8s ease;
        }
        @keyframes shine {
            0% { transform: translateX(-30%) translateY(-30%) rotate(25deg); }
            100% { transform: translateX(30%) translateY(30%) rotate(25deg); }
        }
    </style>
</head>
<body>

<div class="max-w-7xl mx-auto">
    <!-- Header halaman -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">📚 Katalog Event AmikomEventHub</h1>
        <p class="text-xl text-gray-600">Temukan berbagai event menarik yang akan datang dan raih kesempatan emas!</p>
    </div>

    <!-- Grid event -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Event 1 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover card-shine">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-5 text-white">
                <div class="text-4xl mb-2">💻</div>
                <h3 class="text-2xl font-bold">Workshop Laravel 11</h3>
                <p class="text-blue-100 text-sm">Teknologi & Programming</p>
            </div>
            <div class="p-6">
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center gap-2">📅 <strong>15 Desember 2024</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">📍 <strong>Ruang Seminar Amikom Lt.3</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">👥 <strong>Kapasitas: 100 Peserta</strong></p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">✅ Tersedia</span>
                    <span class="text-purple-600 font-bold">Gratis</span>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover card-shine">
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-5 text-white">
                <div class="text-4xl mb-2">🤖</div>
                <h3 class="text-2xl font-bold">Hackathon AI 2024</h3>
                <p class="text-purple-100 text-sm">Kompetisi & Inovasi</p>
            </div>
            <div class="p-6">
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center gap-2">📅 <strong>20-22 Desember 2024</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">📍 <strong>Online & Offline (Hybrid)</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">👥 <strong>Maksimal 50 Tim</strong></p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">🟡 Pendaftaran Dibuka</span>
                    <span class="text-purple-600 font-bold">Rp 50.000</span>
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover card-shine">
            <div class="bg-gradient-to-r from-pink-500 to-pink-600 p-5 text-white">
                <div class="text-4xl mb-2">🎨</div>
                <h3 class="text-2xl font-bold">UI/UX Design Competition</h3>
                <p class="text-pink-100 text-sm">Desain & Kreativitas</p>
            </div>
            <div class="p-6">
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center gap-2">📅 <strong>10 Januari 2025</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">📍 <strong>Laboratorium Desain Amikom</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">👥 <strong>75 Peserta</strong></p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">✅ Tersedia</span>
                    <span class="text-purple-600 font-bold">Rp 25.000</span>
                </div>
            </div>
        </div>

        <!-- Event 4 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover card-shine">
            <div class="bg-gradient-to-r from-green-500 to-green-600 p-5 text-white">
                <div class="text-4xl mb-2">🌐</div>
                <h3 class="text-2xl font-bold">Seminar Digital Marketing</h3>
                <p class="text-green-100 text-sm">Bisnis & Marketing</p>
            </div>
            <div class="p-6">
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center gap-2">📅 <strong>5 Januari 2025</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">📍 <strong>Auditorium Amikom</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">👥 <strong>200 Peserta</strong></p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">🔴 Hampir Penuh</span>
                    <span class="text-purple-600 font-bold">Gratis</span>
                </div>
            </div>
        </div>

        <!-- Event 5 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover card-shine">
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 p-5 text-white">
                <div class="text-4xl mb-2">🎮</div>
                <h3 class="text-2xl font-bold">Game Development Bootcamp</h3>
                <p class="text-orange-100 text-sm">Game & Multimedia</p>
            </div>
            <div class="p-6">
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center gap-2">📅 <strong>8-12 Januari 2025</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">📍 <strong>Lab Multimedia Amikom</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">👥 <strong>40 Peserta</strong></p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">✅ Tersedia</span>
                    <span class="text-purple-600 font-bold">Rp 150.000</span>
                </div>
            </div>
        </div>

        <!-- Event 6 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover card-shine">
            <div class="bg-gradient-to-r from-red-500 to-red-600 p-5 text-white">
                <div class="text-4xl mb-2">🏃</div>
                <h3 class="text-2xl font-bold">Charity Fun Run 2025</h3>
                <p class="text-red-100 text-sm">Olahraga & Sosial</p>
            </div>
            <div class="p-6">
                <div class="space-y-2 mb-4">
                    <p class="text-gray-600 flex items-center gap-2">📅 <strong>15 Januari 2025</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">📍 <strong>Kampus Amikom</strong></p>
                    <p class="text-gray-600 flex items-center gap-2">👥 <strong>500 Peserta</strong></p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">✅ Tersedia</span>
                    <span class="text-purple-600 font-bold">Rp 75.000</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer informasi -->
    <div class="text-center mt-12 p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-white/30 shadow-sm">
        <p class="text-gray-600">⭐ Menampilkan 6 dari 12 event yang tersedia</p>
        <p class="text-gray-500 text-sm mt-2">*Masih banyak event menarik lainnya yang akan datang. Pantau terus website kami!</p>
    </div>
</div>

</body>
</html>