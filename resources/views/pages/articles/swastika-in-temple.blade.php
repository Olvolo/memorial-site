@extends('layouts.app')

@section('title', 'Свастика в Храме')

@section('content')
        <h1 class="text-2xl sm:text-3xl font-bold text-center mt-6 mb-8 text-red-600">
            Свастика в Храме
        </h1>

        <!-- Основной текст -->
        <div class="mx-auto bg-green-50 p-4 rounded-lg">
            <!-- Изображение -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/svastika_in_datsan.jpg') }}" alt="Свастика в Храме" title="Свастика в Храме"
                     class="w-[300px] max-w-full h-auto object-contain">
            </div>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                В 1909 году в Санкт-Петербурге было начато строительство буддийского храма.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Он строился по проекту архитектора Г.В. Барановского. В строительный комитет, созданный инициатором строительства Агваном Доржиевым, входили академики В.В. Радлов и С.Ф. Ольденбург, князь Э.Э. Ухтомский, приват-доцент Санкт-Петербургского университета Ф.И. Щербатской, В.Л. Котвич, А.Д. Руднев, художники Н.К. Рерих и В.П. Шнейдер.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Первое богослужение в храме состоялось 21 февраля 1913 года, в день празднования 300-летия Дома Романовых. 2 мая 1914 г. Николай II утвердил штат духовенства в составе девяти человек, в том числе пяти лам-гелонгов. 10 августа 1915 года состоялось освящение храма в честь Калачакры. Храм получил тибетское название, которое в переводе звучит так: “Источник святого Учения Будды, сострадающего ко всем”. Тип храма соответствует так называемому цогчен-дугану, что в православном понимании cоответствует собору.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Существенно, что храм был задуман как учебный центр с философским уклоном, то есть с реализацией так называемого <strong><em>цаннида</em></strong>. Именно последнее обстоятельство с учетом того, что в храме на втором этаже располагались десять келий для монахов, превращало храм в особый тип буддийского монастыря – <strong><em>дацан</em></strong>. Ныне его так и называют: Дацан Гунзэчойнэй.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                В инерционный, а посему соблюдающий нормы традиционного уклада, период жизни буддийской церкви “Решением 2-го общебурятского съезда, состоявшегося в Гусиноозерском дацане в июне 1917 г., буддийский храм в Петрограде был объявлен достоянием бурят-монгольского народа”. (<span class="text-sm">См. ук. соч., с. 27</span>). По решению Первого Всесоюзного собора буддистов СССР, проходившего в Москве в январе 1927 г., “храм в Ленинграде был объявлен резиденцией Всесоюзного духовного управления буддистов СССР” (<span class="text-sm">См. ук. соч., с. 31</span>). И поныне он входит в административно-духовное подчинение современной буддийской церкви России, именуемой “Буддийская Традиционная Сангха России” (БТСР), в уставе 1996 года которой записано, что Дацан Гунзэчойнэй является филиалом БТСР и что настоятель храма и служебный штат лам в нем назначается также руководством БТСР. Соответственно и в Уставе Дацана от 1995 г. значится: “Дацан относится к традиции ламайской церкви России, в которой порядок проведения служб, ритуалов и система обучения духовенства соответствуют традиции гелугпа... Дацан осуществляет свою деятельность,... соблюдая канонический монашеский устав – Винаю, является членом Центрального Духовного Управления буддистов России [ныне БТСР – правопреемница ЦДУБа]”.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Не предусматривалось, согласно Канону, никакого влияния мирян на жизнь монастыря. В жизни буддийского монашества нет места демократии, но есть строгое подчинение духовно-дисциплинарным правилам Винаи. Чиновникам соответствующих инстанций пора отрешиться от стереотипа фактического подчинения церкви обществу, но действовать следует вполне в духе отделения церкви от государства и в соответствии с вошедшим в силу в 1997 г. новым федеральным законом <strong><em>“О свободе совести и религиозных объединениях”</em></strong>:
            </p>

            <blockquote class="border-l-4 border-gray-400 pl-4 italic text-lg sm:text-xl">
                “…религиозное объединение создается и осуществляет свою деятельность в соответствии со своей собственной иерархической и институционной структурой, выбирает, назначает и заменяет свой персонал согласно своим собственным установлениям” (Статья 4, п. 5).
            </blockquote>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Проект Санкт-Петербургского буддийского храма предполагал соблюдение всех символических и ритуальных аксессуаров, в том числе и элементов защитной символики. Символическими частями декоративного убранства храма снаружи были: венчающий крышу по центру ганжир, ниже и по углам храма – джалцаны, над крыльцом – дхармачакра, на фризах – круглые зеркала и чинтамани. Все названные символы были позолочены. Был в храме в числе защитных символов один, о котором по вполне понятным причинам не упоминают, – это черная свастика при входе в главный зал храма. Она расположена на полу, сразу за дверьми, и была выложена из черного кафеля на белом кафельном фоне. Свастика была левой, концы загнуты вправо, вращение – влево. Одна из ее защитных функций – гармонизация пространства храма с энергиями места, с духами-хранителями земли и с нагами болотисто-низменной поймы дельты Невы и ее притоков. Напомним, что в буддизме религиозными символами являются оба типа свастики – и правая, и левая.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                По прекращении в 1933 г. служб в храме и после передачи храма в январе 1938 г. в аренду Ленинградскому областному комитету профсоюза рабочих жилищного хозяйства свастика была выбита и замаскирована черным кафелем. На ее месте сейчас уродливый и непонятный черный квадрат. Таким образом, храм как бы повис над землей, не соединяясь с ее живительной энергией. Исчез с кровли и золотой ганжир, то есть храм лишился двух важнейших доминант cакральной символики. Тем не менее, удивительным образом храм функционировал в течение десяти лет со дня своего возрождения в 1989 году в лоне традиционной буддийской гелугпинской церкви России. Усилиями подвижников Дхармы, каменной броней своих священных стен Храм подавил сопротивление советской сансары и проложил путь учению Будды на западе России во всем многообразии школ и традиций.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                С благословения Хамбо-ламы, верховного иерарха традиционной буддийской церкви, храмом поочередно руководили настоятели: Эрдем Цыбикжапов (1989 г.), гелонг-лама Хайбзун Самаев (1990-1997 г.) и ныне – гецул-лама Б.Б. Бадмаев. В храме творили духовную жизнь три гецула и семь хувараков и был организован учебный процесс в согласии с программой цаннид. Но все прервалось в августе 1998 года, когда храм был захвачен группой светских авантюристов — этим унылым воинством Мары, насильственно изгнавших монахов и заявивших, что храм теперь “мирянский, эти буряты и монахи нам не нужны”, чем надругались над религиозным чувством прихожан и национальным достоинством бурят. С тех пор в храме не ведутся хуралы, не совершаются ритуалы, не отмечаются буддийские праздники, не ведутся занятия. Жизнь в храме парализована, святыня осквернена.
            </p>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Жаль, что свершившееся произошло при попустительстве и некомпетентности чиновников Санкт-Петербургского управления Министерства юстиции Российской Федерации. Подтверждается предсказанное в <strong><em>Легенде о Великой Ступе</em></strong>:
            </p>

            <blockquote class="border-l-4 border-gray-400 pl-4 italic text-lg sm:text-xl">
                <p class="text-justify">
                    “К концу эры, когда продолжительность жизни людей уменьшится до 60-50 лет и эгоизм людей возрастет,... домовладельцы заполнят монастыри и будут драться перед алтарем; храмы превратятся в бойни; отшельники покинут пещеры и возвратятся в долины, а йоги станут торговцами; воры завладеют богатством и скотом; монахи превратятся в домовладельцев, а духовные вожди станут грабить, разбойничать и воровать. Беспорядок превратится в хаос, паника распространится, подобно пожару. Развращенные и эгоистичные люди станут вождями, а настоятели, превратившиеся в армейских офицеров, поведут своих монахов, как солдат; монахи будут предавать смерти своих незаконнорожденных детей. Сыновья увидят, как будут разворовывать их наследство. Низменные и вульгарные демагоги станут местными вождями, а девушки будут учить молодежь в школах. Отрыжка Бонского Мага зазвучит в уединенном жилище йогина, люди станут грабить сокровища святилищ; священные книги Татхагат, изображения будд, священные иконы, картины и ступы будут оскверняться и обмениваться по рыночной цене – их подлинная ценность будет забыта; храмы превратятся в коровники и конюшни, покрытые навозом”.
                </p>
                <p class="text-right text-sm">
                    (См.: “Легенда о Великой Ступе”. Журнал “Гаруда”, 1994, № 2, с. 30).
                </p>
            </blockquote>

            <p class="text-justify indent-4 text-lg sm:text-xl">
                Придет срок, и храмом будет владеть законный хозяин в лице Буддийской Традиционной Сангхи России. Но окончательно ситуация нормализуется, когда восстановится вся полнота священной символики – будет водружен над кровлей ганжир, заблестят на фризе зеркала и чинтамани, зачернеет угрожающе на полу свастика, а властный настоятель во главе славного монашества будет соблюдать правила Винаи и возродит предначертанное великими буддийскими Учителями и основателями храма-монастыря – знаментый цаннид. Только тогда храм и монашеский орден в нем будут нерушимы.
            </p>

            <p class="text-right text-sm sm:text-base font-bold">
                ВМ
            </p>
        </div>
   @endsection
