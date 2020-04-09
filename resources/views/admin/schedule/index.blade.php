@extends('admin.layouts.default')
@section('title_admin', 'График')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4">
            @if ($message = Session::get('succsess'))
                <div class="alert alert-success text-center font-weight-bold">{{ $message }}</div>
            @endif
            <a class="btn btn-primary btn-lg" href="{{ route('admin.schedule.create') }}" role="button">Добавить работника в график</a>
            <div class="card-header"><i class="fas fa-table mr-1"></i>График</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Дата</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->master->name }}</td>
                                <td>{{ $schedule->date }}</td>
                                <td>
                                    {!! Form::open(['url' => route('admin.schedule.destroy', $schedule), 'method'=>'DELETE']) !!}
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



