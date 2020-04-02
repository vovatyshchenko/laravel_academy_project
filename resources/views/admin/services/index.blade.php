@extends('admin.layouts.default')
@section('title_admin', 'Услуги')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.services.create') }}" role="button">Добавить новую услугу</a>
            <div class="card-header"><i class="fas fa-table mr-1"></i>Услуги</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Название услуги</th>
                            <th>Цена</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->price }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="#" role="button">Редактировать</a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Удалить</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--<div id="layoutSidenav">-->
@endsection

