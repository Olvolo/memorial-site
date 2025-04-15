@extends('layouts.app')

@section('title', 'Работы соратников')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url({{ asset('backgrounds/watercolor.jpg') }});
            background-attachment: fixed;
            background-size: cover;
            min-height: 100vh;
            padding-bottom: 2rem;
        }

        ul li {
            position: relative;
            padding-left: 1.5rem;
        }

        ul li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 20%;
            width: 16px;
            height: 16px;
            background-image: url('{{ asset('images/rozetka_list.png') }}');
            background-size: cover;
            border-radius: 50%;
        }

        .toggle-icon {
            font-size: 1.0rem !important;
            color: #114fa6 !important;
            line-height: 1;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto">

        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6 sm:mb-8 italic">
            РАБОТЫ СОРАТНИКОВ</h2>

        <div class="space-y-4">
            <!-- Блок автора 1 -->
            <div x-data="{ open: false }" class="bg-blue-300 rounded-lg">
                <div class="p-4 cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-semibold flex justify-between items-center">
                        Александр Иванович Железнов
                        <span
                            class="toggle-icon text-blue-950 text-xs font-normal px-2 py-1 bg-blue-200 rounded"
                            x-text="open ? 'Свернуть' : 'Статьи'"></span></h3>
                </div>

                <ul x-show="open" x-transition.duration.200ms
                    class="list-none pl-5 space-y-2 text-base mt-3 bg-blue-300 p-4 rounded-b-lg">
                    <li><a href="{{ route('articles.memory_alexandr_zheleznov') }}"
                           class="text-black hover:text-blue-950">Памяти А.И. Железнова</a></li>
                    <li>
                        <a href="{{ route('zheleznov_articles.about_tibetan_tradition_buryat_buddhism') }}"
                           class="text-black hover:text-blue-950">О тибетских традициях в бурятском
                            буддизме</a></li>
                    <li>
                        <a href="{{ route('zheleznov_articles.marys-image-popular-interpretation-and-tantric-literature') }}"
                           class="text-black hover:text-blue-950">Образ Мары в популярном толковании
                            и в
                            тантрийской литературе</a></li>
                    <li>
                        <a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}"
                           class="text-black hover:text-blue-950">Учение ваджраяны о тождестве
                            сансары и
                            нирваны</a></li>
                    <li>
                        <a href="{{ route('zheleznov_articles.skandhas_according_to_Abhidharma_and_Vajrayana_interpretation') }}"
                           class="text-black hover:text-blue-950">Скандхи по Абхидхарме и в
                            интерпретации ваджраяны</a></li>
                    <li>
                        <a href="{{ route('zheleznov_articles.philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism') }}"
                           class="text-black hover:text-blue-950">Философско-психологические основы
                            решения экологических проблем в буддизме махаяны.</a></li>
                    <li><a href="{{ route('zheleznov_articles.question_buddhist_methodology') }}"
                           class="text-black hover:text-blue-950">К вопросу о буддийской
                            методологии.
                            Часть первая</a></li>
                </ul>
            </div>

            <!-- Блок автора 2 -->
            <div x-data="{ open: false }" class="bg-blue-200 rounded-lg">
                <div class="p-4 cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-semibold flex justify-between items-center">
                        Виктор Николаевич Пупышев
                        <span
                            class="toggle-icon text-xs font-normal text-blue-950 px-2 py-1 bg-blue-100 rounded"
                            x-text="open ? 'Свернуть' : 'Статьи'"></span></h3>
                </div>
                <ul x-show="open" x-transition.duration.200ms
                    class="list-none pl-5 space-y-2 text-base mt-3 bg-blue-200 p-4 rounded-b-lg">
                    <li><a href="{{ route('pupishev_articles.victor_nikolaevich_pupychev') }}"
                           class="text-black hover:text-blue-950">Пупышев Виктор Николаевич </a>
                    </li>
                    <li><a href="{{ route('pupishev_articles.memories_of_bd_dandaron') }}"
                           class="text-black hover:text-blue-950">Воспоминания о Б.Д. Дандароне</a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.not_i_in_buddhist_theory_and_practice') }}"
                           class="text-black hover:text-blue-950">«Не-Я» в буддийской теории и
                            практике</a></li>
                    <li>
                        <a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}"
                           class="text-black hover:text-blue-950">Учение ваджраяны о тождестве
                            сансары и
                            нирваны</a></li>
                    <li><a href="{{ route('pupishev_articles.about_term_pratiyaksha') }}"
                           class="text-black hover:text-blue-950">О значении термина pratyakṣa в
                            связи с
                            буддийской теорией познания</a></li>
                    <li><a href="{{ route('pupishev_articles.worldview_fundamentals') }}"
                           class="text-black hover:text-blue-950">Основы мировоззрения и
                            мироощущения
                            буддийских народов Центральной Азии</a></li>
                    <li><a href="{{ route('pupishev_articles.about_samsara_nature') }}"
                           class="text-black hover:text-blue-950">О природе сансары: психологический
                            очерк</a></li>
                    <li><a href="{{ route('pupishev_articles.general_scheme') }}"
                           class="text-black hover:text-blue-950">Общая схема совершенствования по
                            пути
                            мантраяны</a></li>
                    <li><a href="{{ route('pupishev_articles.prayer_for_birth_in_sukhavati') }}"
                           class="text-black hover:text-blue-950">Молитва о рождении в Сукхавати</a>
                    </li>
                    <li><a href="{{ route('pupishev_articles.honoring_the_teacher_ritual') }}"
                           class="text-black hover:text-blue-950">Ритуал почитания учителя. Часть
                            первая</a></li>
                    <li>
                        <a href="{{ route('pupishev_articles.honoring_the_teacher_ritual_part_two') }}"
                           class="text-black hover:text-blue-950">Ритуал почитания учителя. Часть
                            вторая</a></li>
                </ul>
            </div>

            <!-- Блок автора 3 -->
            <div x-data="{ open: false }" class="bg-blue-300 rounded-lg">
                <div class="p-4 cursor-pointer" @click="open = !open">
                    <h3 class="text-xl font-semibold flex justify-between items-center">
                        Александр Моисеевич Пятигорский
                        <span
                            class="toggle-icon text-xs font-normal text-blue-950 px-2 py-1 bg-blue-200 rounded"
                            x-text="open ? 'Свернуть' : 'Статьи'"></span></h3>
                </div>

                <ul x-show="open" x-transition.duration.200ms
                    class="list-none pl-5 space-y-2 text-base bg-blue-300 p-4 rounded-b-lg">
                    <li><a href="{{ route('pyatigorsky_articles.dandaron_departure') }}"
                           class="text-black hover:text-blue-950">Уход Дандарона</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.metatheory_conversation_1') }}"
                           class="text-black hover:text-blue-950">Три беседы о метатеории сознания. Беседа I</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.metatheory_conversation_2') }}"
                           class="text-black hover:text-blue-950">Три беседы о метатеории сознания. Беседа II</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.metatheory_conversation_3') }}"
                           class="text-black hover:text-blue-950">Три беседы о метатеории сознания. Беседа III</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures_1') }}"
                           class="text-black hover:text-blue-950">Лекции по буддийской философии. Лекция первая</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures_2') }}"
                           class="text-black hover:text-blue-950">Лекции по буддийской философии. Лекция вторая</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures_3') }}"
                           class="text-black hover:text-blue-950">Лекции по буддийской философии. Лекция третья</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures_4') }}"
                           class="text-black hover:text-blue-950">Лекции по буддийской философии. Лекция четвёртая</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures_5') }}"
                           class="text-black hover:text-blue-950">Лекции по буддийской философии. Лекция пятая</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_01') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар первый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_02') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар второй</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_03') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар третий</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_04') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар четвёртый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_05') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар пятый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_06') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар шестой</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_07') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар седьмой</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_08') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар восьмой</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_09') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар девятый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_10') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар десятый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_11') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар одиннадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_12') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар двенадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_13') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар тринадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_14') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар четырнадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_15') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар пятнадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_16') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар шестнадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_17') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар семнадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_18') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар восемнадцатый</a></li>
                    <li><a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_19') }}"
                           class="text-black hover:text-blue-950">Введение в изучение буддийской философии. Семинар девятнадцатый</a></li>



                </ul>
            </div>
        </div>
        <br>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    @endpush

@endsection


{{--        <h2 class="text-2xl sm:text-3xl md:text-3xl lg:text-3xl font-bold--}}
{{--            text-center text-orange-800 mb-6 sm:mb-8">Работы соратников</h2>--}}
{{--        <div class="space-y-4">--}}
{{--            <!-- Александр Иванович Железнов -->--}}
{{--            <div class="bg-emerald-200 p-4 rounded-lg">--}}
{{--                <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">--}}
{{--                    Александр Иванович Железнов</h3>--}}
{{--                <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">--}}
{{--                    <li><a href="{{ route('articles.memory_alexandr_zheleznov') }}"--}}
{{--                           class="text-black hover:text-blue-950">Памяти А.И. Железнова</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.about_tibetan_tradition_buryat_buddhism') }}"--}}
{{--                           class="text-black hover:text-blue-950">О тибетских традициях в бурятском буддизме</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.marys-image-popular-interpretation-and-tantric-literature') }}"--}}
{{--                           class="text-black hover:text-blue-950">Образ Мары в популярном толковании и в тантрийской литературе</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}"--}}
{{--                           class="text-black hover:text-blue-950">Учение ваджраяны о тождестве сансары и нирваны</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.skandhas_according_to_Abhidharma_and_Vajrayana_interpretation') }}"--}}
{{--                           class="text-black hover:text-blue-950">Скандхи по Абхидхарме и в интерпретации ваджраяны</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism') }}"--}}
{{--                           class="text-black hover:text-blue-950">Философско-психологические основы решения экологических проблем в буддизме махаяны.</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.question_buddhist_methodology') }}"--}}
{{--                           class="text-black hover:text-blue-950">К вопросу о буддийской методологии. Часть первая</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- Виктор Николаевич Пупышев -->--}}
{{--            <div class="bg-coral p-4 sm:p-4 rounded-lg">--}}
{{--                <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">--}}
{{--                    Виктор Николаевич Пупышев</h3>--}}
{{--                <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">--}}
{{--                    <li><a href="{{ route('pupishev_articles.victor_nikolaevich_pupychev') }}"--}}
{{--                           class="text-black hover:text-blue-950">Пупышев Виктор Николаевич </a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.memories_of_bd_dandaron') }}"--}}
{{--                           class="text-black hover:text-blue-950">Воспоминания о Б.Д. Дандароне</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.not_i_in_buddhist_theory_and_practice') }}"--}}
{{--                           class="text-black hover:text-blue-950">«Не-Я» в буддийской теории и практике</a></li>--}}
{{--                    <li><a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}"--}}
{{--                           class="text-black hover:text-blue-950">Учение ваджраяны о тождестве сансары и нирваны</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.about_term_pratiyaksha') }}"--}}
{{--                           class="text-black hover:text-blue-950">О значении термина pratyakṣa в связи с буддийской теорией познания</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.worldview_fundamentals') }}"--}}
{{--                           class="text-black hover:text-blue-950">Основы мировоззрения и мироощущения буддийских народов Центральной Азии</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.about_samsara_nature') }}"--}}
{{--                           class="text-black hover:text-blue-950">О природе сансары: психологический очерк</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.general_scheme') }}"--}}
{{--                           class="text-black hover:text-blue-950">Общая схема совершенствования по пути мантраяны</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.prayer_for_birth_in_sukhavati') }}"--}}
{{--                           class="text-black hover:text-blue-950">Молитва о рождении в Сукхавати</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.honoring_the_teacher_ritual') }}"--}}
{{--                           class="text-black hover:text-blue-950">Ритуал почитания учителя. Часть первая</a></li>--}}
{{--                    <li><a href="{{ route('pupishev_articles.honoring_the_teacher_ritual_part_two') }}"--}}
{{--                           class="text-black hover:text-blue-950">Ритуал почитания учителя. Часть вторая</a></li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- Александр Моисеевич Пятигорский-->--}}
{{--            <div class="bg-purple-200 p-4 rounded-lg">--}}
{{--                <h3 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4 text-gray-800 text-center italic">--}}
{{--                    Александр Моисеевич Пятигорский</h3>--}}
{{--                <ul class="list-none pl-5 sm:pl-6 space-y-2 text-base sm:text-lg custom-list">--}}
{{--                    <li><a href="{{ route('pyatigorsky_articles.dandaron_departure') }}"--}}
{{--                           class="text-black hover:text-blue-950">Уход Дандарона</a></li>--}}
{{--                    <li><a href="{{ route('pyatigorsky_articles.metatheory_conversation_1') }}"--}}
{{--                           class="text-black hover:text-blue-950">Три беседы о метатеории сознания. Беседа I</a></li>--}}
{{--                    <li><a href="{{ route('pyatigorsky_articles.metatheory_conversation_2') }}"--}}
{{--                           class="text-black hover:text-blue-950">Три беседы о метатеории сознания. Беседа II</a></li>--}}
{{--                    <li><a href="{{ route('pyatigorsky_articles.metatheory_conversation_3') }}"--}}
{{--                           class="text-black hover:text-blue-950">Три беседы о метатеории сознания. Беседа III</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @push('scripts')--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>--}}
{{--    @endpush--}}

{{--@endsection--}}





