@extends('layouts.app')

@section('title', 'Венец небес, земли корона')

@section('content')
    <div class="container mx-auto px-4 biography">
        <img src="{{ asset('images/crown_of_heaven.jpg') }}" alt="Венец небес, земли корона" class="article-image my-4 rounded-lg shadow-md">
        <!-- Заголовок -->
        <h1 class="text-2xl font-bold text-center mb-8">ВЕНЕЦ НЕБЕС, ЗЕМЛИ КОРОНА,<br>или<br>СОЗЕРЦАНИЕ БЕЛОЙ СТУПЫ ВАДЖРАСАТТВЫ – СТУПЫ УЧИТЕЛЯ</h1>

        <div class="poetry text-center mb-4">
            <p>Ступа Учителя венчает Гору,</p>
            <p>И отражение её – у каждого внутри.</p>
            <p>Глаза закрыл – Ступа, открыл – Ступа.</p>
            <p><i>Авандуди</i> моё – её <i>авандуди</i> подобно.</p>
            <p>Как только вспомнил,</p>
            <p>Как только взор в себя направил –</p>
            <p>Единство Ступы и меня мгновенно.</p>
            <p>Изображение Ступы – блаженство.</p>
            <p>Быть рядом с ней – <i>самадхи</i>, ни мантры, ни усилий.</p>
            <p>Прохладой купола – хранилищем всех Тайн,</p>
            <p>Мой торс, вода живая;</p>
            <p>Её ступени – в <i>асане</i> ноги – сосуд земли;</p>
            <p>Куб <i>хармики</i> – моя глава, Вместилище сокровищ;</p>
            <p>Взлёт шпиля надо мной – огонь нежгучий;</p>
            <p>Всё вверх устремлено, как воздуха движение.</p>
            <p>Венчает голову <i>сваямбха</i> – мира тайна,</p>
            <p>Как Три над грудой пяти <i>скандх</i>,</p>
            <p>В голубизну пространства <i>Дхармадхату</i></p>
            <p>Уходит вверх сияньем золотым.</p>
            <p>Открыл глаза – Глаза Ступы – манящий взор её;</p>
            <p>Куда ни посмотрю, Ступа Учителя во мне,</p>
            <p><i>Сваямбхой</i> выступает из макушки.</p>
        </div>

        <p class="text-center mb-4">***</p>

        <div class="poetry text-center mb-4">
            <p>Белая Ступа – это Тело Учителя, и я не отличим от Него.</p>
            <p>Красная Ступа – это Речь Учителя, и я не отличим от Него.</p>
            <p>Синяя Ступа – это Мысль Учителя, его тайное, непреходящее дхармовое Тело,</p>
            <p>И я не отличим от Него.</p>
            <p>Это прямое, осязаемое, не уходящее ощущение.</p>
            <p><i>ОМ А ХУМ ВАДЖРА ГУРУ БИДЬЯДАРА САРВА СИДДХИ ХУМ</i></p>
            <p>В центре <i>авандуди</i>, не отличимом от центра Ступы, – грань <i>Гухьи</i>.</p>
            <p>От неё – Три Тела, как Три Сферы соединяю с сердцем своём и
                чувствую так.</p>
            <p>Это волшебное <i>Бинду</i> Учителя всегда во мне,</p>
            <p>Так пребываю.</p>
            <p><i>ОМ А ХУМ</i></p>
        </div>

        <p class="text-center mb-4">***</p>

        <div class="poetry text-center mb-4">
            <p>Не покидает моих глаз Белая Ступа Ваджрасаттвы –</p>
            <p>Белым Лебедем устремляется,</p>
            <p>Венчает место силы, вспаханное великими йогами,</p>
            <p>Ровное и полное живого тепла от ног танцующих там <i>дакинь</i>.</p>
            <p>Эта Волшебная Гора есть <i>балин</i> Земли – её божественная грудь,</p>
            <p>Увенчанная Ступой, как соском, брызнувшим золотом <i>Сваямбхи</i>.</p>
            <p><i>ОМ БАЗАР САДА САМАЯ АМРИТА А ХУМ ПАД</i></p>
            <p>Смотрю в Глаза – исполнился блаженством,</p>
            <p>Вхожу в Ступу, Ступа вошла в меня,</p>
            <p>Пронзён Ступой, <i>Сваямбха</i>, как корона,</p>
            <p>Огонь движения <i>Тиглэ</i> пронзает.</p>
            <p><i>ААААА</i></p>
            <p>Лучусь Светом раскалённого белого Тела <i>Ваджрасаттвы</i>,</p>
            <p>Жемчугом радужным не иссякает <i>Тиглэ</i> моего сердца,</p>
            <p>Неумолимо бьёт в небеса поток <i>праны</i>,</p>
            <p>Не покидает меня Великая Белая Ступа <i>Бидьядары</i>.</p>
            <p><i>ХРИ БИДЬЯДАРА СТУПА ХУМ ПАД</i></p>
        </div>

        <p class="text-right"><i>Август 2004 г.</i></p>
    </div>
@endsection

@push('styles')
    <style>
        .quote {
            position: relative;
            padding-left: 1.5rem;
            border-left: 4px solid #d1d5db;
            margin: 1rem 0;
        }
        p.text-justify {
            text-align: justify;
            line-height: 1.5;
            margin-bottom: 1rem;
        }
        .poetry p {
            line-height: 1.5;
            margin-bottom: 0.5rem; /* Меньший отступ между строками стихов */
        }
        .citation-mark {
            color: #3b82f6;
            cursor: pointer;
            font-size: 0.75em;
            text-decoration: none;
        }
        .citation-mark:hover {
            color: #2563eb;
        }
        .citation-mark:focus {
            outline: none;
        }
    </style>
@endpush
