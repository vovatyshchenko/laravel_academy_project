@extends('layouts.default_admin')
@section('title_admin', 'Админка')
@section('content_admin')
    <div id="layoutSidenav_content">
        <main>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Сводная таблица</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Мастер</th>
                                    <th>Услуга</th>
                                    <th>Дата</th>
                                    <th>Время</th>
                                    <th>Стоимость</th>
                                    <th>Выполненно</th>
                                    <th>Удалить</th>
                                    <th>Редактировать</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Мастер</th>
                                    <th>Услуга</th>
                                    <th>Дата</th>
                                    <th>Время</th>
                                    <th>Стоимость</th>
                                    <th>Выполненно</th>
                                    <th>Удалить</th>
                                    <th>Редактировать</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->tel }}</td>
                                        <td>{{ $order->master }}</td>
                                        <td>{{ $order->service }}</td>
                                        <td>{{ $order->data }}</td>
                                        <td>{{ $order->time }}</td>
                                        <td>{{ $order->price }}</td>
                                        <td><button type="button" class="btn btn-outline-success">Выполненно</button></td>
                                        <td><button type="button" class="btn btn-outline-danger">Удалить</button></td>
                                        <td><button type="button" class="btn btn-outline-primary">Редактировать</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
