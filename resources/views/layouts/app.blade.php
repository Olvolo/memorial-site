<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-800 font-medium min-h-screen flex flex-col">
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
            <a href="{{ route('biography') }}" class="hover:text-gray-300 transition-colors">Биография</a>
            <a href="{{ route('articles') }}" class="hover:text-gray-300 transition-colors">Статьи</a>
            <a href="{{ route('memories') }}" class="hover:text-gray-300 transition-colors">Воспоминания</a>
            <a href="{{ route('media') }}" class="hover:text-gray-300 transition-colors">Медиа</a>
            <a href="{{ route('contacts') }}" class="hover:text-gray-300 transition-colors">Контакты</a>
        </nav>
        <!-- Мобильное меню -->
        <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <!-- Выпадающее мобильное меню -->
    <div id="mobile-menu" class="hidden flex-col md:hidden bg-blue-700 text-white p-4 space-y-2">
        <a href="{{ route('home') }}" class="hover:text-gray-300">Главная</a>
        <a href="{{ route('biography') }}" class="hover:text-gray-300">Биография</a>
        <a href="{{ route('articles') }}" class="hover:text-gray-300">Статьи</a>
        <a href="{{ route('memories') }}" class="hover:text-gray-300">Воспоминания</a>
        <a href="{{ route('media') }}" class="hover:text-gray-300">Медиа</a>
        <a href="{{ route('contacts') }}" class="hover:text-gray-300">Контакты</a>
    </div>
</header>

<!-- Основной контент -->
<main class="flex-grow bg-antique-100 p-6">
    <div class="max-w-4xl mx-auto">
        @yield('content')
    </div>
</main>

<!-- Футер -->
<footer class="bg-green-700 text-green-50 py-4 px-6 mt-auto">
    <div class="container mx-auto text-center">
        <p>Всё Всегда Здесь (Хорошо)</p>
    </div>
</footer>

<!-- Кнопка "Наверх" -->
<button id="scrollToTop" class="hidden fixed bottom-5 right-5 bg-gradient-to-br from-teal-200 to-teal-400 text-white rounded-full p-2 shadow-lg opacity-65 hover:opacity-100 transition-opacity transform hover:scale-110">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7-7-7 7"/>
    </svg>
</button>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollToTopBtn = document.getElementById("scrollToTop");
        window.addEventListener("scroll", function () {
            if (window.scrollY > 600) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }
        });
        scrollToTopBtn.addEventListener("click", function () {
            window.scrollTo({top: 0, behavior: "smooth"});
        });
    });
</script>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>
