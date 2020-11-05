@extends('layouts.master')

@section('title', 'Habitacional')

@push('css')
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
@endpush

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Desarrollo a la Medida</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item">Arquitectura</li>
				<li class="breadcrumb-item">Desarrollo de Proyectos</li>
				<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
			</ol>
		</div>
	</section><!-- #page-title end -->
@endsection

@section('content')

	<div class="container clearfix">

		<div class="fslider mb-5" data-easing="easeInQuad">
			<div class="flexslider">
				<div class="slider-wrap" data-lightbox="gallery">
					<div class="slide" data-thumb="{{ asset('images/architecture/housing-1.jpg') }}">
						<a href="{{ asset('images/architecture/housing-1.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/architecture/housing-1.jpg') }}" alt="@yield('title')">
							<div class="flex-caption slider-caption-bg">@yield('title')</div>
						</a>
					</div>
					<div class="slide" data-thumb="{{ asset('images/architecture/housing-2.jpg') }}">
						<a href="{{ asset('images/architecture/housing-2.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/architecture/housing-2.jpg') }}" alt="@yield('title')">
							<div class="flex-caption slider-caption-bg slider-caption-bg-light slider-caption-top-left">@yield('title')</div>
						</a>
					</div><!-- 
					<div class="slide" data-thumb="images/slider/boxed/thumbs/4.jpg">
						<a href="#">
							<img src="images/slider/boxed/4.jpg" alt="Slide 4">
							<div class="flex-caption slider-caption-bg slider-caption-top-right">Bootstrap 3+ Compatible</div>
						</a>
					</div>
					<div class="slide" data-thumb="images/slider/boxed/thumbs/5.jpg">
						<a href="#">
							<img src="images/slider/boxed/5.jpg" alt="Slide 5">
							<div class="flex-caption slider-caption-bg slider-caption-bg-light slider-caption-bottom-right">eCommerce Design Included</div>
						</a>
					</div> -->
				</div>
			</div><!--.flexslider-->
		</div><!--.fslider-->

		<div class="title-block">
			<h2>
				<div class="text-rotater d-none d-lg-block" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					Nos dedicamos a <span class="t-rotate color">crear composiciones desde cero|remodelar cualquier espacio de tu casa</span>.
				</div>
				<div class="d-block d-lg-none">Nos dedicamos a crear composiciones desde cero y remodelar cualquier espacio de tu casa.</div>
			</h2>
			<span>Hasta todo aquello que puedas imaginarte nosotros lo hacemos realidad.</span>
		</div>

		<p> Cada espacio de tu hogar se vive y se siente de manera diferente, es por eso que es importante la elección de materiales, colores, mobiliario y elementos decorativos que logren eso que buscas transmitir.</p>
		<p>Por otro lado, la tecnología no está peleada con el diseño, fabricamos mobiliario con diseño y tecnología, imagina un mueble con audio integrado, cargador mediante inducción, puertos USB, iluminación, etc. y lo mejor de todo, automatizado por control manual o de voz.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
