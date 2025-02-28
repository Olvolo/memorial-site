@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div class="text-center">
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-4 sm:mb-6">Посвящается нашему драгоценному Учителю - Монтлевичу Владимиру Михайловичу</h2>
            <img src="{{ asset('images/guru_muni_vajrasattva.jpg') }}" alt="Лама Дарма-Доди"
                 class="article-image my-4 rounded-lg shadow-md">
    </div>
@endsection
