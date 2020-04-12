@extends('admin.layouts.default')
@section('title_admin', 'Слайдер')
@section('content_admin')
    <div id="layoutSidenav_content">
        <div class="card mb-4">
            @if ($message = Session::get('succsess'))
                <div class="alert alert-success text-center font-weight-bold">{{ $message }}</div>
            @endif
            <a class="btn btn-primary btn-lg" href="{{ route('admin.sliders.create') }}" role="button">Добавить новый элемент в сладер</a>
            <div class="card-header"><i class="fas fa-table mr-1"></i>Элементы слайдера</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Фото</th>
                            <th>Заголовок</th>
                            <th>Описание</th>
                            <th>Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td><img class="img-fluid" width="500" src="{{ URL::to('/') }}/storage/{{ $slider->image }}" alt="photo"></td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->text }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.sliders.edit', $slider) }}" role="button"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['url' => route('admin.sliders.destroy', $slider), 'method' => 'DELETE']) !!}
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

