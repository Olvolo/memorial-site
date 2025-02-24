@extends('layouts.app')

@section('title', 'О парамитах')

@section('content')
    <div class="container mx-auto px-4 biography">
        <img src="{{ asset('images/paramitas.jpg') }}" alt="О парамитах" class="article-image my-4 rounded-lg shadow-md">
        <!-- Заголовок -->
        <h1 class="text-2xl font-bold text-center mb-8">О ПАРАМИТАХ</h1>

        <p class="text-justify"><i>ПАРАМ</i> – на другой стороне; <i>ИТА</i> – уход, ушедший. <i>Парамита</i> – ушедшее на другую сторону, запредельное, трансцендентальное, нирванистическое.</p>

        <ol class="list-decimal pl-4 mb-4">
            <li><p class="text-justify pl-2">Тема <i>парамит</i> относится к истине пути, т.е. к тому, как освободиться от страданий. Это не значит, что остальные темы проповеди Будды, как <i>Пратитьясамутпада</i>, <i>анатма</i>, <i>анитья</i> и другие не затрагиваются в рассматриваемой теме. Каждая из них обладает внутренней полнотой и вполне универсальна. Все темы, которые Будда изложил разновременно и различным по способностям слушателям в сутрах, устных проповедях, претендуют на удовлетворение основной задачи – уничтожить страдание и добиться блаженства бесстрадательного бытия.</p></li>
            <li><p class="text-justify pl-2">Помимо сутр, в которых учение о запредельных добродетелях полнее всего раскрыто в круге Праджняпарамитских сочинений, основой которых является "<i>Аштасахасрика Праджняпарамита</i>", важнейшей работой о <i>парамитах</i> стало сочинение Асанги "<i>Абхисамаяаланкара</i>". Среди источников упомянем "<i>Источник мудрецов</i>" (разделы "Парамита" и "Мадхьямика") и "<i>Ланкаватарасутру</i>". Тантрийский взгляд изложен в "<i>Мыслях буддиста</i>" и в статье "<i>Учение Ваджраяны о тождестве сансары и нирваны</i>".</p></li>
            <li><p class="text-justify pl-2">Понятие пути имеет разновидности (В этом и последующих пунктах определим место <i>парамит</i> в махаянской практике):<br>
                    а) по принципу субъекта: низший – мирянин, ищущий сансарных благ,<br>
                    б) средний – святые Хинаяны: <i>архаты</i> и <i>пратьекабудды</i>,<br>
                    в) высший – махаянский святой – <i>бодхисаттва</i>.<br>
                    Для среднего и высшего типов мир полон скорби и отвращения. Личности этого типа стремятся к состоянию, в котором их больше бы не тревожила мирская суета. Путём достижения этого состояния будет путь интуитивного познания (<i>абхисамая</i>) истины, ведущей к просветлению, к <i>нирване</i>.</p></li>
            <li><p class="text-justify pl-2">Такой путь имеет пять стадий. (Это относится и к тантре):<br>
                    а) путь накопления добродетелей (<i>самбхара-марга</i>),<br>
                    б) путь обучения (<i>прайога-марга</i>),<br>
                    в) путь просветления (<i>даршана-марга</i>),<br>
                    г) путь созерцания (<i>бхавана-марга</i>),<br>
                    д) путь конечный, без учения (<i>ашайшика-марга</i>).</p></li>
            <li><p class="text-justify pl-2">О трёх путях: пути <i>шравака</i>, <i>пратьекабудды</i> и <i>бодхисаттвы</i>. <i>Шраваки</i>, опираясь на признание существования индивидуального Я, добиваются представления о его нереальности и болезненности, т.к. на него действуют <i>клеши</i>. Подавления <i>клеш</i> они достигают постепенно и приходят к успокоенному состоянию ума через анализ каждой из них по-отдельности, на это уходят целые эоны времени. При этом о других существах они не думают.<br>
                    <i>Пратьекабудды</i> догадываются, что нереально не только Я индивидуума, но и Я объектов. В отличие от <i>шраваков</i> <i>пратьекабудда</i> совершенствуется в полном одиночестве без учителя и вне <i>сангхи</i>.<br>
                    <i>Бодхисаттва</i> постигает идею отсутствия Я со всеохватностью общешуньевой установки. При этом акцент переносится с собственного спасения на спасение других; это и есть "просветлённая мысль" – <i>бодхичитта</i>. В отличие от хинаянских святых <i>бодхисаттва</i>, избавляясь от двух форм помрачения по поводу Я индивидуума и Я объектов, должен избавиться и от тонкой формы неведения – от идеи противопоставления субъекта объекту, от дифференциации бытия на <i>сансару</i> и <i>нирвану</i>.</p></li>
            <li><p class="text-justify pl-2">Согласно Махаяне завершение пути <i>шравака</i> и <i>пратьекабудды</i> неконечно. Их <i>нирвана</i> – это состояние каталептического транса, который может длиться бесконечно долго, а затем Будда пробуждает их для дальнейшего совершенствования по путям Махаяны.</p></li>
            <li><p class="text-justify pl-2">О двух моментах процесса созерцания: первый – это совершенный покой ума – <i>шаматха</i>, второй – трансцендентальный анализ, <i>випашьяна</i>. Спокойствие ума – это фиксация объекта (<i>идама</i>), сопровождающееся телесной и умственной лёгкостью. Когда ум ничто не отвлекает от объекта и он вполне спокоен, начинается трансцендентальный анализ: при этом исследуется абсолютная природа объекта, переживается удовлетворение, отмечаются детали и творятся "собственные" мысленные конструкции – истинное творчество. В целом это и будет <i>випашьяной</i>. Эти два момента, как и пять путей, пронизывают всё здание буддийской практики от Хинаяны до Тантры.</p></li>
            <li><p class="text-justify pl-2">О пути <i>бодхисаттвы</i>. Основанием пути <i>бодхисаттвы</i> является учение о признании существования элементов будды в каждом живом существе. Надо познать этот элемент в себе, раскрыть его. "Махаянское познание истины, определяемое интуицией, сначала есть познание Абсолюта как сущностной природы собственного потока элементов (святого)". Надо раскрыть свою природу, которая и есть Будда. В Махаяне упор делается на гнозисе, познавании, в Хинаяне на практическое подавление <i>клеш</i>. Имеется в виду упор как преимущественное усилие. В Тантре эти два упора находятся в балансе, т.е. в единстве гнозиса и праксиса, интуиции и метода.</p></li>
            <li><p class="text-justify pl-2">Как пробудить зародыш Будды в личности. Это пробуждение обусловливается мыслями великого сострадания, заботой о спасении других. С этого момента <i>бодхисаттва</i> вступил на путь, на его первую стадию – стадию накопления добродетелей. Далее происходит постепенное шествование по пяти путям и реализация десяти ступеней состояния <i>бодхисаттвы</i> – <i>даша-бодхисаттва-бхуми</i>. Заканчивается путь <i>бодхисаттвы</i> реализацией состояния Будды и совершенным пользованием пятью мудростями.</p></li>
            <li><p class="text-justify pl-2">Три типа махаянских путей: широкий, глубокий, бурный.<br>
                    Широкий – путь реализации <i>Праджняпарамиты</i>; другое его название – <i>Парамитаяна</i> отражает центральное место в нём практики <i>парамит</i>. В <i>Парамитаяну</i> входит также и глубокий путь. Описание широкого пути в цзонхавинской традиции излагается в "<i>Абхисамая-аламкаре</i>" Асанги, разбитой на восемь глав. В них дано постепенное восхождение <i>бодхисаттвы</i> по пути развития интуитивного постижения Абсолюта. Согласно этим главам на восемь разделов поделен свод "Парамиты" "<i>Источника мудрецов</i>". В "<i>Абхисамая-аламкаре</i>" <i>парамиты</i> описаны в главе "Интуиция <i>бодхисаттвы</i> как совершенствующийся процесс". Глава состоит из 13 пунктов: 6 <i>парамит</i>, 6 форм внимательности относительно Будды, дхармы, <i>сангхи</i>, нравственности, подаяния, <i>идама</i> и 13-й пункт – знание о несуществовании индивидуального Я в любых формах (шуньевый взгляд). Почему же широкий путь, где <i>парамитам</i> в тексте уделено немного места, входит в систему, называемую <i>Парамитаяна</i>?<br>
                    а. Этот путь излагается в соответствии с учением о <i>Праджняпарамите</i>, проповеданном самим Буддой.<br>
                    б. Опорой и необходимым условием развития интуитивного взгляда является практика шести <i>парамит</i>. Только с этой практикой возрастает степень просветлённости <i>бодхисаттвы</i>. Гарантирует успех постоянное памятование, что практика <i>парамит</i> связана с благом других живых существ; такая установка и есть содержание просветлённой мысли. <i>Парамиты</i> же – это её силовой, энергетический каркас. Результат, венец усилий – реализация запредельной мудрости <i>Праджняпарамиты</i>.<br>
                    в. Поскольку акцент делается на интуиции, то широкий путь <i>Парамитаяны</i> стал плодом творческих усилий <i>йогачаров-виджнянавадинов</i>. Духовным владыкой этой традиции провозглашён Майтрея, продиктовавший Асанге знаменитое Пятикнижие.<br>
                    Широким этот путь назван в отличие от глубокого, практика которого требует высокой философской эрудиции.</p></li>
            <li><p class="text-justify pl-2">Глубокий путь <i>Парамитаяны</i> также в практике базируется на соблюдении трансцендентальных добродетелей, именно поэтому он совместно с широким путём объединён в Колесницу <i>парамит</i>. Глубокий путь состоит из двух разделов – метода и интуиции. В разделе "Метод" подробно описаны 6 <i>парамит</i> и добавлены ещё 4 <i>парамиты</i>, итого десять <i>парамит</i>. В разделе "Мудрость" анализируется проблема Я согласно работам Нагарджуны. Развитие шуньевого взгляда – отличительная черта глубокого пути. Такой взгляд приводит <i>бодхисаттву</i> к Высшей Мудрости. В цзонхавинской традиции этот взгляд изложен согласно системе <i>мадхьямика-прасангика</i>, используются комментарии Гунчен-Жамьян-Шадбы. Духовным владыкой этого пути считается <i>Манджушри</i>.</p></li>
            <li><p class="text-justify pl-2">Бурный путь, путь тантрийской практики иначе называют <i>Мантраяной</i>. Тантра использует и методы глубочайшей интуиции широкого пути и высочайшее завоевание запредельного анализа глубокого пути – шуньевый взгляд. Тантра синтезирует их столь специфически, что порой невозможно слёту увидеть за сложнейшей символикой классические установки буддизма Махаяны. <i>Парамиты</i> здесь входят в обеты пяти генезисов.</p></li>
            <li><p class="text-justify pl-2">Изложим перечень <i>парамит</i> согласно "<i>Источнику мудрецов</i>" с незначительными добавлениями из Тантры.<br>
                    <b>Земля</b><br>
                    1. <i>Парамита подаяние (дана)</i>, очищает от жадности:<br>
                    а) проповедь учения,<br>
                    б) отдача вещей (еды и одежды),<br>
                    в) проявление неустрашимости Будды (дача жуда, посвящения).<br>
                    <b>Вода</b><br>
                    2. <i>Парамита нравственность (шила)</i>, очищает от нарушений обетов:<br>
                    а) прекращение преступных деяний,<br>
                    б) собирание в себя добродетельное учение,<br>
                    в) совершение блага для живых существ.<br>
                    <b>Огонь</b><br>
                    3. <i>Парамита терпение (кшанти)</i> очищает от гнева:<br>
                    а) не таить в себе злобу на тех, кто нанёс тебе вред,<br>
                    б) взять на себя страдание всех,<br>
                    в) признать истинным буддийское учение.<br>
                    <b>Воздух</b><br>
                    4. <i>Парамита усердие (вирья)</i> очищает от лени и пассивности:<br>
                    а) "панцирное",<br>
                    б) наивысшее,<br>
                    в) приносящее пользу живым существам.<br>
                    <b>Пространство</b><br>
                    5. <i>Парамита созерцание (дхьяна)</i>, очищает от неустойчивости (сомнение):<br>
                    а) успокоение тела и мысли,<br>
                    б) для истинного воспитания добрых качеств,<br>
                    в) осуществление блага для живых существ.<br>
                    <b>Сознание</b><br>
                    6. <i>Парамита интуиция (праджня)</i>, очищает от неустойчивого, сомнительного понимания:<br>
                    а) познание относительной истины,<br>
                    б) познание абсолютной истины,<br>
                    в) познание сущности принесения пользы живым существам.<br>
                    7. <i>Парамита метод (упайя)</i>, двенадцати видов.<br>
                    8. <i>Парамита молитва (пранидхана)</i>, пяти видов.<br>
                    9. <i>Парамита сила (бала)</i>, десяти видов.<br>
                    10. <i>Парамита мудрость (джняна)</i>.</p></li>
            <li><p class="text-justify pl-2">Если указанный порядок шести <i>парамит</i>, перечисленных в разделе Мадхъямика "<i>Источника мудрецов</i>" представить в виде <i>мандалы</i>, то получим картину, близкую к <i>мандале Ваджрасаттвы</i> традиции Б.Д. Дандарона.</p></li>
            <li><p class="text-justify pl-2">Комментарий к вышеизложенному. <i>Парамиты</i> необходимо соблюдать в повседневной жизни, распространяя их на все 24 часа. Секрет Махаяны (и Тантры) заключён в парадоксальной ситуации: приняв шуньевый взгляд, тем не менее уместно действовать. Причём действовать высоконравственно, а для внешнего социума вполне совпадающе с правилами человеческого общежития. <i>Авиджняпти</i> скрывает сверхнравственность, парамитичность, а значит запредельность этой якобы "просто нравственности".</p></li>
            <li><p class="text-justify pl-2">Деление бытия на <i>сансару</i> и <i>нирвану</i>, на имманентное и трансцендентное условно. Реальность недвойственна или вместерождена. Принцип вместерождённости делает неточным раздельное использование терминов имманентность и трансцендентность по отношению к качествам, присущим природе изучаемого явления или потенциально возможным в нём. Все живые существа есть потенциальные будды – в этом имманентность высшего состояния; тот же, кто достиг уже этого состояния, трансцендентен по отношению к мирянину, который может и не догадываться о своей потенции.<br>
                    Имманентное бытие связано с наличием пяти <i>скандх</i>, т.е. пяти долевых чувств, что за пределами чувственного восприятия трансцендентно нашему обыденному бытию. В тантре актуальность термина "запредельное" исчезает. Снимает эту актуальность идея о тождестве <i>сансары</i> и <i>нирваны</i>. Б.Д. Дандарон при изложении тантрийской проблематики всегда использует единый термин "трансцендентно-имманентное".</p></li>
            <li><p class="text-justify pl-2">Между запредельным и имманентным есть связующая нить – интуиция, взятая во всех разновидностях, начиная даже с инстинкта. Всего, согласно "<i>Мыслям буддиста</i>", есть три интуиции: рациональная, эстетическая и мистическая. Мистическая интуиция, называемая иначе интуиция, познающая <i>шунью</i>, вместе с двумя первыми представляет собой имманентный аспект познавательной способности, доступный индивиду с неведением. При этом может исчезнуть или уменьшиться невежество (?), но не исчезает органическое неведение – <i>авидья</i>. Если же интуитивное напряжение сопровождается практикой <i>парамит</i>, то оно может перерасти в Совершенную Мудрость – <i>Праджняпарамиту</i>, полноту совпадения в единстве имманентного и трансцендентного, где единичное (<i>праджня</i>) и общее (<i>парамита</i>) недвойственны. В Тантре такая мудрость называется Мудростью недвойственности блаженства и <i>шуньи</i>.</p></li>
            <li><p class="text-justify pl-2">Обычные качества – даяние, терпение, усердие и др. проявляются естественно (подсознательно) или сознательно. Буддизм видит в них ещё и отблеск трансцендентного в нашей имманентной деятельности. На это указывает и блаженство, стоящее в одном синонимическом ряду с терминами <i>парамита</i> и метод. Именно блаженство переживает индивид, практикуя добродетельные качества.<br>
                    Добродетели могут быть естественны, сознательны и запредельны. Между естественным (таковЫм) и запредельным (тАковым) встревает рефлектирующий ум, раздваивающий в силу неведения мир и вносящий сомнения и варианты. Это похоже на структуру известной притчи: сначала горы как горы, затем – горы это уже не горы, и, наконец, горы снова как горы. Первые горы – естественны, вторые неестественны, третьи – более естественны, чем первые, то есть сверхъестественны, трансцендентны. Также и с добродетелями: сначала они естественны, затем неестественны, умовы, а потом снова естественны, но уже иначе, сверх, т.е. парамитичны.<br>
                    Добродетели второго, сознательного и часто прагматического характера могут оборачиваться историческими трагедиями, и потому термин "неестественные" кажется нам удачным.</p></li>
            <li><p class="text-justify pl-2">Имманентная <i>праджня</i>, как тончайшая, никогда не прерываемая нить, связывает сознание с таковостью. Именно <i>праджня</i> даёт нам возможность догадаться о будде-в-нас – об <i>алая-виджняне</i>. Нужно взрастить эту догадку до уровня <i>Праджняпарамиты</i>. На вопрос, как это сделать, учителя Махаяны отвечают: через практику <i>парамит</i>.<br>
                    Изначальная догадка, что "всё не так!", вместерождена с неведением, от которого индивид сам не может избавиться. Если "не так", то как же? Тантра отвечает, что ответ на этот вопрос содержится в методе, который может дать только учитель. "Как" метода полно содержания и не есть <i>шунья</i>. <i>Одсал</i> – ясный свет не есть <i>шунья</i>. Все <i>парамиты</i> – одсоловы, отблески запредельного, грани ясного света как содержания <i>дхармакаи</i>. Содержание <i>дхармакаи</i> суть <i>бодхичитта</i> – мысль о других, мысль, полная блаженства как внутреннего переживания внешнего акта сострадания.<br>
                    Интуицию необходимо оседлать, надо действовать, хотя интуиция и сообщает, что всё есть <i>шунья</i>. На интуицию нужна узда, иначе ускользнёт, ибо появляется вначале как проблеск. Метод и есть эта узда. Нацог-Рандол пишет: "Изначальный <i>Самантабхадра</i> в то время свою интуицию превратил в коня (средство коммуникации)" – в шуньевую реальность <i>дхармакаи</i>. Далее: "...из своей постели (опоры) <i>дхармакаи</i> выделил как собственную динамику существования пять мудростей" – действенный, одсоловый аспект <i>дхармакаи</i>, здесь корень запредельности <i>парамит</i>.</p></li>
            <li><p class="text-justify pl-2">Утверждение о единой природе всех живых существ, о том, что в их основе лежит природа Будды, казалось бы, может снять с метода характеристику запредельного. Ибо, если природа Будды внутри нас, то почему метод не самораскрывается из глубин естества индивидуума. Присутствие якобы мешающего этому неведения не объясняет, почему этого всё же не происходит. На практике метод приходит "со стороны" как субъективизированная помощь «протянутой руки» сострадания <i>дхармакаи</i> в виде учителя. В тантре такая ситуация – наблюдаемый факт, это ступица Ваджрной Колесницы. Без бинара "учитель-ученик" немыслима не только Тантра, но и Махаяна. В этой паре реализуется закон единства или всесвязности. Действие этого закона в связи <i>виджняны</i> со всей остальной совокупностью живых существ, предстающих как <i>алая</i> – сокровищница всех <i>виджнян</i>, отсюда вместерождённый или трансцендентно-имманентный термин <i>алая-виджняна</i>. Или «<i>Ваджрасаттва-майяджала</i>» – «Волшебная сеть Ваджрасаттвы» из знаменательного названия одноимённой тантры. Физические аналоги этому: частица и поле, точка и открытая точка, как совокупность всех точек вселенной за вычетом первой; в биологии – муравей и муравейник.<br>
                    Один человек никогда не может достичь совершенства и свободы, но только через Учителя, через <i>сангху</i>, через совокупность всего живого. Реализуя закон всесвязности сознание может обрести высшее состояние и войти в Дхармовое Тело.</p></li>
            <li><p class="text-justify pl-2">Обычно необходимость учителя принимается на веру, Учитель почитается как Высшая Драгоценность и Первое Прибежище. Поддаётся ли эта вера пониманию, анализу? Да, если индивидуальное сознание рассматривать не изолированно, а в поле всех других сознаний, признавая их пустыми, но существующими независимо от этого индивидуального сознания. Такова диспозиция <i>мадхъямиков-прасангиков</i>. Поле – это всесвязность, от которой никто не свободен. <i>Одсал-шуньевая</i> осцилляция происходит в глубине каждой <i>виджняны</i> как особой точки этого поля. Всего насчитывается четыре типа таких точек, но это другая тема.<br>
                    Что же доказывает наличие этого поля? Ответ звучит навязчиво и знакомо: индивидуум вне общества не может стать человеком или перестаёт им быть. Последнее неоднократно доказано печальными случайностями. Сострадательная мысль о других – это та же идея поля. <i>Бодхичитта</i> – вот традиционное название закона всесвязности и, наконец, это есть субстрат веры в учителя. Если бы человек мог реализовать вне связи с психосферой социума, то идея <i>бодхичитты</i> была бы лишней. Утверждение о независимой реализации <i>пратьекабуддами</i> – натяжка и некорректность. Ведь стартуют они с уровня, достигнутого в поле, их дальнейший путь нравственно однобок, достижения не вдохновляют.<br>
                    Согласно всесвязности Будда-учитель должен рассматриваться как (без остатка) сумма живых существ, средь которых конкретен только один – ученик. Любить всех – значит любить учителя, почитать учителя – заботиться обо всех. "В основе <i>бодхисаттвовской</i> мысли лежит критика" – эти слова из "<i>Йоги шести периодов</i>" в переводе Б.Д. Дандарона акцентирует умовый аспект ясного света, нам же они дозволили рассуждения о природе веры в учителя.</p></li>
            <li><p class="text-justify pl-2"><b>Резюме</b><br>
                    1. <i>Парамиты</i> относятся к истине пути, являясь составной частью метода.<br>
                    2. Они наличествуют во всех трёх Колесницах.<br>
                    3. Главной темой они становятся в Махаяне, в школе <i>йогачаров-виджнянавадинов</i>, в широком пути.<br>
                    4. В широком пути практика <i>парамит</i> необходима для реализации высшего состояния – <i>Праджняпарамиты</i>, только через них <i>Праджняпарамита</i> достигает совершенства.<br>
                    5. "<i>Праджняпарамита</i> ведь, о Ананда, является первичной по отношению к (остальным) пяти <i>парамитам</i>", она – основная <i>парамита</i>.<br>
                    6. Термины <i>дана</i>, <i>шила</i>, <i>кшанти</i>, <i>вирья</i> и <i>дхьяна</i> не обладают сами по себе тем смыслом, который они получают, когда употребляются в сочетании с термином <i>парамита</i>: <i>данапарамита</i>, <i>шилапарамита</i>, <i>кшантипарамита</i> и т.д. В обычном контексте – это имманентные качества человеческой активности.<br>
                    7. Если имманентные качества <i>дана</i>, <i>шила</i> и др. соединяются с трансцендентными, то они становятся <i>парамитами</i> и способствуют достижению состояния <i>Праджняпарамиты</i>.<br>
                    8. Соединяет их с трансцендентными, придавая им запредельный признак, интуиция как (трансцендентная имманентность) имманентная трансцендентность.<br>
                    9. В каждой <i>парамите</i> присутствует <i>Праджняпарамита</i>. "Если, о Каушика, <i>дана</i>, <i>шила</i>, <i>кшанти</i>, <i>вирья</i> и <i>дхьяна</i> будут связаны с <i>праджняпарамитой</i>, только тогда они имеют название "<i>парамита</i>".<br>
                    10. "Поведение <i>бодхисаттвы-махасаттвы</i> описывается термином <i>данапарамита</i> и т.д., только в случае, если он имеет "<i>праджняпарамиту</i>".<br>
                    11. В состоянии <i>праджняпарамиты</i> реализуется недвойственность. С одной стороны, практика <i>парамит</i>, каждая из которых рассматривается сквозь призму <i>праджняпарамиты</i>, т.е. через познание <i>шуньи</i>, с другой стороны, интуиция, но в том случае, если её объект трансцендентен, парамитичен.<br>
                    12. Итак, реализуется недвойственность <i>праджняпарамиты</i> с <i>парамитами</i>, в результате чего обретается совершенная <i>праджняпарамита</i>.<br>
                    13. В Тантре <i>парамиты</i> входят в подготовительный этап, например, на стадии объектов пяти генезисов.<br>
                    14. Практика <i>парамит</i> с тантрийской окраской может быть путём, параллельным <i>Ваджраяне</i>, т.е. разновидностью бурного пути.<br>
                    15. В Тантре состоянию <i>Праджняпарамиты</i> соответствует Мудрость недвойственности блаженства и <i>шуньи</i>. Интегрируется метод подавления <i>клеш</i>, сопровождаемый переживанием блаженства и познанием <i>шуньи</i>, и интуиция, познающая <i>шунью</i> блаженства. В зависимости от преобладания интуиции или метода тантры делятся на материнские или отцовские (<i>ма</i> и <i>па</i>).<br>
                    16. По принципу <i>па-</i> или <i>ма-</i>деления широкий путь <i>Парамитаяны</i> следует отнести к типу <i>ма-пути</i>, и соответственно, глубокий путь, где преобладает релятивизм шуньевой проблематики, к типу <i>па-пути</i>.<br>
                    17. Все три пути: широкий, глубокий и бурный есть пути срединные, мадхьямические. Асимметричность их практик – доказательство их действенности.<br>
                    18. В <i>мандале</i> пять первых <i>парамит</i> – в плоскости, в горизонтальной развёртке. <i>Праджняпарамита</i> – над плоскостью, в вертикали, в иной метрике, метрике Будд.</p></li>
        </ol>

        <p class="text-right"><i>2008 г.</i></p>
    </div>
@endsection

@push('styles')
    <style>
        p.text-justify {
            text-align: justify;
            line-height: 1.5;
            margin-bottom: 1rem;
        }
        ol.list-decimal {
            margin-left: 1.5rem;
        }
        ol.list-decimal li {
            margin-bottom: 1rem;
            padding-left: 0.5rem;
        }
        ol.list-decimal p {
            margin: 0;
        }
    </style>
@endpush
