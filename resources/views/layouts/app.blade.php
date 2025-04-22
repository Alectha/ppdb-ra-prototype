<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RA Almukhtarul Bayyan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header & Navigation -->
    <header class="bg-white shadow-sm relative">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/Logo.jpg') }}" alt="Logo RA" class="h-10 mr-3">
                <div class="text-xl font-bold text-green-500">{{ $setting->sitename ?? 'RA Almukhtarul Bayyan' }}</div>
            </div>
            
            <!-- Desktop Menu -->
            <nav class="desktop-menu hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="{{ route('beranda') }}" class="text-gray-700 hover:text-green-500 transition {{ request()->routeIs('beranda') ? 'text-green-500 font-medium' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('pendaftaran') }}" class="text-gray-700 hover:text-green-500 transition {{ request()->routeIs('pendaftaran') ? 'text-green-500 font-medium' : '' }}">Pendaftaran</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-gray-700 hover:text-green-500 transition {{ request()->routeIs('tentang') ? 'text-green-50 text-green-500' : '' }}">Tentang</a></li>
                </ul>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-button md:hidden text-gray-700" id="menu-toggle">
                <i class="fas fa-bars text-2xl"></i>
            </button>


            <!-- Mobile Menu -->
            <div class="mobile-menu hidden absolute top-full left-0 right-0 bg-white border-t border-gray-200 shadow-lg md:hidden" id="mobile-menu">
                <ul class="py-2">
                    <li><a href="{{ route('beranda') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-500 {{ request()->routeIs('beranda') ? 'bg-green-50 text-green-500' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('pendaftaran') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-500 {{ request()->routeIs('pendaftaran') ? 'bg-green-50 text-green-500' : '' }}">Pendaftaran</a></li>
                    <li><a href="{{ route('tentang') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-500 {{ request()->routeIs('tentang') ? 'bg-green-50 text-green-500' : '' }}">Tentang</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>{!! $setting->footer_desc !!}</p>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            let isMenuOpen = false;

            menuButton.addEventListener('click', function() {
                isMenuOpen = !isMenuOpen;
                mobileMenu.classList.toggle('hidden');
                
                // Change icon based on menu state
                const icon = menuButton.querySelector('i');
                if (isMenuOpen) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInside = menuButton.contains(event.target) || mobileMenu.contains(event.target);
                
                if (!isClickInside && isMenuOpen) {
                    mobileMenu.classList.add('hidden');
                    isMenuOpen = false;
                    const icon = menuButton.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
