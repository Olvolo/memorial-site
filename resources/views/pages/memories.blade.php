@extends('layouts.app')

@section('title', 'Дополнения')

@section('main-class', 'bg-amber-50 bg-fixed bg-cover')

@push('styles')
    <style>
        main {
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
            url('{{ asset("backgrounds/unsplash.jpg") }}');
        }
    </style>
@endpush

@section('content')
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-center text-orange-800 mb-6 sm:mb-8">
            Дополнения</h2>
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

@endsection
