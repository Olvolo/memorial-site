@props(['currentPart', 'totalParts' => 7])

<div class="my-6 px-4 py-3 bg-blue-50 rounded-lg border border-blue-200">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-3">
        <div>
            @if ($currentPart > 1)
                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => $currentPart - 1]) }}"
                   class="inline-flex items-center text-blue-700 hover:text-blue-900 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Предыдущая часть
                </a>
            @else
                <span class="text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Предыдущая часть
                </span>
            @endif
        </div>

        <div class="text-center">
            <a href="{{ route('pupishev_articles.source_of_sages', ['part' => 1]) }}"
               class="text-blue-700 hover:text-blue-900 hover:underline">
                К началу статьи
            </a>
        </div>

        <div class="text-right">
            @if ($currentPart < $totalParts)
                <a href="{{ route('pupishev_articles.source_of_sages', ['part' => $currentPart + 1]) }}"
                   class="inline-flex items-center text-blue-700 hover:text-blue-900 hover:underline">
                    Следующая часть
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            @else
                <span class="text-gray-400">
                    Следующая часть
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            @endif
        </div>
    </div>

    <div class="mt-3 text-center text-sm text-gray-600">
        Вы читаете часть {{ $currentPart }} из {{ $totalParts }}
    </div>
</div>
