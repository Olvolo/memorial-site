@extends('layouts.app')
@section('title', 'ВОЛНА ДХАРМЫ')
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
        <!-- Бюллетень -->
        <div class="flex justify-center">
            <figure class="rounded-lg shadow-md max-w-[500px] text-center
                 mb-4">
                <img src="{{ asset('images/near_car.jpg') }}"
                     alt="Справа налево: Б.Д. Дандарон, В. Монтлевич,
                     хамбо-лама Гомбоев, Сумбуев после обсуждения судьбы ленинградского буддийского храма. Улан-Удэ, 1970 г/"
                     class="rounded-lg w-full h-auto mx-auto">
                <figcaption class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                    Справа налево: Б.Д. Дандарон, В. Монтлевич, хамбо-лама
                    Гомбоев, Сумбуев после обсуждения судьбы ленинградского
                    буддийского храма. Улан-Удэ, 1970 г.
                </figcaption>
            </figure>
        </div>
        <div
            class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-2xl
        md:text-2xl mt-6 mb-6">ВОЛНА ДХАРМЫ</h1>
            <p>В мае 1987 года в Москве Владимир Монтлевич и Владимир Майков
                пришли в беседе к выводу, что настало время регистрировать
                буддийскую общину в Ленинграде. Ими были составлены проект
                письма в Совет по делам религии и обращение в ЦДУБ на имя
                хамбо-ламы Эрдынеева.
            </p>
            <p>Авторы регистрации полагали, что в благоприятной ситуации
                сработают законы синергетики и идеи пассионарности.
            </p>
            <p>Непривычно быть участником процесса и его наблюдателем, но все
                благополучно разрешилось. В Ленинграде образовалась инициативная
                группа из трех человек - Андрея Матвеева, В. Монтлевича и Андрея
                Болдина.
            </p>
            <p>Неоценимую помощь при регистрации оказали С. Борисова, С.
                Борисов, С. Львов, Н. Сидоренко, А. Терентьев и М. Савчук.
            </p>
            <p>Итак, дорога к Храму открылась. Миссия же авторов на акте
                регистрации формально закончилась. Но Волна Дхармы пошла, на что
                и была надежда. 18 октября 1989 года регистрируется буддийская
                община Латвии, 28 октября - буддийская община Москвы, 9 апреля
                1990 года зарегистрирована дзогчен-община тоже в Латвии. В
                Ленинграде начинают успешно работать, пренебрегая архаикой
                закона о регистрации, дхарма-центры иных, чем школа гелуг,
                направлений тибетского буддизма.
            </p>
            <p>Возвышенная терпимость учения, основанная на идеях ахимсы,
                шуньяты и бодхисаттвовской мысли, несомненно, преодолеет в
                потоках наших сознаний инерцию агрессивности, неприятие чужих
                идей и духовную апатию. Сарвамангалам!</p>
            <!-- Бюллетень -->
            <div class="flex justify-center">
                <figure class="rounded-lg shadow-md max-w-[500px] text-center
                 mb-4">
                    <img src="{{ asset('images/inf_bul.jpg') }}"
                         alt="Обложка информационного бюллетеня буддистов Ленинграда"
                         class="rounded-lg w-full h-auto mx-auto">
                    <figcaption
                        class="mt-2 mb-4 px-4 italic text-gray-600 text-sm">
                        Обложка информационного бюллетеня буддистов Ленинграда
                    </figcaption>
                </figure>
            </div>

            <p class="text-right italic text-gray-600 mt-4">
                В.М. Монтлевич
            </p>

        </div>
    </div>
@endsection
