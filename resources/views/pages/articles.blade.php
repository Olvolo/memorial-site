@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl text-center font-bold mb-8">Статьи</h2>

        <div class="space-y-6">
            <!-- БУДДОЛОГИЯ (классика) -->
            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.ethics_of_buddhism') }}" class="text-blue-600 hover:text-blue-800">
                        Этика буддизма
                    </a>
                </h3>
                <p class="text-gray-600">
                    Этические принципы в буддизме, их влияния на мировоззрение и практическое применение в жизни.
                </p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.siddhis_and_society') }}" class="text-blue-600 hover:text-blue-800">
                        Сиддхи и общество
                    </a>
                </h3>
                <p class="text-gray-600">Сиддхи и их роль в общественном контексте буддизма.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.principles_of_symbolism') }}" class="text-blue-600 hover:text-blue-800">
                        Некоторые принципы символизма северного буддизма
                    </a>
                </h3>
                <p class="text-gray-600">Обзор символизма в традициях северного буддизма.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.sandalwood_buddha') }}" class="text-blue-600 hover:text-blue-800">
                        Сандаловый Будда
                    </a>
                </h3>
                <p class="text-gray-600">История и значение Сандалового Будды в буддийской традиции.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.mahabhutas') }}" class="text-blue-600 hover:text-blue-800">
                        Махабхуты в Тантре и Абхидхарме
                    </a>
                </h3>
                <p class="text-gray-600">Исследование махабхут (великих элементов) в тантрических и абхидхармических текстах.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.sangha_and_dharma_centers') }}" class="text-blue-600 hover:text-blue-800">
                        Буддийская традиционная сангха и современные дхарма-центры
                    </a>
                </h3>
                <p class="text-gray-600">Сравнение традиционной сангхи и современных дхарма-центров.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.vows_and_shunya') }}" class="text-blue-600 hover:text-blue-800">
                        Обеты и страх шуньевой бездны
                    </a>
                </h3>
                <p class="text-gray-600">Роль обетов и концепция шуньи (пустоты) в буддийской практике.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.budon_preface') }}" class="text-blue-600 hover:text-blue-800">
                        Предисловие к книге «Будон Ринчендуб. История буддизма» (Биография)
                    </a>
                </h3>
                <p class="text-gray-600">Введение к биографии Будона Ринчендуба и его вкладу в историю буддизма.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.departure_of_teacher') }}" class="text-blue-600 hover:text-blue-800">
                        Уход Учителя. Лама Дарма-Доди
                    </a>
                </h3>
                <p class="text-gray-600">Рассказ об уходе Ламы Дарма-Доди и его значении.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.garuda_journal') }}" class="text-blue-600 hover:text-blue-800">
                        Журнал «Гаруда». Основные темы
                    </a>
                </h3>
                <p class="text-gray-600">Обзор основных тем журнала «Гаруда».</p>
            </article>

            <!-- НЕОБУДДИЗМ (Традиция Б.Д. Дандарона) -->
            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.golden_horse') }}" class="text-blue-600 hover:text-blue-800">
                        Золотой Конь бодхичитты
                    </a>
                </h3>
                <p class="text-gray-600">Исследование концепции бодхичитты в традиции Б.Д. Дандарона.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.we') }}" class="text-blue-600 hover:text-blue-800">
                        Мы
                    </a>
                </h3>
                <p class="text-gray-600">Рефлексия о коллективной идентичности в необуддизме.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.fullness_of_sermon') }}" class="text-blue-600 hover:text-blue-800">
                        Полнота Проповеди
                    </a>
                </h3>
                <p class="text-gray-600">Анализ полноты буддийской проповеди в традиции Дандарона.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.neobuddhism_hermeneutics') }}" class="text-blue-600 hover:text-blue-800">
                        Необуддизм, герменевтическая перспектива
                    </a>
                </h3>
                <p class="text-gray-600">Герменевтический подход к изучению необуддизма.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.dandaron_mandala') }}" class="text-blue-600 hover:text-blue-800">
                        Мандала Традиции Б.Д. Дандарона
                    </a>
                </h3>
                <p class="text-gray-600">Описание мандалы в традиции Б.Д. Дандарона.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.vajrabhairava_mandala') }}" class="text-blue-600 hover:text-blue-800">
                        Описание мандалы Ваджрабхайравы
                    </a>
                </h3>
                <p class="text-gray-600">Подробное описание мандалы Ваджрабхайравы.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.dandaron_tsogshin') }}" class="text-blue-600 hover:text-blue-800">
                        Цогшин Традиции Б.Д. Дандарона
                    </a>
                </h3>
                <p class="text-gray-600">Обзор ритуала Цогшин в традиции Дандарона.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.tsogshin_description') }}" class="text-blue-600 hover:text-blue-800">
                        Описание Цогшина Традиции Б.Д. Дандарона
                    </a>
                </h3>
                <p class="text-gray-600">Детальное описание ритуала Цогшин.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.mind_and_akasha') }}" class="text-blue-600 hover:text-blue-800">
                        Вольные записи об уме и акаше
                    </a>
                </h3>
                <p class="text-gray-600">Размышления об уме и концепции акаши в буддизме.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.russia_vajrasattva') }}" class="text-blue-600 hover:text-blue-800">
                        Россия — страна Ваджрасаттвы
                    </a>
                </h3>
                <p class="text-gray-600">Связь России с традицией Ваджрасаттвы.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.vajrasattva_method') }}" class="text-blue-600 hover:text-blue-800">
                        Метод реализации Ваджрасаттвы
                    </a>
                </h3>
                <p class="text-gray-600">Практические аспекты реализации Ваджрасаттвы.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.vajrasattvayana') }}" class="text-blue-600 hover:text-blue-800">
                        Есть ли смысл говорить о Ваджрасаттваяне?
                    </a>
                </h3>
                <p class="text-gray-600">Размышления о концепции Ваджрасаттваяны.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.dandaron_stupa') }}" class="text-blue-600 hover:text-blue-800">
                        Ступа Традиции Б.Д. Дандарона
                    </a>
                </h3>
                <p class="text-gray-600">Описание ступы в традиции Б.Д. Дандарона.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.stupa_construction') }}" class="text-blue-600 hover:text-blue-800">
                        Строительство Ступы Б.Д. Дандарона
                    </a>
                </h3>
                <p class="text-gray-600">Процесс строительства ступы традиции Дандарона.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.chakra_of_rays') }}" class="text-blue-600 hover:text-blue-800">
                        Чакра лучей и радуг
                    </a>
                </h3>
                <p class="text-gray-600">Символика чакр, лучей и радуг в буддийской практике.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.on_paramitas') }}" class="text-blue-600 hover:text-blue-800">
                        О парамитах
                    </a>
                </h3>
                <p class="text-gray-600">Обзор парамит (совершенств) в буддийской традиции.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.roots') }}" class="text-blue-600 hover:text-blue-800">
                        Корни
                    </a>
                </h3>
                <p class="text-gray-600">Исследование корней буддийской традиции.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.karma_earth') }}" class="text-blue-600 hover:text-blue-800">
                        Карма, элемент земля, закон сохранения
                    </a>
                </h3>
                <p class="text-gray-600">Связь кармы, элемента земли и закона сохранения.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.uncountability') }}" class="text-blue-600 hover:text-blue-800">
                        Неисчислимость
                    </a>
                </h3>
                <p class="text-gray-600">Философские размышления о неисчислимости в буддизме.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.new_order') }}" class="text-blue-600 hover:text-blue-800">
                        Новый порядок
                    </a>
                </h3>
                <p class="text-gray-600">Концепция нового порядка в необуддизме.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.open_horizon') }}" class="text-blue-600 hover:text-blue-800">
                        Открытый горизонт
                    </a>
                </h3>
                <p class="text-gray-600">Идея открытого горизонта в буддийской мысли.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.secular_sangha') }}" class="text-blue-600 hover:text-blue-800">
                        Мирская сангха
                    </a>
                </h3>
                <p class="text-gray-600">Роль мирской сангхи в современном буддизме.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.contemplation_of_stupa') }}" class="text-blue-600 hover:text-blue-800">
                        Венец небес, земли корона, или Созерцание Белой Ступы Дандарона
                    </a>
                </h3>
                <p class="text-gray-600">Созерцательные практики у Белой Ступы Дандарона.</p>
            </article>

            <!-- ОБЩЕСТВЕННАЯ ДЕЯТЕЛЬНОСТЬ -->
            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.struggle_for_datsan') }}" class="text-blue-600 hover:text-blue-800">
                        Борьба за Санкт-Петербургский Дацан
                    </a>
                </h3>
                <p class="text-gray-600">История борьбы за сохранение Санкт-Петербургского Дацана.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.datsan_appeal') }}" class="text-blue-600 hover:text-blue-800">
                        Обращение Попечительского Совета Дацана
                    </a>
                </h3>
                <p class="text-gray-600">Официальное обращение Попечительского Совета Дацана.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.bon_teachers') }}" class="text-blue-600 hover:text-blue-800">
                        Бонские учителя в Дацане
                    </a>
                </h3>
                <p class="text-gray-600">Присутствие бонских учителей в Санкт-Петербургском Дацане.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.analytical_note') }}" class="text-blue-600 hover:text-blue-800">
                        Аналитическая записка
                    </a>
                </h3>
                <p class="text-gray-600">Аналитический обзор ситуации вокруг Дацана.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.note_addendum') }}" class="text-blue-600 hover:text-blue-800">
                        Добавление к «Аналитической записке»
                    </a>
                </h3>
                <p class="text-gray-600">Дополнение к аналитической записке о Дацане.</p>
            </article>

            <article class="bg-beige-100 shadow-md rounded-lg p-4">
                <h3 class="text-xl font-bold mb-2">
                    <a href="{{ route('articles.alphabet_desecration') }}" class="text-blue-600 hover:text-blue-800">
                        Поругание русского алфавита
                    </a>
                </h3>
                <p class="text-gray-600">Размышления о культурных и языковых аспектах.</p>
            </article>
        </div>
    </div>
@endsection
