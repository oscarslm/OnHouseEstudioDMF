<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="On House Estudio DMF" >
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')" />
	<meta name=”robots” content="index, follow">

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('site.webmanifest') }}">
	<link rel="mask-icon" href="{{ asset('images/icons/safari-pinned-tab.svg') }}" color="#15144f">
	<meta name="apple-mobile-web-app-title" content="On House Estudio DMF">
	<meta name="application-name" content="On House Estudio DMF">
	<meta name="msapplication-TileColor" content="#15144f">
	<meta name="theme-color" content="#15144f">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />

	<!-- Stylesheets
	============================================= -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	@stack('css')
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>@yield('title') | {{ config('app.name') }}</title>
</head>
<body class="stretched" data-loader="8" data-loader-color="#15144f">

	<!-- The Main Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		@include('includes.header')

		<!-- Slider
		============================================= -->
		@yield('slider')

		<!-- Page Title
		============================================= -->
		@yield('page-title')

		<!-- Site Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				@yield('content')

			</div><!--.content-wrap-->

		</section>

		<!-- Footer
		============================================= -->
		@include('includes.footer')

	</div><!--#wrapper-->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>
	@stack('js')
</body>
</html>