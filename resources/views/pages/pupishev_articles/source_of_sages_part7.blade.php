@extends('layouts.app')
@section('title', 'Источник мудрецов. Раздел тантра. Часть седьмая. Ануттарайогатантра (Часть 3)')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url('{{ asset("backgrounds/salad_blue.webp") }}');
            background-attachment: fixed;
            background-size: cover;
        }

        svg {
            display: block;
            max-width: 95%;
            height: auto;
        }

        img[src$=".svg"] {
            display: block;
            max-width: 95%;
            height: auto;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Верхняя навигация -->
        @include('layouts.article-navigation', [
            'currentPart' => 7,
            'totalParts' => 7,
            'routeName' => 'pupishev_articles.source_of_sages',
            'articleTitle' => 'статьи'
        ])        <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-3xl md:text-3xl mt-6 mb-6">
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
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <h2 class="text-center text-xl font-semibold text-blue-800 mt-6 mb-4">IV.
                АНУТТАРАЙОГАТАНТРА<br>(rNal 'byor bla na med rgyud)</h2>
            <h3 class="text-center text-gray-700 italic text-lg sm:text-xl md:text-xl mb-8">
                (Часть третья)
            </h3>
            <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
                <h2 class="text-xl font-bold mt-6 mb-4">Второе: Ступень завершения (rdzogs pa'i rim
                    pa)</h2>

                <h3 class="text-lg font-semibold mt-4 mb-2">Степень завершения в традиции
                    <em>Арья</em><sup><a href="#citation-132" id="ref-132"
                                         class="citation-mark">132</a></sup> включает шесть этапов
                    (rim pa):</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">тело пустынное (lus dben),</li>
                    <li class="my-2">речь пустынная (ngag dben),</li>
                    <li class="my-2">мысль пустынная (sems dben),</li>
                    <li class="my-2">иллюзорное тело (sgyu lus),</li>
                    <li class="my-2">ясный свет ('od gsal),</li>
                    <li class="my-2">вхождение в единство (zung 'jug).</li>
                </ol>

                <p>Но если объединить первые два этапа, получится пять.</p>

                <h3 class="text-lg font-semibold mt-4 mb-2">В традиции <em>Джнянапады</em> (Ye shes
                    zhabs, Jñānapāda) имеется
                    четыре специфических признака (thig le, tilaka):</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">признак неразрушимости (mi shigs pa'i thig le),</li>
                    <li class="my-2">признак воплощения (sprul pa'i thig le),</li>
                    <li class="my-2">признак мантры (sngags kyi thig le),</li>
                    <li class="my-2">признак реальности (de kho na nyid kyi thig le).</li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2">В степени завершения <em>Махачакры</em>
                    ('khor lo chen po)<sup><a href="#citation-133" id="ref-133"
                                              class="citation-mark">133</a></sup> имеется четыре
                    благословения (byin brlab):</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">благословение тела (lus),</li>
                    <li class="my-2">благословение речи (ngag),</li>
                    <li class="my-2">благословение мысли (sems),</li>
                    <li class="my-2">благословение реальности (de kho na nyid).</li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2">В [системы] <em>Красного, Черного и
                        Устрашающего [Ямантаки]</em> входят четыре типа йоги:</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">мантрайога (sngags kyi rnal 'byor),</li>
                    <li class="my-2">йога обета (dam tshig gi rnal 'byor),</li>
                    <li class="my-2">йога формы (dbyibs kyi rnal 'byor),</li>
                    <li class="my-2">йога чистой джняны (rnal dag ye shes kyi rnal 'byor).</li>
                </ol>

                <h2 class="text-xl font-bold mt-6 mb-4"><em>Самвара</em> (bDe mchog, Saṃvara):</h2>

                <h3 class="text-lg font-semibold mt-4 mb-2"><em>Традиция Луивы</em> (lu hi
                    pa)<sup><a href="#citation-134" id="ref-134" class="citation-mark">134</a></sup>
                    включает три [элемента]:</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">способ сведения сознания в пространство «нада» (sgra =
                        nāda) центральной [буквы] (lte ba'i sprin sgra la sems gtor tshul);
                    </li>
                    <li class="my-2">способ исполнения рецитации [с появлением] из этого
                        [пространства] ваджра (de las rdor bzlas bya tshul);
                    </li>
                    <li class="my-2">знак руки (lag rjes)<sup><a href="#citation-135" id="ref-135"
                                                                 class="citation-mark">135</a></sup>.
                    </li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2">В <em>традиции Гхантапады</em> (Dril bu
                    pa, Ghaṇṭāpāda) пять этапов:</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">благословить себя (bdag byin brlab),</li>
                    <li class="my-2">вселенский ваджр (sna tshogs rdo rje),</li>
                    <li class="my-2">наполнить чинтамани (nor bu 'gengs pa),</li>
                    <li class="my-2">этап «джаландхара» (dza landha ra, jalandhara)<sup><a
                                href="#citation-136" id="ref-136"
                                class="citation-mark">136</a></sup>,
                    </li>
                    <li class="my-2">этап неохватной мысли (bsam mi khyab pa'i rim pa).</li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2"><em>Чакрасамбхара</em> (bDe dgyes; иначе
                    – 'Khor lo sdom pa).</h3>

                <p>Степень общего завершения — шесть наставлений Наропы (thun mong ba'i rdzogs rim
                    na ro chos drug)<sup><a href="#citation-137" id="ref-137" class="citation-mark">137</a></sup>:
                </p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">мистическая теплота йоги (gtum mo)<sup><a href="#citation-138"
                                                                               id="ref-138"
                                                                               class="citation-mark">138</a></sup>,
                    </li>
                    <li class="my-2">ясный свет ('od gsal)<sup><a href="#citation-139" id="ref-139"
                                                                  class="citation-mark">139</a></sup>,
                    </li>
                    <li class="my-2">иллюзорное тело (sgyu lus)<sup><a href="#citation-140"
                                                                       id="ref-140"
                                                                       class="citation-mark">140</a></sup>,
                    </li>
                    <li class="my-2">промежуточное состояние (bar do),</li>
                    <li class="my-2">перемещение ('pho ba),</li>
                    <li class="my-2">вселение в дом (grong 'jug) итого пять<sup><a
                                href="#citation-141" id="ref-141"
                                class="citation-mark">141</a></sup>.
                    </li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2"><em>Калачакра:</em></h3>

                <p>Ступень завершения Шестичленной йоги Шри-Калачакры
                    (dPal dus kyi 'khor lo'i sbyor ba yan lag drug gi rdzogs rim):</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">пратьядхара (so sor sdud pa) — уравновешенность,</li>
                    <li class="my-2">дхьяна (bsam gtan) — сосредоточенность,</li>
                    <li class="my-2">пранаяма (srog rtsol) — энергичность,</li>
                    <li class="my-2">дхарана ('dzin pa) — единонаправленность ума,</li>
                    <li class="my-2">анусмрити (rdzhes dran) — постоянство ума,</li>
                    <li class="my-2">самадхи (ting nge 'dzin) — глубинное вхождение, или глубокое
                        сосредоточение.
                    </li>
                </ol>
                <p>
                    Таковы шесть ступеней [йоги].
                </p>
                <p>Для реализации этой [степени завершения применяют] два преимущественных (gtso bo)
                    метода:</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">махамудра с опорой на шуньевую форму (dmigs bcas stong gzugs
                        phyag rgya chen po),
                    </li>
                    <li class="my-2">безопорное непревосходимое великое блаженство (dmigs med mchog
                        tu mi 'gyur ba'i bde ba chen po).
                    </li>
                </ol>

                <h2 class="text-xl font-bold mt-6 mb-4">Вхождение в конечную реальность (nye rgyu
                    spyod pa)<sup><a href="#citation-142" id="ref-142" class="citation-mark">142</a></sup>
                    включает:</h2>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">движение с опорой на цель (spros bcas)<sup><a
                                href="#citation-143" id="ref-143"
                                class="citation-mark">143</a></sup>,
                    </li>
                    <li class="my-2">движение без опоры на цель (spros med)<sup><a
                                href="#citation-144" id="ref-144"
                                class="citation-mark">144</a></sup>,
                    </li>
                    <li class="my-2">абсолютно независимое вхождение (shin tu spros med gyi spyod
                        pa).
                    </li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2">Элементы йогической садханы (las bsgrub
                    pa, sādhana):</h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">реализация через определенное количество рецитаций (bzlas pa
                        tsam gyis sgrub pa),
                    </li>
                    <li class="my-2">реализация через определенное количество дхьян (bsam gtan tsam
                        gyis sgrub pa),
                    </li>
                    <li class="my-2">реализация через [применение специальных] веществ (rdzas gyis
                        sgrub pa),
                    </li>
                    <li class="my-2">реализация методом янтры ('khrul 'khor; yantra)<sup><a
                                href="#citation-145" id="ref-145"
                                class="citation-mark">145</a></sup>,
                    </li>
                    <li class="my-2">реализация методом "сжигания накопленного" (sbyin sreg gi sgo
                        nas sgrub pa) и другие [элементы реализации], но в каждом из них имеются
                        [деяния] спокойные (zhi), распространяющиеся (rgyas), могущественные (dbang)
                        и суровые (drag) по четыре в каждом.
                    </li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2">Восемь великих достижений (grub chen
                    brgyad; grub = grub pa = dngos grun = siddhi)<sup><a href="#citation-146"
                                                                         id="ref-146"
                                                                         class="citation-mark">146</a></sup>:
                </h3>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">магические пилюли [вечной молодости] (ril bu),</li>
                    <li class="my-2">лекарство для глаз [для видения внутренней сущности вещей] (mig
                        sman),
                    </li>
                    <li class="my-2">способность прохождения через любые материальные преграды
                        [благодаря постижению шуньи всего познаваемого] (sa 'og),
                    </li>
                    <li class="my-2">меч чародея (ral gri),</li>
                    <li class="my-2">способность левитации (nam mkhar 'phur ba),</li>
                    <li class="my-2">невидимость (mi snang ba),</li>
                    <li class="my-2">бессмертие ('chi ba med pa),</li>
                    <li class="my-2">победа над болезнями (nad 'joms pa).</li>
                </ol>

                <h3 class="text-lg font-semibold mt-4 mb-2">Высшее достижение (mchog gi dngos
                    grub)</h3>

                <p> - это достоинство Ваджрадары, обладающего семью соединениями беспрепятственного
                    (mi
                    slob pa'i) вхождения в единство (mi slob pa'i zung
                    'jug kha sbyor yan lag bdun ldan rdo rje 'chang gi go 'phang)<sup><a
                            href="#citation-147" id="ref-147"
                            class="citation-mark">147</a></sup>.
                    В ту примерную (rags) терминологию, которая здесь изложена, не вошли по большей
                    части запретные (dgag bya) термины, касающиеся сокровенных вещей.</p>

                <p>Здесь собрана терминология, вытекающая из трактатов колесницы Тайной Тантры.</p>

                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">

                <div class="citations mt-4 text-lg">
                    <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                        ПРИМЕЧАНИЯ</h4>

                    <p class="my-2" id="citation-132"><sup>132</sup> Одна из двух основных традиций
                        тантры Гухьясамаджи. Само
                        слово арья ('dus 'phags, āryāḥ) значит «святые», «подвижники». Вторая
                        традиция — традиция Джнянапады.<a href="#ref-132"
                                                          class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-133"><sup>133</sup> Эту традицию хорошо
                        характеризует ее «печать» — «Печать Мудрости вхождения в [осуществление]
                        Великого Цикла» ('khor lo chen por
                        'jug pa'i phyag rgya). Махачакра — один из идамов ануттарайогатантры.
                        Относится к материнским тантрам.<a
                            href="#ref-133" class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-134"><sup>134</sup> Обычно имя этого йога
                        по-тибетски пишут Lu yi pa.<a href="#ref-134"
                                                      class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-135"><sup>135</sup> Sumatiratna [1: VII, 963 – 964]
                        поясняет этот термин следующим
                        образом: sems dmigs pa las mi gyeng bar gar bzhag tu lhun lhan sdod pa ni
                        zhi
                        gnas kyi ... lag rjes |<a href="#ref-135"
                                                  class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p>
                        <em>Перевод:</em> Пребывание внутри себя в совместности [разума и шуньи]
                        при непоколебимой направленности ума есть знак обретения шаматхи,
                        «успокоения ума».
                    </p>
                    <p class="my-2" id="citation-136"><sup>136</sup> Технический термин из "языка
                        Даков", переводу не подлежит. В тибетском и монгольском текстах также
                        оставлен без перевода.<a href="#ref-136"
                                                 class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-137"><sup>137</sup> Na ro или Na ro pa —
                        Narottamapāda, один из 84-х великих йогов (махасиддхов) Индии. Его биография
                        переведена на английский язык
                        Г. В. Гюнтером [11].<a href="#ref-137"
                                               class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-138"><sup>138</sup> См. прим. 12.<a href="#ref-138"
                                                                                     class="text-blue-500 hover:underline">↩</a>
                    </p>

                    <p class="my-2" id="citation-139"><sup>139</sup> Сияние знания реальности
                        вследствие постижения шуньи. Различают: а) первые проблески знания (dpei 'od
                        gsal) и б) истинное постижение шуньи через реализацию вместерожденного
                        блаженства тождества разума и шуньи; это состояние носит название don gyi
                        'od gsal [1: VII, 801 – 802].<a href="#ref-139"
                                                        class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-140"><sup>140</sup> Не имеющее материального
                        эквивалента тело периода реализации пути Самбхогакаи.<a href="#ref-140"
                                                                                class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-141"><sup>141</sup> Шесть наставлений Наропы здесь
                        названы пятью не вследствие
                        ошибки либо описки, но потому, что пятое и шестое составляют единый
                        неразрывный процесс — перемещение ('pho ba) перемещаемой <em>виджняны</em>
                        ('pho bya = rnam shes) в дом тела ('pho ba ... grong 'jug), что созерцается
                        в период реализации пути нирманакаи. Согласно 1: VI, 346, термин
                        «перемещение в дом тела» означает то же, что и «Шесть наставлений Наропы»,
                        а также «Шесть наставлений йогини Нигумы» (Ni gu chos drug).<a
                            href="#ref-141" class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-142"><sup>142</sup> Или "движение к конечной
                        реальности". См. прим. 63.<a href="#ref-142"
                                                     class="text-blue-500 hover:underline">↩</a></p>
                    <p class="my-2" id="citation-143"><sup>143</sup> Saprapañca — с распространением
                        [целенаправленности на деятельность]. Необходимый элемент в практике
                        Кармамудры.<a href="#ref-143" class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-144"><sup>144</sup> Viprapañca — без
                        распространения [целенаправленности на деятельность]; глубокое медитативное
                        погружение. Более подробно о значении
                        этих терминов см. 1: VII, 78 – 79.<a href="#ref-144"
                                                             class="text-blue-500 hover:underline">↩</a>
                    </p>

                    <p class="my-2" id="citation-145"><sup>145</sup> Янтра — диаграмма для
                        созерцания. Существует три вида янтр:
                        янтры щита (go cha), янтры устрашающие ('jigs pa) и янтры железной стрелы
                        (lcags mda'i 'khrul 'khor) [1: VII, 256].<a href="#ref-145"
                                                                    class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-146"><sup>146</sup> Восемь обычных сиддх (dngos
                        grub; siddhi).<a href="#ref-146" class="text-blue-500 hover:underline">↩</a>
                    </p>

                    <p class="my-2" id="citation-147"><sup>147</sup> Семь соединений — пять
                        дхьянибудд, Ваджрасаттва и Ваджрадхара. Соединив шесть частей в одно и
                        приняв это одно в качестве седьмой
                        части соединения, получаем букву-знак: ХУМ.<a href="#ref-147"
                                                                      class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <div class="flex justify-center">
                        <figure class="rounded-lg shadow-md text-center mb-4 w-full max-w-4xl">
                            <img src="{{ asset('images/HUM_with_titles_opt.svg') }}"
                                 alt="Начертание буквы ХУМ с обозначением пяти Дхьянибудд и Ваджрадары"
                                 class="rounded-lg w-full h-auto mx-auto px-4 object-contain transition-all duration-300 ease-in-out">

                            <figcaption
                                class="mt-4 mb-4 italic text-gray-800 text-lg">
                                Начертание буквы ХУМ с обозначением пяти Дхьянибудд и Ваджрадары<br>
                                (ниже перечислены в порядке «свертки»)
                            </figcaption>
                        </figure>
                    </div>
                    <ul class="list-none pl-5 space-y-1 ml-8">
                        <li class="my-2">I. Амогхасиддхи (тиб. don yod grub pa — «безошибочно
                            достигающая
                            цели») — Мудрость, осуществляющая карму;
                        </li>
                        <li class="my-2">II. Амитабха (тиб. 'od dpag med — «безграничный свет») —
                            Различающая
                            Мудрость (Мудрость, различающая все вещи по отдельности);
                        </li>
                        <li class="my-2">III. Ратнасамбхава (тиб. rin chen 'byung nas — «рожденный
                            из драгоценности») — Мудрость равного содержания;
                        </li>
                        <li class="my-2">IV. Акшобья (тиб. mi bskyod pa — «нерушимый, неколебимый»)
                            — Мудрость Дхармового пространства;
                        </li>
                        <li class="my-2">V. Вайрочана (тиб. rnam par snang mdzad — «полностью
                            сияющий») —
                            Зерцалоподобная Мудрость;
                        </li>
                        <li class="my-2">VI. Ваджрадара (тиб. rdo rje 'dzin pa, rdo rje chang —
                            Держатель Ваджра) — Адибудда.
                        </li>
                    </ul>
                </div>

                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">

                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ИСТОЧНИКИ И ЛИТЕРАТУРА</h4>

                <p class="my-2">В настоящий перечень входят названия лишь тех работ, на которые
                    автор перевода непосредственно ссылается. Перечислить все использованные
                    источники представляется автору невозможным.</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2"><em>Sumatiratna</em>. (Лувсанринчен = Ринчен Номтоев, 1821 –
                        1907). Bod hor
                        gyi brda yig ming tshig don gsum gsal bar byed pa mun sel sgron me bzhugs
                        so. Corpus Scriptorum Mongolorum. Тomus VI – VII. Улаан-Баатар: Улсын
                        Хэвлэл, MCMLIX.
                    </li>
                    <li class="my-2"><em>Рерих Ю. Н.</em> Тибетский язык. — М.: Изд-во вост. лит.,
                        1961. — 154 с.
                    </li>
                    <li class="my-2"><em>Tsepak Rigzin.</em> Tibetan-English Dictionary of Buddhist
                        Terminology. —
                        Dharamsala: Library of Tibetan Works and Archives, 1986. –– 479 с.
                    </li>
                    <li class="my-2"><em>Дхармакирти.</em> Обоснование чужой одушевленности с
                        толкованием
                        Винитадэва / Пер. с тибетского Ф. И. Щербатского. — Петербург: Российская
                        Академия Наук, 1922. — 79 с. (Репринтное издание: СПб.: Изд-во «Ясный Свет»,
                        1992.)
                    </li>
                    <li class="my-2"><em>Govinda Anagarika.</em> Tantric Buddhism // 2500 Years of
                        Buddhism /
                        Ed. by P. V. Bapat. — Delhi: Publication Devision, Ministry of Information
                        and
                        Broadcasting, Governmrnt of India, 1964. — P. 312 – 328.
                    </li>
                    <li class="my-2"><em>Радхакришнан C.</em> Индийская философия. Т. I, II / Пер. с
                        английского. — М.: Изд-во иностранной лит-ры, 1956 – 1957. — 624 с.
                    </li>
                    <li class="my-2"><em>Guenther H. V.</em> Mantrayāna and Sahajayāna // 2500 Years
                        of Buddhism /
                        Ed. by P. V. Bapat. Delhi: Publication Devision, Ministry of Information
                        and Broadcasting, Governmrnt of India, 1964. –– P. 328 – 332.
                    </li>
                    <li class="my-2"><em>Tsong kha pa.</em> dPal rdo rje 'jigs byed lha bcu gsum
                        ma'i sgrub pa'i thabs |
                        rin po che'i za ma tog zhes bya ba bzhugs so. Рукопись, 80 л.
                    </li>
                    <li class="my-2"><em>sNa tshogs rang grol.</em> Snyan brgyud kyi rgyab chos chen
                        mo zab don gnad
                        kyi me long zhes bya ba bzhugs so. Ксилограф. Б.м., б.г
                    </li>
                    <li class="my-2"><em>Blo bzang dpal ldan chos dpal.</em> Rgyud thams cad kyi
                        rgyal po dpal gsang
                        ba 'dus pa'i rtsa ba'i rgyud kyi sgron ma rab tu gsal bar byed pa'i rgya
                        cher bshad
                        pas 'chad pa las le'u dang po rgya cher bshad pa zhugs so. Ксилограф, 106 л.
                    </li>
                    <li class="my-2">The Life and Teaching of Nāropa // Transl. and comm.
                        by H. V. Guenther. –– Oxford: Clarendon Press, 1963. –– xiii + 292 с.
                    </li>
                    <li class="my-2"><em>Das Sarat Chandra.</em> A Tibetan-English Dictionary. ––
                        Alipore: West
                        Bengal Govt., 1960. –– 1354 c.
                    </li>
                    <li class="my-2"><em>Wayman A.</em> Yoga of the Guhyasamājatantra. — New York:
                        Samuel
                        Weiser, Inc., 1977. –– xii + 388 с.
                    </li>
                    <li class="my-2">dPal gsang ba 'dus pa'i bdag bskyed ngag 'don bkra shis lhun
                        po'i rgyud
                        pa grwa tshang gi 'don rgyun la rje thams cad mkhyen pas zhus ngag mdzad pa
                        bzhugs so. Ксилограф издания монастыря Ташилхунпо, 32 л.
                    </li>
                    <li class="my-2">Anagarika Govinda. Tantric Buddhism. В кн. 2500 Years of
                        Buddhism, Delhi, 1964, pp. 312-328.
                    </li>
                    <li class="my-2">bsNyen pa'i kha bskong gi sbyin bsreg nyung du bsdus ming
                        'khyer bder
                        bkod pa rin po che'i phreng ba zhes bya ba bzhugs so. Ксилограф малого
                        формата, 3 л. Без имени автора.
                    </li>
                    <li class="my-2"><em>Дхармаваджра.</em> Skyabs 'gro'i nyams len rgyun 'khyer
                        zhes bya ba
                        bzhugs so. Ксилограф, 2 л.
                    </li>
                    <li class="my-2"><em>Дхармабхадра.</em> 'Jam dpal nag po'i bsgom bzlas bzhugs
                        so. Ксилограф,
                        4 л.
                    </li>
                    <li class="my-2">Gsang 'dus byed pa. Рукопись. 4 л.</li>
                    <li class="my-2">Труды по востоковедению. T. II1: Ученые записки Тартуского
                        государственного университета = Acta et Commentationes Universitatis
                        Tartuensis.
                        Вып. 309. —Тарту, 1973.
                    </li>
                    <li class="my-2">dPal gsang ba 'dus pa'i rtsa rgyud bzhugs so. Ксилограф, 93 л.
                        (гл. I –
                        XII). То же на санскрите (гл. I – XVIII): Guhyasamājatantra or
                        Tathāgataguhyaka / Ed. by B. Bhattacharya. Guhyasamājatantra or
                        Tathāgataguhyaka. ––
                        Baroda: Oriental Institute, 1931. (Gaekwards Oriental Series 53).
                    </li>
                    <li class="my-2"><em>Рерих Ю. Н.</em> Избранные труды. — М.: Изд-во «Наука».
                        Главн. ред.
                        вост. лит., 1967. — 574 с.
                    </li>
                    <li class="my-2">dPal 'dus kyi 'khor lo'i sa chog gi bum pa lhag gnas bya ba bum
                        pa sgrub
                        tshul gyi 'don sgrig gi rim pa bzhugs so. Рукопись, 14 л.
                    </li>
                    <li class="my-2"><p>Bla ma mchod pa'i cho ga bzhugs so. Ксилограф малого
                            формата, 35 л.</p>
                        <p class="my-2">(<em>Примечание: </em>тибетоязычная традиция называет
                            автором этого
                            сочинения первого Панчен-Ламу Лобсан-Чойжи-Чжалцана (1570-1663), который
                            при
                            составлении текста опирался на "призывы" (bskul ba) Дхармакирти и его
                            учеников.
                            В начале текста приводится его название на санскрите, что должно
                            указывать на
                            его индийское происхождение. Впоследствии этот ритуал неоднократно
                            описывался
                            учеными ламами различных школ, особенно красношапочной Сачжа (sa skya).
                            Существуют также варианты Гендундуба и Хайдуба. Находящийся в моем
                            распоряжении
                            текст издан учеными монастыря Дашилхунпо, которые составили его,
                            подвергнув
                            сверке все имеющиеся варианты и исключив из них те места, которые были
                            признаны
                            неподлинными, так как они приравнивали это сочинение к наставлениям
                            (mang ngag,
                            upadesa) по сутрам и тантрам.</p>

                        <p class="my-2">Начиная с 3-ей строки л. 28б, следует составленный учеником
                            Цзонхавы Хайдубом текст ритуала bla ma mchod pa'i tshogs mchod. По
                            преданию,
                            основные элементы этого ритуала Хайдуб увидел во сне. В японском
                            буддизме этому
                            ритуалу соответствует чайная церемония, сходные ритуалы имеются во всех
                            индийских тантрийских системах, и его реминисценции сохранялись в
                            современных
                            "открытых" йогических традициях в виде gurudana, что говорит, по меньшей
                            мере, о
                            его индийских корнях.</p>

                        <p class="my-2">Оба текста представляют исключительный интерес для понимания
                            ритуальной стороны буддизма Махаяны.)</p>
                    </li>
                    <li class="my-2"><em>Guenther H. V.</em> The Royal Song of Saraha: a Study in
                        The History
                        of Buddhist Thought. — Berkeley: Shambala, 1973. — 221 с.
                    </li>
                </ol>


                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">
                <p class="text-right italic text-gray-600 mt-4">Пупышев Виктор Николаевич, 1978
                    г.</p>
                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">
            </div>
            <!-- Нижняя навигация -->
            @include('layouts.article-navigation', [
                'currentPart' => 7,
                'totalParts' => 7,
                'routeName' => 'pupishev_articles.source_of_sages',
                'articleTitle' => 'статьи'
            ])        </div>
@endsection
