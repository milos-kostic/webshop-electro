<x-app-layout>
    <x-slot name="header">{{ $category->name }}</x-slot>

    <div class="p-4">
        <p>Description: {{ $category->description }}</p>
        <p>Slug: {{ $category->slug }}</p>
    </div>
</x-app-layout>
