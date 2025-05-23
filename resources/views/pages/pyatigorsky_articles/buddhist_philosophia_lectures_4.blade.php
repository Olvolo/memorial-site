@extends('layouts.app')

@section('title', 'Лекции по буддийской философии. Лекция четвертая - Мысль и мышление как невозможность')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset('backgrounds/watercolor.webp') }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @include('layouts.article-navigation', [
            'currentPart' => 4,
            'totalParts' => 5,
            'routeName' => 'pyatigorsky_articles.buddhist_philosophia_lectures',
            'articleTitle' => 'лекций'
        ])
        <!-- Заголовок -->
        <h1 class="text-center text-zinc-600 font-bold text-2xl sm:text-2xl md:text-2xl mt-6 mb-6">
            Лекция четвертая</h1>

        <h2 class="text-center text-zinc-600 font-bold text-xl sm:text-xl md:text-xl mt-6 mb-6">
            Мысль и мышление как невозможность: мысль - не откуда, а куда;</h2>

        <h2 class="text-center text-zinc-600 font-bold text-xl sm:text-xl md:text-xl mt-6 mb-6">
            континуум мысли и возможные философские последствия</h2>

        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">

            <p>Около четверти века назад Мераб Мамардашвили сказал в своей лекции московским
                психологам, что «мышление — это вещь совершенно невозможная» (именно мышление, а не
                его понимание!). Тогда я, разумеется, эту фразу не понял (хотя часто ее цитировал).
                Еще через десять лет один замечательный знаток буддийской философии, когда я спросил
                его о том же, что такое мысль, очень спокойно отвечал: если речь идет о буддизме, то
                надо спрашивать, что такое <em>citta</em> (то есть слово, обозначающее «мысль» на
                санскрите и пали), а не «мысль».</p>

            <p>Так мы возвращаемся к началу предыдущей лекции. Продолжая свою мысль, Мераб сказал:
                да, мышление невозможно, но оно тем не менее случается. Почти как в буддизме —
                «возникает»! На этом, однако, аналогия обрывается. Дело в том, что для Мераба как
                теоретика (в феноменологическом смысле этого слова) мышление оставалось (в отличие
                от сознания в его понимании) природным феноменом, требующим для своей реализации
                «сверхприродных» усилий — науки, философии, искусства и т. д. Для буддийских
                учителей Абхидхармы мышление всегда префабриковано, всегда уже искусственно
                произведено в йогическом созерцании, а потом для нас извлечено из этого созерцания в
                виде того, что обозначено словом <em>citta.</em> Но как натурный феномен мышление
                для них, так же как и для Мераба, совершенно невозможно. Отсюда введение ими так
                называемых синонимических дхарме «мысль» (Д 5, <em>citta)</em> дхарм: «способность
                ума», «сила ума» и т. д., по своим объяснениям совершенно одинаковых с «мыслью».</p>

            <p>Однако само слово «невозможно» имеет разные смыслы у Мераба и буддийских учителей. У
                него это слово употребляется в подчеркнуто риторическом контексте и имеет в виду
                мышление как уже случившееся. Он говорил: «Я держу эту мысль (держание мысли здесь
                выражение почти йогическое), и, пока я ее держу, я знаю, что она — есть. Но если
                подумать, как это случилось, то это совершенно невозможно». Буддийские учителя
                говорили: это невозможно, потому что этого нет. Держать мысль (йогический термин)
                для них — то же самое, что держать йогическую интенцию, направленную на мысль,
                мышление. Сама мысль — неудерживаема. Текст, который я сейчас процитирую, — один из
                самых точных и конечных в своих выводах буддийских текстов о мысли.</p>
            <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">

            <p>IV. 10 (15). «Что есть, о Кашьяпа, лекарство Запредельного Знания? Это знание
                причинности и Взаимообусловленного Возникновения. Знание, которое исходит из учения
                о небытии "Я", небытии одушевленных существ, небытии никаких существ, небытии
                личности, небытии индивида. Знание, в котором нет страха невосприятия фактов и вещей
                мира, ибо это знание об их пустотности. Знание, которое ищет мысль, все усилия
                которого направлены на мысль, на исследование мысли, ее знание и понимание. Он,
                ищущий мысль Бодхисаттва, думает:</p>

            <p>Что же такое мысль в ее привязанностях или отталкивании и гневе, неотстраненная и
                заблуждающаяся? Какая она — прошлая, будущая или настоящая? Но ведь если она
                прошлая, то она уже прекратилась. Если будущая, то она еще не возникла. Если
                настоящая, то непостижима в возникновении.</p>

            <p>О Кашьяпа, мысль не существует ни внутри, ни снаружи, ни в промежутке; она не
                постигается как существующая. У нее нет формы, оттого ее невозможно увидеть. У нее
                нет внешнего вида; ее невозможно познать, и у нее нет места. Ее никто не видел, не
                видит и не увидит — даже все Будды.</p>

            <p>...О Кашьяпа, мысль подобна майе (иллюзии), которая возникает в разных образах
                нереальности. Она подобна потоку, ибо поток только в движении возникновения и
                исчезновения. Она как ветер, уносящийся вдаль, во все стороны, и его не остановить,
                не схватить в восприятии. Она — как свет лампы — лишь обусловленно возникает, не
                пребывая, не существуя.</p>

            <p>О Кашьяпа, где бы ты ни искал мысль, ты ее не найдешь. А чего не найдешь, того не
                воспримешь. А то, что невоспринимаемо, не может быть прошлым, будущим или настоящим.
                А что не есть прошлое, будущее или настоящее, то — вне пределов трех времен. А то,
                что за пределами трех времен, то ни существует, ни не существует. А то, что ни
                существует, ни не существует, то — нерожденное. А что не рождено, у того нет своей
                сущности (или своей природы — <em>svabhаva</em>). А что не имеет своей сущности, то
                не возникает. А что не возникает, то не прекращается. А что не прекращается, то не
                движется. А что не движется, то не приходит, не уходит, не умирает, не рождается
                снова, не возникает обусловленно. А что не возникает обусловленно, то необусловленно
                <em>(asamskrta)</em>. А то, что необусловленно, то и есть источник (gotra — "род")
                Благородных <em>(агуа</em> — то есть Будд)»<a href="#citation-1" id="ref-1"
                                                              class="citation-mark"><sup>1</sup></a>.
            </p>
            </blockquote>
            <p>Выше я назвал этот текст «конечным» (а не, скажем, «окончательным») в отношении мысли
                потому, что он экспонирует направление, в котором мысль исследуется. Точнее —
                направление, в котором объясняется ее невозможность. Заметим, что все начинается,
                как и в предыдущем «случае», с возникновения обыкновенной чувственной (то есть
                привязанной к объектам чувств и т. д.) мысли, о которой можно сказать только то, что
                она «возникает». Но и ее возникновение — это лишь точка отсчета, а не реальная точка
                во времени или пространстве. Ибо в тексте сказано, что у мысли нет времени и она не
                может быть локализована. Таким образом, следуя за объяснением Будды, мы не можем
                спросить о мысли, откуда она. Но уже знаем куда: в этом объяснении направление мысли
                — в «никуда» абсолютной (нирванической) необусловленности буддства, в Готру
                Благородных. Хорошо, но ведь здесь говорится о направлении в объяснении, не о
                направлении самой мысли, не так ли? Ведь говорить о направлении самой мысли, о
                которой мы уже знаем, что она «не движется», было бы непростительным натурализмом!
                Но тогда нелишним было бы и задать вопрос: а не будет ли «провалом» в натурализм и
                сам вопрос о возможности или невозможности мысли?</p>

            <p>Чтобы ответить на этот вопрос, вернемся к первому абзацу нашего текста. Будда,
                который сообщает Кашьяпе о бесстрашии невосприятия, о небытии существ и личностей и
                о невозможности мысли, сам бесстрашен, сам не существо и не личность и, наконец, сам
                не мыслит, в том смысле, в каком объясняет невозможность мысли. Позиция, с которой
                он объясняет, бесконечно дальше от позиции самого высшего из возможных йогических
                состояний, чем последняя от самого низшего из состояний обыкновенных живых существ.
                Эта позиция, точнее, «не позиция» Будды и есть то «место — не место», то условное
                «куда» мысли (не мысли вообще, а любой мысли), где она получает свое разрешение как
                необусловленная, полностью пробужденная и предсуществующая всему возникающему и
                невозникающему. Сама эта сверхпозиция не может характеризоваться ни невозможностью,
                ни не-невозможностью мысли, потому что она нехарактеризуема <em>(alaksana)</em>.</p>

            <p>В текстах середины I тысячелетия н. э. предлагается несколько версий философского
                истолкования этой позиции. Рассмотрим две из них, которые я условно называю «слабой»
                и «сильной». Согласно слабой версии, мысль безначально возникает (то есть не было
                времени, когда не было бы возникновения мыслей) в одушевленных существах (как бы
                топосах ее возникновения), тоже безначальных. В потоках мысли, возникающих в этих
                существах — как в течение их «жизней», так и в циклах перерождений (напомню, что это
                потоки «перерождаются», не существа), — может возникнуть мысль о полном освобождении
                от мира Взаимообусловленного Возникновения (включающего в себя сами эти потоки
                мысли, так же как и одушевленные существа). Эта Полностью Пробужденная Мысль <em>(bodhicitta)</em>
                в Полностью Пробужденном Существе и видит (знает) любую мысль и мысль вообще так,
                как она описана в нашем тексте.</p>

            <p>Согласно сильной, или «перевернутой», версии, никто не знает мысли, как она есть
                (даже Будды, как в нашем тексте). Мы не можем знать мысль в ее возникновении не
                только как натуральный объект, но и как объект уже йогически трансформированный. (То
                есть, строго говоря, йог знает, что он делает с мыслью, не саму мысль — в отличие от
                простого человека <em>(prthakjana)</em>, который ничего с ней не делает.) Мысль
                (точнее, возникновение мысли) существует только в факте Полностью Пробужденной
                Мысли, в которой, и только в которой, она узнается как непробужденная, со всей
                «историей» потоков мыслей и живых существ, в которых она возникала, то есть со своей
                картиной, описанной в нашем тексте и резюмированной в слабой версии. Но самое
                философски важное здесь — это то, что опять же фактически — то есть только в смысле
                нашего (а не Будд!) говорения и думания о ней — мысль со всеми ее «случаями» (то
                есть со всем мыслимым ею миром феноменов) генерируется в пробужденной мысли Будд и
                Бодхисаттв. И эта генерация — которая сама, разумеется, не знает времени — является
                по необходимости обратной: от узнавания пробужденной мыслью любой мысли как
                пробужденной — к источнику <em>(gotra)</em> этой пробужденности в любой
                непробужденной мысли.</p>

            <p>Говоря о сильной версии истолкования позиций двух последних текстов [(14) и (15)], я
                не могу удержаться от аналогий с некоторыми современными философскими и научными
                идеями, сознавая при этом спекулятивность и произвольность этих аналогий. К этому
                особенно побуждает центральный момент сильной версии — «захват» мысли вообще и любой
                мысли в отдельности пробужденной мыслью; момент, от которого и происходит обратный
                разворот той же мысли в ее генерации мыслью пробужденной.</p>

            <p>Начну с «чистой феноменологии» (die reine Phanomenologie) в моем чисто выводном — то
                есть в порядке вывода из раннего Гуссерля — понимании. В таком понимании мысль как
                идея о мысли не существует до или вне мышления о ней, то есть до и вне акта
                рефлексии. Последний я могу понимать как безразличный к содержанию (в буддийском
                смысле, объекту) рефлексируемой мысли, так же как и к ее «психическому» субъекту, не
                существующему в «составе» гуссерлевской трансцендентальной субъективности.</p>

            <p>Таким образом, крайне упрощая феноменологический подход, можно было бы сказать, что
                мысли как идеи нет без рефлексии. Хорошо, а что можно будет сказать о мысли как
                натурном феномене? О мысли, у которой есть [именно «есть», а не «возникает вместе
                с», как в тексте (14)] содержание?</p>

            <p>Ответ на этот вопрос дает Стивен Хокинг, enfant terrible and darling британской
                теоретической физики. В конце своей книги «Краткая история времени» он пишет, что из
                его гипотезы о происхождении Вселенной в результате «Большого взрыва» (Big Bang)
                прямо следует, что то, что случилось в первые миллиардные доли секунды после взрыва,
                абсолютно предопределило все последующие события, включая его гипотезу об этом, то
                есть мысль о взрыве как начало всего. (О взрыве, который, заметим, сам не имеет
                причины ибо последняя лежит за пределами физически мыслимой Вселенной.) Здесь —
                прямая аналогия с буквально (то есть по Александру Кожеву) понимаемым Гегелем,
                который говорил, что Абсолютная Идея нашла свою самореализацию в порядке
                исторического процесса в его, Гегеля, «Йенских семинарах» (1806 г.). На этом, как мы
                знаем, у Гегеля собственно (proprement dit!) история закончилась, как и философия.
                Хокинг здесь скромнее (или он не читал «Феноменологии духа»). Его гипотеза, пожалуй,
                ближе к слабой версии, хотя и обладает некоторыми чертами сильной. Но в обоих
                случаях (!) мысли, Гегеля и Хокинга, философия — очень тяжелая: однолинейно
                направленный абсолютный детерминизм, примитивный онтологизм и, конечно, «тупиковая
                точка» начала (то есть творения). Хотя и со слабой надеждой на рекурренцию у
                Хокинга. Что делать! Философия так легко не выигрывает. В обоих случаях, при всем их
                различии (я не говорю о различии личностей — Гегель не пил виски «Белая лошадь» и не
                убежал от жены на инвалидной коляске с молодой медсестрой), та же интуиция о
                единстве (точнее — об одной природе) знающего и знаемого, мыслящего и мыслимого и об
                отсчете событий от данного момента или факта мышления о них.</p>

            <p>Гораздо более сильно, я бы сказал, предельно, эта философская интуиция выражена в
                мышлении Ричарда Фейнмана. В своих «общедоступных» лекциях по квантовой
                электродинамике он говорит примерно так: «Что такое фотон, я не знаю, и вы,
                наверное, тоже. Как "что" он не существует. Но на основании эксперимента можно
                сказать: фотон движется из точки А в точку В (поскольку детектор света засек
                движение в этих точках). Еще мы знаем, что если направить под определенным углом
                пучок фотонов из точки А (источник света) в точку В, расположенную на зеркальной
                поверхности, от которой фотоны будут отражаться под тем же углом и попадать в точку
                С, где находится детектор фотонов, то туда попадет 4 процента фотонов,
                зарегистрированных в точке А. Почему именно 4 процента? А не почему! Просто так
                устроена природа, или Вселенная, или называйте это устройство каким угодно другим
                словом».</p>

            <p>Здесь прямая аналогия с сильной версией позиции текста (15). Только вместо мысли —
                фотон, точнее, мысль о фотоне как о том, что мыслится только как «движение от А к В»
                или как то, 4 процента чего попадают в С. Причина этого отбрасывается не в силу так
                называемого доказательства Гёделя, а потому, что ее нет, а есть устройство — одно
                для фотона и моей мысли о нем, то есть что и последняя так устроена, что знает фотон
                как движение из А в В и т. д. Но это — только об обусловленном. Пробужденная Мысль
                видит не только обусловленное, но и необусловленное, то есть Источник Благородных
                [<em>aryagotra</em>, в самом конце текста (15)].</p>

            <p>Главная трудность понимания позиции нашего текста (в обеих версиях) состоит в том,
                что сама эта позиция трансцендентальная, в то время как мысль, о которой идет речь,
                всегда и трансцендентальна, и не трансцендентальна. Именно эта двойственность, по
                словам Эдварда Конзе, делает едва ли не невозможным для философа, не прошедшего
                школы йогического опыта, это «переключение» в наших суждениях с эмпирического на
                трансцендентальное.</p>

            <p>Мы читаем в текстах Абхидхармы, что мысль обусловленно возникает не только вместе со
                своим случаем, но и в данном индивидуальном континууме мысли <em>(cittasaṁtāna)</em>,
                который и есть то, что мы называем «жизнь» (в смысле «одна жизнь, другая жизнь»,
                «моя жизнь, его жизнь» и т. д.). Вот описание этого континуума.</p>

            <p>IV. 11 (16). «Перейдем теперь к объяснению порядка упражнения в йоге вспоминания <em>(anussati)</em>
                смерти.</p>

            <p>Смерть — это обрывание (или "отрезание") жизненной способности [<em>jīvitindriya</em>
                — 18-я дхарма согласно тексту (14)] в одном существовании (<em>ekabhava</em>).
                Обыкновенная смерть, о которой сейчас разговор, бывает двух родов — нормальная и
                безвременная (<em>akalamaraṇa</em>)... Но всякая смерть — это обрывание континуумов
                (<em>santāna</em>)... в силу действия прежних поступков (<em>karma</em>).</p>

            <p>...В йоге вспоминания (<em>sati</em>) смерть созерцается как момент сознания
                (будущего) рождения, а рождение — как уже содержащее момент (сознания) смерти.</p>

            <p>...Сколь краток один момент жизни! Он столь же краток, как один момент мысли [<em>cittakkhaṇa</em>,
                то есть момент Возникновения Мысли, как в тексте (14), меньше которого не может быть
                времени]. Подобно тому как колесо повозки вращается и останавливается внутри
                окружности своего обода, так же и жизнь одушевленного существа измеряется мгновением
                мысли. С прекращением мысли прекращается (данная) жизнь»<a href="#citation-2"
                                                                           id="ref-2"
                                                                           class="citation-mark"><sup>2</sup></a>.
            </p>

            <p>Это отрывок из «Пути Очищения (от Скверн)» <em>(Visuddhimagga)</em>, одного из
                важнейших неканонических текстов буддизма Малой Колесницы. Из неканоничности этого
                текста следовало — и реально-исторически тоже, — что его позиция могла не только не
                приниматься, но и прямо отвергаться (как, например, в современной школе «Буддийского
                Реализма» Достопочтенного Суманы Сири), что, разумеется, предоставляет больший
                простор для философских истолкований. Кроме того, этот текст — чисто йогический: он
                является единственным сохранившимся в тхеравадинской традиции с древних времен (его
                автор, великий комментатор Буддхагхоша, жил в конце V или начале VI века н. э.)
                «полным» учебником буддийской йоги на языке пали. Итак, что такое континуум мысли и
                причём здесь смерть?</p>

            <p>Слово «континуум» мысли имеет два значения. Во-первых, это следующие друг за другом
                серии Возникновений Мысли (<em>cittavīthi</em>), которые обусловленно (то есть в силу
                Взаимообусловленного Возникновения) связаны друг с другом (то есть как одна мысль с
                другой внутри серии, так и одна серия с другой внутри континуума). В этом смысле
                континуум мысли — это то, внутри чего ни один «момент мысли» (<em>cittakkhaṇa</em>)
                не может возникнуть одновременно с другим. Или это такая связь возникновений мысли,
                в которой никакая мысль не может возникнуть в тот же момент, что и другая. Вместе с
                тем это и такая связь, которая предполагает и некоторую, условно говоря,
                «пространственную компактность» возникновений и их серий внутри данного континуума
                и, таким образом, отделенность одного континуума от другого в пространстве. Эта
                связь обеспечивается энергиями связи [или «сознательными интенциями»
                (<em>saṃskāras</em>), в общем смысле соответствующими четвертому агрегату
                индивидуального существования или Д 4 в тексте (14)]. Они «держат вместе»
                мыслительное содержание континуума, с одной стороны, а с другой — продолжают,
                продлевают его как «целое» во времени. В каком времени? Но ведь мы уже знаем, что
                время — это время мысли и сознания. Другого времени нет. И в этом времени, точнее, в
                смысле этого времени каждый данный континуум мысли безначален. То есть не было
                времени, когда бы его не было. Он прекратится только с прекращением энергий связи в
                цепи Взаимообусловленного Возникновения вместе с прекращением индивидуального
                сознания, то есть в Нирване. Смерть, согласно нашему тексту, и является тем особым
                моментом мысли в континууме, который как бы разделяет его на разные «жизни» и
                «существования», но этот же момент мысли и соединяет данное существование со
                следующим, будучи своего рода латентным сознанием их связи (<em>paṭisandhi</em>).
                Именно поэтому буддийские философы могут говорить, хотя и с оговорками, о
                перерождении и другом рождении — но не континуума мысли, ибо его никогда нет, он
                всегда становится, возникает с возникновением «составляющих» его мыслей и серий
                мыслей, а того, чем условно этот континуум обозначается: именем личности,
                Благородной Личности, Бодхисаттвы, Будды. [Кстати, «имя» (<em>nama</em>) как термин,
                обозначающий «сознание», — буддийское изобретение.]</p>

            <p>Так мы переходим ко второму значению слова «континуум», в котором оно обозначает тот
                «отрезок» континуума в его первом смысле, который начинается с первой мысли о
                (настоящем) рождении и (будущей) смерти данного живого существа <em>(satta)</em> в
                момент зачатия и заканчивается последней мыслью о (настоящей) смерти и (будущем)
                рождении в момент смерти. Именно в этом его значении континуум мысли становится
                почти синонимом живого существа и одновременно тем «местом», где возникает мысль со
                всеми ее «случаями» в порядке Взаимообусловленного Возникновения. Так как, позволю
                себе напомнить, сама формулировка Взаимообусловленного Возникновения — это только о
                мысли (или сознании, но об их различиях ниже). Именно в связи с осознанием
                Взаимообусловленного Возникновения в отношении индивидуального мышления буддийские
                учителя середины I тысячелетия н. э. ввели понятие мысли как элемента (и условия)
                индивидуального существования. (То есть, строго говоря, опять же индивидуального
                «места» мышления.) Это понятие «мысли существования» <em>(bhavan-gatitta)</em> было
                введено именно в силу, я бы сказал, чисто философской необходимости в чем-то хотя и
                мыслительном, но вместе с тем и природном. Ибо «мысль существования», обозначая
                вместе первую и последнюю мысли одушевленного существа, также обозначает и ту
                неосознанную «природную» силу, которая понуждает континуум мысли каждый раз
                продлеваться от рождения к смерти и снова рождаться, от смерти к следующему
                рождению. Последнее обстоятельство подчеркивается еще и разъяснениями позднейших
                комментаторов, полагающих, что «мысль существования» не может себя знать, в ней нет
                самосознания <em>(svasamvedana)</em>. Как понятие континуума мысли, так и его
                конкретизация, понятие «мысли существования», явно появились как выводные и
                дополнительные в отношении к позициям наших текстов о Взаимообусловленном
                Возникновении и о Возникновении Мысли. Их постулятивность кажется многим буддистам и
                буддологам натянутой и, так сказать, вырожденной, что, я думаю, связано с
                несвойственной буддизму натурфилософичностью этих понятий. На основании постулата о
                континууме мысли можно сделать два предположения общефилософского характера. Первое,
                поскольку каждый континуум мысли безначален в своем возникновении и поэтому
                «перерождался» в бесконечном количестве существ, то можно предположить, что в каждом
                континууме возникали мысли всех континуумов. То есть что нет мысли, которая возникла
                бы в одном континууме и не возникла бы в другом. Второе, что каждый «отрезок»
                данного континуума, то есть каждый континуум одной жизни (или одного перерождения),
                содержит в себе, тем или иным образом, все мысли всего данного континуума. На втором
                предположении, которое я бы назвал «сверхсильным», я остановлюсь в пятой лекции.
                Сейчас только замечу, что обо предположения уже содержат, имплицитно, проблему
                содержания мысли, то есть о чем она, которая никак не решается одной отсылкой к
                перечислению ее объектов [как в тексте (14)], с одной стороны. С другой же — эти
                предположения подразумевают и наличие образов и модификаций (<em>parinama</em>), в
                которых мысли «пребывают» или «остаются» в континууме мысли — пока, в наших текстах
                они ведь только возникают.</p>

            <p>Обе проблемы — и содержания мысли, и ее образа или модификации — привели буддийских
                мыслителей первой половины I тысячелетия н. э. к необходимости введения сознания, в
                смысле, в котором это слово уже не будет синонимичным или будет не полностью
                синонимичным слову «мысль». Об этом — в пятой лекции.</p>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>

                <p class="my-2" id="citation-1"><sup>1</sup> A'phag-pa od-srun-gi leu zhes bya-ba
                    theg-pa chen-po'i m'do. Dharmasala, 1989. F. 129-131.<a href="#ref-1"
                                                                            class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-2"><sup>2</sup> The Visuddhimagga of Buddhaghosa / Ed.
                    C. A. F. Rhys Davids. London, 1975. P. 237-239.<a href="#ref-2"
                                                                      class="text-blue-500 hover:underline">↩</a>
                </p>

            </div>

            <p class="text-right italic text-gray-600 mt-4">А. М. Пятигорский</p>
            <p class="text-right italic text-gray-600 mt-4">Лекции по буддийской философии</p>
        </div>
        @include('layouts.article-navigation', [
    'currentPart' => 4,
    'totalParts' => 5,
    'routeName' => 'pyatigorsky_articles.buddhist_philosophia_lectures',
    'articleTitle' => 'лекций'
])
    </div>
@endsection
