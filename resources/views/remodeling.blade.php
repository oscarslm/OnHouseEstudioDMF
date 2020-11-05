@extends('layouts.master')

@section('title', 'Remodelaciones')

@push('css')
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
@endpush

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>A la medida</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item">Arquitectura</li>
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
					<div class="slide" data-thumb="{{ asset('images/architecture/remodeling-1.jpg') }}">
						<a href="{{ asset('images/architecture/remodeling-1.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/architecture/remodeling-1.jpg') }}" alt="@yield('title') Remodelación">
							<div class="flex-caption slider-caption-bg">Remodelación 1</div>
						</a>
					</div>
					<div class="slide" data-thumb="{{ asset('images/architecture/remodeling-2.jpg') }}">
						<a href="{{ asset('images/architecture/remodeling-2.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/architecture/remodeling-2.jpg') }}" alt="@yield('title') Remodelación">
							<div class="flex-caption slider-caption-bg slider-caption-bg-light slider-caption-top-left">Remodelación 2</div>
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
					 Remodelar no solo es <span class="t-rotate color">repintar de otro color los muros|cambiar los muebles de lugar</span>.
				</div>
				<div class="d-block d-lg-none">Remodelar no solo es repintar de otro color los muros o cambiar los muebles de lugar.</div>
			</h2>
			<span>Remodelamos tu casa, tu departamento, tus oficinas, tu negocio y cualquier lugar que desees.</span>
		</div>

		<p>Cada espacio influye en nuestras vidas y nos genera distintos sentimientos, es por eso que es muy importante conocer los gustos de nuestros clientes para poder trabajar con base en ello y lograr los objetivos esperados, todo esto mediante un levantamiento previo de lo existente, la revisión de sistemas mecánicos, eléctricos y estructurales para determinar si la remodelación implicará un cambio en estos.</p>
		<p>Cada espacio por sencillo que parezca, influye de alguna manera en tu día a día ya sea de manera positiva o negativa, transforma con nosotros y crea otra perspectiva de tus espacios.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
