@extends('layouts.app')
@section('title', 'Ответы на вопросы о Ваджрасаттве, данные наставником Пэльяном — Часть 2')

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
        {{-- Верхняя навигация по статье --}}
        @include('layouts.article-navigation', [
            'currentPart' => 2,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])

        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Ответы на вопросы о
                Ваджрасаттве,<br>данные наставником Пэльяном<br>Часть 2</h2>

            {{-- Список вопросов, нумерация начинается с 11 --}}
            <ol class="space-y-8 list-decimal list-outside ml-6 pl-2 md:ml-8 md:pl-4" start="11">
                <!-- Вопрос 11 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Одними ли только праджней и самадхи
                        достигается [состояние Будды] или в сочетании с благословением?<a
                            href="#citation-20" id="ref-20"
                            class="citation-mark"><sup> 20</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Как всё проявленное возникает в силу [только лишь] ошибочных мыслей,</p>
                        <p>Так [и состояние Будды можно] осуществить одними только праджней и
                            самадхи.</p>
                        <p>Тем не менее, подобно отражению солнца и луны в чистой воде</p>
                        <p>Сострадательное благословение [беспрепятственно] возникнет само по себе.
                        </p>
                    </div>
                </li>

                <!-- Вопрос 12 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Следует ли стремиться к обретению
                        благословения, и что нужно делать, чтоб его обрести?<a href="#citation-21"
                        id="ref-21" class="citation-mark"><sup> 21</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Когда взбаламученная вода успокоилась,</p>
                        <p>Нет нужды стараться, чтоб возникли отражения солнца и луны.</p>
                        <p>Когда йогой [самадхи божества] очистил свой ум,</p>
                        <p>Нет нужды стараться, чтоб возникло благословение Победоносца.</p>
                    </div>
                </li>

                <!-- Вопрос 13 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Как следует исполнять служение Сугате<a
                            href="#citation-22" id="ref-22" class="citation-mark"><sup> 22</sup></a>,
                        чтобы [надлежаще его] исполнить?<a
                            href="#citation-23"
                            id="ref-23"
                            class="citation-mark"><sup> 23</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Всё, являющееся мне – Дхармакая,</p>
                        <p>Неизменная, подобно небу – когда так познал,</p>
                        <p>Когда нет дискурсивных мыслей о служении и его совершении</p>
                        <p>Это лучшее служение – без труда, без усилий.</p><br>
                        <p>Ум, который утвердился в таком понимании</p>
                        <p>Будет ясно созерцать три знаковых мудры.<a href="#citation-24"
                                                                      id="ref-24"
                                                                      class="citation-mark"><sup>24</sup></a>
                        </p>
                        <p>Когда непоколебим в усердии и неотступен,</p>
                        <p>Владея всеми ритуалами, [истинно] служит джняна-дэва.</p>
                    </div>
                </li>

                <!-- Вопрос 14 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Когда служишь джняна-дэва, то будет ли
                        исполнение [всяких] «мелочных»<a href="#citation-25" id="ref-25"
                                                         class="citation-mark"><sup>25</sup></a>
                        практик омрачающими?<a href="#citation-26" id="ref-26"
                                               class="citation-mark"><sup> 26</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Кроме реализации Тела, Речи и Мысли,</p>
                        <p>Не ищи осуществления других сиддх.</p>
                        <p>Если не создаёшь противопоставления между надлежащими [практиками],</p>
                        <p>Нет омрачения, т. к. [всё это] не что иное, как реализация.</p>
                    </div>
                </li>

                <!-- Вопрос 15 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Некоторые наставляют, что Самбхогакаю
                        божества-идама надлежит созерцать в мирной форме, а деятельное божество – в
                        гневной. Так ли это?<a href="#citation-27" id="ref-27"
                                               class="citation-mark"><sup> 27</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>И главное [божество], и [его] проявления, мирные ли, гневные ли –</p>
                        <p>В Дхармакае у всех у них один вкус, [так что] искусные в методах
                            [Учителя] наставляют [о разных, мирных и гневных, божествах] для пользы
                            живых существ.</p>
                        <p>Таким образом, это не является чем-то, истинно определяющим сущность
                            Сугаты,</p>
                        <p>Но всего лишь сообразно возможностям и склонностям [усмиряемых].</p>
                    </div>
                </li>

                <!-- Вопрос 16 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Коли уж выбрал себе идама, не грешно ли будет
                        потом созерцать какое-то другое божество?<a href="#citation-28" id="ref-28"
                                                                    class="citation-mark"><sup> 28</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>[Искусность] метода [в том и заключается, что] наставляют о разных
                            [божествах],</p>
                        <p class="pl-4">хотя в [дхарма]дхату они едины.</p>
                        <p>Если понимаешь их концептуально, принимая и отвергая, –</p>
                        <p class="pl-4">это безмерная скверна.</p>
                        <p>Если постиг, как нераздельных,</p>
                        <p class="pl-4">то, [даже если] сообразно своим кармическим склонностям</p>
                        <p>Созерцаешь любых Будд – беспорочный, святой корень блага.</p>
                    </div>
                </li>

                <!-- Вопрос 17 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Говорят, что если обладаешь высшим воззрением,
                        то можно обойтись и без идама – как это понимать?<a
                            href="#citation-29" id="ref-29" class="citation-mark"><sup> 29</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>[Когда] с опорой на идама [постиг] отсутствие индивидуального «я»,</p>
                        <p>Когда постиг, что это изначально есть [не что иное, как] естество
                            Ваджрасаттвы,</p>
                        <p>Такое постижение – состояние всех Победоносцев,</p>
                        <p>Кроме которого нет</p>
                        <p class="pl-4">ни идама, которому следует исполнять служение,</p>
                        <p class="pl-4">ни исполнения [служения].</p><br>
                        <p>Например, подобно тому,</p>
                        <p class="pl-4">как Ваджрасаттве нет [нужды созерцать] божество-идама
                            [Рупакаи],</p>
                        <p>Обладающий таким постижением [йогин]</p>
                        <p class="pl-4">не созерцает какого-то ещё идама,</p>
                        <p class="pl-4">отличного от своего [собственного дхарма]дхату.</p>
                        <p>Подобно тому, как Победоносцы [сообразными методами]</p>
                        <p class="pl-4">осуществляют благие дела усмирения [разных] живых
                            существ,</p>
                        <p>Он пребывает в разных самадхи океана Будд.<a href="#citation-30"
                                                                        id="ref-30"
                                                                        class="citation-mark"><sup>30</sup></a>
                        </p>
                    </div>
                </li>

                <!-- Вопрос 18 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Как следует развивать<a href="#citation-31"
                                                                              id="ref-31"
                                                                              class="citation-mark"><sup>31</sup></a>
                        самадхи таковости<a href="#citation-32" id="ref-32" class="citation-mark"><sup> 32</sup></a>?<a
                            href="#citation-33" id="ref-33"
                            class="citation-mark"><sup> 33</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Будды трёх времён [ничего] не улучшают.<a href="#citation-34" id="ref-34"
                                                                     class="citation-mark"><sup> 34</sup></a>
                        </p>
                        <p>Твой собственный ум изначально нетварен.</p>
                        <p>Твой собственный нетварный ум и есть дхармата,</p>
                        <p>А дхармата – не требует [ещё какого-то дополнительного] развития.</p>
                    </div>
                </li>

                <!-- Вопрос 19 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Но тогда, правильно ли будет [просто]
                        пребывать в «не-созерцании»?<a href="#citation-35" id="ref-35"
                                                       class="citation-mark"><sup> 35</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Если то, о чём ты спрашиваешь (т.е. «созерцание»), существовало бы,</p>
                        <p>То существовал бы и «созерцающий».</p>
                        <p>Поскольку ум воистину не рождён,</p>
                        <p>То кто же тогда пребывает в «не-созерцании»?</p>
                    </div>
                </li>

                <!-- Вопрос 20 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Важно ли наставнику улучшать свой ум?<a
                            href="#citation-36" id="ref-36" class="citation-mark"><sup> 36</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Когда ум с [его иллюзорным представлением о] «я»</p>
                        <p class="pl-4">[ошибочно] принимается за подлинный,</p>
                        <p>[Алая-виджняна, которую можно сравнить с] корнем, не постигнута,</p>
                        <p class="pl-4">[и от неё возникают обычные виды] сознания, что можно
                            сравнить с листвой.</p>
                        <p>[У кого] нет уверенности [в постижении корня алая-виджняны],</p>
                        <p class="pl-4">и в силу этого есть желание улучшать [листву виджняны],</p>
                        <p class="pl-4">[тот] не является [совершенным] наставником;</p>
                        <p class="pl-4">[такое улучшение «ботвы» – не важно.]</p>
                        <p>Но мудрый [, постигший корень,]</p>
                        <p class="pl-4">весьма ценит улучшение в соответствии с безошибочным методом<a
                                href="#citation-37" id="ref-37" class="citation-mark"><sup> 37</sup></a>.
                        </p>
                    </div>
                </li>
            </ol>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            {{-- Примечания к вопросам 11-20 --}}
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ
                </h4>

                <p class="mb-3" id="citation-20"><sup>20</sup> Тибетский текст одиннадцатого
                    вопроса:<a href="#ref-20"
                               class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ shes rab dang ting nge 'dzin bsgoms pa 'ba' zhig gis 'grub
                        bam /
                    </li>
                    <li class="my-2">/ byin gyi brlabs kyis kyang sdong par 'gyur /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'khrul rtog rtas nas thams cad snang ba bzhin //</li>
                    <li class="my-2">shes rab ting 'dzin kho nas 'grub mod kyi //</li>
                    <li class="my-2">dang ba'i chu la nyi zla'i gzugs brnyan bzhin //</li>
                    <li class="my-2">thugs rje'i byin rlabs sdig pa med par 'byung /</li>
                </ul>

                <p class="mb-3" id="citation-21"><sup>21</sup> Тибетский текст двенадцатого вопроса:<a
                        href="#ref-21"
                        class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ byin gyi brlabs 'byung bar bgyi na re ba bskyed dam ji ltar
                        bgyis na 'byung bar 'gyur /
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ji ltar chu la rnyog ma dangs gyur na //</li>
                    <li class="my-2">nyi zla'i gzugs brnyan 'char ba brtsal mi dgos /</li>
                    <li class="my-2">/ rang sems rnal 'byor dag par gyur pa na //</li>
                    <li class="my-2">rgyal ba'i byin brlabs 'byung ba brtsal mi dgos /</li>
                </ul>

                <p class="mb-3" id="citation-22"><sup>22</sup> Т.е исполнять садхану.<a
                        href="#ref-22" class="text-blue-500 hover:underline">↩</a></p>


                <p class="mb-3" id="citation-23"><sup>23</sup> Тибетский текст тринадцатого вопроса:<a
                        href="#ref-23"
                        class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bde bar gshegs pa la bsnyen pa ji ltar bgyis na nye /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bdag du snang ba nyid na chos kyi sku //</li>
                    <li class="my-2">'gyur med nam mkha lta bur rtogs 'gyur cing /</li>
                    <li class="my-2">/ bsnyen pa bya dang byed pa mi dmigs na /</li>
                    <li class="my-2">/ tshegs dang 'bad pa med pa bsnyen pa'i mchog /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'di 'dra'i rtogs dang ldan pa'i blo can gyis /</li>
                    <li class="my-2">/ mtshan ma'i phyag rgya rnams gsum gsal bar bsgom /</li>
                    <li class="my-2">/ g.yeng ba med pas brtson zhing mi gtong na /</li>
                    <li class="my-2">/ cho ga kun ldan ye shes lha dang nye /</li>
                </ul>

                <p class="mb-3" id="citation-24"><sup>24</sup> Связано с тремя вратами. См.
                    примечание к Вопр.30. (Ясная випашьяна трёх мудр Тела, Речи, Ума).<a
                        href="#ref-24" class="text-blue-500 hover:underline">↩</a></p>

                <p class="mb-3" id="citation-25"><sup>25</sup> las phra mo – вторичные практики,
                    зависящие от исполнения основной садханы и «начитки» необходимого количества
                    мантр. Объединяются в четыре большие группы: умиротворение, преумножение,
                    подчинение и гневные ритуалы.<a href="#ref-25"
                                                    class="text-blue-500 hover:underline">↩</a></p>


                <p class="mb-3" id="citation-26"><sup>26</sup> Тибетский текст четырнадцатого
                    вопроса:<a href="#ref-26"
                               class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ye shes kyi lha la bsnyen pa bgyid pa'i dus su /</li>
                    <li class="my-2">/ las phra mo rtsom pa sgrib bam mi sgrib /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sku gsung thugs su goms pa ma gtogs pa /</li>
                    <li class="my-2">/ bsgrub par bya ba'i dngos grub gzhan mi tshol //</li>
                    <li class="my-2">gnas dang gnas min 'gal bar ma brtsams na //</li>
                    <li class="my-2">goms byed gud na med pas sgrib pa med /</li>
                </ul>

                <p class="mb-3" id="citation-27"><sup>27</sup> Тибетский текст пятнадцатого вопроса:<a
                        href="#ref-27"
                        class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ yi dam gyi lha ni longs spyod rdzogs pa'i sku /</li>
                    <li class="my-2">/ zhi ba cha lugs su bsgom /</li>
                    <li class="my-2">/ las kyi lha ni khro bo la sogs par bsgom zhes 'chang pa dag
                        mchis na /
                    </li>
                    <li class="my-2">/ 'di ltar nges sam ma nges /</li>
                    <li class="my-2"></li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ gtso dang sprul pa zhi khro la sogs kun /</li>
                    <li class="my-2">/ chos skur ro gcig thabs mkhas 'gro don bstan par mnyam /</li>
                    <li class="my-2">/ de bas bde gshegs gzhi rtsa ma nges te /</li>
                    <li class="my-2">/ skal ba dang ni mos pa ji tsam 'tsham par zad /</li>
                </ul>

                <p class="mb-3" id="citation-28"><sup>28</sup> Тибетский текст шестнадцатого
                    вопроса:<a href="#ref-28"
                               class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ yi dam gyi lha bzhag nas lha gzhan bsgoms na nyes pa mchis
                        sam ma mchis /
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ thabs kyis so sor bstan kyang dbyings gcig la //</li>
                    <li class="my-2">dngos rtogs spong len sgrib pa mu mtha' med /</li>
                    <li class="my-2">/ dbyer med rtogs pas las rgyud 'tsham pa bzhin //</li>
                    <li class="my-2">sangs rgyas kun bsgoms nyes med dge rtsa 'phags /</li>
                </ul>

                <p class="mb-3" id="citation-29"><sup>29</sup> Тибетский текст семнадцатого вопроса:<a
                        href="#ref-29"
                        class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ lta ba mtho na yi dam gyi lha med kyang rung ngo</li>
                    <li class="my-2">zhes bgyi ba'i don ji lta bu lags /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ yi dam lha la rten pa bdag nyid med pa dang //</li>
                    <li class="my-2">rdo rje sems dpa'i rang bzhin ye nas yin rtogs na //</li>
                    <li class="my-2">rtogs pa de nyid rgyal ba kun gyi ngang yin pas /</li>
                    <li class="my-2">/ gzhan du yi dam bsnyen par bya dang byed pa med /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dper na rdo rje sems dpa' yi dam lha med ltar //</li>
                    <li class="my-2">/ rtogs ldan bdag gi dbyings las gzhan ma'i lha mi dmigs /</li>
                    <li class="my-2">/ 'gro ba 'dul ba'i 'phrin las rgyal bas ci mdzad bzhin //</li>
                    <li class="my-2">sangs rgyas rgya mtsho'i ting 'dzin sna tshogs snyoms par 'jug
                        /
                    </li>
                </ul>

                <p class="mb-3" id="citation-30"><sup>30</sup> Межстрочник к ответу в PT 837:<br>«Велика
                    равность всех идамов! Поскольку и я, и все живые
                    существа имеем единое естество, то [каждый] конкретный идам есть
                    лишь [конкретный] осуществляемый образ (sgrub par bya ba'i dmigs
                    pa). Кто так постиг, тот знает, что это естество Будды, кроме
                    которого нет какого-то ещё идама, которого следует созерцать, и
                    не нужно уже ему цепляться ни за одного идама. Это и показано в
                    примере».
                    <a href="#ref-30" class="text-blue-500 hover:underline">↩</a></p>

                <p class="mb-3" id="citation-31"><sup>31</sup> sgom pa – тренироваться, навыкать,
                    развивать – каузатив от goms pa (уметь, иметь навык, быть привычным). В
                    контексте практик
                    Ваджраяны обычно переводят на русский как «созерцать», что, по счастью,
                    соответствует преимущественно визуализационному (зримому) характеру тантрийских
                    практик. Тут, однако, этот шаблонный перевод не работает, но при этом в русском
                    тексте теряется связь с «не-созерцанием» (bsgom du med) и т.д. следующего
                    вопроса.
                    <a href="#ref-31" class="text-blue-500 hover:underline">↩</a></p>


                <p class="mb-3" id="citation-32"><sup>32</sup> Тибетский текст восемнадцатого
                    вопроса:<a href="#ref-32"
                               class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ de bzhin nyid kyi ting 'dzin ji ltar bsgom /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dus gsum rgyal bas ma bcos te //</li>
                    <li class="my-2">rang sems gdod nas skye ba med /</li>
                    <li class="my-2">/ rang sems ma skyes chos nyid na /</li>
                    <li class="my-2">/ chos nyid bsgom par bya ba med /</li>
                </ul>

                <p class="mb-3" id="citation-33"><sup>33</sup> Самадхи таковости – одно из трёх
                    самадхи Махайоги (<em>ting nge 'dzin rnam pa gsum</em>):<a href="#ref-33"
                                                                               class="text-blue-500 hover:underline">↩</a>
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">de bzhin nyid kyi ting nge 'dzin;</li>
                    <li class="my-2">kun tu snang gi ting nge 'dzin;</li>
                    <li class="my-2">rgyu'i ting nge 'dzin.</li>
                </ol>

                <p class="mb-3" id="citation-34"><sup>34</sup> Перевод «неулучшаемое» был выбран,
                    чтобы сохранить связь с термином «неулучшение», «неулучшающий» (ma bcos), речь о
                    котором пойдет ниже. Намхай Норбу в своем комментарии на «Свод тайного»
                    Буддагупты (Namkhai Norbu. The small colection of hidden precepts. A study of an
                    ancient manuscript on Dzogchen from Tun-Huang. Shang-Shung Edizioni, Arcidosso
                    (GR), 1984),
                    глоссируя термин «неухудшаемое», приводит пример с облаками, которые, хотя и
                    закрывают солнечный свет от людей на земле, но
                    не могут никак ему повредить. Что же касается пары «неулучшаемое-неулучшение»,
                    то для объяснения тонкого, но важного различия этих терминов ниже приведен
                    перевод с тибетского комментария Намхая Норбу Ринпоче, взятый из этой же книги
                    (с. 177-179):
                    «В проповедях о продвижении по пути употребляют термин неулучшение, в этом же
                    тексте (sbas pa'i rgum chung “Свод
                    тайного” Буддагупты – В.У.) сказано о неулучшаемости; но смысл этих терминов
                    один и тот же. Однако термин
                    неулучшаемость относится к характеру универсального порядка основы, лону
                    просветленной мысли (snying po byang chub kyi sems, bodhicittagarbha ), чья сущность – Пустота, естество – Ясный Свет, а
                    Энергия (сострадания) не знает препятствий,
                    такова ее троякая Мудрость (ye shes sum ldan). Познав её, как она есть,
                    непременно освободишься. Неверными воззрениями о её
                    существовании или несуществовании, исправлением её или любыми другими попытками
                    изменить к лучшему, умствованием или
                    усердием невозможно её улучшить. Так универсальный порядок изначальной Основы
                    разъясняется как неулучшаемый. Термин же
                    неулучшение относится к самадхи периода Пути, к неулучшению при помощи
                    рассудочной деятельности. Им разъясняется
                    необходимость войти в состояние просто Ясности, просто Знания. Кроме этого очень
                    тонкого отличия в описании, соответственно,
                    характера универсального порядка Основы и способа вхождения в самадхи, эти два
                    термина не имеют более каких-либо отличий
                    смыслу».<a href="#ref-34" class="text-blue-500 hover:underline">↩</a></p>

                <p class="mb-3" id="citation-35"><sup>35</sup> Тибетский текст девятнадцатого
                    вопроса:<a href="#ref-35"
                               class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'o na bsgom du med par gzhag tu rung ngam mi rung /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ gal te brjod gzhi yod na ni //</li>
                    <li class="my-2">sgom pa po yang yod par 'gyur //</li>
                    <li class="my-2">sems ni skye ba med bden na //</li>
                    <li class="my-2">bsgom du med par 'jog pa gang //</li>
                </ul>

                <p class="mb-3" id="citation-36"><sup>36</sup> Тибетский текст двадцатого вопроса:<a
                        href="#ref-36"
                        class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="mt-2 mb-6">/ slob dpon gyis sems bcos pa gces sam mi gces /</li>
                    <li class="my-2">/ bdag dang bcas pa'i sems ni tshad ma gzhir bzhag nas /</li>
                    <li class="my-2">/ rtsa ba ma rtogs rnam shes lo ma lta bu la /</li>
                    <li class="my-2">/ rdeng med dbang gis bcos 'dod slob dpon ma yin na //</li>
                    <li class="my-2">blo ldan ma nor tshul bzhin 'chos pa shin tu gces /</li>
                </ul>

                <p class="mb-3" id="citation-37"><sup>37</sup> Перевод ответа включает почти все
                    вставки из Данжура, чтобы сделать текст понятнее. Без вставок (и несколько
                    вольно) будет что-нибудь вроде:</p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                        <li class="my-2">Ум с Я, утверждаемый как подлинный,</li>
                        <li class="my-2">Не постиг корня; виджняна же, как листья.</li>
                        <li class="my-2">Если хочешь улучшать, исходя из такой путаницы – не
                            наставник;
                        </li>
                        <li class="my-2">Мудрый же весьма ценит улучшение безошибочным методом.</li>
                    </ul>
                </blockquote>
                <a href="#ref-37" class="text-blue-500 hover:underline">↩</a>
            </div>
        </div>

        {{-- Нижняя навигация по статье --}}
        @include('layouts.article-navigation', [
            'currentPart' => 2,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])
    </div>
@endsection
