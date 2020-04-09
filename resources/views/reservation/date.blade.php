@extends('layouts.default')
@section('title', 'Бронирование')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => route('admin.orders.store')]) !!}
            @include('reservation.blocks.form.date')
            <div class="form-group">
                {!! Form::submit('Забронировать', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

