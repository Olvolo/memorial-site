@extends('layouts.app')
@section('title', 'Источник мудрецов. Раздел тантра. Часть третья. Чарьятантра')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/salad_blue.webp") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Верхняя навигация -->
        @include('layouts.article-navigation', [
            'currentPart' => 3,
            'totalParts' => 7,
            'routeName' => 'pupishev_articles.source_of_sages',
            'articleTitle' => 'статьи'
        ])        <!-- Заголовок -->
        <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-3xl md:text-3xl mt-6 mb-6">
            ИСТОЧНИК МУДРЕЦОВ
        </h1>
        <h3 class="text-center text-blue-800 font-semibold text-xl sm:text-2xl md:text-2xl mb-6">
            Тибетско-монгольский терминологический словарь буддизма
        </h3>
        <h2 class="text-center text-blue-800 font-semibold text-lg sm:text-xl md:text-xl mb-6">
            ТАНТРА
        </h2>
        <h3 class="text-center text-gray-700 italic text-lg sm:text-xl md:text-xl mb-8">
            (DAG YIG MKHAS PA’I ’BYUNG GNAS ZHES BYA BA LAS
            SNGAGS KYI SKOR)
        </h3>
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <h2 class="text-center text-xl font-semibold text-blue-800 mt-6 mb-4">II.
                ЧАРЬЯТАНТРА<br>(sPyod pa’i rgyud)</h2>
            <!-- Основной текст -->
            <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
                <p>Главная тантра этого раздела — <em>Вайрочана-абхисамбодхитантра (rNam snang mngon
                        byang gi rgyud),</em> которую проповедовал в теле Самбхогакая Вайрочана —
                    называемый «Озеро среди снегов».</p>
                <p>Место проповеди — опора и сердце [его местопребывания] — это украшенный цветами
                    мир Акаништха (’Og min, Akaniṣṭha), называемый «Вобравший все лучшее». </p>
                <p>В этом [разделе тантр] способ посвящения (dbang bskur, abhiṣeka), способ
                    истинного соблюдения обетов (dam tshig; samaya) и нравственных обязательств
                    (sdom pa, saṃvara / yāma, niyāma) такие же, как в <em>криятантре</em>.</p>
                <p>В порядке пути [различают]:</p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">йогу с опорой на форму (mtshan bcas = mtshan bcas rnal ’byor),
                    </li>
                    <li class="my-2">йогу без опоры на форму (mtshan med = mtshan med rnal ’byor).
                    </li>
                </ol>
                <p>В первой два компонента:</p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">связанный с чтением мантр и гимнов (bzlas brjod)<a
                            href="#citation-36" id="ref-36" class="citation-mark"><sup>36</sup></a>
                        внешних четырех составных частей,
                    </li>
                    <li class="my-2">связанный с чтением мантр и гимнов внутренних четырех составных
                        частей.
                    </li>
                </ol>
                <p>В каждом же из них имеется:</p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">созерцание божества в себе (bdag gi gzhi),</li>
                    <li class="my-2">созерцание божества вовне (gzhan gyi gzhi),</li>
                    <li class="my-2">помещение своего сознания в сердце божества, созерцаемого перед
                        собою (sems la gzhol ba'i gzhi)<a href="#citation-37" id="ref-37"
                                                         class="citation-mark"><sup>37</sup></a>,
                    </li>
                    <li class="my-2">созерцание вращения четок из букв мантры (sgra la gzhol ba'i
                        gzhi)<a href="#citation-38" id="ref-38" class="citation-mark"><sup>38</sup></a>.
                    </li>
                </ol>
                <p>Йога без опоры на форму - это созерцание <em>шуньи</em> (stong nyid bsgom pa). Остальные
                    [компоненты пути] обычно описываются подобно вышеизложенному.</p>

                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">

                <!-- Примечания -->
                <div class="citations mt-4 text-lg">
                    <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                        ПРИМЕЧАНИЯ</h4>
                    <p class="my-2" id="citation-36"><sup>36</sup> bzlas всегда означает рецитацию мантр, brjod — чтение, обычно
                        троекратное, гимнов и молитв.<a href="#ref-36" class="text-blue-500 hover:underline">↩</a>
                    </p>

                    <p class="my-2" id="citation-37"><sup>37</sup> См. 1: VII, 715.<a
                            href="#ref-37" class="text-blue-500 hover:underline">↩</a></p>
                    <p class="my-2" id="citation-38"><sup>38</sup> См. 1: VII, 715.<a
                            href="#ref-38" class="text-blue-500 hover:underline">↩</a></p>
                </div>
                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">
            </div>
            <!-- Нижняя навигация -->
            @include('layouts.article-navigation', [
                'currentPart' => 3,
                'totalParts' => 7,
                'routeName' => 'pupishev_articles.source_of_sages',
                'articleTitle' => 'статьи'
            ])        </div>
@endsection
