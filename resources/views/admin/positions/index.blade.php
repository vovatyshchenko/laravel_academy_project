@extends('admin.layouts.default')
@section('title_admin', 'График')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.positions.create') }}" role="button">Добавить новую специализацию</a>
            <div class="card-header"><i class="fas fa-table mr-1"></i>Специализации</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($positions as $position)
                            <tr>
                                <td>{{ $position->name }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.positions.edit', $position) }}" role="button"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['url' => route('admin.positions.destroy', $position), 'method'=>'DELETE']) !!}
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



