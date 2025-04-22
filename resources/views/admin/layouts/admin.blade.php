<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-white w-64 min-h-screen shadow-lg" x-data="{ open: true }">
            <div class="p-4 bg-green-600">
                <h2 class="text-white text-xl font-semibold">Admin Dashboard</h2>
            </div>
            
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-600 hover:bg-green-50 hover:text-green-600 {{ request()->routeIs('admin.dashboard') ? 'bg-green-50 text-green-600' : '' }}">
                    <i class="fas fa-home mr-2"></i> Beranda
                </a>
                <a href="{{ route('admin.pendaftar.index') }}" class="block px-4 py-2 text-gray-600 hover:bg-green-50 hover:text-green-600 {{ request()->routeIs('admin.pendaftar.*') ? 'bg-green-50 text-green-600' : '' }}">
                    <i class="fas fa-users mr-2"></i> Kelola Calon Siswa
                </a>
                <!-- setting -->
                 <a href="{{ route('admin.settings.index') }}" class="block px-4 py-2 text-gray-600 hover:bg-green-50 hover:text-green-600 {{ request()->routeIs
                 ('admin.setting.*') ? 'bg-green-50 text-green-600' : '' }}">
                    <i class="fas fa-cog mr-2"></i> Pengaturan
                    </a>
                <form action="{{ route('admin.logout') }}" method="POST" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-600 hover:bg-green-50 hover:text-green-600">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Navigation -->
            <header class="bg-white shadow">
                <div class="px-4 py-4 flex justify-between items-center">
                    <h1 class="text-xl font-semibold">@yield('header', 'Dashboard')</h1>
                    <div class="flex items-center">
                        <span class="text-gray-600 mr-2">{{ Auth::guard('admin')->user()->name }}</span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('scripts')
</body>
</html>
