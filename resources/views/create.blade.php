@extends('layout')
@section('content')
    <form action="{{ route('product.store') }}" method="post">
        <div class="d-flex align-items-center mt-2">
            <label for="" class="mr-2">Name:</label>
            <input type="text" name="name">
        </div>
        <div class="d-flex align-items-center mt-2">
            <label for="" class="mr-2">Description:</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="d-flex align-items-center mt-2">
            <label for="" class="mr-2">Price:</label>
            <input type="number" name="price">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
