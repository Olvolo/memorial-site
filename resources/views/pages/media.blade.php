@extends('layouts.app')

@section('title', 'Media')

@section('content')
    <div class="content-container">
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold
        text-center text-fuchsia-800 mb-6 sm:mb-8">
            Аудио, видео, фотоматериалы</h2>
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
    </div>
@endsection
