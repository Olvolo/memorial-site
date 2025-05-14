@extends('layouts.app')
@section('title', 'Всеведение')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.85)),
            url({{ asset('backgrounds/bluerish.webp') }});
            background-attachment: fixed;
            background-size: cover;
            min-height: 100vh;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto p-4 h-full">
        <!-- Заголовок -->
        <h1 class="text-2xl sm:text-4xl font-bold text-center my-4
        text-sky-900">
            Всеведение
        </h1>

        <!-- Основной текст -->
        <div class="text-justify indent-4 text-lg sm:text-xl leading-relaxed space-y-4 mx-auto">
            <p class="text-lg sm:text-xl text-justify font-bold
            text-sky-900">
                Всеведение Будды – это Его способность ответить на все вопросы, которые может Ему задать человек.
            </p>

            <p>
                Человек ограничен неведением в <strong>возможности</strong> задать Будде абсолютный вопрос обо Всем, и задает лишь частный вопрос, в том числе и <strong>четырнадцать запретных*</strong>.
            </p>

            <p>
                На все вопросы человека, ограниченного неведением, Будда способен дать ответ. Именно в этом смысле Будду называют Всеведущим. Вопрос же, не ограниченный неведением, может задать лишь уже не человек. Но по своей, уже нечеловеческой, природе он его и не задает. А Будда, естественно, молчит.
            </p>

            <p>
                Описанное так Всеведение Будды не противоречит Принципу <a
                    href="{{ asset('articles/open_horizon') }}"
                    class="text-blue-600 hover:underline">Открытого Горизонта</a>
            </p>

            <hr class="w-11/12 mx-auto my-6 border-gray-400">

            <p>
                * "1-4) Мир постоянен или нет? Или и то, и другое? Или ни то, ни другое?<br>
                5-8) Мир ограничен (во времени) или нет? Или и то, и другое? Или ни то, ни другое?<br>
                9-12) Существует ли Будда после смерти или нет? Или и то, и другое? Или ни то, ни другое?<br>
                13-14) Жизнь и тело (личности) одно и то же или нет?"
            </p>

            <p>
                Упомянутые вопросы подробно рассматриваются в 19-й книге "Абхидхармакоши" (версии Сюаньцзана)
            </p>

            <p>
                Изложено по О.О. Розенбергу. – См. "Труды по буддизму", М., 1991 г., с. 85.
            </p>

            <p class="text-right italic text-gray-600 my-4">
                В.М.
            </p>
        </div>
    </div>
@endsection
