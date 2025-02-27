@extends('layouts.app')

@section('content')
    <article class="prose prose-sm sm:prose md:prose-lg lg:prose-xl mx-auto">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6 sm:mb-8">@yield('article-title')</h1>

        <div class="article-content">
            @yield('article-content')
        </div>
    </article>
@endsection
