@extends('layouts.app')

@section('title', 'Статьи')

@section('content')

    <h1 class="text-3xl sm:text-3xl text-center font-bold mt-6 mb-6 sm:mb-8 text-orange-800">
        Статьи</h1>

    <div class="space-y-8 sm:space-y-10">

        <!-- ВЕХИ И ЛИЦА -->
        <div class="bg-yellow-200 p-4 sm:p-6 rounded-lg mt-6">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                ВЕХИ И ЛИЦА</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.buddhism-north-russia') }}"
                       class="text-black hover:text-gray-700">Буддизм на севере России</a></li>
                <li><a href="{{ route('articles.tantra-west') }}"
                       class="text-black hover:text-gray-700">Тантра – на Запад!</a></li>
                <li><a href="{{ route('articles.dharma-raja-dandar') }}"
                       class="text-black hover:text-gray-700">Дхармараджа Бидия Дандарон</a></li>
                <li><a href="{{ route('articles.lub-san-dan') }}"
                       class="text-black hover:text-gray-700">Материалы к жизнеописанию Лубсана Сандана Цыденова</a></li>
                <li><a href="{{ route('articles.memory_yuri_alekseev') }}"
                       class="text-black hover:text-gray-700">Памяти Ю.А. Алексеева</a></li>
                <li><a href="{{ route('articles.memory_alexandr_zheleznov') }}"
                       class="text-black hover:text-gray-700">Памяти А.И. Железнова</a></li>
                <li><a href="{{ route('articles.departure_of_teacher') }}"
                       class="text-black hover:text-gray-700">Уход Учителя. Лама Дарма-Доди</a></li>

            </ul>
        </div>

        <!-- НЕТРОЙСТВЕННОСТЬ -->
        <div class="bg-fuchsia-300 p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                НЕТРОЙСТВЕННОСТЬ</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.netroystvennost') }}"
                       class="text-blue-700 font-semibold">НЕТРОЙСТВЕННОСТЬ</a></li>
                <li><a href="{{ route('articles.golden_horse') }}"
                       class="text-black hover:text-gray-700">Золотой Конь Бодхичитты</a></li>
                <li><a href="{{ route('articles.renormalization-i') }}"
                       class="text-black hover:text-gray-700">Перенормировка I, или Кальпа-Акаша-Катастрофа</a></li>
                <li><a href="{{ route('articles.nondual-vajrasattva') }}"
                       class="text-black hover:text-gray-700">Безначальная Ежемгновенная Катастрофа Первоосознания Нетройственности</a></li>
                <li><a href="{{ route('articles.akasha') }}"
                       class="text-black hover:text-gray-700">Акаша</a></li>
                <li><a href="{{ route('articles.mind_and_akasha') }}"
                       class="text-black hover:text-gray-700">Вольные записи об уме и акаше</a></li>
                <li><a href="{{ route('articles.renormalization-ii') }}"
                       class="text-black hover:text-gray-700">Перенормировка II. Посвящается Каудинье</a></li>
                <li><a href="{{ route('articles.key-matrix') }}"
                       class="text-black hover:text-gray-700">Ключ-Матрица к методу Нетройственного Ваджрасаттвы</a></li>
                <li><a href="{{ route('articles.open_horizon') }}"
                       class="text-black hover:text-gray-700">Открытый горизонт</a></li>
                <li><a href="{{ route('articles.omniscience') }}"
                       class="text-black hover:text-gray-700">Всеведение</a></li>
                <li><a href="{{ route('articles.uncountability') }}"
                       class="text-black hover:text-gray-700">Неисчислимость</a></li>
                <li><a href="{{ route('articles.new_order') }}"
                       class="text-black hover:text-gray-700">Новый порядок</a></li>
                <li><a href="{{ route('articles.ogon') }}"
                       class="text-red-600 font-bold">ОГОНЬ</a></li>
                <li><a href="{{ route('articles.prejudice-of-earth') }}"
                       class="text-black hover:text-gray-700">Предвзятость Земли</a></li>
            </ul>
        </div>

        <!-- НЕОБУДДИЗМ (Традиция Б.Д. Дандарона) -->
        <div class="bg-sky-200 p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                Традиция Б.Д. Дандарона</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.we') }}"
                       class="text-black hover:text-gray-700">Мы</a></li>
                <li><a href="{{ route('articles.fullness_of_sermon') }}"
                       class="text-black hover:text-gray-700">Полнота Проповеди</a></li>
                <li><a href="{{ route('articles.neobuddhism_hermeneutics') }}"
                       class="text-black hover:text-gray-700">Необуддизм, герменевтическая перспектива</a></li>
                <li><a href="{{ route('articles.vajrabhairava_mandala') }}"
                       class="text-black hover:text-gray-700">Описание мандалы Ваджрабхайравы</a></li>
                <li><a href="{{ route('articles.dandaron_tsogshin') }}"
                       class="text-black hover:text-gray-700">Цогшин Традиции Б.Д. Дандарона</a></li>
                <li><a href="{{ route('articles.chakra_of_rays') }}"
                       class="text-black hover:text-gray-700">Чакра лучей и радуг</a></li>
                <li><a href="{{ route('articles.on_paramitas') }}"
                       class="text-black hover:text-gray-700">О парамитах</a></li>
                <li><a href="{{ route('articles.roots') }}"
                       class="text-black hover:text-gray-700">Корни</a></li>
                <li><a href="{{ route('articles.karma_earth') }}"
                       class="text-black hover:text-gray-700">Карма, элемент земля, закон сохранения</a></li>
                <li><a href="{{ route('articles.secular_sangha') }}"
                       class="text-black hover:text-gray-700">Мирская сангха</a></li>
            </ul>
        </div>

        <!-- Ступа -->
        <div class="bg-teal-200 p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4
            text-gray-800 text-center italic">Ступа Б.Д. Дандарона</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.stupa_construction') }}"
                       class="text-black hover:text-gray-700">Строительство Ступы Б.Д. Дандарона</a></li>
                <li><a href="{{ route('articles.contemplation_of_stupa') }}"
                       class="text-black hover:text-gray-700">Венец небес, земли корона, или Созерцание Белой Ступы Дандарона</a></li>

            </ul>
        </div>

        <!-- Ваджрасаттва -->
        <div class="bg-white p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4
            text-gray-800 text-center italic">Ваджрасаттва</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.vajrasattva_method') }}"
                       class="text-black hover:text-gray-700">Метод реализации Ваджрасаттвы</a></li>
                <li><a href="{{ route('articles.russia_vajrasattva') }}"
                       class="text-black hover:text-gray-700">Россия – страна Ваджрасаттвы</a></li>
                <li><a href="{{ route('articles.vajrasattvayana') }}"
                       class="text-black hover:text-gray-700">Есть ли смысл говорить о Ваджрасаттваяне?</a></li>

            </ul>
        </div>

        <!-- БУДДОЛОГИЯ (классика) -->
        <div class="bg-sky-200 p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                Буддология (классика)</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.ethics_of_buddhism') }}"
                       class="text-black hover:text-gray-700">Этика буддизма</a></li>
                <li><a href="{{ route('articles.siddhis_and_society') }}"
                       class="text-black hover:text-gray-700">Сиддхи и общество</a></li>
                <li><a href="{{ route('articles.principles_of_symbolism') }}"
                       class="text-black hover:text-gray-700">Некоторые принципы символизма северного буддизма</a></li>
                <li><a href="{{ route('articles.sandalwood_buddha') }}"
                       class="text-black hover:text-gray-700">Сандаловый Будда</a></li>
                <li><a href="{{ route('articles.mahabhutas') }}"
                       class="text-black hover:text-gray-700">Махабхути в Тантре и Абхидхарме</a></li>
                <li><a href="{{ route('articles.sangha_and_dharma_centers') }}"
                       class="text-black hover:text-gray-700">Буддийская традиционная сангха и современные дхарма-центры</a></li>
                <li><a href="{{ route('articles.vows_and_shunya') }}"
                       class="text-black hover:text-gray-700">Обеты и страх шуньевой бездны</a></li>
                <li><a href="{{ route('articles.budon_preface') }}"
                       class="text-black hover:text-gray-700">Предисловие к книге «Будон Ринчендуб. История буддизма»
                        (Биография)</a></li>
                <li><a href="{{ route('articles.garuda_journal') }}"
                       class="text-black hover:text-gray-700">Журнал «Гаруда». Основные темы</a></li>
            </ul>
        </div>


        <!-- ОБЩЕСТВЕННАЯ ДЕЯТЕЛЬНОСТЬ -->
        <div class="bg-lime-200 p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                Общественная деятельность</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.struggle_for_datsan') }}"
                       class="text-black hover:text-gray-700">Борьба за Санкт-Петербургский Дацан</a></li>
                <li><a href="{{ route('articles.bon_teachers') }}"
                       class="text-black hover:text-gray-700">Бонские учителя в Дацане</a></li>
                <li><a href="{{ route('articles.analytical_note') }}"
                       class="text-black hover:text-gray-700">Аналитическая записка</a></li>
                <li><a href="{{ route('articles.note_addendum') }}"
                       class="text-black hover:text-gray-700">Добавление к «Аналитической записке»</a></li>
                <li><a href="{{ route('articles.alphabet_desecration') }}"
                       class="text-black hover:text-gray-700">Поругание русского алфавита</a></li>
            </ul>
        </div>

        <!-- Несортированное -->
        <div class="bg-amber-300 p-4 sm:p-6 rounded-lg">
            <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">
                Добавляемые статьи</h3>
            <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                <li><a href="{{ route('articles.secret_the_same') }}"
                       class="text-black hover:text-gray-700">Тайна всегда одна</a></li>
                <li><a href="{{ route('articles.home') }}"
                       class="text-black hover:text-gray-700">Дом</a></li>
                <li><a href="{{ route('articles.five_dhyanibuddhas') }}"
                       class="text-black hover:text-gray-700">Пять Дхьянибудд и Этнический Хаос</a></li>
                <li><a href="{{ route('articles.self-liberation') }}"
                       class="text-black hover:text-gray-700">Самоосвобождение через обнажающее внимание — Прямое Введение в ригпа</a></li>
                <li><a href="{{ route('articles.prayer-for-peace') }}"
                       class="text-black hover:text-gray-700">Буддийское моление о мире на Балканах</a></li>
                <li><a href="{{ route('articles.dharma-bodhichitta') }}"
                       class="text-black hover:text-gray-700">Дхарма-бодхичитта, рупа, карма</a></li>
                <li><a href="{{ route('articles.sangha-and-internet') }}"
                       class="text-black hover:text-gray-700">Сангха и Интернет</a></li>
                <li><a href="{{ route('articles.swastika-in-temple') }}"
                       class="text-black hover:text-gray-700">Свастика в Храме</a></li>
                <li><a href="{{ route('articles.buddhist_clay_plastic') }}"
                       class="text-black hover:text-gray-700">Буддийская глиняная пластика</a></li>
                <li><a href="{{ route('articles.jump_into_lion_mouth') }}"
                       class="text-black hover:text-gray-700">Прыжок в пасть льва</a></li>
                <li><a href="{{ route('articles.dharma_wave') }}"
                       class="text-black hover:text-gray-700">Волна Дхармы</a></li>

            </ul>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .custom-list li {
            position: relative;
            padding-left: 1.5rem;
        }

        .custom-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            background-image: url('{{ asset('images/rozetka_list.png') }}');
            background-size: cover;
            border-radius: 50%;
        }
    </style>
@endpush
