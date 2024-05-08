@extends('user.general')
@section('products_filters_list')
    <style>
        .btn-new {
            border-radius: 10px;
            color: white;
            transition: .2s linear;
            background: #493939;
        }
        .btn-new:hover {
            box-shadow: 0 0 0 2px white, 0 0 0 4px #493939;
        }
    </style>
    <div class="middle" id="middlesection">
        <div class="container">
            <h1 class="pagetitle" style="margin-top: 20px"> {{$category_current['name']}} </h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="aside">
                        <nav class="aside-menu hidden-xs hidden-sm">
                            <ul>
                                @foreach($category as $data)
                                    @if($data->parent == null)
                                        <li @if($data->id == $category_current['id'] || $data->id == $category_current->parent_id) class="active down" @endif>
                                            <a href="{{route('products_filters_list', ['name' => $data['name']])}}">{{$data['name']}}</a>
                                            <ul>
                                                @foreach($data->sub_category as $cat)
                                                    <li class="down open">
                                                        <a href="{{route('product_sub_category', ['name' => $data['name'], 'sub_name' => $cat['name']])}}">{{$cat['name']}}</a>
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
                            <form action="{{route('filter')}}" class="filters-form" method="post" id="filter">
                                <input type="hidden" value="{{$category_current['name']}}" name="sub_name">
                                @csrf
                                    <div class="aside-filters-block-inner">

                                        <!-- Фильтр цены -->
                                        <div class="filter-item active">
                                            <div class="filter-item-title">
                                                <div class="table">
                                                    <div class="table-cell">
                                                        Цена
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-dropdown">
                                                <fieldset id="min_price">
                                                    <div class="number_slider_wrapper">
                                                        <div class="mse2_number_slider"></div>
                                                    </div>
                                                    <div class="push10"></div>
                                                    <div class="mse2_number_inputs row min">
                                                        <div class="col-xs-6">
                                                            <div class="form-group relative">
                                                                <label for="min_price">От</label>
                                                                <input type="text" name="min_price" id="min_price"
                                                                       value="{{ session('min_price') }}" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group relative">
                                                                <label for="max_price">До</label>
                                                                <input type="text" name="max_price" id="max_price"
                                                                       value="{{ session('max_price') }}" class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <!-- Конец фильтра цены -->

                                        <!-- Фильтр высоты -->
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
                                                            <input type="checkbox" name="height"
                                                                   id="height" value="180"/>
                                                            <label for="height" class="">180</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Конец фильтра высоты -->

                                        <!-- Фильтр ширины -->
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
                                                            <input type="checkbox" name="width"
                                                                   id="width" value="80"/>
                                                            <label for="width" class="">80</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Конец фильтра ширины -->

                                        <!-- Фильтр толщины -->
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
                                                            <input type="checkbox" name="thickness"
                                                                   id="thickness" value="4.2"/>
                                                            <label for="thickness"
                                                                   class="">4.2</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Конец фильтра толщины -->

                                        <!-- Фильтр материала покрытия -->
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
                                                            <input type="checkbox" name="compound"
                                                                   id="compound" value="Металл"/>
                                                            <label for="compound" class="">Металл</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Конец фильтра материала покрытия -->

                                        <!-- Фильтр направления открывая-->
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
                                                            <input type="checkbox" name="opening_direction"
                                                                   id="opening_direction" value="Левый"/>
                                                            <label for="opening_direction" class="">Левый</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Конец фильтра направления открывания-->

                                    </div>
                                <button class="btn-new">Применить</button>
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
                                                <a href="#" data-sort="resource|pagetitle"
                                                   data-default="asc" class="sort">По названию</a>
                                                <a href="#" data-sort="ms|price" data-default="asc"
                                                   class="sort">По цене</a>
                                                <a href="#" data-sort="ms|popular" data-dir=""
                                                   data-default="desc" class="sort">По популярности</a>
                                                <a href="#" data-sort="resource|publishedon" data-dir=""
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
                                    </div>о
                                </div>
                            </div>

                            <div class="row rows " id="mse2_results">
                                @foreach($items as $item)
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="element relative">
                                            <form method="post" class="ms2_form">
                                                <input type="hidden" name="id" value="207">
                                                <input type="hidden" name="count" value="1">
                                                <input type="hidden" name="options" value="[]">
                                                <a class="absolute" href="#"></a>
                                                <div class="img-wrapper">
                                                    {{--<img class="element-img  active " src="../../assets/images/products/207/253x192/58a1014266c5560ff78483737ad3af7c607fd711.jpg" alt=""
                                                         data-retinasrc="/assets/images/products/207/506x384/58a1014266c5560ff78483737ad3af7c607fd711.jpg"/>--}}
                                                    <img class="element-img  active " src="{{$item['image']}}" alt="{{$item['image']}}"/>
                                                </div>
                                                <div class="element-content">
                                                    <div class="title-h6">{{$item['name']}}</div>
                                                    <div class="product-options-wrapper">
                                                        <div class="color-block">
                                                            <div class="color-block-inner">
                                                                @foreach ($item->entity as $item_entity)
                                                                    <div class="color-element" title="{{ $item_entity->id }}">
                                                                        @foreach($item_entity->items_stats as $item_stats)
                                                                            <input type="radio" id="{{ $item_stats->id }}" name="item_id" value="{{ $item_stats->id }}"
                                                                                   data-values-container-id="values-container-{{ $item_stats->id }}">
                                                                            <label for="{{ $item_stats->id }}"><span></span></label>
                                                                            <div id="values-container-{{ $item_stats->id }}" class="values-container" style="display: none;"></div>
                                                                        @endforeach
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="push20"></div>
                                                    </div>

                                                    <div class="row min">
                                                        <div class="col-xs-6">
                                                            <div class="push14"></div>
                                                            @foreach($item->entity as $item_entity)
                                                                <div id="values-container-{{ $item_stats->id }}" class="values-container" style="display: none;"></div>

                                                                <div class="price" id="values-container-{{ $item_entity->id }}">
                                                                    {{$item_entity->items_stats->first()->stats_value->value}}
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <a class="msfavorites" data-click data-data-list="default"
                                                               data-data-type="resource" data-data-id="207">
                                                                    <span class="msfavorites-noneactive" title="Добавить в избранное">
                                                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                             class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                                                                            <path fill="currentColor" d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2
                                                                                  8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472
                                                                                  270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8
                                                                                  119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                                                  class="">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                <span class="msfavorites-active" title="Удалить из избранного">
                                                                        <svg aria-hidden="true" focusable="false" data-prefix="fad"
                                                                             data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                             class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                                                                            <g class="fa-group">
                                                                                <path fill="currentColor" d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31
                                                                                      1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33
                                                                                      128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64
                                                                                      47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                                                      class="fa-secondary">
                                                                                </path>
                                                                                <path fill="currentColor" d="" class="fa-primary"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                            </a>
                                                            <button class="to-cart" type="submit" name="ms2_action" value="cart/add">
                                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                                     data-icon="shopping-basket" role="img"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 576 512"
                                                                     class="svg-inline--fa fa-shopping-basket fa-w-18 fa-2x">
                                                                    <path fill="currentColor"
                                                                          d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257
                                                                              480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255
                                                                              0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292
                                                                              30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477
                                                                              192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395
                                                                              34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24
                                                                              10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24
                                                                              24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0
                                                                              13.255 10.745 24 24 24s24-10.745 24-24z"
                                                                          class="">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
