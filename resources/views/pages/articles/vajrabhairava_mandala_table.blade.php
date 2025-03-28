@extends('layouts.wide-table')

@section('title', 'Тринадцать Божеств Шри Ваджрабхайравы')

@section('content')

        <h1 class="text-2xl font-bold text-center mt-8 mb-8">Тринадцать Божеств
            Шри Ваджрабхайравы</h1>

        <!-- Адаптивный контейнер для таблицы -->
        <div class="table-container w-full overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 text-center text-sm min-w-[1200px]">

            <thead>
                <tr>
                    <th class="cell-heading" rowspan="2">Имя</th>
                    <th class="cell-heading" colspan="2">Положение</th>
                    <th class="cell-heading" rowspan="2">Слог</th>
                    <th class="cell-heading" colspan="2">Атрибуты</th>
                    <th class="cell-heading" colspan="3">Цвет головы</th>
                    <th class="cell-heading" rowspan="2">Род</th>
                    <th class="cell-heading" rowspan="2">Даруемое</th>
                    <th class="cell-heading" rowspan="2" colspan="2">
                        Очищаемое (подавляемый мара)</th>
                </tr>
                <tr>
                    <th class="cell-heading">трон</th>
                    <th class="cell-heading">поле</th>
                    <th class="cell-heading">справа</th>
                    <th class="cell-heading">слева</th>
                    <th class="cell-heading">справа</th>
                    <th class="cell-heading">в центре</th>
                    <th class="cell-heading">слева</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td class="cell-group" colspan="10">
                        Следующие четверо стоят во внутренней чакре по основным направлениям</td>
                    <td class="cell-heading">Мудрость</td>
                    <td class="cell-heading">скандха</td>
                    <td class="cell-heading">клеша</td>
                </tr>
                <tr>
                    <td class="cell-heading">Невежественный</td>
                    <td class="cell bg-white-100">Луна</td>
                    <td class="cell bg-white-100">восток</td>
                    <td class="cell bg-white-100">КШЕ</td>
                    <td class="cell bg-white-100">чакра меч</td>
                    <td class="cell bg-white-100">ратна лотос</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white-100">Вайрочана</td>
                    <td class="cell bg-white-100">Зерцалоподобная</td>
                    <td class="cell bg-white-100">рупа</td>
                    <td class="cell bg-white-100">неведение</td>
                </tr>
                <tr>
                    <td class="cell-heading">Жадный</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-yellowish">юг</td>
                    <td class="cell bg-yellowish">МА</td>
                    <td class="cell bg-yellowish">ратна меч</td>
                    <td class="cell bg-yellowish">чакра лотос</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-yellow_bright">жёлтый</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-yellowish">Ратнасамбхава</td>
                    <td class="cell bg-yellowish">Равного содержания</td>
                    <td class="cell bg-yellowish">ведана</td>
                    <td class="cell bg-yellowish">гордость</td>
                </tr>

                <tr>
                    <td class="cell-heading">Страстный</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-coral">запад</td>
                    <td class="cell bg-coral">МЕ</td>
                    <td class="cell bg-coral">лотос меч</td>
                    <td class="cell bg-coral">ратна чакра</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-coral">Амитабха</td>
                    <td class="cell bg-coral">Аналитическая</td>
                    <td class="cell bg-coral">санджня</td>
                    <td class="cell bg-coral">страсть</td>
                </tr>
                <tr>
                    <td class="cell-heading">Завистливый</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-green_neon">север</td>
                    <td class="cell bg-green_neon">ДА</td>
                    <td class="cell bg-green_neon">меч чакра</td>
                    <td class="cell bg-green_neon">ратна лотос</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-green-600 text-white">зеленый</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-green_neon">Амогхасиддхи</td>
                    <td class="cell bg-green_neon">Исправляющая карму</td>
                    <td class="cell bg-green_neon">самскара</td>
                    <td class="cell bg-green_neon">зависть</td>
                </tr>
                <tr>
                    <td class="cell-heading" rowspan="3">Шри Ваджрaбхайрава (Яб)</td>
                    <td class="cell bg-red-500 text-white" rowspan="3">Солнце</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3">центр</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3">ХУМ</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3" colspan="2">34 руки</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-yellow_bright">жёлтый</td>
                    <td class="cell bg-gray-800 text-white">чёрный</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3">Акшобхья</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3">Дхармового пространства</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3">виджняна</td>
                    <td class="cell bg-blue_semi text-white" rowspan="3">гнев</td>
                </tr>
                <tr>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white">белый</td>
                </tr>
                <tr>
                    <td class="cell bg-yellow_bright">жёлтый</td>
                    <td class="cell bg-indigo-900 text-white">иссиня-чёрный</td>
                    <td class="cell bg-gray-500 text-white">дымчатый</td>
                </tr>

                <tr>
                    <td class="cell-group" colspan="10">
                        Следующие четверо стоят в дверных проемах по основным направлениям</td>
                    <td class="cell-heading">Сила</td>
                    <td class="cell-heading" colspan="2">Мара</td>
                </tr>
                <tr>
                    <td class="cell-heading">Молоток</td>
                    <td class="cell bg-white-100">Луна</td>
                    <td class="cell bg-white-100">восток</td>
                    <td class="cell bg-blue_semi text-white">Я</td>
                    <td class="cell bg-blue_semi text-white">молоток меч</td>
                    <td class="cell bg-blue_semi text-white">ратна лотос</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-blue_semi text-white">Акшобхья</td>
                    <td class="cell bg-blue_semi text-white">вера</td>
                    <td class="cell bg-blue_semi text-white" colspan="2">скандх</td>
                <tr>
                    <td class="cell-heading">Дубина</td>
                    <td class="cell bg-white-100">Луна</td>
                    <td class="cell bg-yellowish">юг</td>
                    <td class="cell bg-white-100">ПА</td>
                    <td class="cell bg-white-100">дубина меч</td>
                    <td class="cell bg-white-100">лотос чакра</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white-100">Вайрочана</td>
                    <td class="cell bg-white-100">усердие</td>
                    <td class="cell bg-white-100" colspan="2">клеш</td>
                </tr>
                <tr>
                    <td class="cell-heading">Лотосный</td>
                    <td class="cell bg-white-100">Луна</td>
                    <td class="cell bg-coral">запад</td>
                    <td class="cell bg-coral">НИ</td>
                    <td class="cell bg-coral">лотос меч</td>
                    <td class="cell bg-coral">чакра ратна</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-coral">Амитабха</td>
                    <td class="cell bg-coral">памятование</td>
                    <td class="cell bg-coral" colspan="2">Владыка смерти</td>
                </tr>
                <tr>
                    <td class="cell-heading">Меч</td>
                    <td class="cell bg-white-100">Луна</td>
                    <td class="cell bg-green_neon">север</td>
                    <td class="cell bg-green_neon">РА</td>
                    <td class="cell bg-green_neon">меч чакра</td>
                    <td class="cell bg-green_neon">ратна лотос</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-green-600 text-white">зеленый</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-green_neon">Амогхасиддхи</td>
                    <td class="cell bg-green_neon">самадхи</td>
                    <td class="cell bg-green_neon" colspan="2">Сын небожителя</td>
                </tr>

                <tr>
                    <td class="cell-group" colspan="10">
                        Следующие четверо стоят во внутренней чакре по промежуточным направлениям</td>
                    <td class="cell-heading">Четыре безмерных</td>
                    <td class="cell-heading">Индрия</td>
                    <td class="cell-heading">Махабхути</td>
                </tr>

                <tr>
                    <td class="cell-heading">Чарчика</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-white-100">юго-восток</td>
                    <td class="cell bg-white-100">ДЗА</td>
                    <td class="cell1 bg-white-100">чакра меч</td>
                    <td class="cell bg-white-100">ратна лотос</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white-100">Вайрочана</td>
                    <td class="cell bg-white-100">дружественность</td>
                    <td class="cell bg-white-100">зрение</td>
                    <td class="cell bg-white-100">земля</td>
                </tr>
                <tr>
                    <td class="cell-heading">Варахи</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-yellowish">юго-запад</td>
                    <td class="cell bg-blue_semi text-white">СА</td>
                    <td class="cell bg-blue_semi text-white">ваджра меч</td>
                    <td class="cell bg-blue_semi text-white">чакра лотос</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-blue_semi text-white">Ваджрадхара</td>
                    <td class="cell bg-blue_semi text-white">сострадание</td>
                    <td class="cell bg-blue_semi text-white">слух</td>
                    <td class="cell bg-blue_semi text-white">вода</td>
                </tr>
                <tr>
                    <td class="cell-heading">Сарасвати</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-coral">северо-запад</td>
                    <td class="cell bg-coral">ДО</td>
                    <td class="cell bg-coral">лотос меч</td>
                    <td class="cell bg-coral">ратна чакра</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-red-500 text-white">красный</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-coral">Амитабха</td>
                    <td class="cell bg-coral">радость</td>
                    <td class="cell bg-coral">обоняние</td>
                    <td class="cell bg-coral">огонь</td>
                </tr>
                <tr>
                    <td class="cell-heading">Гаури</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-green_neon">северо-восток</td>
                    <td class="cell bg-green_neon">РУ</td>
                    <td class="cell bg-green_neon">меч чакра</td>
                    <td class="cell bg-green_neon">ратна лотос</td>
                    <td class="cell bg-blue-700 text-white">синий</td>
                    <td class="cell bg-green-600 text-white">зелёный</td>
                    <td class="cell bg-white">белый</td>
                    <td class="cell bg-green_neon">Амогхасиддхи</td>
                    <td class="cell bg-green_neon">равностность</td>
                    <td class="cell bg-green_neon">вкус</td>
                    <td class="cell bg-green_neon">воздух</td>
                </tr>
                <tr>
                    <td class="cell-heading">Ваджраветали (Юм)</td>
                    <td class="cell bg-red-500 text-white">Солнце</td>
                    <td class="cell bg-blue_semi text-white">центр</td>
                    <td class="cell bg-blue_semi text-white">ХУМ</td>
                    <td class="cell bg-blue_semi text-white">дигуг</td>
                    <td class="cell bg-blue_semi text-white">капала</td>
                    <td class="cell bg-blue-700 text-white" colspan="3">синий</td>
                    <td class="cell bg-blue_semi text-white">Акшобхья</td>
                    <td class="cell bg-blue_semi text-white"> --- </td>
                    <td class="cell bg-blue_semi text-white">осязание</td>
                    <td class="cell bg-blue_semi text-white">акаша</td>
                </tr>
                </tbody>
            </table>
            <!-- Ссылка для мобильных устройств -->
            <div class="md:hidden text-center py-4">
                <a href="{{ route('articles.vajrabhairava_mandala_table') }}"
                   class="text-blue-500 hover:underline">
                    Посмотреть таблицу Тринадцати Божеств Шри Ваджрабхайравы
                </a>
            </div>
        </div>

@endsection

    <style>
        .table-container {
            @apply mx-auto max-w-full;
        }
    </style>

