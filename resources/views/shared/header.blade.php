<?php

use App\User;

$news = User::first()->feed()->with(['study','study.phenotype'])->where('read', '=', 0)->get();
?>

<header id="header" class="{{$classes or ""}} full-header no-sticky">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ url('') }}" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Social Genome"></a>
                <a href="{{ url('') }}" class="retina-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Social Genome"></a>
            </div><!-- #logo end -->

            <div id="top-account" class="dropdown">
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="icon-user"></i><i class="icon-angle-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('profile') }}">News <span class="badge">{{count($news)}}</span></a></li>
                    <li><a href="#">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Logout <i class="icon-signout"></i></a></li>
                </ul>
            </div>

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="{{ route('home') }}"><div>Home</div></a></li>
                    {{--<li><a href="{{ route('feed') }}"><div>News Feed</div></a></li>--}}
                    <li><a href="{{ route('profile') }}"><div>My Profile</div></a></li>
                    {{--<li><a href="{{ route('network') }}"><div>My Network</div></a></li>--}}
                </ul>

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header>