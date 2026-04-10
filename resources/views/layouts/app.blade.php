<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmikomEventHub - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-xl sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex flex-wrap items-center justify-between">
                <div class="text-2xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                    🎯 AmikomEventHub
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="/" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        🏠 Home
                    </a>
                    <a href="/profil" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 text-white font-semibold hover:from-purple-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        👤 Profil
                    </a>
                    <a href="/katalog" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-pink-500 to-pink-600 text-white font-semibold hover:from-pink-600 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        📚 Katalog
                    </a>
                    <a href="/bantuan" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        ❓ Bantuan
                    </a>
                    <a href="/kontak" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        📞 Kontak
                    </a>
                    <a href="/tentang" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-gray-500 to-gray-600 text-white font-semibold hover:from-gray-600 hover:to-gray-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        ℹ️ Tentang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16 py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-400">&copy; 2024 AmikomEventHub - Platform Event Terpercaya untuk Mahasiswa Amikom</p>
            <p class="text-gray-500 text-sm mt-2">Dibangun dengan ❤️ oleh Tim AmikomEventHub</p>
        </div>
    </footer>
</body>
</html>