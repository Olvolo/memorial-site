@extends('layouts.app')

@section('title', 'Об Антанасе')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/gradient_blue.jpg") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <figure class="rounded-lg shadow-md max-w-[400px]
                      text-center mb-4">
                <img src="{{ asset('images/Antanas.jpg') }}"
                     alt="Антанас Данелюс"
                     class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out"
                     style="max-width: 400px;">
            </figure>
        </div><!-- Заголовок -->
        <div class="text-justify italic text-base sm:text-lg leading-relaxed space-y-4">
            <p class="my-4">
                Вечером 2-ого февраля этого года я, наверное, был бы с Антанасом и нашими общими
                друзьями. Мы пили бы вино в честь его 70-летия и говорили о его недавно
                опубликованном переводе драмы В. Шекспира «Ромео и Джульетта». Также об эпической
                поэме Джона Милтона «Утерянный рай», сейчас лежащей на рабочем столе Антанаса.
                Возможно, мы обсуждали бы важность отдельного слова в поэзии, о чрезвычайном
                значении в ней концентрированности мыслей, чувств и, значит, языка. Рассуждали бы о
                том, как может пострадать смысл оригинала или как он может быть исковеркан, стать
                неясным или, вообще, исчезнуть, если не найти правильного эквивалента. А если
                спросить Антанаса о том, почему он взялся за перевод «Утерянного рая», он, наверное,
                ответил бы, что ему самому важен вопрос - как могло первое неповиновение человека и
                вкус запрещенного райского плода принести в мир все наши страдания...
            </p>
            <p class="my-4">
                Конечно, мы говорили бы об истине страдания. О том, что человек как субъект не сам
                действует в этом мире, а что-то неизбежно происходит с ним. И это подтверждают
                новейшие исследования в области психологии: даже в то время, когда индивид своим
                поведением старается осуществить то, что задумал, неизбежно создаются непредвиденные
                обстоятельства, которые он должен учитывать, и под влиянием которых возникают разные
                переживания...
            </p>
            <p class="my-4">
                Также говорили бы о повседневных заботах. Антанас, неверное, цитировал бы Ч.С.
                Левиса, что ныне человек использует только две области своих способностей – голову и
                желудок. Самая простое желание – набить желудок. Сердце – центр человеческого
                существования многие забывают. А когда оно пробуждается, эти две области, как будто
                конкурирующие с сердцем, - рациональная и чувственная – ослабевают, перестают
                владеть человеком. Путь сердца – кратчайший путь к реальности, а все другие –
                окольные. Когда сердце пробуждается, человек обретает силу познания –
                интуицию...<br>Антанас говорил бы как живая Сутра...
            </p>
        </div>
        <!-- Стихотворная часть -->
        <div class="poem mx-auto text-gray-700 px-4 text-center mt-10 mb-10">
            <div class="inline-block font-normal text-left max-w-2xl sm:max-w-3xl md:max-w-4xl">
                <div class="stanza mb-6">
                    <span class="line font-semibold block text-lg">Гандавьюха-сутра</span>
                </div>

                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Нельзя достичь Освобождения,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">лишь слушая Учение совершенного Будды.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как слабый человек, переправляемый через широкую реку,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">может умереть от жажды,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как личность, раздавшая пищу и питье многим людям,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">умирает от голода,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как врач, у которого есть много разных лекарств,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">умирает, тяжело заболев,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line text-sm sm:text-base md:text-lg">Как страж драгоценностей, считающий жемчужины,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">не имеет их,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как слуга, родившийся в царском дворце,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">не имеет достаточно пищи и питья,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как слепого художника</span>
                    <span class="line block text-sm sm:text-base md:text-lg">не заставишь сделать картину торговой площади,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как лодочник, переправляющий людей через большое озеро,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">сам погибает в нем,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Как кто-то, стоящий на перекрестке и хвалящий благополучие других,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">сам не достигает ничего,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">так и Дхарма не дает плодов, если ее не практикуем.<a href="#citation-1" id="ref-1" class="citation-mark"><sup>1</sup></a></span>
                </div>
            </div>
        </div>

        <p class="italic mt-8 mb-6">
            И наконец хотелось бы вспомнить слова Сигитаса Геды, сказанные Антанасу:
        </p>

        <div class="poem mx-auto text-gray-700 px-4 text-center font-normal">
            <div class="inline-block text-left max-w-2xl sm:max-w-3xl md:max-w-4xl">
                <div class="stanza mb-6">
                    <span class="line block text-sm sm:text-base md:text-lg">Когда так много говорил ты</span>
                    <span class="line block text-sm sm:text-base md:text-lg">о буддийской пустоте,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">всегда синица пролетала</span>
                    <span class="line block text-sm sm:text-base md:text-lg">над головами нашими,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">в зеленой зелени,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">как будто бы хотела сказать нам что-то,</span>
                    <span class="line block text-sm sm:text-base md:text-lg">а, может быть, — всем людям, всему миру.<a href="#citation-2" id="ref-2" class="citation-mark"><sup>2</sup></a></span>
                </div>
            </div>
        </div>

        <!-- Примечания -->

        <div class="mt-12 text-sm text-gray-600">
            <p id="citation-1"><sup>1</sup> Перевел Петрас Арлаускас из Такпо Таши Намгьял «Махамудра», Дели, 1983.<a href="#ref-1" class="text-blue-500 hover:underline">↩</a></p>
            <!-- Добавь аналогичные ссылки для других сносок, если они есть -->
            <p id="citation-2"><sup>2</sup> Отрывок из «Стихотворения с синицей по ту сторону реки
                Нерис», <em>Шяурес Атенай, 10-10-2008.</em><a href="#ref-2" class="text-blue-500
    hover:underline">↩</a></p>
        </div>
    </div>

@endsection
