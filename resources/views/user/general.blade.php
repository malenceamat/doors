<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Готовый интернет-магазин межкомнатных и входных дверей | Шаблон интернет магазина дверей</title>
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#493939"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="modxru" content="f9b7dcac4f8e7a3ce24034278ce72477"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href={{asset("images/site/favicon.png")}}/>
    <link href={{asset("assets/template/css/font-awesome.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/bootstrap.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/style.css")}} rel="stylesheet">
    <link rel="stylesheet" href={{asset("https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css")}}>
    <script src={{asset("assets/template/js/jquery-3.2.1.min.js")}}></script>
    @yield('style')
</head>
<body class="index-template id-1 parent-0">
<div class="main-wrapper">
    @include('user.header')
    @yield('content')
    @yield('pay_delivery')
    @yield('about')
    @yield('news')
    @yield('news_index')
    @yield('contacts')
    @yield('catalog')
    @yield('products_filters_list')
    @yield('card_product')
</div>
@include('user.footer')

<span id="up"><i class="fa fa-angle-up"></i></span>
<script src={{asset("assets/template/js/modernizr.js")}}></script>
<script src={{asset("assets/template/js/jquery.fancybox.js")}}></script>
<script src={{asset("assets/template/js/slick.js")}}></script>
<script src={{asset("assets/template/js/scripts.js")}}></script>
<script src={{asset("assets/ajax_form.js")}}></script>
<script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js")}}></script>
@yield('script')
</body>
</html>
