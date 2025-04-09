@extends('layouts.app')

@section('title', 'Работы соратников')php

@section('content')

    <h2 class="text-2xl sm:text-3xl md:text-3xl lg:text-3xl font-bold
        text-center text-orange-800 mb-6 sm:mb-8">Работы соратников</h2>
    <div class="space-y-4">
        <!-- Александр Иванович Железнов -->
        <div class="bg-emerald-200 p-4 rounded-lg">
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
                       class="text-black hover:text-gray-700">К вопросу о буддийской методологии. Часть первая</a></li>
            </ul>
        </div>
        <!-- Виктор Николаевич Пупышев -->
        <div class="bg-coral p-4 sm:p-4 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                Виктор Николаевич Пупышев</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('pupishev_articles.victor_nikolaevich_pupychev') }}"
                       class="text-black hover:text-gray-700">Пупышев Виктор Николаевич </a></li>
                <li><a href="{{ route('pupishev_articles.memories_of_bd_dandaron') }}"
                       class="text-black hover:text-gray-700">Воспоминания о Б.Д. Дандароне</a></li>
                <li><a href="{{ route('pupishev_articles.not_i_in_buddhist_theory_and_practice') }}"
                       class="text-black hover:text-gray-700">«Не-Я» в буддийской теории и практике</a></li>
                <li><a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}"
                       class="text-black hover:text-gray-700">Учение ваджраяны о тождестве сансары и нирваны</a></li>
                <li><a href="{{ route('pupishev_articles.about_term_pratiyaksha') }}"
                       class="text-black hover:text-gray-700">О значении термина pratyakṣa в связи с буддийской теорией познания</a></li>
                <li><a href="{{ route('pupishev_articles.worldview_fundamentals') }}"
                       class="text-black hover:text-gray-700">Основы мировоззрения и мироощущения буддийских народов Центральной Азии</a></li>
                <li><a href="{{ route('pupishev_articles.about_samsara_nature') }}"
                       class="text-black hover:text-gray-700">О природе сансары: психологический очерк</a></li>
                <li><a href="{{ route('pupishev_articles.general_scheme') }}"
                       class="text-black hover:text-gray-700">Общая схема совершенствования по пути мантраяны</a></li>
                <li><a href="{{ route('pupishev_articles.prayer_for_birth_in_sukhavati') }}"
                       class="text-black hover:text-gray-700">Молитва о рождении в Сукхавати</a></li>
                <li><a href="{{ route('pupishev_articles.honoring_the_teacher_ritual') }}"
                       class="text-black hover:text-gray-700">Ритуал почитания учителя. Часть первая</a></li>
                <li><a href="{{ route('pupishev_articles.honoring_the_teacher_ritual_part_two') }}"
                       class="text-black hover:text-gray-700">Ритуал почитания учителя. Часть вторая</a></li>

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
