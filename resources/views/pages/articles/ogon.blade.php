@extends('layouts.app')

@section('title', 'ОГОНЬ')

@section('content')
    <div class="container mx-auto p-4 h-full">
        <img src="{{ asset('images/Fire.jpg') }}" alt="Дом"
             class="article-image my-4 rounded-lg shadow-md w-full
             max-w-[512px] max-h-[768px] object-cover mx-auto">
        <!-- Заголовок -->
        <h1 class="text-center text-red-600 font-bold text-2xl sm:text-3xl
        md:text-4xl mt-6 mb-6">
            ОГОНЬ
        </h1>

        <!-- Эпиграф -->
        <div class="text-right mb-6">
            <p class="italic text-base sm:text-lg">
                Кто там мчится, хвост трубой,<br>
                Бьет копытами?<br>
                Конь Крылатый, Золотой, Бодхичиттовый.<br>
                <span class="text-sm">В. Ковалев</span>
            </p>
        </div>

        <!-- Основной текст -->
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <p>
                Держать меру, не переходить черты, идти по лезвию бритвы, балансировать на острие ножа, быть на грани — вот богатство описания на русском языке удержания баланса разнонаправленных сил — этого поистине труднодостижимого искусства бодхисаттв.
            </p>
            <p>
                Другое название подобного удержания, взятое из области математики, — "катастрофа", как свидетельство пространственного скачка, коим может быть и амбразура дверного проема, и горловина бутылки, и смена настроения.
            </p>
            <p>
                И, наконец, все перечисленное есть характеристики махабхуты огонь.
            </p>
            <p>
                В ком этого пламенеющего элемента больше, рано или поздно обнаружит в себе лик Амитабхи, мудрость которого аналитическая — Познающая по отдельности, есть свидетельство очевидного свойства любой информации: она корпускулярна, порционна, знакова, иначе — огненна, скачкообразна. Меж знаками — бездна, шуньята. Информации нет в одном знаке, как и времени в одном моменте. Только цепь знаков есть информация, как и длительность мыслима лишь как цепь моментов.
            </p>
            <p>
                Трудно держать грань, трудно владеть огнем — этой силой бодхичиттовой. Но История ставит задачу, и каждый решает ее по-своему или не решает, или вовсе не видит ее. Как совместить индивидуальное и общественное, личную свободу и державную необходимость? Чуткие люди по всей России мучительно переживают творчество переплавления в огне бодхичитты двух начал — индивидуального (земля) и общественного, государственного (жесткая вода). Сумевший соединить их поистине становится гражданином — сопричастником бодхичитты (гражданское чувство как аспект бодхичитты). И тогда только подносят такому Хранители места, Охранители Страны полную чашу — габалу — воду в земле. С силой сжав ее в руке, превращает он такую чашу в стакан граненый, ибо нет радуги — дочери огня в стакане без граней.
            </p>
            <div class="text-center italic my-4">
                <p>
                    Кругла вода,<br>
                    Гранен стакан,<br>
                    Кристалл и круг<br>
                    Всё сходятся.
                </p>
            </div>
            <p>
                «Мчится Золотой Конь Бодхичитты по сверкающей грани Бытия, наслаждаясь спонтанным и непредсказуемым дыханием шуньяты, утоляя неутолимый голод гнева неведения».<br>
                <span class="text-sm">В.М.</span>
            </p>
        </div>
    </div>
@endsection
<style>
    .container {
        background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
        url('{{ asset('images/ice.jpg') }}');
        background-attachment: fixed;
        background-size: cover;
    }
</style>
