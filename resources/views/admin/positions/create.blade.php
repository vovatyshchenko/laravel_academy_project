@extends('admin.layouts.default')
@section('title_admin', 'Добавление новой специализации')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4 m-auto">
            <h1 class="card-header">Добавление новой специализации</h1>
            <div class="card-body m-auto">
                {!! Form::open(['url' => route('admin.positions.store')]) !!}
                @include('admin.positions.blocks.form.create')
                <div class="form-group">
                    {!! Form::submit('Добавить', ['class' => 'btn btn-success']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!--<div id="layoutSidenav">-->
@endsection


