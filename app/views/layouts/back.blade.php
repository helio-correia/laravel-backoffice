<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        @yield('title','Laravel Backoffice')
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Files-->

    <!--Main-->
    <link rel="stylesheet" href="/css/main.css"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.min.css"/>

    <!--FontAwesome CSS-->
    <link rel="stylesheet" href="/components/fontawesome/css/font-awesome.min.css"/>

</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

@include('partials/_navbarBackoffice')

<div class="container">
    @yield('content')
</div>

<script src="/components/jquery/dist/jquery.min.js"></script>
<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/js/laravel.js"></script>
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>

 