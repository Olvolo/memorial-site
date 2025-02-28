@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        <h2 class="text-2xl sm:text-3xl text-center font-bold mb-6 sm:mb-8 text-gray-900">Статьи</h2>

        <div class="space-y-8 sm:space-y-10">
            <!-- БУДДОЛОГИЯ (классика) -->
            <div class="bg-sky-100 p-4 sm:p-6 rounded-lg">
                <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">Буддология (классика)</h3>
                <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                    <li><a href="{{ route('articles.ethics_of_buddhism') }}" class="text-black hover:text-gray-700">Этика буддизма</a></li>
                    <li><a href="{{ route('articles.siddhis_and_society') }}" class="text-black hover:text-gray-700">Сиддхи и общество</a></li>
                    <li><a href="{{ route('articles.principles_of_symbolism') }}" class="text-black hover:text-gray-700">Некоторые принципы символизма северного буддизма</a></li>
                    <li><a href="{{ route('articles.sandalwood_buddha') }}" class="text-black hover:text-gray-700">Сандаловый Будда</a></li>
                    <li><a href="{{ route('articles.mahabhutas') }}" class="text-black hover:text-gray-700">Махабхути
                            в Тантре и Абхидхарме</a></li>
                    <li><a href="{{ route('articles.sangha_and_dharma_centers') }}" class="text-black hover:text-gray-700">Буддийская традиционная сангха и современные дхарма-центры</a></li>
                    <li><a href="{{ route('articles.vows_and_shunya') }}" class="text-black hover:text-gray-700">Обеты и страх шуньевой бездны</a></li>
                    <li><a href="{{ route('articles.budon_preface') }}" class="text-black hover:text-gray-700">Предисловие к книге «Будон Ринчендуб. История буддизма» (Биография)</a></li>
                    <li><a href="{{ route('articles.departure_of_teacher') }}" class="text-black hover:text-gray-700">Уход Учителя. Лама Дарма-Доди</a></li>
                    <li><a href="{{ route('articles.garuda_journal') }}" class="text-black hover:text-gray-700">Журнал «Гаруда». Основные темы</a></li>
                </ul>
            </div>

            <!-- НЕОБУДДИЗМ (Традиция Б.Д. Дандарона) -->
            <div class="bg-orange-100 p-4 sm:p-6 rounded-lg">
                <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">Необуддизм (Традиция Б.Д. Дандарона)</h3>
                <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                    <li><a href="{{ route('articles.golden_horse') }}" class="text-black hover:text-gray-700">Золотой Конь бодхичитты</a></li>
                    <li><a href="{{ route('articles.we') }}" class="text-black hover:text-gray-700">Мы</a></li>
                    <li><a href="{{ route('articles.fullness_of_sermon') }}" class="text-black hover:text-gray-700">Полнота Проповеди</a></li>
                    <li><a href="{{ route('articles.neobuddhism_hermeneutics') }}" class="text-black hover:text-gray-700">Необуддизм, герменевтическая перспектива</a></li>
                    <li><a href="{{ route('articles.vajrabhairava_mandala') }}" class="text-black hover:text-gray-700">Описание мандалы Ваджрабхайравы</a></li>
                    <li><a href="{{ route('articles.dandaron_tsogshin') }}" class="text-black hover:text-gray-700">Цогшин Традиции Б.Д. Дандарона</a></li>
                    <li><a href="{{ route('articles.mind_and_akasha') }}" class="text-black hover:text-gray-700">Вольные записи об уме и акаше</a></li>
                    <li><a href="{{ route('articles.russia_vajrasattva') }}" class="text-black hover:text-gray-700">Россия – страна Ваджрасаттвы</a></li>
                    <li><a href="{{ route('articles.vajrasattva_method') }}" class="text-black hover:text-gray-700">Метод реализации Ваджрасаттвы</a></li>
                    <li><a href="{{ route('articles.vajrasattvayana') }}" class="text-black hover:text-gray-700">Есть ли смысл говорить о Ваджрасаттваяне?</a></li>
                    <li><a href="{{ route('articles.stupa_construction') }}" class="text-black hover:text-gray-700">Строительство Ступы Б.Д. Дандарона</a></li>
                    <li><a href="{{ route('articles.chakra_of_rays') }}" class="text-black hover:text-gray-700">Чакра лучей и радуг</a></li>
                    <li><a href="{{ route('articles.on_paramitas') }}" class="text-black hover:text-gray-700">О парамитах</a></li>
                    <li><a href="{{ route('articles.roots') }}" class="text-black hover:text-gray-700">Корни</a></li>
                    <li><a href="{{ route('articles.karma_earth') }}" class="text-black hover:text-gray-700">Карма, элемент земля, закон сохранения</a></li>
                    <li><a href="{{ route('articles.uncountability') }}" class="text-black hover:text-gray-700">Неисчислимость</a></li>
                    <li><a href="{{ route('articles.new_order') }}" class="text-black hover:text-gray-700">Новый порядок</a></li>
                    <li><a href="{{ route('articles.open_horizon') }}" class="text-black hover:text-gray-700">Открытый горизонт</a></li>
                    <li><a href="{{ route('articles.secular_sangha') }}" class="text-black hover:text-gray-700">Мирская сангха</a></li>
                    <li><a href="{{ route('articles.contemplation_of_stupa') }}" class="text-black hover:text-gray-700">Венец небес, земли корона, или Созерцание Белой Ступы Дандарона</a></li>
                </ul>
            </div>

            <!-- ОБЩЕСТВЕННАЯ ДЕЯТЕЛЬНОСТЬ -->
            <div class="bg-lime-100 p-4 sm:p-6 rounded-lg">
                <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">Общественная деятельность</h3>
                <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">
                    <li><a href="{{ route('articles.struggle_for_datsan') }}" class="text-black hover:text-gray-700">Борьба за Санкт-Петербургский Дацан</a></li>
                    <li><a href="{{ route('articles.bon_teachers') }}" class="text-black hover:text-gray-700">Бонские учителя в Дацане</a></li>
                    <li><a href="{{ route('articles.analytical_note') }}" class="text-black hover:text-gray-700">Аналитическая записка</a></li>
                    <li><a href="{{ route('articles.note_addendum') }}" class="text-black hover:text-gray-700">Добавление к «Аналитической записке»</a></li>
                    <li><a href="{{ route('articles.alphabet_desecration') }}" class="text-black hover:text-gray-700">Поругание русского алфавита</a></li>
                </ul>
            </div>
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
