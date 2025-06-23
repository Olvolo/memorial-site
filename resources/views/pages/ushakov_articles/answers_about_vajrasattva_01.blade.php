@extends('layouts.app')
@section('title', 'Ответы на вопросы о Ваджрасаттве, данные наставником Пэльяном — Часть 1')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/blue_ice.svg") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @include('layouts.article-navigation', [
            'currentPart' => 1,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])
        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Ответы на вопросы о
                Ваджрасаттве,<br>данные наставником Пэльяном<br>Часть 1</h2>

            <p class="text-right"><em>Перевод с тибетского В. Е. Ушакова</em></p>

            <p>К середине VIII в. были, в основном, сформулированы основополагающие принципы,
                связанные с именем Ваджрасаттвы. Они легли в основу системы мировоззрения и
                созерцательных практик, которые можно квалифицировать как тантру. Эти принципы были
                сформулированы не только в Тибете. Но вот в Индии ли – это неизвестно, скорее, в
                оазисах Восточного Туркестана на двух ветвях Великого шёлкового пути, огибающего
                пустыню Такла-Макан.</p>

            <p>Система Ваджрасаттвы обладает специфическими признаками тантры: отрицает помрачение,
                признавая природную чистоту всех дхарм; состоит из многообразия методов, кратких и
                расширенных, подходящих разным типам личностей; отрицает болезненные и суровые
                методы аскезы; позволяет в короткий срок одной жизни обуздать чувства и достичь
                Освобождения; содержит три характерные для высшего типа тантр составляющие – Основу,
                Путь и Плод, и две стадии практики – стадию зарождения и стадию завершения.</p>

            <p class="italic">Кроме того, тантра Ваджрасаттвы предлагает два варианта освобождения
                от омрачающего
                груза клеш и скандх. В первом, подобно «Калачакра-тантре», скандхи преображаются,
                или трансформируются. Это, действительно, своеобразная тантрийская алхимия. Во
                втором – индивид очищается от клеш, его скандхи разрушаются, а новое Пробуждённое
                существо в виде иллюзорного тела появляется изнутри. То есть в первом случае скандхи
                изменяются, а во втором случае от них избавляются. Оба варианта практикуют
                последовательно, как один метод, либо по отдельности, как два разных метода.</p>

            <p>Также Ваджрасаттве свойственны следующие десять аспектов, являющиеся по классификации
                Мипама Ринпоче признаками Тантры: воззрение, самадхи, поведение, мандала,
                посвящение, самайя, достижение, подношение, активности, мудра, мантра.</p>

            <p>Принципы Основы – воззрения тантры Ваджрасаттвы о бытии – изложил в середине VIII в.
                один из участников диспута в Самье, монах по имени Пэльян, или на санскрите –
                Шригхоша. Он созерцал Ваджрасаттву и спустя некоторое время с начала созерцания сам
                себе задал пятьдесят один вопрос и записал их. По другой версии – он ответил на
                вопросы ученика по имени Нанам Лусал Доди (sNa nam kLu gsal ldo khri, Лусал Доди из
                клана Нанам). Эта запись стала известна под названием «Ответы на вопросы о
                Ваджрасаттве, данные наставником Пэльяном» (rDo rje sems dpa'i zhus lan slob dpon
                dpal dbyangs kyis mdzad pa bzhugs so). Сохранилось несколько бумажных свитков с
                записью этих вопросов, исполненных лет через тридцать после создания оригинала. Один
                из них в 1907 г. был вывезен из Дуньхуана экспедицией Ауреля Стейна и хранится в
                Британской библиотеке в Лондоне.</p>

            <p>Во время упомянутого диспута Пэльян не поддерживал ни партию Хэшана (чань), ни
                Вайрочану (дзогчен), ни индийскую в лице Камалашилы (последовательный Путь), хотя и
                восседал по левую руку от царя Тисондэцэна сразу за индийским пандитой и в
                заключение диспута выступал как его сторонник. Пэльян старался держаться в стороне
                от политических и религиозных баталий и был склонен более к созерцательному
                уединению, чем к церковному строительству. Дж. Туччи отождествляет Пэльяна с Ба
                Ратной [Туччи Дж., 1997, 42], в котором, в свою очередь, Гой-лоцава Шоннупэл видел
                Ба Сэлнана. Если это так, то именно Пэльян приезжал в Непал, чтобы встретить
                упадхьяю Шантаракшиту. При встрече Шантаракшита сказал ему: «Тибетский царь, ты и я
                были когда-то тремя сыновьями птичницы, в то время, когда Учение проповедовал
                Кашьяпа, и выразили большое желание проповедовать Учение в будущие времена.
                Поскольку царь ещё не родился, а ты не вошёл в возраст, мне пришлось здесь ждать вас
                во время царствований девяти тибетских царей» [Шоннупэл Гой-Лоцава, 2001, 45]. Таким
                образом, предположительно Пэльян в прошлом был одним из строителей Ступы Вайрочаны
                (Ступа Чарунхашор, Бодхнатх). Позже он же встречал Падмасамбхаву, прибывшего в Тибет
                после недолгого затвора на кладбище Шитавана.</p>
            <p>Уникальность текста Пэльяна не только в том, что он датирован с точностью до
                нескольких лет – это около 790 года, года диспута в Самье. Главное – он убедительно
                представляет Ваджрасаттву, как воплощение всеохватного мировоззрения тантрийского
                буддизма периода его интенсивного развития в новом регионе, когда ещё не появились
                приземляющие симптомы обмирщения и воцерковления.</p>
            <p>В восьмом вопросе упомянутой работы Пэльяна говорится:</p>
            <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                <ul class="list-none pl-5 space-y-1 ml-8">
                    <li class="mt-2 mb-6">Но как же тогда практикой мантры обретаются сиддхи?</li>
                    <li class="my-2">Поскольку есть само по себе,</li>
                    <li class="my-2">нет никакого "обретения",</li>
                    <li class="my-2">Тем не менее, по мере усердия и веры</li>
                    <li class="my-2">Посвящение – драгоценность, исполняющая желания.</li>
                </ul>
            </blockquote>
            <p>Первые две строчки написаны вполне в духе дзогчена – то, что есть, уже совершенно,
                обретать нечего, всё уже обретено. Третья строчка рекомендует практику двух парамит:
                усердия и веры. Четвёртая приравнивает посвящение к обретению Чинтамани. Таким
                образом, восьмой вопрос – это своеобразный мост между дзогченом и парамитаяной, хотя
                сам Пэльян классифицирует текст вопросов как махайогу: «Желая постичь Ригпа, высшее
                достижение (подход) махайоги, ученик обратился к Наставнику с вопросами о возникших
                сомнениях». Эта дефиниция ригпа, как плода учения махайоги многозначительна: Пэльян
                ничего не говорит об атийоге или дзогчене, как об отдельном учении, а лишь упоминает
                ригпа, как высший уровень реализации на пути махайоги. Поэтому справедливо, по
                нашему мнению, утверждение, что дзогчен это не отдельное учение, а уникальный метод
                реализации махайоги, предназначенный только для тех, кто предрасположен к подобной
                практике.</p>
            <p>Удивительно, но когда мы, ученики Б. Д. Дандарона, в шестидесятых годах ХХ в.
                начинали
                знакомиться с тантрой, то именно подобные вопросы задавали и обсуждали. Мало того,
                порождённые ответы близко совпадали с тем, что написал Пэльян. Такое совпадение мы
                называем правидьей – когда «независимые» достижения современного интуитивного знания
                подтверждаются свидетельствами созерцателей и философов далёкого прошлого.</p>
            <p class="text-right"><em>В. М. Монтлевич</em></p>

            <p class="font-bold text-center my-12">* * *</p>

            <h2 class="text-center font-bold text-xl">Ответы на вопросы о Ваджрасаттве, данные
                наставником Пэльяном<a href="#citation-1" id="ref-1"
                                       class="citation-mark"><sup>1</sup></a></h2>
            <p class="text-center font-semibold">По-тибетски: rDo rje sems dpa'i zhus lan slob dpon
                dpal dbyangs kyis mdzad pa bzhugs so</p>
            <p class="my-4">Желая разобраться в Махайоге, высшем учении, ученик обратился к
                Наставнику с вопросами о возникших сомнениях. Тот же дал наставления, не противореча
                традиции, в согласии со знанием дхарматы, опираясь на собственное постижение –
                ладными стихами все рассказал, как есть.</p>

            <ol class="space-y-8 list-decimal list-outside ml-6 pl-2 md:ml-8 md:pl-4">
                <!-- Стих 1 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему зовут «Ваджрасаттва»?<a
                            href="#citation-2" id="ref-2" class="citation-mark"><sup> 2</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Собственное пространство нерождённой Мудрости</p>
                        <p>Неизменно и нерушимо как ваджра.</p>
                        <p>Мудрость живых существ (саттва) – [так же] ваджрна.</p>
                        <p>Вот и говорят «Ваджрасаттва»,</p>
                        <p class="pl-4">поскольку [указывает на это] для блага заблудших [живых
                        существ]<a href="#citation-3" id="ref-3" class="citation-mark"><sup> 3</sup></a>.</p>
                    </div>
                </li>

                <!-- Стих 2 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему говорят, что Ваджрасаттва – ваджр Ума
                        всех Сугат трёх времён, что он – владыка Тела, Речи и Ума?<a
                            href="#citation-4" id="ref-4" class="citation-mark"><sup> 4</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Поскольку Победоносцы трёх времён</p>
                        <p class="pl-4">равны [Ваджрасаттве] в реализации нерождённости,</p>
                        <p>[Ваджрасаттва –] естество [их] всех – сердце океана Сугат.</p>
                        <p>Поскольку [Ваджрасаттва –] основа всех характеристик</p>
                        <p class="pl-4">Тела, Речи и Ума,</p>
                        <p>То и говорят, что [он – их] владыка<a href="#citation-5" id="ref-5"
                        class="citation-mark"><sup> 5</sup></a>.
                        </p>
                    </div>
                </li>
                <!-- Вопрос 3 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему Ваджрасаттва – естество всех живых
                        существ и всех дхарм?<a href="#citation-6" id="ref-6" class="citation-mark"><sup>
                                6</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Поскольку у всех дхарм и всех живых существ</p>
                        <p>В нерождённом пространстве абсолютной истины один вкус –</p>
                        <p>Это дхармата Победоносцев трёх времён,</p>
                        <p>Это область Самантабхадра-Ваджрасаттвы.</p>
                    </div>
                </li>

                <!-- Вопрос 4 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему пять Мудростей объясняются как пять
                        Родов?<a href="#citation-7" id="ref-7" class="citation-mark"><sup>
                                7</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Нерождённая Мудрость равна дхармадхату.</p>
                        <p>Её благие качества явлены пятью различными способами,</p>
                        <p>А именно, как пять Мудростей с их отличительными особенностями.</p>
                        <p>Искусные в методах [Учителя] наставляют о них,</p>
                        <p class="pl-4">как о пяти Родах Победоносцев<a href="#citation-8"
                        id="ref-8" class="citation-mark"><sup> 8</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 5 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">В чём отличие зерцалоподобной Мудрости от
                        Мудрости дхармового пространства? Почему применительно к дхармовому
                        пространству говорят о Мудрости?<a href="#citation-9" id="ref-9"
                                                           class="citation-mark"><sup> 9</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Мудрость и дхармадхату не различны,</p>
                        <p class="pl-4">поэтому нерождённая Мудрость подобна зеркалу.</p>
                        <p>Мудрость и состояние ригпа нераздельны,</p>
                        <p class="pl-4">поэтому применительно к дхармовому пространству</p>
                        <p class="pl-4">говорят о Мудрости дхарматы<a href="#citation-10"
                        id="ref-10" class="citation-mark"><sup> 10</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 6 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему, когда созерцал одного идама, то
                        созерцал всех Татхагат?<a href="#citation-11" id="ref-11"
                                                  class="citation-mark"><sup> 11</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>У пяти родов Победоносцев,</p>
                        <p>У всех идамов разных методов</p>
                        <p>В Дхармакае – у них один вкус,</p>
                        <p>Отличаются только детали того, как именно они проявляются.</p>
                        <br>
                        <p>Таким образом, если созерцал одного Победоносца,</p>
                        <p>То [созерцал] не одного, а всех.</p>
                        <p>Когда есть такое понимание йоги,</p>
                        <p>То нет ни единого Сугаты, которого не созерцал бы<a href="#citation-12"
                                                                               id="ref-12"
                                                                               class="citation-mark"><sup>
                                    12</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 7 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему говорят, что невозможно обрести
                        просветление?<a href="#citation-13" id="ref-13" class="citation-mark"><sup>
                                13</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Естество [неба] – в самом небе,</p>
                        <p>Нет причины ему становиться небом.</p>
                        <p>Небо природы ума – просветлённый простор,</p>
                        <p>Нет причины ему достигать просветления.</p>
                        <br>
                        <p>Природу ума, без основы, без корня,</p>
                        <p>Что небо, как ни отчищай – ещё чище не станет.</p>
                        <p>У нерождённого просветления</p>
                        <p>Какая ещё причина, какой ещё плод?</p>
                    </div>
                </li>

                <!-- Вопрос 8 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Но как же тогда практикой мантры обретаются
                        сиддхи?<a href="#citation-14" id="ref-14" class="citation-mark"><sup>
                                14</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Поскольку есть само по себе,</p>
                        <p>Нет никакого «обретения»,</p>
                        <p>Тем не менее, по мере усердия и веры</p>
                        <p>Посвящение – драгоценность, исполняющая желания<a href="#citation-15"
                        id="ref-15" class="citation-mark"><sup> 15</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 9 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">В чём же отличительные черты обретения йогом
                        сиддхи?<a href="#citation-16" id="ref-16" class="citation-mark"><sup>16</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Когда, например, царь назначает министра,</p>
                        <p>То власть [министру] дана свыше – так и во внешних [тантрах].</p>
                        <p>Когда народ призывает [царя] на царство, тот – [становится]
                            самовластен.</p>
                        <p>Самовозникшее великое совершенство (дзогчен) – так в
                            ануттара[тантре].</p>
                    </div>
                </li>

                <!-- Вопрос 10 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Хоть у йога и ясное виденье, но если нет
                        [внешних] знаков, то не свидетельствует ли это о том, что он не в состоянии
                        достичь успеха?<a href="#citation-17" id="ref-17" class="citation-mark"><sup>17</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Праджня, постигающая природу Победоносца – это и есть самадхи.</p>
                        <p>Если есть, то внешние знаки не так и важны.</p>
                        <p>Так, например, если, желая найти огонь, найдёшь его,</p>
                        <p>То не так уж и важно, есть ли [от него ещё и] дым, как знак огня.</p>
                        <br>
                        <p>Рассеянный умишко, жаждущий «знаков»,</p>
                        <p>пусть и не надеется, что однажды они возникнут «откуда-то».</p>
                        <p>Две основные йоги<a href="#citation-18" id="ref-18" class="citation-mark"><sup> 18</sup></a> Будд трёх времён</p>
                        <p >Познай, как возникающие в себе самом,</p>
                        <p class="pl-4">наблюдай [мимолётное волшебство] созерцательного опыта</p>
                        <p class="pl-4">и будь усерден<a href="#citation-19" id="ref-19" class="citation-mark"><sup> 19</sup></a>.</p>
                    </div>
                </li>
            </ol>
            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>
                <p class="mb-3" id="citation-1"><sup>1</sup> Не так много исследовательских работ по
                    этому тексту. Удалось найти и перевести:<a href="#ref-1"
                                                               class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-2"><sup>2</sup> Для большей читаемости текста тибетские
                    стихи в транскрипции вынесены в примечания. Тибетский текст первого вопроса:<a
                        href="#ref-2"
                        class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="mt-2 mb-6">/ rdo rje sems dpa' zhes bya ba'i don /</li>
                    <li class="my-2">ji lta bu lags snyam du gsungs /</li>
                    <li class="my-2">/ skye med ye shes rang gi dbyings /</li>
                    <li class="my-2">/ mi 'gyur mi zhigs rdo rje'i don //</li>
                    <li class="my-2">/ sems dpa' ye shes rdo rje ste /</li>
                    <li class="my-2">'gro don rdo rje sems dpa' bshad //</li>
                </ul>

                <p class="mb-3" id="citation-3"><sup>3</sup> Т.е. дхармовое пространство Будды, оно
                    же «пространство нерожденной Мудрости», (оно же дхармакая) принципиально не
                    отличается от дхармового пространства обычных живых существ. Но в силу
                    вместерожденного неведения заблудшие живые существа не видят этого. Само имя
                    «Ваджрасаттва» уже указывает на то, что «в принципе» (don) заблудшие живые ('gro
                    ba) – это «саттвы» (sems dpa'), чье дхармовое пространство ваджрно, как у Будды.
                    Идам «Ваджрасаттва» (самбхогакая) – непосредственно осуществляет для заблудших
                    живых такую пользу (don). «vajra svabhava atmako 'ham».<a
                        href="#ref-3" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-4"><sup>4</sup> Тибетский текст второго вопроса:<a
                        href="#ref-4" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rdo rje sems dpa' ni</li>
                    <li class="my-2">dus gsum gyi bde bar gshegs pa thams cad kyi thugs rdo rje /
                    </li>
                    <li class="my-2">sku gsung thugs kyi bdag po lags so</li>
                    <li class="my-2">zhes 'byung ba'i don ji lta bu lags /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dus gsum rgyal bas skye med rtogs par mnyam /</li>
                    <li class="my-2">/ kun gyi rang bzhin bde gshegs rgya mtsho'i thugs //</li>
                    <li class="my-2">sku gsung thugs kyi mtshan ma ji snyed pa'i //</li>
                    <li class="my-2">dngos gzhi nyid du gyur pas bdag por bshad /</li>
                </ul>

                <p class="mb-3" id="citation-5"><sup>5</sup> Поясняющие вставки в основной текст.
                    Дуньхуаньский свиток [ДХ] в своих вставках отличается от ксилографов (не только
                    в этом месте, но и вообще).<a href="#ref-5"
                                                  class="text-blue-500 hover:underline">↩</a></p>
                <p>Для первой строчки ДХ даёт:</p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    [... равны по своему нерождённому естеству].
                </blockquote>
                <p>Под (перед?) второй строкой приписка снизу:</p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                        <li class="my-2">В нерождённой дхармате нет трёх времён.</li>
                        <li class="my-2">Сердце всех Будд – Ваджрасаттва.</li>
                    </ul>
                </blockquote>
                <p>Ко второму двустишью ответа ДХ подписывает:</p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                        <li class="my-2">Естество Ваджрасаттвы – нерождённая Дхармата. Из неё –
                            чудо
                        </li>
                        <li class="my-2">рождения. Место, откуда являются (ston) множество разных
                            тел,
                        </li>
                        <li class="my-2">речей и умов – поэтому <em>сущность</em>.</li>
                    </ul>
                </blockquote>


                <p class="mb-3" id="citation-6"><sup>6</sup> Тибетский текст третьего вопроса:<a
                        href="#ref-6" class="text-blue-500 hover:underline">↩</a></p>

                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rdo rje sems dpa' ni 'gro ba dang chos thams chad kyi rang
                        bshin no
                    </li>
                    <li class="my-2">zhes bya ba'i don ji lta bu lags /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ chos rnams thams chad 'gro ba mtha' dag ni //</li>
                    <li class="my-2">skye med don dam dbyings su ro gcig pas //</li>
                    <li class="my-2">de nyid dus gsum rgyal ba'i chos nyid de //</li>
                    <li class="my-2">kun tu bzang po rdo rje sems dpa'i ngang /</li>
                </ul>

                <p class="mb-3" id="citation-7"><sup>7</sup> Тибетский текст четвёртого вопроса:<a
                        href="#ref-7" class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="mt-2 mb-6">/ ye shes lnga rigs lngar bstan pa'i don ji lta bu lags
                        /
                    </li>
                    <li class="my-2">/ skye med ye shes chos kyi dbyings dang mnyam /</li>
                    <li class="my-2">/ de'i yon tan khyad par lngar snang ba //</li>
                    <li class="my-2">de nyid ye shes lnga'i mtshan nyid de //</li>
                    <li class="my-2">thabs la mkhas pas rgyal ba rigs lngar bstan /</li>
                </ul>

                <p class="mb-3" id="citation-8"><sup>8</sup> Из вставок в Данжуре:<a href="#ref-8"
                                                                                     class="text-blue-500 hover:underline">↩</a>
                </p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                        <li class="my-2">Познающая нерождённая Мудрость и познаваемое дхармадхату
                        </li>
                        <li class="my-2">нераздельны – это одно и то же: т.е. Мудрость дхармового
                            пространства.
                        </li>
                    </ul>
                </blockquote>

                <p class="mb-3" id="citation-9"><sup>9</sup> Тибетский текст пятого вопроса:<a
                        href="#ref-9"
                        class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ chos kyi dbyings kyi ye shes dang /</li>
                    <li class="my-2">me long lta bu'i ye shes la khyad ci mchis /</li>
                    <li class="my-2">chos kyi dbyings la ci'i slad du ye shes bgyi /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ye shes chos kyi dbyings dang khyad med pas //</li>
                    <li class="my-2">skye med ye shes me long lta bur mkhyen /</li>
                    <li class="my-2">/ ye shes rig pa'i ngang dang dbyer med phyir //</li>
                    <li class="my-2">chos kyi dbyings la chos nyid ye shes brjod /</li>
                </ul>
                <p class="mb-3" id="citation-10"><sup>10</sup> Вставки из Данжура:<a href="#ref-10"
                                                                                     class="text-blue-500 hover:underline">↩</a>
                </p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                        <li class="my-2">Хотя познающая Мудрость и познаваемое дхармовое
                            пространство, по
                        </li>
                        <li class="my-2">сути, не имеют отличий, хотя это одно и то же (Мудрость
                        </li>
                        <li class="my-2">дхармового пространства), но Мудрость по природе похожа
                            на
                        </li>
                        <li class="my-2">зеркало тем, что, хотя познаваемые [дхармы] и не рождены,
                            она
                        </li>
                        <li class="my-2">знает (rig pa) их в естественной ясности (rang gsal).</li>
                    </ul>
                </blockquote>
                <p>ДХ подстрочно:</p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">rtogs pa dbyings su song ba dus su</li>
                    <li class="my-2">dbyings dang ye shes gnyis su myed pas, sgrib pa ni</li>
                    <li class="my-2">[ye shes?] kyis chos nyid rig pa'i dus na chos kyi dbyings
                        rnam
                    </li>
                    <li class="my-2">par dag pa'i ye shes zhes brjod</li>
                </ul>
                <p>Нерождённая Мудрость – выражаясь макароническим языком, диалектический синтез
                    «бытия» и «сознания»:</p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">1) дхармадхату – дхармы/вишая – ясный свет,</li>
                    <li class="my-2">2) ригпа – осознание/«awareness» – пустота.</li>
                </ul>
                <p>«[Нерождённая] Мудрость и дхармадхату не различны» – т.е. о Нерождённой Мудрости
                    как синтезе в её отношении к ясносветлоявленной вишае говорится как о
                    Зерцалоподобной мудрости.</p>
                <p>«[Нерождённая] Мудрость и состояние ригпа нераздельны» – т.е. о Нерождённой
                    Мудрости как синтезе в её отношении к пустому ригпа говорится как о мудрости,
                    постигающей дхармовое пространство.</p>
                <p>Ригпа – первый, вычленяемый из синтеза, «намёк» на конкретное – ЗНА-/-jnya –,
                    окончательно кристаллизующийся в 6 видов сознания по абхидхарме.</p>
                <p>Треугольник тезис (ригпа) – антитезис (дхармадхату) – синтез (нерождённая
                    мудрость) замкнулся.</p>
                <p>Ср. у Лонченпы в тексте «Общее изложение самого тайного» про два вида творчества
                    (rtsal) и т.д.!</p>
                <p>Ср. также с вопросом 24 про йогачару.</p>

                <p class="mb-3" id="citation-11"><sup>11</sup> Тибетский текст шестого вопроса:<a
                        href="#ref-11"
                        class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ yi dam kyi lha gcig bsgoms pas de bzhin gshegs pa kun bsgoms
                        par
                    </li>
                    <li class="my-2">'gyur ro zhes bgyi ba'i don ji lta bu lags /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rgyal ba rigs lnga la sogs pa //</li>
                    <li class="my-2">thabs kyi phyag rgya ma lus kun //</li>
                    <li class="my-2">chos sku rdo rjer ro gcig ste //</li>
                    <li class="my-2">ji ltar snang ba de ltar min /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ de bas rgyal ba gcig bsgoms pa /</li>
                    <li class="my-2">/ gcig nyid med la kun gyi ngang //</li>
                    <li class="my-2">rnal 'byor rig pa 'di ldan na //</li>
                    <li class="my-2">bde gshegs ma bsgoms gcig kyang med /</li>
                </ul>

                <p class="mb-3" id="citation-12"><sup>12</sup> Межстрочник в ДХ даёт развёрнутое
                    параллельное пояснение:<a href="#ref-12"
                                              class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-3">lung dag las lha gcig grub na ni kun 'grub ces 'byung</li>
                    <li class="my-3">Когда, получив лунг, реализовал одно божество, то реализовал
                        всех.
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">phyogs bcu ma lus pa'i zhing khams thams cad rdul gcig rdul
                    </li>
                    <li class="my-2">snyed mang po'i 'bu ta kun rgyal ba rigs lngar 'dus, rigs
                        lnga
                    </li>
                    <li class="my-2">yang chos kyi skur 'dus, chos kyi sku yang bdag kyi rang
                        bzhin
                    </li>
                    <li class="my-2">las myi gzhan bas thams cad bdag dang bdag gi ngo bor ma yin
                        pa
                    </li>
                    <li class="my-2">gang yang myed pa'i phyir dang</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">yang na 'bu ta kun kyi mtshan ni sku gsung thugs yin la, sems
                    </li>
                    <li class="my-2">can kun kyi rang bzhin yang lus ngag yin[*] no, de bas bdag
                        gi
                    </li>
                    <li class="my-2">lus dang[*] yid sku gsung thugs kyi ngang du dbyer myed par
                    </li>
                    <li class="my-2">bsgoms pas kyang 'bu ta kun bsgoms par 'gyur zhe bya</li>
                </ul>
                <p>Ср. вопросы №2 и №3:</p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">Потому, что все Будды из чистых земель 10 направлений,</li>
                    <li class="my-2">неисчислимых, как пылинки, единятся в пять родов
                        Победоносцев.
                    </li>
                    <li class="my-2">Пять родов - в Дхармакаю. Дхармакая же - не что иное, как моё
                    </li>
                    <li class="my-2">естество; так что всё - я [сам], и нет ничего, что по своей
                    </li>
                    <li class="my-2">сущности не было бы мной.</li>
                </ul>
                <p>Или же [можно ответить иначе]:</p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">Отличительные признаки всех</li>
                    <li class="my-2">Будд, их Тело, Речь и Ум – таковы же по своему естеству и</li>
                    <li class="my-2">тело, речь и ум всех живых существ. Поэтому, когда</li>
                    <li class="my-2">созерцаешь свои тело, речь и ум как, в сущности, нераздельные
                    </li>
                    <li class="my-2">с Телом, Речью и Умом, то созерцаешь всех Будд.</li>
                </ul>

                <p class="mb-3" id="citation-13"><sup>13</sup> Тибетский текст седьмого вопроса:<a
                        href="#ref-13"
                        class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ byang chub thob pa med par bstan pa'i don ji lta bu lags /
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rang bzhin nam mkhar gnas pa ni //</li>
                    <li class="my-2">nam mkhar 'gyur ba'i rgyu ma yin //</li>
                    <li class="my-2">sems nyid nam mkha' byang chub dbyings //</li>
                    <li class="my-2">byang chub 'grub pa'i rgyu ma yin /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">gzhi rtsa med pa'i sems nyid de /</li>
                    <li class="my-2">/ bkrus pas mi dag nam mkha' bzhin //</li>
                    <li class="my-2">skye dang 'bral ba'i byang chub la //</li>
                    <li class="my-2">byang chub rgyu 'bras yong gis med /</li>
                </ul>

                <p class="mb-3" id="citation-14"><sup>14</sup> Тибетский текст восьмого вопроса:<a
                        href="#ref-14"
                        class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'o na sngags spyod pas dngos grub ji lta bu 'thob /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">rang bzhin gnas pa nyid kyi phyir //</li>
                    <li class="my-2">thob pa rdul tsam med mod kyi //</li>
                    <li class="my-2">rtsol dang mos pa ji bzhin du //</li>
                    <li class="my-2">byin brlabs yid bzhin nor bu'i tshul /</li>
                </ul>
                <p class="mb-3" id="citation-15"><sup>15</sup> ДХ к первым двум строчкам:<a
                        href="#ref-15"
                        class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">don dam pa chos nyid ni gong du bstan pa ltar ma bcos pas ci
                    </li>
                    <li class="my-2">bzhin ba'i rang bzhin gnas mod kyi, nam ka thogs ba myed pa
                        la
                    </li>
                    <li class="my-2">gnyi zla shar pas sems can la phan 'dogs pa bzhin rang gyi
                        byin
                    </li>
                    <li class="my-2">gyi rlabs ci ltar 'dod pa bzhin 'grub par 'gyur ro</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">Хотя уже объяснялась раньше про дхармату, как абсолютную
                        истину,
                    </li>
                    <li class="my-2">что она неулучшаема и просто есть, как есть, сама по себе, но
                    </li>
                    <li class="my-2">[,например,] в небе без преград восходят солнце и луна к
                        вящей
                    </li>
                    <li class="my-2">пользе живых существ – так и через посвящение обретёшь какие
                        хочешь сиддхи.
                    </li>
                </ul>
                <p>Данжур:</p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">[sems can kyi las dang rnam rtog gi] rang bzhin gnas [te ngo bo
                        gcig] pa nyid kyi phyir
                    </li>
                    <li class="my-2">[gzhan nas ma rtsol bas] thob pa rdul tsam med mod kyi</li>
                    <li class="my-2">['on kyang blang dor] rtsol dang mos pa ['i khyad par] ji bzhin
                        du
                    </li>
                    <li class="my-2">[theg pa sngags nang pa'i] byin brlabs [sam si ti 'byung ste]
                    </li>
                    <li class="my-2">yid bzhin nor bu'i [yon tan rang las 'char ba'i] tshul</li>
                </ul>
                <p>В «Золотых буквах» во вставке написано «pam pi ti» вместо «sam si ti» (samsiddhi)
                    – видимо, текст резался с копии, в которой вставки были написаны скорописью, где
                    sa и pa обычно очень похожи. Похожее искажение и во вставках к следующему
                    вопросу. В нартангском – правильно.</p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    Естественно наличные карма и дискурсивные мысли [и т.д.] живых существ имеют
                    единую сущность [– Дхармату], поэтому нет никакого «обретения». Тем не менее,
                    посвящение в колесницу внутренней мантры имеет свойство производить совершенные
                    сиддхи сообразно с мерой усердия и веры – как драгоценность, исполняющая
                    желания, имеет свойство производить, что душе угодно.
                </blockquote>
                <p class="mb-3" id="citation-16"><sup>16</sup> Тибетский текст девятого вопроса:<a href="#ref-16"
                class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rnal 'byor pas dngos grub thob pa'i khyad par ci mchis /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dper na rgyal pos blon por bskos pa bzhin /</li>
                    <li class="my-2">/ grub pa gong nas 'byin pa phyi'i tshul /</li>
                    <li class="my-2">/ 'bangs kyis rgyal srid phul nas dbang sgyur ltar //</li>
                    <li class="my-2">rang 'byung rdzogs chen bla na med pa'i tshul /</li>
                </ul>

                <p class="mb-3" id="citation-17"><sup>17</sup> Тибетский текст десятого вопроса:<a href="#ref-17"
                class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rnal 'byor pa lta ba gsal na yang</li>
                    <li class="my-2">rtags dang mtshan ma ma byung na</li>
                    <li class="my-2">'grub tu mi gtub pa'i tshul ma lags sam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rgyal ba'i rang bzhin shes rab ting 'dzin kho na bas //</li>
                    <li class="my-2">de yod phyi rol rtags dang mtshan ma'i khar ma lus /</li>
                    <li class="my-2">/ dper na me 'dod pas ni me ni rnyed 'gyur na //</li>
                    <li class="my-2">me rtags du ba yod kyang med pa'i khar ma lus /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ de bas rtags dang mtshan mar zhen cing 'phros pa'i blos /</li>
                    <li class="my-2">/ gzhan nas nam 'byung snyam du re ba mi bya'i /</li>
                    <li class="my-2">/ dus gsum sangs rgyas dngos gzhi rnal 'byor rnam gnyis po //</li>
                    <li class="my-2">rang las 'byung bar rig nas sems nyams lta zhing brtson /</li>
                </ul>
                <p class="mb-3" id="citation-18"><sup>18</sup> ДХ комментирует: Основа сиддх Будд трёх времён – две Бодхичитты.<a href="#ref-18" class="text-blue-500 hover:underline">↩</a></p>

                <p class="mb-3" id="citation-19"><sup>19</sup> Приписки из ДХ:<a href="#ref-19"
                class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">1 строка: ... безошибочная праджня и ум в неотвлекающемся самадхи это одно и то же.</li>
                    <li class="my-2">7 строка: Основа сиддх Будд трёх времён – две Бодхичитты.</li>
                    <li class="my-2">8 строка: Осуществляется собственным усердием, ... </li>
                </ul>
            </div>
        </div>

        @include('layouts.article-navigation', [
            'currentPart' => 1,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])
    </div>
@endsection
