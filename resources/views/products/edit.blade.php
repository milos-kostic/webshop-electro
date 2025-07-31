<x-app-layout>
    <x-slot name="header">Edit Product</x-slot>

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf @method('PUT')
        <input name="name" value="{{ $product->name }}"><br>
        <textarea name="description">{{ $product->description }}</textarea><br>
        <input name="price" value="{{ $product->price }}" type="number" step="0.01"><br>
        <input name="stock" value="{{ $product->stock }}" type="number"><br>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
