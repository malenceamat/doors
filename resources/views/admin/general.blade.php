<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href={{asset("src/assets/img/favicon.ico")}}/>
    <!-- ENABLE LOADERS -->
    <link href={{asset("layouts/vertical-light-menu/css/light/loader.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("layouts/vertical-light-menu/css/dark/loader.css")}} rel="stylesheet" type="text/css"/>
    <script src={{asset("layouts/vertical-light-menu/loader.js")}}></script>
    <!-- /ENABLE LOADERS -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href={{asset("https://fonts.googleapis.com/css?family=Nunito:400,600,700")}} rel="stylesheet">
    <link href={{asset("src/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("layouts/vertical-light-menu/css/light/plugins.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("layouts/vertical-light-menu/css/dark/plugins.css")}} rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" type="text/css" href={{asset("src/assets/css/light/elements/alert.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("src/assets/css/dark/elements/alert.css")}}>
    <link href={{asset("src/assets/css/light/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>


    <style>
        body.dark .layout-px-spacing, .layout-px-spacing {
            min-height: calc(100vh - 155px) !important;
        }
    </style>

</head>
<body class="layout-boxed">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<div class="header-container">
    @include('admin.navbar')
</div>

<div class="main-container " id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="container" style="display: block;">
            <div class="row layout-top-spacing">
                <div id="fuSingleFile" class="col-lg-12 layout-spacing" >
                    <div class="statbox widget box box-shadow">
                        @if ($errors->any())
                            <div class="alert alert-danger mt-1 mb-1">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="widget-content widget-content-area">
                            @yield('slider')
                            @yield('slider_show')
                            @yield('info_create_update')
                            @yield('info_show')
                            @yield('banner')
                            @yield('blog')
                            @yield('pay_delivery_create')
                            @yield('partners_create')
                            @yield('partners_show')
                            @yield('about')
                            @yield('news')
                            @yield('news_show')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src={{asset("src/plugins/src/global/vendors.min.js")}}></script>
<script src={{asset("src/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("layouts/vertical-light-menu/app.js")}}></script>
<script src={{asset("src/assets/js/custom.js")}}></script>
</body>
</html>
