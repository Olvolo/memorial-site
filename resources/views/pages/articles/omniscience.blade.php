@extends('layouts.app')

@section('title', 'Всеведение')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Заголовок -->
        <h1 class="text-3xl sm:text-4xl font-bold text-center mt-6 mb-8 text-red-600">
            Всеведение
        </h1>

        <!-- Основной текст -->
        <div class="mx-auto p-4 rounded-lg">
            <p class="text-left text-lg sm:text-xl font-bold text-red-600">
                Всеведение Будды – это Его способность ответить на все вопросы, которые может Ему задать человек.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Человек ограничен неведением в <strong>возможности</strong> задать Будде абсолютный вопрос обо Всем, и задает лишь частный вопрос, в том числе и <strong>четырнадцать запретных*</strong>.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                На все вопросы человека, ограниченного неведением, Будда способен дать ответ. Именно в этом смысле Будду называют Всеведущим. Вопрос же, не ограниченный неведением, может задать лишь уже не человек. Но по своей, уже нечеловеческой, природе он его и не задает. А Будда, естественно, молчит.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Описанное так Всеведение Будды не противоречит Принципу <a href="#" class="text-blue-600 hover:underline">Открытого Горизонта</a>.
            </p>

            <hr class="w-11/12 mx-auto my-6 border-gray-400">

            <p class="text-justify indent-4 text-lg sm:text-xl">
                * "1-4) Мир постоянен или нет? Или и то, и другое? Или ни то, ни другое?<br>
                5-8) Мир ограничен (во времени) или нет? Или и то, и другое? Или ни то, ни другое?<br>
                9-12) Существует ли Будда после смерти или нет? Или и то, и другое? Или ни то, ни другое?<br>
                13-14) Жизнь и тело (личности) одно и то же или нет?"
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Упомянутые вопросы подробно рассматриваются в 19-й книге "Абхидхармакоши" (версии Сюаньцзана)
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Изложено по О.О. Розенбергу. – См. "Труды по буддизму", М., 1991 г., с. 85.
            </p>

            <p class="text-right text-sm sm:text-base font-bold mt-6">
                ВМ, 6.08.99
            </p>
        </div>
    </div>
@endsection
