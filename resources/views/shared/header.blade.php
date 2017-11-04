<header id="header" class="{{$classes or ""}} dark full-header no-sticky">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ url('') }}" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Social Genome"></a>
                <a href="{{ url('') }}" class="retina-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Social Genome"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="{{ route('home') }}"><div>Home</div></a></li>
                    <li><a href="{{ route('feed') }}"><div>News Feed</div></a></li>
                </ul>

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header>