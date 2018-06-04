<html>
<head>
    @includeIf('visitor.partials._head')
    @stack('styles')
</head>
<body id="main-body">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if(d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=120640301845733";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    @includeIf('visitor.partials._navigation')
    @yield('slideshow')

    @yield('content')

    @includeIf('visitor.partials._footer')

    <script src="{{asset('frontend/js/bootsrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/ini.isotope.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.colorbox.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>

    <!-- Required script -->
    <!-- <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/modernizr/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/uikit.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/sticky.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/slideshow.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/slideshow-fx.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/pagination.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/grid.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/slideset.min.js') }}"></script>
    <script src="{{ asset('lib/uikit2/js/components/lightbox.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

      -->

   

    @stack('script_dependencies')
    @yield('script')

</body>
</html>
