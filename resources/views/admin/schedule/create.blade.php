@extends('admin.layouts.default')
@section('title_admin', 'Добавление работника в график')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4 m-auto">
            <h1 class="card-header">Добавление работника в график</h1>
            <div class="card-body m-auto">
                {!! Form::open(['url' => route('admin.schedule.store')]) !!}
                @include('admin.schedule.blocks.form.create')
                <div class="form-group">
                    {!! Form::submit('Добавить', ['class' => 'btn btn-success']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!--<div id="layoutSidenav">-->
@endsection


