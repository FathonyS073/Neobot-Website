<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neobot - Konsultasi Kejiwaan Online</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen flex flex-col justify-between">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-blue-700">Neobot</span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="/" class="text-blue-700 hover:text-blue-900 font-medium">Home</a>
                <a href="#about" class="text-blue-700 hover:text-blue-900 font-medium">About</a>
                <a href="#contact" class="text-blue-700 hover:text-blue-900 font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="flex-1 flex items-center justify-center">
        <div class="container mx-auto px-4 py-12 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-800 mb-4">Selamat Datang di Neobot</h1>
            <p class="text-lg md:text-xl text-blue-700 mb-8">Konsultasi kejiwaan online dengan chatbot & psikiater</p>
            <div class="flex flex-col md:flex-row justify-center gap-4 mb-10">
                <a href="{{ route('login') }}" class="px-8 py-3 bg-blue-700 text-white rounded-lg shadow hover:bg-blue-800 transition font-semibold">Login</a>
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-blue-700 border border-blue-700 rounded-lg shadow hover:bg-blue-50 transition font-semibold">Register</a>
            </div>
            <!-- Section Informasi -->
            <div class="bg-white rounded-xl shadow-md p-6 max-w-xl mx-auto">
                <h2 class="text-xl font-bold text-blue-700 mb-4">Fitur Neobot</h2>
                <ul class="text-left space-y-3">
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                        <span>Chatbot AI untuk konsultasi gratis</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 17l4 4 8-8"></path></svg>
                        <span>Konsultasi langsung dengan psikiater (premium)</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow-inner py-4">
        <div class="container mx-auto px-4 text-center text-gray-500 text-sm">
            © 2025 Neobot
        </div>
    </footer>
</body>
</html>
