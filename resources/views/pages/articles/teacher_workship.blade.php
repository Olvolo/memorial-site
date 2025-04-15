@extends('layouts.app')

@section('title', 'Поклоняюсь Учителю...')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url({{ asset('backgrounds/watercolor.jpg') }});
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto py-8 min-h-screen flex items-center justify-center">
        <div class="text-center">

            <div class="poem mx-auto text-gray-700 text-left sm:text-center md:text-left">
                <div class="stanza mb-6">
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Поклоняюсь Учителю, осуществившему</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Благословение дхармакаи в Пространстве,</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Трансформировавшему центральный космический Ум</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">В Пять трансцендентальных Мудростей.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Поклоняюсь Учителю, распространившему</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Самбхогакаю через собственную реальность</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Осуществлением Пяти Тел,</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Трансформированных пятью волнами Мудрости.</span>
                </div>
                <div class="stanza mb-6">
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Поклоняюсь Учителю, создавшему всезнающей Мудростью</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Из собственного цвета</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Беспрепятственную Мандалу Мудрости</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">И проникшему в центр этой мандалы через бой.</span>
                </div>
                <div class="stanza mb-4">
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Поклоняюсь Учителю – Ослепительному Нирманакае,</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Который есть содержание проповеди перед лицом спасающихся,</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">Проповедующему Большую садхану Ваджрасаттвы</span>
                    <span class="line font-semibold block text-sm sm:text-base md:text-lg">От лица Гневного Идама.</span>
                </div>

            </div>

            <p class="text-right text-gray-600 italic mt-8">В. М., 1984 г., Ленинград</p>
        </div>
    </div>
@endsection
