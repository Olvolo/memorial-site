@extends('layouts.app')

@section('title', 'Буддийская глиняная пластика')

@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Карточка с фото -->
        <div class="flex justify-center my-6">
            <div class="rounded-lg shadow-md max-w-sm text-center">
                <img src="{{ asset('clay_plastic/suburgan.jpg') }}"
                     alt="Субурган с мантрой Шакьямуни 'ОМ МУНИ МУНИ
                     МАХАМУНИ ЙЕ
                     СВАХА'. &#8960 42mm"
                     class="rounded-full w-full max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                <p class="mt-4 mb-4 px-4 italic text-gray-800">
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
                    Именно буддийским искусством, а не бурятским, монгольским или тибетским стоит называть искусство глиняной пластики названных стран. Ибо едины образы и един стиль этого искусства миниатюрного глиняного рельефа. Разве глина с берегов Селенги, Керулена или Цанга делает предмет соответственно бурятским, монгольским или тибетским? Металлические штампы, которыми выдавливались в глине рельефы на всей этой центральноазиатской территории, имеют практически один источник — искусство Индии.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Akshobhya.jpg') }}"
                         alt="Акшобхья"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-6 my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Акшобхья <br>32 * 40 мм</p>
                </div>
            </div>
                <p>
                    Если в живописи местные традиции рано или поздно проявлялись столь ярко, что можно было со временем говорить о лавранской школе, о стиле китайского лубка, о монгольской школе или о старобурятской живописи, то в глиняной пластике форма и стиль почти застыли. Для нас это счастливое обстоятельство, ибо благодаря стойкости канона, тем более религиозного, в образцах глиняной бурятской пластики мы можем проследить образный ряд, восходящий к индийскому искусству I тысячелетия нашей эры. И если в Индии Буддизм пришел в упадок в XII веке, а затем почти исчез, то в Тибете, Монголии и Бурятии он и сопутствующее ему искусство сохранились во всем богатстве канона и художественных приемов до наших дней.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Tsonkhapa.jpg') }}"
                         alt="Цзонхава"
                         class="rounded-lg max-w-[300px] h-auto object-cover mx-6 my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Цзонхава <br>38 * 52 мм</p>
                </div>
            </div>
                <p>
                    Глиняная пластика оказалась устойчивой к стилистическим изменениям еще и потому, что она, столь хрупкая и неброская, никогда не была главным элементом в художественном творчестве народов, исповедующих буддизм, естественно уступая места архитектуре, бронзовой скульптуре и живописи. Глиняные рельефы делались в большом количестве и, будучи недорогими, были доступны любому верующему, заполняя домашние алтари. Неисчислимое количество их использовалось при закладке храмов и субурганов.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Shakyamuni.jpg') }}"
                         alt="Будда Шакьямуни"
                         class="rounded-lg max-w-[300px] h-auto object-cover mx-6 my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Будда Шакьямуни <br>22 * 29 мм</p>
                </div>
            </div>
                <p>
                    Удивительно, что до сих пор сохранившиеся в Бурятии в большом количестве и в необозримом разнообразии глиняные рельефы не привлекали внимание исследователей; достаточно пролистать альбомы по искусству Бурятии или Монголии и можно легко убедиться, что за редким исключением о них там нет и речи.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Hutuhta.jpg') }}"
                         alt="Лама (Ургинский хутухта?)"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Лама (Ургинский хутухта?), Монголия <br>31 * 49 мм</p>
                </div>
            </div>
                <p>
                    Нам кажется, что устойчивость сюжета и стилей глиняных рельефов является чрезвычайным обстоятельством, чтобы они стали предметом изучения, тем более, что они очень хрупки. Металлические штампы, с помощью которых изготавливаются рельефы, живут долго, с них легко делаются металлические копии, и посему можно утверждать, что, изучая буддийскую глиняную пластику, мы как бы имеем дело с точным отблеском древнего искусства Индии и Непала, соприкасаясь с сюжетами и образами, давно исчезнувшими на их прародине. Достаточно рассмотреть миниатюрные скульптуры Тары, Будды, Махакалы, чтобы почувствовать — перед нами живое дыхание буддийской Индии.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Amitabha.jpg') }}"
                         alt="Амитабха"
                         class="rounded-lg max-w-[300px] h-auto object-cover mx-6 my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Амитабха<br>33 * 44 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Zhebzun.jpg') }}"
                         alt="Жебзун-дамба хутухта (XVIII век), Монголия"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Жебзун-дамба хутухта (XVIII век), Монголия<br>47 * 60
                        мм</p>
                </div>
            </div>
                <p>
                    Было бы заманчиво обнаружить в пластике сюжеты, исчезнувшие в живописи или никогда в ней не имевшие воплощения.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Tsonkhapa_composition.jpg') }}"
                         alt="Цзонхава (композиция из 10 фигур)"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Цзонхава (композиция из 10 фигур)<br>48 * 67 мм</p>
                </div>
            </div>
                <p>
                    Начиная с этого номера мы будем знакомить читателя с образцами буддийской пластики, надеясь, что интерес к сохранению образцов этого искусства проявится у тех, кто имеет к ним доступ, и, более того, начнется возрождение этого вида искусства.
                </p>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Vajrabhairava.jpg') }}"
                         alt="Ваджрабхайрава"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Ваджрабхайрава (тиб. rDo-rje 'jigs byed<br>68 * 91
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Samaja.jpg') }}"
                         alt="Гухьясамаджа"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Гухьясамаджа (тиб. dPal gsang ba 'dus pa)<br>77 * 81
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Samvara.jpg') }}"
                         alt="Чакрасамвара"
                         class="rounded-full w-full max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Чакрасамвара (тиб. dPal 'khor lo sdom pa)<br>&#8960
                        37 мм
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Damdin_Yansan.jpg') }}"
                         alt="Дамдин-янсан"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Дамдин-янсан (тиб. rTa mgrin yang gsang)<br>54 * 67
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Talisman_against_angry_revers.jpg') }}"
                         alt="Реверс: змея (символ гнева), пронзённая пурбой"
                         class="rounded-full  max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <img src="{{ asset('clay_plastic/Talisman_against_angry_avers.jpg') }}"
                         alt="аверс: слог ХУМ в центре ваджра"
                         class="rounded-full max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
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
                         class="rounded-lg max-w-[300px] h-auto object-cover mx-6 my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Ваджрапани<br>39 * 50 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Ushnishvijaya.jpg') }}"
                         alt="Ушнишавиджая"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Ушнишавиджая (тиб. gTsug tor rnam par rgyal)<br>35 * 43
                        мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Green_Tara.jpg') }}"
                         alt="Зелёная Тара"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-6 my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Зелёная Тара, Монголия<br>63 * 91 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Outer_Yama.jpg') }}"
                         alt="Внешний Яма, без юм"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Внешний Яма, без юм (тиб. Chos rgyal phyi sgrub,
                        Шойжал шидуб)<br>35 * 49 мм</p>
                </div>
            </div>
            <!-- Карточка с фото -->
            <div class="flex justify-center my-6">
                <div class="rounded-lg shadow-md max-w-sm text-center">
                    <img src="{{ asset('clay_plastic/Vaishravana.jpg') }}"
                         alt="Вайшравана"
                         class="rounded-lg max-w-[300px] h-auto object-cover
                         mx-auto my-4">
                    <p class="mt-4 mb-4 px-4 italic text-gray-800">
                        Вайшравана (тиб. rNam sras gser chen, Намсарай),
                        Монголия<br>36 * 45 мм</p>
                </div>
            </div>
            <p class="text-right italic mt-4">Журнал "Гаруда" №1 (IX)
                1996г.</p>

            <p class="text-right italic font-bold">В.М.</p>
            </div>
    </div>

@endsection
