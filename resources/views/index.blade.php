@extends('layouts.default')
@section('title', 'Домашняя страница')
@section('content')
    <div class="container-fluid" id="app">
        @if ($message = Session::get('succsess'))
            <div class="alert alert-success text-center font-weight-bold">{{ $message }}</div>
        @endif
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($sliders as $slider)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration-1 }}" class="target active"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::to('/') }}/storage/{{ $slider->image }}" alt="photo">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>{{ $slider->title }}</h3>
                        <p>{{ $slider->text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container marketing mt-3">
        <div class="row">
            <h1 class="mx-auto my-5">НАШИ МАСТЕРА</h1>
        </div>
        <div class="row">
            @foreach($masters as $master)
                <div class="col-lg-4">
                    <img class="master__img" src="{{ URL::to('/') }}/storage/{{ $master->image }}" alt="photo">
                    <h2>{{ $master->surname }} {{ $master->name }}</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste itaque, qui. Asperiores atque deleniti ipsam optio porro provident ratione tempore. Amet aperiam dolor doloribus illo laborum quis sapiente tempora tempore.</p>
                    {{--<p><a class="btn btn-secondary" href="#" role="button">Посмотреть детали &raquo;</a></p>--}}
                </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
        <div class="container marketing mt-3">
            <div class="row">
                <h1 class="mx-auto my-5">Услуги</h1>
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

