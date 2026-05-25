<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Praktikum - Event Platform</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS untuk efek hover dan gradien -->
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #7c3aed, #c026d3, #ec4899);
            background-size: 200% 200%;
            animation: gradienLembut 8s ease infinite;
        }
        @keyframes gradienLembut {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .card-hover {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.03);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-color: #e9d5ff;
        }
        body {
            background: linear-gradient(145deg, #faf5ff 0%, #f3e8ff 100%);
            min-height: 100vh;
            padding: 2rem 1rem;
        }
    </style>
</head>
<body>

<div class="max-w-5xl mx-auto">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
        <!-- Header Profil dengan animasi gradien lembut -->
        <div class="gradient-bg p-10 text-white text-center">
            <div class="w-36 h-36 bg-white rounded-full mx-auto mb-5 flex items-center justify-center shadow-xl border-4 border-white">
                <span class="text-6xl">👨‍💻</span>
            </div>
            <h1 class="text-4xl font-bold mb-2">Profil Praktikum</h1>
            <p class="text-purple-100 text-lg">Mahasiswa Aktif Universitas Amikom Yogyakarta</p>
        </div>

        <!-- Konten Profil -->
        <div class="p-10">
            <!-- Grid data diri -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 rounded-2xl p-5 card-hover">
                    <label class="text-sm text-purple-600 font-semibold uppercase tracking-wide">Nama Lengkap</label>
                    <p class="text-xl font-bold text-gray-800 mt-1">Erna Jelitawati</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-5 card-hover">
                    <label class="text-sm text-purple-600 font-semibold uppercase tracking-wide">NIM</label>
                    <p class="text-xl font-bold text-gray-800 mt-1">24.12.3389</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-5 card-hover">
                    <label class="text-sm text-purple-600 font-semibold uppercase tracking-wide">Program Studi</label>
                    <p class="text-xl font-bold text-gray-800 mt-1">Sistem Informasi</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-5 card-hover">
                    <label class="text-sm text-purple-600 font-semibold uppercase tracking-wide">Semester</label>
                    <p class="text-xl font-bold text-gray-800 mt-1">Semester 4 (Aktif)</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-5 card-hover">
                    <label class="text-sm text-purple-600 font-semibold uppercase tracking-wide">Email Institusi</label>
                    <p class="text-xl font-bold text-gray-800 mt-1">ernajelita@students.amikom.ac.id</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-5 card-hover">
                    <label class="text-sm text-purple-600 font-semibold uppercase tracking-wide">Nomor Telepon</label>
                    <p class="text-xl font-bold text-gray-800 mt-1">+62 000 0000 0000</p>
                </div>
            </div>

            <!-- Deskripsi Diri -->
            <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 shadow-inner">
                <h3 class="font-bold text-2xl mb-3 text-gray-800 flex items-center gap-2">
                    <span>📝</span> Tentang Saya
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Mahasiswa Sistem Informasi semester 4 dengan minat mendalam di bidang pengembangan web dan mobile. 
                    Aktif dalam berbagai organisasi kampus seperti Himpunan Mahasiswa Informatika dan sering menjadi 
                    volunteer di berbagai event teknologi. Memiliki pengalaman dalam mengembangkan aplikasi berbasis 
                    Laravel dan React.js. Saat ini sedang mendalami teknologi AI dan Machine Learning.
                </p>
            </div>

            <!-- Skill Section -->
            <div class="mt-6">
                <h3 class="font-bold text-2xl mb-4 text-gray-800">⚡ Skills & Kompetensi</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold shadow-sm">Laravel</span>
                    <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full font-semibold shadow-sm">React.js</span>
                    <span class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full font-semibold shadow-sm">Tailwind CSS</span>
                    <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full font-semibold shadow-sm">MySQL</span>
                    <span class="px-4 py-2 bg-orange-100 text-orange-700 rounded-full font-semibold shadow-sm">Git</span>
                    <span class="px-4 py-2 bg-red-100 text-red-700 rounded-full font-semibold shadow-sm">UI/UX Design</span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html><?php /**PATH C:\laragon\www\eventamikom-3389\resources\views/profil.blade.php ENDPATH**/ ?>