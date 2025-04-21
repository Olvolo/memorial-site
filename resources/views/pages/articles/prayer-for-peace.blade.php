@extends('layouts.app')
@section('title', 'Буддийское моление о мире на Балканах')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url('{{ asset('backgrounds/pink_green.webp') }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Заголовок -->
        <h1 class="text-2xl sm:text-3xl font-bold text-center mt-6 mb-8 text-red-600">
            Буддийское моление о мире на Балканах
        </h1>

        <!-- Основной текст -->
        <div class="text-justify indent-4 text-lg sm:text-xl leading-relaxed space-y-4 mx-auto">

        <p>
                Исходя из основополагающего принципа буддизма — АХИМСЫ – непричинение вреда живому,<br>
                Исходя из высшего принципа буддизма — БОДХИЧИТТЫ – мысли о сострадании всему живому,<br>
                Мы, буддисты Полноты Учения Дандарона, молимся всесострадательному
                <span class="text-blue-600">Авалокитешваре</span>.
            </p>

            <p class="text-center text-red-600 font-bold text-lg sm:text-xl my-4">
                ОМ МАНИ ПАДМЕ ХУМ
            </p>

            <p>
                Защити всех страдающих в мире и в особенности мирных жителей Балкан,<br>
                сербов и албанцев, детей и женщин, стариков и воинов.<br>
                Пусть минует их страдание и погибель!
            </p>

            <p>
                Взываем к Тебе, <span class="text-blue-600">Великая Скоропослушница Зеленая Тара</span>,<br>
                Помощница всех, кто в опасности, страдающих и гибнущих.<br>
                Отведи от них угрозу уничтожения, разлуки, потери близких!
            </p>

            <p class="text-center text-red-600 font-bold text-lg sm:text-xl my-4">
                ОМ ТАРЕ ТУ ТАРЕ ТУРЕ СУХА
            </p>

            <p>
                О Великая Белозонтичная Мать – <span class="text-blue-600">Ситтатапатра</span>!
            </p>

            <p class="text-center text-red-600 font-bold text-lg sm:text-xl my-4">
                ОМ САРВА ТАТХАГАТОШНИША СИТАТАПАТРЕ ХУМ ПАТ ХУМ МАМА ХУМ НИ СУХА
            </p>

            <p>
                Раскрой свой белоснежный зонт защиты от лучей помрачения,<br>
                Укрой Балканы от демонов зла и смерти, защити косоваров и сербов от гибели,<br>
                Сожги следы их плохой кармы, прояви на благо живых Свою милость и силу!
            </p>

            <p class="text-center text-lg sm:text-xl font-bold my-4">
                САРВАМАНГАЛАМ!
            </p>

            <p class="text-right text-sm sm:text-base italic">
                3 апреля 1999, СПб
            </p>
        </div>

    </div>
@endsection
