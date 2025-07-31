<x-app-layout>
    <x-slot name="header">Categories</x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
        @foreach($categories as $category)
            <x-dashboard-card 
                href="{{ route('categories.show', $category) }}"
                color="green"
                icon="📁"
                title="{{ $category->name }}"
            />
        @endforeach
    </div>
</x-app-layout>
