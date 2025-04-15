@extends('layouts.app')

@section('title', 'Введение в изучение буддийской философии. Семинар третий')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset('backgrounds/watercolor.jpg') }}');
            background-attachment: fixed;
            background-size: cover;
        }

        .citation-mark:hover {
            text-decoration: underline;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <!-- Основной текст семинара -->
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Семинар третий</h2>
            <h3 class="text-xl text-center font-semibold text-zinc-700 mb-4">Текст III. Всё в огне<a
                    href="#citation-1" id="ref-1" class="citation-mark"><sup>1</sup></a> (Третья
                проповедь)</h3>
            <blockquote class="my-6 pl-4 border-l-4 border-gray-300">
                <p>Так я слышал. Одно время Господь жил у горы Гайясиса близ Гайи. Там он однажды
                    обратился к монахам с такой проповедью: «Всё - в огне, о монахи. И что же это за
                    «всё», что в огне? О монахи, глаз горит, зрительные формы<a href="#citation-2"
                                                                                id="ref-2"
                                                                                class="citation-mark"><sup>2</sup></a>
                    горят, зрительное сознание<a href="#citation-3" id="ref-3"
                                                 class="citation-mark"><sup>3</sup></a> горит,
                    зрительный контакт<a href="#citation-4" id="ref-4"
                                         class="citation-mark"><sup>4</sup></a> горит. Любая
                    эмоция<a href="#citation-5" id="ref-5" class="citation-mark"><sup>5</sup></a>,
                    возникающая из контакта органа чувств с его объектами - будь она приятной,
                    неприятной или ни приятной, ни неприятной, - горит. Но чем же всё это
                    воспламеняется? - Пламенем страсти<a href="#citation-6" id="ref-6"
                                                         class="citation-mark"><sup>6</sup></a>, о
                    монахи, пламенем ненависти<a href="#citation-7" id="ref-7"
                                                 class="citation-mark"><sup>7</sup></a>, пламенем
                    заблуждения<a href="#citation-8" id="ref-8"
                                  class="citation-mark"><sup>8</sup></a>. Так же, как горит глаз,
                    горит ухо, горит тело<a href="#citation-9" id="ref-9"
                                            class="citation-mark"><sup>9</sup></a>, да точно так же
                    горит и ум<a href="#citation-10" id="ref-10" class="citation-mark"><sup>10</sup></a>,
                    объекты ума<a href="#citation-11" id="ref-11"
                                  class="citation-mark"><sup>11</sup></a> и умственное сознание<a
                        href="#citation-12" id="ref-12" class="citation-mark"><sup>12</sup></a>. Но
                    что же питает этот огонь, что служит ему топливом? Топливо для этого огня - это
                    рождение и старение, это - страдание и горе, грусть, неудовлетворенность и
                    отчаяние.</p>
                <p>Видя этот огонь, о монахи, хорошо обученный ученик Благородных<a
                        href="#citation-13" id="ref-13" class="citation-mark"><sup>13</sup></a>
                    устает от (своих) органов, их объектов, от их контактов с объектами и от
                    сознания, соответствующего каждому из органов чувств. Ему уже надоели (его
                    собственные) эмоциональные реакции на все чувственные объекты, будь эти реакции
                    положительны, отрицательны, либо ни положительны, ни отрицательны. И, полностью
                    разочаровавшийся в жизни, он отстраняется от нее и становится бесстрастным в
                    отношении всех объектов органов чувств. Через бесстрастность обретает он
                    конечное освобождение. Затем он обретает знание своего освобождения<a
                        href="#citation-14" id="ref-14" class="citation-mark"><sup>14</sup></a>. Он
                    уже постиг, что им прожита чистая жизнь, то, что должно быть им совершено,
                    совершено, ничего не осталось не сделанного в этой жизни, а другой у него не
                    будет, ибо закончился круг перерождений».</p>
                <p>Когда Будда завершил свое изложение, умы внимавших ему монахов были полностью
                    очищены от всех скверн<a href="#citation-15" id="ref-15"
                                             class="citation-mark"><sup>15</sup></a>. Огонь
                    прогорел, пламя угасло.</p>
            </blockquote>
            <h3 class="text-xl text-center font-semibold text-zinc-700 my-4">Метафорой чего служит
                метафора огня?</h3>
            <p>Поначалу кажется, что нет ничего проще. Ведь Будда уже ответил на этот вопрос словами
                «Всё в огне, о монахи». Но уже следующий вопрос «что же это всё, что горит?» ставит
                нас перед весьма сложной онтологической проблемой: имеет ли слово «все» в
                утверждении, что «всё - в огне», тот же смысл, который оно имеет в вопросе «что же
                это за всё, что горит». Да и имеет ли смысл сам этот вопрос? Если мы, в нашем
                философствовании будем следовать направлению, которого мы придерживались в
                предыдущем семинаре, где речь шла о «Не-Я», то мы придем к очень простому выводу:
                подобно тому как во второй проповеди «Не-Я» редуцируется к «Не-Я», отсутствующему в
                пяти агрегатах индивидуального существования, скандхах, так в третьей проповеди
                «всё, что в огне» редуцируется к шести органам чувств. В обоих случаях вектор
                редукции направлен к микрокосму сознания, к индивидуальной психике с ее сенсорными
                механизмами. В конце концов, апелляция к органам чувств и чувственному компоненту
                психики есть философская необходимость, ибо о том, что чувственно (или мыслительно)
                воспринимается, мы либо ничего не можем сказать, либо нам остается сказать, что это
                нечто, неизвестная величина, ускользающая от всех определений.</p>
            <p>Однако в ответе на вопрос «что это за огонь?» нам придется изменить вектор
                философствования и перейти к особому измерению индивидуального существования,
                измерению, которое я бы условно назвал вторым (первое составляют шесть органов
                чувств с их специфическими сознаниями, объектами и модальностями). Это измерение,
                которое, опять условно, я называю измерением чистой ментальности, вторично по
                отношению к контактам органов чувств с их объектами и является реакцией на них.
                Здесь реакция может быть отделена от контакта каким угодно промежутком времени - от
                мгновенного или даже нулевого (в случае их синхронности) до сколь угодно долгого
                (можно даже себе представить «минусовое время» такого промежутка в случае, когда
                реакция на контакт будет опережать сам этот контакт). Чистая ментальность, как
                понятие, обнимает всю эмоционально-мотивационную сферу и является относительно
                автономной, независимой от всех шести органов чувств.</p>
            <p>Ответ на вопрос «что питает этот огонь, что служит ему топливом?» ведет нас к
                третьему измерению индивидуального существования, квазионтологическому, в котором мы
                покидаем как сферу чувственности, так и сферу эмоций, волитивных импульсов и
                мотиваций. Иначе говоря, мы покидаем психологию и переходим к онтологии, т.е. к
                фактам: факторам и условиям, определяющим в объективном порядке существование всех
                феноменов, дхарм. Я называю это измерение «квазионтологическим», потому что
                составляющие сферу этого измерения универсальные знаки, непостоянство, «Не-Я»,
                страдание - не есть. Они возникают или прекращают возникать, как и все другие
                дхармы. Или можно сказать, что сама жизнь во всех своих фазах питает огонь во всех
                этих проявлениях. Она питает огонь, которым пылает весь микрокосм психики. Это
                жизнь, означенная тремя вещами - страданием, невечностью и отсутствием «Я». Добавим
                к этому, жизнь сама по себе ни хорошая, ни плохая, но все-таки определенно плохая,
                так как определяемая страданием.</p>
            <p>Сейчас мы дошли до момента, когда надо будет сделать следующий шаг в разъяснении
                квазионтологичности третьего измерения. Шаг на этот раз феноменологический. Ведь с
                точки зрения страдания жизнь есть не более чем абстрактная вероятность, которая
                обретает свои конкретные чувственно воспринимаемые или умопостигаемые черты только в
                том случае, если она стала объектом сознания, осознающего ее как страдание. Значит,
                жизнь есть осознанное страдание и осознание страдания. Но чья жизнь? Комментируя
                Сутру Огня, Ван Зейст пишет: «Заметьте, что в заключительных строках третьей
                проповеди нет ни одной отсылки к конкретной личности... Ведь это не Ученик
                Благородных, кто предотвращает будущие рождения своей чистой жизнью, сделав то, что
                было должно сделать, и выполнив все должное быть выполненным ... и не Пробужденный,
                погасивший (в себе) пламя. Конфликт не разрешен ... а разрешился. То, что пылало -
                прогорело как бы «само собой». Огонь угас». Тогда мы могли бы себе представить, что
                в этом «эпистемологическом интервале» между негативной квазионтологией «Не-Я» и
                крайне сокращенной феноменологией сознания, лишенного «Я», - там-то и появилось то
                «само собой» из этой цитаты Ван Зейста, которое обозначает совершенно иную
                философскую позицию.</p>
            <p>Чтобы понять эту позицию, вернемся сначала к органам чувств, поскольку «универсальный
                пожар» следует в своей трехчастности, тройственной схеме измерений индивидуального
                существования, которая (если мы опять возьмем зрение как пример чувственного
                восприятия) может быть представлена следующим образом:</p>
            <ul class="list-disc pl-6">
                <li><strong>(I)</strong> Зрительный психофизиологический комплекс, включающий в себя
                    (а) орган зрения, глаз; (в) объект зрения; (с) контакт органа зрения с его
                    объектом; (d) особое зрительное сознание (Р. cakkhu-dhatu, Skr. caksur-dhatu).
                </li>
                <li><strong>(II)</strong> Весь этот зрительный психофизиологический комплекс
                    воспламеняется тремя основными умственными «энергиями помрачения» - страстью,
                    ненавистью и заблуждением.
                </li>
                <li><strong>(III)</strong> Топливо, постоянно питающее огонь, - это страдание во
                    всех своих модификациях, главными из которых являются болезнь, старость и
                    смерть.
                </li>
            </ul>
            <p>Теперь остановимся на одном интересном философском моменте этой схемы. На первый
                взгляд направление причинности здесь будет от страдания и его манифестаций к
                энергиям помрачения, а от них - к психофизиологическому комплексу (в данном случае
                зрения). На самом же деле здесь мы имеем дело с эпистемологической проблемой,
                которая не может быть разрешена, пока не придет ответ на вопрос «что страдает?».
                Преуспевающий в постижении Благородных Истин, Ученик Благородных устает от органов
                чувств, отстраняется от всей психофизиологической чувственности, т.е. от того, что
                обозначено (I) в нашей схеме, ибо совершенно невозможно начать отстранение со
                страдания, (III) поскольку страдание «всегда здесь», всегда un fait accompli, так
                сказать, и мы всегда философствуем о нем post factum. Тогда как наш
                психофизиологический комплекс (I) существует всегда в настоящем времени. Таким
                образом, Ученик Благородных, отстраняясь от чувственной жизни и став бесстрастным,
                больше не присутствует в настоящем времени чувственной жизни (да и любой другой
                психической активности) и тем загашает огонь. Тогда наша схема обратной причинности
                будет (I)->(II)->(III).</p>
            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">
            <!-- Блок примечаний -->
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>
                <p class="mb-3" id="citation-1"><sup>1</sup> Adittipariyaya-sutta (Samyutta-Nikaya,
                    XXV, 28 of Sutta-pitaka in. Pali Canon / Ed. by L.Feer and Mrs. C. Rhys Davids.
                    L.: Pali Text Society, 1904. P. 164. Этот текст относится к жанру разъяснений,
                    apariyaya в его названии буквально означает «разъяснение», «рассуждение».<a
                        href="#ref-1" class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-2"><sup>2</sup> «Зрительные формы» - это формы (Р. и
                    Skr. гира), различимые зрением. В этом же смысле говорится о слуховых,
                    осязательных, умственных и прочих формах. Но именно зрительные формы полагаются
                    собственно формами, формами по преимуществу, даже формами как телами. Возможно,
                    это связано и с тем, что зрение считалось наиболее универсальным видом
                    чувственного восприятия. Отметим, что зрительные формы здесь - это не то же
                    самое, что объекты зрения.<a href="#ref-2"
                                                 class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-3"><sup>3</sup> «Зрительное сознание» - каждому из
                    шести органов чувств (ум - это шестой орган) соответствует особый тип сознания,
                    которое следует отличать от сознания как пятого агрегата индивидуального
                    существования.<a href="#ref-3" class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-4"><sup>4</sup> «Зрительный контакт» - то есть
                    «контакт» (Р. samphassa, Skr. samsparsa) органа чувства (в данном случае глаза)
                    вместе с его объектом.<a href="#ref-4"
                                             class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-5"><sup>5</sup> «Любая эмоция» - или «чувства» как
                    второй агрегат индивидуального существования (см. I, прим. 25).<a href="#ref-5"
                                                                                      class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-6"><sup>6</sup> См. I, прим. 25.<a href="#ref-6"
                                                                                class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-7"><sup>7</sup> «Ненависть» (P. dosa, Skr. dvesa)
                    является главной негативной силой ума.<a href="#ref-7"
                                                             class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-8"><sup>8</sup> «Заблуждение» (Р. и Skr. moha) здесь -
                    естественная тенденция ума, ведущая к заблуждению, к тому, чтобы ошибаться;
                    также естественная неприязнь к знанию, умственная пассивность, лень ума.<a
                        href="#ref-8" class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-9"><sup>9</sup> «Тело» (Р. и Skr. kaya) считается
                    органом осязания.<a href="#ref-9" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-10"><sup>10</sup> «Ум» (Р. mano, Skr. manas) входит в
                    сознание (пятый агрегат индивидуального существования) и очень часто фигурирует
                    как синоним последнего.<a href="#ref-10"
                                              class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-11"><sup>11</sup> «Объектами ума» являются мысли и
                    идеи.<a href="#ref-11" class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-12"><sup>12</sup> Здесь «сознание» - не пятый агрегат
                    индивидуального существования, а особая разновидность ума.<a href="#ref-12"
                                                                                 class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-13"><sup>13</sup> «Благородный» здесь фигурирует в
                    терминологическом смысле, т.е. либо как Пробужденный (познавший Четыре
                    Благородные Истины), либо как Архат (полностью освободившийся от всех скверн и
                    помрачений).<a href="#ref-13" class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-14"><sup>14</sup> См. I, прим. 36.<a href="#ref-14"
                                                                                  class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-15"><sup>15</sup> «Скверна» здесь - одна из
                    конкретизации понятия «умственный приток». Умственные притоки - это помрачения
                    ума, главными из которых являются: (1) чувственное наслаждение, чувственная
                    любовь (Р. и Skr. kama), (2) спекулятивные идеи, концепции и точки зрения (Р.
                    ditthi, Skr. drsti), «алчба бытия» (Р. и Skr. bhava) и «неведение» (Р. avijja,
                    Skr. avidja). Освобождение от всех притоков является основным условием
                    архатства.<a href="#ref-15" class="text-blue-500 hover:underline">↩</a></p>
            </div>
        </div>
    </div>
@endsection
