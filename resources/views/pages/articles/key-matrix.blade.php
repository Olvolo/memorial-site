@extends('layouts.wide-table')
@section('title', 'Ключ-Матрица к методу Нетройственного Ваджрасаттвы')
@push('styles')
    <style>
        {{--.custom-bg {--}}
        {{--    background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.95)),--}}
        {{--    url('{{ asset("backgrounds/bluerish.webp") }}');--}}
        {{--    background-attachment: fixed;--}}
        {{--    background-size: cover;--}}
        {{--    background-position: center;--}}
        {{--    background-repeat: repeat;--}}
        {{--}--}}
        {{--.container {--}}
        {{--    background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.85)),--}}
        {{--    url({{ asset('backgrounds/bluerish.webp') }});--}}
        {{--    background-attachment: fixed;--}}
        {{--    background-size: cover;--}}
        {{--    height: 100vh;--}}
        {{--    width: 100vw;--}}
        {{--}--}}
    </style>
@endpush
@section('table-content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Заголовок -->
        <h2 class="text-base sm:text-xl md:text-2xl font-bold text-center mt-6 mb-4 text-indigo-800">
            Ключ-Матрица к методу <br class="block sm:hidden">"Ваджрасаттва, или Безначальная<br class="block sm:hidden"> Ежемгновенная Катастрофа<br class="block sm:hidden"> Первоосознания Нетройственности"
        </h2>
        <h3 class="text-lg sm:text-xl text-center mb-8 font-medium text-indigo-800">
            (Из текста "Комментарий к Нетройственности – Сокровищнице
            неиссякаемого источника Знания")
        </h3>
        <div class="bg-blue-100 p-4 rounded-lg mb-6">
            <p class="text-justify font-semibold text-blue-900">
                Каждый блок текста содержит скрытую жизнь; её
                можно описать с помощью тринадцати понятий в виде таблицы.
                Нахождение этих "тринадцати" в каждом из пяти блоков помогает понять содержание <em>мгновения</em>.
            </p>
        </div>
        <!-- Контейнер для центрирования таблицы -->
        <div class="overflow-x-auto w-full px-2 sm:px-4 md:px-6">            <!-- Таблица -->
            <table class="key-matrix-table border-collapse border border-gray-400 my-6 w-full min-w-[800px]"><thead>
                <tr class="bg-amber-100">
                    <th class="border border-gray-400 p-2 text-center">
                        <img src="{{ asset('favicon/favicon-96x96.png') }}"
                             alt="Розетка"
                             class="inline-block h-10">
                    </th>
                    <th class="border border-gray-400 p-2 text-center">Безначальная</th>
                    <th class="border border-gray-400 p-2 text-center">Ежемгновенная</th>
                    <th class="border border-gray-400 p-2 text-center">Катастрофа</th>
                    <th class="border border-gray-400 p-2 text-center">Первоосознания</th>
                    <th class="border border-gray-400 p-2 text-center">Нетройственности</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Символ</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">точка</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">пятицветная розетка (внутренняя)</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">внешняя розетка</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">стоячая волна</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">человек...Отец и Мать вместе</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Пространство</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">несуществующее пространство</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">переход, граница терминатора, безмерное</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">многоискрение</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">измерение шойжунгов (дхармадая), вздыбившееся акаша</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">ослепительный пояс треугольного множества</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Время</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">всегда -> вдруг</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">мгновенно</td>
                    <td class="border border-gray-400 p-2 bg-pink-400">в
                        ожидании, переливаясь</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">настал, начало, момент, незатухающим</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">длящийся, неразрушимое</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Число</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">неизмеримое</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">единственное</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">многоцветье</td>
                    <td class="border border-gray-400 p-2 bg-blue-400">двух</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">мера, единый, отражённый во многих</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Вероятность</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">всегда, неизбежно</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">абсолютно вероятное</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">неизбежное</td>
                    <td class="border border-gray-400 p-2 bg-blue-400">бытие
                        может случиться...и неизбежно случается</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">неизбежной</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Энергия</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">цветом</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">бодхичитта</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">вырвавшаяся наружу энергия</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">солитон жизни, соединяться</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">охраняемый</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Процесс</th>
                    <td class="border border-gray-400 p-2 bg-green-400">тугой
                        волной</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">взрыв, сверкнувшее, разлёт, вспышка, пустое творчество</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">открылось видение, разомкнулись очи, видимое предстало</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">встреча двух, начало соединяться</td>
                    <td class="border border-gray-400 p-2 bg-yellow-300">чудо
                        осознанности</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Субъект</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">самоприрода дхармакаи (свабхавика-дхармакая)</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">джняна-дхармакая</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">самбхогакая</td>
                    <td class="border border-gray-400 p-2 bg-blue-400">тело
                        юного сосуда</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">существо, творец, нирманакая</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Имя</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">Гарбха всех Будд (Сарвабуддхагарбха)</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">Самантабхадра</td>
                    <td class="border border-gray-400 p-2 bg-pink-400">Тайный
                        Причинный Ваджрасаттва", "Адибудда</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">Бегущий по Волне, Напиток жизни, Дождь Проявленности</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">Ваджрасаттва</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Психологический приём</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">спонтанно</td>
                    <td class="border border-gray-400 p-2 bg-orange-400">не
                        сдерживай его – пусть проистекает само</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">напряжённая полнота чувств</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">открылось двойное зрение</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">тончайшим телом среди двух бездн, подобно парению</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Махабхута</th>
                    <td class="border border-gray-400 p-2
                    bg-green-400">двинулась (ветер)</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">огненный, огненно-раскаленный</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">прохладным огнем</td>
                    <td class="border border-gray-400 p-2 bg-blue-400">вода</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">земля</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Жертва</th>
                    <td class="border border-gray-400 p-2 bg-green-400">о,
                        волшебный мир</td>
                    <td class="border border-gray-400 p-2
                    bg-orange-400">таковая</td>
                    <td class="border border-gray-400 p-2
                    bg-pink-400">внешняя</td>
                    <td class="border border-gray-400 p-2
                    bg-blue-400">тайная</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">внутренняя</td>
                </tr>
                <tr>
                    <th class="border border-gray-400 p-2 text-center bg-amber-100">Мантра</th>
                    <td class="border border-gray-400 p-2 bg-green-400
                    text-center"><b>ХУМ</b></td>
                    <td class="border border-gray-400 p-2 bg-orange-400
                    text-center"><b>ААА</b></td>
                    <td class="border border-gray-400 p-2 bg-pink-400
                    text-center"><b>ОМ</b></td>
                    <td class="border border-gray-400 p-2 bg-blue-400">мантра
                        [Нетройственности]</td>
                    <td class="border border-gray-400 p-2
                    bg-yellow-300">стобуквие, город всех мантр</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center my-8 bg-blue-200 p-4 rounded-lg">
            <p class="font-semibold text-blue-950">
                Продумав так, переходи к неиссякаемому источнику Установки сознания, или к <em>Видению</em>.
            </p>
        </div>
    </div>
@endsection
