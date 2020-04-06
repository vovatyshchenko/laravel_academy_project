@extends('admin.layouts.default')
@section('title_admin', 'Запись')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Запись</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Дата заявки</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Мастер</th>
                            <th>Услуга</th>
                            <th>Дата</th>
                            <th>Время</th>
                            <th>Стоимость</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Дата заявки</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Мастер</th>
                            <th>Услуга</th>
                            <th>Дата</th>
                            <th>Время</th>
                            <th>Стоимость</th>
                            <th>Редактирование</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->tel }}</td>
                                    <td>{{ $order->master }}</td>
                                    <td>{{ $order->service }}</td>
                                    <td>{{ $order->date }}</td>
                                    <td>{{ $order->time }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm mb-1" href="{{ route('admin.orders.edit', $order) }}" role="button"><i class="fas fa-edit"></i></a>
                                        {!! Form::open(['url' => route('admin.orders.destroy', $order), 'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-outline-danger btn-sm mt-1" onclick="return confirm('Вы действительно хотите удалить эту запись?')"><i class="far fa-trash-alt"></i></button>
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $orders->links() }}
        </div>
    </div>
</div><!--<div id="layoutSidenav">-->
@endsection



