@extends('admin.layout.admin')
@section('content')
    <h3>Orders</h3>
    <hr>

    <ul>
        @foreach($orders as $order)





                <div class="clearfix"></div>
                <hr>
                <h5>FOOD AND CUSTOMER DETAIL</h5>
            <br>
                <table class="table table-bordered table-hover">
                    <tr class="info">
                        <th>Order By</th>
                        <th>Name</th>
                        <th>qty</th>
                        <th>price</th>
                        <th>total</th>
                        <th>phone number</th>




                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$order->user->name}}</td>

                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->user->pnumber}}</td>
                        </tr>


                    @endforeach

                </table>
            <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                {{csrf_field()}}
                <label for="ready">FOOD READY FOR PICKUP</label>
                <input type="checkbox" value="1" name="ready"  {{$order->ready==1?"checked":"" }}>
                <input type="submit" value="Submit">

            </form>


            <br> <br>

        @endforeach

    </ul>
@endsection

