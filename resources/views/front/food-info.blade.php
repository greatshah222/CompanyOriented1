@extends('layout.main')

@section('content')
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-3">
            <h3> PICKUP TIME AND DATE</h3>

            {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('address', 'Address') }}
                {{ Form::text('address', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('date', 'Date') }}
                {{ Form::text('date', null, ['id' => 'datepicker','class' => 'form-control']) }}
            </div>


            <div class="form-group">
                {{ Form::label('time', 'Time') }}
                {{ Form::text('time', null, array('class' => 'form-control')) }}
            </div>


            {{ Form::submit('Proceed to Payment', array('class' => 'btn btn-primary')) }}
            {!! Form::close() !!}
        </div>


    </div>


@endsection