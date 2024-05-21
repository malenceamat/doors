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
    <link href={{asset("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap")}} s
          rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <link href={{asset("assets/template/css/font-awesome.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/bootstrap.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/jquery.fancybox.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/jquery.jscrollpane.css")}} rel="stylesheet">
    <link href={{asset("assets/template/css/style.css")}} rel="stylesheet">
    <link href={{asset("assets/fotorama.css")}} rel="stylesheet">


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

<script src="https://doorsfull.demoultron.ru/assets/components/msearch2/js/web/custom.js"></script>

<script type="text/javascript">
    if ($("form.msearch2").length) {
        mSearch2.Form.initialize("form.msearch2");
    }
</script>
<script src={{asset("assets/template/js/minishop.js")}}></script>
<script
    src={{asset("https://doorsfull.demoultron.ru/assets/components/minishop2/js/web/lib/jquery.jgrowl.min.js")}}></script>
<script src={{asset("assets/mini_shop2.js")}}></script>
<script src={{asset("assets/ms_favorites.js")}}></script>
<script src={{asset("assets/ajax_form.js")}}></script>
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
