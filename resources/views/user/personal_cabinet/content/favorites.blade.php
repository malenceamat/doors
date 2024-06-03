@extends('user.personal_cabinet.app')
@section('favorites')
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
@endsection
