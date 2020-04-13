@extends('layouts.default')
@section('title', 'Бронирование')
@section('content')
    <div class="container">
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

