<div class="my-6 px-4 py-3 bg-blue-50 rounded-lg border border-blue-200">
    <!-- Широкие экраны (≥ 580px) -->
    <div class="hidden sm:block">
        <!-- 1-я строка: стрелки + пагинация -->
        <div class="flex justify-between items-center gap-3 mb-3">
            <!-- Кнопка "Назад" -->
            <div>
                @if ($currentPart > 1)
                    <a href="{{ route($routeName, ['part' => $currentPart - 1]) }}"
                       class="inline-flex items-center text-blue-700 hover:text-blue-900 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Назад
                    </a>
                @else
                    <span class="text-gray-400 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Назад
                    </span>
                @endif
            </div>

            <!-- Пагинация -->
            <div class="flex items-center gap-1 overflow-x-auto py-1">
                @php
                    $totalParts = $totalParts ?? 1; // Значение по умолчанию, если не передано
                    $start = max(1, $currentPart - 2);
                    $end = min($totalParts, $currentPart + 2);
                    if ($currentPart <= 3) $end = min(5, $totalParts);
                    if ($currentPart >= $totalParts - 2) $start = max(1, $totalParts - 4);
                @endphp

                @if ($start > 1)
                    <a href="{{ route($routeName, ['part' => 1]) }}" class="px-2 py-1 text-sm rounded hover:bg-blue-100 whitespace-nowrap">1</a>
                    @if ($start > 2) <span class="px-1">...</span> @endif
                @endif

                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $currentPart)
                        <span class="px-2 py-1 text-sm rounded bg-blue-500 text-white whitespace-nowrap">{{ $i }}</span>
                    @else
                        <a href="{{ route($routeName, ['part' => $i]) }}" class="px-2 py-1 text-sm rounded hover:bg-blue-100 whitespace-nowrap">{{ $i }}</a>
                    @endif
                @endfor

                @if ($end < $totalParts)
                    @if ($end < $totalParts - 1) <span class="px-1">...</span> @endif
                    <a href="{{ route($routeName, ['part' => $totalParts]) }}" class="px-2 py-1 text-sm rounded hover:bg-blue-100 whitespace-nowrap">{{ $totalParts }}</a>
                @endif
            </div>

            <!-- Кнопка "Вперёд" -->
            <div>
                @if ($currentPart < $totalParts)
                    <a href="{{ route($routeName, ['part' => $currentPart + 1]) }}"
                       class="inline-flex items-center text-blue-700 hover:text-blue-900 hover:underline">
                        Вперёд
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span class="text-gray-400 inline-flex items-center">
                        Вперёд
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <!-- Узкие экраны (< 580px) -->
    <div class="sm:hidden space-y-3">
        <!-- 1-я строка: кнопки "Назад/Вперёд" -->
        <div class="flex justify-between">
            <div>
                @if ($currentPart > 1)
                    <a href="{{ route($routeName, ['part' => $currentPart - 1]) }}"
                       class="inline-flex items-center text-blue-700 hover:text-blue-900 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Назад
                    </a>
                @else
                    <span class="text-gray-400 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Назад
                    </span>
                @endif
            </div>

            <div>
                @if ($currentPart < $totalParts)
                    <a href="{{ route($routeName, ['part' => $currentPart + 1]) }}"
                       class="inline-flex items-center text-blue-700 hover:text-blue-900 hover:underline">
                        Вперёд
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span class="text-gray-400 inline-flex items-center">
                        Вперёд
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>

        <!-- 2-я строка: пагинация -->
        <div class="flex justify-center overflow-x-auto py-1">
            <div class="flex items-center gap-1">
                @php
                    $start = max(1, $currentPart - 1); // На мобильных показываем меньше номеров
                    $end = min($totalParts, $currentPart + 1);
                    if ($currentPart <= 2) $end = min(3, $totalParts);
                    if ($currentPart >= $totalParts - 1) $start = max(1, $totalParts - 2);
                @endphp

                @if ($start > 1)
                    <a href="{{ route($routeName, ['part' => 1]) }}" class="px-2 py-1 text-sm rounded hover:bg-blue-100 whitespace-nowrap">1</a>
                    @if ($start > 2) <span class="px-1">...</span> @endif
                @endif

                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $currentPart)
                        <span class="px-2 py-1 text-sm rounded bg-blue-500 text-white whitespace-nowrap">{{ $i }}</span>
                    @else
                        <a href="{{ route($routeName, ['part' => $i]) }}" class="px-2 py-1 text-sm rounded hover:bg-blue-100 whitespace-nowrap">{{ $i }}</a>
                    @endif
                @endfor

                @if ($end < $totalParts)
                    @if ($end < $totalParts - 1) <span class="px-1">...</span> @endif
                    <a href="{{ route($routeName, ['part' => $totalParts]) }}" class="px-2 py-1 text-sm rounded hover:bg-blue-100 whitespace-nowrap">{{ $totalParts }}</a>
                @endif
            </div>
        </div>
    </div>

    <!-- 3-я строка (общая для всех): выпадающий список -->
    <div class="relative max-w-2xl mt-3  mx-auto">
        <select
            onchange="window.location.href = this.value"
            class="block w-full appearance-none bg-white border border-gray-300 text-gray-800 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 text-sm"
        >
            @for ($i = 1; $i <= $totalParts; $i++)
                <option value="{{ route($routeName, ['part' => $i]) }}" {{ $i == $currentPart ? 'selected' : '' }}>
                    Часть {{ $i }} из {{ $totalParts }}
                </option>
            @endfor
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
            </svg>
        </div>
    </div>
</div>
