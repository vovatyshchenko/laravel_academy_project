@extends('layouts.default')
@section('title', 'Домашняя страница')
@section('content')
    <style>
        .master__img {
            width: 150px;
            border-radius: 80px;
        }
    </style>
    <div class="container-fluid">
        @if ($message = Session::get('succsess'))
            <div class="alert alert-success text-center font-weight-bold">{{ $message }}</div>
        @endif
    </div>
    <div class="container marketing mt-3">
        <div class="row">
            <h1 class="mx-auto">НАШИ МАСТЕРА</h1>
        </div>
        <div class="row">
            @foreach($masterName as $master)
                <div class="col-lg-4">
                    <img class="master__img" src="{{ URL::to('/') }}/storage/{{ $master->image }}" alt="photo">
                    <h2>{{ $master->surname }} {{ $master->name }}</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste itaque, qui. Asperiores atque deleniti ipsam optio porro provident ratione tempore. Amet aperiam dolor doloribus illo laborum quis sapiente tempora tempore.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Посмотреть детали &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->

        <div class="container marketing mt-3">
            <div class="row">
                <h1 class="mx-auto">Услуги</h1>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4">
                        <h2>{{ $service->name }}</h2>
                    <h4>{{ $service->price }} грн</h4>
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
@endsection

