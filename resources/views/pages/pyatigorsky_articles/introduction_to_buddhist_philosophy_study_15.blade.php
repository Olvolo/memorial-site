@extends('layouts.app')
@section('title', 'Введение в изучение буддийской философии. Семинар n')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset('backgrounds/watercolor.jpg') }}');
            background-attachment: fixed;
            background-size: cover;
        }
        .citation-mark:hover {
            text-decoration: underline;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <!-- Основной текст семинара -->
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Семинар n</h2>
            <h3 class="text-xl text-center font-semibold text-zinc-700 mb-4">***<a href="#citation-1" id="ref-1" class="citation-mark"><sup>1</sup></a>
                ***</h3><blockquote class="my-6 pl-4 border-l-4 border-gray-300">
                <p>***</p>

            </blockquote>
            <h3 class="text-xl text-center font-semibold text-zinc-700 my-4">некий подзаголовок</h3>
            <p>***</p>
            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">
            <!-- Блок примечаний -->
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">ПРИМЕЧАНИЯ</h4>
                <p class="mb-3" id="citation-1"><sup>1</sup> ***<a
                        href="#ref-1" class="text-blue-500 hover:underline">↩</a></p>
            </div>
        </div>
    </div>
@endsection
