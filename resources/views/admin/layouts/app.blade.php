<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4">
                <h2 class="text-xl font-bold text-green-500">Admin Dashboard</h2>
            </div>
            <nav>
                <ul class="space-y-2">
                    <li><a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50">Beranda</a></li>
                    <li><a href="{{ route('admin.pendaftar.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50">Kelola Calon Siswa</a></li>
                    <li><a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
