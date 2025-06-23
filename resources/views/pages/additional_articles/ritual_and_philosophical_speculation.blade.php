@extends('layouts.app')
@section('title', 'Ритуал и философские размышления в «Ответах Ваджрасаттвы')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/blue_ice.svg") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Заголовок -->
        <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-2xl md:text-2xl mt-6 mb-6">Ритуал и философские размышления в «Ответах Ваджрасаттвы</h1>
        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">

            <p></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">
            </ol>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">ПРИМЕЧАНИЯ</h4>

                <p class="my-2" id="citation-1"><sup>1 </sup>***<a href="#ref-1" class="text-blue-500 hover:underline">↩</a></p>
            </div>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">ЛИТЕРАТУРА</h4>

            <ol class="list-decimal list-outside ml-8 pl-2">
                <li class="my-2">***</li>
            </ol>

            <p class="text-right italic text-gray-600 mt-4">Author</p>
        </div>
    </div>

@endsection
