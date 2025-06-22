@extends('layouts.app')
@section('title', 'Ответы на вопросы о Ваджрасаттве, данные наставником Пэльяном — Часть 3')

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
            'currentPart' => 3,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])

        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Ответы на вопросы о
                Ваджрасаттве,<br>данные наставником Пэльяном<br>Часть 3</h2>

            {{-- Список вопросов, нумерация начинается с 21 --}}
            <ol class="space-y-8 list-decimal list-outside ml-6 pl-2 md:ml-8 md:pl-4" start="21">
                <!-- Вопрос 21 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему говорят, что йогин, поднаторевший в
                        праджне и самадхи, подобен Будде.<a
                            href="#citation-38" id="ref-38"
                            class="citation-mark"><sup> 38</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Естество Ума [Будды] —</p>
                        <p class="pl-4">[дхармакая —] постижение нерождённого [дхарма]дхату.</p>
                        <p>[Если йогин постиг это, следуя примеру, то]</p>
                        <p>Естество Тела —</p>
                        <p class="pl-4">[полнота самбхогакаи] прояснена в [32-х] знаках и [80-ти]
                            признаках.</p>
                        <p>Естество Речи —</p>
                        <p class="pl-4">зародышевый слог Нирмана[каи].</p>
                        <p>[Хотя такое обретение и не полностью совершенно,]</p>
                        <p>Неравное [, тем не менее, по сути-то] уравнял,</p>
                        <p>Поэтому говорят, что равен Будде<a href="#citation-39" id="ref-39"
                                                              class="citation-mark"><sup>
                                    39</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 22 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Говорят, что важно исполнять распространение и
                        стягивание. Но если всё и так пронизано Дхармакаей, то нет ли в
                        необходимости распространять и стягивать противоречия с правильным
                        пониманием дхарматы<a href="#citation-40" id="ref-40"
                                              class="citation-mark"><sup> 40</sup></a>.
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Откуда бы то ни было, что бы то ни было, куда бы то ни было</p>
                        <p class="pl-4">как ни распространяй, ни стягивай,</p>
                        <p>В области Самантабхадры у всего один вкус,</p>
                        <p>Потому по отношению к [дхарма]дхату и бессмысленно [говорить]</p>
                        <p class="pl-4">о распространении и стягивании самого же [дхарма]дхату,</p>
                        <p>Тем не менее нет препятствий [говорить о них] применительно к методу.</p>
                        <p class="pl-4">Таково обоснование.</p>
                    </div>
                </li>

                <!-- Вопрос 23 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Каковы же тогда благие качества
                        распространения и стягивания<a href="#citation-41" id="ref-41"
                                                       class="citation-mark"><sup> 41</sup></a>?
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Поскольку то, чего нет, может проявиться во что угодно,</p>
                        <p>Нирмана[кая] проявляется всем, что усмиряет,</p>
                        <p class="pl-4">распространясь на пользу [другим] живым существам.</p>
                        <p>Когда множество Сугат собрались назад,</p>
                        <p>Воссияешь блеском Победоносцев — польза для себя.</p>
                    </div>
                </li>

                <!-- Вопрос 24 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Следует ли при практике Мантры опираться на
                        точку зрения йогачара-мадхьямаки, [что на уровне относительной истины все
                        дхармы – это только ум,] или саутрантика-мадхьямаки [, что на уровне
                        относительной истины существуют независимые от ума материальные
                        объекты]?<a href="#citation-42" id="ref-42" class="citation-mark"><sup>
                                42</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>В практике на путях Тайной мантры</p>
                        <p>Осваивают [на стадии зарождения] метод самадхи со знаками,</p>
                        <p>[Где, как в йогачаре, всё рассматривают,</p>
                        <p class="pl-4">как] только лишь [проявления] сознания.</p><br>
                        <p>Во всех же тех самадхи, которые не [опираются на такую точку] зрения,</p>
                        <p class="pl-4">[т.е. в исходящих из позиций саутрантики,]</p>
                        <p>Нет связи [объекта/вишаи] с умом,</p>
                        <p class="pl-4">так что нет и достижения.</p>
                    </div>
                </li>

                <!-- Вопрос 25 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Даже если и не считать [, как в йогачаре], что
                        с позиции относительной истины все [дхармы – ] это только ум, но ведь [обе
                        традиции мадхьямаки считают, что] с позиции абсолютной истины дхармы не
                        существуют. Разве таким самадхи не получится совершить трансформацию?<a
                        href="#citation-43" id="ref-43" class="citation-mark"><sup> 43</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Если упражняться в самадхи</p>
                        <p class="pl-4">с иным [объектом], не связанным [с умом],</p>
                        <p>Этот иной объект невозможно было бы трансформировать.</p>
                        <p>Ведь, что касается несуществования [дхарм</p>
                        <p class="pl-4">с позиции абсолютной истины],</p>
                        <p>[Будь они не связаны с умом с позиции относительной истины,]</p>
                        <p>Ум не смог бы их проявить</p>
                        <p class="pl-4">[как нечто существующее с позиции относительной истины].</p>
                    </div>
                </li>

                <!-- Вопрос 26 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Насколько важно при практике мантры изучать
                        авторитетные источники раздела сутр?<a href="#citation-44" id="ref-44" class="citation-mark"><sup> 44</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Талдыча одни только слова про равность и чистоту,</p>
                        <p>Клеши не одолеешь, свободы не добудешь.</p>
                        <p>Для мудрого, исполняющего суровые практики и гордость [идама],</p>
                        <p>Куда важнее авторитетный источник знания [реальности], как [она] есть.</p>
                    </div>
                </li>

                <!-- Вопрос 27 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Отчего мы не как арьи, в чём корень такого
                        увечья?<a href="#citation-45" id="ref-45" class="citation-mark"><sup> 45</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Одна причина у [сансарного] бытия,</p>
                        <p>один корень у скверны:</p>
                        <p>Неведенье, [от которого твой] собственный ум</p>
                        <p>цепляется за «я».</p>
                        <p>Пока есть этот великий яд в сердцах живых существ,</p>
                        <p>Не обрести им путь избавления,</p>
                        <p>только [скитаться] им [в круговороте] рождения и смерти.</p>
                    </div>
                </li>

                <!-- Вопрос 28 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Если, отбросив домыслы о внешней вишае,
                        поднаторел в шаматхе, неужели и тогда не освободиться, если по-прежнему
                        цепляешься за «я»?<a href="#citation-46" id="ref-46" class="citation-mark"><sup> 46</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Только когда совершенно перестал держаться за «я»,</p>
                        <p>Только тогда не будет и никакого цепляния за дхармы [внешней вишаи].</p>
                        <p>Пока есть маг-обманщик, хватающийся за «я»,</p>
                        <p>Даже если обрёл шаматху [непоколебимую], как гора,</p>
                        <p>не будет никакого освобождения.</p>
                    </div>
                </li>

                <!-- Вопрос 29 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Говорят, что через дхьяну обретаются
                        ясновиденье и волшебные риддхи. Отчего ж тогда не искать шаматху?<a href="#citation-47" id="ref-47" class="citation-mark"><sup> 47</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Хотя у обитателей небес свиты Брахмы и т.д.</p>
                        <p class="pl-4">дхьяна всегда есть сама по себе<a href="#citation-48" id="ref-48" class="citation-mark"><sup> 48</sup></a></p>
                        <p>И они обладают ясновиденьем света и цвета [и т.д.],</p>
                        <p>Но, поскольку они не отбросили,</p>
                        <p class="pl-4">пусть и тонкие, представления о «я»,</p>
                        <p>То и они когда-нибудь да низвергаются в ад.</p>
                        <p>Разве ты никогда не слышал об этом?</p>
                    </div>
                </li>

                <!-- Вопрос 30 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Что ж тогда, вовсе не стоит искать самадхи
                        однонаправленной шаматхи?<a href="#citation-49" id="ref-49" class="citation-mark"><sup> 49</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Шаматха, основанная на безошибочном понимании<a href="#citation-50" id="ref-50" class="citation-mark"><sup> 50</sup></a>,</p>
                        <p>Ясное самадхи [трёх] знаковых мудр,</p>
                        <p>Такая шаматха — лучший путь просветления</p>
                        <p>Поведёт всё выше и выше.</p>
                    </div>
                </li>
            </ol>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            {{-- Примечания к вопросам 21-30 --}}
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>

                <p class="mb-3" id="citation-38"><sup>38</sup> Тибетский текст двадцать первого
                    вопроса:<a href="#ref-38"
                               class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rnal 'byor pa shes rab dang ting nge 'dzin las su rung na /
                    </li>
                    <li class="my-2">/ sangs rgyas dang mnyam mo zhes 'bgyi ba'i don ci lta bu lags
                        /
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ thugs kyi rang bzhin skye med dbyings su rtogs //</li>
                    <li class="my-2">sku'i rang bzhin mtshan dang dpe byad gsal /</li>
                    <li class="my-2">/ gsung gi rang bzhin sprul pa'i yig 'brur ldan /</li>
                    <li class="my-2">/ mi mnyam mnyam pas sangs rgyas mnyam par gsungs /</li>
                </ul>

                <p class="mb-3" id="citation-39"><sup>39</sup> C учётом вставок в Данжуре:<a
                        href="#ref-39" class="text-blue-500 hover:underline">↩</a></p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                        <li class="my-2">Естество Мысли [Будды] –</li>
                        <li class="my-2">[Дхармакая –] постижение нерождённого [Дхарма]дхату.</li>
                        <li class="my-2">[Если йогин постиг это, следуя примеру (dpe 'gre), то]</li>
                        <li class="my-2">Естество Тела –</li>
                        <li class="my-2 pl-4">[полнота Самбхогакаи] прояснена в [32-х] знаках и
                            [80-ти] признаках.
                        <li class="my-2">Естество Речи –</li>
                        <li class="my-2 pl-4">зародышевый слог Нирмана[каи].</li>
                        <li class="my-2">[Хотя такое обретение и не полностью совершенно,]</li>
                        <li class="my-2">Неравное [, тем не менее, по сути-то] уравнял,</li>
                        <li class="my-2">Поэтому говорят, что равен Будде</li>
                        <li class="my-2">[Как, скажем, три дхармы или полная луна].</li>
                    </ul>
                </blockquote>

                <p class="mb-3" id="citation-40"><sup>40</sup> Тибетский текст двадцать второго
                    вопроса:<a href="#ref-40" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'phro 'du bgyi ba gces so zhes byung ba /</li>
                    <li class="my-2">/ chos kyi skus khyab pa la spro zhing bsdu ba chos nyid kyi
                        rigs pa dang mi 'gal lam
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ gang nas gang zhig gar 'phro 'du ba dag //</li>
                    <li class="my-2">kun tu bzang po'i ngang du ro gcig phyir //</li>
                    <li class="my-2">dbyings la dbyings nyid 'phro 'du mi dmigs kyang /</li>
                    <li class="my-2">/ thabs la mi 'gog gtan tshigs de nyid yin /</li>
                </ul>

                <p class="mb-3" id="citation-41"><sup>41</sup> Тибетский текст двадцать третьего
                    вопроса:<a href="#ref-41" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ['o na] 'phro 'du bgyi ba na yon tan ci mchis /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ci yang med la cir yang snang ba'i phyir //</li>
                    <li class="my-2">cis 'dul sprul zhing 'phro ba 'gro ba'i don //</li>
                    <li class="my-2">bder bshegs mang po slar yang 'du ba dag //</li>
                    <li class="my-2">rgyal ba'i gzi 'drar gyur te bdag gi don /</li>
                </ul>

                <p class="mb-3" id="citation-42"><sup>42</sup> Тибетский текст двадцать четвертого
                    вопроса:<a href="#ref-42" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sngags spyod pa la rnal 'byor spyod pa'i dbu ma dang /</li>
                    <li class="my-2">/ mdo sde'i dbu ma gnyis gang ltar bltas na bde /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ gsang sngags spyod pa rnams kyi tshul gyis ni //</li>
                    <li class="my-2">mtshan ma'i ting 'dzin thabs la dbang sgyur bas //</li>
                    <li class="my-2">rnam rig tsam du ma bltas ting 'dzin kun //</li>
                    <li class="my-2">sems dang 'brel ba med pas gcig mi 'grub /</li>
                </ul>

                <p class="mb-3" id="citation-43"><sup>43</sup> Тибетский текст двадцать пятого
                    вопроса:<a href="#ref-43" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ kun rdzob tu sems tsam du ma bltas na /</li>
                    <li class="my-2">/ yang /</li>
                    <li class="my-2">/ chos ci yang med par rig na /</li>
                    <li class="my-2">/ ting nge 'dzin kyis ci ste sgyur du myi rung /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'brel med ting 'dzin gzhan na sgom /</li>
                    <li class="my-2">/ gzhan kyi yul la 'gyur ba med /</li>
                    <li class="my-2">/ ci yang med pa nyid la yang /</li>
                    <li class="my-2">/ sems kyis de phyir snang mi nus /</li>
                </ul>

                <p class="mb-3" id="citation-44"><sup>44</sup> Тибетский текст двадцать шестого
                    вопроса:<a href="#ref-44" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sngags spyod pa la mdo sde'i gtan tshigs bslab pa ji tsam du
                        gces /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ mnyam zhing dag pa'i tshig tsam smras pa yis //</li>
                    <li class="my-2">nyon mongs zil gyis mi non grol mi 'gyur //</li>
                    <li class="my-2">rtsing chos nga rgyal spyod pa'i blo ldan la //</li>
                    <li class="my-2">ji bzhin rig pa'i gtan tshigs shin tu gces /</li>
                </ul>

                <p class="mb-3" id="citation-45"><sup>45</sup> Тибетский текст двадцать седьмого
                    вопроса:<a href="#ref-45" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'phags pa kun dang mi mnyam pa'i skyon kyi rtsa ba gang
                        lags /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ srid rgyu nyes pa'i rtsa ba gcig pu pa //</li>
                    <li class="my-2">rang sems ma rig bdag tu bzung ba ste //</li>
                    <li class="my-2">'gro ba'i snying la dug chen 'di yod pas /</li>
                    <li class="my-2">/ thar lam mi thob skye dang 'chi la rtag /</li>
                </ul>

                <p class="mb-3" id="citation-46"><sup>46</sup> Тибетский текст двадцать восьмого
                    вопроса:<a href="#ref-46" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ phyi'i yul la mi rtog par zhi gnas las su rung na /</li>
                    <li class="my-2">/ bdag tu 'dzin pa lta zhig mchis na yang mi grol lags sam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bdag tu 'dzin pa yongs su spangs nas ni //</li>
                    <li class="my-2">chos su 'dzin par byed pa gang yang med //</li>
                    <li class="my-2">bdag 'dzin sgyu mkhan yod kyi bar du ni //</li>
                    <li class="my-2">ri 'dra'i zhi gnas thob kyang grol mi 'gyur /</li>
                </ul>

                <p class="mb-3" id="citation-47"><sup>47</sup> Тибетский текст двадцать девятого
                    вопроса:<a href="#ref-47" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bsam gtan kyis mngon par shes pa dang rdzu 'phrul 'thob ces
                        'byung na /</li>
                    <li class="my-2">/ zhi gnas kyis ma 'tshal ba ci mchis /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ tshangs ris la sogs bsam gtan lhun grub cing //</li>
                    <li class="my-2">'od dang kha dog mngon shes ldan 'gyur kyang /</li>
                    <li class="my-2">/ bdag rtog bag la nyal ba ma spangs phyir /</li>
                    <li class="my-2">/ sems dmyal lhung bar 'gyur gsungs ma thos sam /</li>
                </ul>

                <p class="mb-3" id="citation-48"><sup>48</sup> Свита Брахмы (brahmakayika) – первое небо мира форм.  Небеса мира
                    форм соответствуют четырём ступеням дхьяны.<a href="#ref-48" class="text-blue-500 hover:underline">↩</a></p>


                <p class="mb-3" id="citation-49"><sup>49</sup> Тибетский текст тридцатого вопроса:<a
                        href="#ref-49" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'o na rtse gcig pa'i zhi gnas pa'i ting nge 'dzin yongs su mi
                        'tshal lags sam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ma nor rtogs dang ldan pa'i zhi gnas dang /</li>
                    <li class="my-2">/ mtshan ma'i phyag rgya gsal ba'i ting nge 'dzin //</li>
                    <li class="my-2">'di 'dra'i don ldan byang chub lam mchog ste //</li>
                    <li class="my-2">yang nas yang tu khyad par 'gro bar bya /</li>
                </ul>

                <p class="mb-3" id="citation-50"><sup>50</sup> Данжур: т.е. равно обладающее
                    випашьяной.<br>ДХ: Ясная випашьяна трёх мудр Тела, Речи и Ума.<a
                        href="#ref-50"
                        class="text-blue-500 hover:underline">↩</a>
                </p>
            </div>
        </div>

        {{-- Нижняя навигация по статье --}}
        @include('layouts.article-navigation', [
            'currentPart' => 3,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])
    </div>
@endsection
