@extends('layouts.app')

@section('title', 'Юрий Алексеев')

@section('content')

<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Оптимизированная версия с дополнениями -->
    <div class="flex justify-center">
        <figure class="rounded-lg shadow-md max-w-[420px] text-center">
            <img src="{{ asset('images/Alekseev_500.jpg') }}"
                 alt="Автопортрет Ю.А. Алексеева, 1964 год"
                 class="rounded-lg w-full h-auto mx-auto">
            <figcaption class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                Ю.А. Алексеев<br>Автопортрет. 1964 г.
            </figcaption>
        </figure>
    </div>
    <!-- Заголовок -->
    <h1 class="text-center text-blue-900 font-bold text-xl sm:text-2xl
        md:text-2xl mt-6 mb-6">Памяти Ю.А. Алексеева</h1>
    <!-- Основной текст -->
    <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
        <p>Аристократом духа был Юрий Алексеев. Путь его к истине в этом
            рождении начался рано, но знаю лишь о школьных годах, когда со своим
            другом Вадимом Танчиком (1940 – 1987) они поразили учителей и
            одноклассников неистовым и глубоким интересом к христианству.
            Молодые люди мечтали поступить в Духовную семинарию, но
            комсомольско-обывательская среда представила свои контраргументы,
            вплоть до психиатрии... Но тем богаче, шире и трагичнее стал их
            поиск.
        </p>
        <p>На стертой доске современной им культуры чертили они узоры поэзии и
            мистики, не оставляя без внимания ни магии чисел Каббалы и Арканов,
            ни Гермесову Скрижаль, ни "Философию общего дела" Федорова, ни
            "Провозвестья Рамакришны", ни многое другое, что только было
            доступно в начале шестидесятых. Затем пути их разошлись. Вадим
            Танчик все же продолжил странствия по духовным пространствам
            христианства, Юрий Алексеев "ушел" в Восток. И круг его интересов
            обозначился буддизмом, а еще конкретнее – тантрой. В это же время,
            подтверждая постоянный интерес к происхождению и эволюции живого, к
            генетике, он поступает и учится на биофаке ЛГУ.
        </p>
        <p>Всех, кто общался с Юрой, поражала глубина переживания и
            достоверность выражения – в поэзии, в притчах, в рисунках и,
            наконец, в самой жизни. Русский символизм начала века вдруг ожил –
            Соловьев, Бальмонт, Белый, Блок, Брюсов, Скрябин, Сибелиус, Волошин
            – и Восток... Быстро была освоена русская буддология. По грамматике
            Я.И. Шмидта, в ее тибетско-немецком варианте, Алексеев изучает
            тибетский язык, а в дальнейшем слушает курс тибетского зимой
            69–70-го у Бронислава Ивановича Кузнецова. Встал вопрос об Учителе,
            поиск же посвящения, но Учителя, готовность прорыва в Индию, вплоть
            до перехода границы, к чему он был близок во время путешествия на
            Памир. В 1965 г. узнает о буддийских монастырях в Бурятии, но едет
            на Восток его решительный друг. Из Бурятии приходит весть: имя
            Учителя – Бидия Дандарович Дандарон. В 1967 г. Юрий получает
            посвящение и начинает долгий путь практики.
        </p>
        <p>Юра был для всех, его знавших, духовным побудителем, мастером намека,
            творческой неопределенности и яркой импровизации, инициатором
            духовной интриги, игры. В 1974 г. участвует в созидании мандалы
            Учителя, очередная встреча с дзэном и первая опознанная встреча с
            дзогченом на фоне диспута VIII в. в тибетском монастыре Самье не
            оставляет сомнений – непостепенный Путь, проповеданный Учителем,
            подтвержден прояснившейся природой ученика.
        </p>
        <p>Путь Юрия Алексеевича Алексеева был ни короток, ни долог – 43 года.
            За день до ухода он пишет свой последний стих – поэтизированное и,
            как всегда у него, глубоко символическое свидетельство
            достигнутого:
        </p>

        <div class="flex justify-center">
            <ul class="text-left list-none w-64">
                <li>Покой...</li>
                <li>и чуть</li>
                <li>заметная заря.</li>
                <li>Ни солнца, ни луны.</li>
                <li>Покой...</li>
                <li>в незримой дымке</li>
                <li>свет живой</li>
                <li>заполнил мною</li>
                <li>те края,</li>
                <li>что</li>
                <li>в прошлых жизнях</li>
                <li>не прошли с тобой...</li>
            </ul>
        </div>

        <p>На следующий день, 19 октября 1983 г., Юры не стало. Но вскоре он
            поразительным, но вполне буддийским, и не только буддийским
            способом, напомнил о себе, придя к одному из младших духовных
            братьев. Тот, увидев его, спросил: "Юра, что такое Ваджрасаттва?" И
            последовал краткий, ослепительный и неожиданный по форме для
            буддизма ответ:
        </p>

        <p class="text-center italic">"Ваджрасаттва есть любовь".</p>

        <p class="text-right italic text-gray-600 mt-4">
            В.М.
        </p>
        <p class="text-right italic text-gray-600 mt-4">
            Журнал Гаруда", №1, 1992г.
        </p>

    </div>
</div>
@endsection

<style>
    .container {
        background-image: url('{{ asset('backgrounds/unsplash.jpg') }}');
        background-attachment: fixed;
        background-size: cover;
    }
</style>
