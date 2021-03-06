<style>
    .header__icon:hover {
        opacity: .8;
    }
</style>
<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <div class="col-2 d-flex flex-column align-items-center">
            <a href="{{ route('index') }}" class="header__icon" id="to_top">
                <img class="header__icon" src="{{ URL::to('/') }}/storage/images/logos/mustache.png" alt="logo">
            </a>
            <div class="navbar-nav nav-item">
                <a class="nav-link" href="tel:+380501234567">+380501234567</a>
            </div>
        </div>
        <ul class="col-10 navbar-nav d-flex justify-content-end">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Обратная связь</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation') }}">Забронировать</a>
                </li>
                    <a class="nav-link" href="{{ url('/login') }}">Войти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Зарегистрироваться</a>
                </li>
            @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Обратная связь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation') }}">Забронировать</a>
                </li>
                @if(Auth::user()->name == 'Admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.') }}">Админ панель</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Выход</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
