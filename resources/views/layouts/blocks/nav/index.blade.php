<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">О нас</a>
                </li>
                <li class="nav-item">
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
                    <a class="nav-link" href="{{ route('about') }}">О нас</a>
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
