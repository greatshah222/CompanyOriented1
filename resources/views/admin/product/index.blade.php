@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>
    <ul>
            <table class="table table-hover">
                <thead>
                <tr>

                    <th scope="col">Name </th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Spiciness</th>
                    <th scope="col">Action</th>


                </tr>
                </thead>
                @forelse($products as $product)

                <tbody>

                <tr>
                    <th scope="row">  <h4> {{$product->name}}</h4></th>
                    <th colspan="1"><h4>{{$product->price}}</h4></th>
                    <th colspan="1"><h4>{{$product->description}}</h4></th>
                    <th colspan="1"><h4>{{$product->spiciness}}</h4></th>



                    <th> <form action="{{route('product.destroy',$product->id)}}"  method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        </form></th>
                    <th>                     <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-primary">edit </a>
                    </th>
                </tr>
                </tbody>













        @empty
            <h3>No product </h3>
            </table>
        @endforelse





@endsection


