@extends('user.general')
@section('catalog')
    <div class="middle">
        <div class="container">
            <h1 class="pagetitle text-center upper f34" style="margin-top: 20px">Каталог товаров</h1>
            <div class="shop-categories shop-categories-base only-shop-categories">
                <div class="row row-border">
                    @foreach($category as $cat)
                        @if(($cat->parent_id == null))
                            <div class="col-sm-12 col-md-6 categories-wrapper">
                                <div class="element">
                                    <div class="element-inner">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-4 col-xs-4">
                                                <div class="img-wrapper">
                                                    <div class="img-inner">
                                                        <a href="{{route('products_filters_list', ['name' => $cat['name']])}}">
                                                            <img src="{{asset('assets/cache_image/images/categories/1_220x0_750.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-8 col-xs-8">
                                                <div class="element-content">
                                                    <div class="title">
                                                        <a href="{{route('products_filters_list', ['name' => $cat['name']])}}"
                                                        title="{{$cat['name']}}"> {{$cat['name']}}
                                                        </a>
                                                    </div>
                                                    <div class="sub-categories-list">
                                                        @if(isset($cat->sub_category[0]))
                                                            @foreach($cat->sub_category as $data)
                                                                <div>
                                                                    <a href="{{route('product_sub_category', ['name' => $cat['name'], 'sub_name' => $data['name'], 'id' => $cat['id']])}}"
                                                                       title="{{$data['name']}}"> {{$data['name']}}
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="vxodnyie-dveri/index.html" class="more">Смотреть все</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="push70"></div>
            </div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
