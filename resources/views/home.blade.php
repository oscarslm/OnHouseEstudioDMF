@extends('layouts.master')

@section('title', 'Inicio')

@push('js')
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />
@endpush

@section('slider')

	<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">

		<div class="slider-parallax-inner">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('{{ asset('images/slider/estilo-minimalista.jpg') }}');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-animate="fadeInUp">Proyectos Integrales</h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">De Arquitectura Domótica y Diseño de Interiores en viviendas particulares, oficinas y locales comerciales.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('{{ asset('images/slider/estilo-nordico.jpg') }}');">
						<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Fabricación de Mobiliario</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">A la medida cubriendo las necesidades de cada vivienda, oficina y local comercial.</p>
								</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('{{ asset('images/slider/estilo-industrial.jpg') }}">
						<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Remodelaciones</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Combinando la funcionalidad y estética.</p>
								</div>
						</div>
					</div>
				</div><!--.swiper-wrapper-->
				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
			</div><!--.swiper-container-->

		</div>

	</section>

@endsection

@section('content')

	<div class="container clearfix">

	    <div class="divcenter center clearfix" style="max-width: 900px;">
			<img class="img-fluid" src="{{ asset('images/logo-variante.png') }}" alt="Logo {{ config('app.name') }} Logo">
			<h1>Bienvenido a <span>{{ config('app.name') }}</span>.</h1>
			<h3>Somos un grupo multidiscilplinar de profesionales enfocados en proyectos integrales de Arquitectura Domótica y Diseño de Interiores. Fabricación de mobiliario personalizado para vivienda, oficinas o locales comerciales.</h3>
			<a href="{{ route('Nosotros') }}" class="button button-3d button-dark button-large ">Conoce más</a>
			<a href="{{ route('Contacto') }}" class="button button-3d button-large">Contáctanos</a>
		</div>

		<div class="line"></div>

		<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">

			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>
			<div class="oc-item"><a href="http://logofury.com/"><img src="https://via.placeholder.com/150x100" alt="Clients"></a></div>

		</div>

	</div><!--.container-->

@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/@yield('title')/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush