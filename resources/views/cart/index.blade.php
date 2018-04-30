
@extends('layout.main')

@section('content')

    <br><br>

<ul>
<ul>
    <ul>
        <ul>

        <h3>Cart Items</h3>
            <br>


        <table class="table table-hover" >
            <thead>
            <tr class="warning" >
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>Spiciness</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr class="info">
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">


                    </td>
                    <td>
                        <div > {!! Form::select('spiciness', ['mild'=>'Mild','medium'=>'Medium','strong'=>'Strong'] , $cartItem->options->has('spiciness')?$cartItem->options->spiciness:'' ) !!}
                        </div>

                    </td>

                    <td>

                        <input style="float: left"  type="submit" class="btn btn-sm btn-primary" value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    Tax: ${{Cart::tax()}} <br>
                    Sub Total: $ {{Cart::subtotal()}} <br>
                    Grand Total: $ {{Cart::total()}}
                </td>
                <td>Items: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.food')}}" class="btn btn-primary">Checkout</a>


</ul>
</ul>
</ul>
</ul>


@endsection
