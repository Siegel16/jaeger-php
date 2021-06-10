@extends('layout')
@section('content')
    <h2>Product list</h2>
    <div class="my-3">
        <a href="{{ route('product.create') }}">Create product</a>
    </div>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ number_format($product->price) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn">Update</a>
                        <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="post">
                            <button type="submit" class="btn">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {!! $products->links("pagination::bootstrap-4") !!}
    </div>
@endsection
