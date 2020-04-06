@extends('admin.layouts.default')
@section('title_admin', 'Персонал')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.masters.create') }}" role="button">Добавить нового работника</a>
            <div class="card-header"><i class="fas fa-table mr-1"></i>Персонал</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Дата рождения</th>
                            <th>Специализация</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($masters as $master)
                                <tr>
                                    <td>{{ $master->surname }}</td>
                                    <td>{{ $master->name }}</td>
                                    <td>{{ $master->patronymic }}</td>
                                    <td>{{ $master->b_day }}</td>
                                    <td>{{ $master->position->name }}</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.masters.edit', $master) }}" role="button"><i class="fas fa-edit"></i></a>
                                        {!! Form::open(['url' => route('admin.masters.destroy', $master), 'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-outline-danger btn-sm mt-1" onclick="return confirm('Вы действительно хотите удалить эту запись?')"><i class="far fa-trash-alt"></i></button>
                                        {!!Form::close()!!}
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


