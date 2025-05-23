@extends('layouts.app')
@section('title', 'Тайна всегда одна')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url('{{ asset('backgrounds/watercolor.webp') }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto h-full">
        <div class="flex justify-center">
            <figure class="rounded-lg shadow-md max-w-[800px]
                      text-center mb-4">
                <img src="{{ asset('images/secret_the_same.png') }}"
                     alt="Тайна всегда одна"
                     class="rounded-lg w-full h-auto mx-auto object-contain transition-all duration-300 ease-in-out">
            </figure>
        </div>
        <!-- Заголовок -->
        <h1 class="text-3xl font-bold text-center mt-6 mb-6">ТАЙНА ВСЕГДА
            ОДНА</h1>
        <div class="text-justify indent-4 text-lg sm:text-xl leading-relaxed space-y-4 mx-auto">

            <blockquote class="border-l-4 border-gray-300 pl-4 my-4 text-gray-700">
                Некоторые говорят, что благодаря изначальной засекреченности учений, их
                таинства не раскрываются непонимающим людям, и ошибка разглашения
                отсутствует, если те не теряют веры. Они говорят, что это подобно
                разговорам с птицами и прочими животными. Так бредить могут только
                идиоты. Такие утверждения противоречат словам Будды. Эти учения
                необходимо скрывать даже от достойных учеников, если не настало
                подходящее время. Это схоже с утаением Сутры Пратимокши и ритуалов
                обетования от монахов-гецулов, которые хотят принять все обеты гелона. А
                от обычных людей эти учения должны скрываться еще больше, иначе исчезнет
                их благословение и эффективность со всеми вытекающими последствиями и
                наказаниями со стороны Защитников.
            </blockquote>
            <p class="italic text-right">Лончен Рабжам. Драгоценная Сокровищница
                Дхармадхату</p>
            <p class="italic text-right">Перевод О.Познякова</p>

            <p>
                Так семь веков назад говорил Великий Лонченпа. Но при этом добавил: "все
                зависит от коллективной кармы". И у него же есть блистательное: "В
                сердце солнца не задержится луч!"
            </p>
            <p class="text-center my-6">***</p>
            <p>
                Человек не изменился за прошедшие века, изменилось человечество и его
                коллективная карма.
            </p>
            <p>
                ХРИ ХА ХА, существует только одна Тайна – Тайна Бытия (Гухья), и есть Два
                Чуда: Чудо Выражения Тайны и Чудо Восприятия Тайны. Сама же Тайна всегда
                остается за пределами способности выражения и способности восприятия.
            </p>
            <p>
                Э МА ХО, Велико Чудо Выражения, ибо не всем дано это от природы. Но есть
                и другое Чудо, Чудо контроля над произнесенным: не все сказанное может
                быть воспринято, и это есть Чудо Восприятия. Оба эти Чуда согласованы в
                знаменитом принципе – когда готов Учитель, готов и ученик.
            </p>
            <p>
                Самый сокровенный смысл, высказанный тем, кто это
                может сделать, будет усвоен только тем, кто может это воспринять. Чудо
                восприятия сохранит Тайну-как-таковую от ума неподготовленных, хотя она
                и коснется их слуха. Другой не может скрыть Тайну, только ты сам
                скрываешь ее от себя.
            </p>
            <p>
                Истинная Тайна – Гухья – это само существование. У
                существования нет смысла, оно просто есть и все. И оно совершенно с
                самого начала. Гухья всегда за пределом выраженного в слове, и никогда
                не становясь доступной непонимающим, постоянно стимулирует движение к
                совершенству. Гухья будет всегда, это и есть главная интрига смысла
                существования – горизонт открыт всегда!
            </p>
            <p>
                Истинная Тайна – Гухья – это само существование. У
                существования нет смысла, оно просто есть и все. И оно совершенно с
                самого начала. Гухья всегда за пределом выраженного в слове, и никогда
                не становясь доступной непонимающим, постоянно стимулирует движение к
                совершенству. Гухья будет всегда, это и есть главная интрига смысла
                существования – горизонт открыт всегда!
            </p>
            <p>
                Хотя Тайна недоступна полному выражению, но зато
                можно просто быть ею и осознавать это. Такая возможность в акашаваде
                объясняется тождеством ума и акаши; в Нетройственности – принципом
                правидьи; в теории Татхагатагарбхи тем, что жизнь – это абсолютная
                сущность Бытия, нет Бытия без жизни. Понимать и переживать полноту
                совершенного бытия – нашего естественного состояния – пребывать в
                естестве, то есть так, как есть – вот Мудрость.
            </p>
            <p class="text-center my-6">***</p>
            <p>
                А теперь, братия, оглянувшись, придите в обыденность
                чувств и поймите, что Тайна бытия все равно осталась Тайной, а жизнь –
                благом. Все зеркала, ваджры, все Идамы, мандалы, ритуалы и мантры – это
                не объяснения Тайны, но сама Тайна, сама Жизнь. Нам так жить и думать.
                Это наш выбор, так по уму и по сердцу нашему. Сохраним Свет и цвет наш,
                и в этом – наша Тайна. Будем прозрачными для лучей бодхи, и не только
                для узкого круга посвященных, но для всех живых – бодхисаттв сансарных.
                А ХО МАХА СВАХА.
            </p>
            <p class=" text-right my-6 italic">МВМ, 2002</p>
        </div>
    </div>
@endsection
