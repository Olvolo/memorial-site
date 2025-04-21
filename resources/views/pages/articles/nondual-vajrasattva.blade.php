@extends('layouts.app')
@section('title', 'Нетройственный Ваджрасаттва')
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
    <div class="container mx-auto py-8 min-h-screen">
        <!-- Изображение -->
        <div class="flex justify-center mb-8">
            <figure class="rounded-lg shadow-md max-w-[600px] text-center mb-6">
                <img src="{{ asset('images/vajrasattva_netroystveniy.png') }}"
                     alt="Нетройственный Ваджрасаттва"
                     class="rounded-lg w-full h-auto mx-auto">
            </figure>
        </div>
        <div class="text-center mt-6 mb-10">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Ваджрасаттва,</h1>
            <p class="text-xl sm:text-2xl text-blue-700 font-semibold mt-2">или</p>
            <p class="text-xl sm:text-2xl text-red-600 font-semibold mt-2 mb-6 max-w-3xl mx-auto">
                Безначальная Ежемгновенная Катастрофа Первоосознания Нетройственности
            </p>
            <p class="text-lg font-bold mt-4 text-gray-700">Поклоняюсь Учителю!</p>
        </div>


        <div class="poem mx-auto text-gray-700 px-4 text-center">
            <!-- Общий контейнер для всех строф -->
            <div class="inline-block text-left max-w-2xl sm:max-w-3xl md:max-w-4xl">
            <!-- Первая строфа -->
                <div class="stanza mb-6">
                    <span class="poem-line">О, Волшебный Мир!</span>
                    <span class="poem-line">Всегда скрытый в непостижимом Пространстве –</span>
                    <span class="poem-line">Точка ли это или вся Вселенная.</span>
                    <span class="poem-line">Несуществующее Пространство,</span>
                    <span class="poem-line">Лишенное бытия, пустое и неизмеримое,</span>
                    <span class="poem-line">Спонтанно напряглось Цветом</span>
                    <span class="poem-line">И вдруг взыграло тугой Волной.</span>
                    <span class="poem-line">Предсубъективное – гарбха всех Будд,</span>
                    <span class="poem-line">Самоприрода Дхармакаи</span>
                    <span class="poem-line">Неизбежно Двинулась, наполнившись</span>
                    <span class="poem-line">Гулом иссине-черного ХУМ!</span>
                </div>

                <div class="text-center">
                    <p class="text-lg sm:text-xl my-2">* * *</p>
                </div>
            <!-- Вторая строфа -->
                <div class="stanza mb-6">
                    <span class="poem-line">Мгновенно родилось безмерное Пространство,</span>
                    <span class="poem-line">Как переход из небытия к Предъяви,</span>
                    <span class="poem-line">Абсолютно вероятное и единственное,</span>
                    <span class="poem-line">Подобно восхитительному Взрыву</span>
                    <span class="poem-line">Чистейшей Бодхичитты,</span>
                    <span class="poem-line">Скрытая Волна Джняна-Дхармакаи,</span>
                    <span class="poem-line">Истинное безличное Сострадание,</span>
                    <span class="poem-line">Сверкнувшее осознанием Самантабхадры.</span>
                    <span class="poem-line">Не сдерживай его – пусть проистекает само,</span>
                    <span class="poem-line">Лишь наблюдай без усилий</span>
                    <span class="poem-line">Огненный разлет</span>
                    <span class="poem-line">Пятицветной Розетки</span>
                    <span class="poem-line">В глубине несуществования.</span>
                    <span class="poem-line">Это происходит мгновенно</span>
                    <span class="poem-line">И похоже на вспышку солнечного луча</span>
                    <span class="poem-line">На границе терминатора.</span>
                    <span class="poem-line">Таковая жертва как</span>
                    <span class="poem-line">Пустое творчество, познающее Дхармакаю,</span>
                    <span class="poem-line">Порождает созидательный рокот</span>
                    <span class="poem-line">Огненно-раскаленного звука ААА!</span>
                </div>

                <div class="text-center">
                    <p class="text-lg sm:text-xl my-2">* * *</p>
                </div>
            <!-- Третья строфа -->
                <div class="stanza mb-6">
                    <span class="poem-line">Разомкнулись очи Адибудды,</span>
                    <span class="poem-line">Открылось видение,</span>
                    <span class="poem-line">И видимое предстало</span>
                    <span class="poem-line">Как Радужный Свет Луны –</span>
                    <span class="poem-line">Сверкающее многоцветье</span>
                    <span class="poem-line">Внешней Розетки, наполнившее Мир</span>
                    <span class="poem-line">Многоискрением дхарм.</span>
                    <span class="poem-line">Это – неизбежное Проявление,</span>
                    <span class="poem-line">Вырвавшаяся наружу энергия,</span>
                    <span class="poem-line">Жертва внешняя и прекрасная,</span>
                    <span class="poem-line">Тайный Причинный Ваджрасаттва,</span>
                    <span class="poem-line">Напряженная полнота чувств</span>
                    <span class="poem-line">Еще Нерожденного.</span>
                    <span class="poem-line">Волшебство Проявленного Творчества,</span>
                    <span class="poem-line">Узнающее Самбхогакаю</span>
                    <span class="poem-line">В ожидании близкой Нирманы,</span>
                    <span class="poem-line">Переливаясь живительным</span>
                    <span class="poem-line">Прохладным Огнем,</span>
                    <span class="poem-line">Сгущается в трубное многозвучие протяжного ОМ!</span>
                </div>

                <div class="text-center">
                    <p class="text-lg sm:text-xl my-2">* * *</p>
                </div>
            <!-- Четвертая строфа -->
                <div class="stanza mb-6">
                    <span class="poem-line">Настал блаженственный</span>
                    <span class="poem-line">Момент Тайной жертвы,</span>
                    <span class="poem-line">Встречи двух на гребне</span>
                    <span class="poem-line">Стоячей Волны вздыбившейся Акаши.</span>
                    <span class="poem-line">Бытие может случиться</span>
                    <span class="poem-line">Бегущим по Волне,</span>
                    <span class="poem-line">И неизбежно случается</span>
                    <span class="poem-line">Незатухающим солитоном жизни.</span>
                    <span class="poem-line">Открылось двойное зрение,</span>
                    <span class="poem-line">Появился ослепительный пояс</span>
                    <span class="poem-line">Измерения шойжунгов –</span>
                    <span class="poem-line">Тело Юного Сосуда,</span>
                    <span class="poem-line">Пустое и незапятнанно чистое.</span>
                    <span class="poem-line">Бессвязное начало соединяться,</span>
                    <span class="poem-line">Живая Вода пролилась</span>
                    <span class="poem-line">Совершенным дождем Проявленности,</span>
                    <span class="poem-line">Обретающим вкус бессмертного</span>
                    <span class="poem-line">Напитка жизни,</span>
                    <span class="poem-line">Зазвучали мантра и имя.</span>
                </div>

                <div class="text-center">
                    <p class="text-lg sm:text-xl my-2">* * *</p>
                </div>
                <!-- Пятая строфа -->
                <div class="stanza mb-6">
                    <span class="poem-line">Возрадуйся мир –</span>
                    <span class="poem-line">Существо появилось аки венец Мира –</span>
                    <span class="poem-line">Человек значит –</span>
                    <span class="poem-line">Отец и Мать вместе,</span>
                    <span class="poem-line">По имени Ваджрасаттва –</span>
                    <span class="poem-line">Неразрушимое Чудо Осознанности,</span>
                    <span class="poem-line">Из ослепительного пояса</span>
                    <span class="poem-line">Треугольного множества,</span>
                    <span class="poem-line">Как мера существ, как Единый,</span>
                    <span class="poem-line">Отраженный во многих,</span>
                    <span class="poem-line">Творец безошибочно неизбежной</span>
                    <span class="poem-line">Внутренней жертвы,</span>
                    <span class="poem-line">Охраняемый и длящийся силой Земли,</span>
                    <span class="poem-line">Тончайшим Телом среди</span>
                    <span class="poem-line">Двух бездн, подобно парению Гаруды,</span>
                    <span class="poem-line">Ослепительный Нирманакая,</span>
                    <span class="poem-line">Полный звуками Стобуквия, города всех мантр.</span>
                </div>
                <p class="text-center text-lg sm:text-xl my-2">* * *</p>

                <p class="text-right text-gray-600 italic mt-8">ВМ, 4.11.1994</p>
            </div>
        </div>
@endsection
