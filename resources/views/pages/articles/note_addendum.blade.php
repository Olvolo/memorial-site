@extends('layouts.app')

@section('title', 'Добавление к «Аналитической записке»')

@section('content')
    <div class="container mx-auto px-4 biography">
        <img src="{{ asset('images/note_addendum.jpg') }}" alt="Добавление к Аналитической записке" class="article-image my-4 rounded-lg shadow-md">
        <!-- Заголовок -->
        <h1 class="text-2xl font-bold text-center mb-8">ДОБАВЛЕНИЕ К «АНАЛИТИЧЕСКОЙ ЗАПИСКЕ»</h1>

        <h3 class="text-lg font-semibold mb-2">I</h3>

        <p class="text-justify">Планы политизированных буддийских групп не являются фантазией. События 23 июля 1998 г. подтверждают это. В этот день Храм был захвачен группой, которая предварительно представила себя и свой Устав в Минюст как перерегистрируемую общину Дацана Гунзэчойнэй. Этим они обманули работников Минюста, и последние удивительно быстро, в два дня, зарегистрировали эту малочисленную группу (16 человек). При этом был совершен целый ряд правонарушений.</p>

        <ol class="list-decimal mb-6 pl-12">
            <li><p class="text-justify">Новая община провела собрание 23 июня с.г. и 2 июля уже была зарегистрирована Минюстом. Небывалая и неправомерная скорость регистрации наблюдается.</p></li>
            <li><p class="text-justify">Из числа общинников, 16 человек, трое на собрании не присутствовали и не давали своего согласия на участие в регистрируемой группе: Парибок А.В., Харькова Е. Ю. и Варвара?</p></li>
            <li><p class="text-justify">Новая община нигде не объявляла о своем существовании и делала она это специально, ибо только члены “Объединения Дацан Гунзэчойнэй” представляют в СПб школу гелуг и традиционно приписаны к гелугпинскому Храму, находящемуся в ведении высшего иерарха Буддийской Традиционной Сангхи России Хамбо-ламы Дамбы Аюшеева.</p></li>
            <li><p class="text-justify">Новая община представила себя Минюсту как религиозное объединение буддийского Храма, то есть как уже существующую организацию, но лишь перерегистрирующую себя согласно новому Закону. Этим Новая община совершила подлог.</p></li>
            <li><p class="text-justify">Минюст не связался с вышестоящей по отношению к религиозному Объединению Дацана Гунзэчойнэй организацией, то есть непосредственно с администрацией Хамбо-ламы, что есть нарушение Закона.</p></li>
            <li><p class="text-justify">Минюст зарегистрировал Новую общину с названием “Община Дацан Гунзэчойнэй”, в то время как законная община Храма имеет название “Религиозное Объединение Дацан Гунзэчойнэй”. Этим самым Минюст по одному юридическому адресу зарегистрировал две общины.</p></li>
            <li><p class="text-justify">Новая община совершила подлог, поставив на свои документы подложную печать, ибо подлинная печать Храма все это время находится у настоятеля дацана Б.Б. Бадмаева.</p></li>
            <li><p class="text-justify">Новая община совершила тяжкий грех с точки зрения буддийской и общечеловеческой морали — она ворвалась в Храм с помощью вооруженной силы.</p></li>
            <li><p class="text-justify">Новая община совершила духовное преступление — изгнала с помощью грубой физической силы из Храма буддийских монахов.</p></li>
            <li><p class="text-justify">Новая община не является арендатором Храма как госимущества, Храм до сих пор по договору об аренде числится за Б.Б. Бадмаевым.</p></li>
            <li><p class="text-justify">Новая община объявила, что ныне Храм является “мирянским”. Таких Храмов буддизм не знает. Это не буддизм. Посему можно считать, что историческое и всемирно известное здание буддийского Храма захвачено небуддистами. Это кощунство.</p></li>
        </ol>

        <h3 class="text-lg font-semibold mb-2">II</h3>

        <p class="text-justify">На данный день сложились две формы распространения буддизма в среде европейцев.</p>

        <ul class="list-none pl-4 mb-4">
            <li>
                <p class="text-justify">а. Редки в Европе, буквально единицы, традиционные религиозные организации, воспроизводящие процесс обучения монахов до высших уровней буддийской образованности. На это уходит от 8 до 12 лет. Эта система воспроизведения буддийской образованности в виде буквально выращивания грамотных буддийских учителей (тиб. лам), практикуется в школах гелуг, кармапа и сакьяпа и представляет собой высокое культурно-духовное достижение буддийской цивилизации. Обычно такие учебные заведения бывают при монастырях. Буддийский монастырь — это Храм и домики для проживания лам.</p>
                <p class="text-justify">Если в Храме-монастыре предусмотрен учебный процесс философского направления, так называемый цаннид, то такой Храм-монастырь называется дацаном. Именно таким Храмом-монастырем по замыслу его основателей (Агвана Доржиева, Ф.И. Щербатского, С.Ф. Ольденбурга и др.) должен был стать Санкт-Петербургский Храм. Поэтому он по праву и носит название “Дацан”. На европейской территории России это единственное заведение подобного рода. Именно поэтому ученые-востоковеды и деятели культуры России всегда оказывали Дацану поддержку, а ныне создали Попечительский Совет, чтобы восстановить прежний статус Храма. (См. Приложение).</p>
            </li>
            <li>
                <p class="text-justify">б. Другой тип буддийской организации — это так называемые дхарма-центры. Они всегда представляют определенное направление буддизма, и духовным руководителем их является тот или иной конкретный буддийский учитель. Такие учителя приезжают один-два раза в год, проводят двух-трехдневное занятие и уезжают. Как правило, члены таких групп не имеют возможности получить буддийское образование и такие дхарма-центры представляют собой светские буддийские организации. Тип таких организаций и стиль их работы еще только вырабатывается, и срок их исторического бытия не превышает и двадцати лет в Европе и не более десяти лет в России.</p>
            </li>
        </ul>

        <p class="text-justify">Никакого сравнения между дацанами и дхарма-центрами быть не может. Монашеский и высокообразованный, профессиональный тип буддиста формируется только в дацанах. Что касается дхарма-центров, то их форма и судьба только складываются.</p>

        <p class="text-justify">Из сказанного ясно, сколь невежественна и исторически не оправдана попытка группы авантюристов преобразовать Санкт-Петербургский Дацан в дхарма-центр.</p>

        <h3 class="text-lg font-semibold mb-2">III</h3>

        <p class="text-justify">В самой буддийской церкви России сложилась на данный день сложная ситуация.</p>

        <ul class="list-none mb-4">
            <li><p class="text-justify">а. После смерти последних лам-стариков прежнего довоенного периода наступил критический период, когда бурятское ламство какое-то время представлено “молодыми ламами”, которым недостает образованности и жизненного опыта. Но уже появилась новая генерация монахов, которые ничего не знают о советском периоде нашей истории. Эти юные ламы воистину стали монахами не по профессии, а по призванию. Они прекрасно учатся и могут стать учителями. Но для этого нужно время.</p></li>
            <li><p class="text-justify">б. Тибетская эмиграция появилась в виде лам и в России. Ламы-тибетцы учат молодых лам. Скоро из Индии вернутся образованные ламы Бурятии, Калмыкии и Тувы.</p></li>
            <li><p class="text-justify">в. Одновременно в Европейской и не только России взросло племя функционеров, которые не желают делить власть, деньги и удовлетворенное тщеславие с кем бы то ни было. Против возрождающейся буддийской церкви Бурятии европейские функционеры и бурятские авантюристы начали войну.</p></li>
            <li><p class="text-justify">г. Когда ЦДУБ был переименован в Буддийскую Традиционную Сангху России, была допущена досадная оплошность. В документе о переименовании было сказано, что БТСР является правопреемником ЦДУБа, но было упущено обязательное в этом случае утверждение, что ЦДУБ больше не существует.</p></li>
        </ul>

        <p class="text-justify">Этим воспользовались люди, которые не понимают, что есть тягчайший грех — грех раскола. Они решили реанимировать ЦДУБ и выдвинули кандидатом в самозваные Хамбо-ламы некоего Илюхинова — недоучившегося студента монастыря Гандан в Улан-Баторе (он был исключен за пристрастие к алкоголю).</p>

        <p class="text-justify">д. Идею реанимации ЦДУБа поддержал А.А. Терентьев, стремящийся превратить СПб Дацан в центр борьбы за свободу Тибета, в центр антикитайской и проамериканской политики. Необходимо всячески предавать огласке деятельность Терентьева и иже с ним, чтобы у буддистов России не создавалось иллюзии, что буддизм России представляет этот господин и его самозваный журнал “Буддизм России”, тем более, что это издание не представляет интересы тибетской эмиграции, как он это утверждает.</p>

        <p class="text-justify">Современные чиновники не могут знать этих сложных процессов в современном буддизме. Именно поэтому и составлена данная записка, чтобы, ознакомившись с нею, ответственные работники мэрии, прокуратуры и минюста не попадали в двусмысленное положение и не совершали ошибок, подобных той, что совершили работники СПб-отделения минюста России.</p>

        <h3 class="text-lg font-semibold mb-2">IV</h3>

        <p class="text-justify">Все, что выше, было написано в начале сентября 1998 г.</p>

        <p class="text-justify">13 октября получен ответ из СПб отделения минюста Российской Федерации.</p>

        <p class="text-justify">Этот ответ есть характерный пример некомпетентности чиновников в сложных делах современных и традиционных религиозных организаций. Вот соображения по поводу ответа минюста.</p>

        <ol class="list-decimal mb-4">
            <li><p class="text-justify">Объединение “Дацан Гунзэчойнэй” и Община “Гунзэчойнэй” не являются одной организацией и вторая не есть легитимное продолжение первой. Кто угодно мог собраться в нужном количестве, зарегистрировать свой устав, нанять охрану и захватить Храм. Минюст должен дать четкий ответ, опровергающий это утверждение. Если такого ответа нет, то записка Минюста превращается в демагогическую отписку.</p></li>
            <li><p class="text-justify">Чиновник не обязан знать историю конкретной религии и сложности политической борьбы, которая, например, была связана и с 300-летней историей буддийской церкви России и со строительством СПб буддийского Храма. Только зная это, можно вынести безошибочное, справедливое, отвечающее интересам верующих и государства решение. Для экспертно-научного освещения проблемы и создан Попечительский совет Храма, состоящий из ученых-востоковедов.</p></li>
            <li><p class="text-justify">Буддийская церковь России существует почти 300 лет, со времени императрицы Елизаветы. В советское время эта структура получила название ЦДУБ, переименованное в 1996 г. в Буддийскую Традиционную Сангху России (БТСР). Именно она является той религиозной организацией, о которой в новом Законе о религии говорится как об одной из четырех традиционных конфессиях России наряду с православием, исламом и иудаизмом. Этим самым утверждается, что Буддийская Традиционная Сангха России не требует 15-летнего срока для полноценного функционирования согласно новому Закону.</p></li>
            <li><p class="text-justify">Историческими документами подтверждается, что СПб Храм строился как Храм, принадлежащий школе гелуг, то есть как раз той организации, которая и называется сейчас БТСР. Поэтому никакая группа верующих, как бы она ни была зарегистрирована, не может занимать Храм, если она духовно-административно не подчиняется главе буддистов России Хамбо-ламе, ныне Дамбе Аюшееву.</p></li>
            <li><p class="text-justify">Храм никогда не подчинялся и не может подчиняться иностранной религиозной организации или иерарху, в том числе и Далай-ламе. Это противоречит исторической традиции, российским законам и интересам государства.</p></li>
            <li><p class="text-justify">Согласно новому Закону внутренняя деятельность любого религиозного объединения отвечает догмам конфессии, которой принадлежит объединение. Доводим до сведения чиновников минюста, что буддизм во все времена, во всех школах и направлениях существовал как монашеский орден, делами которого заведовали сами монахи. Миряне были лишь жертвователями и почитателями. Такое положение было во все времена и в буддийской церкви России. Простые верующие прихожане никогда в буддизме не имели духовно-морального права распоряжаться делами монастыря и общины монахов.</p></li>
            <li><p class="text-justify">СПб Храм строился как Храм-монастырь с учебной программой класса цаннид, то есть предусматривающей получение монахами высшего буддийского профессионального образования. Поэтому на втором этаже Храма архитектор Барановский и Хамбо-лама Агван Доржиев предусмотрели 10 монашеских комнат-келий. К процессу обучения монахов всегда подключались ведущие буддологи-востоковеды СПб. Эта традиция сохранилась до наших дней. В 1997-1998 учебном году в Храме преподавали доктор философских наук буддолог В.И. Рудой, к.ф.н. Б.М. Нармаев, к.ф.н. Е.А. Хамаганова. В Храме обучались 3 монаха и 7 послушников. Храмом и общиной руководил назначенный Хамбо-ламой настоятель Б.Б. Бадмаев, давший уже как пять лет назад монашеские обеты степени гецула.</p></li>
            <li><p class="text-justify">Рекомендация минюста провести “общее собрание” монахов и сектантов-раскольников выглядит логически, исторически и юридически необоснованной и провокационной. Она напоминает продолжение решать проблему способом “стенка на стенку”. Люди, поднявшие руку на монахов, изгнавшие силой монахов из Храма, не могут считаться буддистами. Посему со всей научной и нравственной ответственностью и в согласии с буддийской догматикой утверждаем: члены так называемой Общины “Дацан Гунзэчойнэй”, захватившие Храм, не могут считаться буддистами, таковыми не являются de-facto и должны стать таковыми и de-jure.</p></li>
            <li><p class="text-justify">Работники минюста должны иметь точный критерий определения конфессиональной принадлежности претендующей на регистрацию религиозной группы. Таким критерием является декларирование своей принадлежности к конкретной буддийской школе, имеющей своего главу и подтверждающей это юридическим документом, и обязательно документально подтверждающего принятие вновь регистрируемой группы как своего филиала. Иначе будут регистрироваться любые вновь изобретенные “религии” или “направления”. Такие требования уже содержатся в новом Законе.</p></li>
            <li>
                <p class="text-justify">Почему при “перерегистрации” “Общины Дацана Гунзэчойнэй” этот момент был опущен, не ясно?</p>
                <p class="text-justify">Почему минюст не защитил законные права монахов, принадлежащих уже существующей организации Буддийская Традиционная Сангха России?</p>
                <p class="text-justify">Почему минюст зарегистрировал общину, не декларировавшую своего конфессионального выбора и не указавшего в своем уставе вышестоящего административно-духовного иерарха?</p>
                <p class="text-justify">В ответе минюста нет ответа на эти вопросы.</p>
            </li>
            <li><p class="text-justify">Всем вышесказанным экспертная группа российских ученых призывает чиновников минюста к исторически и юридически правильному решению, которое исправит вред, нанесенный захватом Храма самозванной группой, интересам России.</p></li>
        </ol>

        <p class="text-right"><i>1998 г.</i></p>
    </div>
@endsection

@push('styles')
    <style>
        p.text-justify {
            text-align: justify;
            line-height: 1.5;
            margin-bottom: 1rem;
        }
    </style>
@endpush
