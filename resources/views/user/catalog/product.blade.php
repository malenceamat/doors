@extends('user.general')
{{--@section('card_product')
    <div class="middle">
        <div class="container" style="margin-top: 20px">
            <h1 class="pagetitle">Дверь межкомнатная остеклённая Ницца</h1>
            <div class="main-column">
                <div class="product-detail">
                    --}}{{--<form class="form-horizontal ms2_form" method="POST">--}}{{--
                        @csrf
                        <input type="hidden" name="id" value="207"/>
                        <div class="row">
                            <div class="col-xs-10"></div>
                            <div class="col-xs-2">
                                <div class="favorites-btn-wrapper text-right">
                                    <a class="msfavorites" data-click="" data-data-list="default" data-data-type="resource" data-data-id="207">
                                        <span class="msfavorites-noneactive" title="Добавить в избранное">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                     data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512"
                                                     class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                                                <path fill="currentColor" d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256
                                                                          96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8
                                                                          53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7
                                                                          22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58
                                                                          53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8
                                                                          248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8
                                                                          119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24
                                                                          88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z" class="">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="msfavorites-active" title="Удалить из избранного">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fad"
                                                 data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 512 512"
                                                 class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                                                <g class="fa-group">
                                                    <path fill="currentColor" d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31
                                                                              1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3
                                                                              9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41
                                                                              102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47
                                                                              32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z" class="fa-secondary">
                                                    </path>
                                                    <path fill="currentColor" d="" class="fa-primary"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="product-gallery relative">
                                    <div id="msGallery">
                                        <div class="fotorama"
                                             data-nav="thumbs"
                                             data-thumbheight="50"
                                             data-allowfullscreen="true"
                                             data-swipe="true"
                                             data-autoplay="5000">
                                            @foreach($item->entity as $entity)
                                                @foreach($entity->items_stats as $image)
                                                    @if($image->stats_name_id == 3)
                                                        <a href="{{asset('/storage/' . $image->stats_value->value)}}"
                                                           target="_blank" data-color="{{$image->stats_value->id}}">
                                                            <img src="{{asset('/storage/' . $image->stats_value->value)}}" alt="">
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="push20"></div>
                                <div class="push20 visible-md visible-xs"></div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="product-info">
                                    <div class="push20 visible-xs"></div>
                                    <div class="push10"></div>
                                    <div class="product-options-wrapper">
                                        <div class="push20"></div>
                                        <div class="color-block">
                                            <div class="block-title">
                                                Цвет покрытия:
                                            </div>
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
                                    <div class="product-price-wrapper">
                                        <span class="product-price bold">3800 ₽ </span>
                                    </div>
                                    <div class="push30"></div>
                                    <div class="element product-count-element">
                                        <div class="row min">
                                            <div class="col-xs-12 col-sm-5 col-md-5">
                                                <div class="cleaner"></div>
                                                <div class="push20 visible-xs"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-6">
                                                <button type="submit" class="button block mid" name="ms2_action"
                                                        value="cart/add">В корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="push30"></div>
                                    <hr>
                                    <div class="question-block f16">
                                        Есть вопросы? Задайте их нашему менеджеру!
                                        <div class="push10"></div>
                                        <b>+7 (123) 444-55-66</b>
                                    </div>
                                    <div class="push30"></div>
                                </div>
                            </div>
                        </div>
                        <div class="push60 hidden-xs hidden-sm"></div>
                        <div class="push30 visible-xs visible-sm"></div>
                    --}}{{--</form>--}}{{--

                    <div class="section">
                        <div class="mobile-tab-header">Характеристики</div>
                        <ul class="tabs mobile">
                            <li class="current">Характеристики</li>
                            <li>Описание</li>
                            --}}{{--<li>Отзывы</li>--}}{{--
                        </ul>
                        <div class="push30"></div>

                        <div class="box visible">
                            <div class="char-wrapper">
                                <div class="char_block">
                                    <table class="props_list nbg">
                                        <tbody>
                                        <tr>
                                            <td class="char_name">
                                                <div class="props_item">
                                                    <span>Страна производства</span>
                                                </div>
                                            </td>
                                            <td class="char_value">
                                                <span>Россия</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="push20"></div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <p class="text-justify">Описание.</p>
                            </div>
                        </div>
                        --}}{{--<div class="box">
                            <div class="reviews" id="reviews">
                                <ul class="pagination"></ul>
                            </div>
                            <div class="push10"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="rev-form rf">
                                        <div class="title bold upper f20">Оставить отзыв</div>
                                        <div class="push20"></div>

                                        <form class="form well ec-form" method="post" role="form"
                                              id="ec-form-resource-207" data-fid="resource-207"
                                              action="../../../index.html">
                                            <input type="hidden" name="thread" value="resource-207">

                                            <div class="form-group ec-antispam">
                                                <label for="ec-address-resource-207" class="control-label">Антиспам
                                                    поле. Его необходимо скрыть через css</label>
                                                <input type="text" name="address" class="form-control"
                                                       id="ec-address-resource-207" value=""/>
                                            </div>


                                            <div class="form-group">
                                                <input type="hidden" name="rating" id="ec-rating-resource-207"
                                                       value=""/>
                                                <div class="ec-rating ec-clearfix"
                                                     data-storage-id="ec-rating-resource-207">
                                                    <div class="ec-rating-stars">
                                                        <span data-rating="1" data-description="Плохо"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="2" data-description="Есть и получше"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="3" data-description="Средне"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="4" data-description="Хорошо"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="5" data-description="Отлично! Рекомендую!"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="ec-rating-description f13">Оцените по пятибальной
                                                        шкале
                                                    </div>
                                                </div>
                                                <span class="ec-error help-block"
                                                      id="ec-rating-error-resource-207"></span>
                                            </div>

                                            <div class="push10"></div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="user_name"
                                                               class="form-control required"
                                                               id="ec-user_name-resource-207" value=""
                                                               placeholder="Ваше имя *"/>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" name="user_email"
                                                               class="form-control required"
                                                               id="ec-user_email-resource-207" value=""
                                                               placeholder="Email *"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea type="text" name="text" class="form-control required" rows="7"
                                                          id="ec-text-resource-207"
                                                          placeholder="Ваш отзыв *"></textarea>
                                            </div>


                                            <div class="push20"></div>

                                            <div class="form-actions">
                                                <input type="submit" class="button invert" name="send"
                                                       value="Оставить отзыв"/>
                                            </div>
                                        </form>
                                        <div id="ec-form-success-resource-207" class="ec-form-success"></div>
                                        <div class="push10"></div>
                                        <p><small>* - поля, обязательные для заполнения</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>--}}{{--
                    </div>
                </div>
            </div>
            <div class="push50"></div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection--}}
@section('card_product')


    <div class="middle">
        <div class="container" style="margin-top: 20px">
            <h1 class="pagetitle">Дверь межкомнатная остеклённая Ницца</h1>
            <div class="main-column">
                <div class="product-detail">
                    <form class="form-horizontal ms2_form" method="post">
                        <input type="hidden" name="id" value="207">
                        <div class="row">
                            <div class="col-xs-10">
                                <div class="product-rating-wrapper"></div>
                            </div>
                            <div class="col-xs-2">
                                <div class="favorites-btn-wrapper text-right">
                                    <a class="msfavorites load" data-click="" data-data-list="default"
                                       data-data-type="resource" data-data-id="207">
                                            <span class="msfavorites-noneactive" title="Добавить в избранное">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                     data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512"
                                                     class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path
                                                        fill="currentColor"
                                                        d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                        class=""></path></svg>
                                            </span>
                                        <span class="msfavorites-active" title="Удалить из избранного">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fad"
                                                     data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512"
                                                     class="svg-inline--fa fa-heart fa-w-16 fa-2x"><g class="fa-group"><path
                                                            fill="currentColor"
                                                            d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81 270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85 15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2 0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                            class="fa-secondary"></path><path fill="currentColor" d=""
                                                                                              class="fa-primary"></path></g></svg>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="product-gallery relative">
                                    <div class="product-tags">
                                        <div class="product-tag-new">Новинка</div>


                                    </div>
                                    <div id="msGallery">

                                        <div class="fotorama--hidden"></div>
                                        <div class="fotorama fotorama1716294927643" data-nav="thumbs"
                                             data-thumbheight="50" data-allowfullscreen="true" data-swipe="true"
                                             data-autoplay="5000">
                                            <div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls"
                                                 style="width: 900px; min-width: 0px; max-width: 100%;">
                                                <div class="fotorama__stage fotorama__pointer"
                                                     style="width: 608px; height: 405px;">
                                                    <div class="fotorama__fullscreen-icon" tabindex="0"
                                                         role="button"></div>
                                                    <div class="fotorama__stage__shaft"
                                                         style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 608px; margin-left: 0px;">
                                                        <div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img"
                                                             style="left: -610px;"><img
                                                                data-savepage-currentsrc="https://doorsfull.demoultron.ru/assets/images/products/207/75aa91d427b1513d53b1d9a6b89bc758c0a32b4a.jpg"
                                                                data-savepage-src="/assets/images/products/207/75aa91d427b1513d53b1d9a6b89bc758c0a32b4a.jpg"
                                                                src="" class="fotorama__img"
                                                                style="width: 607.5px; height: 405px; left: 0.25px; top: 0px;">
                                                        </div>
                                                        <div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active"
                                                             style="left: 0px;"><img
                                                                data-savepage-currentsrc="https://doorsfull.demoultron.ru/assets/images/products/207/b98fdd554e2f48b615950078481f4bcedc942d00.jpg"
                                                                data-savepage-src="/assets/images/products/207/b98fdd554e2f48b615950078481f4bcedc942d00.jpg"
                                                                src="" class="fotorama__img"
                                                                style="width: 607.5px; height: 405px; left: 0.25px; top: 0px;">
                                                        </div>
                                                        <div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img"
                                                             style="left: 610px;"><img
                                                                data-savepage-currentsrc="https://doorsfull.demoultron.ru/assets/images/products/207/b7bdd89ca86da3ca491574b871a602a91617dd40.jpg"
                                                                data-savepage-src="/assets/images/products/207/b7bdd89ca86da3ca491574b871a602a91617dd40.jpg"
                                                                src="" class="fotorama__img"
                                                                style="width: 607.5px; height: 405px; left: 0.25px; top: 0px;">
                                                        </div>
                                                    </div>
                                                    <div class="fotorama__arr fotorama__arr--prev" tabindex="0"
                                                         role="button"></div>
                                                    <div class="fotorama__arr fotorama__arr--next" tabindex="0"
                                                         role="button"></div>
                                                    <div class="fotorama__video-close"></div>
                                                </div>
                                                <div class="fotorama__nav-wrap">
                                                    <div class="fotorama__nav fotorama__nav--thumbs fotorama__shadows--left fotorama__shadows--right"
                                                         style="width: 608px;">
                                                        <div class="fotorama__nav__shaft fotorama__grab"
                                                             style="transition-duration: 330ms; transform: translate3d(-58px, 0px, 0px);">
                                                            <div class="fotorama__thumb-border"
                                                                 style="transition-duration: 360ms; transform: translate3d(330px, 0px, 0px); width: 60px;"></div>
                                                            <div class="fotorama__nav__frame fotorama__nav__frame--thumb"
                                                                 tabindex="0" role="button" style="width: 64px;">
                                                                <div class="fotorama__thumb fotorama__loaded fotorama__loaded--img">
                                                                    <img data-savepage-currentsrc="https://doorsfull.demoultron.ru/assets/images/products/207/451x342/58a1014266c5560ff78483737ad3af7c607fd711.jpg"
                                                                         data-savepage-src="/assets/images/products/207/451x342/58a1014266c5560ff78483737ad3af7c607fd711.jpg"
                                                                         src="data:image/jpeg;base64,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8iBZqr0yIjcSI+Q0LFUeZcKbTP4Cya08FuqvTEiTICZDTCLUuFNpm8DVy8iJdumEfVAlmiwG1LhTaWg/AU1piJJ3RRAh6lHL5XAjBY7WCm05G4FFHO/kMgFjCCG9etFNjpawTkzQs5QeRZZdRf2h0vc6PudB3MyXuQvuPooi6g7kMVrBTaZnA18vIRJH8aiK6jLF2m3VGlC94r1++E8YLPMuFNpm8D/08jUu1V6Xz6M6YIW1LhTaZnCJnLyHMS+1QhDGYiAwmQgXqo1mXCm0zeAvJ5ESxVXoZpi5nsCaL1Ucy4U2mbwJnLzgeGbzco6TudB3IP6HWXcho7kFHcS0dzpO5IDv0wuFRzLxTaZnAncvIgKs9XI6DsQUdjpdhChdj8AVB2GqHYSUdhUGS7EIljqMuFNpm8Cdy8iBaqogQw84Q9E0Rb64Wim0zOBl9zzgzX2a9Dx0xCLPXC0U2ls/Aze55CmX6q/w0JI3UvdSJbKbT8ALm5eQlmLd6ozoyDPY9hJiT6jajIOMiJKQLHUgWym0zeB5nnAgoOvyj8A/CPwj8o/APyD8oifQL5F7YLgqyU2mbwM/vecGayzRFQjphQ9N7g0LnU1LRTaZ/A87yIjW2qwj0I4ljJ6mhYqjLRTaVzcCXvecF26ERYP1KEhm1qJpH8omZcKbTM4Q5eXnBc6oiRIkSJEiN4aBkMIxT8BzZcKbTO4GReXkaiyZ6wnDB6h1jIn8Ca0dT4I2pHX4QplrQ0wGcy4U2mdwJHLzgm37EMEsGQiJEBO2NC5VGXCm0wQmqyJ8rMP88RERkxmS3hVDjIxg8MWhEEUEv+gf/9oADAMBAAIAAwAAABDzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzjHrL7rLjTzzzzzzzzzzzzzzzzzzzwXHyGzh3L3zzzzzzzzzzzzzzzzzzzzorKmh2uv/wA8888888888888888888KRShUn/tV88888888888888888888ghQxkRC6X88888888888888888888jmbtg3JRV88888888888888888888PXOqBTbuV88888888888888888888LtGnaq+V1888888888888888888886+OZVXRMV88888888888888888888pVPNeP5f/wDPPPPPPPPPPPPPPPPPPPNFgc2Ke73fPPPPPPPPPPPP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"
                                                                         class="fotorama__img"
                                                                         style="width: 65.9357px; height: 50px; left: -0.967836px; top: 0px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="push20"></div>
                                <div class="push20 visible-md visible-xs"></div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="product-info">
                                    <div class="product-options-wrapper">
                                        <div class="push20"></div>
                                        <div class="color-block">
                                            <div class="block-title">
                                                Цвет покрытия:
                                            </div>
                                            <div class="color-block-inner">
                                                <div class="color-element" title="cappucino-softwood">
                                                    <input type="radio" id="color-1-207" name="options[color][]"
                                                           value="cappucino-softwood" checked="">
                                                    <label for="color-1-207"><span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="push20"></div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span class="product-price bold">3800 ₽ </span>
                                    </div>
                                    <div class="push30"></div>
                                    <div class="element product-count-element">
                                        <div class="row min">
                                            <div class="col-xs-12 col-sm-5 col-md-5">
                                                <div class="cleaner"></div>
                                                <div class="push20 visible-xs"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-6">
                                                <button type="submit" class="button block mid" name="ms2_action"
                                                        value="cart/add">В корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="push30"></div>
                                    <hr>
                                    <div class="question-block f16">
                                        Есть вопросы? Задайте их нашему менеджеру!
                                        <div class="push10"></div>
                                        <b>+7 (123) 444-55-66</b>
                                    </div>
                                    <div class="push30"></div>
                                </div>
                            </div>
                        </div>
                        <div class="push60 hidden-xs hidden-sm"></div>
                        <div class="push30 visible-xs visible-sm"></div>
                    </form>
                    <div class="section">
                        <div class="mobile-tab-header">Характеристики</div>
                        <ul class="tabs mobile">
                            <li class="current">Характеристики</li>
                            <li>Описание</li>
                            {{--<li>Отзывы</li>--}}
                        </ul>
                        <div class="push30"></div>
                        <div class="box visible">
                            <div class="char-wrapper">
                                <div class="char_block">
                                    <table class="props_list nbg">
                                        <tbody>
                                        <tr>
                                            <td class="char_name">
                                                <div class="props_item">
                                                    <span>Страна производства</span>
                                                </div>
                                            </td>
                                            <td class="char_value">
                                                <span>Россия</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="push20"></div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <p class="text-justify">Описание.</p>
                            </div>
                        </div>
                        {{--<div class="box">
                            <div class="reviews" id="reviews">
                                <ul class="pagination"></ul>
                            </div>
                            <div class="push10"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="rev-form rf">
                                        <div class="title bold upper f20">Оставить отзыв</div>
                                        <div class="push20"></div>

                                        <form class="form well ec-form" method="post" role="form"
                                              id="ec-form-resource-207" data-fid="resource-207" action="">
                                            <input type="hidden" name="thread" value="resource-207">

                                            <div class="form-group ec-antispam">
                                                <label for="ec-address-resource-207" class="control-label">Антиспам
                                                    поле. Его необходимо скрыть через css</label>
                                                <input type="text" name="address" class="form-control"
                                                       id="ec-address-resource-207" value="">
                                            </div>


                                            <div class="form-group">
                                                <input type="hidden" name="rating" id="ec-rating-resource-207" value="">
                                                <div class="ec-rating ec-clearfix"
                                                     data-storage-id="ec-rating-resource-207">
                                                    <div class="ec-rating-stars">
                                                        <span data-rating="1" data-description="Плохо"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="2" data-description="Есть и получше"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="3" data-description="Средне"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="4" data-description="Хорошо"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                        <span data-rating="5" data-description="Отлично! Рекомендую!"><i
                                                                class="fa fa-star" aria-hidden="true"></i></span>
                                                    </div>
                                                    <div class="ec-rating-description f13">Оцените по пятибальной
                                                        шкале
                                                    </div>
                                                </div>
                                                <span class="ec-error help-block"
                                                      id="ec-rating-error-resource-207"></span>
                                            </div>

                                            <div class="push10"></div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="user_name"
                                                               class="form-control required"
                                                               id="ec-user_name-resource-207" value=""
                                                               placeholder="Ваше имя *">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" name="user_email"
                                                               class="form-control required"
                                                               id="ec-user_email-resource-207" value=""
                                                               placeholder="Email *">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea type="text" name="text" class="form-control required" rows="7"
                                                          id="ec-text-resource-207"
                                                          placeholder="Ваш отзыв *"></textarea>
                                            </div>


                                            <div class="push20"></div>

                                            <div class="form-actions">
                                                <input type="submit" class="button invert" name="send"
                                                       value="Оставить отзыв">
                                            </div>
                                        </form>
                                        <div id="ec-form-success-resource-207" class="ec-form-success"></div>
                                        <div class="push10"></div>
                                        <p><small>* - поля, обязательные для заполнения</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="push50"></div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
