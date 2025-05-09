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
        .author-block {
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        .author-header {
            padding: 1rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .articles-list {
            list-style: none;
            padding-left: 1.25rem;
            padding-right: 1rem;
            padding-bottom: 1rem;
            margin-top: 0;
        }
        .articles-list li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .articles-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            background-image: url('{{ asset('images/rozetka_list.png') }}');
            background-size: cover;
            border-radius: 50%;
        }
        .toggle-icon {
            font-size: 0.875rem;
            color: #114fa6;
            line-height: 1;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            background-color: rgba(255, 255, 255, 0.5);
        }
        .sub-list-toggle {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-top: 0.5rem;
            font-weight: 500;
        }
        .sub-list {
            margin-left: 1rem;
            margin-top: 0.5rem;
        }
        .sub-list li:before {
            background-image: none;
        }
        .grid-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }
        @media (min-width: 640px) {
            .grid-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        .container a {
            color: #1a1a1a;
        }
        .container a:hover {
            color: #114fa6;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6 sm:mb-8 italic">
            РАБОТЫ СОРАТНИКОВ
        </h2>
        <div class="space-y-4">
            <!-- Блок автора 1 - Железнов -->
            <div x-data="{ isOpen: false }" class="author-block bg-blue-300">
                <div class="author-header" @click="isOpen = !isOpen">
                    <h3 class="text-xl font-semibold">Железнов Александр Иванович</h3>
                    <span class="toggle-icon" x-text="isOpen ? 'Свернуть' : 'Статьи'"></span>
                </div>

                <ul x-show="isOpen" x-transition.duration.200ms class="articles-list">
                    <li>
                        <a href="{{ route('articles.memory_alexandr_zheleznov') }}">Памяти А.И. Железнова</a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.about_tibetan_tradition_buryat_buddhism') }}">
                            О тибетских традициях в бурятском буддизме
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.marys-image-popular-interpretation-and-tantric-literature') }}">
                            Образ Мары в популярном толковании и в тантрийской литературе
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}">
                            Учение ваджраяны о тождестве сансары и нирваны
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.skandhas_according_to_Abhidharma_and_Vajrayana_interpretation') }}">
                            Скандхи по Абхидхарме и в интерпретации ваджраяны
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism') }}">
                            Философско-психологические основы решения экологических проблем в буддизме махаяны
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.question_buddhist_methodology') }}">
                            К вопросу о буддийской методологии. Часть первая
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок автора 2 - Пупышев -->
            <div x-data="{ isOpen: false }" class="author-block bg-blue-200">
                <div class="author-header" @click="isOpen = !isOpen">
                    <h3 class="text-xl font-semibold">Пупышев Виктор Николаевич</h3>
                    <span class="toggle-icon" x-text="isOpen ? 'Свернуть' : 'Статьи'"></span>
                </div>

                <ul x-show="isOpen" x-transition.duration.200ms class="articles-list">
                    <li>
                        <a href="{{ route('pupishev_articles.victor_nikolaevich_pupychev') }}">
                            Пупышев Виктор Николаевич
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.memories_of_bd_dandaron') }}">
                            Воспоминания о Б.Д. Дандароне
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.not_i_in_buddhist_theory_and_practice') }}">
                            «Не-Я» в буддийской теории и практике
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana') }}">
                            Учение ваджраяны о тождестве сансары и нирваны (совместно с Железновым А.И.)
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.about_term_pratiyaksha') }}">
                            О значении термина pratyakṣa в связи с буддийской теорией познания
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.worldview_fundamentals') }}">
                            Основы мировоззрения и мироощущения буддийских народов Центральной Азии
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.about_samsara_nature') }}">
                            О природе сансары: психологический очерк
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.general_scheme') }}">
                            Общая схема совершенствования по пути мантраяны
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.physical_analogues') }}">
                            Физические аналоги представлений Ваджраяны
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.mahamudra') }}">
                            Махамудра в одном из аспектов йоги для тех, кто живет супружеской жизнью
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.ulan_ude_radio_interview') }}">
                            Интервью Улан-Удэнскому радио
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.prayer_for_birth_in_sukhavati') }}">
                            Молитва о рождении в Сукхавати
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.honoring_the_teacher_ritual') }}">
                            Ритуал почитания учителя. Часть первая
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pupishev_articles.honoring_the_teacher_ritual_part_two') }}">
                            Ритуал почитания учителя. Часть вторая
                        </a>
                    </li>
                    <li x-data="{ sourceOfSagesOpen: false }">
                        <div @click="sourceOfSagesOpen = !sourceOfSagesOpen" class="sub-list-toggle">
                            <span>Источник мудрецов. Раздел тантра</span>
                            <span class="toggle-icon ml-2" x-text="sourceOfSagesOpen ? '▲' : '▼'"></span>
                        </div>
                        <ul x-show="sourceOfSagesOpen" x-transition.duration.200ms class="sub-list">
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 1]) }}">
                                    Источник мудрецов, часть 1
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 2]) }}">
                                    Часть вторая. Криятантра
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 3]) }}">
                                    Часть третья. Чарьятантра
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 4]) }}">
                                    Часть четвёртая. Йогатантра
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 5]) }}">
                                    Часть пятая. Ануттарайогатантра, часть первая
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 6]) }}">
                                    Часть шестая. Ануттарайогатантра, часть вторая
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 7]) }}">
                                    Часть седьмая. Ануттарайогатантра, часть третья
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Блок автора 3 - Пятигорский -->
            <div x-data="{
                isOpen: false,
                lecturesOpen: false,
                seminarsOpen: false
            }" class="author-block bg-blue-300">
                <div class="author-header" @click="isOpen = !isOpen">

                    <h3 class="text-xl font-semibold">Пятигорский Александр Моисеевич</h3>
                    <span class="toggle-icon" x-text="isOpen ? 'Свернуть' : 'Статьи'"></span>
                </div>

                <ul x-show="isOpen" x-transition.duration.200ms class="articles-list">
                    <li>
                        <a href="{{ route('pyatigorsky_articles.dandaron_departure') }}">Уход Дандарона
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pyatigorsky_articles.mainly_interesting') }}">Главное, чтобы было интересно
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pyatigorsky_articles.descriptive_language_problem_in_buddhology') }}">О. О. Розенберг и проблема языка описания в буддологии
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pyatigorsky_articles.about_studying_buddhist_philosophy') }}">Об изучении буддийской философии
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pyatigorsky_articles.metatheory_conversation_1') }}">Три беседы о метатеории сознания. Беседа I
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pyatigorsky_articles.metatheory_conversation_2') }}">Три беседы о метатеории сознания. Беседа II
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pyatigorsky_articles.metatheory_conversation_3') }}">Три беседы о метатеории сознания. Беседа III
                        </a>
                    </li>

                    <!-- Лекции -->
                    <li>
                        <div @click="lecturesOpen = !lecturesOpen" class="sub-list-toggle">
                            <span>Лекции по буддийской философии</span>
                            <span class="toggle-icon ml-2" x-text="lecturesOpen ? '▲' : '▼'"></span>
                        </div>
                        <ul x-show="lecturesOpen" x-transition.duration.200ms class="sub-list">
                            <li>
                                <a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures', ['part' => 1]) }}">Лекция первая
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures', ['part' => 2]) }}">Лекция вторая
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures', ['part' => 3]) }}">Лекция третья
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures', ['part' => 4]) }}">Лекция четвёртая
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.buddhist_philosophia_lectures', ['part' => 5]) }}">Лекция пятая
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Семинары -->
                    <li>
                        <div @click="seminarsOpen = !seminarsOpen" class="sub-list-toggle">
                            <span>Введение в изучение буддийской философии (семинары)</span>
                            <span class="toggle-icon ml-2" x-text="seminarsOpen ? '▲' : '▼'"></span>
                        </div>
                        <ul x-show="seminarsOpen" x-transition.duration.200ms class="sub-list grid-list">
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 1]) }}">Семинар первый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 2]) }}">Семинар второй
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 3]) }}">Семинар третий
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 4]) }}">Семинар четвёртый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 5]) }}">Семинар пятый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 6]) }}">Семинар шестой
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 7]) }}">Семинар седьмой
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 8]) }}">Семинар восьмой
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 9]) }}">Семинар девятый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 10]) }}">Семинар десятый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 11]) }}">Семинар одиннадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 12]) }}">Семинар двенадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 13]) }}">Семинар тринадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 14]) }}">Семинар четырнадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 15]) }}">Семинар пятнадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 16]) }}">Семинар шестнадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 17]) }}">Семинар семнадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 18]) }}">Семинар восемнадцатый
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pyatigorsky_articles.introduction_to_buddhist_philosophy_study', ['part' => 19]) }}">Семинар девятнадцатый
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Блок автора 4 - Данелюс -->
            <div x-data="{ isOpen: false }" class="author-block bg-blue-200">
                <div class="author-header" @click="isOpen = !isOpen">
                    <h3 class="text-xl font-semibold">Данелюс Антанас</h3>
                    <span class="toggle-icon" x-text="isOpen ? 'Свернуть' : 'Статьи'"></span>
                </div>

                <ul x-show="isOpen" x-transition.duration.200ms class="articles-list">
                    <li>
                        <a href="{{ route('danelus_articles.about_antanas') }}">
                            Об Антанасе
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('danelus_articles.beyond_space_time') }}">
                            За пределами пространства и времени
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок автора 5 -Мялль-->
            <div x-data="{ isOpen: false }" class="author-block bg-blue-300">
                <div class="author-header" @click="isOpen = !isOpen">
                    <h3 class="text-xl font-semibold">Мялль Линнарт</h3>
                    <span class="toggle-icon" x-text="isOpen ? 'Свернуть' : 'Статьи'"></span>
                </div>

                <ul x-show="isOpen" x-transition.duration.200ms class="articles-list">
                    <li>
                        <a href="{{ route('myall_articles.tibet_cultural_history') }}">
                            Культурная история Тибета
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.prajnaparamita_analysis') }}">
                            К анализу Праджняпарамиты
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.buddhist_mythology') }}">
                            Буддийская мифология
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.possible_way') }}">
                            Об одном возможном подходе к пониманию śūnyavāda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.shunyata_semiotic_model') }}">
                            Шуньята в семиотической модели Дхармы
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.dharma_text') }}">
                            Дхарма - текст и текстопорождающий механизм
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.dialog') }}">
                            Диалог в «Бодхичарьяватаре»
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myall_articles.to_buddhist_pessonology') }}">
                            К буддийской персонологии
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Блок автора 6 - Волкова Октябрина Фёдоровна -->
            <div x-data="{ isOpen: false }" class="author-block bg-blue-200">
                <div class="author-header" @click="isOpen = !isOpen">
                    <h3 class="text-xl font-semibold">Волкова Октябрина Фёдоровна</h3>
                    <span class="toggle-icon" x-text="isOpen ? 'Свернуть' : 'Статьи'"></span>
                </div>
                <ul x-show="isOpen" x-transition.duration.200ms class="articles-list">
                    <li>
                        <a href="{{ route('volkova_articles.two_ideal_societies') }}">
                            О двух идеальных социумах буддизма
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
@endpush

