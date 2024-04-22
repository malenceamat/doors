<style>
    #sidebar ul.menu-categories.ps {
        height: auto !important;
    }
</style>
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{route('home')}}">
                        <img src={{asset("src/assets/img/logo.svg")}} class="navbar-logo" alt="logo">
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
                   aria-expanded="{{ (request()->routeIs('partners_show','partners','slider','slider_show','info_create_update','info_show','blog')) ? 'true' : 'false'}}"
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
                <ul class="collapse submenu list-unstyled {{ (request()->routeIs('partners_show','partners','slider','slider_show','info_create_update','info_show','banner','blog')) ? 'show' : ''}} "
                    id="home"
                    data-bs-parent="#accordionExample">
                    <li>
                        <a href="#level-three" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->routeIs('slider','slider_show')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Слайдер
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->routeIs('slider','slider_show')) ? 'show' : ''}}"
                            id="level-three" data-bs-parent="#pages">
                            <li class="{{ (request()->routeIs('slider')) ? 'active' : ''}}">

                                <a href="{{route('slider')}}"> Создание </a>
                            </li>
                            <li class="{{ (request()->routeIs('slider_show')) ? 'active' : ''}}">
                                <a href="{{route('slider_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_info" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->routeIs('info_create_update','info_show')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Инфоблок
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->routeIs('info_create_update','info_show')) ? 'show' : ''}}"
                            id="level-three_info" data-bs-parent="#pages">
                            <li class="{{ (request()->routeIs('info_create_update')) ? 'active' : ''}}">
                                <a href="{{route('info_create_update')}}"> Создание </a>
                            </li>
                            <li class="{{ (request()->routeIs('info_show')) ? 'active' : ''}}">
                                <a href="{{route('info_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_discount" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->routeIs('qwe')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Новинки/Акции
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->routeIs('qwe')) ? 'show' : ''}}"
                            id="level-three_discount" data-bs-parent="#pages">
                            <li class="{{ (request()->routeIs('qwe')) ? 'active' : ''}}">
                                <a href="{{route('info_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_banner" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->routeIs('banner')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Баннер
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->routeIs('banner')) ? 'show' : ''}}"
                            id="level-three_banner" data-bs-parent="#pages">
                            <li class="{{ (request()->routeIs('banner')) ? 'active' : ''}}">
                                <a href="{{route('banner')}}"> Создание </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_text" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->routeIs('blog')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Блог
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->routeIs('blog')) ? 'show' : ''}}"
                            id="level-three_text" data-bs-parent="#pages">
                            <li class="{{ (request()->routeIs('blog')) ? 'active' : ''}}">
                                <a href="{{route('blog')}}"> Создание </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#level-three_partners" data-bs-toggle="collapse"
                           aria-expanded="{{ (request()->routeIs('partners')) ? 'true' : 'false'}}"
                           class="dropdown-toggle collapsed"> Партнеры
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled sub-submenu {{ (request()->routeIs('partners_show','partners')) ? 'show' : ''}}"
                            id="level-three_partners" data-bs-parent="#pages">
                            <li class="{{ (request()->routeIs('partners')) ? 'active' : ''}}">
                                <a href="{{route('partners')}}"> Создать </a>
                            </li>
                            <li class="{{ (request()->routeIs('partners_show')) ? 'active' : ''}}">
                                <a href="{{route('partners_show')}}"> Обзор </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#layouts" data-bs-toggle="collapse"
                   aria-expanded="{{ (request()->routeIs('pay_delivery_index')) ? 'true' : 'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-terminal">
                            <polyline points="4 17 10 11 4 5"></polyline>
                            <line x1="12" y1="19" x2="20" y2="19"></line>
                        </svg>
                        <span> Оплата / Доставка </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (request()->routeIs('pay_delivery_index')) ? 'show' : ''}}"
                    id="layouts" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->routeIs('pay_delivery_index')) ? 'active' : '' }}">
                        <a href="{{route('pay_delivery_index')}}"> Настройка контента </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#about" data-bs-toggle="collapse"
                   aria-expanded="{{ (request()->routeIs('about_show')) ? 'true' : 'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-terminal">
                            <polyline points="4 17 10 11 4 5"></polyline>
                            <line x1="12" y1="19" x2="20" y2="19"></line>
                        </svg>
                        <span> О нас </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (request()->routeIs('about_show')) ? 'show' : ''}}"
                    id="about" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->routeIs('about_show')) ? 'active' : '' }}">
                        <a href="{{route('about_show')}}"> Настройка контента </a>
                    </li>
                </ul>
            </li>
        </ul>



        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#news" data-bs-toggle="collapse"
                   aria-expanded="{{ (request()->routeIs('news_index','news_show')) ? 'true' : 'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-terminal">
                            <polyline points="4 17 10 11 4 5"></polyline>
                            <line x1="12" y1="19" x2="20" y2="19"></line>
                        </svg>
                        <span> Новости </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (request()->routeIs('news_index','news_show')) ? 'show' : ''}}"
                    id="news" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->routeIs('news_index')) ? 'active' : '' }}">
                        <a href="{{route('news_index')}}"> Создание </a>
                    </li>
                    <li class="{{ (request()->routeIs('news_show')) ? 'active' : '' }}">
                        <a href="{{route('news_show')}}"> Обзор </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#contacts" data-bs-toggle="collapse"
                   aria-expanded="{{ (request()->routeIs('contact_index')) ? 'true' : 'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-terminal">
                            <polyline points="4 17 10 11 4 5"></polyline>
                            <line x1="12" y1="19" x2="20" y2="19"></line>
                        </svg>
                        <span> Контакты </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (request()->routeIs('contact_index')) ? 'show' : ''}}"
                    id="contacts" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->routeIs('contact_index')) ? 'active' : '' }}">
                        <a href="{{route('contact_index')}}"> Настройка контента </a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>
</div>
