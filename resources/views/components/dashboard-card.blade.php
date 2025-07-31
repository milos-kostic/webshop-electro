@props([
    'color' => 'blue',
    'icon' => '',
    'title' => '',
    'href' => '#',
    'disabled' => false,
    'count' => null,
    'description' => null,
    'variant' => 'card' // 'card' or 'tile'
])

@php
    // Unified color scheme definitions
    $colorSchemes = [
        'blue' => [
            'border' => 'border-blue-500',
            'bg' => 'bg-blue-600 dark:bg-blue-700',
            'hover' => 'hover:bg-blue-700 dark:hover:bg-blue-800',
            'text' => 'text-blue-100',
            'card' => 'bg-white dark:bg-gray-800 border-l-4 border-blue-500',
            'count' => 'bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100'
        ],
        'green' => [
            'border' => 'border-green-500',
            'bg' => 'bg-green-600 dark:bg-green-700',
            'hover' => 'hover:bg-green-700 dark:hover:bg-green-800',
            'text' => 'text-green-100',
            'card' => 'bg-white dark:bg-gray-800 border-l-4 border-green-500',
            'count' => 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100'
        ],
        'purple' => [
            'border' => 'border-purple-500',
            'bg' => 'bg-purple-600 dark:bg-purple-700',
            'hover' => 'hover:bg-purple-700 dark:hover:bg-purple-800',
            'text' => 'text-purple-100',
            'card' => 'bg-white dark:bg-gray-800 border-l-4 border-purple-500',
            'count' => 'bg-purple-100 text-purple-800 dark:bg-purple-800 dark:text-purple-100'
        ],
        'red' => [
            'border' => 'border-red-500',
            'bg' => 'bg-red-600 dark:bg-red-700',
            'hover' => 'hover:bg-red-700 dark:hover:bg-red-800',
            'text' => 'text-red-100',
            'card' => 'bg-white dark:bg-gray-800 border-l-4 border-red-500',
            'count' => 'bg-red-100 text-red-800 dark:bg-red-800 dark:text-red-100'
        ],
    ];

    $scheme = $colorSchemes[$color] ?? $colorSchemes['blue'];
    $disabledClasses = $disabled ? 'opacity-70 cursor-not-allowed' : 'cursor-pointer';
    $disabledAttributes = $disabled ? 'aria-disabled="true" tabindex="-1"' : '';
    
    // Determine styling based on variant
    if ($variant === 'tile') {
        $baseClasses = "group relative block p-6 rounded-lg shadow-md transition-all duration-200 {$scheme['bg']} {$scheme['hover']}";
        $contentClasses = "flex flex-col items-center text-center text-white";
    } else {
        $baseClasses = "group relative block rounded-lg shadow hover:shadow-lg transition duration-300 p-6 {$scheme['card']}";
        $contentClasses = "flex items-center space-x-4";
    }
@endphp

<a 
    href="{{ $disabled ? '#' : $href }}"
    {{ $attributes->merge(['class' => "{$baseClasses} {$disabledClasses}"]) }}
    {{ $disabledAttributes }}
>
    @if($count !== null)
        <span class="absolute -top-2 -right-2 {{ $variant === 'tile' ? $scheme['text'] : $scheme['count'] }} text-xs font-bold rounded-full h-6 w-6 flex items-center justify-center shadow-sm">
            {{ $count }}
        </span>
    @endif

    <div class="{{ $contentClasses }}">
        <div class="{{ $variant === 'tile' ? 'text-3xl mb-2 transition-transform group-hover:scale-110' : 'text-4xl' }}">
            {{ $icon }}
        </div>
        
        <div>
            <h3 class="{{ $variant === 'tile' ? 'text-xl font-bold mb-1' : 'text-xl font-semibold text-gray-800 dark:text-white' }}">
                {{ $title }}
            </h3>
            
            @if($description)
                <p class="{{ $variant === 'tile' ? 'text-sm opacity-80 mt-1' : 'text-sm text-gray-500 dark:text-gray-300 mt-1' }}">
                    {{ $description }}
                </p>
            @elseif($variant === 'card')
                <p class="text-sm text-gray-500 dark:text-gray-300">Click to open</p>
            @endif
        </div>
    </div>

    @if($disabled)
        <span class="{{ $variant === 'tile' ? 'text-xs mt-2 opacity-90' : 'absolute bottom-2 right-2 text-xs text-gray-500 dark:text-gray-400' }}">
            (Coming Soon)
        </span>
    @endif
</a>