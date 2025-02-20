// resources/views/pages/articles/article1.blade.php
@extends('layouts.article')

@section('title', 'Название статьи')
@section('article-title', 'Название статьи')

@section('article-content')
    <p>Содержание статьи...</p>

    <h2>Подзаголовок</h2>
    <p>Текст параграфа...</p>

    <img src="{{ asset('images/photo1.jpg') }}" alt="Описание фото" class="my-4 rounded-lg shadow-md">
@endsection
