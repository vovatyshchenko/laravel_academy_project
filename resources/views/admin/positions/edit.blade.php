@extends('admin.layouts.default')
@section('title_admin', 'Редактирование специализации')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4 m-auto">
            <h1 class="card-header">Редактироване специализации</h1>
            <div class="card-body m-auto">
                {!! Form::open(['url' => route('admin.positions.update', $position), 'method' => 'PUT']) !!}
                @include('admin.positions.blocks.form.edit')
                <div class="form-group">
                    {!! Form::submit('Редактировать', ['class' => 'btn btn-success']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!--<div id="layoutSidenav">-->
@endsection


