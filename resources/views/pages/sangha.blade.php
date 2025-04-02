@extends('layouts.app')

@section('title', 'Работы соратников')

@section('content')

    <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold
        text-center text-orange-800 mb-6 sm:mb-8">Работы соратников</h2>
    <div class="space-y-4 sm:space-y-4">
        <!-- Александр Иванович Железнов -->
        <div class="bg-emerald-200 p-4 sm:p-4 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                Александр Иванович Железнов</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.memory_alexandr_zheleznov') }}"
                       class="text-black hover:text-gray-700">Памяти А.И. Железнова</a></li>
                <li><a href="{{ route('zheleznov_articles.about_tibetan_tradition_buryat_buddhism') }}"
                       class="text-black hover:text-gray-700">О тибетских традициях в бурятском буддизме</a></li>
                <li><a href="{{ route('zheleznov_articles.marys-image-popular-interpretation-and-tantric-literature') }}"
                       class="text-black hover:text-gray-700">Образ Мары в популярном толковании и в тантрийской литературе</a></li>
                <li><a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}"
                       class="text-black hover:text-gray-700">Учение ваджраяны о тождестве сансары и нирваны</a></li>
                <li><a href="{{ route('zheleznov_articles.skandhas_according_to_Abhidharma_and_Vajrayana_interpretation') }}"
                       class="text-black hover:text-gray-700">Скандхи по Абхидхарме и в интерпретации ваджраяны</a></li>
                <li><a href="{{ route('zheleznov_articles.philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism') }}"
                       class="text-black hover:text-gray-700">Философско-психологические основы решения экологических проблем в буддизме махаяны.</a></li>
                <li><a href="{{ route('zheleznov_articles.question_buddhist_methodology') }}"
                       class="text-black hover:text-gray-700">К вопросу о
                        буддийской методологии. Часть первая</a></li>


            </ul>
        </div>
    </div>

@endsection
<style>
    .custom-list li {
        position: relative;
        padding-left: 1.5rem;
    }

    .custom-list li:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 16px;
        height: 16px;
        background-image: url('{{ asset('images/rozetka_list.png') }}');
        background-size: cover;
        border-radius: 50%;
    }
</style>
