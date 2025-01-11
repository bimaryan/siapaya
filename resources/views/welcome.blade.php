<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siapaya</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.3/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        @keyframes gradient-x {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient-x {
            animation: gradient-x 10s ease infinite;
            background-size: 400% 400%;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white border-gray-200 shadow-md fixed w-full z-20 top-0">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 lg:px-6 py-3">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <i class="fas fa-user-circle text-blue-600 text-3xl"></i>
                <span class="self-center text-xl font-semibold whitespace-nowrap ml-2">Siapaya</span>
            </a>
            <!-- Menu Links -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#features" class="text-gray-800 hover:text-blue-600 px-4 py-2 rounded-lg transition">
                    Fitur
                </a>
                <a href="#contact" class="text-gray-800 hover:text-blue-600 px-4 py-2 rounded-lg transition">
                    Kontak
                </a>
            </div>
            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="block md:hidden text-gray-800 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <a href="#features" class="block text-gray-800 px-4 py-2 hover:bg-gray-100">Fitur</a>
            <a href="#contact" class="block text-gray-800 px-4 py-2 hover:bg-gray-100">Kontak</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section
        class="bg-gradient-to-r h-screen from-blue-500 via-purple-600 to-pink-500 flex items-center relative animate-gradient-x">
        <!-- Overlay untuk efek transparan -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="max-w-screen-xl mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl font-bold tracking-tight leading-tight text-white sm:text-5xl lg:text-6xl">
                Selamat Datang di <span class="text-blue-400 underline">Siapaya</span>
            </h1>
            <p class="mt-6 text-lg text-white">
                Bagikan tautan anonim Anda dan dapatkan pesan dari teman tanpa nama!
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('masuk.index') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium">
                    Mulai Sekarang
                </a>
                <a href="#contact" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-medium">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800">Fitur Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <div class="bg-gray-100 rounded-lg p-6 text-center shadow">
                    <i class="fas fa-link text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Tautan Anonim</h3>
                    <p class="text-gray-600">Bagikan tautan unik Anda dan dapatkan pesan anonim dari siapa saja.</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 text-center shadow">
                    <i class="fas fa-shield-alt text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Keamanan Privasi</h3>
                    <p class="text-gray-600">Pesan Anda dilindungi dan hanya dapat diakses oleh Anda.</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 text-center shadow">
                    <i class="fas fa-comment-dots text-blue-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Interaksi Tanpa Batas</h3>
                    <p class="text-gray-600">Nikmati komunikasi anonim dengan teman secara mudah dan seru.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-800 text-white">
        <div class="max-w-screen-xl mx-auto px-4 py-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold mb-4">Hubungi Kami</h2>
                <p class="text-gray-400">Butuh bantuan? Jangan ragu untuk menghubungi kami!</p>
                <div class="mt-4">
                    <a href="mailto:bimagaminh@gmail.com" class="text-blue-400 hover:underline">bimagaminh@gmail.com</a>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400">
                &copy; 2025 Siapaya. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Toggle Mobile Menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
