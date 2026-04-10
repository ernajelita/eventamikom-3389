@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="max-w-5xl mx-auto">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
        <div class="bg-gradient-to-r from-orange-500 to-red-500 p-10 text-white text-center">
            <h1 class="text-4xl font-bold">📞 Hubungi Kami</h1>
            <p class="text-orange-100 mt-2 text-lg">Kami siap membantu Anda 24/7</p>
        </div>
        
        <div class="p-10">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Informasi Kontak -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 p-5 bg-gray-50 rounded-2xl card-hover">
                        <div class="text-3xl">📍</div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Alamat</h3>
                            <p class="text-gray-600">Jl. Ring Road Utara, Condongcatur, Sleman, Yogyakarta 55283</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 p-5 bg-gray-50 rounded-2xl card-hover">
                        <div class="text-3xl">📧</div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Email</h3>
                            <p class="text-gray-600">admin@amikomeventhub.com</p>
                            <p class="text-gray-500 text-sm">support@amikomeventhub.com</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 p-5 bg-gray-50 rounded-2xl card-hover">
                        <div class="text-3xl">📱</div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Telepon & WhatsApp</h3>
                            <p class="text-gray-600">(0274) 1234567</p>
                            <p class="text-gray-600">+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 p-5 bg-gray-50 rounded-2xl card-hover">
                        <div class="text-3xl">⏰</div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Jam Operasional</h3>
                            <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00 WIB</p>
                            <p class="text-gray-600">Sabtu: 09:00 - 13:00 WIB</p>
                        </div>
                    </div>
                </div>
                
                <!-- Form Kontak -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Kirim Pesan</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan nama Anda" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                            <input type="email" placeholder="email@example.com" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                            <input type="text" placeholder="Subjek pesan" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                            <textarea rows="4" placeholder="Tulis pesan Anda di sini..." class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-xl font-semibold hover:from-orange-600 hover:to-red-600 transition-all transform hover:scale-105 shadow-lg">
                            📤 Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Google Maps Placeholder -->
            <div class="mt-8 p-4 bg-gray-100 rounded-2xl text-center">
                <p class="text-gray-600">🗺️ <strong>Lokasi Kami:</strong> Kampus Universitas Amikom Yogyakarta</p>
                <p class="text-gray-500 text-sm mt-1">Jl. Ring Road Utara, Condongcatur, Sleman, Yogyakarta 55283</p>
            </div>
        </div>
    </div>
</div>
@endsection