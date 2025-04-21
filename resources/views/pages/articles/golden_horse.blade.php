@extends('layouts.app')
@section('title', 'Золотой Конь бодхичитты')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.85)),
            url({{ asset('backgrounds/bluerish.webp') }});
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="flex justify-center">
            <figure class="rounded-lg shadow-md max-w-[600px] text-center">
                <img src="{{ asset('images/vajrasattva_netroystveniy.png') }}"
                     alt="Золотой Конь бодхичитты"
                     class="rounded-lg w-full h-auto">
            </figure>
        </div>

        <div class="flex justify-center mt-6">
            <div class="text-left max-w-3xl">
                <div class="text-center mb-8">
                    <h2 class="text-xl font-bold mb-4">Девиз: "Читтаваджра Акаша"</h2>
                    <h1 class="text-2xl font-bold text-red-700 mb-4">ЗОЛОТОЙ КОНЬ БОДХИЧИТТЫ</h1>
                    <h2 class="text-xl font-bold">Мула Правидья</h2>
                </div>

                <div class="poem space-y-6 font-medium">
                    <div class="stanza mb-8">
                        <span class="line block">Приветствую в себе Саманта Ваджрасаттву Видьядхару.</span>
                        <span class="line block">В Саманте – полнота Дхармакаи,</span>
                        <span class="line block">В Ваджрасаттве – бодхичиттовость Самбхогакаи,</span>
                        <span class="line block">В Видьядхаре – милосердие Нирманакаи.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Каждый момент в глубинах моего бытия</span>
                        <span class="line block">разделяются Сансара и Нирвана.</span>
                        <span class="line block">Ухвачу эту точку расхождения,</span>
                        <span class="line block">Дабы реализовать сразу состояние</span>
                        <span class="line block">Всегда юного шестнадцатилетнего Манджушри.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Есть шуньята, познаваемая интуицией,</span>
                        <span class="line block">Есть Ясный Свет – Великий Мандал Проявленности.</span>
                        <span class="line block">Будда – во вместерожденности шуньяты и Ясного Света.</span>
                        <span class="line block">Атрибут его – Зеркало, символ Изначального Знания.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">В Зеркале спонтанно возникают драгоценности-ратны;</span>
                        <span class="line block">Это дуплистые кванты пространства с объемом,</span>
                        <span class="line block">ограниченным Солнцем и Луной.</span>
                        <span class="line block">Образ Солнца и Луны в Зеркале – наше сознание.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">В ратне – пространство дхарм,</span>
                        <span class="line block">В дупле – ваджрное, неразрушимое пространство, оно же – Акаша.</span>
                        <span class="line block">Катастрофа рождения – соединение</span>
                        <span class="line block">Дхармового пространства с Ваджрным.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Взросло новое пространство – Авандуди – мыслящий тростник.</span>
                        <span class="line block">Благодаря асимметрии ратны есть возможность движения</span>
                        <span class="line block">и выхода дхарм из Дхармового пространства</span>
                        <span class="line block">по закону левого или правого.</span>
                        <span class="line block">Этот выход есть спираль движения мысли –</span>
                        <span class="line block">И мир искривлен – Сансара реализуется –</span>
                        <span class="line block">Расцветает лотос живых существ – пространство Рупа-скандхи.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">При этом ратна, как пространство-сосуд,</span>
                        <span class="line block">лопается, подобно бутону лотоса,</span>
                        <span class="line block">И катастрофирует межлепестковое пространство</span>
                        <span class="line block">источников дхарм –</span>
                        <span class="line block">Из него мгновенно рождаются Просветленные – Нирманакаи,</span>
                        <span class="line block">не затронутые кривизной мира – Сансарой.</span>
                        <span class="line block">Их атрибут – меч интуиции, прямой,</span>
                        <span class="line block">пылающий, с гардой из Зеркала-Знания.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Меч интуиции не подвластен двойственности левого-правого.</span>
                        <span class="line block">Действие Татхагат спонтанно.</span>
                        <span class="line block">Их Тело, Речь, Мысль – нераздельны.</span>
                        <span class="line block">Вот их Тело – Зеркало Изначального Знания,</span>
                        <span class="line block">Вот их Речь – Великая беспредельная Шуньята.</span>
                        <span class="line block">Вот их Мысль – Блистательный Конь Бодхичитты.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Динамика Трёх претворяется через игру Пяти Махабхути.</span>
                        <span class="line block">В Зеркале – это Пять Мудростей,</span>
                        <span class="line block">В ХУМе – пять частей,</span>
                        <span class="line block">В Авандуди – пять центров,</span>
                        <span class="line block">В Кристалле – Пять цветов игры Ясного Света.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Веселюсь в Великом бесцентровом мандале не размышляя,</span>
                        <span class="line block">Не отторжимый от Бодхичитты – всегда за горизонтом событий —</span>
                        <span class="line block">чередой поступков,</span>
                        <span class="line block">За гранью понимания усмиряемых:</span>
                        <span class="line block">Потому – неуязвимый и невидимый.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Я – Золотой Конь Бодхичитты –</span>
                        <span class="line block">Освещаю этот мир и порождаю иные.</span>
                        <span class="line block">У меня нет имени и – все имена,</span>
                        <span class="line block">Обретаю любую форму, свободно преображая</span>
                        <span class="line block">Автозеркалирование Атийоги</span>
                        <span class="line block">В геометремы Ануйоги или Идамы Тантр.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Время моё – мгновение,</span>
                        <span class="line block">Поэтому я – Владыка Махамудры.</span>
                        <span class="line block">Разрывая гордую скорлупу ратны,</span>
                        <span class="line block">Рождаю миры,</span>
                        <span class="line block">И сразу – и в прошлом, и в будущем,</span>
                        <span class="line block">И всегда истинно здесь и сейчас.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Скорость моя не имеет предела,</span>
                        <span class="line block">Поэтому Великое Оставление – не принцип, а результат.</span>
                        <span class="line block">За мной шлейф миров – структуры и формы,</span>
                        <span class="line block">Я – Истинный Правидья – Опережающее Присутствие.</span>
                        <span class="line block">Возбудитель миража солитонов –</span>
                        <span class="line block">незатухающих Бегущих Волн.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Внемлите, кто может, смотрите – я ничего не объясняю</span>
                        <span class="line block">И не передаю, и это – Высшая Передача.</span>
                        <span class="line block">Увидевший мгновенно превращается</span>
                        <span class="line block">во Всадника на Золотом Коне,</span>
                        <span class="line block">И мы, радужно переливаясь, как один или множество,</span>
                        <span class="line block">Оглашаем миры смехом Блаженства –</span>
                        <span class="line block">А ХО МАХА СУКХА!</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Это – Самопередача, взрыв Бодхичитты, катастрофа.</span>
                        <span class="line block">Готовые, не учась, мчатся всегда и везде,</span>
                        <span class="line block">Как только сияние Всадника отразится в их Зеркалах.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Наш бег разрывает тенеты глобальных мар:</span>
                        <span class="line block">Просветляются вихри духовных наркотиков,</span>
                        <span class="line block">Теряя силу, исчезают мары власти,</span>
                        <span class="line block">Исчезают мары денег, спрямляя жадность в достоинство формы,</span>
                        <span class="line block">Обнаруживается тайный мара – невидимость</span>
                        <span class="line block">глобальных и Мировых структур –</span>
                        <span class="line block">и тает, как льдистая паутина.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">В моей руке плеть – Волшебный шнур Бодхичитты,</span>
                        <span class="line block">Нет больше спутанности бусин, нет узлов на авандуди,</span>
                        <span class="line block">Исчезают вихри клеш.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Мой взор проникает, и в Зеркале Правидьи –</span>
                        <span class="line block">хоровод иных миров,</span>
                        <span class="line block">Подобный сверканию звезд на бархате ночного неба.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Приветствую Читтаваджра Акашу!</span>
                        <span class="line block">Совершая Правидьи, следуя Учениям</span>
                        <span class="line block">Адидхармараджи, Нацог Рандола</span>
                        <span class="line block">И Традиции Изначального Совершенства,</span>
                        <span class="line block">Методом катастроф освобождаю этот мир</span>
                        <span class="line block">и порождаю иные.</span>
                    </div>

                    <div class="stanza mb-8">
                        <span class="line block">Следуйте себе, Правидьядхары,</span>
                        <span class="line block">И вы мгновенно обретете состояние</span>
                        <span class="line block">Саманта Ваджрасаттвы Видьядхары –</span>
                        <span class="line block">Оно уже в вас!</span>
                        <span class="line block">Пейте нектар бессмертия</span>
                        <span class="line block">И пойте Песню Блаженства,</span>
                        <span class="line block">Золотой Конь Бодхичитты мчится в безвременье и всепространстве!</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center my-8">
            <figure class="rounded-lg shadow-md max-w-[600px] text-center">
                <img src="{{ asset('images/golden_horse.jpg') }}"
                     alt="Золотой Конь бодхичитты"
                     class="rounded-lg w-full h-auto">
            </figure>
        </div>

        <div class="my-8 text-right italic">
            <p>Май 1991 г.</p>
        </div>

    </div>
@endsection
