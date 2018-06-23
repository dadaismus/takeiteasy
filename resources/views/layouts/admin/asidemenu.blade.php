<aside class="side-nav">
    <div class="logo-wrapper">
        <a href="/home">
            <div class="logo-title">Take It Easy</div>
            <div class="logo-subtitle">Pedidos a domicilio</div>
        </a>
        <div class="mobile-nav pull-right">
            <i class="fa fa-bars"></i>
        </div>
    </div>
    <div class="side-notification">
        <div class="notification-icon">
            <i class="fa fa-envelope-open"></i>
        </div>
        <div class="notification-icon">
            <div class="notification-badge bounceInDown animated timer" data-from="0" data-to="3">3</div>
            <i class="fa fa-bell"></i>
            <div class="notification-wrapper animated flipInY">
                <div class="notification-header">Notificationes <span class="notification-count">3</span></div>
                <div class="notification-body">
                    <a class="notification-list" href="">
                        <div class="notification-image">
                            <img src="/admin/images/asparagus.jpg">
                        </div>
                        <div class="notification-content">
                            <div class="notification-text"><strong>Chemao</strong> tiene un nuevo pedido</div>
                            <div class="notification-time">hace 1 minuto</div>
                        </div>
                    </a>
                    <a class="notification-list" href="">
                        <div class="notification-image">
                            <img src="/admin/images/chocolate.jpg">
                        </div>
                        <div class="notification-content">
                            <div class="notification-text"><strong>Asturiano</strong> tiene un nuevo pedido</div>
                            <div class="notification-time">hace 4 minutos</div>
                        </div>
                    </a>
                    <a class="notification-list" href="">
                        <div class="notification-image">
                            <img src="/admin/images/belts.jpg">
                        </div>
                        <div class="notification-content">
                            <div class="notification-text"><strong>Willys</strong> tiene un nuevo pedido</div>
                            <div class="notification-time">hace 26 minutos</div>
                        </div>
                    </a>
                </div>
                <div class="notification-footer">
                    <a href="">Ver más notificaciones</a>
                </div>
            </div>
        </div>
    </div>
    <div class="user-side-profile">
        <div class="user-image">
            <div class="user-on"></div>
            <img src="/admin/images/take.jpg">
        </div>
        <div class="clear">
            <div class="user-name">{{ Auth::user()->name }}</div>
            <div class="user-group">Administrador</div>
            <ul class="user-side-menu animated flipInY">
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
    <div class="main-menu-title">Menu</div>
    <div class="main-menu">
        <ul>
            <li>
                <a href="/home">
                    <i class="fa fa-bars"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-window-restore"></i>
                    <span>Pedidos</span>
                    <div class="badge badge-red pull-right">21</div>
                </a>
                <ul>
                    <li><a href="/orders/new">Nuevo pedido</a></li>
                    <li><a href="/orders/list">Todos los pedidos</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-calendar"></i>
                    <span>Usuarios</span>
                </a>
                <ul>
                    <li><a href="#">Nuevo usuario</a></li>
                    <li><a href="#">Ver usuarios</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="main-menu-title">Opciones de usuario</div>
    <div class="main-menu">
        <ul>
            <li>
                <a href="">
                    <i class="fa fa-paper-plane"></i>
                    <span>Cambiar contraseña</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-map-o"></i>
                    <span>Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</aside>