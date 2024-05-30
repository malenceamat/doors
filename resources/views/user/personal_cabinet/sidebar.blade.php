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
    </div>
    <div class="push40 hidden-xs hidden-sm"></div>
</div>
