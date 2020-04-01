@extends('admin.layouts.default')
@section('title_admin', 'Услуги')
@section('content_admin')
    <div id="layoutSidenav_content">
        <main>
            <div class="card mb-4">
                <div class="container-fluid px-0 py-0">
                    <div class="row">
                        <div class="alert alert-primary col-12 text-center font-weight-bold" role="alert">
                        Услуга добавлена успешно!
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 pt-5 text-center">
                            <h1>Добавление новой услуги</h1>
                        </div>
                    </div>
                    <div class="row">
                    <main class="col-12 col-md-9 col-xl-8 py-md-5 px-md-5 bd-content m-auto" role="main">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Название</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Название услуги" aria-label="service_name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Стоимость</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Стоимисть" aria-label="service_price" aria-describedby="basic-addon2">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Добавить</button>
                    </main>
                    </div>
                    <div class="row">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->price }}</td>
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
