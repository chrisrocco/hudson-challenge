<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Vector Web Development"/>
    <link rel="shortcut icon" type="image/png" href="images/dna.png?v=1"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    @yield('css')

    <!-- Document Title
    ============================================= -->
    <title>GeMe - @yield('title')</title>

</head>

<body class="stretched" data-loader="11">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

@section('header')
    @include('shared.header')
@show

@yield('slider')

@yield('page-title')

@yield('content')

@section('footer')
    @include('shared.footer')
@show
<!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

@yield('javascript')

</body>
</html>