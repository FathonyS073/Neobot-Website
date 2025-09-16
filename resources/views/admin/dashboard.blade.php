{{-- resources/views/superadmin/dashboard.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Superadmin Dashboard - NeoBot</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg flex flex-col min-h-screen">
        <div class="p-6 font-bold text-blue-700 text-xl border-b flex items-center gap-2">
            <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
            NeoBot Superadmin
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-100 font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700' : '' }}">Dashboard Ringkasan</a>
            <a href="{{ route('admin.psikiater') }}" class="block px-4 py-2 rounded hover:bg-blue-100 font-medium {{ request()->routeIs('admin.psikiater') ? 'bg-blue-50 text-blue-700' : '' }}">Psikiater</a>
            <a href="{{ route('admin.client') }}" class="block px-4 py-2 rounded hover:bg-blue-100 font-medium {{ request()->routeIs('admin.client') ? 'bg-blue-50 text-blue-700' : '' }}">Client</a>
            <a href="{{ route('admin.konsultasi') }}" class="block px-4 py-2 rounded hover:bg-blue-100 font-medium {{ request()->routeIs('admin.konsultasi') ? 'bg-blue-50 text-blue-700' : '' }}">Konsultasi</a>
            <a href="{{ route('admin.chatbotLogs') }}" class="block px-4 py-2 rounded hover:bg-blue-100 font-medium {{ request()->routeIs('admin.chatbotLogs') ? 'bg-blue-50 text-blue-700' : '' }}">Chatbot Logs</a>
            <a href="{{ route('admin.pembayaran') }}" class="block px-4 py-2 rounded hover:bg-blue-100 font-medium {{ request()->routeIs('admin.pembayaran') ? 'bg-blue-50 text-blue-700' : '' }}">Pembayaran</a>
            <form method="POST" action="{{ route('logout') }}" class="mt-8">
                @csrf
                <button type="submit" class="w-full px-4 py-2 rounded bg-red-100 text-red-700 font-semibold hover:bg-red-200 transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"/></svg>
                    Logout
                </button>
            </form>
        </nav>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold text-blue-700 mb-8">Dashboard Ringkasan</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div class="bg-gradient-to-br from-blue-100 to-blue-300 p-6 rounded-xl shadow flex flex-col items-center">
                <div class="text-lg font-semibold text-blue-800 mb-2 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    Total Psikiater
                </div>
                <div class="text-4xl font-bold text-blue-900 mt-2">{{ $totalPsikiater }}</div>
            </div>
            <div class="bg-gradient-to-br from-green-100 to-green-300 p-6 rounded-xl shadow flex flex-col items-center">
                <div class="text-lg font-semibold text-green-800 mb-2 flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm8 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    Total Client
                </div>
                <div class="text-4xl font-bold text-green-900 mt-2">{{ $totalClient }}</div>
            </div>
            <div class="bg-gradient-to-br from-purple-100 to-purple-300 p-6 rounded-xl shadow flex flex-col items-center">
                <div class="text-lg font-semibold text-purple-800 mb-2 flex items-center gap-2">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 17l4 4 8-8"/></svg>
                    Konsultasi Berjalan
                </div>
                <div class="text-4xl font-bold text-purple-900 mt-2">{{ $totalKonsultasi }}</div>
            </div>
        </div>
        <!-- Tambahkan statistik lain sesuai kebutuhan -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold text-gray-700 mb-4">Selamat datang di Dashboard Superadmin NeoBot!</h2>
            <p class="text-gray-600 mb-2">Gunakan menu di samping untuk mengelola data psikiater, client, konsultasi, chatbot, dan pembayaran.</p>
            <ul class="list-disc ml-6 text-gray-500">
                <li>Kelola dan monitoring seluruh aktivitas platform NeoBot</li>
                <li>Statistik real-time dan ringkasan data</li>
                <li>UI modern, responsif, dan mudah digunakan</li>
            </ul>
        </div>
    </main>
</body>
</html>