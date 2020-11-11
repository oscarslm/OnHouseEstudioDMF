@extends('layouts.master')

@section('title', 'Fabricación')

@push('css')
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
@endpush

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Con estricta calidad</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item">Mobiliario</li>
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
					<div class="slide" data-thumb="{{ asset('images/furniture/manufacturing-1.jpg') }}">
						<a href="{{ asset('images/furniture/manufacturing-1.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/furniture/manufacturing-1.jpg') }}" alt="@yield('title')">
							<div class="flex-caption slider-caption-bg">@yield('title')</div>
						</a>
					</div>
					<div class="slide" data-thumb="{{ asset('images/furniture/manufacturing-2.jpg') }}">
						<a href="{{ asset('images/furniture/manufacturing-2.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/furniture/manufacturing-2.jpg') }}" alt="@yield('title')">
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
				<div>
					Soportamos cada parte creativa con la capacidad instalada necesaria para materializar cada proyecto.
				</div>
			</h2>
			<span>Si lo imaginas, lo diseñamos y fabricamos.</span>
		</div>

		<div class="clearfix my-5"></div>

		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-couch i-alt"></i></a>
					</div>
					<h3>Transformación de maderas. <span class="subtitle">En productos comerciales.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-calculator i-alt"></i></a>
					</div>
					<h3>Control numérico CNC. <span class="subtitle">Nos facilita el proceso de mecanizado.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-cut i-alt"></i></a>
					</div>
					<h3>Corte láser. <span class="subtitle">pPermite el aumento de la productividad y obtención de filos de corte limpios.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-fill i-alt"></i></a>
					</div>
					<h3>Pintura electrostática. <span class="subtitle">Presenta menor riesgo para la salud de las personas que la aplican.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-gem i-alt"></i></a>
					</div>
					<h3>Transformación de superficie sólida: <span class="subtitle">granito, mármol, cuarzo, etc.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-industry i-alt"></i></a>
					</div>
					<h3>Materiales de alta calidad: <span class="subtitle">Acrílico, sustratos, laminado plástico, resinas epóxicas, cerámica y acero inoxidable.</span></h3>
				</div>
			</div>
		</div><!--.row-->

		<div class="clearfix my-5"></div>

		<div class="divcenter center">
			<a href="{{ route('Contacto') }}" class="button">
				Obtener <strong>más información</strong> <i class="icon-caret-right"></i>
			</a>
		</div>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Mobiliario/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
