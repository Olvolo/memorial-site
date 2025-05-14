@extends('layouts.app')
@section('title', 'Не ищу специально несказанного')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.8)),
            url('{{ asset("backgrounds/watercolor.webp") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Заголовок -->
        <h1 class="text-center text-red-700 font-bold text-3xl sm:text-3xl md:text-3xl my-6">Не ищу специально несказанного</h1>
        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg font-semibold leading-relaxed space-y-4">

            <div class="flex justify-center">
                <ul class="text-left list-none text-blue-900">
                    <li class="my-2">Не ищу специально несказанного,</li>
                    <li class="my-2">Сказывать моя стихия,</li>
                    <li class="my-2">Сказание - результат</li>
                    <li class="mt-2 mb-6">Это - Великая Самбхогакая.</li>
                    <li class="my-2">Иду от ХУМ</li>
                    <li class="my-2">Пребываю в А</li>
                    <li class="my-2">Творю и спасаю ОМ</li>
                    <li class="mt-2 mb-6">Познавание - Высшая радость.</li>
                    <li class="my-2">Есть Дхармакая йога, </li>
                    <li class="my-2">Есть Самбхогакая йога,</li>
                    <li class="my-2">Есть Нирманакая йога,</li>
                    <li class="mt-2 mb-6">Самбхогакая - Высшая.</li>
                    <li class="my-2">Ригпа -Зеркало Знания</li>
                    <li class="my-2">Мир - Зеркало Отраженного,</li>
                    <li class="my-2">Блаженный ум - растворенность в Дхармовости</li>
                    <li class="mt-2 mb-6">Тело Света - истинная срединность.</li>
                    <li class="my-2">Не ищи его вне</li>
                    <li class="my-2">Твоё тело - Оно и есть.</li>
                    <li class="my-2">Три всегда прибывает в Единстве,</li>
                    <li class="mt-2 mb-6">В Танце растущего бытия.</li>
                    <li class="my-2">Ищущие Ригпа, несказанного Знания</li>
                    <li class="my-2 ml-4">блаженствуют несмешиваясь.</li>
                    <li class="my-2">Ищущие совершенства Нирмана,</li>
                    <li class="my-2 ml-4">воплощенного Знания,</li>
                    <li class="my-2 ml-4">наслаждаются чудесами.</li>
                    <li class="my-2">Ищущие субъективного, сказанного Знания,</li>
                    <li class="mt-2 mb-6 ml-4">томятся в тяготе познавания.</li>
                    <li class="my-2">Поистине эти три едины в нас,</li>
                    <li class="my-2">Но лишь через ассиметричных субъективностью</li>
                    <li class="my-2 ml-4">прорастает бытие.</li>
                </ul>
            </div>
            <p class="text-right italic text-gray-600 mt-4">ВМ 1992</p>
        </div>
    </div>
@endsection
