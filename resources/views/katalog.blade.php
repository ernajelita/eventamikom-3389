@extends('layouts.app')

@section('title', 'Katalog Event')

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">📚 Katalog Event AmikomEventHub</h1>
    <p class="text-xl text-gray-600">Temukan berbagai event menarik yang akan datang dan raih kesempatan emas!</p>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Event 1 -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
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
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
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
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
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
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
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
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
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
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
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

<div class="text-center mt-12 p-6 bg-yellow-50 rounded-2xl">
    <p class="text-gray-600">⭐ Menampilkan 6 dari 12 event yang tersedia</p>
    <p class="text-gray-500 text-sm mt-2">*Masih banyak event menarik lainnya yang akan datang. Pantau terus website kami!</p>
</div>
@endsection