@extends('layouts.app')

@section('title', 'Главная страница')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url({{ asset('backgrounds/watercolor.webp') }});
            background-attachment: fixed;
            background-size: cover;
            min-height: 100vh;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto">
    <div class="text-center">
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold my-4 text-blue-900">Посвящается нашему драгоценному Учителю - <br>Монтлевичу
                                                            Владимиру Михайловичу</h2>
            <img src="{{ asset('images/guru_muni_vajrasattva.jpg') }}" alt="Владимир Михайлович Монтлевич"
                 class="article-image rounded-lg shadow-md">
    </div>
    </div>
@endsection
