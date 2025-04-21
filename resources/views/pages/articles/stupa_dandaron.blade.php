@extends('layouts.app')
@section('title', 'Ступа Дандарона')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)),
            url('{{ asset('backgrounds/texture_blue_green.webp') }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <figure class="rounded-lg shadow-md max-w-[800px] text-center">
                <img src="{{ asset('stupa/stupa_day.jpg') }}"
                     alt="Ступа Дандарона"
                     class="rounded-lg w-full h-auto mx-auto">
            </figure>
        </div>

        <!-- Заголовок -->
        <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-2xl md:text-2xl mt-6 mb-6">
            Ступа Дандарона
        </h1>
        <!-- Основной текст -->
        <div
            class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <div class="text-right italic mb-4">
                <p>Наш Учитель никогда не рождался, значит Он не умрет!<br>
                    <strong>Ю.К.Лавров</strong></p><br>
                <p>Вот Хрустальная Ступа, значит Учитель существует!<br>
                    <strong>Нацог-Рандол</strong></p><br>
                <p>Время Ступы -- время Учителей!<br>
                    <strong>МВМ</strong></p>
            </div>
            <p>
                Прошло почти тридцать лет с тех пор, как прах Б.Д.Дандарона был
                захоронен на кладбище поселка Выдрино, недалеко от зоны, где он
                провел последние годы жизни. Все эти годы периодически заводился
                разговор о строительстве ступы, но это было невыполнимо по
                прозаической причине - нельзя было извлечь останки Учителя из
                могилы.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_place.jpg') }}"
                         alt="Отметка расположения ступы на карте"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Отметка расположения ступы на карте
                    </figcaption>
                </figure>
            </div>

            <p>
                С середины девяностых ситуация изменилась, юридические
                препятствия к эксгумации исчезли, и в 1997 г. ученик Дандарона
                Юрий Константинович Лавров организовал поездку в Выдрино и
                извлечение праха Учителя из могилы. В течение года прах хранился
                на родине Дандарона в Кижинге.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/Lavrov_Yuryi.jpg') }}"
                         alt="Юрий Константинович Лавров"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Юрий Константинович Лавров
                    </figcaption>
                </figure>
            </div>

            <p>
                Место для строительства было выбрано в ста метрах от руин ступы,
                которую в 1966 г. строил своему отцу Агвану Силнам Тузол Доржи
                сам Б.Д.Дандарон. Тогда строительство не было завершено: по
                приказу кижингинского партийного начальства бульдозер разрушил
                то, что было сделано. Это происходило на вершине горы Тэбхэр
                Майла, расположенной в тайге в 15 км от с. Кижинга в долине р.
                Кудун. К этому времени Ю.К.Лавров вместе с учениками разработал
                проект ступы высотой семь метров. В основании ступы
                предполагалось расположить камеру для праха в виде яйца.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/inner_red_stupa.jpg') }}"
                         alt="Внутренняя красная ступа в яйцеобразном саркофаге"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Внутренняя красная ступа в яйцеобразном саркофаге
                    </figcaption>
                </figure>
            </div>

            <p>
                В 1998 г. в полуяйце, нижней части погребальной камеры, прах
                Дандарона был захоронен. Подземная часть была закрыта
                металлической крышкой и запечатана двумя скрещенными
                треугольниками (дхармодая) из бетона. В апреле 2002 г. умер
                автор проекта ступы Ю.К.Лавров.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/inner_red_stupa_shpil.jpg') }}"
                         alt="Внутренняя красная ступа в яйцеобразном саркофаге"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Внутренняя красная ступа в яйцеобразном саркофаге
                    </figcaption>
                </figure>
            </div>

            <p>
                В летний период 2003-2004 г. была построена надземная часть
                Ступы. Строительство велось силами последователей традиции
                Дандарона, жителями Кижинги, Улан-Удэ и приехавшими учениками
                учеников Дандарона из Москвы, Санкт-Петербурга, Харькова,
                Кременчуга и Челябинска.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/shoyzhungs.jpg') }}"
                         alt="Дхармодая"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Дхармодая
                    </figcaption>
                </figure>
            </div>

            <p>
                Летом 2003 г. возводятся из бетона четыре ступени основания и
                сферическая часть ступы. Недалеко от места ее возведения
                мостстройотряд возводил мост через реку Кудун. Со строителями
                удалось договориться, и они помогли техникой и материалами.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/step_fasteners.jpg') }}"
                         alt="Отливка ступеней"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Отливка ступеней
                    </figcaption>
                </figure>
            </div>

            <p>
                15 октября 2003 г. водружен купол сферы Ступы. Купол сферы
                ставили с помощью экскаватора-крана строители моста через Кудун.
                Помогали жители Усть-Орота.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/four_creators_svayambha.jpg') }}"
                         alt="Творцы и вдохновители создания бинду ступы"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Творцы и вдохновители создания бинду ступы
                    </figcaption>
                </figure>
            </div>

            <p>
                Зимой 2003-2004 гг. в Кижинге были сделаны диски для шпиля
                Ступы. В Москве в это время создавалась сваямбха внешней ступы.
                Это был вдохновенный творческий поиск, это было созерцание.
                Сваямбха Ступы Дандарона необычна: луна сделана в виде лодки,
                солнце как шар, а объемное бинду - с тремя изгибами. Автор
                проекта Нестор Парастаев. После нескольких этапов, от гипса до
                композитного материала, сваямбха была отвезена на золочение: ее
                покрыли четырьмя слоями сусального золота.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/svayambha.jpg') }}"
                         alt="Сваямбха"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Сваямбха
                    </figcaption>
                </figure>
            </div>

            <p>
                15 июля 2004 г. сваямбха была водружена на шпиль Ступы.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_sky.jpg') }}"
                         alt="Ступа, вечер"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Ступа, вечер
                    </figcaption>
                </figure>
            </div>

            <p>
                18 июля в 19.00 последние взмахи кисти завершили покраску Ступы
                белоснежной стойкой фасадной краской. К этому времени на Гору
                уже съехались родственники Дандарона и жители Кижинги и
                Усть-Орота. Вместе со строителями присутствовало около
                семидесяти человек. В 22 часа начался ритуал Сокшод. В начале
                ритуала был прочтен текст <a
                    href="{{ route('articles.contemplation_of_stupa') }}" class="text-blue-600
   hover:underline">Освящение Белой Ступы Ваджрасаттвы</a>.
                Затем всеми присутствовавшими был исполнен Сокшод на тибетском и
                русском языках. Местные жители и гости из Улан-Удэ и Кижинги
                почти все разъехались. Оставшиеся гости и строители пировали до
                рассвета. На следующий день петербуржцы, москвичи и харьковчане
                попрощались со Ступой Учителя и покинули Гору.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/parting.jpg') }}"
                         alt="Фото перед отъездом"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Фото перед отъездом
                    </figcaption>
                </figure>
            </div>

            <p>
                Ступу строить трудно. Ступа - не груда камней и цемента. Ступа -
                это правильное понимание сангхой Проповеди Учителя. В ХХ веке
                Будда под именем Дандарона родился в Бурятии. Любил Родину и
                желал в ней и умереть. Так и случилось. Но Сам, как Великий
                Нирмана, был человеком Космоса, всего необозримого Пространства.
                Так говорил.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/Dand_lev_verh.jpg') }}"
                         alt="Дандарон, запечатлённый в левом верхнем углу мандалы
                        Шри Ваджрабхайравы"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Дандарон, запечатлённый в левом верхнем углу мандалы
                        Шри Ваджрабхайравы
                    </figcaption>
                </figure>
            </div>

            <p>
                В Бурятии давно сложилось то, что мы называем буддийской
                духовной культурой. Это - тибетская традиция в преломлении
                национальных особенностей бурятской культуры. Родившись бурятом,
                Дандарон принадлежит ее истории. Но, будучи Буддой, он
                принадлежит всему миру. Эту полноту бытия совершенного Существа
                ярко показал всем Лубсан Сандан и передал своему Великому
                Ученику: "Ты - Дхармараджа!" И Дандарон стал им, невзирая на
                адское обличие советской сансары.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img
                        src="{{ asset('stupa/Dandaron_tantrichestoe_odeyanie.jpg') }}"
                        alt="Бидия Дандарович Дандарон в тантрическом одеянии"
                        class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                        style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Бидия Дандарович Дандарон в тантрическом одеянии
                    </figcaption>
                </figure>
            </div>

            <p>
                Лубсан Сандан Цыденов, подписывавшийся коротким словом-статусом
                Сугада (Сугата), и Бидьядара (Видьядхара) Дандарон, не прятавший
                гордое <em>Дхармараджа</em>, принадлежат и в то же самое не
                принадлежат бурятской истории, бурятской культуре.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('images/Lubsan_fase.jpg') }}"
                         alt="Лубсан Сандан Цыденов"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Лубсан Сандан Цыденов
                    </figcaption>
                </figure>
            </div>

            <p>
                Мощный бурятский клан родных Бидии Дандаровича, славных его
                учениц и учеников, освященный долгой жизнью его матери -
                замечательной йогиней, ученицей Лубсана Сандана и сподвижницей
                Агвана Силнама, "бабушкой" Балжимой, предстал перед нами,
                европейцами, как живое воплощение бурятской буддийской культуры,
                как традиции. И мы кланяемся этому Роду, в котором родился,
                любил и долгие годы жил наш Учитель.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/grandmother_Balzhima.jpg') }}"
                         alt="Бабушка Балжима"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Бабушка Балжима
                    </figcaption>
                </figure>
            </div>

            <p>
                Наши духовные бурятские собратья знают, какой духовный взрыв
                осуществил Лубсан Сандан, возродив взаимоотношения
                Учитель-ученик времен индийских сиддхов и тибетцев времен
                Падмасамбхавы. Он уединился на Соорхэ (поляна на склоне
                Кудунского хребта в семи км. От поселка Усть-Орот) не только для
                созерцания, но и для того, чтобы создать сангху последователей.
                Он не рвал специально связь с дацановской традицией, а просто
                однажды, произнеся без всякой эмоции "дацан - это сансара",
                "ушел в глушь тайги".
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('images/Lubsan_Agvan_collapsed.jpg') }}"
                         alt="Лубсан Сандан и Агван Силнам"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Лубсан Сандан и Агван Силнам
                    </figcaption>
                </figure>
            </div>

            <p>
                Героическую стезю избрал себе в долю Дандарон и прошел ее,
                передав ученикам Все. Именно Все (даже такие "мелочи", как Жуд
                Ганжура), но каждый из нас вместил только то, что смог, или то,
                что было предначертано.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/on_buspoint.jpg') }}"
                         alt="На остановке"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        На остановке
                    </figcaption>
                </figure>
            </div>

            <p>
                Бидия Дандарович учил нас вечности, чувству непосредственной,
                живой причастности к буддизму и к буддистам. Он, беседуя с нами,
                совершал акт удивительной трансформации времени: Будды прошлых
                времен, Шакьямуни, Его великие ученики, архаты, Асанга, Луива,
                Лалитаваджра, Ролоцава, Марпа, Цзонхава и надвигающееся будущее
                - все переживалось рядом с ним, как настоящее.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/BD_VM_1971.jpg') }}"
                         alt="Бидия Дандарон, Владимир Монтлевич, 1971г."
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Бидия Дандарон, Владимир Монтлевич, 1971г.
                    </figcaption>
                </figure>
            </div>

            <p>
                Нас, учеников Бидии Дандаровича и принадлежащих к его Линии
                духовной преемственности, в первую очередь интересуют
                практические наставления Учителя. Они нетрадиционны до такой
                степени, что иногда говорилось, что у Дандарона нет традиции.
                Так говорили, кто понимал, так говорили и сторонние, не понимая,
                что говорят. Мы же иногда называли проповедь Учителя "подпиткой
                сверху", проповедью, идущей не через Линию передачи, а минуя
                традицию, непосредственно из Мира Будд. Эта нетрадиционность
                стиля ученичества, стиля передачи, стиля жизни и, наконец, стиля
                практик и составили для нас, его европейских учеников, то, что
                мы называем Традицией Дандарона, понимая, что таково было время,
                такова наша карма и что это была Джняна Дандарона.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/near_tree.jpg') }}"
                         alt="Групповое фото у сосны"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Групповое фото у сосны
                    </figcaption>
                </figure>
            </div>

            <p>
                Проповедь Дандарона не была ни по стилю, ни по содержанию
                традиционной, хотя и содержала все необходимые смыслы Канона и
                особенно такую классическую строгость, как обязательное знание
                "Абхидхармакоши".
            </p>

            <p>
                Жизнь в Сангхе не была традиционной. Сам Дандарон жил
                нетрадиционно для человека, который был хубилганом и
                Дхармараджей. Это не подлежит обсуждению. Так было. Но
                относились к этому по-разному. Нам, европейцам, это было по
                природе нашей. Мы поэтому и нашли друг друга: ученики - Учителя,
                Учитель - учеников. Родные Бидии Дандаровича (для некоторых он
                был Учитель) к нему относились, как и полагалось,
                по-родственному, называя попросту - нагца (дядя). И в этом нет
                умаления его личности, в этом сила семейного уклада и привычки.
                Они всегда знали, кто Он на самом деле.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img
                        src="{{ asset('stupa/Dandaron_famyle_Montlevich.jpg') }}"
                        alt="***"
                        class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                        style="max-width: 800px;">
                </figure>
            </div>

            <p>
                В 1966 г. Дандарон начал учить европейцев, тогда к нему пришел
                А.И.Железнов, и через четыре года в сангхе было уже около
                тридцати человек. Для бурят создалась не совсем привычная
                ситуация. Их вполне традиционная культура с опаской
                отреагировала на Проповедь Дандарона. Ибо Проповедь европейцам
                была внове, девиз "Тантра - на Запад!" тоже внове. Когда же
                Бидия Дандарович передавал всегда считавшиеся в традиционном
                буддизме тайной быстрые методы реализации, когда он при всех на
                Сокшодах рассказывал о своей практике, в том числе и о лагерной,
                это было для многих шоком. Особенно это было заметно в 1972 г.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('images/Zheleznov_Dandaron_500.jpg') }}"
                         alt="***"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Дандарон и Железнов
                    </figcaption>
                </figure>
            </div>

            <p>
                Дандарон сделал Дело, выполнил свою миссию и занялся тем же
                далее, но так, что нам его вроде глазами не видно. Однажды
                Учитель сказал: "Постройте храм белый и круглый". Он никогда не
                говорил о судьбе праха. Думаю, ему это было просто неинтересно.
                И он смеется над нашими сегодняшними мытарствами в связи со
                строительством Ступы. Предлагаю рассмеяться вместе с ним!
            </p>

            <p>
                Ступа – это не обязательно место, где прах; <em>буддисту</em> на
                прах
                наплевать, <em>буддистам</em> прах, как показала история,
                оказался нужен.
                Пусть кланяются зубу Будды или еще чему-то. Можно кланяться и
                камню. Не бывает для понимающего <em>несвященного</em>.
            </p>

            <p>
                Дандарон - это не только наш Учитель, Дандарон - это
                национальная гордость бурятского народа, известный российский
                философ, буддийский деятель мирового масштаба. Ибо именно он
                открыл дверь в Россию и Еше Лодою Ринпоче, и другим достойным
                буддийским монахам разных школ и ян.
            </p>

            <p>Ступа - не для ушедших, таких просто не бывает, они живы. Ступа -
                для тех, кто живет. Канон считает ступу символом Тела Мысли -
                дхармакаи. Можно проще: Ступа - это идея Учителя, это то
                сокровенное, что в словах невыразимо (в словах - его книги и то,
                что помним из его устных наставлений). И такое определение Ступы
                - это не искажение глубины ее смысла. Учитель совершенен,
                совершенно в нем все - и Тело, и Речь, и Мысль. Ступа должна
                быть красивой, прекрасной. Она должна радовать взор, должна
                восхищать. Такой она и стоит в тиши сибирской тайги.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/white_stupa.jpg') }}"
                         alt="Белоснежная красавица"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Белоснежная красавица
                    </figcaption>
                </figure>
            </div>

            <p>
                В 2004 г. была завершена архитектурная часть строительства
                Ступы, и 18 июля 2004 года ученики Традиции Дандарона провели,
                как мы уже писали, внутренний ритуал освящения Ступы. Оставалось
                нарисовать глаза на хармике (кубический реликварий над куполом).
                Это оказалось трудной и вдохновляющей задачей. Вся сангха
                участвовала в поиске нужной формы глаз. Один из вариантов
                предполагал на каждой из сторон изобразить глаза Дандарона,
                Лубсана Сандана Цыденова, Балжимы (матери Дандарона) и Доржи
                Бадмаева (отца Дандарона), то есть всех, кто был связан с
                историей уединения на Соорхэ, с недавним этапом развития
                Традиции. От этого проекта пришлось отказаться, проект по форме
                не сочетался с архитектурой, были и принципиальные возражения.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_smog.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;" alt="">
                </figure>
            </div>

            <p>
                Глаза должны быть без признаков индивидуальности. Глаза
                соединены через авандуди прямо с чакрой сердца, то есть Бинду
                Сердца. Это бинду не имеет индивидуальности, оно у всех
                абсолютно одинаково: это - центр сердца Ваджрасаттвы. Поэтому
                для буддистов взгляд в глаза - это более чем христианский взгляд
                в душу, это - взгляд в таинственное Бинду Сердца Ваджрасаттвы.
                Оно одно на всех. Поэтому и глаза должны быть "вечными", без
                похожести. Облик Лубсана Цыденова, Дандарона - это один из
                множества обликов, что они принимали, нам же был дан в
                восприятие этот. Но ведь наша Ступа на века, как непальские.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_free.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Сняли леса"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Сняли леса
                    </figcaption>
                </figure>
            </div>
            <p>
                Глаза - это как лалана и расана: два канала, соединенные с
                авандуди; урна промеж бровей - это отметина третьего глаза.
                Когда человек в дхьяне, когда смотрит сосредоточенно, например,
                в лицо другого, два глаза сливаются в один и располагаются точно
                там, где урна. Из нее на другого или на тебя исходит поток
                праны, соединенный в бинду-единство, чьим символом является
                завиток, похожий на нос, это и есть огонь праны, что срывается с
                верхушки ХУМа. В нем соединены все пять мудростей, он - шестой
                дхьянибудда Самантабхадра (Ваджрадхара). Поэтому этот завиток и
                изображается как санскритская цифра один - Единство.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_eyes_Makarova.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Макарова рисует глаза"
                         style="max-width: 800px;">
                </figure>
            </div>
            <p>
                После долгого обсуждении в Интернете вариантов глаз был принят к
                исполнению эскиз Елены Макаровой. Глаза ее эскиза очень похожи
                на непальские. И это исторически понятно, ведь Учитель строил ту
                Ступу сам в воплощении Черного Ворона.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img
                        src="{{ asset('stupa/stupa_eyes_Makarova_sunday.jpg') }}"
                        alt="Лена Макарова за работой"
                        class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                        style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Лена Макарова за работой
                    </figcaption>
                </figure>
            </div>
            <p>
                За четыре дня (10-13 августа 2005 г.) на всех четырех гранях
                хармики Еленой Макаровой были нарисованы глаза, помогали Янжинма
                Дашицыренова и Мария Ноздрина. Помогали также лама Цыван
                Дашицыренов и другие.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img
                        src="{{ asset('stupa/stupa_eyes_Dashitserenovi.jpg') }}"
                        class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                        alt="Дашицыреновы, отец и дочь, рисуют глаза"
                        style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Дашицыреновы
                    </figcaption>
                </figure>
            </div>
            <p>
                Кроме того, решили к языкам колокольчиков, прикрепленных к
                зонту, привязать ленты пяти цветов. Это создало необходимую
                парусность, и на ветру Ступа "заговорила" нежным перезвоном.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_eyes_Makarova_darkblue_sky.jpg') }}"
                        class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Макарова рисует глаза в темноте неба"
                        style="max-width: 800px;">
                </figure>
            </div>
            <p>
                13 августа поздно вечером, в темноте у костра совершили гневный
                ритуал Пурбы Золотого Дамдина. Затем все совершили ритуальный
                Круг вокруг Ступы Учителя. Потом спустились к могиле
                Ю.К.Лаврова, почтили его память Кругом. Снова поднялись вверх и
                совершили Круг у фундамента Невидимой Ступы.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_sun.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Ступа и солнце"
                         style="max-width: 800px;">
                </figure>
            </div>
            <p>
                14 августа приехали гости, родственники Б.Д.Дандарона. Перед
                ритуалом Сокшод собравшихся приветствовал Бато Баяртуев,
                внучатый племянник Дандарона. Запомнились его слова: "Не мечем
                Атиллы, а Учением Будды завоевала Азия мир".
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_coner.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Ступа, вид с угла"
                         style="max-width: 800px;">
                </figure>
            </div>
            <p>
                В конце ритуальной части праздника был исполнен <a
                    href="{{ route('articles.contemplation_of_stupa') }}" class="text-blue-600
   hover:underline">созерцательный гимн Ступе</a>.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_valley.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Ступа, вид на долину"
                         style="max-width: 800px;">
                </figure>
            </div>
            <p>
                В течение лета велись переговоры о проведении ритуала Рабнэй -
                традиционного ритуала освящения Ступы - с тибетским ламой Еше
                Лодоем Ринпоче. Ринпоче назначил ритуал на 18 сентября 2005 г.
                На ритуал собралось около 250 человек. Погода к этому времени
                ухудшилась и хотя стало чуть теплее, но дождь моросил весь день,
                было пасмурно. То, что моросил дождь, по местным народным
                приметам благоприятный знак. Тем более, что осенью в
                определенные дни любая вода превращается в аршан, и как раз эти
                дни совпали. Ело Ринпоче выехал из Улан-Удэ в 9 утра. Около
                двенадцати приехал в Кижингу, передохнул в доме Мункиных и в два
                часа дня был у Ступы.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_amazing.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Необычное освещение"
                         style="max-width: 800px;">
                </figure>
            </div>
            <p>
                Помогали Ринпоче проводить Рабнэй лама Цыван Дашицыренов,
                Тензин-лама и Дондок Дашицыренов.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/rabney_people.jpg') }}"
                         alt="На освящении ступы"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        На освящении ступы
                    </figcaption>
                </figure>
            </div>
            <p>
                Перед ритуалом Ело Ринпоче обошел Ступу, долго рассматривал
                сваямбху, затем сказал: "красивая, большая, соответствует
                личности Дандарона". И добавил - "древняя по форме, похожа на
                ступы Шакьямуни, на непальские ступы. Как хорошо, что ученики
                так почитают Учителя". Для многих присутствующих красота и
                величие Ступы были неожиданностью, форма - непривычной. Цыван
                Дашицыренов заметил: "Главное, люди остались довольны, они
                искренне радовались, у многих на глазах видели даже слезы".
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/rabney.jpg') }}"
                         alt="Ритуал освящения ступы, проводимый Ело Ринпоче"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Ритуал освящения ступы, проводимый Ело Ринпоче
                    </figcaption>
                </figure>
            </div>
            <p>В заключение отметим, что в этот же день 18 сентября 2005 г. было
                завершено строительство Ступы на о.Огон на Байкале с
                архитектурой, похожей на архитектуру Ступы Дандарона. Так
                духовные усилия буддистов разных традиций сложились в едином
                благотворном деянии: проповедь Ступы Ваджрасаттвы - Ступы
                Дандарона двинулась на Запад.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_vidrino.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Ступа в Выдрино"
                         style="max-width: 800px;">

                </figure>
            </div>
            <p>
                Дандарон был человеком, тонко чувствующим прекрасное. Зона,
                мытарства на свободе только отточили его активное и радостное
                восприятие жизни. Его взгляд всегда лучился блеском и вниманием,
                в нем были не только мудрость и спокойствие знания, но искреннее
                и первозданное удивление. Творческая активность сознания Учителя
                никогда не иссякала, он видел будущее и творил его. Мы по его
                воле и чаянию построили Белую Ступу, стремясь к простому и
                ясному - чтобы Ступа была красивой.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_rassvet.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Ступа на рассвете"
                         style="max-width: 800px;">
                </figure>
            </div>
            <p>
                Три года, каждое лето встречались на горе в глуши тайги буддисты
                Традиции Дандарона, трудились, общались, созерцали. И вот Ступа
                стоит. Она хороша и белосветна. Проходят дни, недели от того
                момента, когда строительство было завершено. И вдруг многие
                ощутили - строительство продолжается. Ступа чудесным механизмом
                Истины, Мыслью Учителя, красотой, гордостью Ваджрасаттвы
                преображает нас. Она живет не только там, на Горе, но в нас
                самих, в наших сердцах. Ступа естественно и не нарочито стала
                объектом созерцания. Как символ Дхармакаи, как реальность мысли
                Дандарона она действует и всех магически преображает.
            </p>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_grass.jpg') }}"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         alt="Ступа и травинка"
                         style="max-width: 800px;">
                </figure>
            </div>
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                    <img src="{{ asset('stupa/stupa_plakat.jpg') }}"
                         alt="Плакат ступы"
                         class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                         style="max-width: 800px;">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Ступа, строители, символика<br>коллаж В.Чихичена
                    </figcaption>
                </figure>
            </div>
            <p class="text-right italic text-gray-600 mt-4">В.М.Монтлевич,
                2005</p>
        </div>
    </div>
@endsection
