@extends('layouts.app')

@section('title', 'Буддийская глиняная пластика')
@section('meta_description', 'Коллекция буддийской глиняной пластики из Тибета, Монголии и Бурятии. Исследование традиционных образцов сакрального искусства.')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)),
            url('{{ asset('backgrounds/combination-makeup-textures.webp') }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Stupa.jpg') }}"
                     alt="Субурган с мантрой Шакьямуни 'ОМ МУНИ МУНИ
                     МАХАМУНИ ЙЕ СВАХА'. &#8960 42mm"
                     class="rounded-full w-full max-w-96 h-auto
                     object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Субурган с мантрой Шакьямуни <br>"ОМ МУНИ МУНИ МАХАМУНИ ЙЕ
                    СВАХА". <br>&#8960 42 мм</p>
            </div>
        </div>
        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">

            <h1 class="text-2xl font-bold text-center mt-6 mb-8
    text-amber-800">
                Буддийская глиняная пластика
            </h1>
            <p>
                Именно буддийским искусством, а не бурятским, монгольским или
                тибетским стоит называть искусство глиняной пластики названных
                стран. Ибо едины образы и един стиль этого искусства
                миниатюрного глиняного рельефа. Разве глина с берегов Селенги,
                Керулена или Цанга делает предмет соответственно бурятским,
                монгольским или тибетским? Металлические штампы, которыми
                выдавливались в глине рельефы на всей этой центральноазиатской
                территории, имеют практически один источник — искусство Индии.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Akshobhya.jpg') }}"
                         alt="Акшобхья"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Акшобхья <br>32 * 40 мм</p>
                </div>
            </div>
            <p>
                Если в живописи местные традиции рано или поздно проявлялись
                столь ярко, что можно было со временем говорить о лавранской
                школе, о стиле китайского лубка, о монгольской школе или о
                старобурятской живописи, то в глиняной пластике форма и стиль
                почти застыли. Для нас это счастливое обстоятельство, ибо
                благодаря стойкости канона, тем более религиозного, в образцах
                глиняной бурятской пластики мы можем проследить образный ряд,
                восходящий к индийскому искусству I тысячелетия нашей эры. И
                если в Индии Буддизм пришел в упадок в XII веке, а затем почти
                исчез, то в Тибете, Монголии и Бурятии он и сопутствующее ему
                искусство сохранились во всем богатстве канона и художественных
                приемов до наших дней.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Tsonkhapa.jpg') }}"
                         alt="Цзонхава"
                         class="rounded-lg max-w-96 h-auto object-cover mx-auto
                         my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Цзонхава <br>38 * 52 мм</p>
                </div>
            </div>
            <p>
                Глиняная пластика оказалась устойчивой к стилистическим
                изменениям еще и потому, что она, столь хрупкая и неброская,
                никогда не была главным элементом в художественном творчестве
                народов, исповедующих буддизм, естественно уступая места
                архитектуре, бронзовой скульптуре и живописи. Глиняные рельефы
                делались в большом количестве и, будучи недорогими, были
                доступны любому верующему, заполняя домашние алтари.
                Неисчислимое количество таких рельефов использовалось при закладке храмов и
                субурганов.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Shakyamuni.jpg') }}"
                         alt="Будда Шакьямуни"
                         class="rounded-lg max-w-96 h-auto object-cover mx-auto
                         my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Будда Шакьямуни <br>22 * 29 мм</p>
                </div>
            </div>
            <p>
                Удивительно, что до сих пор сохранившиеся в Бурятии в большом
                количестве и в необозримом разнообразии глиняные рельефы не
                привлекали внимание исследователей; достаточно пролистать
                альбомы по искусству Бурятии или Монголии и можно легко
                убедиться, что за редким исключением о них там нет и речи.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img
                        src="{{ asset('clay_plastic/Lama_Karmapa_Hutuhta.jpg') }}"
                        alt="Лама (Ургинский хутухта? Кармапа?)"
                        class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Лама (Ургинский хутухта? Кармапа?), Монголия <br>31 *
                        49 мм</p>
                </div>
            </div>
            <p>
                Нам кажется, что устойчивость сюжета и стилей глиняных рельефов
                является чрезвычайным обстоятельством, чтобы они стали предметом
                изучения, тем более, что они очень хрупки. Металлические штампы,
                с помощью которых изготавливаются рельефы, живут долго, с них
                легко делаются металлические копии, и посему можно утверждать,
                что, изучая буддийскую глиняную пластику, мы как бы имеем дело с
                точным отблеском древнего искусства Индии и Непала, соприкасаясь
                с сюжетами и образами, давно исчезнувшими на их прародине.
                Достаточно рассмотреть миниатюрные скульптуры Тары, Будды,
                Махакалы, чтобы почувствовать — перед нами живое дыхание
                буддийской Индии.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Amitabha.jpg') }}"
                         alt="Амитабха"
                         class="rounded-lg max-w-96 h-auto object-cover mx-auto
                         my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Амитабха<br>33 * 44 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Damba_hutuhta.jpg') }}"
                         alt="Второй Жебзун-дамба хутухта (XVIII век), Монголия"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Второй Жебзун-дамба хутухта (XVIII век), Монголия<br>47
                        * 60
                        мм</p>
                </div>
            </div>
            <p>
                Было бы заманчиво обнаружить в пластике сюжеты, исчезнувшие в
                живописи или никогда в ней не имевшие воплощения.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img
                        src="{{ asset('clay_plastic/Tsonkhapa_composition.jpg') }}"
                        alt="Цзонхава (композиция из 10 фигур)"
                        class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Цзонхава (композиция из 10 фигур)<br>48 * 67 мм</p>
                </div>
            </div>
            <p>
                Начиная с этого номера мы будем знакомить читателя с образцами
                буддийской пластики, надеясь, что интерес к сохранению образцов
                этого искусства проявится у тех, кто имеет к ним доступ, и,
                более того, начнется возрождение этого вида искусства.
            </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Vajrabhairava.jpg') }}"
                         alt="Ваджрабхайрава"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Ваджрабхайрава (тиб. rDo-rje 'jigs byed<br>68 * 91 мм
                    </p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Guhyasamaja.jpg') }}"
                         alt="Гухьясамаджа"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Гухьясамаджа (тиб. dPal gsang ba 'dus pa)<br>77 * 81 мм
                    </p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Cakrasamvara.jpg') }}"
                         alt="Чакрасамвара"
                         class="rounded-full w-full max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Чакрасамвара (тиб. dPal 'khor lo sdom pa)<br>&#8960 37
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img
                        src="{{ asset('clay_plastic/Damdin_Yansan_color.jpg') }}"
                        alt="Дамдин-янсан"
                        class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Дамдин-янсан (тиб. rTa mgrin yang gsang)<br>54 * 67
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img
                        src="{{ asset('clay_plastic/Talisman_against_angry_revers.jpg') }}"
                        alt="Реверс: змея (символ гнева), пронзённая пурбой"
                        class="rounded-full  max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <img
                        src="{{ asset('clay_plastic/Talisman_against_angry_avers.jpg') }}"
                        alt="аверс: слог ХУМ в центре ваджра"
                        class="rounded-full max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Талисман для уничтожения гнева. Реверс: змея
                        (символ гнева), пронзённая пурбой;<br>аверс: слог
                        ХУМ в центре ваджра<br>26 * 29 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Vajrapani.jpg') }}"
                         alt="Ваджрапани"
                         class="rounded-lg max-w-96 h-auto object-cover mx-auto
                         my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Ваджрапани<br>39 * 50 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img
                        src="{{ asset('clay_plastic/Ushnishvijaya_color.jpg') }}"
                        alt="Ушнишавиджая"
                        class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Ушнишавиджая (тиб. gTsug tor rnam par rgyal)<br>35 * 43
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Green_Tara.jpg') }}"
                         alt="Зелёная Тара"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Зелёная Тара, Монголия<br>63 * 91 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Outer_Yama_color.jpg') }}"
                         alt="Внешний Яма, без юм"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Внешний Яма, без юм (тиб. Chos rgyal phyi sgrub,
                        Шойжал шидуб)<br>35 * 49 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Vaishravana_color.jpg') }}"
                         alt="Вайшравана"
                         class="rounded-lg max-w-96 h-auto object-cover
                         mx-auto my-4">
                    <p class="my-4 px-4 italic text-gray-800">
                        Вайшравана (тиб. rNam sras gser chen, Намсарай),
                        Монголия<br>36 * 45 мм</p>
                </div>
            </div>
            <p class="text-right italic mt-4">Журнал "Гаруда" №1 (IX)
                1996г.</p>

            <p class="text-right italic font-bold">В.М.</p>
        </div>
        <h4 class="text-xl font-bold text-center my-6 text-amber-800">
            Добавлены образцы изображений глиняной пластики, опубликованные
            на сайте dandaron.ru
        </h4>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Avalokiteshvara.jpg') }}"
                     alt="Авалокитешвара"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Авалокитешвара</p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Avalokiteshvara_12_forms.jpg') }}"
                    alt="12 форм Авалокитешвары"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    12 форм Авалокитешвары</p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-4">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Avalokiteshvara_ekadashamukha.jpg') }}"
                    alt="Экадашамукха Авалокитешвара - 11-ликая форма сострадания"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="mt-4 px-4 italic text-gray-800">
                    Экадашамукха Авалокитешвара</p>
                <div class="p-2 text-justify">
                    <p class="mb-2 italic text-sm text-gray-800">Одиннадцать
                        ликов Авалокитешвары олицетворяют его
                        всеведение и способность помогать живым существам:</p>
                    <ul class="list-none list-inside px-4 text-sm italic">
                        <li>3 нижних лица (гневные) — устраняют страх и
                            препятствия
                        </li>
                        <li>3 средних лица (спокойные) — выражают сострадание
                        </li>
                        <li>3 верхних лица (благожелательные) — символизируют
                            мудрость
                        </li>
                        <li>Лик Будды Амитабхи сверху — высшее просветление</li>
                    </ul>
                    <p class="my-2 italic text-sm text-gray-800">
                        Восемь рук воплощают разные аспекты помощи:
                    </p>
                    <ul class="list-none list-inside px-4 text-sm italic">
                        <li>Две центральные руки сложены в жесте почтения
                            (намаскара)
                        </li>
                        <li>Остальные держат священные атрибуты:</li>
                        <li>Четки — непрерывность практики</li>
                        <li>Лотос — чистота</li>
                        <li>Лук и стрела — намерение и мудрость</li>
                        <li>Ваджра — непоколебимая истина</li>
                        <li>Сосуд с амритой — бессмертие и исцеление</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/ten_Amitabha.jpg') }}"
                     alt="Десять Амитабх"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Десять Амитабх (тиб. snang mtha' bcu)</p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/nine_Amitabha.jpg') }}"
                     alt="Девять Амитабх"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Девять Амитабх (тиб. snang mtha' dgu)</p>
            </div>
        </div>

        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Amitayus.jpg') }}"
                     alt="Амитаюс - Будда Бесконечной Жизни"
                     class="rounded-full max-w-96 h-auto object-cover mx-auto
                     my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Амитаюс (тиб. tshe dpag med)<br>
                    Будда Бесконечной Жизни
                </p>
            </div>
        </div>
        <!-- Карточка с фото с расширенным описанием -->
        <div class="flex justify-center my-4">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Amitayus_Sita_Tara_Ushnishavijaya.jpg') }}"
                    alt="Сакральная триада долголетия: Амитаюс, Белая Тара и Ушнишавиджая"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4"><div class="p-2 text-justify">
                    <p class="my-2 italic text-center text-sm text-gray-800">
                        Буддийская триада долголетия:
                    <ul class="list-none list-inside px-4 text-sm italic">
                        <li><span class="font-semibold">Амитаюс</span> — Будда
                            Бесконечной Жизни, эманация Амитабхи
                        </li>
                        <li><span class="font-semibold">Белая Тара</span> —
                            Дарующая защиту и долголетие, "Семиглазая" форма
                        </li>
                        <li><span class="font-semibold">Ушнишавиджая</span> —
                            Победительница смерти, с тремя лицами и восемью
                            руками
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/nine_Amitayus_Tara_Ushnishavijaya.jpg') }}"
                    alt="Амитаюс, Ситатара и Ушнишавиджая"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Амитаюс, Ситатара и Ушнишавиджая
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Vajrabhairava_color.jpg') }}"
                     alt="Ваджрабхайрава"
                     class="rounded-full max-w-96 h-auto object-cover mx-auto
                     my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Ваджрабхайрава
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Vajrasattva.jpg') }}"
                     alt="Ваджрасаттва"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Ваджрасаттва
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Ganesha_Maharakta_Ganapati.jpg') }}"
                    alt="Ганеша Махаракта Ганaпaти"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Ганеша Махаракта Ганапати
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Guhyasadhana_Hayagriva.jpg') }}"
                    alt="Гухьясадхана Хаягрива - защита и победа над невежеством"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Гухьясадхана Хаягрива (тиб. guhya sadhana hayagriva)<br>
                    Защита и победа над невежеством
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Damdin_Yansan_Yab_Yum.jpg') }}"
                     alt="Дамдин Ясан Яб-Юм - символ единства мужского и женского начала"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Дамдин Ясан Яб-Юм<br>
                    (тиб. damdin yansan yab yum)<br>
                    золото на красном
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Damdin_Yansan_gold.jpg') }}"
                     alt="Дамдин Ясан (золотая версия) - символ единства мужского и женского начала"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Дамдин Ясан<br>
                    золото на красном с цветным лотосом
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Damdin_Yansan_red_blue.jpg') }}"
                    alt="Дамдин Ясан (красно-синяя версия) - символ единства мужского и женского начала"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Дамдин Ясан (красно-синяя версия)
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/monastic_dispute.jpg') }}"
                     alt="Монашеский диспут - изображение религиозного обсуждения"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Диспут
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Green_Tara_color.jpg') }}"
                     alt="Зеленая Тара - бодхисаттва сострадания и защиты"
                     class="rounded-full max-w-96 h-auto object-cover mx-auto
                     my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Зеленая Тара
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Green_Tara_stamp.jpg') }}"
                     alt="Зеленая Тара - штамп, бодхисаттва сострадания и защиты"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Зеленая Тара (штамп)
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Khadiravani_Tara.jpg') }}"
                     alt="Хадиравани Тара - богиня защиты и исцеления"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Хадиравани Тара<br>
                    Богиня защиты и исцеления
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Lama.jpg') }}"
                     alt="Лама - духовный учитель в буддизме"
                     class="rounded-full max-w-96 h-auto object-cover mx-auto
                     my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Лама
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Lhamo_gold.jpg') }}"
                     alt="Лхамо - богиня, олицетворяющая защиту и справедливость"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Лхамо<br>
                    Богиня, олицетворяющая защиту и справедливость
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Lhamo_color.jpg') }}"
                     alt="Лхамо - богиня, олицетворяющая защиту и справедливость"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Лхамо
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Milarepa.jpg') }}"
                     alt="Миларепа - великий тибетский йогин и поэт"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Миларепа<br>
                    Великий тибетский йогин и поэт
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Narohazhod.jpg') }}"
                     alt="Нарохажод - Хозяйка Тантры Чакрасамвары"
                     class="rounded-full max-w-96 h-auto object-cover mx-auto
                     my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Нарохажод -<br>Хозяйка Тантры Чакрасамвары
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Sitatapatra.jpg') }}"
                     alt="Ситатапатра - защитная дакини с белым зонтом"
                     class="rounded-full max-w-96 h-auto object-cover mx-auto
                     my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Ситатапатра (тиб. gdugs dkar)<br>
                    Защитная дакини с белым зонтом
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/Tsonkhapa_color.jpg') }}"
                     alt="Цонкапа - основатель школы Гелуг"
                     class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Цонкапа (1357–1419)<br>
                    Основатель школы Гелуг
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Caturbhuja_Ariya_Avalokiteshvara.jpg') }}"
                    alt="Чатурбхуджа Авалокитешвара - четырёхрукая форма бодхисаттвы сострадания"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Чатурбхуджа Авалокитешвара<br>
                    (тиб. spyan ras gzigs)<br>
                    Четырёхрукая форма бодхисаттвы сострадания
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Caturbhuja_Ariya_Avalokiteshvara_round.jpg') }}"
                    alt="Чатурбхуджа Авалокитешвара - четырёхрукая форма бодхисаттвы сострадания"
                    class="rounded-full max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Чатурбхуджа Авалокитешвара<br>
                    (тиб. spyan ras gzigs)<br>
                    Четырёхрукая форма бодхисаттвы сострадания
                </p>
            </div>
        </div>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Rje_btsun_Agvan_Tenpa_Gyaltsen.jpg') }}"
                    alt="9-й Кунделинг Ринпоче, Нгаванг Лобсанг Тенпаи Гьялцен"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    9-й Кунделинг Ринпоче, Нгаванг Лобсанг Тенпаи Гьялцен
                    (1811–1848)
                </p>
            </div>
        </div>
        <!-- Информационный абзац -->
        <p class="text-gray-800 text-justify px-6">
            Линия Кунделинг — одна из значимых линий перерождений в школе Гелуг
            тибетского буддизма, основанная Басо Чокьи Гьялценом (1402–1473),
            учеником Цонкапы. Первый Кунделинг Ринпоче считался эманацией
            Манджушри, а его последующие воплощения занимали высокие посты,
            включая регентов Тибета. 8-й Кунделинг, Гялцаб Еше Танпаи Гонпо
            (1760–1810), получил во владение монастырь Кунделинг, один из
            четырёх королевских храмов Лхасы, где продолжил традицию Гелуг. Его
            преемник, 9-й Кунделинг Ринпоче, Нгаванг Лобсанг Тенпаи Гьялцен
            (1811–1848), продолжил эту линию, сыграв важную роль в буддийском
            наследии Тибета.
        </p>
        <p class="text-gray-800 text-justify px-6">
            Надпись на рельефе "dpal ldan bla ma'i zhabs brtan", переводится
            как "Долгих лет жизни славному ламе".
        </p>
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img
                    src="{{ asset('clay_plastic/Cintamani_Sita_Mahakala_old.jpg') }}"
                    alt="Cintamani Sita Mahakala"
                    class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
                <p class="my-4 px-4 italic text-gray-800">
                    Чинтамани Сита Махакала<br>Белая форма Махакалы<br>эта
                    форма связана с мирными аспектами защиты и исполнения
                    желаний
                </p>
            </div>
        </div>
    </div>
    <!-- Карточка с фото -->
    <div class="flex justify-center my-6">
        <div class="rounded-lg shadow-md max-w-sm text-center">
            <img src="{{ asset('clay_plastic/Cintamani_Sita_Mahakala.jpg') }}"
                 alt="Cintamani Sita Mahakala"
                 class="rounded-lg max-w-96 h-auto object-cover mx-auto my-4">
            <p class="my-4 px-4 italic text-gray-800">
                Чинтамани Сита Махакала<br>Белая форма Махакалы
            </p>
        </div>
    </div>
    <!-- Карточка с фото -->
    <div class="flex justify-center my-6">
        <div class="rounded-lg shadow-md max-w-sm text-center">
            <img src="{{ asset('clay_plastic/Shabhuja_Jnana_Mahakala.jpg') }}"
                 alt="Shabhuja Jnana Mahakala"
                 class="rounded-full max-w-96 h-auto object-cover mx-auto my-4">
            <p class="my-4 px-4 italic text-gray-800">
                Шабхуджа Джняна Махакала<br>Четырёхрукий Махакала
            </p>
        </div>
    </div>
    <!-- Карточка с фото -->
    <div class="flex justify-center my-6">
        <div class="rounded-lg shadow-md max-w-sm text-center">
            <img src="{{ asset('clay_plastic/Shakiyamuni_two_siddhas_round.jpg') }}"
                 alt="Будда Шакьямуни и два сиддха"
                 class="rounded-full max-w-96 h-auto object-cover mx-auto my-4">
            <p class="my-4 px-4 italic text-gray-800">
                Будда Шакьямуни и два сиддха
            </p>
        </div>
    </div>
@endsection
