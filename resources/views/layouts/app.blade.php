    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 text-gray-800 min-h-screen flex flex-col">

<header class="bg-blue-600 text-white py-4 px-6 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Логотип и заголовок -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo_roz.png') }}" alt="Логотип" class="w-10 h-10 object-contain rounded-full -ml-2">
            <h1 class="text-2xl font-bold">Памяти Учителя</h1>
        </div>

        <!-- Навигация -->
        <nav class="hidden md:flex space-x-4">
            <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">Главная</a>
            <a href="{{ route('page-1') }}" class="hover:text-gray-300 transition-colors">Биография</a>
            <a href="{{ route('articles') }}" class="hover:text-gray-300 transition-colors">Статьи</a>
            <a href="{{ route('page-3') }}" class="hover:text-gray-300 transition-colors">Воспоминания</a>
            <a href="{{ route('page-4') }}" class="hover:text-gray-300 transition-colors">Медиа</a>
            <a href="{{ route('page-5') }}" class="hover:text-gray-300 transition-colors">Контакты</a>
        </nav>

        <!-- Мобильное меню -->
        <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Выпадающее мобильное меню -->
    <div id="mobile-menu" class="hidden flex flex-col md:hidden bg-blue-700 text-white p-4 space-y-2">
        <a href="{{ route('home') }}" class="hover:text-gray-300">Главная</a>
        <a href="{{ route('page-1') }}" class="hover:text-gray-300">Биография</a>
        <a href="{{ route('articles') }}" class="hover:text-gray-300">Статьи</a>
        <a href="{{ route('page-3') }}" class="hover:text-gray-300">Воспоминания</a>
        <a href="{{ route('page-4') }}" class="hover:text-gray-300">Медиа</a>
        <a href="{{ route('page-5') }}" class="hover:text-gray-300">Контакты</a>
    </div>
</header>

<!-- Основной контент -->
<main class="flex-grow container mx-auto p-6">
    @yield('content')
</main>

<!-- Футер -->
<footer class="bg-gray-800 text-white py-4 px-6 mt-auto">
    <div class="container mx-auto text-center">
        <p>Всё Всегда Здесь (Хорошо)</p>
    </div>
</footer>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

</body>
</html>
