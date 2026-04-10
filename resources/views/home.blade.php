@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center mb-16">
    <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 bg-clip-text text-transparent mb-4 animate-pulse">
        Selamat Datang di AmikomEventHub
    </h1>
    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        Platform Event Terbaik untuk Komunitas Amikom • Temukan, Ikuti, dan Raih Prestasi Bersama Kami!
    </p>
</div>

<div class="grid md:grid-cols-3 gap-8 mb-16">
    <div class="card-hover bg-white rounded-2xl shadow-xl p-8 text-center group">
        <div class="text-5xl mb-4 transform group-hover:scale-110 transition-transform">🎉</div>
        <h3 class="text-2xl font-bold mb-3 text-gray-800">Event Terbaru</h3>
        <p class="text-gray-600">Dapatkan informasi event-event terbaru dan menarik di lingkungan Amikom</p>
    </div>
    <div class="card-hover bg-white rounded-2xl shadow-xl p-8 text-center group">
        <div class="text-5xl mb-4 transform group-hover:scale-110 transition-transform">👥</div>
        <h3 class="text-2xl font-bold mb-3 text-gray-800">Komunitas Aktif</h3>
        <p class="text-gray-600">Bergabung dengan ribuan mahasiswa aktif dan berkembang bersama</p>
    </div>
    <div class="card-hover bg-white rounded-2xl shadow-xl p-8 text-center group">
        <div class="text-5xl mb-4 transform group-hover:scale-110 transition-transform">🏆</div>
        <h3 class="text-2xl font-bold mb-3 text-gray-800">Raih Prestasi</h3>
        <p class="text-gray-600">Tunjukkan kemampuanmu dan raih prestasi melalui event-event kompetitif</p>
    </div>
</div>

<div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-8 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">✨ Bergabung Sekarang Juga!</h2>
    <p class="text-gray-600 mb-6">Jadilah bagian dari komunitas event terbesar di Amikom</p>
    <a href="/katalog" class="inline-block px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl font-semibold hover:from-purple-700 hover:to-pink-700 transition-all transform hover:scale-105 shadow-lg">
        Lihat Katalog Event →
    </a>
</div>
@endsection