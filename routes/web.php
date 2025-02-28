<?php

use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');

// Основные разделы
Route::get('/biography', function () {
    return view('pages.biography');
})->name('biography');

Route::get('/articles', function () {
    return view('pages.articles');
})->name('articles');

Route::get('/memories', function () {
    return view('pages.memories');
})->name('memories');

Route::get('/media', function () {
    return view('pages.media');
})->name('media');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');

// Статьи
Route::get('/articles/ethics_of_buddhism', function () {
    return view('pages.articles.ethics_of_buddhism');
})->name('articles.ethics_of_buddhism');

Route::get('/articles/siddhis_and_society', function () {
    return view('pages.articles.siddhis_and_society');
})->name('articles.siddhis_and_society');

Route::get('/articles/principles_of_symbolism', function () {
    return view('pages.articles.principles_of_symbolism');
})->name('articles.principles_of_symbolism');

Route::get('/articles/sandalwood_buddha', function () {
    return view('pages.articles.sandalwood_buddha');
})->name('articles.sandalwood_buddha');

Route::get('/articles/mahabhutas', function () {
    return view('pages.articles.mahabhutas');
})->name('articles.mahabhutas');

Route::get('/articles/sangha_and_dharma_centers', function () {
    return view('pages.articles.sangha_and_dharma_centers');
})->name('articles.sangha_and_dharma_centers');

Route::get('/articles/vows_and_shunya', function () {
    return view('pages.articles.vows_and_shunya');
})->name('articles.vows_and_shunya');

Route::get('/articles/budon_preface', function () {
    return view('pages.articles.budon_preface');
})->name('articles.budon_preface');

Route::get('/articles/departure_of_teacher', function () {
    return view('pages.articles.departure_of_teacher');
})->name('articles.departure_of_teacher');

Route::get('/articles/garuda_journal', function () {
    return view('pages.articles.garuda_journal');
})->name('articles.garuda_journal');

Route::get('/articles/golden_horse', function () {
    return view('pages.articles.golden_horse');
})->name('articles.golden_horse');

Route::get('/articles/we', function () {
    return view('pages.articles.we');
})->name('articles.we');

Route::get('/articles/fullness_of_sermon', function () {
    return view('pages.articles.fullness_of_sermon');
})->name('articles.fullness_of_sermon');

Route::get('/articles/neobuddhism_hermeneutics', function () {
    return view('pages.articles.neobuddhism_hermeneutics');
})->name('articles.neobuddhism_hermeneutics');

Route::get('/articles/vajrabhairava_mandala', function () {
    return view('pages.articles.vajrabhairava_mandala');
})->name('articles.vajrabhairava_mandala');

Route::get('/articles/dandaron_tsogshin', function () {
    return view('pages.articles.dandaron_tsogshin');
})->name('articles.dandaron_tsogshin');

Route::get('/articles/tsogshin_description', function () {
    return view('pages.articles.tsogshin_description');
})->name('articles.tsogshin_description');

Route::get('/articles/mind_and_akasha', function () {
    return view('pages.articles.mind_and_akasha');
})->name('articles.mind_and_akasha');

Route::get('/articles/russia_vajrasattva', function () {
    return view('pages.articles.russia_vajrasattva');
})->name('articles.russia_vajrasattva');

Route::get('/articles/vajrasattva_method', function () {
    return view('pages.articles.vajrasattva_method');
})->name('articles.vajrasattva_method');

Route::get('/articles/vajrasattvayana', function () {
    return view('pages.articles.vajrasattvayana');
})->name('articles.vajrasattvayana');

Route::get('/articles/stupa_construction', function () {
    return view('pages.articles.stupa_construction');
})->name('articles.stupa_construction');

Route::get('/articles/chakra_of_rays', function () {
    return view('pages.articles.chakra_of_rays');
})->name('articles.chakra_of_rays');

Route::get('/articles/on_paramitas', function () {
    return view('pages.articles.on_paramitas');
})->name('articles.on_paramitas');

Route::get('/articles/roots', function () {
    return view('pages.articles.roots');
})->name('articles.roots');

Route::get('/articles/karma_earth', function () {
    return view('pages.articles.karma_earth');
})->name('articles.karma_earth');

Route::get('/articles/uncountability', function () {
    return view('pages.articles.uncountability');
})->name('articles.uncountability');

Route::get('/articles/new_order', function () {
    return view('pages.articles.new_order');
})->name('articles.new_order');

Route::get('/articles/open_horizon', function () {
    return view('pages.articles.open_horizon');
})->name('articles.open_horizon');

Route::get('/articles/secular_sangha', function () {
    return view('pages.articles.secular_sangha');
})->name('articles.secular_sangha');

Route::get('/articles/contemplation_of_stupa', function () {
    return view('pages.articles.contemplation_of_stupa');
})->name('articles.contemplation_of_stupa');

Route::get('/articles/struggle_for_datsan', function () {
    return view('pages.articles.struggle_for_datsan');
})->name('articles.struggle_for_datsan');


Route::get('/articles/bon_teachers', function () {
    return view('pages.articles.bon_teachers');
})->name('articles.bon_teachers');

Route::get('/articles/analytical_note', function () {
    return view('pages.articles.analytical_note');
})->name('articles.analytical_note');

Route::get('/articles/note_addendum', function () {
    return view('pages.articles.note_addendum');
})->name('articles.note_addendum');

Route::get('/articles/alphabet_desecration', function () {
    return view('pages.articles.alphabet_desecration');
})->name('articles.alphabet_desecration');

Route::get('/articles/vajrabhairava_mandala_table', function () {
    return view('pages.articles.vajrabhairava_mandala_table');
})->name('articles.vajrabhairava_mandala_table');
