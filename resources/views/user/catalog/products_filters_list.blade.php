@extends('user.general')
@section('products_filters_list')
    <div class="middle" id="middlesection">
        <div class="container">
            <h1 class="pagetitle" style="margin-top: 20px"> {{$category_show['name']}} </h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="aside">
                        <nav class="aside-menu hidden-xs hidden-sm">
                            <ul>
                                @foreach($category as $data)
                                    @if($data->parent == null)
                                        <li @if(count($data->sub_category) > 0 ) class="active down" @endif>
                                            <a href="{{route('products_filters_list', ['name' => $data['name']])}}">{{$data['name']}}</a>
                                            <ul>
                                                @foreach($data->sub_category as $cat)
                                                    <li class="down open">
                                                        <a href="{{route('products_filters_list', ['name' => $cat['name']])}}">{{$cat['name']}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                        <div class="aside-filters-block">
                            <div class="filters-form-title-xs visible-xs visible-sm">
                                Фильтры
                            </div>
                            <form class="filters-form" method="post" id="mse2_filters">
                                <div class="aside-filters-block-inner">
                                    <div class="filter-item active">
                                        <div class="filter-item-title">
                                            <div class="table">
                                                <div class="table-cell">
                                                    Цена
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-dropdown">
                                            <fieldset id="mse2_ms|price">
                                                <div class="number_slider_wrapper">
                                                    <div class="mse2_number_slider"></div>
                                                </div>
                                                <div class="push10"></div>
                                                <div class="mse2_number_inputs row min">
                                                    <div class="col-xs-6">
                                                        <div class="form-group relative">
                                                            <label for="mse2_ms|price_0">От</label>
                                                            <input type="text" name="ms|price" id="mse2_ms|price_0"
                                                                   value="0" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group relative">
                                                            <label for="mse2_ms|price_1">До</label>
                                                            <input type="text" name="ms|price" id="mse2_ms|price_1"
                                                                   value="24661" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="filter-item active">
                                        <div class="filter-item-title">
                                            <div class="table">
                                                <div class="table-cell">
                                                    Общая высота, см
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-dropdown">
                                            <div class="item-dropdown-inner">
                                                <div class="filter-customcheck-wrap" id="mse2_msoption|height_general">
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|height_general"
                                                               id="mse2_msoption|height_general_0" value="180"/>
                                                        <label for="mse2_msoption|height_general_0" class="">180</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|height_general"
                                                               id="mse2_msoption|height_general_1" value="200"/>
                                                        <label for="mse2_msoption|height_general_1" class="">200</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|height_general"
                                                               id="mse2_msoption|height_general_2" value="205"/>
                                                        <label for="mse2_msoption|height_general_2" class="">205</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter-item active">
                                        <div class="filter-item-title">
                                            <div class="table">
                                                <div class="table-cell">
                                                    Общая ширина, см
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-dropdown">
                                            <div class="item-dropdown-inner">
                                                <div class="filter-customcheck-wrap" id="mse2_msoption|width_general">
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|width_general"
                                                               id="mse2_msoption|width_general_0" value="80"/>
                                                        <label for="mse2_msoption|width_general_0" class="">80</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|width_general"
                                                               id="mse2_msoption|width_general_1" value="86"/>
                                                        <label for="mse2_msoption|width_general_1" class="">86</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|width_general"
                                                               id="mse2_msoption|width_general_2" value="96"/>
                                                        <label for="mse2_msoption|width_general_2" class="">96</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter-item active">
                                        <div class="filter-item-title">
                                            <div class="table">
                                                <div class="table-cell">
                                                    Общая толщина, см
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-dropdown">
                                            <div class="item-dropdown-inner">
                                                <div class="filter-customcheck-wrap" id="mse2_msoption|fatness_general">
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|fatness_general"
                                                               id="mse2_msoption|fatness_general_0" value="4.2"/>
                                                        <label for="mse2_msoption|fatness_general_0"
                                                               class="">4.2</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|fatness_general"
                                                               id="mse2_msoption|fatness_general_1" value="5.2"/>
                                                        <label for="mse2_msoption|fatness_general_1"
                                                               class="">5.2</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|fatness_general"
                                                               id="mse2_msoption|fatness_general_2" value="10.5"/>
                                                        <label for="mse2_msoption|fatness_general_2"
                                                               class="">10.5</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter-item active">
                                        <div class="filter-item-title">
                                            <div class="table">
                                                <div class="table-cell">
                                                    Покрытие
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-dropdown">
                                            <div class="item-dropdown-inner">
                                                <div class="filter-customcheck-wrap" id="mse2_msoption|coating">
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|coating"
                                                               id="mse2_msoption|coating_0" value="Металл"/>
                                                        <label for="mse2_msoption|coating_0" class="">Металл</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|coating"
                                                               id="mse2_msoption|coating_1" value="Панель МДФ"/>
                                                        <label for="mse2_msoption|coating_1" class="">Панель МДФ</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|coating"
                                                               id="mse2_msoption|coating_2" value="Сосна"/>
                                                        <label for="mse2_msoption|coating_2" class="">Сосна</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter-item active">
                                        <div class="filter-item-title">
                                            <div class="table">
                                                <div class="table-cell">
                                                    Направление открывания
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-dropdown">
                                            <div class="item-dropdown-inner">
                                                <div class="filter-customcheck-wrap" id="mse2_msoption|direction">
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|direction"
                                                               id="mse2_msoption|direction_0" value="Левый"/>
                                                        <label for="mse2_msoption|direction_0" class="">Левый</label>
                                                    </div>
                                                    <div class="filter-customcheck">
                                                        <input type="checkbox" name="msoption|direction"
                                                               id="mse2_msoption|direction_1" value="Правый"/>
                                                        <label for="mse2_msoption|direction_1" class="">Правый</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="push40 hidden-xs hidden-sm"></div>
                </div>
                <div class="col-md-9">
                    <div class="main-column">
                        <section class="catalog" id="mse2_mfilter">

                            <div class="catalog-header">
                                <div class="row min">
                                    <div class="col-sm-8 text-right-sm">
                                        <div class="mse2_sort_wrap">
                                            <div class="mse2_sort_header">
                                                <b>Сортировать:</b>
                                                <span class="mse2_sort_header_title">
                                                    <span class="element_text">По умолчанию</span>
                                                        <span class="element_arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                 height="6" fill="none" viewBox="0 0 11 6">
                                                                <path fill="#909093"
                                                                      d="M10.824.501l-.36-.335C10.35.062 10.2.004 10.038.004c-.16 0-.312.058-.425.162l-4.11 3.796-4.116-3.8C1.274.058 1.123 0 .962 0 .801 0 .65.058.536.162l-.36.333c-.235.217-.235.57 0 .786l4.9 4.54c.113.105.264.179.426.179h.002c.161 0 .312-.074.425-.178l4.895-4.529c.114-.104.176-.248.176-.397 0-.148-.062-.29-.176-.395z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                </span>
                                            </div>
                                            <div id="mse2_sort">
                                                <a href="../../index.html#" data-sort="resource|pagetitle"
                                                   data-default="asc" class="sort">По названию</a>
                                                <a href="../../index.html#" data-sort="ms|price" data-default="asc"
                                                   class="sort">По цене</a>
                                                <a href="../../index.html#" data-sort="ms|popular" data-dir=""
                                                   data-default="desc" class="sort">По популярности</a>
                                                <a href="../../index.html#" data-sort="resource|publishedon" data-dir=""
                                                   data-default="desc" class="sort">По дате добавления</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-right hidden-xs">
                                        <div class="view-catalog-btns">
                                            <span class="grid-view-btn active">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                         data-icon="th-large" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                         class="svg-inline--fa fa-th-large fa-w-16 fa-2x">
                                                        <path
                                                            fill="currentColor"
                                                            d="M296 32h192c13.255 0 24 10.745 24 24v160c0 13.255-10.745 24-24 24H296c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24zm-80 0H24C10.745 32 0 42.745 0 56v160c0 13.255 10.745 24 24 24h192c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24zM0 296v160c0 13.255 10.745 24 24 24h192c13.255 0 24-10.745 24-24V296c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm296 184h192c13.255 0 24-10.745 24-24V296c0-13.255-10.745-24-24-24H296c-13.255 0-24 10.745-24 24v160c0 13.255 10.745 24 24 24z"
                                                            class="">
                                                        </path>
                                                    </svg>
                                                </span>
                                            <span class="list-view-btn">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                     data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 448 512"
                                                     class="svg-inline--fa fa-bars fa-w-14 fa-2x">
                                                    <path
                                                        fill="currentColor"
                                                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                                                        class="">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row rows" id="mse2_results">
                                <div class="col-xs-6 col-sm-4">
                                    <div class="element relative">
                                        <form method="post" class="ms2_form">
                                            <input type="hidden" name="id" value="203">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="options" value="[]">
                                            <a class="absolute"
                                               href="dlya-doma/dver-vxodnaya-metallicheskaya-isoterma-11-sm-960-mm-pravaya-czvet-antik-listvennicza-mokko.html"></a>


                                            <div class="product-tags">

                                                <div class="product-tag-popular">Хит</div>

                                            </div>


                                            <div class="img-wrapper">
                                                <img class="element-img  active "
                                                     src={{asset("assets/images/products/203/253x192/49f7fc298ab3c6f211898182f56460806a55fc49.jpg")}} s
                                                     alt=""
                                                     data-retinasrc="/assets/images/products/203/506x384/49f7fc298ab3c6f211898182f56460806a55fc49.jpg"/>

                                            </div>
                                            <div class="element-content">
                                                <div class="element-article f12 text-left">Артикул: 51832931</div>
                                                <div class="title-h6">Дверь входная металлическая Isoterma</div>


                                                <div class="row min">
                                                    <div class="col-xs-6">
                                                        <div class="push14"></div>
                                                        <div class="price">
                                                            5 000 ₽
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <a class="msfavorites" data-click data-data-list="default"
                                                           data-data-type="resource" data-data-id="203">
                                <span class="msfavorites-noneactive" title="Добавить в избранное">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor"
                                                                                             d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                             class=""></path></svg>
                                </span>
                                                            <span class="msfavorites-active"
                                                                  title="Удалить из избранного">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                fill="currentColor"
                                                d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                  class="fa-primary"></path></g></svg>
                                </span>
                                                        </a>
                                                        <button class="to-cart" type="submit" name="ms2_action"
                                                                value="cart/add">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                 data-icon="shopping-basket" role="img"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 576 512"
                                                                 class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                <path fill="currentColor"
                                                                      d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                      class=""></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="one-click text-right">
                                                    <div class="push15"></div>
                                                    <a class="application-link fancyboxModal"
                                                       href="../../index.html#productapplication"
                                                       data-theme="Дверь входная металлическая Isoterma">Заказать в 1
                                                        клик</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="element relative">

                                        <form method="post" class="ms2_form">
                                            <input type="hidden" name="id" value="208">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="options" value="[]">
                                            <a class="absolute"
                                               href="texnicheskie/dver-vxodnaya-metallicheskaya.html"></a>


                                            <div class="product-tags">

                                                <div class="product-tag-popular">Хит</div>

                                            </div>


                                            <div class="img-wrapper">
                                                <img class="element-img  active "
                                                     src="../../assets/images/products/208/253x192/ea473c4d6c494c51555f84f8eeaf0924196120b9.jpg"
                                                     alt=""
                                                     data-retinasrc="/assets/images/products/208/506x384/ea473c4d6c494c51555f84f8eeaf0924196120b9.jpg"/>

                                            </div>
                                            <div class="element-content">
                                                <div class="element-article f12 text-left">Артикул: 51832931</div>
                                                <div class="title-h6">Дверь входная металлическая</div>


                                                <div class="row min">
                                                    <div class="col-xs-6">
                                                        <div class="push14"></div>
                                                        <div class="price">
                                                            9 888 ₽
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <a class="msfavorites" data-click data-data-list="default"
                                                           data-data-type="resource" data-data-id="208">
                                <span class="msfavorites-noneactive" title="Добавить в избранное">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor"
                                                                                             d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                             class=""></path></svg>
                                </span>
                                                            <span class="msfavorites-active"
                                                                  title="Удалить из избранного">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                fill="currentColor"
                                                d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                  class="fa-primary"></path></g></svg>
                                </span>
                                                        </a>
                                                        <button class="to-cart" type="submit" name="ms2_action"
                                                                value="cart/add">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                 data-icon="shopping-basket" role="img"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 576 512"
                                                                 class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                <path fill="currentColor"
                                                                      d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                      class=""></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="one-click text-right">
                                                    <div class="push15"></div>
                                                    <a class="application-link fancyboxModal"
                                                       href="../../index.html#productapplication"
                                                       data-theme="Дверь входная металлическая">Заказать в 1 клик</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="element relative">

                                        <form method="post" class="ms2_form">
                                            <input type="hidden" name="id" value="209">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="options" value="[]">
                                            <a class="absolute"
                                               href="metallicheskie/dver-vxodnaya-metallicheskaya-plyushh.html"></a>


                                            <div class="product-tags">
                                                <div class="product-tag-new">Новинка</div>


                                                <div class="product-tag-sale">
                                                    -5%
                                                </div>
                                            </div>


                                            <div class="img-wrapper">
                                                <img class="element-img  active "
                                                     src="../../assets/images/products/209/253x192/9011459d19b5e25565c191b6d15a880765be96c7.jpg"
                                                     alt=""
                                                     data-retinasrc="/assets/images/products/209/506x384/9011459d19b5e25565c191b6d15a880765be96c7.jpg"/>

                                            </div>
                                            <div class="element-content">
                                                <div class="element-article f12 text-left">Артикул: 51832931</div>
                                                <div class="title-h6">Дверь входная металлическая Плющ</div>


                                                <div class="row min">
                                                    <div class="col-xs-6">
                                                        <div class="old-price">
                                                            26 000 ₽
                                                        </div>
                                                        <div class="price">
                                                            24 661 ₽
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <a class="msfavorites" data-click data-data-list="default"
                                                           data-data-type="resource" data-data-id="209">
                                <span class="msfavorites-noneactive" title="Добавить в избранное">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor"
                                                                                             d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                             class=""></path></svg>
                                </span>
                                                            <span class="msfavorites-active"
                                                                  title="Удалить из избранного">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                fill="currentColor"
                                                d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                  class="fa-primary"></path></g></svg>
                                </span>
                                                        </a>
                                                        <button class="to-cart" type="submit" name="ms2_action"
                                                                value="cart/add">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                 data-icon="shopping-basket" role="img"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 576 512"
                                                                 class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                <path fill="currentColor"
                                                                      d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                      class=""></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="one-click text-right">
                                                    <div class="push15"></div>
                                                    <a class="application-link fancyboxModal"
                                                       href="../../index.html#productapplication"
                                                       data-theme="Дверь входная металлическая Плющ">Заказать в 1
                                                        клик</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="element relative">

                                        <form method="post" class="ms2_form">
                                            <input type="hidden" name="id" value="210">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="options" value="[]">
                                            <a class="absolute" href="derevyannyie/vxodnaya-dver-s-korobom.html"></a>


                                            <div class="product-tags">


                                            </div>


                                            <div class="img-wrapper">
                                                <img class="element-img  active "
                                                     src="../../assets/images/products/210/253x192/ce9e48dc485e5d988367f7c01ad555ea60d83e5a.jpg"
                                                     alt=""
                                                     data-retinasrc="/assets/images/products/210/506x384/ce9e48dc485e5d988367f7c01ad555ea60d83e5a.jpg"/>

                                            </div>
                                            <div class="element-content">
                                                <div class="element-article f12 text-left">Артикул: 51832931</div>
                                                <div class="title-h6">Входная дверь с коробом</div>


                                                <div class="row min">
                                                    <div class="col-xs-6">
                                                        <div class="push14"></div>
                                                        <div class="price">
                                                            7 000 ₽
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <a class="msfavorites" data-click data-data-list="default"
                                                           data-data-type="resource" data-data-id="210">
                                <span class="msfavorites-noneactive" title="Добавить в избранное">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor"
                                                                                             d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                             class=""></path></svg>
                                </span>
                                                            <span class="msfavorites-active"
                                                                  title="Удалить из избранного">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                fill="currentColor"
                                                d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                  class="fa-primary"></path></g></svg>
                                </span>
                                                        </a>
                                                        <button class="to-cart" type="submit" name="ms2_action"
                                                                value="cart/add">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                 data-icon="shopping-basket" role="img"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 576 512"
                                                                 class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                <path fill="currentColor"
                                                                      d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                      class=""></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="one-click text-right">
                                                    <div class="push15"></div>
                                                    <a class="application-link fancyboxModal"
                                                       href="../../index.html#productapplication"
                                                       data-theme="Входная дверь с коробом">Заказать в 1 клик</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="element relative">

                                        <form method="post" class="ms2_form">
                                            <input type="hidden" name="id" value="202">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="options" value="[]">
                                            <a class="absolute"
                                               href="dlya-kvartiryi/dver-vxodnaya-metallicheskaya-strojgost-5-860-mm-pravaya-czvet-metall.html"></a>


                                            <div class="product-tags">
                                                <div class="product-tag-new">Новинка</div>

                                                <div class="product-tag-popular">Хит</div>

                                                <div class="product-tag-sale">
                                                    -14%
                                                </div>
                                            </div>


                                            <div class="img-wrapper">
                                                <img class="element-img  active "
                                                     src="../../assets/images/products/202/253x192/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg"
                                                     alt=""
                                                     data-retinasrc="/assets/images/products/202/506x384/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg"/>

                                            </div>
                                            <div class="element-content">
                                                <div class="element-article f12 text-left">Артикул: 51832932</div>
                                                <div class="title-h6">Дверь входная металлическая Стройгост</div>


                                                <div class="row min">
                                                    <div class="col-xs-6">
                                                        <div class="old-price">
                                                            7 000 ₽
                                                        </div>
                                                        <div class="price">
                                                            6 000 ₽
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <a class="msfavorites" data-click data-data-list="default"
                                                           data-data-type="resource" data-data-id="202">
                                <span class="msfavorites-noneactive" title="Добавить в избранное">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor"
                                                                                             d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                             class=""></path></svg>
                                </span>
                                                            <span class="msfavorites-active"
                                                                  title="Удалить из избранного">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                fill="currentColor"
                                                d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                  class="fa-primary"></path></g></svg>
                                </span>
                                                        </a>
                                                        <button class="to-cart" type="submit" name="ms2_action"
                                                                value="cart/add">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                 data-icon="shopping-basket" role="img"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 576 512"
                                                                 class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                <path fill="currentColor"
                                                                      d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                      class=""></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="one-click text-right">
                                                    <div class="push15"></div>
                                                    <a class="application-link fancyboxModal"
                                                       href="../../index.html#productapplication"
                                                       data-theme="Дверь входная металлическая Стройгост">Заказать в 1
                                                        клик</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="element relative">

                                        <form method="post" class="ms2_form">
                                            <input type="hidden" name="id" value="226">
                                            <input type="hidden" name="count" value="1">
                                            <input type="hidden" name="options" value="[]">
                                            <a class="absolute" href="testovyij.html"></a>


                                            <div class="product-tags">


                                            </div>


                                            <div class="img-wrapper">
                                                <img class="element-img  active "
                                                     src="../../assets/images/products/226/253x192/ff8bade063b1b94351868cf6edee5dbf1b18264f.jpg"
                                                     alt=""
                                                     data-retinasrc="/assets/images/products/226/506x384/ff8bade063b1b94351868cf6edee5dbf1b18264f.jpg"/>

                                            </div>
                                            <div class="element-content">
                                                <div class="title-h6">тестовый</div>


                                                <div class="row min">
                                                    <div class="col-xs-6">
                                                        <div class="push14"></div>
                                                        <div class="price">
                                                            0 ₽
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <a class="msfavorites" data-click data-data-list="default"
                                                           data-data-type="resource" data-data-id="226">
                                <span class="msfavorites-noneactive" title="Добавить в избранное">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor"
                                                                                             d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                             class=""></path></svg>
                                </span>
                                                            <span class="msfavorites-active"
                                                                  title="Удалить из избранного">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="heart"
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                fill="currentColor"
                                                d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                  class="fa-primary"></path></g></svg>
                                </span>
                                                        </a>
                                                        <button class="to-cart" type="submit" name="ms2_action"
                                                                value="cart/add">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                 data-icon="shopping-basket" role="img"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 576 512"
                                                                 class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                <path fill="currentColor"
                                                                      d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                      class=""></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="one-click text-right">
                                                    <div class="push15"></div>
                                                    <a class="application-link fancyboxModal"
                                                       href="../../index.html#productapplication" data-theme="тестовый">Заказать
                                                        в 1 клик</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="mse2_pagination">
                                <ul class="pagination"></ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-push"></div>

@endsection
