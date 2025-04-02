@extends('layouts.app')

@section('title', 'Contacts')

@section('container-bg', 'bg-emerald-50') {{-- Цвет фона для container --}}
@section('content-container-bg', 'bg-emerald-200') {{-- Цвет фона для
content-container --}}

@section('content')
    <div class="container">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Связаться
            с нами</h2>
        <div class="bg-emerald-100 p-6 rounded-lg shadow-md max-w-[800px]
        mx-auto">

            <p class="text-center text-gray-600">Если у вас есть предложения по
                улучшению сайта, замечания или материалы, которые вы хотели бы
                разместить на сайте, пожалуйста, свяжитесь с нами по указанному
                адресу электронной почты.</p>
            <div class="flex items-center justify-center mb-4">
                <a href="mailto:memorial8site@gmail.com" class="text-blue-600
                 hover:underline text-sm">memorial8site@gmail.com</a>
            </div>
        </div>


        <div class="mt-8 flex justify-center">
            <img src="{{ asset('images/kazaki_wrire_letter_to_sultan.jpg') }}"
                 alt="Контактное изображение"
                 class="rounded-lg shadow-md max-w-full h-auto">
        </div>
    </div>
@endsection
