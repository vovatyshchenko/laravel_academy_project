@extends('layouts.default')
@section('title', 'Барбершоп')
@section('content')
    <!--Slider-->
    <div class="container-fluid px-0" id="app">
        @if ($message = Session::get('succsess'))
            <div class="alert alert-success text-center font-weight-bold mb-0">{{ $message }}</div>
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
    <!-- Masters -->
    <section class="section">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle" data-aos="slide-left" data-aos>Our team</h3>
                <h2 class="section__title" data-aos="slide-right" data-aos>наша команда</h2>
                <div class="section__text" data-aos="zoom-in" data-aos>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="cards">
                @foreach($masters as $master)
                    <div class="cards__item">
                        <div class="cards__inner">
                            <div class="cards__img">
                                <img src="{{ URL::to('/') }}/storage/{{ $master->image }}" alt="photo">
                            </div>
                            <div class="cards__text">
                                <div class="social">
                                    <a class="social__item" href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="social__item" href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="social__item" href="#" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                    <a class="social__item" href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cards__info">
                            <div class="cards__name">{{ $master->name }}</div>
                            <div class="cards__prof">{{ $master->position->name }}</div>
                        </div>
                    </div><!-- /.cards__item -->
                @endforeach
            </div><!-- /.cards -->
        </div><!-- /.container -->
    </section>
    <!-- Logos -->
    <section class="section section--gray">
        <div class="container">
            <div class="logos">
                <div class="logos__item">
                    <img class="logos__img" src="{{ URL::to('/') }}/storage/images/logos/1.png" alt="logo">
                </div>
                <div class="logos__item">
                    <img class="logos__img" src="{{ URL::to('/') }}/storage/images/logos/2.png" alt="logo">
                </div>
                <div class="logos__item">
                    <img class="logos__img" src="{{ URL::to('/') }}/storage/images/logos/3.png" alt="logo">
                </div>
                <div class="logos__item">
                    <img class="logos__img" src="{{ URL::to('/') }}/storage/images/logos/4.png" alt="logo">
                </div>
                <div class="logos__item">
                    <img class="logos__img" src="{{ URL::to('/') }}/storage/images/logos/5.png" alt="logo">
                </div>
                <div class="logos__item">
                    <img class="logos__img" src="{{ URL::to('/') }}/storage/images/logos/6.png" alt="logo">
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="section" id="services">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle" data-aos="slide-left" data-aos>Services</h3>
                <h2 class="section__title" data-aos="slide-right" data-aos>Услуги</h2>
            </div>
            <div class="services">
                @foreach($services as $service)
                    <div class="services__item  services__item--border">
                        <div class="services__title">{{ $service->name }} {{ $service->price }} грн</div>
                        <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                    </div>
                @endforeach
            </div>
        </div><!-- /.container -->
    </section>
@endsection
