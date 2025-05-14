@extends('layouts.app')

@section('title', 'Media')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url({{ asset('backgrounds/watercolor.webp') }});
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto">


            <h2 class="text-2xl font-bold text-center text-blue-900 mb-6 sm:mb-8 italic">
                АУДИО, ВИДЕО, ФОТОМАТЕРИАЛЫ</h2>
            <p class="text-center">Фильм "Вкус истины"</p>
            <!-- Добавляем видео -->
            <div class="video-container mt-6">

                <iframe width="400" height="200"
                        src="https://www.youtube.com/embed/9B0zW5WPuIU?si=IgkRoh3CXxB-e-2A"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen></iframe>
            </div>
        <p class="text-center">Такой разный свет</p>
        <!-- Добавляем видео -->
        <div class="video-container mt-6">

            <iframe width="400" height="200"
                    src="https://www.youtube.com/watch?v=b7z3jFxoevU"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
        </div>

    </div>
@endsection
