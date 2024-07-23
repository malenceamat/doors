@extends('user.app')
@section('style')
<style>
    .wishlist.klbwl-btn.klbwl-btn-462.in-favorites {
        color: red;
    }
</style>
@endsection
@section('content')
    <main id="main" class="site-primary">
        <div class="site-content">
            <div class="shop-content">
                <div class="container">

                    <div class="shop-page-header">
                        <nav class="woocommerce-breadcrumb">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Домашняя страница</a>
                                </li>
                                <li>
                                    <a href="{{route('shop', ['name' => $parent_category['name']])}}">{{$parent_category['name']}}</a>
                                </li>
                                @if(isset($sub_category['name']))
                                    <li>
                                        <a href="{{route('shop', ['name' => $parent_category['name'], 'sub_name' => $sub_category['name']])}}">{{$sub_category['name']}}</a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>

                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="before-shop-loop">
                        <div class="row sidebar-left">
                            <div class="col col-12 col-lg-9 content-column">

                                <div class="filter-button hide-desktop">
                                    <a href="#">
                                        <i class="klbth-icon-filter"></i>
                                        Фильтр товаров
                                    </a>
                                </div>
                                {{-- <div class="filter-wrapper">
                                     <div class="sorting-product">
                                         <!-- For get orderby from loop -->

                                         <form class="woocommerce-ordering product-filter" method="get">
                                             <select name="orderby" class="orderby filterSelect" aria-label="Shop order"
                                                     data-class="select-filter-orderby">
                                                 <option value="popularity">Sort by popularity</option>
                                                 <option value="rating">Sort by average rating</option>
                                                 <option value="date" selected='selected'>Sort by latest</option>
                                                 <option value="price">Sort by price: low to high</option>
                                                 <option value="price-desc">Sort by price: high to low</option>
                                             </select>
                                             <input type="hidden" name="paged" value="1"/>
                                             <input type="hidden" name="column" value="3"/></form>
                                     </div>
                                 </div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="row content-wrapper sidebar-left">
                        <div class="col col-12 col-lg-9 content-primary">
                            @include('user.shop.product')
                            <nav class="woocommerce-pagination">
                                <ul class='page-numbers'>
                                    @if ($items->onFirstPage())
                                        <li class="disabled" aria-disabled="true"><span>&laquo;</span></li>
                                    @else
                                        <li><a class="page-numbers" href="{{ $items->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                                    @endif

                                    @foreach ($items->links()->elements[0] as $page => $url)
                                        @if ($page == $items->currentPage())
                                            <li><span aria-current="page" class="page-numbers current">{{ $page }}</span></li>
                                        @else
                                            <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    @if ($items->hasMorePages())
                                        <li><a class="page-numbers" href="{{ $items->nextPageUrl() }}" rel="next">&raquo;</a></li>
                                    @else
                                        <li class="disabled" aria-disabled="true"><span>&raquo;</span></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>

                        <div id="sidebar" class="col col-12 col-lg-3 content-secondary site-sidebar filtered-sidebar">
                            <div class="site-scroll">
                                <div class="sidebar-inner">
                                    <div class="sidebar-mobile-header">
                                        <h3 class="entry-title">Фильтр продуктов</h3>
                                        <div class="close-sidebar">
                                            <i class="klbth-icon-cancel"></i>
                                        </div>
                                    </div>

                                    <div class="widget woocommerce widget_price_filter">
                                        <h4 class="widget-title">Фильтр по цене</h4>
                                        <form id="price-filter-form" method="get" action="#">
                                            <div class="price_slider_wrapper">
                                                <div id="slider-range"></div>
                                                <div class="price_slider_amount">
                                                    <input type="text" id="amount" readonly>
                                                    <button type="submit" class="button">Применить</button>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    @if(isset($values['Высота'][0]))
                                        <div class="widget widget_product_status"><h4 class="widget-title">Общая высота, см</h4>
                                            <div class="widget-checkbox-list">
                                                <ul>
                                                    @foreach($values['Высота'] as  $height)
                                                        <li>
                                                            <a href="#">
                                                                <input name="Высота[]" value="{{$height}}" id="height_{{$height}}"
                                                                       type="checkbox">
                                                                <label for="height_{{$height}}"><span></span>{{$height}}</label>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if(isset($values['Ширина'][0]))
                                        <div class="widget widget_product_status"><h4 class="widget-title">Общая ширина, см</h4>
                                            <div class="widget-checkbox-list">
                                                <ul>
                                                    @foreach($values['Ширина'] as $width)
                                                        <li>
                                                            <a href="#">
                                                                <input name="Ширина[]" value="{{$width}}" id="width_{{$width}}"
                                                                       type="checkbox">
                                                                <label for="width_{{$width}}"><span></span>{{$width}}</label>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if(isset($values['Толщина'][0]))
                                        <div class="widget widget_product_status"><h4 class="widget-title">Общая толщина, см</h4>
                                            <div class="widget-checkbox-list">
                                                <ul>
                                                    @foreach($values['Толщина'] as $thickness)
                                                        <li>
                                                            <a href="#">
                                                                <input name="Толщина[]" value="{{$thickness}}" id="thickness_{{$thickness}}"
                                                                       type="checkbox">
                                                                <label for="thickness_{{$thickness}}"><span></span>{{$thickness}}</label>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if(isset($values['Материал'][0]))
                                        <div class="widget widget_product_status"><h4 class="widget-title">Покрытие</h4>
                                            <div class="widget-checkbox-list">
                                                <ul>
                                                    @foreach($values['Материал'] as $compound)
                                                        <li>
                                                            <a href="#">
                                                                <input name="Материал[]" value="{{$compound}}" id="compound_{{$compound}}"
                                                                       type="checkbox">
                                                                <label for="compound_{{$compound}}"><span></span>{{$compound}}</label>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if(isset($values['Направление открывания'][0]))
                                        <div class="widget widget_product_status"><h4 class="widget-title">Направление открывания</h4>
                                            <div class="widget-checkbox-list">
                                                <ul>
                                                    @foreach($values['Направление открывания'] as $opening_direction)
                                                        <li>
                                                            <a href="#">
                                                                <input name="Направление_открывания[]" value="{{$opening_direction}}" id="opening_direction_{{$opening_direction}}"
                                                                       type="checkbox">
                                                                <label for="opening_direction_{{$opening_direction}}"><span></span>{{$opening_direction}}</label>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // Инициализация slider-range
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 100000,
                values: [0, 50000],
                slide: function(event, ui) {
                    $("#amount").val("₽" + ui.values[0] + " - ₽" + ui.values[1]);
                }
            });
            $("#amount").val("₽" + $("#slider-range").slider("values", 0) +
                " - ₽" + $("#slider-range").slider("values", 1));

            // Функция для отправки AJAX-запроса
            function sendAjaxRequest(filters) {
                $.ajax({
                    url: '/shop/filter',
                    method: 'POST',
                    data: filters,
                    success: function(response) {
                        $('.ajax_content').html(response);
                    },
                    error: function(error) {
                        console.error("Ошибка при отправке запроса:", error);
                    }
                });
            }

            // Сбор данных из фильтров
            function collectFilters() {
                let selectedHeights = [];
                $('input[name="Высота[]"]:checked').each(function() {
                    selectedHeights.push($(this).val());
                });

                let selectedWidths = [];
                $('input[name="Ширина[]"]:checked').each(function() {
                    selectedWidths.push($(this).val());
                });

                let selectedThicknesses = [];
                $('input[name="Толщина[]"]:checked').each(function() {
                    selectedThicknesses.push($(this).val());
                });

                let selectedMaterials = [];
                $('input[name="Материал[]"]:checked').each(function() {
                    selectedMaterials.push($(this).val());
                });

                let selectedOpeningDirections = [];
                $('input[name="Направление_открывания[]"]:checked').each(function() {
                    selectedOpeningDirections.push($(this).val());
                });

                let parentCategoryName = '{{$parent_category['name']}}';
                let subCategoryName = '{{ isset($sub_category['name']) ? $sub_category['name'] : '' }}';

                return {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    Высота: selectedHeights,
                    Ширина: selectedWidths,
                    Толщина: selectedThicknesses,
                    Материал: selectedMaterials,
                    Направление_открывания: selectedOpeningDirections,
                    parent_category: parentCategoryName,
                    sub_category: subCategoryName
                };
            }

            // Обработчик события изменения состояния чекбоксов
            $('input[name="Высота[]"], input[name="Ширина[]"], input[name="Толщина[]"], input[name="Материал[]"], input[name="Направление_открывания[]"]').change(function() {
                let filters = collectFilters();
                sendAjaxRequest(filters);
            });

            // Обработчик события отправки формы фильтра по цене
            $('#price-filter-form').submit(function(event) {
                event.preventDefault();

                // Получение значений диапазона цен
                let priceMin = $("#slider-range").slider("values", 0);
                let priceMax = $("#slider-range").slider("values", 1);

                // Создание объекта фильтров с ценой
                let filters = collectFilters(); // Сбор остальных фильтров
                filters.min_price = priceMin;
                filters.max_price = priceMax;

                sendAjaxRequest(filters);
            });
        });
    </script>

    <script>
        function toggleFavorite(event, productId) {
            event.preventDefault();

            var button = event.currentTarget;

            $.ajax({
                url: '{{ route('favorites_add') }}',
                type: 'POST',
                data: {
                    item_id: productId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        if (button.classList.contains('in-favorites')) {
                            button.classList.remove('in-favorites');
                            button.innerHTML = 'Добавить в избранное';
                            button.style.color = '';
                        } else {
                            button.classList.add('in-favorites');
                            button.innerHTML = 'В избранном';
                            button.style.color = 'red';
                        }
                    } else {
                        alert(response.message);
                    }
                },
                error: function(response) {
                    alert('Ошибка при изменении состояния избранного');
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.ajax_order').on('click', function(e) {
                e.preventDefault();

                var productId = $(this).data('product_id');

                $.ajax({
                    url: '{{ route('order_add') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(response) {
                        alert('Произошла ошибка, попробуйте снова.');
                    }
                });
            });
        });
    </script>
@endsection
