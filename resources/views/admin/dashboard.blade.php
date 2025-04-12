<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-900">Dashboard Admin</h1>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Selamat datang, Admin!</h2>
                <p class="mb-4">Anda berhasil login ke sistem admin.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-medium text-blue-800">Total Pendaftar</h3>
                        <p class="text-2xl font-bold">0</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-medium text-green-800">Formulir Terverifikasi</h3>
                        <p class="text-2xl font-bold">0</p>
                    </div>
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <h3 class="font-medium text-yellow-800">Menunggu Verifikasi</h3>
                        <p class="text-2xl font-bold">0</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
