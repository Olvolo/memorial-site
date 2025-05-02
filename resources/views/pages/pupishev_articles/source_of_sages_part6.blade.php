@extends('layouts.app')
@section('title', 'Источник мудрецов. Раздел тантра. Часть шестая. Ануттарайогатантра (Часть 2)')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url('{{ asset("backgrounds/salad_blue.webp") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Верхняя навигация -->
        @include('layouts.article-navigation', ['currentPart' => 6, 'totalParts' => 7])
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
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <h2 class="text-center text-xl font-semibold text-blue-800 mt-6 mb-4">IV.
                АНУТТАРАЙОГАТАНТРА<br>(rNal 'byor bla na med rgyud)</h2>
            <h3 class="text-center text-gray-700 italic text-lg sm:text-xl md:text-xl mb-8">
                (Часть вторая)
            </h3>
            <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
                <p>Порядок практики для истинной реализации целей тантры таков:</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">Первое: ступень зарождения [тантрийской йоги] (bskyed pa'i
                        rim),
                    </li>
                    <li class="my-2">Второе: ступень завершения (rdzogs pa'i rim).</li>
                </ol>

                <p><strong>Из них в первом — ступени рождения — имеются:</strong></p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">
                        То, что следует отбросить (spang bya) — явность и желанность обыкновенных сосудов и соков (tha mal snod bcud kyi
                        snang ba dang zhen pa)<a
                            href="#citation-117" id="ref-117"
                            class="citation-mark"><sup>117</sup></a>.
                    </li>
                    <li class="my-2">
                        Друзья созерцания (gnien po) — ясное видение и гордость в отношении опоры и
                        опирающихся (rten dang brten pa'i gsal snang dang nga rgyal)<a
                            href="#citation-118" id="ref-118" class="citation-mark"><sup>118</sup></a>.
                    </li>
                    <li class="my-2">
                        Условия созерцания (bsgom pa'i gnas skabs):
                        <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                            <li class="my-2">[готовность к созерцанию в силу] кармы прошлых
                                рождений (las dang po pa),
                            </li>
                            <li class="my-2">нисхождение [на созерцателя] немногой мудрости (ye
                                shes cung zad babs pa),
                            </li>
                            <li class="my-2">обретение некой силы в мудрости (ye shes cung zad
                                dbang ba),
                            </li>
                            <li class="my-2">истинное обретение силы в мудрости (ye shes la yang dag
                                par dbang ba) — таковы четыре [условия].
                            </li>
                        </ol>
                    </li>
                    <li class="my-2">
                        Йога созерцания (bsgom pa'i rnal 'byor):
                        <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                            <li class="my-2">грубая (rags pa) — йога, следующая памяти (dran pa gcig
                                pa'i rnal 'byor),
                            </li>
                            <li class="my-2">тонкая (phra ba) йога интуиции (rtog pa'i rnal 'byor) —
                                таковы две йоги<a
                                    href="#citation-119" id="ref-119"
                                    class="citation-mark"><sup>119</sup></a>.</li>
                        </ol>
                    </li>
                    <li class="my-2">
                        В общей линии (chings) ступени рождения [имеется] следующая четырехчленная опора-реализация (bsnyen bsgrub):
                        <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                            <li class="my-2">приобретение опоры (bsnyen pa, sevā — «служение» как
                                опора совершенствующего движения; см. прим. 67),
                            </li>
                            <li class="my-2">движение к реализации (nyer sgrub),</li>
                            <li class="my-2">осуществление (sgrub pa),</li>
                            <li class="my-2">великое осуществление (sgrub pa chen po).</li>
                        </ol>
                    </li>
                    <li class="my-2">
                        Рождение четырех ваджров:
                        <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                            <li class="my-2">ваджр ясной мысли о шуньяте (stong nyid byang chub
                                rdo rje),
                            </li>
                            <li class="my-2">ваджр [мысли], собранной в зародышевой букве (sa bon
                                bsdus pa'i rdo rje),
                            </li>
                            <li class="my-2">ваджр развертывания [зародышевой буквы] в форму [божества] (gzugs nyid rdzogs pa'i rdo rje),
                            </li>
                            <li class="my-2">ваджр образования [четок из] букв (yi ge dgod pa'i rdo
                                rje) — таковы четыре [ваджра].
                            </li>
                        </ol>
                    </li>
                    <li class="my-2">
                        Четыре вида йоги:
                        <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                            <li class="my-2">йога (rnal 'byor; yoga)<a href="#citation-120" id="ref-120" class="citation-mark"><sup>120</sup></a>,
                            </li>
                            <li class="my-2">ануйога (rjes su rnal 'byor, anuyoga)<a
                                    href="#citation-121" id="ref-121"
                                    class="citation-mark"><sup>121</sup></a>,</li>
                            <li class="my-2">атийога (shin tu rnal 'byor, atiyoga)<a
                                    href="#citation-122" id="ref-122"
                                    class="citation-mark"><sup>122</sup></a>,</li>
                            <li class="my-2">махайога (rnal 'byor chen po, mahāyoga)<a
                                    href="#citation-123" id="ref-123"
                                    class="citation-mark"><sup>123</sup></a>.</li>
                        </ol>
                    </li>
                    <li class="my-2">
                        Три глубинных вхождения [ting nge 'dzin gsum — три <em>самадхи</em>, или глубоких сосредоточения]:
                        <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                            <li class="my-2">первичное накопление [элементов, благих для сочетания в единстве блаженства и шуньи] (dang po sbyor ba),
                            </li>
                            <li class="my-2">великая победа в жинхоре (dkyil 'khor rgyal mchog)<a
                                    href="#citation-124" id="ref-124"
                                    class="citation-mark"><sup>124</sup></a>,</li>
                            <li class="my-2"><em>самадхи</em> великой победы над кармой (las rgyal mchog gi
                                ting 'dzin) — таковы три [самадхи].
                            </li>
                        </ol>
                    </li>
                </ol>

                <p>В порядке созерцания <em>ясного познания</em> [идама] (mngon rtogs
                    bsgom pa'i rim pa) имеется:</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">Реализация соответствующих условий [через] накопление собрания [благих дхарм] (mthun rkyen sgrub pa tshogs
                        bsags pa).
                    </li>
                    <li class="my-2">Удаление препятствующих условий ('gal rkyen sel ba) —
                        созерцание охранного круга (bsrung ba'i 'khor lo bsgom pa).
                    </li>
                    <li class="my-2">Произнеся две мантры (sngags gnyis)<a href="#citation-125"
                                                                           id="ref-125"
                                                                           class="citation-mark"><sup>125</sup></a>,
                        созерцать превращение смерти в путь Дхармакаи ('chi ba chos sku'i lam
                        'khyer bsgom pa).
                    </li>
                    <li class="my-2">Осуществив рождение причинного держателя ваджра (rgyu
                        rdo rje 'dzin pa, kāraṇavajradhṛk)<a href="#citation-126" id="ref-126"
                                                    class="citation-mark"><sup>126</sup></a>,
                        созерцать превращение промежуточного состояния в путь Самбхогакаи (bar do
                        longs sku'i lam 'khyer bsgom pa).
                    </li>
                    <li class="my-2">Осуществив рождение держателя ваджра плода ('bras bu
                        rdo rje 'dzin pa, phalavajradhṛk)<a href="#citation-127" id="ref-127"
                                                   class="citation-mark"><sup>127</sup></a>,
                        созерцать превращение нового рождения в путь Нирманакаи (skye ba sprul sku'i lam
                        'khyer bsgom pa).
                    </li>
                    <li class="my-2">Читать мантру распространения света из места рождения, либо же
                        мантру божества щита (skye mched dam go cha'i lha sngags gang rung dgod pa)<a
                            href="#citation-128" id="ref-128" class="citation-mark"><sup>128</sup></a>.</li>
                    <li class="my-2">Впитывать [нектар] мудрости (ye shes bstim pa).</li>
                    <li class="my-2">Установить печать правомочности (dbang bskur rgyas gdab
                        byed pa).
                    </li>
                    <li class="my-2">Вкусить нектар жертвы и гимна (mchod bstod bdud rtsi
                        myang ba).
                    </li>
                    <li class="my-2">Ясно представлять [объект созерцания] (dag pa dran pa).</li>
                    <li class="my-2">Созерцать тонкий бинду (phra thig bsgom pa).</li>
                    <li class="my-2">Совершать рецитацию (bzlas pa byed pa).</li>
                    <li class="my-2">Поднести балин (gtor ma)<a href="#citation-129" id="ref-129"
                                                                class="citation-mark"><sup>129</sup></a> — этот порядок (go rims) принят в исключительном большинстве [текстов класса] «ясное познание» (mngon rtogs).
                    </li>
                </ol>

                <p>Мгновенное рождение (skad cig dkrong skyed, kṣaṇotpāda) —
                    это мгновенное появление [божества, понимаемого как реальность].</p>

                <p>Созидание трех ритуалов (cho ga gsum bskyed) — это рождение:</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">из зародышевой буквы (sa bon),</li>
                    <li class="my-2">из атрибута (phag mtshan),</li>
                    <li class="my-2">из совершенного тела (sku rdzogs pa)<a href="#citation-130" id="ref-130" class="citation-mark"><sup>130</sup></a>.
                    </li>
                </ol>

                <p>Рождение пяти истинных чистых (mngon byang lnga) —
                    это следующие пять видов чистоты (byang chub pa):</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">от татхаты (de bzhin nyid),</li>
                    <li class="my-2">от луны (zla ba),</li>
                    <li class="my-2">из зародышевой буквы (sa bon),</li>
                    <li class="my-2">из атрибута (phyag mtshan),</li>
                    <li class="my-2">из совершенного тела (sku rdzogs pa).</li>
                </ol>

                <p>Вышеописанные [элементы] составляют порядок нахождения
                    опоры в созерцании (sgom rgyu'i rim pa), что является основой
                    [йоги] периодов (thun gyi ngo bo). В йоге периодов (thun mtshams
                    kyi rnal 'byor)<a href="#citation-131" id="ref-131"
                                                                class="citation-mark"><sup>131</sup></a>
                    имеется:</p>

                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">йога чистого блаженства (longs spyod dag pa'i rnal 'byor),</li>
                    <li class="my-2">йога чистого деяния (las dag pa'i rnal 'byor),</li>
                    <li class="my-2">йога чистого обета (dam tshig dag pa'i rnal 'byor),</li>
                    <li class="my-2">йога питания (zas kyi rnal 'byor),</li>
                    <li class="my-2">йога омовения (khrus kyi rnal 'byor),</li>
                    <li class="my-2">йога засыпания (nyal ba'i rnal 'byor),</li>
                    <li class="my-2">йога вставания [ото сна] (ldang ba'i rnal 'byor).</li>
                </ol>

                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">

                <div class="citations mt-4 text-lg">
                    <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                        ПРИМЕЧАНИЯ</h4>

                    <p class="my-2" id="citation-117"><sup>117</sup> Привязанность к вещам и
                        стремление к чувственным удовольствиям.<a href="#ref-117"
                                                                  class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-118"><sup>118</sup> Опора (rten) — это мир нирванистического сосуда (snod), дворец
                        созерцаемого божества. Опирающиеся (brten) — сами нирванистические
                        существа, тантрийские идамы. Ясное видение или явленность — солнце,
                        источник мысли бодхи: gsal snang = nyi ma | gsal ba'i nor bu [1: VII, 1242],
                        опора (rten) для ума, оперирующего категориями субстанции и акциденции.
                        Гордость — это непобедимость (nga rgyal) духовности йогина, делающего
                        прорыв в абсолют.<a href="#ref-118" class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-119"><sup>119</sup> а) когда ум направляется на объект созерцания постоянным возвращением внимания (rjes dran, anusmṛti); б) когда ум утвердился в созерцании
                        и не отходит от созерцаемого объекта. Rtog pa — исследование сущности
                        и специфики внутреннего содержания созерцаемого объекта, интуитивность
                        (shes rab). [Там же: 852].<a href="#ref-119" class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-120"><sup>120</sup> <em>Sumatiratna</em> [1: VI, 1221 – 1222] дает следующее определение этого
                        термина: zhi gnas dang lhag mthong zung du 'bral ba'i bsam gtan gyi ming |<a
                            href="#ref-120" class="text-blue-500 hover:underline">↩</a></p>
                    <p>
                        <em>Перевод:</em> Это определение <em>дхьяны</em> соединения в одно внутренней
                        устойчивости и высшего воззрения.
                    </p>
                    <p>
                        А также: chos nyid rnal ma la 'byor na rnal 'byor |
                    </p>
                    <p>
                        <em>Перевод:</em> Если привести ('byor) в покой волнение дхарм — это йога (rnal
                        'byor).
                    </p>
                    <p>
                        Также: bde stong gnyis med kyi ye shes de ni ... rnal ... ma'am ma bcos pa
                        yin la | de la ...'byor ... par byed pa'i thabs phyin ci ma log pa ni byang chub lam
                        rim 'di nyid yin cing | de'i phyir 'de la lam zab mo zhes kyang brjod do |
                    </p>
                    <p>
                        <em>Перевод:</em> Когда Мудрость недвойственности блаженства и шуньи не приведена в равновесие (rnal ma), применяется безошибочный метод достижения ('byor) этого [равновесия], заключающийся в следовании [порядку] пути
                        к просветлению. Именно для этой цели проповедан глубокий путь..)
                    </p>

                    <p class="my-2" id="citation-121"><sup>121</sup> Материнские тантры (ma rgyud) [1: VII, 381]. См. также прим. 56.<a href="#ref-121"
                                                                      class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-122"><sup>122</sup> Отцовские тантры (pha rgyud). [Там же: 80].<a href="#ref-122"
                                             class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-123"><sup>123</sup> pha ma rgyud — йога реализации недвойственности блаженства
                        и шуньи, где метод и интуиция используются в равной мере. Это йога Махамудры, предполагающей равное вхождение в единство сансары и нирваны
                        (srid zhi mnyam nyid), где все сансарные объекты познают свое нирванистическое лицо.<a href="#ref-123"
                                                      class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-124"><sup>124</sup> См. прим. 44.<a href="#ref-124"
                                                                                     class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-125"><sup>125</sup> Мантру шуньяты и мантру
                        познания шуньяты.<a href="#ref-125"
                                            class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-126"><sup>126</sup> Идам, созерцаемый в период
                        реализации Самбхогакаи.<a href="#ref-126"
                                                  class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-127"><sup>127</sup> Основное, центральное Божество
                        <em>жинхора</em>.<a href="#ref-127" class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-128"><sup>128</sup> Речь идет о двух способах защиты от действия мар. Здесь skye
                        mched — это не <em>аятана</em>, а сочетание термина skye = skye gnas [1: VI, 123]
                        и глагола mched.<a
                            href="#ref-128" class="text-blue-500 hover:underline">↩</a></p>

                    <p class="my-2" id="citation-129"><sup>129</sup> См. прим. 82.<a href="#ref-129"
                                                                                     class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-130"><sup>130</sup> Букв. "тела завершенного". Этот
                        термин применяется для определения тела Божества полного вида, со всеми
                        внешними атрибутами и внутренними признаками.<a href="#ref-130"
                                                                        class="text-blue-500 hover:underline">↩</a>
                    </p>
                    <p class="my-2" id="citation-131"><sup>131</sup> Йога трех, четырех, либо шести
                        промежутков времени, в которые ежедневно практикуется созерцание.<a
                            href="#ref-131" class="text-blue-500 hover:underline">↩</a></p>
                </div>
                <!-- Разделительная черта -->
                <hr class="my-8 border-t-4 border-gray-500">
            </div>
            <!-- Нижняя навигация -->
            @include('layouts.article-navigation', ['currentPart' => 6, 'totalParts' => 7])
        </div>
@endsection
