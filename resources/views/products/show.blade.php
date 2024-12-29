@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <p>Stock: {{ $product->stock }}</p>
        <p>Category: {{ $product->category->name ?? 'Uncategorized' }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection