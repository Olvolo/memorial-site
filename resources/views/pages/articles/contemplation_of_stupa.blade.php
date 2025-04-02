@extends('layouts.app')
@section('title', 'Венец небес, земли корона')
@section('content')
    <div class="container h-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center my-8">
            <img src="{{ asset('stupa/stupa_BD.jpg') }}"
                 alt="Священная ступа - символ просветленного ума"
                 class="rounded-lg shadow-lg w-full h-auto object-cover">
        </div>
        <!-- Заголовок -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-sky-800 mb-8 leading-tight">
            ВЕНЕЦ НЕБЕС, ЗЕМЛИ КОРОНА<br>
            <span class="text-xl sm:text-2xl md:text-3xl font-medium">или</span><br>
            СОЗЕРЦАНИЕ БЕЛОЙ СТУПЫ ВАДЖРАСАТТВЫ –<br>
            СТУПЫ УЧИТЕЛЯ
        </h1>


        <!-- Поэтические разделы -->
        <div class="space-y-10">
            <!-- Первое стихотворение -->
            <div class="poetry text-center space-y-4">
                <p>Ступа Учителя венчает Гору,</p>
                <p>И отражение её – у каждого внутри.</p>
                <p>Глаза закрыл – Ступа, открыл – Ступа.</p>
                <p><em>Авандуди</em> моё – её <em>авандуди</em> подобно.</p>
                <p>Как только вспомнил,</p>
                <p>Как только взор в себя направил –</p>
                <p>Единство Ступы и меня мгновенно.</p>
                <p>Изображение Ступы – блаженство.</p>
                <p>Быть рядом с ней – <em>самадхи</em>, ни мантры, ни усилий.</p>
                <p>Прохладой купола – хранилищем всех Тайн,</p>
                <p>Мой торс, вода живая;</p>
                <p>Её ступени – в <em>асане</em> ноги – сосуд земли;</p>
                <p>Куб <em>хармики</em> – моя глава, Вместилище сокровищ;</p>
                <p>Взлёт шпиля надо мной – огонь нежгучий;</p>
                <p>Всё вверх устремлено, как воздуха движение.</p>
                <p>Венчает голову <em>сваямбха</em> – мира тайна,</p>
                <p>Как Три над грудой пяти <em>скандх</em>,</p>
                <p>В голубизну пространства <em>Дхармадхату</em></p>
                <p>Уходит вверх сияньем золотым.</p>
                <p>Открыл глаза – Глаза Ступы – манящий взор её;</p>
                <p>Куда ни посмотрю, Ступа Учителя во мне,</p>
                <p><em>Сваямбхой</em> выступает из макушки.</p>
            </div>

            <!-- Разделитель -->
            <div class="flex justify-center">
                <div class="w-16 h-px bg-gray-500 my-2"></div>
            </div>

            <!-- Второе стихотворение -->
            <div class="poetry text-center space-y-4">
                <p>Белая Ступа – это Тело Учителя, и я не отличим от Него.</p>
                <p>Красная Ступа – это Речь Учителя, и я не отличим от Него.</p>
                <p>Синяя Ступа – это Мысль Учителя, его тайное, непреходящее дхармовое Тело,</p>
                <p>И я не отличим от Него.</p>
                <p>Это прямое, осязаемое, не уходящее ощущение.</p>
                <p class="font-mantra text-lg text-amber-700 mt-4"><em>ОМ А ХУМ ВАДЖРА ГУРУ БИДЬЯДАРА САРВА СИДДХИ ХУМ</em></p>
                <p>В центре <em>авандуди</em>, не отличимом от центра Ступы, – грань <em>Гухьи</em>.</p>
                <p>От неё – Три Тела, как Три Сферы соединяю с сердцем своём и чувствую так.</p>
                <p>Это волшебное <em>Бинду</em> Учителя всегда во мне,</p>
                <p>Так пребываю.</p>
                <p class="font-mantra text-lg text-amber-700 mt-4"><em>ОМ А ХУМ</em></p>
            </div>

            <!-- Разделитель -->
            <div class="flex justify-center">
                <div class="w-16 h-px bg-gray-500 my-2"></div>
            </div>

            <!-- Третье стихотворение -->
            <div class="poetry text-center space-y-4">
                <p>Не покидает моих глаз Белая Ступа Ваджрасаттвы –</p>
                <p>Белым Лебедем устремляется,</p>
                <p>Венчает место силы, вспаханное великими йогами,</p>
                <p>Ровное и полное живого тепла от ног танцующих там <em>дакинь</em>.</p>
                <p>Эта Волшебная Гора есть <em>балин</em> Земли – её божественная грудь,</p>
                <p>Увенчанная Ступой, как соском, брызнувшим золотом <em>Сваямбхи</em>.</p>
                <p class="font-mantra text-lg text-amber-700 mt-4"><em>ОМ БАЗАР САДА САМАЯ АМРИТА А ХУМ ПАД</em></p>
                <p>Смотрю в Глаза – исполнился блаженством,</p>
                <p>Вхожу в Ступу, Ступа вошла в меня,</p>
                <p>Пронзён Ступой, <em>Сваямбха</em>, как корона,</p>
                <p>Огонь движения <em>Тиглэ</em> пронзает.</p>
                <p class="font-mantra text-lg text-amber-700 mt-4"><em>ААААА</em></p>
                <p>Лучусь Светом раскалённого белого Тела <em>Ваджрасаттвы</em>,</p>
                <p>Жемчугом радужным не иссякает <em>Тиглэ</em> моего сердца,</p>
                <p>Неумолимо бьёт в небеса поток <em>праны</em>,</p>
                <p>Не покидает меня Великая Белая Ступа <em>Бидьядары</em>.</p>
                <p class="font-mantra text-lg text-amber-700 mt-4"><em>ХРИ БИДЬЯДАРА СТУПА ХУМ ПАД</em></p>
            </div>
        </div>

        <!-- Дата -->
        <p class="text-right italic text-gray-600 mt-10">Август 2004 г.</p>
    </div>
@endsection
<style>
    .container {
        background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
        url('{{ asset('backgrounds/watercolor.jpg') }}');
        background-attachment: fixed;
        background-size: cover;
    }
    .poetry {
        line-height: 1.2;
        font-size: 0.9rem;
        color: #333;
    }
    .poetry p {
        margin: 0.5rem 0;
    }
    .font-mantra {
        letter-spacing: 0.05em;
        font-weight: bold;
    }
    @media (min-width: 640px) {
        .poetry {
            font-size: 1rem;
            line-height: 1.2;
        }
    }
    @media (min-width: 1024px) {
        .poetry {
            font-size: 1.1rem;
            line-height: 1.2;
        }
    }
</style>
