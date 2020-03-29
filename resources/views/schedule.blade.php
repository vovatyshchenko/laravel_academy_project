@extends('layouts.default_admin')
@section('title_admin', 'График')
@section('content_admin')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-0 py-0">
                <div class="row">
                    <div class="alert alert-primary col-12 text-center font-weight-bold" role="alert">
                        Запись добавлена успешно!
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 text-center">
                        <h1>Добавление мастера в график</h1>
                    </div>
            </div>
                <div class="row">
        <main class="col-12 col-md-9 col-xl-8 py-md-5 px-md-5 bd-content m-auto" role="main">
        <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Мастер</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01">
        @foreach($masterName as $master)
            <option value={{ $loop->iteration }}</option>{{ $master->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon2">Дата</span>
      </div>
      <input type="text" name="data" value="03/27/2020" class="form-control" aria-label="staff_data" aria-describedby="basic-addon2">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Добавить</button>
    </main>
    </div>
                <div class="row">
        <div class="card mb-4 col-12">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Таблица график работы</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Дата</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->name }}</td>
                                <td>{{ $schedule->data }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
            </div>
        </main>
    </div>
@endsection