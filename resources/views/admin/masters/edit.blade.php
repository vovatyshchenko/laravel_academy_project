@extends('admin.layouts.default')
@section('title_admin', 'Редактирование нового работника')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4 m-auto">
            <h1 class="card-header">Редактирование работника</h1>
            <div class="card-body m-auto">
                {!! Form::open(['url' => route('admin.masters.update', $master->id)]) !!}
                @include('admin.masters.blocks.form.edit')
                <div class="form-group">
                    {!! Form::submit('Добавить', ['class' => 'btn btn-success']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div><!--<div id="layoutSidenav">-->
@endsection
