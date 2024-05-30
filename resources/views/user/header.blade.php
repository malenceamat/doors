<div class="header">
    <div class="top-bar-push"></div>
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="inner white">
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <div class="header-social social-links">
                            <a href="#" class="vk_link"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="header-search">
                            {{--<form data-key="6cf13f73d25473a2919817c123642d9573852a03"
                                  action="https://doorsfull.demoultron.ru/sluzhebnyie-straniczyi/rezultatyi-poiska"
                                  method="get" id="mse2_form">
                                <input type="text" placeholder="Поиск по каталогу" name="query" value=""/>
                                <input type="submit"/>
                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="inner relative">
                <div class="logo">
                    <div class="table">
                        <div class="table-cell">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/site/logo.png')}}" alt="Шаблон интернет магазина дверей"
                                     data-retinasrc="/images/site/logo2x.png">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="header-tel">
                    <div class="table">
                        <div class="table-cell">
                            <div class="header-tel-1">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="phone-alt"
                                     role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x">
                                    <path fill="currentColor"
                                          d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z"
                                          class=""></path>
                                </svg>
                                <a href="tel:+71234445566">+7 (123) 444-55-66</a>
                            </div>
                            {{--<div class="callback-link-wrap text-right-sm">
                                <a href="{{route ('account_settings')}}" style="border-bottom: 1px dashed" >Войти</a>
                            </div>--}}
                            @if(isset($check_role))
                                <div class="callback-link-wrap text-right-sm">
                                    <a href="{{route ('account_settings')}}" style="border-bottom: 1px dashed" >Здравствуйте, {{$check_role->name}}</a>
                                </div>
                            @else
                                <div class="callback-link-wrap text-right-sm">
                                    <a href="{{route ('account_settings')}}" style="border-bottom: 1px dashed" >Вход</a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="header-info">
                    <div class="table">
                        <div class="table-cell">
                            <div class="header-address">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="map-marker-alt"
                                     role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                     class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-2x">
                                    <path fill="currentColor"
                                          d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z"
                                          class=""></path>
                                </svg>
                                г. Москва, ул. Калужская, 80, офис 315
                            </div>
                            <div class="visible-xs"></div>
                            <div class="schedule">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     class="svg-inline--fa fa-clock fa-w-16 fa-2x">
                                    <path fill="currentColor"
                                          d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                          class=""></path>
                                </svg>
                                Пн - Пт: c 8.00 - 19.00 Сб - Вс: c 9.00 - 15.00
                            </div>
                            <div class="visible-xs"></div>
                        </div>
                    </div>
                </div>
                <div class="header-search visible-xs">
                    <form data-key="6cf13f73d25473a2919817c123642d9573852a03"
                          action="https://doorsfull.demoultron.ru/sluzhebnyie-straniczyi/rezultatyi-poiska" method="get"
                          id="mse2_form">
                        <input type="text" placeholder="Поиск по каталогу" name="query" value=""/>
                        <input type="submit"/>
                    </form>
                </div>

                <div class="header-social social-links visible-xs">
                    <a href="#" class="vk_link"><i class="fa fa-vk" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="top-bar fix-true ">
        <div class="top-bar-container">
            <div class="inner relative">
                <div class="mob-menu-btn hidden-lg hidden-md">
                    <span class="icon-menu-burger">
                        <span class="icon-menu-burger__line"></span>
                    </span>
                </div>
                <nav class="mobile-menu">
                    <ul class="">
                        <li class="first down">
                            <a href="{{route('catalog')}}" class="catalog-link">
                                <span>Каталог товаров</span>
                            </a>
                            <span class="dropdown-button"></span>
                            <ul class="">
                                @foreach($category as $cat)
                                    <li @if(isset($cat->sub_category[0])) class="first down" @endif>
                                        @if(($cat->parent_id == null))
                                            <a href="{{route('products_filters_list', ['name' => $cat['name'], 'id' => $cat['id']])}}">
                                                <span>{{$cat['name']}}</span>
                                            </a>
                                            @if(isset($cat->sub_category[0]))
                                                <ul>
                                                    @foreach($cat->sub_category as $data)
                                                        <li>
                                                            <a href="{{route('product_sub_category', ['name' => $cat['name'], 'sub_name' => $data['name']])}}">
                                                                <span>{{$data->name}}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{request()->routeIs('pay_delivery') ? 'active' : '' }}">
                            <a href="{{route('pay_delivery')}}">
                                <span>Оплата и доставка</span>
                            </a>
                        </li>
                        <li class="{{request()->routeIs('about_index') ? 'active' : ''}}">
                            <a href="{{route('about_index')}}">
                                <span>О нас</span>
                            </a>
                        </li>
                        <li class="{{request()->routeIs('news','news_index_id') ? 'active' : ''}}">
                            <a href="{{route('news')}}">
                                <span>Новости</span>
                            </a>
                        </li>
                        <li class="{{request()->routeIs('contacts') ? 'active' : ''}}">
                            <a href="{{route('contacts')}}">
                                <span>Контакты</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="top-menu">
                    <ul class="">
                        <li class="first down">
                            <a href="{{route('catalog')}}" class="catalog-link">
                                <span>Каталог товаров</span>
                            </a>
                            <ul class="">
                                @foreach($category as $cat)
                                    <li @if(isset($cat->sub_category[0])) class="first down" @endif>
                                        @if(($cat->parent_id == null))
                                            <a href="{{route('products_filters_list', ['name' => $cat['name'], 'id' => $cat['id']])}}">
                                            <span>{{$cat['name']}}</span>
                                            </a>
                                            @if(isset($cat->sub_category[0]))
                                                <ul>
                                                    @foreach($cat->sub_category as $data)
                                                        <li>
                                                            <a href="{{route('product_sub_category', ['name' => $cat['name'], 'sub_name' => $data['name']])}}">
                                                                <span>{{$data->name}}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{request()->routeIs('pay_delivery') ? 'active' : '' }}">
                            <a href="{{route('pay_delivery')}}">
                                <span>Оплата и доставка</span>
                            </a>
                        </li>
                        <li class="{{request()->routeIs('about_index') ? 'active' : ''}}">
                            <a href="{{route('about_index')}}">
                                <span>О нас</span>
                            </a>
                        </li>
                        <li class="{{request()->routeIs('news','news_index_id') ? 'active' : ''}}">
                            <a href="{{route('news')}}">
                                <span>Новости</span>
                            </a>
                        </li>
                        <li class="{{request()->routeIs('contacts') ? 'active' : ''}}">
                            <a href="{{route('contacts')}}">
                                <span>Контакты</span>
                            </a>
                        </li>
                    </ul>
                    <div class="cleaner"></div>
                </div>
                <div class="header-favorites">
                    <a href="{{route ('favorites')}}" class="absolute msfavorites"></a>
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                         class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                        <path fill="currentColor"
                              d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2
                                 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6
                                 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4
                                 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7
                                 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                              class="">
                        </path>
                    </svg>
                    {{--<span class="favorites_count msfavorites msfavorites-total" data-data-list="default"
                          data-data-type="resource" data-value="0">0</span>--}}
                </div>
                <div class="header-cart text-center relative">
                    <div id="msMiniCart" class="">
                        <div class="empty">
                            <a href="{{route ('basket')}}" class="absolute msfavorites"></a>
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-cart"
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                 class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x">
                                <path fill="currentColor"
                                      d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373
                                         0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314
                                         144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0
                                         0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346
                                         0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384
                                         485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592
                                         77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32
                                         32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355
                                         32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"
                                      class="">
                                </path>
                            </svg>
                            {{--<span>0</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-bar-push-md cleaner visible-md visible-lg"></div>
</div>
