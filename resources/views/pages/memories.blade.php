@extends('layouts.app')

@section('title', 'Воспоминания')

@section('content')
    <div class="container mx-auto px-4 biography bg-[url('/images/paper_texture.jpg')] bg-cover bg-no-repeat">
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-6 sm:mb-8">Воспоминания, письма</h2>
        <p>
            <a href="{{ route('family_history') }}" class="text-blue-600 hover:text-blue-800 underline">Читать подробную историю семьи Монтлевичей и Шафрановских</a>
        </p>
    </div>
@endsection
