<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Готовый интернет-магазин межкомнатных и входных дверей | Шаблон интернет магазина дверей</title>
    <base href="">
    <meta name="description"
          content="Шаблон сайта для компании по продаже дверей. Готовый шаблон интернет-магазин для производителя и продавца межкомнатных и входных дверей.">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#493939"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="modxru" content="f9b7dcac4f8e7a3ce24034278ce72477"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href={{asset("images/site/favicon.png")}}/>
    <link
        href={{asset("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap")}}s
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href={{asset("assets/template/css/font-awesome.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/bootstrap.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/jquery.fancybox.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/jquery.jscrollpane.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/style.css")}} rel="stylesheet">
    <link rel="stylesheet" href="https://doorsfull.demoultron.ru/assets/components/msearch2/css/web/default.css"
          type="text/css"/>

    <script type="text/javascript">
        if (typeof mse2Config == "undefined") {
            mse2Config = {
                "cssUrl": "\/assets\/components\/msearch2\/css\/web\/",
                "jsUrl": "\/assets\/components\/msearch2\/js\/web\/",
                "actionUrl": "\/assets\/components\/msearch2\/action.php"
            };
        }
        if (typeof mse2FormConfig == "undefined") {
            mse2FormConfig = {};
        }
        mse2FormConfig["6cf13f73d25473a2919817c123642d9573852a03"] = {
            "autocomplete": "false",
            "queryVar": "query",
            "minQuery": 3,
            "pageId": 152
        };
    </script>
    <link rel="stylesheet"
          href="https://doorsfull.demoultron.ru/assets/components/minishop2/css/web/default.css?v=e2bdf7f5a6"
          type="text/css"/>
    <link rel="stylesheet"
          href="https://doorsfull.demoultron.ru/assets/components/minishop2/css/web/lib/jquery.jgrowl.min.css"
          type="text/css"/>
    <script>miniShop2Config = {
            "close_all_message": "\u0437\u0430\u043a\u0440\u044b\u0442\u044c \u0432\u0441\u0435",
            "cssUrl": "\/assets\/components\/minishop2\/css\/web\/",
            "jsUrl": "\/assets\/components\/minishop2\/js\/web\/",
            "actionUrl": "\/assets\/components\/minishop2\/action.php",
            "ctx": "web",
            "price_format": [2, ".", " "],
            "price_format_no_zeros": true,
            "weight_format": [3, ".", " "],
            "weight_format_no_zeros": true
        };</script>
    <link rel="stylesheet"
          href="https://doorsfull.demoultron.ru/assets/components/msfavorites/css/default.min.css?v=1b350711"
          type="text/css"/>
    <script type="text/javascript">msFavoritesConfig = {
            "actionUrl": "\/assets\/components\/msfavorites\/action.php",
            "ctx": "web",
            "version": "2.1.4-beta",
            "options": null
        };</script>
</head>
<body class="index-template id-1 parent-0">

<div class="main-wrapper">


    <style>

        .color-block .color-element input[value="акация"] + label {

            background-image: url({{asset("assets/images/mixedImages/akacia.jpg")}});


        }


        .color-block .color-element input[value="карамель"] + label {

            background-image: url({{asset("assets/images/mixedImages/karamel.jpg")}});


        }


        .color-block .color-element input[value="крем"] + label {

            background-image: url({{asset("assets/images/mixedImages/krem.jpg")}});


        }


        .color-block .color-element input[value="твид"] + label {

            background-image: url({{asset("assets/images/mixedImages/tvid.png")}});


        }


        .color-block .color-element input[value="anegri"] + label {

            background-image: url({{asset("assets/images/mixedImages/anegri-color.jpg")}});


        }


        .color-block .color-element input[value="bianko"] + label {

            background-image: url({{asset("assets/images/mixedImages/bianko-color.png")}});


        }


        .color-block .color-element input[value="cappuccino"] + label {

            background-image: url({{asset("assets/images/mixedImages/cappuccino-color.png")}});


        }


        .color-block .color-element input[value="gray"] + label {

            background-image: url({{asset("assets/images/mixedImages/gray-color.png")}});


        }


        .color-block .color-element input[value="sonoma"] + label {

            background-image: url({{asset("assets/images/mixedImages/sonoma-color.jpg")}});


        }


        .color-block .color-element input[value="venge"] + label {

            background-image: url({{asset("assets/images/mixedImages/venge-color.png")}});


        }


        .color-block .color-element input[value="cappucino-softwood"] + label {

            background-image: url({{asset("assets/images/mixedImages/cappucino-softwood-color.jpg")}});


        }


        .color-block .color-element input[value="chalet-blanс"] + label {

            background-image: url({{asset("assets/images/mixedImages/chalet-blanс-color.jpg")}});


        }


        .color-block .color-element input[value="chalet-grande"] + label {

            background-image: url({{asset("assets/images/mixedImages/chalet-grande-color.jpg")}});


        }


        .color-block .color-element input[value="chalet-grasse"] + label {

            background-image: url({{asset("assets/images/mixedImages/chalet-grasse-color.jpg")}});


        }


        .color-block .color-element input[value="chalet-provence"] + label {

            background-image: url({{asset("assets/images/mixedImages/chalet-provence-color.jpg")}});


        }


        .color-block .color-element input[value="dark-oak"] + label {

            background-image: url({{asset("assets/images/mixedImages/dark-oak-color.jpg")}});


        }


        .color-block .color-element input[value="golden-reef"] + label {

            background-image: url({{asset("assets/images/mixedImages/golden-reef-color.jpg")}});


        }


        .color-block .color-element input[value="graphite-art"] + label {

            background-image: url({{asset("assets/images/mixedImages/graphite-art-color.jpg")}});


        }


        .color-block .color-element input[value="grey-art"] + label {

            background-image: url({{asset("assets/images/mixedImages/grey-art-color.jpg")}});


        }


        .color-block .color-element input[value="nordic-oak"] + label {

            background-image: url({{asset("assets/images/mixedImages/nordic-oak-color.jpg")}});


        }


        .color-block .color-element input[value="organiс-oak"] + label {

            background-image: url({{asset("assets/images/mixedImages/organiс-oak-color.jpg")}});


        }


        .color-block .color-element input[value="original-oak"] + label {

            background-image: url({{asset("assets/images/mixedImages/original-oak-color.jpg")}});


        }


        .color-block .color-element input[value="virgin"] + label {

            background-image: url({{asset("assets/images/mixedImages/virgin-color.jpg")}});


        }


        .color-block .color-element input[value="white-softwood"] + label {

            background-image: url({{asset("assets/images/mixedImages/white-softwood-color.jpg")}});


        }


    </style>

    @include('user.header')


    <div class="top-slider-wrapper gray-bg">
        <div class="push40"></div>
        <div class="container container-slider">
            <div class="top-slider">
                <div class="item">
                    <div class="inner relative">
                        <div class="item-img"
                             style="background-image: url({{asset("assets/cache_image/images/slider/s1_1240x450_fbd.jpg")}});"></div>
                        <div class="element-content-wrapper">
                            <div class="table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="element-content">

                                            <div class="item-title">
                                                Готовый интернет магазин<br>по продаже дверей
                                            </div>


                                            <div class="item-description">
                                                <p>
                                                    Купите готовый сайт и запустите<br>
                                                    свой интернет-магазин через 2 дня!
                                                </p>
                                            </div>


                                            <a class="button" href="#">Узнать подробнее</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner relative">
                        <div class="item-img"
                             style="background-image: url({{asset("assets/cache_image/images/slider/s2_1240x450_fbd.jpg")}});"></div>
                        <div class="element-content-wrapper">
                            <div class="table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="element-content">

                                            <div class="item-title">
                                                Сколько стоит разработка сайта<br>интернет-магазина дверей ?
                                            </div>


                                            <div class="item-description">
                                                <p>
                                                    Хотите сделать интернет-магазин для вашей компании?<br>
                                                    С нашей сборкой вы запустите свой сайт в течении 2-х дней<br>
                                                    Готовые сайты еще никогда не были такими доступными!
                                                </p>
                                            </div>


                                            <a class="button" href="#">Купить со скидкой</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner relative">
                        <div class="item-img"
                             style="background-image: url({{asset("assets/cache_image/images/slider/slider3_1240x450_fbd.jpg")}});"></div>
                        <div class="element-content-wrapper">
                            <div class="table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="element-content">

                                            <div class="item-title">
                                                Разработка интернет-магазина<br>дверей за 2 дня!
                                            </div>


                                            <div class="item-description">
                                                <p>
                                                    Сборка готового сайта со всеми "наворотами"<br>
                                                    Дешевле уникальной разработки в 10 раз<br>
                                                    Быстрый запуск вашего магазина!
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="vantages-section gray-bg">
        <div class="container">
            <div class="vantages">
                <div class="row min">

                    <div class="col-sm-6 col-md-3">
                        <div class="element">
                            <div class="img-wrapper">

                                <img src={{asset("images/feauters/1-2.svg")}}s alt="Бесплатная доставка">

                            </div>
                            <div class="element-content">
                                <div class="title">Бесплатная доставка</div>

                                <div class="text">
                                    При заказе от 3000 ₽
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="element">
                            <div class="img-wrapper">

                                <img src={{asset("images/feauters/886061-card-512x512.svg")}}s alt="Бесплатный возврат">

                            </div>
                            <div class="element-content">
                                <div class="title">Бесплатный возврат</div>

                                <div class="text">
                                    В течение 30 дней
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="element">
                            <div class="img-wrapper">

                                <img src={{asset("images/feauters/068-security.svg")}}s alt="100% Безопасная Оплата">

                            </div>
                            <div class="element-content">
                                <div class="title">100% Безопасная Оплата</div>

                                <div class="text">
                                    Ваши платежи в безопасности
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="element">
                            <div class="img-wrapper">

                                <img src={{asset("images/feauters/img-267472.svg")}}s alt="Техподдержка 24/7">

                            </div>
                            <div class="element-content">
                                <div class="title">Техподдержка 24/7</div>

                                <div class="text">
                                    Мы на связи 24 часа в сутки
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="catalog special-goods-wrapper">
        <div class="push70"></div>
        <div class="container">
            <div class="section">
                <div class="mobile-tab-header">Новинки</div>
                <ul class="tabs mobile">
                    <li class="current">Новинки</li>
                    <li>Популярное</li>
                    <li>Распродажа</li>
                </ul>
                <div class="push30"></div>
                <div class="box visible">
                    <div class="product-carousel-wrapper new-carousel">
                        <div class="row products-carousel" id="products_carousel_1">
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="202">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>

                                            <div class="product-tag-popular">Хит</div>

                                            <div class="product-tag-sale">
                                                -14%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/202/253x192/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg")}}s
                                                 alt="Дверь входная металлическая Стройгост"
                                                 data-retinasrc="/assets/images/products/202/506x384/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832932</div>
                                            <div class="title-h6">Дверь входная металлическая Стройгост</div>


                                            <span class="old-price">
                    7 000  ₽                 </span>
                                            <span class="price">
                    6 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="206">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/206/253x192/46767c40958f67f6be984d0aa148617168b0e38a.jpg")}}s
                                                 alt="Дверь межкомнатная Дюплекс1"
                                                 data-retinasrc="/assets/images/products/206/506x384/46767c40958f67f6be984d0aa148617168b0e38a.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832942</div>
                                            <div class="title-h6">Дверь межкомнатная Дюплекс1</div>


                                            <span class="price">
                    3 800  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="207">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/207/253x192/58a1014266c5560ff78483737ad3af7c607fd711.jpg")}}s
                                                 alt="Дверь межкомнатная остеклённая Ницца"
                                                 data-retinasrc="/assets/images/products/207/506x384/58a1014266c5560ff78483737ad3af7c607fd711.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832942</div>
                                            <div class="title-h6">Дверь межкомнатная остеклённая Ницца</div>


                                            <span class="price">
                    3 800  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="209">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                            <div class="product-tag-sale">
                                                -5%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/209/253x192/9011459d19b5e25565c191b6d15a880765be96c7.jpg")}}s
                                                 alt="Дверь входная металлическая Плющ"
                                                 data-retinasrc="/assets/images/products/209/506x384/9011459d19b5e25565c191b6d15a880765be96c7.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832931</div>
                                            <div class="title-h6">Дверь входная металлическая Плющ</div>


                                            <span class="old-price">
                    26 000  ₽                 </span>
                                            <span class="price">
                    24 661  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="214">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/214/253x192/b1171155c3d25c5cfe2edfc56c757026d669b566.jpg")}}s
                                                 alt="Дверь балкон"
                                                 data-retinasrc="/assets/images/products/214/506x384/b1171155c3d25c5cfe2edfc56c757026d669b566.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832942</div>
                                            <div class="title-h6">Дверь балкон</div>


                                            <span class="price">
                    8 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="215">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                            <div class="product-tag-sale">
                                                -6%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/215/253x192/eea03de9c76e31bfab92b3e9903d50e6f3f5c69a.jpg")}}s
                                                 alt="Дверь для сауны, 69х189 см, цвет матовая бронза"
                                                 data-retinasrc="/assets/images/products/215/506x384/eea03de9c76e31bfab92b3e9903d50e6f3f5c69a.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832947</div>
                                            <div class="title-h6">Дверь для сауны, 69х189 см, цвет матовая бронза</div>


                                            <span class="old-price">
                    5 000  ₽                 </span>
                                            <span class="price">
                    4 700  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="product-carousel-wrapper popular-carousel">
                        <div class="row products-carousel" id="products_carousel_2">
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="202">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>

                                            <div class="product-tag-popular">Хит</div>

                                            <div class="product-tag-sale">
                                                -14%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/202/253x192/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg")}}s
                                                 alt="Дверь входная металлическая Стройгост"
                                                 data-retinasrc="/assets/images/products/202/506x384/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832932</div>
                                            <div class="title-h6">Дверь входная металлическая Стройгост</div>


                                            <span class="old-price">
                    7 000  ₽                 </span>
                                            <span class="price">
                    6 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="203">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">

                                            <div class="product-tag-popular">Хит</div>

                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/203/253x192/49f7fc298ab3c6f211898182f56460806a55fc49.jpg")}}s
                                                 alt="Дверь входная металлическая Isoterma"
                                                 data-retinasrc="/assets/images/products/203/506x384/49f7fc298ab3c6f211898182f56460806a55fc49.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832931</div>
                                            <div class="title-h6">Дверь входная металлическая Isoterma</div>


                                            <span class="price">
                    5 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="204">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">

                                            <div class="product-tag-popular">Хит</div>

                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/204/253x192/192f745e36ee8ae5864034c4b8b5db825f0058e5.jpg")}}s
                                                 alt="Дверь межкомнатная Helli1"
                                                 data-retinasrc="/assets/images/products/204/506x384/192f745e36ee8ae5864034c4b8b5db825f0058e5.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832940</div>
                                            <div class="title-h6">Дверь межкомнатная Helli1</div>


                                            <span class="price">
                    6 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="205">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">

                                            <div class="product-tag-popular">Хит</div>

                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/205/253x192/92b416fcd8e03e48f1721332c0ba2c9c7ebfbd50.jpg")}}s
                                                 alt="Дверь межкомнатная Helli2"
                                                 data-retinasrc="/assets/images/products/205/506x384/92b416fcd8e03e48f1721332c0ba2c9c7ebfbd50.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832941</div>
                                            <div class="title-h6">Дверь межкомнатная Helli2</div>


                                            <span class="price">
                    3 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="208">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">

                                            <div class="product-tag-popular">Хит</div>

                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/208/253x192/ea473c4d6c494c51555f84f8eeaf0924196120b9.jpg")}}s
                                                 alt="Дверь входная металлическая"
                                                 data-retinasrc="/assets/images/products/208/506x384/ea473c4d6c494c51555f84f8eeaf0924196120b9.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832931</div>
                                            <div class="title-h6">Дверь входная металлическая</div>


                                            <span class="price">
                    9 888  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="product-carousel-wrapper sale-carousel">
                        <div class="row products-carousel" id="products_carousel_3">
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="202">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>

                                            <div class="product-tag-popular">Хит</div>

                                            <div class="product-tag-sale">
                                                -14%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/202/253x192/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg")}}s
                                                 alt="Дверь входная металлическая Стройгост"
                                                 data-retinasrc="/assets/images/products/202/506x384/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832932</div>
                                            <div class="title-h6">Дверь входная металлическая Стройгост</div>


                                            <span class="old-price">
                    7 000  ₽                 </span>
                                            <span class="price">
                    6 000  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="209">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                            <div class="product-tag-sale">
                                                -5%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/209/253x192/9011459d19b5e25565c191b6d15a880765be96c7.jpg")}}s
                                                 alt="Дверь входная металлическая Плющ"
                                                 data-retinasrc="/assets/images/products/209/506x384/9011459d19b5e25565c191b6d15a880765be96c7.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832931</div>
                                            <div class="title-h6">Дверь входная металлическая Плющ</div>


                                            <span class="old-price">
                    26 000  ₽                 </span>
                                            <span class="price">
                    24 661  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="element relative text-center">
                                    <form method="post" class="ms2_form">
                                        <input type="hidden" name="id" value="215">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="options" value="[]">
                                        <a class="absolute"
                                           href="#"></a>


                                        <div class="product-tags">
                                            <div class="product-tag-new">Новинка</div>


                                            <div class="product-tag-sale">
                                                -6%
                                            </div>
                                        </div>


                                        <div class="img-wrapper">
                                            <img class="active"
                                                 src={{asset("assets/images/products/215/253x192/eea03de9c76e31bfab92b3e9903d50e6f3f5c69a.jpg")}}s
                                                 alt="Дверь для сауны, 69х189 см, цвет матовая бронза"
                                                 data-retinasrc="/assets/images/products/215/506x384/eea03de9c76e31bfab92b3e9903d50e6f3f5c69a.jpg"/>
                                        </div>
                                        <div class="element-content">
                                            <div class="element-article f12">Артикул: 51832947</div>
                                            <div class="title-h6">Дверь для сауны, 69х189 см, цвет матовая бронза</div>


                                            <span class="old-price">
                    5 000  ₽                 </span>
                                            <span class="price">
                    4 700  ₽                 </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="banner-carousel">
                <div class="item">
                    <div class="item-inner">
                        <a href="#">
                            <img src={{asset("assets/cache_image/images/banners/horizont-banner1_1240x250_b11.jpg")}}s
                                 alt="Баннер -30% на входные двери" title=""/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="push20"></div>


        </div>
        <div class="push50"></div>
    </section>

    <div class="shop-categories gray-bg">
        <div class="push65"></div>
        <div class="container">
            <h2 class="line white">Популярные категории</h2>
            <div class="shop-categories-carousel-wrapper relative">
                <div class="row row-border shop-categories-carousel">
                    <div class="col-sm-12 col-md-6 categories-wrapper">
                        <div class="element-wrapper">
                            <div class="element">
                                <div class="element-inner">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-4 col-xs-4">
                                            <div class="img-wrapper">
                                                <div class="img-inner">
                                                    <a href="#"><img
                                                            src={{asset("assets/cache_image/images/categories/1_220x0_750.jpg")}}s
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-8 col-xs-8">
                                            <div class="element-content">
                                                <div class="title">
                                                    <a href="#"
                                                       title="Входные двери">Входные двери</a>
                                                </div>
                                                <div class="sub-categories-list">
                                                    <div>
                                                        <a href="#"
                                                           title="Для квартиры">Для квартиры</a></div>
                                                    <div><a href="#"
                                                            title="Для дома">Для дома</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Технические">Технические</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Металлические">Металлические</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="more">Смотреть все</a>
                                </div>
                            </div>
                        </div>

                        <div class="element-wrapper">
                            <div class="element">
                                <div class="element-inner">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-4 col-xs-4">
                                            <div class="img-wrapper">
                                                <div class="img-inner">
                                                    <a href="#"><img
                                                            src={{asset("assets/cache_image/images/categories/2_220x0_750.jpg")}}s
                                                            alt="q"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-8 col-xs-8">
                                            <div class="element-content">
                                                <div class="title">
                                                    <a href="#"
                                                       title="Межкомнатные двери">Межкомнатные двери</a>
                                                </div>
                                                <div class="sub-categories-list">
                                                    <div>
                                                        <a href="#"
                                                           title="Из массива">Из массива</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Шпонированные">Шпонированные</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Для ванной">Для ванной</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Двери со стеклом">Двери со стеклом</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="more">Смотреть
                                        все</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 categories-wrapper">
                        <div class="element-wrapper">
                            <div class="element">
                                <div class="element-inner">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-4 col-xs-4">
                                            <div class="img-wrapper">
                                                <div class="img-inner">
                                                    <a href="#"><img
                                                            src={{asset("assets/cache_image/images/categories/4_220x0_750.jpg")}}s
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-8 col-xs-8">
                                            <div class="element-content">
                                                <div class="title">
                                                    <a href="#"
                                                       title="Дверные коробки, наличники и доборы">Дверные коробки,
                                                        наличники и доборы</a>
                                                </div>
                                                <div class="sub-categories-list">
                                                    <div>
                                                        <a href="#"
                                                           title="Дверные коробки">Дверные коробки</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Наличники дверные">Наличники дверные</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Доборы">Доборы</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"
                                       class="more">Смотреть все</a>
                                </div>
                            </div>
                        </div>

                        <div class="element-wrapper">
                            <div class="element">
                                <div class="element-inner">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-4 col-xs-4">
                                            <div class="img-wrapper">
                                                <div class="img-inner">
                                                    <a href="#"><img
                                                            src={{asset("assets/cache_image/images/categories/3_220x0_750.jpg")}}s
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-8 col-xs-8">
                                            <div class="element-content">
                                                <div class="title">
                                                    <a href="#"
                                                       title="Прочее">Прочее</a>
                                                </div>
                                                <div class="sub-categories-list">
                                                    <div><a href="#"
                                                            title="Балконные двери">Балконные двери</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Арки межкомнатные">Арки межкомнатные</a></div>
                                                    <div><a href="#"
                                                            title="Двери для сауны">Двери для сауны</a></div>
                                                    <div>
                                                        <a href="#"
                                                           title="Раздвижные двери ПВХ">Раздвижные двери ПВХ</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="more">Смотреть все</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="push40"></div>
    </div>


    <section class="banners-section">
        <div class="push80"></div>
        <div class="container">
            <div class="index-banner-wrapper-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-carousel">
                            <div class="item">
                                <div class="item-inner">
                                    <a href="#">
                                        <img
                                            src={{asset("assets/cache_image/images/banners/banner1-2_610x480_033.jpg")}}s
                                            alt="Современные массивные двери" title=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <a href="#">
                                        <img src={{asset("assets/cache_image/images/banners/banner1_610x480_033.jpg")}}s
                                             alt="Двери из дерева -40%" title=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-carousel">
                            <div class="item">
                                <div class="item-inner">
                                    <a href="#">
                                        <img
                                            src={{asset("assets/cache_image/images/banners/banner2-1_610x230_1d3.jpg")}}s
                                            alt="Двери из стали" title=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-carousel">
                            <div class="item">
                                <div class="item-inner">
                                    <a href="#">
                                        <img src={{asset("assets/cache_image/images/banners/banner3_610x230_1d3.jpg")}}s
                                             alt="Комнатные двери" title=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section recommended-section">
        <div class="push60"></div>
        <div class="container">
            <h2 class="line">Мы рекомендуем</h2>
            <div class="catalog-type2 recommended-carousel-wrapper">
                <div class="row no-padding recommended-carousel">
                    <div class="col-sm-6 col-md-4">
                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/202/253x192/f8fbf0e85cc207cd0c9076f28f19b8262c41013e.jpg")}}s
                                        alt="Дверь входная металлическая Стройгост"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832932</div>
                                    <div class="title">Дверь входная металлическая Стройгост</div>
                                    <div class="price-wrap">
                                        <span class="old-price">7 000  ₽ </span>
                                        <span class="price">
                        6 000  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/203/253x192/49f7fc298ab3c6f211898182f56460806a55fc49.jpg")}}s
                                        alt="Дверь входная металлическая Isoterma"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832931</div>
                                    <div class="title">Дверь входная металлическая Isoterma</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        5 000  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/206/253x192/46767c40958f67f6be984d0aa148617168b0e38a.jpg")}}s
                                        alt="Дверь межкомнатная Дюплекс1"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832942</div>
                                    <div class="title">Дверь межкомнатная Дюплекс1</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        3 800  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/207/253x192/58a1014266c5560ff78483737ad3af7c607fd711.jpg")}}s
                                        alt="Дверь межкомнатная остеклённая Ницца"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832942</div>
                                    <div class="title">Дверь межкомнатная остеклённая Ницца</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        3 800  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/211/253x192/72b80041900e02986a8923a7ddc375ecb0a77bb9.jpg")}}s
                                        alt="Комплект дверной коробки"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 518329319</div>
                                    <div class="title">Комплект дверной коробки</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        880  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/212/253x192/6168a4aa9b1fe4d9915dc4e1516d26f954642fa5.jpg")}}s
                                        alt="Комплект наличников Artens"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 518329318</div>
                                    <div class="title">Комплект наличников Artens</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        1 200  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/214/253x192/b1171155c3d25c5cfe2edfc56c757026d669b566.jpg")}}s
                                        alt="Дверь балкон"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832942</div>
                                    <div class="title">Дверь балкон</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        8 000  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/215/253x192/eea03de9c76e31bfab92b3e9903d50e6f3f5c69a.jpg")}}s
                                        alt="Дверь для сауны, 69х189 см, цвет матовая бронза"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832947</div>
                                    <div class="title">Дверь для сауны, 69х189 см, цвет матовая бронза</div>
                                    <div class="price-wrap">
                                        <span class="old-price">5 000  ₽ </span>
                                        <span class="price">
                        4 700  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="element">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/219/253x192/b4d322607e9afaa3413802b3c28ea40435ffac74.jpg")}}s
                                        alt="Козырёк K1, 1200x950 мм"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832944</div>
                                    <div class="title">Козырёк K1, 1200x950 мм</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        2 656  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="element relative">
                            <div class="element-inner">
                                <a class="absolute"
                                   href="#"></a>
                                <div class="img-wrapper">
                                    <img
                                        src={{asset("assets/images/products/210/253x192/ce9e48dc485e5d988367f7c01ad555ea60d83e5a.jpg")}}s
                                        alt="Входная дверь с коробом"/>
                                </div>
                                <div class="element-content">
                                    <div class="element-article">Артикул: 51832931</div>
                                    <div class="title">Входная дверь с коробом</div>
                                    <div class="price-wrap">
                                        <span class="price">
                        7 000  ₽                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="about-section">
        <div class="push80"></div>
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-lg-5 col-sm-push-6 col-lg-push-7 index-about-img-wrapper">


                    <div class="index-about-img">
                        <img src={{asset("images/categories/dveri-gluxaya-i-so-steklom-v-interere.jpg")}}s alt="">
                    </div>
                    <div class="dots-bg"><img src={{asset("assets/template/images/mask-group-9.png")}}s alt="qw"></div>


                    <div class="push50 visible-xs"></div>
                </div>

                <div class="col-sm-6 col-lg-7 col-sm-pull-6 col-lg-pull-5">
                    <div class="content">
                        <h1 class="line"><strong>ГОТОВЫЙ САЙТ ПО ПРОДАЖЕ ДВЕРЕЙ DOORS SHOP</strong></h1>
                        <p>Мы предлагаем Вам купить готовый сайт по продаже дверей и аксессуаров. Если ваша компания
                            продает межкомнатные и входные двери различных брендов или у вас собственное производство -
                            наш шаблон сайта интернет-магазина дверей, точно для вас! Наши разработчики позаботились о
                            том, чтоб управлять нашим сайтом было удобно и просто, вам не нужно быть программистом - мы
                            все сделали для вас!</p>
                        <h2><strong>Интернет магазин дверей за 2 дня!</strong></h2>
                        <p><strong>Полностью готовый к запуску шаблон интернет-магазина разработан специалистами команды
                                ULTRON</strong>. Покупая сайт у нас вы гарантированно получаете высококлассный продукт и
                            нашу поддержку.</p>
                        <p>Адаптивный дизайн и профессиональный дизайн, удобное управление и все необходимые компоненты
                            для современного магазина уже собраны и готовы к запуску. остается разместить сайт на

                            хостинге, обновить информацию и начать принимать заказы!<br/><br/><em>С нами строить бизнес
                                - просто!</em></p>
                    </div>
                    <a class="button" href="#">Подробнее</a>
                </div>


            </div>
        </div>
        <div class="push50"></div>
    </div>

    <section class="news-section gray-bg">
        <div class="push70"></div>
        <div class="container">
            <div class="news">
                <h2 class="line">Новости</h2>
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <div class="element relative">
                            <a href="#"
                               class="absolute visible-xs visible-sm"></a>
                            <div class="element-img"
                                 style="background-image: url({{asset("assets/cache_image/images/news/n8_430x390_252.jpg")}});"></div>
                            <div class="element-inner">
                                <div class="element-date">
                                    <div class="day">
                                        04
                                    </div>
                                    <div class="month_year">
                                        Сентября 2020
                                    </div>
                                </div>
                                <div class="element-title">
                                    Формы деятельности и их развитие
                                </div>

                                <a class="element-btn" href="#">
                                    <span>Подробнее</span>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                         data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-2x">
                                        <path fill="currentColor"
                                              d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"
                                              class=""></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="element relative">
                            <a href="#"
                               class="absolute visible-xs visible-sm"></a>
                            <div class="element-img"
                                 style="background-image: url({{asset("assets/cache_image/images/news/n9_430x390_252.jpg")}});"></div>
                            <div class="element-inner">
                                <div class="element-date">
                                    <div class="day">
                                        11
                                    </div>
                                    <div class="month_year">
                                        Августа 2020
                                    </div>
                                </div>
                                <div class="element-title">
                                    Организационной деятельности позволяет оценить
                                </div>

                                <a class="element-btn"
                                   href="#">
                                    <span>Подробнее</span>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                         data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-2x">
                                        <path fill="currentColor"
                                              d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"
                                              class=""></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="element relative">
                            <a href="#"
                               class="absolute visible-xs visible-sm"></a>
                            <div class="element-img"
                                 style="background-image: url({{asset("assets/cache_image/images/news/n7_430x390_252.jpg")}});"></div>
                            <div class="element-inner">
                                <div class="element-date">
                                    <div class="day">
                                        01
                                    </div>
                                    <div class="month_year">
                                        Мая 2020
                                    </div>
                                </div>
                                <div class="element-title">
                                    Дальнейшее развитие различных форм деятельности
                                </div>

                                <a class="element-btn"
                                   href="#">
                                    <span>Подробнее</span>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                         data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 448 512" class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-2x">
                                        <path fill="currentColor"
                                              d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"
                                              class=""></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="push60"></div>
    </section>


    <section class="brands-section">
        <div class="push20"></div>
        <div class="container">
            <div class="brands-carousel">

                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand3_190x0_795.jpg")}}s
                                         alt="ARTENS">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand8_190x0_795.jpg")}}s
                                         alt="DOORHAN">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand7_190x0_795.jpg")}}s
                                         alt="GROSFILLEX">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand1_190x0_795.jpg")}}s
                                         alt="TOREX">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand4_190x0_795.jpg")}}s
                                         alt="VELLDORIS">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand5_190x0_795.jpg")}}s
                                         alt="VERDA">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="logotype text-center relative text-center">

                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src={{asset("assets/cache_image/images/brands/brand6_190x0_795.jpg")}}s
                                         alt="КРАСНОДЕРЕВЩИК">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="push10"></div>
    </section>


    <section class="map-section relative">

        <div class="map-wrapper">
            <script src="https://api-maps.yandex.ru/2.1/?load=package.full&amp;lang=ru-RU"></script>
            <div id="mapexMap" style="width:100%;height:100%;"></div>
            <script type="text/javascript">
                ymaps.ready(function () {
                    var mapexMap = new ymaps.Map('mapexMap', {
                            center: [55.658069447568, 37.54007454993],
                            zoom: 16,
                            controls: ['zoomControl']
                        }),


                        myPlacemark = new ymaps.Placemark(
                            [55.658081578467, 37.540117465274],
                            {
                                "iconContent": "",
                                "balloonContentBody": "\u041c\u043e\u0441\u043a\u0432\u0430 \u0443\u043b. \u041a\u0430\u043b\u0443\u0436\u0441\u043a\u0430\u044f, 80",
                                "balloonContentHeader": ""
                            }, {
                                // Опции.
                                // Необходимо указать данный тип макета.
                                iconLayout: 'default#image',
                                // Своё изображение иконки метки.
                                iconImageHref: '/assets/template/images/marker.png',
                                // Размеры метки.
                                iconImageSize: [39, 56],
                                // Смещение левого верхнего угла иконки относительно
                                // её "ножки" (точки привязки).
                                iconImageOffset: [-20, -56]
                            });
                    mapexMap.behaviors.disable('scrollZoom');
                    mapexMap.geoObjects.add(myPlacemark);


                });
            </script>
        </div>

    </section>
    <div class="footer-push"></div>
</div>

@include('user.footer')

<div class="modal" id="callback">
    <div class="title">Закажите звонок</div>
    <p>И наш менеджер свяжется с вами в течение 10 минут</p>
    <div class="rf">
        <form method="post" class="ajax_form" id="callbackform">
            <div class="form-group">
                <label class="label">Ваше имя *</label>
                <input name="callbackfio" value="" type="text" class="form-control required" placeholder="Ваше имя *"/>
            </div>
            <div class="form-group">
                <label class="label">Ваш телефон *</label>
                <input name="callbacktel" value="" type="text" class="form-control required tel"
                       placeholder="Ваш  телефон *"/>
            </div>
            <input type="hidden" name="callbackantispam" value="">
            <br/>
            <div class="agreement form-group">
                <input type="checkbox" name="agreement" id="agreement1" class="required">
                <label for="agreement1">
                    <i class="material-icons checked">check_box</i>
                    <i class="material-icons no-checked">check_box_outline_blank</i>
                    Даю согласие на обработку персональных данных в соответствии с <a
                        href="#">политикой конфиденциальности</a>
                    *
                </label>
            </div>
            <input name="callbackbtn" type="submit" class="button invert btn" value="Заказать звонок"/>

            <input type="hidden" name="af_action" value="7ac182ce58d4400be0499dfe967965e6"/>
        </form>
    </div>
</div>


<div class="modal" id="productapplication">
    <div class="title-h3">Быстрый заказ</div>
    <p>
        Оставьте Ваш номер телефона <br>
        и наш оператор примет заказ в течение 5 минут
    </p>
    <div class="push20"></div>
    <div class="rf">
        <form method="post" class="ajax_form">
            <input name="link" type="hidden" value="https://doorsfull.demoultron.ru/index">
            <div class="form-group">
                <input name="productname" type="text" class="form-control" id="productapplicationinput" readonly>
            </div>

            <div class="form-group">
                <input name="fio" type="text" class="form-control required" placeholder="Ваше имя *" value="">
            </div>
            <div class="form-group">
                <input name="tel" type="text" class="form-control required tel" placeholder="Ваш телефон *" value="">
            </div>
            <br>

            <div class="agreement form-group">
                <input type="checkbox" name="agreement" id="agreementproductapplication" class="required">
                <label for="agreementproductapplication">
                    <i class="material-icons checked">check_box</i>
                    <i class="material-icons no-checked">check_box_outline_blank</i>
                    Даю согласие на обработку персональных данных в соответствии с <a
                        href="#">политикой конфиденциальности</a>
                    *
                </label>
            </div>
            <div class="push10"></div>

            <input name="productapplicationbtn" type="submit" class="button btn invert" value="Оформить заказ">

            <input type="hidden" name="af_action" value="8dd24dc88fe37fd81fd14cd75f0f1bc1"/>
        </form>
    </div>
</div>


<span id="up"><i class="fa fa-angle-up"></i></span>
<!--[if lt IE 9]>
<script src={{asset("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js")}}></script>
<script src={{asset("https://oss.maxcdn.com/respond/1.4.2/respond.min.js")}}></script>
<![endif]-->
<script src={{asset("assets/template/js/jquery-3.2.1.min.js")}}></script>
<script src={{asset("assets/template/js/modernizr.js")}}></script>
<script src={{asset("assets/template/js/jquery.fancybox.js")}}></script>
<script src={{asset("assets/template/js/slick.js")}}></script>
<script src={{asset("assets/template/js/jquery.inputmask.js")}}></script>
<script src={{asset("assets/template/js/jquery.mousewheel.js")}}></script>
<script src={{asset("assets/template/js/jquery.jscrollpane.min.js")}}></script>
<script src={{asset("assets/template/js/scripts.js")}}></script>
<script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js")}}></script>


<div class="modal" id="responseMessage">
    <div class="title-h3" id="responseMessageTitle"></div>
    <hr/>
    <div class="modal-body" id="responseMessageBody"></div>
    <div class="push25"></div>
    <div class="row">
        <div class="col-xs-7 col-sm-5">
            <a href="#" class="button block invert fancyClose">Закрыть</a>
        </div>
    </div>
</div>

<script>
    $(document).on('af_complete', function (event, response) {
        $('body').addClass('jgrowlHide');
        setTimeout(function () {
            $('body').removeClass('jgrowlHide');
        }, 5000);


        if (response.success) {
            $.fancybox.open([{href: '#responseMessage', padding: 0}]);
            $('#responseMessageTitle').text('Сообщение успешно отправлено!');
            $('#responseMessageBody').html('<p>' + response.message + '</p>');
            $('.fancyClose').click(function () {
                $.fancybox.close('#responseMessage');
                return false;
            });
        } else {
            $.fancybox.open([{href: '#responseMessage', padding: 0}]);
            $('#responseMessageTitle').text('Сообщение не отправлено!');
            $('#responseMessageBody').html('<p>' + response.message + '</p>');
            $('.fancyClose').click(function () {
                $.fancybox.close('#responseMessage');
                return false;
            });
        }
    });


    $(function () {

        $('.tel, #phone').inputmask('+7 (999) 999 99 99', {
            clearMaskOnLostFocus: true
        });

    });
</script>

<!-- /. Footer -->


<!-- /. End Footer -->

<script src="https://doorsfull.demoultron.ru/assets/components/msearch2/js/web/custom.js"></script>

<script type="text/javascript">
    if ($("form.msearch2").length) {
        mSearch2.Form.initialize("form.msearch2");
    }
</script>
<script src={{asset("assets/template/js/minishop.js")}}></script>
<script
    src={{asset("https://doorsfull.demoultron.ru/assets/components/minishop2/js/web/lib/jquery.jgrowl.min.js")}}></script>
<script src="https://doorsfull.demoultron.ru/assets/components/minishop2/js/web/message_settings.js"></script>
<script src="https://doorsfull.demoultron.ru/assets/components/msfavorites/js/default.min.js?v=1b350711"></script>
<script src="https://doorsfull.demoultron.ru/assets/components/ajaxform/js/default.js"></script>
<script>AjaxForm.initialize({
        "assetsUrl": "\/assets\/components\/ajaxform\/",
        "actionUrl": "\/assets\/components\/ajaxform\/action.php",
        "closeMessage": "\u0437\u0430\u043a\u0440\u044b\u0442\u044c \u0432\u0441\u0435",
        "formSelector": "form.ajax_form",
        "clearFieldsOnSuccess": true,
        "pageId": 1
    });</script>
</body>
</html>
