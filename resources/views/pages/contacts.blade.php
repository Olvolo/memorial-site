@extends('layouts.app')

@section('title', 'Contacts')

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
    <div class="container">
        <h2 class="text-center text-2xl font-bold text-blue-900 mb-6 italic">СВЯЗАТЬСЯ С НАМИ</h2>
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
