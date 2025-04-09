<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Мемориальная статья, посвящённая Юрию Алексееву (1940–1983), его духовному пути, буддизму и творчеству.">
    <meta name="keywords" content="Юрий Алексеев, буддизм, тантра, Вадим Танчик, Бидия Дандарович Дандарон, дзогчен, поэзия">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @if (App::environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app-D9lNS4hB.css') }}">
        <script src="{{ asset('build/assets/app-CqflisoM.js') }}"></script>
    @endif
    {{-- Favicon и другие мета-теги --}}
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/svg+xml"
          href="{{ asset('favicon/favicon.svg') }}">
    <link rel="icon" type="image/png"
          href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    @stack('styles')
</head>
<body class="font-sans text-gray-800 min-h-screen flex flex-col">
<!-- Header -->
<header
    class="w-full @yield('header-class', 'bg-blue-600 text-white shadow-md')">
    <div class="mx-auto px-2 sm:px-4 md:px-6 lg:px-8 py-2 sm:py-4">
        <div class="flex justify-between items-center">
            <!-- Логотип и заголовок -->
            <div class="flex items-center space-x-2 sm:space-x-3">
                <img src="{{ asset('images/logo_roz.png') }}" alt="Логотип"
                     class="w-8 h-8 sm:w-10 sm:h-10 object-contain rounded-full -ml-1 sm:-ml-2">
                <h1 class="text-lg sm:text-2xl font-bold">Памяти Учителя</h1>
            </div>
            <!-- Навигация -->
            <nav class="hidden lg:flex space-x-2 sm:space-x-4 text-base sm:text-lg md:text-xl">

            <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">Главная</a>
                <a href="{{ route('biography') }}"
                   class="hover:text-gray-300 transition-colors">Биография</a>
                <a href="{{ route('articles') }}"
                   class="hover:text-gray-300 transition-colors">Статьи</a>
                <a href="{{ route('sangha') }}"
                   class="hover:text-gray-300 transition-colors">Сангха</a>
                <a href="{{ route('memories') }}"
                   class="hover:text-gray-300 transition-colors">Воспоминания</a>
                <a href="{{ route('media') }}"
                   class="hover:text-gray-300 transition-colors">Медиа</a>
                <a href="{{ route('contacts') }}"
                   class="hover:text-gray-300 transition-colors">Контакты</a>
            </nav>
            <!-- Мобильное меню (кнопка) -->
            <button id="menu-toggle" class="lg:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 sm:w-6 sm:h-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        <!-- Выпадающее мобильное меню -->
        <div id="mobile-menu" class="hidden lg:hidden bg-blue-700 text-white px-2 py-2 sm:px-4 sm:py-3 space-y-1 sm:space-y-2 text-base">

        <a href="{{ route('home') }}" class="block hover:text-gray-300">Главная</a>
            <a href="{{ route('biography') }}"
               class="block hover:text-gray-300">Биография</a>
            <a href="{{ route('articles') }}" class="block hover:text-gray-300">Статьи</a>
            <a href="{{ route('sangha') }}" class="block hover:text-gray-300">Сангха</a>
            <a href="{{ route('memories') }}" class="block hover:text-gray-300">Воспоминания</a>
            <a href="{{ route('media') }}" class="block hover:text-gray-300">Медиа</a>
            <a href="{{ route('contacts') }}" class="block hover:text-gray-300">Контакты</a>
        </div>
    </div>
</header>

<!-- Основной контент -->
<main class="flex-grow w-full @yield('main-class', 'bg-amber-50')">
    <div class="container mx-auto max-w-screen-xl @yield('container-fluid p-3')">
        @yield('content')
    </div>
</main>
<!-- Футер -->
<footer class="w-full @yield('footer-class', 'bg-green-600 text-green-50')">
    <div class="mx-auto px-2 sm:px-4 md:px-6 lg:px-8 py-2 sm:py-2">
        <div class="text-center">
            <!-- Текст в футере -->
            <p class="text-base sm:text-lg md:text-xl mb-1 sm:mb-2">Всё
                Всегда Здесь (Хорошо)</p>

            <!-- Навигация в футере (для больших экранов) -->
            <nav id="footer-nav" class="hidden sm:flex justify-center space-x-1 sm:space-x-2 md:space-x-4 text-xs sm:text-sm">
                <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">Главная</a>
                <a href="{{ route('biography') }}" class="hover:text-gray-300 transition-colors">Биография</a>
                <a href="{{ route('articles') }}" class="hover:text-gray-300 transition-colors">Статьи</a>
                <a href="{{ route('sangha') }}" class="hover:text-gray-300 transition-colors">Сангха</a>
                <a href="{{ route('memories') }}" class="hover:text-gray-300 transition-colors">Воспоминания</a>
                <a href="{{ route('media') }}" class="hover:text-gray-300 transition-colors">Медиа</a>
                <a href="{{ route('contacts') }}" class="hover:text-gray-300 transition-colors">Контакты</a>
            </nav>

            <!-- Мобильное меню в футере (кнопка) -->
            <button id="footer-menu-toggle" class="sm:hidden text-green-50 focus:outline-none mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Мобильное меню в футере (скрытое по умолчанию) -->
            <div id="footer-mobile-menu" class="hidden sm:hidden bg-green-700 text-white px-2 py-2 sm:px-4 sm:py-3 text-base">
                <nav>
                    <ul class="space-y-1 sm:space-y-2">
                        <li><a href="{{ route('home') }}" class="block hover:text-gray-300 py-1">Главная</a></li>
                        <li><a href="{{ route('biography') }}" class="block hover:text-gray-300 py-1">Биография</a></li>
                        <li><a href="{{ route('articles') }}" class="block hover:text-gray-300 py-1">Статьи</a></li>
                        <li><a href="{{ route('sangha') }}" class="block hover:text-gray-300 py-1">Сангха</a></li>
                        <li><a href="{{ route('memories') }}" class="block hover:text-gray-300 py-1">Воспоминания</a></li>
                        <li><a href="{{ route('media') }}" class="block hover:text-gray-300 py-1">Медиа</a></li>
                        <li><a href="{{ route('contacts') }}" class="block hover:text-gray-300 py-1">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<!-- Кнопка "Наверх" -->
<button id="scrollToTop"
        class="hidden fixed bottom-2 right-2 sm:bottom-4 sm:right-4 bg-gradient-to-br from-teal-200 to-teal-400 text-white rounded-full p-1 sm:p-2 shadow-lg opacity-65 hover:opacity-100 transition-opacity transform hover:scale-110">
    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-4 h-4 sm:w-5 sm:h-5 transform"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 9l-7-7-7 7"/>
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

        // Переключение мобильного меню в шапке
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Переключение мобильного меню в футере
        document.getElementById('footer-menu-toggle').addEventListener('click', function () {
            document.getElementById('footer-mobile-menu').classList.toggle('hidden');
        });
    });
</script>
</body>
</html>
