<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Bar Shop <i class="far fa-glass-cheers"></i></li>
            <li><a href="{{route('tienda')}}" class="active">Tienda</a></li>

        </ul>
    </div>
    @auth
    <div class="top-bar-right">
        <ul class="menu">
                <li><a href="{{route('admin')}}">Admin</a></li>
                <li><a onclick="document.getElementById('logout').submit()" class="alert button" href="#">Cerrar sesión</a></li>
            <form id="logout" action="{{route('logout')}}" method="POST">@csrf</form>
        </ul>
    </div>
    @endauth
</div>
