@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-8">Статьи</h2>

        <div class="space-y-6">
            <article class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.teaching-method') }}" class="text-blue-600 hover:text-blue-800">
                        О методе преподавания В.М. Монтлевича
                    </a>
                </h3>
                <p class="text-gray-600">Уникальный подход к преподаванию, разработанный Владимиром Михайловичем, основанный на глубоком понимании природы музыкального искусства.</p>
            </article>

            <article class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.memories-1975') }}" class="text-blue-600 hover:text-blue-800">
                        Воспоминания о консерватории 1975 года
                    </a>
                </h3>
                <p class="text-gray-600">История о важном периоде в жизни консерватории и начале внедрения новаторских идей в учебный процесс.</p>
            </article>
        </div>
    </div>
@endsection
