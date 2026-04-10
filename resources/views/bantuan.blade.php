@extends('layouts.app')

@section('title', 'Bantuan & FAQ')

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">❓ Pusat Bantuan</h1>
    <p class="text-xl text-gray-600">Pertanyaan yang sering diajukan seputar AmikomEventHub</p>
    <p class="text-gray-500 mt-2">Temukan jawaban cepat untuk pertanyaan Anda di bawah ini</p>
</div>

<div class="max-w-4xl mx-auto space-y-4">
    <!-- FAQ 1 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
        <div class="p-6 cursor-pointer group">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                    📌 Bagaimana cara mendaftar event di AmikomEventHub?
                </h3>
                <span class="text-2xl text-purple-600">▼</span>
            </div>
            <div class="mt-4 text-gray-600 border-t pt-4">
                <p>Untuk mendaftar event, ikuti langkah-langkah berikut:</p>
                <ol class="list-decimal list-inside mt-2 space-y-1 ml-4">
                    <li>Kunjungi halaman <a href="/katalog" class="text-purple-600 font-semibold hover:underline">Katalog Event</a></li>
                    <li>Pilih event yang ingin Anda ikuti</li>
                    <li>Klik tombol "Daftar Sekarang" pada detail event</li>
                    <li>Isi formulir pendaftaran dengan data yang valid</li>
                    <li>Lakukan konfirmasi melalui email yang terdaftar</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- FAQ 2 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
        <div class="p-6 cursor-pointer group">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                    💰 Apakah semua event berbayar?
                </h3>
                <span class="text-2xl text-purple-600">▼</span>
            </div>
            <div class="mt-4 text-gray-600 border-t pt-4">
                <p>Tidak. AmikomEventHub menyediakan berbagai event dengan kategori:</p>
                <ul class="list-disc list-inside mt-2 space-y-1 ml-4">
                    <li><span class="text-green-600 font-semibold">Gratis</span> - Event tanpa biaya pendaftaran</li>
                    <li><span class="text-orange-600 font-semibold">Berbayar</span> - Event dengan biaya pendaftaran</li>
                </ul>
                <p class="mt-2">Untuk event berbayar, kami menyediakan berbagai metode pembayaran yang aman dan terpercaya (Transfer Bank, E-Wallet, QRIS).</p>
            </div>
        </div>
    </div>

    <!-- FAQ 3 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
        <div class="p-6 cursor-pointer group">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                    🎫 Apakah tiket event bisa ditransfer ke orang lain?
                </h3>
                <span class="text-2xl text-purple-600">▼</span>
            </div>
            <div class="mt-4 text-gray-600 border-t pt-4">
                <p>Kebijakan transfer tiket tergantung pada masing-masing penyelenggara event. Secara umum:</p>
                <ul class="list-disc list-inside mt-2 space-y-1 ml-4">
                    <li>Event <strong>gratis</strong> - Biasanya dapat ditransfer dengan menghubungi panitia</li>
                    <li>Event <strong>berbayar</strong> - Harus mengikuti kebijakan refund/transfer dari penyelenggara</li>
                </ul>
                <p class="mt-2">💡 <strong>Tips:</strong> Silakan hubungi panitia event terkait untuk informasi lebih lanjut mengenai kebijakan transfer tiket.</p>
            </div>
        </div>
    </div>

    <!-- FAQ 4 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
        <div class="p-6 cursor-pointer group">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                    📞 Bagaimana cara menghubungi penyelenggara event?
                </h3>
                <span class="text-2xl text-purple-600">▼</span>
            </div>
            <div class="mt-4 text-gray-600 border-t pt-4">
                <p>Setiap event menampilkan kontak penyelenggara di halaman detail event. Anda dapat menghubungi melalui:</p>
                <ul class="list-disc list-inside mt-2 space-y-1 ml-4">
                    <li>Email penyelenggara yang tercantum</li>
                    <li>Nomor telepon/WhatsApp panitia</li>
                    <li>Media sosial resmi event tersebut</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- FAQ 5 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
        <div class="p-6 cursor-pointer group">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                    🔄 Apakah bisa refund tiket jika batal hadir?
                </h3>
                <span class="text-2xl text-purple-600">▼</span>
            </div>
            <div class="mt-4 text-gray-600 border-t pt-4">
                <p>Kebijakan refund berbeda-beda untuk setiap event. Aturan umum:</p>
                <ul class="list-disc list-inside mt-2 space-y-1 ml-4">
                    <li>✅ <strong>Refund 100%</strong> - Jika event dibatalkan oleh penyelenggara</li>
                    <li>⚠️ <strong>Refund parsial</strong> - Jika pembatalan dari peserta dengan pemberitahuan H-7</li>
                    <li>❌ <strong>Tidak ada refund</strong> - Untuk event tertentu dengan ketentuan khusus</li>
                </ul>
                <p class="mt-2 font-semibold">⚠️ Penting: Selalu baca syarat dan ketentuan event sebelum mendaftar!</p>
            </div>
        </div>
    </div>

    <!-- FAQ 6 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
        <div class="p-6 cursor-pointer group">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                    🏢 Apakah AmikomEventHub hanya untuk mahasiswa Amikom?
                </h3>
                <span class="text-2xl text-purple-600">▼</span>
            </div>
            <div class="mt-4 text-gray-600 border-t pt-4">
                <p>Sebagian besar event diperuntukkan untuk mahasiswa Amikom, namun:</p>
                <ul class="list-disc list-inside mt-2 space-y-1 ml-4">
                    <li>✅ Beberapa event <strong>terbuka untuk umum</strong> (alumni, mahasiswa luar, publik)</li>
                    <li>✅ Setiap event mencantumkan <strong>target peserta</strong> di halaman detailnya</li>
                    <li>✅ Cek label "Untuk: Mahasiswa Amikom" atau "Terbuka untuk Umum"</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Contact Support -->
<div class="mt-12 p-8 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl text-center">
    <div class="text-4xl mb-3">💡</div>
    <h3 class="font-bold text-2xl mb-2 text-gray-800">Masih memiliki pertanyaan?</h3>
    <p class="text-gray-600 mb-4">Tim support kami siap membantu Anda Senin-Jumat, 08:00-17:00 WIB</p>
    <div class="flex gap-4 justify-center flex-wrap">
        <a href="/kontak" class="inline-block px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-xl font-semibold hover:from-purple-600 hover:to-pink-600 transition-all transform hover:scale-105 shadow-lg">
            📧 Hubungi Kami
        </a>
        <a href="#" class="inline-block px-6 py-3 bg-gray-600 text-white rounded-xl font-semibold hover:bg-gray-700 transition-all transform hover:scale-105 shadow-lg">
            💬 Live Chat
        </a>
    </div>
</div>
@endsection