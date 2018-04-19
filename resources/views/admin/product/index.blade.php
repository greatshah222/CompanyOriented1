@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>
    <ul>
        @forelse($products as $product)

            <li>

                <h4>Name of Product: {{$product->name}}    Price of the product :{{$product->price}}</h4> </li>


        @empty
            <h3>No product </h3>
        @endforelse
    </ul>




@endsection