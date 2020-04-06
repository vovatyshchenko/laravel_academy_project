@extends('layouts.default')
@section('title', 'Бронирование')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => route('admin.masters.store')]) !!}
            @include('reservation.blocks.form.index')
            <div class="form-group">
                {!! Form::submit('Забронировать', ['class' => 'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection

