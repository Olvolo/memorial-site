<?php
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');

// Основные разделы
Route::get('/biography', function () {
    return view('pages.page-1');
})->name('page-1');

Route::get('/articles', function () {
    return view('pages.articles');
})->name('articles');

Route::get('/memories', function () {
    return view('pages.page-3');
})->name('page-3');

Route::get('/media', function () {
    return view('pages.page-4');
})->name('page-4');

Route::get('/contacts', function () {
    return view('pages.page-5');
})->name('page-5');

// Статьи
Route::get('/articles/teaching-method', function () {
    return view('pages.articles.teaching-method');
})->name('articles.teaching-method');

Route::get('/articles/memories-1975', function () {
    return view('pages.articles.memories-1975');
})->name('articles.memories-1975');
