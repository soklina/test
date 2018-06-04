
<title>@yield('page_title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="">
<meta name="domain" content="{{ url('/') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Facebook web master meta -->
@if(!empty($fbMeta))
<meta property="og:url"           content="{{ $fbMeta->url }}" />
<meta property="og:type"          content="{{ $fbMeta->type }}" />
<meta property="og:title"         content="{{ $fbMeta->title }}" />
<meta property="og:description"   content="{{ $fbMeta->description }}" />
<meta property="og:image"         content="{{ $fbMeta->image }}" />
@else
<meta property="og:url"           content="http://tousnatv.com" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="tousnatv &amp; NEWS WEBSITE" />
<meta property="og:description"   content="We are the next leading media and news website in cambodia" />
<meta property="og:image"         content="http://tousnatv.com/images/logo/site_logo_medium.png" />
@endif

<link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hanuman|Koulen" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('lib/uikit2/css/uikit.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet' type='text/css'>
<!---styleupdate-->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/colorbox.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.video.play.html')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

