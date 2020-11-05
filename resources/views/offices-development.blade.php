@extends('layouts.master')

@section('title', 'Oficinas')

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
					<div class="slide" data-thumb="{{ asset('images/architecture/office-1.jpg') }}">
						<a href="{{ asset('images/architecture/office-1.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/architecture/office-1.jpg') }}" alt="@yield('title') Oficina">
							<div class="flex-caption slider-caption-bg">Oficina 1</div>
						</a>
					</div>
					<div class="slide" data-thumb="{{ asset('images/architecture/office-2.jpg') }}">
						<a href="{{ asset('images/architecture/office-2.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/architecture/office-2.jpg') }}" alt="@yield('title') Oficina">
							<div class="flex-caption slider-caption-bg slider-caption-bg-light slider-caption-top-left">Oficina 2</div>
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
			</div>
		</div>

		<div class="title-block">
			<h2>
				<div class="text-rotater d-none d-lg-block" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					El 60% de un día lo pasas en la oficina.
				</div>
				<div class="d-block d-lg-none">El 60% de un día lo pasas en la oficina.</div>
			</h2>
			<span>Y ya que es uno de los lugares en donde pasas más tiempo, no tiene por que ser un martirio estar en él</span>
		</div>

		<p>El mobiliario y la decoración son muy importantes para crear ambientes super confortables en donde los trabajadores puedan desempeñar de manera óptima sus labores e incluso ser mucho más eficientes mediante espacios que sean agradables visualmente espacios de esparcimiento, con vegetación al interior, correctamente distribuidos, con mucha iluminación y buena ventilación para evitar el síndrome del edificio enfermo, añadiendo que el mobiliario sea ergonómicamente el adecuado para la comodidad del usuario.</p>
		<p>Todo esto también con la posibilidad de que sean controladas mediante control manual o de voz.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
