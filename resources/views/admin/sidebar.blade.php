<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{route('home')}}">
                        <img src="../../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{route('home')}}" class="nav-link">Torex</a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#home" data-bs-toggle="collapse"
                   aria-expanded="{{ (request()->is('slider','slider_show','info_create_update','info_show')) ? 'true' : 'false'}}"
                   class="dropdown-toggle collapsed">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-hash">
                            <line x1="4" y1="9" x2="20" y2="9"></line>
                            <line x1="4" y1="15" x2="20" y2="15"></line>
                            <line x1="10" y1="3" x2="8" y2="21"></line>
                            <line x1="16" y1="3" x2="14" y2="21"></line>
                        </svg>
                        <span>Главная страница</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (request()->is('slider','slider_show','info_create_update','info_show')) ? 'show' : ''}} "
                    id="home"
                    data-bs-parent="#accordionExample">
                    <li>
                        <a href="#level-three" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('slider','slider_show')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Слайдер
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('slider','slider_show')) ? 'show' : ''}}"
                            id="level-three" data-bs-parent="#pages">
                            <li class="{{ (request()->is('slider')) ? 'active' : ''}}">

                                <a href="{{route('slider')}}"> Создание </a>
                            </li>
                            <li class="{{ (request()->is('slider_show')) ? 'active' : ''}}">
                                <a href="{{route('slider_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_info" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('info_create_update','info_show')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Инфоблок
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('info_create_update','info_show')) ? 'show' : ''}}"
                            id="level-three_info" data-bs-parent="#pages">
                            <li class="{{ (request()->is('info_create_update')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Создание </a>
                            </li>
                            <li class="{{ (request()->is('info_show')) ? 'active' : ''}}">
                                <a href="{{route('info_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_discount" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('qwe')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Новинки/Акции
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('qwe')) ? 'show' : ''}}"
                            id="level-three_discount" data-bs-parent="#pages">
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Создание </a>
                            </li>
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_banner" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('qwe')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Баннер
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('qwe')) ? 'show' : ''}}"
                            id="level-three_banner" data-bs-parent="#pages">
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Создание </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_text" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('qwe')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Инфо-Блог
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('qwe')) ? 'show' : ''}}"
                            id="level-three_text" data-bs-parent="#pages">
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Создание </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_news" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('qwe')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Новости
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('qwe')) ? 'show' : ''}}"
                            id="level-three_news" data-bs-parent="#pages">
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_partners" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->is('qwe')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Партнеры
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->is('qwe')) ? 'show' : ''}}"
                            id="level-three_partners" data-bs-parent="#pages">
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Создать </a>
                            </li>
                            <li class="{{ (request()->is('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
