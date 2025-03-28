@extends('layouts.app')

@section('title', 'НЕТРОЙСТВЕННОСТЬ')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Изображение -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('favicon/web-app-manifest-192x192.png') }}"
                 width="200" height="196"
                 title="НЕТРОЙСТВЕННОСТЬ" alt="НЕТРОЙСТВЕННОСТЬ"
                 class="w-32 sm:w-48 md:w-52 h-auto">
        </div>

        <!-- Заголовки -->
        <h3 class="text-center text-red-600 italic font-bold text-lg
        sm:text-xl md:text-xl mb-4">
            Всё Всегда Здесь
        </h3>
        <h1 class="text-center text-red-600 font-bold text-xl sm:text-xl
        md:text-xl mb-6">
            НЕТРОЙСТВЕННОСТЬ
        </h1>

        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <p>
                Обычно в буддизме принято говорить о недвойственности Шуньяты и Ясного Света.<br><br>
                Нетройственность – вместерожденность Шуньяты, Ясного Света и Сознания. Сознание является составной частью Ясного Света. Выделение его отдельным элементом обусловлено принципом абсолютной невероятности бытия без наблюдателя. Наблюдатель знает о недвойственности Шуньяты и Ясного Света и вместерожден с нею. Эту вместерожденность Трех мы и называем Нетройственностью. Из принципа Нетройственности естественно вытекает идея о невозможности существования вселенных без живых существ – пустых вселенных не бывает.
            </p>
            <p>
                Тройной неконструирующий метод Ваджрасаттвы (Vajrasattva-traya-avikalpaka-sadhana).
            </p>
        </div>

        <!-- Основной корпус текстов -->
        <h3 class="text-center font-bold text-xl sm:text-2xl mt-8 mb-4">
            Основной корпус текстов традиции
        </h3>
        <ul class="list-disc pl-5 sm:pl-6 space-y-2 text-base sm:text-lg">
            <li><a href="{{ route('articles.golden_horse') }}" class="text-blue-600 hover:underline">Золотой Конь Бодхичитты</a></li>
            <li><a href="{{ route('articles.renormalization-i') }}" class="text-blue-600 hover:underline">Перенормировка I, или Кальпа-Акаша-Катастрофа</a></li>
            <li><a href="{{ route('articles.nondual-vajrasattva') }}" class="text-blue-600 hover:underline">Безначальная Ежемгновенная Катастрофа Первоосознания Нетройственности</a></li>
            <li><a href="{{ route('articles.akasha') }}" class="text-blue-600 hover:underline">Акаша</a></li>
            <li><a href="{{ route('articles.mind_and_akasha') }}" class="text-blue-600 hover:underline">Вольные записи об уме и акаше</a></li>
            <li><a href="{{ route('articles.renormalization-ii') }}" class="text-blue-600 hover:underline">Перенормировка II. Посвящается Каудинье</a></li>
        </ul>

        <!-- Комментирующие тексты -->
        <h3 class="text-center font-bold text-xl sm:text-2xl mt-8 mb-4">
            Комментирующие тексты
        </h3>
        <ul class="list-disc pl-5 sm:pl-6 space-y-2 text-base sm:text-lg">
            <li><a href="{{ route('articles.key-matrix') }}" class="text-blue-600 hover:underline">Ключ-матрица к Ваджрасаттве Нетройственности</a></li>
            <li><a href="{{ route('articles.open_horizon') }}" class="text-blue-600 hover:underline">Открытый Горизонт</a></li>
            <li><a href="{{ route('articles.omniscience') }}" class="text-blue-600 hover:underline">Всеведение</a></li>
            <li><a href="{{ route('articles.uncountability') }}" class="text-blue-600 hover:underline">Неисчислимость</a></li>
            <li><a href="{{ route('articles.new_order') }}" class="text-blue-600 hover:underline">Новый порядок</a></li>
            <li><a href="{{ route('articles.ogon') }}" class="text-blue-600 hover:underline">Огонь</a></li>
            <li><a href="{{ route('articles.prejudice-of-earth') }}" class="text-blue-600 hover:underline">Предвзятость Земли</a></li>
        </ul>
    </div>
   @endsection
<style>
    .container {
        background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
        url('{{ asset('backgrounds/ice.jpg') }}');
        background-attachment: fixed;
        background-size: cover;
    }
</style>
