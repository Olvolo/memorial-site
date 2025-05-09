@extends('layouts.app')
@section('title', 'Источник мудрецов. Раздел тантра. Часть вторая. Криятантра')
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
            'currentPart' => 2,
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
            (DAG YIG MKHAS PA'I 'BYUNG GNAS ZHES BYA BA LAS
            SNGAGS KYI SKOR)
        </h3>

        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <h2 class="text-center text-xl font-semibold text-blue-800 mt-6 mb-4">I КРИЯТАНТРА<br>(Bya
                ba'i rgyud)</h2>
            <p>Из этих четырех [классов тантр] в первом - <em>криятантре</em> - имеются:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">генезис татхагат (de bzhin gshegs pa'i rigs)<a href="#citation-14"
                                                                                id="ref-14"
                                                                                class="citation-mark"><sup>14</sup></a>,
                </li>
                <li class="my-2">лотосовый генезис (pad ma'i rigs),</li>
                <li class="my-2">ваджрный генезис (rdo rje'i rigs), которые суть три ушедших
                    от сансары генезиса ('jig rten las 'das pa'i rigs gsum).
                </li>
            </ol>
            <p>Если прибавить еще три не ушедших от сансары генезиса, то получим шесть:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5" start="4">
                <li class="my-2">генезис обладателя богатства (nor can gyi rigs, maṇikula),</li>
                <li class="my-2">генезис пяти игроков (lngas rtsen gyi rigs, pañcakakula),<a
                        href="#citation-15" id="ref-15" class="citation-mark"><sup>15</sup></a></li>
                <li class="my-2">мирской генезис ('jig rten pa'i rigs, laukikakula).</li>
            </ol>
            <p>Генезис татхагат подразделяется на восемь групп (sde tshan, varga):</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">глава генезиса (rigs kyi gtso bo),</li>
                <li class="my-2">хозяин генезиса (rigs kyi bdag po),</li>
                <li class="my-2">мать генезиса (rigs kyi yum),</li>
                <li class="my-2">ушниша генезиса (rigs kyi gtsug tor),</li>
                <li class="my-2">гневы (khro bo) и гневы-женщины (khro mo),</li>
                <li class="my-2">посланники и посланницы генезиса (pho nya pha mo),</li>
                <li class="my-2">входящие в состав самого генезиса бодхисаттвы (byang sems =
                    byang chub sems dpa', bodhisattva);
                </li>
                <li class="my-2">входящие в состав самого генезиса божества (lha, deva), наги
                    (klu, naga), якши (gnod sbyin, yakṣa) и др.
                </li>
            </ol>
            <p>В <em>Лотосовом</em> и <em>Ваджрном</em> генезисах имеется каждая из этих восьми
                групп.</p>
            <p>Четыре общих (spyi) <em>криятантры</em> суть:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2"><em>Саманьявидхинам гухьятантра</em> (gSang ba spyi rgyud),</li>
                <li class="my-2"><em>Сусиддхи</em> (Legs par grub pa),</li>
                <li class="my-2"><em>[Тантра] вопросов Субаху</em> (Dpung bzang gis zhus pa,
                    Subāhuparipṛccha),
                </li>
                <li class="my-2"><em>Тантра завершающего созерцания — Дхьяноттара [-тантра]</em>
                    (bSam gtan, Dhyānottara).
                </li>
            </ol>
            <p><em>Дхьяноттара [-тантра]</em> собирает весь смысл <em>криятантры</em> в следующие
                десять тем:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">характеристики мест практики (bsgrub pa, sādhana),</li>
                <li class="my-2">самопознание<a href="#citation-16" id="ref-16"
                                                class="citation-mark"><sup>16</sup></a> (bdag gi de
                    kho na nyid, ātmatattva),
                </li>
                <li class="my-2">принцип мантры<a href="#citation-17" id="ref-17"
                                                  class="citation-mark"><sup>17</sup></a> (rig
                    sngags kyi de kho na nyid),
                </li>
                <li class="my-2">познание сущности [созерцаемого] божества<a href="#citation-18"
                                                                             id="ref-18"
                                                                             class="citation-mark"><sup>18</sup></a>
                    (lha'i de kho na nyid),
                </li>
                <li class="my-2">дхьяна, находимая в огне<a href="#citation-19" id="ref-19"
                                                            class="citation-mark"><sup>19</sup></a>
                    (me la gnas pa'i bsam gtan),
                </li>
                <li class="my-2">дхьяна, находимая в звуке<a href="#citation-20" id="ref-20"
                                                             class="citation-mark"><sup>20</sup></a>
                    (sgra la gnas pa'i bsam gtan),
                </li>
                <li class="my-2">дхьяна, дарующая выход за пределы звука<a href="#citation-21"
                                                                           id="ref-21"
                                                                           class="citation-mark"><sup>21</sup></a>
                    (sgra mthar thar ba ster ba'i bsam gtan),
                </li>
                <li class="my-2">ритуал вхождения в реализацию мантры<a href="#citation-22"
                                                                        id="ref-22"
                                                                        class="citation-mark"><sup>22</sup></a>
                    (rig sngags bsgrub pa la 'jug pa'i cho ga),
                </li>
                <li class="my-2">ритуал "сжигания накопленного"<a href="#citation-23" id="ref-23"
                                                                  class="citation-mark"><sup>23</sup></a>
                    (sbyin sreg gi cho ga),
                </li>
                <li class="my-2">ритуал "дарования правомочности"<a href="#citation-24" id="ref-24"
                                                                    class="citation-mark"><sup>24</sup></a>
                    (dbang bskur gyi cho ga).
                </li>
            </ol>
            <p>
                Вышеупомянутая правомочность включает шесть компонентов:
            </p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">гирлянду цветов (me tog gi phreng ba),</li>
                <li class="my-2">воду (chu),</li>
                <li class="my-2">корону (cod pan),</li>
                <li class="my-2">ваджр (rdo rje),</li>
                <li class="my-2">колокол (dril bu),</li>
                <li class="my-2">дачу имени (ming gi dbang).</li>
            </ol>
            <p>
                Как проповедано, с опорой на предел (mtha')<a href="#citation-25" id="ref-25"
                                                              class="citation-mark"><sup>25</sup></a>
                можно связать три момента:
            </p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">первичное посвящение (lung bstan),</li>
                <li class="my-2"><em>пранаяму</em> (dbugs dpyad, задержка дыхания),</li>
                <li class="my-2">последующее разрешение [на дальнейшую тантрийскую практику] (rjes
                    gnang).
                </li>
            </ol>
            <p>
                Обет (sdom pa, saṃvara) — это только обычные обеты бодхисаттвы (thun mong ba byang
                sems kyi sdom pa tsam)<a href="#citation-26" id="ref-26" class="citation-mark"><sup>26</sup></a>.
            </p>
            <p>
                Тантрийский обет (dam tshig, samaya) — те обеты, о которых много проповедано в
                хорошо составленных (legs grub, susiddha) тантрах<a href="#citation-27" id="ref-27"
                                                                    class="citation-mark"><sup>27</sup></a>.
            </p>
            <p>
                В порядке пути [термин] дхьяна, опирающаяся на начитывание (bzlas brjod), включает в
                себя следующее, если собрать воедино то, что разделено на мантры и мудры общего
                генезиса:
            </p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">почтив Победоносных с сыновьями, самому принести жертву<a
                        href="#citation-28" id="ref-28" class="citation-mark"><sup>28</sup></a>,
                </li>
                <li class="my-2">придя к Прибежищу [Трех Драгоценностей], породить мысль (sems
                    bskyed pa) [об освобождении всех живых существ от мук сансары]<a
                        href="#citation-29" id="ref-29" class="citation-mark"><sup>29</sup></a>,
                </li>
                <li class="my-2">охранять созерцание мантрой (sngags) и мудрой (phyag rgya),</li>
                <li class="my-2">при вхождении в созерцательную комнату совершить омовение (khrus
                    bya ba),
                </li>
                <li class="my-2">войдя внутрь и приготовившись, сесть на сидение [для созерцания]
                    (stan la 'khod pa),
                </li>
                <li class="my-2">благословить жертву (mchod pa byin gyis rlabs pa),</li>
                <li class="my-2">охранять себя и место [созерцания] (bdag dang gnas bsrung ba).</li>
            </ol>
            <p>В основе своей созерцание рождения [идама] из себя<a href="#citation-30" id="ref-30"
                                                                    class="citation-mark"><sup>30</sup></a>
                (bdag
                bskyed bsgom pa, ātmaja-bhāvanā) означает совершение ритуала рождения шести божеств:
            </p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">божество [шуньевой] сущности (de kho na nyid kyi lha),</li>
                <li class="my-2">божество звука (sgra'i lha),</li>
                <li class="my-2">божество [формы] буквы (yi ge'i lha),</li>
                <li class="my-2">божество внешнего вида (gzugs kyi lha),</li>
                <li class="my-2">божество мудры (phag rgya'i lha),</li>
                <li class="my-2">божество атрибутов (mtshan ma'i lha).</li>
            </ol>
            <p>Это составляет йогическое созерцание (rnal 'byor bsgom pai). Также можно
                использовать:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">впитывание [нектара] мудрости (ye shes pa bstim pa),</li>
                <li class="my-2">посвящение-правомочность (dbang bskur ba),</li>
                <li class="my-2">символ, предложенный [для созерцания] хозяином генезиса
                    (rigs bdag gis rgyas 'debs).
                </li>
            </ol>
            <p>Реализовав «рождение» [идама] перед собою (mdun bskyed
                bsgrubs nas), совершают жертвоприношение и др., всего шесть.</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">[Мыслью] создать дворец [божества] (rten bskyed)<a
                        href="#citation-31" id="ref-31" class="citation-mark"><sup>31</sup></a>.
                </li>
                <li class="my-2">Пригласив созерцаемое божество (brten pa lha)<a href="#citation-32"
                                                                                 id="ref-32"
                                                                                 class="citation-mark"><sup>32</sup></a>,
                    просить его занять свое место (bzhugs su gsol).
                </li>
                <li class="my-2">Демонстрировать мудру (phag rgya bstan pa).</li>
                <li class="my-2">Совершать жертвоприношение и восхваление (mchod bstod bya ba).</li>
                <li class="my-2">Oсуществлять раскаяние и т.д.<a href="#citation-33" id="ref-33"
                                                                 class="citation-mark"><sup>33</sup></a>
                    (bshags sogs bya ba).
                </li>
                <li class="my-2">Cозерцать четыре безмерных (tshad med bzgi)<a href="#citation-34"
                                                                               id="ref-34"
                                                                               class="citation-mark"><sup>34</sup></a>
                    и совершать другие [акты, предписанные методом созерцания].
                </li>
            </ol>
            <p>Реальное начитывание (bzlas brjod) состоит из четырех компонентов:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Созерцать божество в себе (bdag gi gzhi)<a href="#citation-35"
                                                                            id="ref-35"
                                                                            class="citation-mark"><sup>35</sup></a>.
                </li>
                <li class="my-2">Созерцать божество во вне (gzhan gyi gzhi).</li>
                <li class="my-2">Овладеть мыслью (sems la gzhol ba).</li>
                <li class="my-2">Овладеть звуком (sgra la gzhol ba) - (см. ниже).</li>
            </ol>
            <p>В способе начитывания (bzlas pa) соблюдать два компонента:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">начитывание (bzlas brjod) с опорой на форму буквы (yi ge'i gzugs
                    la),
                </li>
                <li class="my-2">начитывание с опорой на звук (sgra la).</li>
            </ol>
            <p>Из них первое включает:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">опору на форму сердечной буквы, [созерцаемой] перед собою
                    (mdun gyi thugs kha'i yi ge'i gzugs la dmigs pa),
                </li>
                <li class="my-2">опору на форму сердечной буквы, [созерцаемой] в своем сердце (rang
                    gi snying kha'i yi ge'i gzugs la dmigs pa).
                </li>
            </ol>
            <p>Практика включает три компонента:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">десять тем — характеристики мест практики (mtshan ma) [16: 11],</li>
                <li class="my-2">время (dus — время суток и продолжительность созерцания),</li>
                <li class="my-2">практика [начитывания определенного] количества [мантр] (grangs kyi bsnyen pa).</li>
            </ol>
            <p>Начитывание включает три вида <em>дхьяны</em> не-мышления (mi ltos pa = ma brtags ma
                dpyad):</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2"><em>дхьяну,</em> находимую в огне (me la gnas pa'i bsam gtan),</li>
                <li class="my-2"><em>дхьяну,</em> находимую в звуке (sgra la gnas pa'i bsam gtan),</li>
                <li class="my-2"><em>дхьяну,</em> дарующую выход за пределы звука (sgra mthar thar pa ster pa'i bsam gtan).</li>
            </ol>
            <p>В общем, пути <em>крия-</em> и <em>чарья-</em>[тантр] собирают в три составляющих:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">тело [божества] — это практика Махамудры (sku phyag rgya chen po bsgom pa),</li>
                <li class="my-2">речь [божества] — практика начитывания мантр (gsung sngags bsgom pa),</li>
                <li class="my-2">мысль [божества] — практика созерцания таковости (thugs de kho na nyid bsgom pa).</li>
            </ol>
            <p>В завершение практики обретаются сиддхи, для каждого из трех генезисов одни и те
                же:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">начальные (rab),</li>
                <li class="my-2">средние ('bring),</li>
                <li class="my-2">завершающие (tha ma) и [для каждого из трех:]
                <ul class="list-disc pl-5 space-y-1 ml-8">
                    <li class="my-2">спокойные (zhi ba),</li>
                    <li class="my-2">полные (rgyas pa),</li>
                    <li class="my-2">суровые (drag po).</li>
                </ul>
                </li>
            </ol>
            <p>Сиддхи (dngos grub) имеют следующие подразделения:</p>
            <p>а) по природе:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">начальные (rab),</li>
                <li class="my-2">средние ('bring),</li>
                <li class="my-2">завершающие (tha ma);</li>
            </ol>
            <p>б) по признаку (rtags):</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">огненные (me),</li>
                <li class="my-2">дымовые (du ba),</li>
                <li class="my-2">тепловые (drod);</li>
            </ol>
            <p>в) по основе (gzhi):</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">телесные (lus),</li>
                <li class="my-2">вещественные (rdzas),</li>
                <li class="my-2">имущественные (longs spyod).</li>
            </ol>
            <p>По рецитатору-проповеднику (gsung ba po) мантры подразделяются:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">на благородные ('phags pa)</li>
                <li class="my-2">на божественные (lha),</li>
                <li class="my-2">на мантры бодхисаттв высокой степени (sa bla'i sngags).</li>
            </ol>
            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">
            <!-- Примечания -->
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>

                <p class="my-2" id="citation-14"><sup>14</sup> Слово «генезис» определяется в Ганджуре так (цит. по 12: 1180):
                    dang bo de las byung ba dang || bar du de yi bya ba byed || tha mar de yi rgyud
                    'dzin phyir ||<br>
                    Перевод: Во-первых, — [это] то, что дает начало; во-вторых, — то, чему
                    служат; в-третьих, — то, чьей линии придерживаются, — потому [генезис].<a href="#ref-14"
                                                                        class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-15"><sup>15</sup> Паньчика (pañcika) — это генезис Куверы, бога богатства.<a href="#ref-15" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-16"><sup>16</sup> Ātma, bdag — «я», личность (= gang zag); tattva — принцип, сущность. Поскольку сущность всего есть шунья, термин de kho na nyid, tattva,
                    равнозначен термину stong nyid; śūnytā. Поэтому данное выражение следует понимать как «самопознание» в смысле необходимости признания того
                    факта, что принцип личности есть шунья, не существует никакого «эго».
                    Отказ от веры «я» и есть основа, на которой зиждется тантра, как, впрочем,
                    и всё буддийское учение.<a href="#ref-16" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-17"><sup>17</sup> Термин rig sngags употреблен здесь вместо обычного sngags — мантра. Строго говоря, rig sngags является более точным переводом санскритского man-tra, так как man означает ум (rig = shes = yid), а -tra означает деяние (= sngags). Таким образом, «мантра» означает «деяние в уме», что точно
                    определяет природу мантр. В мантру обычно, хотя и не всегда, помимо мистических слогов, символика которых раскрывается в особых посвящениях,
                    входят обычные значимые слова, однако значение этих слов не является определяющим для ума йогина. Предполагается, что само произнесение мантры
                    должно оказывать влияние на ум, настраивать его на определенную волну,
                    частоту, создавать новый принцип его функционирования. В ритме мантры
                    ум направляется на созерцаемый объект.<a href="#ref-17" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-18"><sup>18</sup> Объектом созерцания в тантре является тантрийское божество yi dam
                    (или lha). При чтении мантры внимание ищущего направляется именно на него — его внешний вид, цвет, украшения, положение рук и ног, атрибуты
                    и значение всего вышеперечисленного, а также функции атрибутов. Всё это
                    постепенно уясняется, усваивается, пока не переходит в собственно созерцание — <em>дхьяну</em>. Опорой такого уяснения служат тексты типа mngon rtogs.<a
                        href="#ref-18" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-19"><sup>19</sup> При таянии холодного ума в огне
                    медитации находят подлинное сосредоточение — дхьяну.<a href="#ref-19" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-20"><sup>20</sup> Опору для подлинного сосредоточения находят также в звуке, в самом произнесении звуков мантры в определенном ритме и количестве. Этот
                    процесс по-тибетски определяется термином bzlas pa, санскр. Japa — повторение, рецитация [14: 28а; 8: л. 65а].<a href="#ref-20" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-21"><sup>21</sup> При начитывании мантр в большом количестве (сотни тысяч и миллионы) в уме остается лишь ритм мантры, как бы фон, на котором проходит
                    созерцание.<a href="#ref-21" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-22"><sup>22</sup> Реализация мантры есть реализация смысла, заложенного в ней. Так
                    на определенной ступени йогического созерцания наступает период реализации мантрической буквы ХУМ. Опишем вкратце этот процесс, называемый «йога долгого ХУМ» (см. прим. 146). Шесть частей этой сложной буквы символизируют пять Дхьянибудд и Ваджрадхару. Йогин, практикующий
                    йогу долгого ХУМ, в этом символе видит неразличимость, тождественность
                    блаженства и шуньи. Он должен верить в то, что произнесение буквы ХУМ
                    разрушает причину страдания всех живых существ, ибо звук ХУМ вызывает движение всех пяти Дхьянибудд, которые своими мудростями вводят
                    двойственность феноменального мира в единство, или в Ваджрадхару. Этим
                    он достигает недвойственности в воззрениях и увеличивает собрание добрых деяний, которые являются причиной блаженства нирваны.<a
                        href="#ref-22" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-23"><sup>23</sup> В процессе длительного созерцания накапливаются ошибки в самом созерцании и в произнесении мантры. Для нейтрализации вредных
                    последствий накопленных ошибок и существует этот ритуал. Он служит
                    как бы катализатором для превращения количества в качество. Существует
                    множество разновидностей этого ритуала; в самом общем виде он изложен
                    в тексте [15: л. 1 – 3].<a href="#ref-23" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-24"><sup>24</sup> Чтобы иметь право на тантрийскую практику считается необходимым получение посвящения или, иначе, правомочности (dbang или dbang
                    bskur, abhiṣeka) от Учителя, который реализовал все то, чему он собирается учить. Эта дача посвящения сопровождается определенным ритуалом.
                    Вначале на определенном месте, часто на возвышении, порошковыми
                    красками либо иным способом рисуется дворец-мандала (dkyil 'khor) божества, в которое посвящается ищущий. После целого ряда символических действий ищущий бросает на изображение цветок, и в зависимости
                    от того, куда и как упадет этот цветок, делается заключение о том, каковы
                    задачи ученика и т.д. (me tog gi phreng ba'i dbang). Затем лоб или темя
                    ищущего смачивают водою из ритуального кувшина (bum pa) как знак получения им нектара проповеди (chu'i dbang) и совершаются иные ритуалы. Впрочем, дача правомочности может происходить и без внешней ритуальности — так называемая мистическая дача правомочности (см. ниже
                    в разделе «Ануттарайогатантра»).<a href="#ref-24" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-25"><sup>25</sup> Имеется в виду предел правомочности, устанавливаемый при даче
                    посвящения.<a href="#ref-25" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-26"><sup>26</sup> sdom pa, saṃvara (yāma, niyāma) — обычные нравственные обязательства на пути бодхисаттв, в отличие от dam tshig, samaya — тантрийских обетов.<a href="#ref-26" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-27"><sup>27</sup> Количество и характер обетов варьируется в зависимости от того,
                    к какой тантрийской системе они относятся.<a href="#ref-27" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-28"><sup>28</sup> Это первый и второй члены семичленной молитвы (smon lam yan
                    lag bdun):<a href="#ref-28" class="text-blue-500 hover:underline">↩</a></p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">phyag 'tshal ba — поклонение,</li>
                    <li class="my-2">mchod pa — жертвоприношение.</li>
                </ol>
                <p>
                    Первым из них человек освобождается от ложной гордости и стремится
                    обрести достоинство на пути совершенствования, вторым — от жадности.
                </p>
                <p class="my-2" id="citation-29"><sup>29</sup> Эти два компонента вхождения в созерцание носят название «символ веры» (skyabs 'gro) и «рождение мысли» (sems bskyed). В наиболее общем виде они представлены в следующей строфе: || dkon mchog gsum la
                    skyabs su 'gro || sems can thams cad bdag gis sgrol || byang chub gnas la 'god par
                    bgyi || byang chub sems ni yang dag bskyed ||<a href="#ref-29" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>
                    Эта формула для троекратного повторения приводится в начале большинства садхан (sgrub thabs) и самых различных ритуалов. Как правило,
                    за нею следуют «четыре безмерных» (tshad med bzhi) — дружелюбие, милосердие, радость и равное отношение ко всем. Эти две шлоки настолько
                    известны, что часто они лишь называются: skyabs 'gro sems bskyed tshad
                    med bzhi bsgom [16: л. 1].
                </p>
                <p class="my-2" id="citation-30"><sup>30</sup> В тексте [17: л. 2 – 3], взятом мною для примера, эта практика
                    «рождения шести божеств» описывается следующим образом:<a href="#ref-30" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2"> Вначале йогин чтением особой мантры вызывает у себя глубокое
                        переживание шуньи, созерцая превращение всех дхарм в шуньевые, затем</li>
                    <li class="my-2">в сопровождении собственного звука из шуньевого пространства возникает</li>
                    <li class="my-2"> зародышевая буква духовности йогина (rang gi sems nyid) — принцип сознания личности, из которой вырастает</li>
                    <li class="my-2">«тело» созерцаемого идама. Описание внешнего вида его завершается описанием</li>
                    <li class="my-2"> мудр его рук и</li>
                    <li class="my-2">атрибутов в них.</li>
                </ol>
                <p class="my-2" id="citation-31"><sup>31</sup> См. 1: VI, 859: rten gzhal yas khang lta bu ste ||<a href="#ref-31" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-32"><sup>32</sup> Там же: brten pa bcud sems can || Вообще термин bcud kyi sems can
                    означает созерцаемых живых существ в отличие от snod kyi sems can — сансарных живых существ. Ср. 18: л. 3б.<a href="#ref-32" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-33"><sup>33</sup> О первых двух членах семичленной молитвы см. прим. 28.<a href="#ref-33" class="text-blue-500 hover:underline">↩</a></p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5 start-3">
                    <li class="my-2">bshags pa — раскаяние,</li>
                    <li class="my-2">rjes su yi rang ba — [результативная] радость,</li>
                    <li class="my-2">chos 'khor bskor bar bskul ba — призыв к вращению колеса дхармы
                        (просьба о проповеди),</li>
                    <li class="my-2">mya ngan las mi 'da' bar gsol ba 'debs pa — просьба к Учителю, буддам не покидать сансару (не уходить в нирвану) ради блага живых
                        существ,</li>
                    <li class="my-2">bsngo ba — устремление всех своих помыслов к достижению высочайших бодхи.</li>
                </ol>
                <p class="my-4" id="citation-34"><sup>34</sup> См. прим. 29, где перечислены четыре безмерных.
                    <a href="#ref-34" class="text-blue-500 hover:underline">↩</a></p>
                <p>
                    Полный текст следующий:
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">sems can thams cad bde ba dang bde ba'i rgyu dang ldan par gyur cig ||</li>
                    <li class="my-2">sems can thams cad sdug bsngal dang sdug bsngal gyi rgyu dang 'bral bar gyur cig ||</li>
                    <li class="my-2">sems can thams cad sdug bsngal med pa'i bde ba dang mi 'bral bar gyur cig ||</li>
                    <li class="my-2">sems can thams cad nye ring chags sdang gnyis dang bral ba'i btang snyoms la gnas par gyur cig||</li>
                </ol>
                <p class="my-2">
<em>Перевод:</em>
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">Пусть все живые существа пребывают в блаженстве и с причиной к нему!</li>
                    <li class="my-2">Пусть все живые существа пребывают без страдания и без причины к нему!</li>
                    <li class="my-2">Пусть все живые существа пребывают в блаженстве, лишенном страданий, и не расстанутся с ним!</li>
                    <li class="my-2">Пусть все живые существа не имеют мысли любить близких, ненавидеть чужих, но имеют мысли, равные для всех!</li>
                </ol>
                <p class="my-3" id="citation-35"><sup>35</sup> rang lhar sgom pa bdag gi gzhi || [1: 714 – 715].<a href="#ref-35" class="text-blue-500 hover:underline">↩</a></p>
            </div>
        </div>

        <!-- Разделительная черта -->
        <hr class="my-8 border-t-4 border-gray-500">
        <!-- Нижняя навигация -->
        @include('layouts.article-navigation', [
            'currentPart' => 2,
            'totalParts' => 7,
            'routeName' => 'pupishev_articles.source_of_sages',
            'articleTitle' => 'статьи'
        ])    </div>
@endsection
