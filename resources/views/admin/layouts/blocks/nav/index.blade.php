<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Админ панель</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('index') }}">На главную</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Выход
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Общие настройки</div>
                            <a class="nav-link" href="{{ route('admin.masters.index') }}">
                                <span class="sb-nav-link-icon"><i class="fas fa-users"></i></span>Персонал
                            </a>
                            <a class="nav-link" href="{{ route('admin.services.index') }}">
                                <span class="sb-nav-link-icon"><i class="fas fa-concierge-bell"></i></span>Услуги
                            </a>
                            <a class="nav-link" href="{{ route('admin.positions.index') }}">
                                <span class="sb-nav-link-icon"><i class="fas fa-user-tag"></i></span>Специализация
                            </a>
                            <a class="nav-link" href="{{ route('admin.sliders.index') }}">
                                <span class="sb-nav-link-icon"><i class="fas fa-user-tag"></i></span>Сладер
                            </a>
                            <div class="sb-sidenav-menu-heading">График работы</div>
                            <a class="nav-link" href="{{ route('admin.schedule.index') }}">
                                <span class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></span>График
                            </a>
                            <div class="sb-sidenav-menu-heading">Клиенты</div>
                             <a class="nav-link" href="{{ route('admin.orders.index') }}">
                                 <span class="sb-nav-link-icon"><i class="fas fa-table"></i></span>Запись
                             </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Вы вошли как:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
