@extends('layouts.app')

@section('title', 'Журнал «Гаруда». Основные темы')

@section('content')
    <div class="container mx-auto px-4 biography">
        <img src="{{ asset('images/garuda_journal.png') }}" alt="Журнал Гаруда" class="article-image my-4 rounded-lg shadow-md">
        <!-- Заголовок -->
        <h1 class="text-2xl font-bold text-center mb-8">НЕЗАВИСИМЫЙ ИСТОРИКО-ФИЛОСОФСКИЙ БУДДОЛОГИЧЕСКИЙ ЖУРНАЛ «ГАРУДА».<br>ОСНОВНЫЕ ТЕМЫ</h1>

        <p>Дорогие читатели! Перед вами девятый номер «Гаруды». Определились и частично воплотились в публикациях основные темы журнала. В ближайших номерах мы завершаем цикл статей Б.Д. Дандарона, продолжим серию переводов произведений Лончена Рабжама, закончим опус Дж. Рейнольдса о боне и, конечно же, продолжим знакомить вас с дзогченом.</p>

        <p>Публикуя статьи Дандарона, мы отдаем дань ученому, имя которого при жизни замалчивалось и чья деятельность не ограничивалась только буддологией. Именно его усилия изменили положение буддизма в СССР, и сейчас в России буддизм от Владивостока до Санкт-Петербурга представлен широким спектром дальневосточных, южных и тибетских школ. К сожалению, многие из неофитов даже не слышали его имени и не предполагают, что именно его жизненный подвиг и трагический уход из жизни в тюрьме и дал им, молодым нашим современникам, возможность исповедовать и практиковать дхарму. Дандарон был бесстрашным научным и духовным исследователем. Он называл свой поиск <i>необуддизмом</i>, смысл которого видел не только в синтезе дхармы и современной науки, но в развитии с опорой на традицию самой дхармы.</p>

        <p>Внимание к сочинениям Лончена Рабжама (1308–1364), уделяемое редакцией «Гаруды», которая стала антологией его произведений и единственным изданием на русском языке этого тибетского философа и йога, не случайно. Это направление исследований и духовного поиска было указано своим ученикам Б.Д. Дандароном. Работы Лончена Рабжама – не только философские и психологические шедевры, не только жемчужины буддийской йоговской методологии, но представляют собой совершенный синтез и системное изложение наиболее смелых и оригинальных духовных исканий индийских, китайских и тибетских буддистов за предшествующее почти тысячелетие. Мысли Лончена Рабжама столь неожиданны, столь недогматичны и глубоки, что сам он воспринимается ныне как современник, более того, как старший и умудренный соратник, как ведущий наставник, <i>ачарья</i>. Он знакомит нас с древними тантрами дзогчена, с идеями наиболее оригинальных экспериментаторов духа и философов предшествующих веков. В нашем журнале публикуются в основном работы «позднего» Лонченпы, периода завершения его методологического и структурного синтеза, воплощенного в сборнике «Забмо Янтиг». В этом номере мы закончим знакомить вас с биографией Лончена Рабжама в изложении ламы Тондуба Ринпоче…</p>

        <p>Продолжаем публикацию исторического исследования Дж. Рейнольдса о боне. Это сочинение на данный день представляет собой наиболее подробное описание истории бона на европейском языке…</p>

        <p>«Гаруда» не претендует на школьность и духовную партийность. Самое большее, на что рассчитывают ее издатели – пробудить в последователях добротного догматизма и священного традиционализма дух исследования и бесстрашие перед всегда спонтанным и неожиданным, а значит, <i>вероятностным новым</i>, не обусловленным жестко-причинно, как принято считать, тем более, если последнее приходит изнутри, из глубинной природы личности, свидетельствуя о принципиальной незавершенности Мира.</p>

        <p>Интерес редакции к первому периоду распространения буддизма в Тибете (III–IX в.) объясняется следующим. Это был период недогматического буддизма, когда новые для тибетцев идеи не были скованы системным подходом, что будет позже, при Цзонхаве. В этот ранний период местные идеи переплетались с дхармой, идущей последовательно, а иногда и одновременно тремя путями: сначала из Средней Азии и оазисов Хотана, смешиваясь с мощным потоком бона из Шанг-Шунга, затем из Китая и, наконец, из Индии. Всё это сплавлялось в удивительное целое и новое, что ныне принято называть тибетским буддизмом.</p>

        <p>Это было время выдвижения идей; время систематики придет позже, когда в наличии будет весь корпус Канона, когда сложится вторая переводческая традиция и возрастет контингент людей, свободно читающих на санскрите и понимающих читаемое в новых тибетских терминах. А пока ничто не мешало творческой свободе проявления <i>сокровищницы мысли</i> (dgongs gter). Это тысячелетие накопления духовного материала было отмечено многими блестящими именами. Вот главнейшие из них для истории буддизма в Тибете в целом и особенно для школы ньингмапа:</p>

        <ul class="list-none pl-6 mb-4">
            <li>Манджушримитра (I в. н.э.)</li>
            <li>Шри Симха (289–?)</li>
            <li>Вималамитра (VIII в.)</li>
            <li>Джнянасутра (VI–VII в.)</li>
            <li>Буддхагухья (VIII в.)</li>
            <li>Вайрочана (VIII–IX в.)</li>
            <li>Падмасамбхава</li>
        </ul>

        <p>Среди упомянутых учителей только Вайрочана был тибетцем. Остальные – уроженцы разных областей Индии, а Шри Симха – уроженец западного Китая.</p>

        <p>Систематизировать накопленное выпало на долю Нацог-Рандола (Лончена Рабжама). Терминологические ряды, созданные до него и им самим, стали теоретической основой ньингмапы и вошли также в другие школы. Порой не просто понять термины этих школ, будь то сакьяпа или кармапа, без обращения к сочинениям авторов <i>дошкольного</i> периода. Не освоить буддийского языка этого периода значит замкнуться на современном этапе в узкие рамки школ и стать попросту сектантами, что сейчас и происходит. Такая ситуация приводит к бесплодному разобщению и даже к конфликтам. И это не ново, ибо, например, во времена Тисрондэцена (756–797) одна школа – чань (Хэшан-Махаяна) – была запрещена, а другая – путь постепенного постижения истины (Камалашила) – получила официальное одобрение.</p>

        <p>При той сложной ситуации показательна позиция Падмасамбхавы: он остался в стороне от весьма политизированной дискуссии на буддийскую тему. В своих же сочинениях он дал прекрасный пример сущностного подхода, пример интеллектуальной свободы, раскованности и интеграции:</p>

        <blockquote class="quote pl-6 border-l-4 border-gray-300 my-4">
            «Слушайте, о счастливые дети благородных семейств! Ум – много о нем говорят, много болтают… Да либо вообще не понимают, либо понимают превратно или однобоко. А как он есть на самом деле, не понимает никто. Поэтому и множатся всякие учения, столько, что и не счесть… Если это сверкающее осознание, которое называют <i>умом</i>, рассматривать как сущее, то оно не существует. Если рассмотреть как источник, то сансара и нирвана и все разнообразия блаженства и страдания возникли от него. Если рассмотреть ум как объект желания, то 11 колесниц стремятся к нему. Имён же ему столько, что и не счесть.<br>
            Одни зовут <i>природой ума</i> – ум как таковой.<br>
            Тиртики зовут – <i>самость</i>.<br>
            Шраваки наставляют об <i>анатмане</i> – отсутствии Я.<br>
            Читтаматрины называют его <i>читтой</i> – умом.<br>
            Кто зовёт <i>Праджняпарамитой</i> – Запредельной Мудростью.<br>
            Кто зовёт <i>Сугатагарбхой</i> – семенем Сугаты.<br>
            Кто зовёт <i>Махамудрой</i> – Великим Знаком.<br>
            Кто зовёт одиноким <i>тигле</i> – уникальной сферой.<br>
            Кто зовёт <i>Дхармадхату</i> – дхармовым пространством.<br>
            Кто зовёт <i>Алая</i> – основой всего.<br>
            Кто зовется <i>обычным сознанием</i><a href="#citation-1" id="ref-1" class="citation-mark"><sup> 1</sup></a>.»
        </blockquote>

        <p class="text-center">х х х</p>

        <p>Несколько слов о частном вопросе. Многие современные европейские буддисты страстно увлекаются ритуалами, разыскивая и переписывая тексты с молитвами, дхарани, описанием подношений бесчисленным хранителям местности, гор, долин, рек и озер. При этом они делают недоуменный вид, когда речь заходит о таком, казалось бы, обычном чувстве, как любовь к Родине. По меньшей мере это непоследовательно и странно, ибо это чувство ярко звучит в проповедях всех современных иерархов духовной элиты Тибета, начиная с Его Святейшества Далай-ламы XIV. Неужели чувство Родины возникает только на чужбине или при ее утрате? Конечно же, нет. Отсутствие этого чувства всего лишь признак неразвитости духовной чуткости и выпадения из культуры своего народа при иллюзии вписанности в некую общечеловеческую сверхкультуру.</p>

        <p>Любое человеческое сообщество – от группы до целого народа – обладает некоей духовной целостностью, попросту душой, не любить которую нельзя, ибо это противоестественно и физически гибельно для индивидуума. Буддизм никогда не отказывал своим последователям в их стремлении к умеренному телесному комфорту и психическому балансу – от хатха-йоги или янтра-йоги дзогчена до народных культов всевозможных покровителей профессий и местностей. И также «терпимость» буддизма как учения анатмавады, то есть отрицающего существование души, культивирующего концепцию пустотности – <i>шуньяты</i>, никак не противоречит богатому ритуализму народного буддизма. Ибо буддизм – это прежде всего реализм, это учение <i>таковости</i>, учащего тому, что есть. И если ощущает человек нечто целостное, связывающее его с соплеменниками, с согражданами, то это не политика и не идеология, это подтверждение реальности народной души.</p>

        <p>Было время, когда воплощением духа Индии был Шакьямуни; до сих пор для буддистов Китая дух их Родины, ее небесный покровитель – Манджушри; в Тибете – это Авалокитешвара; в Монголии – Ваджрапани. Для России воплощением ее духа является юная созидающаяся Небесная Россия, хотя, по прозрению Дандарона, на данный день это – Кубера, что так неумолимо подтверждает реальность последнего десятилетия. В любом случае нужно быть поистине близоруким, чтобы за духом реки или горы не увидеть и не почувствовать дух своей Родины, коей должно и достойно не только возносить жертвы и молитвы, но и все дела и всю жизнь свою посвятить на ее благо.</p>

        <p class="text-right"><i>1996 г.</i><br><i>Ж. «Гаруда», № 1</i></p>

        <div class="citations mt-8 text-sm border-t pt-4">
            <p id="citation-1"><sup>1</sup> Падмасамбхава. Самоосвобождение через обнажающее внимание - прямое введение в ригпа. Перевод с тибетского В. Ушакова.<a href="#ref-1" class="text-blue-500 hover:underline">↩</a></p>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .quote {
            position: relative;
            padding-left: 1.5rem;
            border-left: 4px solid #d1d5db;
            margin: 1rem 0;
        }
        .citation-mark {
            color: #3b82f6;
            cursor: pointer;
            font-size: 0.75em;
            text-decoration: none;
        }
        .citation-mark:hover {
            color: #2563eb;
        }
        .citation-mark:focus {
            outline: none;
        }
    </style>
@endpush
