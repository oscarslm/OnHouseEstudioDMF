@extends('layouts.master')

@section('title', 'Comercial')

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

		<div class="row">
			<div class="col-lg-6">
				<div class="title-block">
					<h2>
						<div class="text-rotater d-none d-lg-block" data-separator="|" data-rotate="bounceIn" data-speed="2500">
							Sabemos lo importante que es tu negocio, por lo que nos preocupamos y nos ocupamos por que funcione correctamente.
						</div>
						<div class="d-block d-lg-none">Sabemos lo importante que es tu negocio, por lo que nos preocupamos y nos ocupamos por que funcione correctamente.</div>
					</h2>
					<span>¿Cómo? Mediante un proyecto pensado desde un diseño funcional, original, con personalidad, una correcta y óptima operación, hasta el impacto que va a generar al cliente.</span>
				</div>

				<p>Esto mediante un análisis de las necesidades primeramente de ti que vas a brindar un servicio, ¿Qué? ¿Cómo? Tanto del cliente para poder ofrecerle un servicio excepcional. No importa si es un espacio pequeño, mediano o grande, lo importante es transmitir al cliente la seguridad de que están en un lugar especial.</p>
				<p>Esto también puede ser implementado con la tecnología necesaria para que puedas mantener el control de tu negocio a través de control manual o de voz.</p>
			</div>
			<div class="col-lg-6">
				<div class="fslider mb-5" data-easing="easeInQuad">
					<div class="flexslider">
						<div class="slider-wrap" data-lightbox="gallery">
							<div class="slide" data-thumb="{{ asset('images/architecture/commercial-1.jpg') }}">
								<a href="{{ asset('images/architecture/commercial-1.jpg') }}" data-lightbox="gallery-item">
									<img src="{{ asset('images/architecture/commercial-1.jpg') }}" alt="@yield('title')">
									<div class="flex-caption slider-caption-bg">@yield('title')</div>
								</a>
							</div>
							<div class="slide" data-thumb="{{ asset('images/architecture/commercial-2.jpg') }}">
								<a href="{{ asset('images/architecture/commercial-2.jpg') }}" data-lightbox="gallery-item">
									<img src="{{ asset('images/architecture/commercial-2.jpg') }}" alt="@yield('title')">
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
			</div>
		</div><!--.row-->

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
