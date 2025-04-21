@extends('layouts.app')
@section('title', 'Перенормировка I')
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
    <div class="container text-center mx-auto px-4 py-6">

        <div class=" my-8">
            <h1 class="text-2xl sm:text-3xl font-bold text-blue-900">
                Перенормировка I,
            </h1>
            <p class="text-xl sm:text-2xl mt-4 font-medium">или</p>
            <p class="text-2xl sm:text-3xl font-bold text-blue-900 mt-4">
                Кальпа-Акаша Катастрофа
            </p>
        </div>
        <div class="flex justify-center">
            <ul class="text-lg sm:text-xl text-left font-medium list-none">
                <li>Не Кальпа</li>
                <li>Не Спасение</li>
                <li>Не Свобода</li>
                <li>Не Защита</li>
                <li>Не Практика</li>
                <li>Не Передача</li>
                <li class="text-xl sm:text-2xl text-center text-blue-600 my-6">И потому:</li>
                <li>Да Акаша</li>
                <li>Да Жизнь</li>
                <li>Да Бодхичитта</li>
                <li>Да Шуньята</li>
                <li>Да Ваджрасаттва</li>
                <li>Да Правидья</li>
            </ul>
        </div>
        <p class="text-right italic text-base sm:text-lg mt-6">
            12.05.1991 – 14.05.1995 – 10.01.1996
        </p>
    </div>
@endsection

