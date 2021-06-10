@extends('layout')
@section('content')
    <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post">
        <div class="d-flex align-items-center mt-2">
            <label for="" class="mr-2">Name:</label>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>
        <div class="d-flex align-items-center mt-2">
            <label for="" class="mr-2">Description:</label>
            <textarea name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
        </div>
        <div class="d-flex align-items-center mt-2">
            <label for="" class="mr-2">Price:</label>
            <input type="number" name="price" value="{{ $product->price }}">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
