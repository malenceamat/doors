@extends('user.general')
@section('card_product')
    <div class="middle">
        <div class="container" style="margin-top: 20px">
            <h1 class="pagetitle">{{$item['name']}}</h1>
            <div class="main-column">
                    <div class="product-detail">
{{--
                        <form class="form-horizontal ms2_form" method="post" action="#">
--}}
{{--                            <input type="hidden" name="id" value="203"/> id товара для покупки--}}
                            <div class="row">
                                <div class="col-xs-10"></div>
                                <div class="col-xs-2">
                                    <div class="favorites-btn-wrapper text-right">
                                        <a class="msfavorites" data-click="" data-data-list="default"
                                           data-data-type="resource" data-data-id="203">
                                            <span class="msfavorites-noneactive" title="Добавить в избранное">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                     data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512"
                                                     class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                                                    <path
                                                        fill="currentColor"
                                                        d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5
                                                           34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2
                                                           6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1
                                                           185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7
                                                           44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"
                                                        class="">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="msfavorites-active" title="Удалить из избранного">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fad"
                                                     data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512"
                                                     class="svg-inline--fa fa-heart fa-w-16 fa-2x">
                                                    <g class="fa-group">
                                                        <path
                                                            fill="currentColor"
                                                            d="M472.13 270.53l-193.5 199.8a31.34 31.34 0 0 1-44.31 1c-.35-.34-.68-.66-1-1L39.81
                                                              270.53c-56.2-58.1-52.9-154.3 9.9-207.9A128.33 128.33 0 0 1 133.58 32c37.28 0 74.85
                                                              15.41 102.73 44.23L256 96.53l19.7-20.3C303.64 47.41 341.2 32 378.47 32a128.2 128.2
                                                              0 0 1 83.83 30.63c62.81 53.6 66.11 149.8 9.83 207.9z"
                                                            class="fa-secondary">
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
                                @if($item->entity->count() == 1)
                                    @foreach($item->entity as $entity)
                                        <div class="col-sm-6 col-md-6">
                                            <div class="product-gallery relative">
                                                @foreach($entity->items_stats as $image)
                                                    @if($image->stats_name_id == 3)
                                                        <div id="msGallery">
                                                            <div class="fotorama"
                                                                 data-nav="thumbs"
                                                                 data-thumbheight="50"
                                                                 data-allowfullscreen="true"
                                                                 data-swipe="true"
                                                                 data-autoplay="5000">
                                                                <a href="{{asset('/storage/' . $image->stats_value->value)}}"
                                                                   target="_blank" data-color="graciya-snar-1100x1100h-1000x1000">
                                                                    <img src="{{asset('/storage/' . $image->stats_value->value)}}" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="push20"></div>
                                            <div class="push20 visible-md visible-xs"></div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="col-sm-6 col-md-6">
                                    @if($item->entity->count() == 1)
                                        @foreach($item->entity as $entity)
                                            <div class="product-info">
                                                @foreach($entity->items_stats as $stats)
                                                    @if($stats->stats_name_id == 1)
                                                        <div class="product-price-wrapper">
                                                            <span class="product-price bold">{{ $stats->stats_value->value }}</span>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="push30"></div>
                                                <div class="element product-count-element">
                                                    <div class="row min">
                                                        <div class="col-xs-12 col-sm-5 col-md-5">
                                                            <div class="cleaner"></div>
                                                            <div class="push20 visible-xs"></div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-7 col-md-6">
                                                            <button type="submit" class="button block mid" name="ms2_action" value="cart/add">В корзину</button>
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
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="push60 hidden-xs hidden-sm"></div>
                            <div class="push30 visible-xs visible-sm"></div>
                        {{--</form>--}}
                        <div class="section">
                            <div class="mobile-tab-header">Характеристики</div>
                            <ul class="tabs mobile">
                                <li class="current">Характеристики</li>
                                <li>Описание</li>
                                {{--<li>Отзывы</li>--}}
                            </ul>
                            <div class="push30"></div>
                            {{-- характеристики --}}
                            @if($item->entity->count() == 1)
                                @foreach($item->entity as $entity)
                                    <div class="box visible">
                                        <div class="char-wrapper">
                                            <div class="char_block">
                                                <table class="props_list nbg">
                                                    <tbody>
                                                    @foreach($entity->items_stats as $stats)
                                                            <tr>
                                                                <td class="char_name">
                                                                    <div class="props_item">
                                                                        <span>{{ $stats->stats_name->stats_names }}</span>
                                                                    </div>
                                                                </td>
                                                                <td class="char_value">
                                                                    <span>{{ $stats->stats_value->value }}</span>
                                                                </td>
                                                            </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="push20"></div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- конец характеристик --}}
                            <!--Описание-->
                            <div class="box">
                                <div class="content">
                                    <p class="text-justify">Разнообразный и богатый опыт начало повседневной работы по
                                        формированию позиции в значительной степени обуславливает создание модели развития.
                                        Повседневная практика показывает, что консультация с широким активом в значительной
                                        степени обуславливает создание соответствующий условий активизации. Задача
                                        организации, в особенности же начало повседневной работы по формированию позиции
                                        требуют определения и уточнения системы обучения кадров, соответствует насущным
                                        потребностям. Не следует, однако забывать, что консультация с широким активом
                                        позволяет выполнять важные задания по разработке направлений прогрессивного
                                        развития.</p>
                                    <p class="text-justify">Повседневная практика показывает, что укрепление и развитие
                                        структуры способствует подготовки и реализации новых предложений. Таким образом
                                        реализация намеченных плановых заданий способствует подготовки и реализации
                                        направлений прогрессивного развития. Задача организации, в особенности же постоянное
                                        информационно-пропагандистское обеспечение нашей деятельности позволяет оценить
                                        значение дальнейших направлений развития. С другой стороны дальнейшее развитие
                                        различных форм деятельности обеспечивает широкому кругу (специалистов) участие в
                                        формировании форм развития. Таким образом новая модель организационной деятельности
                                        требуют от нас анализа новых предложений.</p>
                                </div>
                            </div>
                            {{--конец описания--}}
                            <!--отзыв-->
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
                                                  id="ec-form-resource-203" data-fid="resource-203"
                                                  action="#">
                                                <input type="hidden" name="thread" value="resource-203">

                                                <div class="form-group ec-antispam">
                                                    <label for="ec-address-resource-203" class="control-label">Антиспам
                                                        поле. Его необходимо скрыть через css</label>
                                                    <input type="text" name="address" class="form-control"
                                                           id="ec-address-resource-203" value=""/>
                                                </div>


                                                <div class="form-group">
                                                    <input type="hidden" name="rating" id="ec-rating-resource-203"
                                                           value=""/>
                                                    <div class="ec-rating ec-clearfix"
                                                         data-storage-id="ec-rating-resource-203">
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
                                                          id="ec-rating-error-resource-203"></span>
                                                </div>

                                                <div class="push10"></div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="user_name"
                                                                   class="form-control required"
                                                                   id="ec-user_name-resource-203" value=""
                                                                   placeholder="Ваше имя *"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" name="user_email"
                                                                   class="form-control required"
                                                                   id="ec-user_email-resource-203" value=""
                                                                   placeholder="Email *"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                <textarea type="text" name="text" class="form-control required" rows="7"
                                                          id="ec-text-resource-203"
                                                          placeholder="Ваш отзыв *"></textarea>
                                                </div>


                                                <div class="push20"></div>

                                                <div class="form-actions">
                                                    <input type="submit" class="button invert" name="send"
                                                           value="Оставить отзыв"/>
                                                </div>
                                            </form>
                                            <div id="ec-form-success-resource-203" class="ec-form-success"></div>
                                            <div class="push10"></div>
                                            <p><small>* - поля, обязательные для заполнения</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                            {{--конец отзыва--}}
                        </div>
                    </div>
            </div>
            <div class="push50"></div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
