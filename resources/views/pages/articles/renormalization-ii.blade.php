@extends('layouts.app')
@section('title', 'Перенормировка II')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.85)),
            url({{ asset('backgrounds/bluerish.webp') }});
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
        }

        /* Стили для позиционирования тире */
        .dash-container {
            position: relative;
        }
        .dash {
            position: absolute;
            left: 50%; /* по умолчанию по центру */
            transform: translateX(-50%);
        }
        /* Класс для сдвига вправо */
        .dash-right {
            left: calc(50% + 30px); /* сдвигаем на 20px вправо от центра */
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto p-4">
        <p class="text-left italic text-gray-800 font-medium my-6">
            Перенормировка II
        </p>
        <!-- Подзаголовок -->
        <h2 class="text-center text-lg sm:text-xl font-semibold mb-4">
            Четыре Константы Нетройственности
        </h2>
        <p class="text-right italic font-medium text-gray-800 mb-6">
            Посвящается Каудинье
        </p>

        <div class="flex justify-center font-medium">
            <div class="w-full max-w-md">
                <div class="grid grid-cols-3 gap-2 text-sm sm:text-base">
                    <div class="text-left">Нетройственность</div>
                    <div class="dash-container text-center"><span class="dash dash-right">–</span></div>
                    <div class="text-right">ниродха</div>

                    <div class="text-left">Открытый горизонт</div>
                    <div class="dash-container text-center"><span class="dash dash-right">–</span></div>
                    <div class="text-right">анитья</div>

                    <div class="text-left">Абсолютность Бытия</div>
                    <div class="dash-container text-center"><span class="dash dash-right">–</span></div>
                    <div class="text-right">дукха</div>

                    <div class="text-left">Неединичность сознания</div>
                    <div class="dash-container text-center"><span class="dash dash-right">–</span></div>
                    <div class="text-right">анатма</div>
                </div>

                <div class="flex justify-between mt-8 mb-2 text-sm sm:text-base">
                    <div>ВМ</div>
                    <div>ОВ</div>
                </div>

                <div class="text-right italic text-sm sm:text-base">
                    27.05.1998, СПб
                </div>
            </div>
        </div>
    </div>
@endsection
