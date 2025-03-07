@extends('layouts.app')

@section('title', 'Воспоминания')

@section('content')

        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold
        text-center text-orange-800 mb-6 sm:mb-8">Воспоминания, письма</h2>
        <p class="text-center">
            <a href="{{ route('family_history') }}" class="text-blue-600 hover:text-blue-800 underline">Читать подробную историю семьи Монтлевичей и Шафрановских</a>
        </p>
        <!-- Добавляем изображение -->
{{--        <img src="{{ asset('images/example.jpg') }}" alt="Пример изображения" class="mt-6">--}}

@endsection
