@extends('layouts.app')

@section('title', 'Дополнения')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url({{ asset('backgrounds/watercolor.jpg') }});
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6 sm:mb-8 italic">
            ДОПОЛНИТЕЛЬНЫЕ МАТЕРИАЛЫ</h2>
        <div class="flex justify-center">
            <div class="text-left">
                <p class="mt-0">
                    <a href="{{ route('additional_articles.family_history') }}"
                       class="text-blue-600 hover:text-blue-800 underline">Читать подробную историю
                        семьи Монтлевичей и Шафрановских</a>
                </p>
                <p class="mt-4">
                    <a href="{{ route('additional_articles.lubsan_samdan_tsydenov') }}"
                       class="text-blue-600 hover:text-blue-800 underline">Буддийское учение как
                        философская основа духовной деятельности Лубсан-Самдана Цыденова</a>
                </p>
                <p class="mt-4">
                    <a href="{{ route('additional_articles.kudun_theocracy') }}"
                       class="text-blue-600 hover:text-blue-800 underline">Кудунская теократия
                        Лубсан-Самдан Цыденова: истоки, содержание и хронология событий</a>
                </p>
                <p class="mt-4">
                    <a href="{{ route('additional_articles.khori_buryats') }}"
                       class="text-blue-600 hover:text-blue-800 underline">О хоринских бурятах</a>
                </p>
            </div>
        </div>
    </div>

@endsection
