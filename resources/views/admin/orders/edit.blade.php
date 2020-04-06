@extends('admin.layouts.default')
@section('title_admin', 'Редактирование записи')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4 m-auto">
            <h1 class="card-header">Редактирование записи</h1>
            <div class="card-body m-auto">
                {!! Form::open(['url' => route('admin.orders.update', $order), 'method' => 'PUT']) !!}
                @include('admin.orders.blocks.form.edit')
                <div class="form-group">
                    {!! Form::submit('Редактировать', ['class' => 'btn btn-success']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div><!--<div id="layoutSidenav">-->
@endsection
