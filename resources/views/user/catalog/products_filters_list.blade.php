@extends('user.general')
@section('style')
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
@endsection
@section('products_filters_list')
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
                                                                       value="{{ session('min_price') ?? '0' }}" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="form-group relative">
                                                                <label for="max_price">До</label>
                                                                <input type="text" name="max_price" id="max_price"
                                                                       value="{{ session('max_price') ?? '' }}" class="form-control"/>
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
                                                        @foreach($values['Высота'] as $height)
                                                            <div class="filter-customcheck">
                                                                <input type="checkbox" name="Высота[]"
                                                                       id="height_{{ $height }}" value="{{$height}}"
                                                                       @if (session('height') && in_array($height, session('height'))) checked @endif/>
                                                                <label for="height_{{ $height }}" class="">{{$height}}</label>
                                                            </div>
                                                        @endforeach
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
                                                        @foreach($values['Ширина'] as $width)
                                                            <div class="filter-customcheck">
                                                                <input type="checkbox" name="Ширина[]"
                                                                       id="width_{{$width}}" value="{{$width}}"
                                                                       @if (session('width') && in_array($width, session('width'))) checked @endif/>
                                                                <label for="width_{{$width}}" class="">{{$width}}</label>
                                                            </div>
                                                        @endforeach
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
                                                        @foreach($values['Толщина'] as $thickness)
                                                            <div class="filter-customcheck">
                                                                <input type="checkbox" name="Толщина[]"
                                                                       id="thickness_{{$thickness}}" value="{{$thickness}}"
                                                                       @if (session('thickness') && in_array($thickness, session('thickness'))) checked @endif/>
                                                                <label for="thickness_{{$thickness}}"
                                                                       class="">{{$thickness}}</label>
                                                            </div>
                                                        @endforeach
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
                                                        @foreach($values['Материал'] as $compound)
                                                            <div class="filter-customcheck">
                                                                <input type="checkbox" name="Материал[]"
                                                                       id="compound_{{$compound}}" value="{{$compound}}"
                                                                       @if (session('compound') && in_array($compound, session('compound'))) checked @endif/>
                                                                <label for="compound_{{$compound}}" class="">{{$compound}}</label>
                                                            </div>
                                                        @endforeach
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
                                                        @foreach($values['Направление открывания'] as $opening_direction)
                                                            <div class="filter-customcheck">
                                                                <input type="checkbox" name="Направление открывания[]"
                                                                       id="opening_direction_{{$opening_direction}}" value="{{$opening_direction}}"
                                                                       @if (session('opening_direction') && in_array($opening_direction, session('opening_direction'))) checked @endif/>
                                                                <label for="opening_direction_{{$opening_direction}}" class="">{{$opening_direction}}</label>
                                                            </div>
                                                        @endforeach
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
                                    </div>
                                </div>
                            </div>
                            <div class="row rows " id="mse2_results">
                                @foreach($items as $item)
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="element relative">
                                            <form method="post" class="ms2_form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$item['id']}}">
                                                <input type="hidden" name="options" value="[]">
                                                <a class="absolute" href="{{route ('card_product', ['item_id' => $item['id'], 'item_name' => $item['name']])}}"></a>
                                                <div class="img-wrapper">
                                                    @php $first_image = true; $uniqueImages = []; @endphp
                                                    @foreach($item->entity as $entity)
                                                        @foreach($entity->items_stats as $image)
                                                            @if($image->stats_name_id == 3)
                                                                @php $imagePath = $image->stats_value->value; @endphp
                                                                @if(!in_array($imagePath, $uniqueImages))
                                                                    <img class="element-img {{ $first_image ? 'active' : '' }}" src="{{asset('/storage/' . $imagePath)}}" alt="{{$imagePath}}"/>
                                                                    @php $first_image = false; $uniqueImages[] = $imagePath; @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </div>

                                                <div class="element-content" data-item-id="{{ $item->id }}">
                                                    <div class="title-h6">{{$item['name']}}</div>
                                                    <div class="product-options-wrapper">
                                                        <div class="color-block">
                                                            <div class="color-block-inner">
                                                                @if ($item->entity->count() > 1)
                                                                    @foreach ($item->entity as $item_entity)
                                                                        <div class="color-element" title="{{ $item_entity->id }}">
                                                                            @foreach($item_entity->items_stats as $item_stats)
                                                                                <input type="radio" id="{{ $item_stats->id }}" name="item_id_{{ $item->id }}" value="{{$item->id}}"
                                                                                       data-price="{{ $item_entity->items_stats->first()->stats_value->value . ' ₽'}}"
                                                                                       data-values-container-id="values-container-{{ $item_stats->id }}"
                                                                                    {{ $loop->parent->first && $loop->first ? 'checked' : '' }}>
                                                                                @if ($item_stats->stats_name_id == 4)
                                                                                    <label for="{{ $item_stats->id }}" style="background-image: url({{ asset('storage/' . $item_stats->stats_value->value) }});">
                                                                                        <span></span>
                                                                                    </label>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="push20"></div>
                                                    </div>
                                                    <div class="row min">
                                                        <div class="col-xs-6">
                                                            <div class="push14"></div>
                                                            <div class="price" id="selected-item-price-{{ $item->id }}">
                                                                @if(isset($item->entity->first()->items_stats[0])) {{ $item->entity->first()->items_stats->first()->stats_value->value}} @endif  <wrap>₽</wrap>
                                                            </div>
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
@section('script')
    <script>
        const productCards = document.querySelectorAll('.element-content');
        productCards.forEach(card => {
            const itemId = card.dataset.itemId;
            const radioButtons = card.querySelectorAll(`input[name="item_id_${itemId}"]`);
            const selectedItemPrice = card.querySelector(`#selected-item-price-${itemId}`);

            radioButtons.forEach(radioButton => {
                radioButton.addEventListener('change', () => {
                    if (radioButton.checked) {
                        selectedItemPrice.textContent = radioButton.dataset.price;
                    }
                });
            });
        });
    </script>
@endsection
