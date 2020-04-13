@extends('layouts.default')
@section('title', 'Бронирование')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="col-12 text-center my-5">ОНЛАЙ БРОНИРОВАНИЕ (ШАГ 1)</h2>
        </div>
        <div class="row">
            {!! Form::open(['url' => route('reservation.redirect'), 'method' => 'GET']) !!}
            @include('reservation.blocks.form.index')
            <div class="form-group col-12">
                {!! Form::submit('Далее', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

