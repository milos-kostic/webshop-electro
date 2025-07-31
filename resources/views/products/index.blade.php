<x-app-layout>
    <x-slot name="header">Products</x-slot>

    <a href="{{ route('products.create') }}">+ New Product</a>

    @foreach ($products as $product)
        <div>
            <strong>{{ $product->name }}</strong><br>
            Price: ${{ $product->price }}<br>
            Stock: {{ $product->stock }}<br>
            <a href="{{ route('products.edit', $product) }}">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach
</x-app-layout>
