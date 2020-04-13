@extends('layouts.default')
@section('title', 'Бронирование')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="col-12 text-center my-5">ОНЛАЙ БРОНИРОВАНИЕ (ШАГ 2)</h2>
        </div>
        <div class="row">
            {!! Form::open(['url' => route('reservation.store')]) !!}
            @include('reservation.blocks.form.step2')
            <div class="form-group col-12">
                {!! Form::submit('Забронировать', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

