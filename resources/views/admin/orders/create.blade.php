@extends('admin.layouts.default')
@section('title_admin', 'Добавление нового работника')
@section('content_admin')
    <div id="layoutSidenav_content">
    <div class="card mb-4">
        <div class="container-fluid px-0 py-0">
            <div class="row">
                <div class="alert alert-primary col-12 text-center font-weight-bold" role="alert">
                    Работник добавлен успешно!
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <main class="col-12 col-md-9 col-xl-8 py-md-5 px-md-5 bd-content m-auto" role="main">
                    <div class="row">
                        <div class="col-12 pt-5 text-center">
                            <h1>Добавление нового работника</h1>
                        </div>
                    </div>
                    <div class="row">
                        {!! Form::open(['url' => route('admin.masters.store')]) !!}
                        @include('admin.masters.blocks.form.index')
                        <div class="form-group">
                            {!! Form::submit('Добавить', ['class' => 'btn btn-success']); !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
            </div>
        </main>
    </div>
</div><!--<div id="layoutSidenav">-->
@endsection

