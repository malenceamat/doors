<div class="col-md-3">
    <div class="aside">
        <nav class="aside-menu hidden-xs hidden-sm">
            <ul>
                <li class="{{ request()->routeIs('favorites') ? 'active down' : '' }}">
                    <a href="{{route ('favorites')}}">Избранное</a>
                </li>

                <li class="{{ request()->routeIs('basket') ? 'active down' : '' }}">
                    <a href="{{route ('basket') }}">Корзина</a>
                </li>

                <li class="{{ request()->routeIs('order') ? 'active down' : '' }}">
                    <a href="{{route ('order')}}">Заказы</a>
                </li>

                <li class="{{ request()->routeIs('feedback') ? 'active down' : '' }}">
                    <a href="{{route ('feedback')}}">Отзывы</a>
                </li>
            </ul>
        </nav>
        <nav class="aside-menu hidden-xs hidden-sm">
            <ul>
                <li class="{{ request()->routeIs('account_settings') ? 'active down' : '' }}">
                    <a href="{{route ('account_settings') }}">Настройка аккаунта</a>
                </li>
            </ul>
        </nav>
        <nav class="aside-menu hidden-xs hidden-sm">
            <ul>
                <li class="{{ request()->routeIs('account_settings') ? 'active down' : '' }}">
                    <div class="dropdown-item">
                        <a onclick="document.getElementById('logout').submit();return false;" style="cursor: pointer">
                            <span style="user-select: none">Выход</span>
                        </a>

                        <form id="logout" method="POST" action="{{ route('logout') }}" style="display: none">
                            @csrf
                            <button style="width: 90%;" class="btn btn-warning btn-lg">Выйти из аккаунта</button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="push40 hidden-xs hidden-sm"></div>
</div>
