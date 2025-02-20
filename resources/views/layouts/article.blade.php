// resources/views/layouts/article.blade.php
@extends('layouts.app')

@section('content')
    <article class="prose lg:prose-xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">@yield('article-title')</h1>

        <div class="article-content">
            @yield('article-content')
        </div>
    </article>
@endsection
