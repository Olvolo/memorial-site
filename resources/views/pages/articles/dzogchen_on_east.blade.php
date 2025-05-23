@extends('layouts.app')
@section('title', 'Дзогчен на Востоке Европы')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url('{{ asset("backgrounds/blue_ice.svg") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-2xl
        md:text-2xl mt-6 mb-6">Дзогчен на Востоке Европы</h1>
        <div
            class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <p>История дзогчена в России и странах Балтии неотделима от истории
                буддизма. Проповедь Дхармы осуществлена здесь в ее
                религиозно-философском и тантрийско-практическом виде Бидией
                Д.Дандароном. Первые общины дандароновцев, как иногда их
                называют, возникли в Ленинграде, Вильнюсе, Каунасе, Тарту и
                Москве в 1969-70 годах. Именно в этих общинах зародился интерес
                к дзогчену. Это было запрограммировано проповедью Учителя -
                переводом итоговой работы Нацог-Рандола (Лонченпы) "Карнатантра,
                опора великого Учения, называемая «Зерцало механизма глубокого
                содержания» - важнейший труд дзогчена и ньингмапинской традиции.
            </p>
            <p>
                Когда в 1985 г. к последователям Дандарона стали попадать книги
                Чогьяла Намхая Норбу Ринпоче, многие поразились сходству их
                стиля со стилем проповеди Учителя. Прошло пять лет, и в пяти
                городах западной части Союза действуют дзогчен-центры.
            </p>
            <p>
                В июне 1990 года В. Монтлевич обратился к Чогьялу Намхаю Норбу
                Ринпоче за советом, как назвать уже существующие места
                распространения дзогчена. В сентябре пришел ответ. Ринпоче
                рекомендует пять названий с пожеланием первое дать старейшей по
                времени образования общине и соответственно пятое название -
                самой молодой общине. Приводим эти названия в факсимильном виде.
            </p>
            <p>
                Тибетское слово "gling" означает - "страна, область, земля".
            </p>
            <div class="flex justify-center my-4">
                <figure class="rounded-lg shadow-md max-w-[420px] text-center">
                    <img src="{{ asset('images/faksimile.png') }}"
                         alt="Название дзогчен-центров в факсимильном виде"
                         class="rounded-lg w-full h-auto mx-auto">
                    <figcaption
                        class="my-4 px-4 italic text-gray-600 text-lg">
                        Название дзогчен-центров
                    </figcaption>
                </figure>
            </div>
            <p>
                В результате консультаций, состоявшихся в начале сентября 1990
                г. между Ленинградом, Ригой, Вильнюсом, Москвой и Харьковом,
                принято решение именовать области распространения дзогчена на
                западе бывшего Союза следующим образом:
            </p>

            <p>
                "Санжейлинг" - санкт-петербургская сфера дзогчена ("Санжей",
                тиб. - означает Будда).
            </p>
            <p>
                "Доржелинг" - Вильнюс и Литва ("Дорже", тибетское слово для
                санскритского "ваджра" - неразрушимый, алмазный).
            </p>
            <p>
            </p>
            <p>
                "Ринченлинг" - московская сфера дзогчена ("Ринчен", тиб. - драгоценность).
            </p>
            <p>
                "Падмалинг" - Рига и Латвия ("Падма", санскр. - лотос).
            </p>
            <p>
                "Кармалинг" - Харьков.
            </p>
            <p class="text-right italic text-gray-600 mt-4">
                В.М.
            </p>
            <p class="text-right italic text-gray-600 mt-4">
                Журнал Гаруда", №1, 1992г.
            </p>
        </div>
    </div>
@endsection
