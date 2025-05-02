@extends('layouts.app')
@section('title', 'Источник мудрецов. Раздел тантра. Часть четвертая. Йогатантра')
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
        @include('layouts.article-navigation', ['currentPart' => 4, 'totalParts' => 7])
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
            <h2 class="text-center text-xl font-semibold text-blue-800 mt-6 mb-4">III.
                ЙОГАТАНТРА<br>(rNal 'byor rgyud)</h2>
            <p>В Йогатантре имеется:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">коренная тантра (rtsa rgyud),</li>
                <li class="my-2">тантра проповеди, или пояснительная (bshad rgyud),</li>
                <li class="my-2">тантра соответствия [с первым и вторым] (cha mthun gyi rgyud).</li>
            </ol>
            <p>Коренная тантра — это <em>Таттвасамграха</em>. В ней собраны все эти
                [три] в сжатом виде. Она состоит из четырех разделов: </p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">раздела ваджрного пространства (rdor dbyings; vajradhātu),</li>
                <li class="my-2">раздела победы над тремя мирами (khams gsum rnam rgyal),</li>
                <li class="my-2">раздела подчинения [совершенствующему движению] живых
                    существ ('gro 'dul),
                </li>
                <li class="my-2">раздела реализации метода (don grub).</li>
            </ol>
            <p>Пять генезисов, о которых в ней проповедано, суть:</p>
            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">генезис татхагат (de bzhin gshegs pa; tathāgata),</li>
                <li class="my-2">генезис ваджрный (rdo rje; vajra),</li>
                <li class="my-2">генезис драгоценный (rin po che; ratna),</li>
                <li class="my-2">генезис лотосовый (padma),</li>
                <li class="my-2">генезис кармовый (las; karma).</li>
            </ol>
            <p>В коренной тантре, где кармовый генезис входит в драгоценный,
                говорится о четырех генезисах.</p>
            <p>Четыре генезиса в ней, если брать по порядку:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Дхармакая (ngo bo nyid = ngo bo nyid sku = chos sku)<a
                        href="#citation-39" id="ref-39" class="citation-mark"><sup>39</sup></a>,
                </li>
                <li class="my-2">полное созревание плодов йоги (rnam par smin pa)<a
                        href="#citation-40" id="ref-40" class="citation-mark"><sup>40</sup></a>,
                </li>
                <li class="my-2">Самбхогакая (longs spyod rdzogs = longs spyod rdzogs sku)<a
                        href="#citation-41" id="ref-41" class="citation-mark"><sup>41</sup></a>,
                </li>
                <li class="my-2">Нирманакаи (sprul sku)<a href="#citation-42" id="ref-42"
                                                          class="citation-mark"><sup>42</sup></a>.
                </li>
            </ol>

            <p>[Они соответствуют]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">зерцалоподобной мудрости (me long lta bu),</li>
                <li class="my-2">равномерной (без колебания) мудрости (mnyam pa nyid),</li>
                <li class="my-2">дискриминативной мудрости (so sor rtogs pa),</li>
                <li class="my-2">всеисполняющей мудрости (bya ba grub pa'i ye shes)<a
                        href="#citation-43" id="ref-43" class="citation-mark"><sup>43</sup></a>.
                </li>
            </ol>

            <p>[или]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">бодхисаттвовской мысли (byang chub kyi sems),</li>
                <li class="my-2">парамите отдачи (sbyin pa'i phar phyin),</li>
                <li class="my-2">парамите интуиции (shes rab kyi phar phyin),</li>
                <li class="my-2">парамите усердия (brtson 'grus kyi phar phyin).</li>
            </ol>

            <p>Так проповедано.</p>

            <p>В каждом из четырех разделов [<em>йогатантры</em>] под тем, что следует воспитать в
                себе,
                подразумевается три вида <em>самадхи</em> - расширенное, среднее и краткое,
                [каждого] четыре
                вида (по три на каждый из разделов).</p>

            <p>Также на каждый из четырех разделов распределены по четыре мандалы (dkyil 'khor,
                maṇḍala):<a href="#citation-44" id="ref-44" class="citation-mark"><sup>44</sup></a>
            </p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">великий <em>жинхор</em> (dkyil 'khor chen po),</li>
                <li class="my-2"><em>жинхор</em> [из букв] <em>дхарани</em> (gzungs kyi dkyil
                    'khor),
                </li>
                <li class="my-2">дхармовый <em>жинхор</em> (chos kyi dkyil 'khor),</li>
                <li class="my-2">кармовый <em>жинхор</em> (las kyi dkyil 'khor).</li>
            </ol>

            <p>Четыре <em>мудры</em> [печати] суть:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2"><em></em>махамудра - великая печать (phyag rgya chen po,
                    mahāmudrā)<a
                        href="#citation-45" id="ref-45" class="citation-mark"><sup>45</sup></a>,
                </li>
                <li class="my-2">печать обета (dam tshig phyag rgya, samayamudrā)<a
                        href="#citation-46" id="ref-46" class="citation-mark"><sup>46</sup></a>,
                </li>
                <li class="my-2">печать абсолюта (chos kyi phag rgya, dharmamudrā)<a
                        href="#citation-47" id="ref-47" class="citation-mark"><sup>47</sup></a>,
                </li>
                <li class="my-2">действенная печать (las kyi phag rgya, karmamudrā)<a
                        href="#citation-48" id="ref-48" class="citation-mark"><sup>48</sup></a>.
                </li>
            </ol>

            <p>Этими четырьмя очищаются тело, речь, мысль и деяния (lus ngag yid bya ba) простого
                созерцателя (sbang gzhi tha mal pa). Плодом является реализация тела, речи и мысли и
                деяний (sku gsung thugs 'phrin las) Будды.<a href="#citation-49" id="ref-49"
                                                             class="citation-mark"><sup>49</sup></a>
            </p>

            <p>Подобным же образом [рассматриваются] три мудры:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">объект очищения (sbyang bya) есть печать основы (gzhi'i phag
                    rgya),
                </li>
                <li class="my-2">процесс очищения (sbyong byed) - печать пути (lam gyi phyag
                    rgya),
                </li>
                <li class="my-2">конечная чистота (sbyang pa) - печать плода ('bras bu'i phag
                    rgya).
                </li>
            </ol>

            <p>А также:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">печать объекта указывания (mtshon bya yi don)<a
                        href="#citation-50" id="ref-50" class="citation-mark"><sup>50</sup></a>,
                </li>
                <li class="my-2">печать процесса указывания (mtshon byed kyi phyag rgya).</li>
            </ol>

            <p>В последнем имеется:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">печать внешнего символа (mtshon byed phyi),</li>
                <li class="my-2">печать мистического показа (mtshon byed nang gi phyag rgya).</li>
            </ol>

            <p>Три вида <em>самадхи</em> (ting 'dzin) суть:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">впервые достигаемые <em>самадхи</em> (dang po sbyor ba),</li>
                <li class="my-2"><em>самадхи</em> овладения мудростью недвойственности блаженства
                    и шуньи (dkyil 'khor rgyal mchog)<a href="#citation-51" id="ref-51"
                                                        class="citation-mark"><sup>51</sup></a>,
                </li>
                <li class="my-2"><em>самадхи</em> великой победы над кармой (las rgyal mchog gi
                    ting 'dzin).
                </li>
            </ol>

            <p>В этой тантре при даче посвящения (dbang bskur ba) есть три [возможности]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">делается, как при вхождении в <em>жинхор</em> (dkyil 'khor du tsam
                    byed pa);
                </li>
                <li class="my-2">делается все, что в силах [воспринять] ученик (slob ma'i dbang
                    tsam bskur ba);
                </li>
                <li class="my-2">делается абсолютно все до той грани правомочности, [которой]
                    обладает ваджрный Учитель (rdo rje slob dpon gyi dbang
                    man chad rdzogs par bskur ba).
                </li>
            </ol>

            <p>Если делать, как в последнем случае, то следует соблюдать
                обеты пяти генезисов (rigs lnga'i dam tshig bsrung ba) и избегать коренных падений
                (rtsa ltung la 'dzem pa), как это делается
                в <em>ануттара</em> [<em>йогатантре</em>]:</p>

            <p>В созерцательной практике (lam sgom) [различают]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">cозерцание с опорой на форму (mtshan bcas),</li>
                <li class="my-2">cозерцание бесформенного (mtshan med).</li>
            </ol>

            <p>Первое состоит из йоги четырех периодов (thun bzhi'i rnal 'byor),
                грубой и тонкой (rags phra gnyis).</p>

            <p>А. Из этих двух <em>грубая</em> [<em>йога</em>] означает: с
                получением посвящения в ученики</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">охранять себя и брызгать водой [для охраны места созерцания] (bdag
                    bsrung ba dang chus khrus bya ba);
                </li>
                <li class="my-2">создавать охранный круг из гневных йогов (khro bo'i rnal 'byor pa
                    bsrung 'khor bya ba);
                </li>
                <li class="my-2">перед собранием богов (tshogs rten) совершать поклонение
                    (phyag 'tshal), обращаться за прибежищем (skyabs su 'gro ba sogs bya ba) и т.д.;
                </li>
                <li class="my-2">начиная с мудры раскрытия ваджрных ладоней (rdo rje thal
                    mo = rdo rje thal mo kha phye ba'i phyag rgya) действовать
                    вплоть до [получения] потока [нектара] мудрости (ye shes dbab pa);
                </li>
                <li class="my-2">сам с помощью пяти ритуалов превратившись в [созерцаемое] божество,
                    впустив джняну<a href="#citation-52" id="ref-52"
                                     class="citation-mark"><sup> 52</sup></a>, прими в качестве знака
                    четыре печати (phyag rgya, mudrā).
                </li>
            </ol>

            <p>О практике начитывания (bzlas pa bya ba) проповедано как в Шестичленной, хотя есть и
                другая традиция (lugs). Она сама означает то же, что йога.</p>

            <p>Если давать посвящение ученику, получив правомочность Учителя (slob dpon gyi dbang),
                то оно бывает трех видов:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">расширенная практика созерцания, без сокращения, практика
                    трех <em>самадхи</em>, связанных с великой йогой самосовершенствования (bdag
                    rdzogs);
                </li>
                <li class="my-2">средняя практика (bsnyen pa), объединяющая ритуал рождения
                    высочайшей победы в <em>жинхоре</em><a href="#citation-53" id="ref-53"
                                                           class="citation-mark"><sup> 53</sup></a>
                    (dkyil 'khor rgyal mchog gi
                    skyed chog sogs), и др.;
                </li>
                <li class="my-2">краткая практика, связанная с начитыванием ста тысяч [мантр]
                    каждого из божеств <em>махайоги</em> (rnal 'byor chen po).
                </li>
            </ol>

            <p>При реализации своего божества практикуют самадхи с махайогой.</p>

            <p>Б. В <em>тонкой</em> [<em>йоге</em>] два вида направления мысли (dmigs
                pa):</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">укрепить мысль (sems brtan par bya ba);</li>
                <li class="my-2">достигнув крепости [мысли], распространять ее, [вновь] собирать и
                    т.д<a href="#citation-54" id="ref-54" class="citation-mark"><sup>54</sup></a>.
                </li>
            </ol>

            <p>Йога без опоры на форму (mtshan med) есть метод (don) реализации <em>шуньи</em> как
                способ (tshul) практики высшего созерцания (<em>випашьяны</em>), объектом которого
                является неконцептуальный ум (spros bral dmigs pa'i lhag mthong).</p>

            <p>Таковы четыре несравненных метода (tshul) практики четырех видов.</p>

            <p>В методе реализации сиддх (dngos grub; siddhi) имеется:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">реализация сиддхи через созерцание (bsam gtan, dhyna),</li>
                <li class="my-2">реализация сиддхи через начитывание (bzlas brjod),</li>
                <li class="my-2">реализация сиддхи через «сжигание накопленного» (sbyin
                    bsreg)<a href="#citation-55" id="ref-55" class="citation-mark"><sup>55</sup></a>.
                </li>
            </ol>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            <!-- Примечания -->
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>

                <p class="my-2" id="citation-39"><sup>39</sup> Согласно 10: л. 2б, суть различия
                    между бодхисаттвой и махасаттвой в следующем:<a href="#ref-39"
                                                                    class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>
                    rang don chos sku la sems pas na byang chub sems dpa' dang || gzhan don
                    gzugs sku la ched du sems pas na sems pa chen po ||
                </p>
                <p>
                    В соответствии с этим в тантре проповедано о том, что Дхармакаю
                    определяют так:
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">ye shes kyi ngo bo nyid kyi chos sku,</li>
                    <li class="my-2">rang bzhin gzugs sku.</li>
                </ol>
                <p>
                    Таким образом, в генезис татхагат, или дхармакаи, входят те бодхисаттвы, которые
                    реализуют собственно Дхармакаю и пребывают в ней буддами; а в генезис «полного
                    созревания плодов йоги», или «ваджрный»,
                    входят йоги-махасаттвы, реализовавшие Дхармакаю, но не успокоившиеся на этом и
                    из
                    сострадания постоянно вновь и вновь независимо рождающиеся среди живых существ,
                    постоянно держащие ваджр тайной проповеди.
                </p>
                <p class="my-2" id="citation-40"><sup>40</sup> Смотри примечание 39.<a href="#ref-40" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-41"><sup>41</sup> В этот генезис входят Дхьяни-будды и
                    Дхьяни-бодхисаттвы.<a href="#ref-41" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-42"><sup>42</sup> Как лотос, вырастая из земли, проходя
                    через воду, раскрывает свой
                    цветок над поверхностью озера, не загрязняясь, так и существа, входящие
                    в этот генезис, нирванистичны, хотя и имеют тело (форму). Поэтому этот
                    генезис назван генезисом Нирманакаи (формного тела), или лотосовым.<a
                        href="#ref-42" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-43"><sup>43</sup> Подробно о мудростях см. 19: 763 –
                    471.<a href="#ref-43" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-44"><sup>44</sup> dkyil означает сердце или мудрость, природой которой является великое блаженство. Если указанной мудростью овладеть, то можно говорить
                    о dkyil 'khor [1: VI, 59].<a href="#ref-44" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-45"><sup>45</sup> Махамудра является основой и
                    объединяющим принципом буддийского тантризма. Она направлена на реализацию
                    недвойственности сансары
                    и нирваны (srid zhi mnyam nyid), и потому она — великая (chen po), так как
                    выше и вне ее нет никакой иной реальности; и она печать (phyag rgya), поскольку
                    под ее знаком или «печатью» находится вся реальность.<a
                        href="#ref-45" class="text-blue-500 hover:underline">↩</a></p>
                <p class="my-2" id="citation-46"><sup>46</sup> Печать обета есть знак стремления
                    йогина к оказанию помощи живым существам.<a href="#ref-46"
                                                                class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-47"><sup>47</sup> Ваджраяна определяет абсолют (chos
                    sku) как пребывающую в блаженстве (bde) ясно светящую мысль (gsal) без тени
                    какой-либо ошибки (mi rtog). Таким образом, дхармамудра есть знак реализации
                    йогином абсолютной ясности мысли в блаженстве Дхармакаи (sukha — prabhāsvara —
                    nirvikalpa).<a href="#ref-47" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-48"><sup>48</sup> <em>Кармамудра</em> направлена на
                    реализацию с помощью определенных
                    методов соединения, совпадая в единстве интуиции (shes rab, prajñā) и великого
                    милосердия (snying rje chen po; mahākāruṇā = thabs; upāya — метод).<a
                        href="#ref-48" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-49"><sup>49</sup> Следует учесть, что указанные четыре
                    мудры необходимо соотносить с четырьмя <em>жинхорами</em>.<a href="#ref-49" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="my-2" id="citation-50"><sup>50</sup> Объект указывания — это тантрийский идам (yi dam), недвойственность с которым стремится реализовать йогин. В этом смысле эта печать
                    созвучна печати плода. Yid означает «ум», dam означает «обет» (dam tshig),
                    или связь с конечной ясностью мысли. Отсюда yi dam, тантрийское божество, реализация ясности мысли, в шуньевой сущности которого есть цель
                    тантрийской практики.<a href="#ref-50" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-51"><sup>51</sup> Буквально "самадхи величайшей победы
                    в <em>жинхоре</em>". См. прим. 44.<a href="#ref-51"
                                                class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-52"><sup>52</sup> Превращение в созерцаемое божество есть создание ума йогина.
                    Реализация недвойственности этого созданного созерцанием тела с конечной реальностью достигается приглашением <em>джняны</em>, который является не абстрактной мудростью, а существом, шуньевые формы которого
                    символизируют конечную реальность, на что указывает термин ye shes
                    pa (а не ye shes, как в иных случаях).<a href="#ref-52"
                                                 class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-53"><sup>53</sup> См прим. 44.<a href="#ref-53"
                                                                              class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-54"><sup>54</sup> Здесь дается указание на движение
                    мысли йогина к идаму и возвращение ее в сердце йогина.<a href="#ref-54"
                                                                             class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-55"><sup>55</sup> См. прим. 23.<a href="#ref-55"
                                                                               class="text-blue-500 hover:underline">↩</a>
                </p>
            </div>
            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">
        </div>
        <!-- Нижняя навигация -->
        @include('layouts.article-navigation', ['currentPart' => 4, 'totalParts' => 7])
    </div>
@endsection
