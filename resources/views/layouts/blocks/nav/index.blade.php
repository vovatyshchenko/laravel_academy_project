<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}">Админ панель</a>
            </li>
        </ul>
    </div>
</nav>
