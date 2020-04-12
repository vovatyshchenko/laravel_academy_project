
@extends('admin.layouts.default')
@section('title_admin', 'Редактирование элемента слайдера')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4 m-auto">
            <h1 class="card-header">Редактирование элемента слайдера</h1>
            <div class="card-body m-auto">
                {!! Form::open(['url' => route('admin.sliders.update', $slider), 'method' => 'PUT', 'files' => true]) !!}
                @include('admin.sliders.blocks.form.edit')
                <div class="form-group">
                    {!! Form::submit('Редактировать', ['class' => 'btn btn-success']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div><!--<div id="layoutSidenav">-->
@endsection


