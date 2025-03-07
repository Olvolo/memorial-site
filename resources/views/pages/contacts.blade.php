@extends('layouts.app')

@section('title', 'Contacts')

@section('container-bg', 'bg-emerald-50') {{-- Цвет фона для container --}}
@section('content-container-bg', 'bg-emerald-200') {{-- Цвет фона для
content-container --}}

@section('content')
    <div class="content-container">
        <h2 class="text-center">Связаться с нами</h2>
        <p class="text-center mb-4">Здесь будет форма обратной связи или
            контактная
            информация.</p>
        <img src="{{ asset('images/call_me.jpg') }}" alt="Пример изображения">
    </div>
@endsection
