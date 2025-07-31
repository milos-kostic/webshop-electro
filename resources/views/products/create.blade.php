<x-app-layout>
    <x-slot name="header">Create Product</x-slot>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <input name="name" placeholder="Name"><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <input name="price" placeholder="Price" type="number" step="0.01"><br>
        <input name="stock" placeholder="Stock" type="number"><br>
        <button type="submit">Create</button>
    </form>
</x-app-layout>
