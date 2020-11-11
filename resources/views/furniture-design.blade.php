@extends('layouts.master')

@section('title', 'Diseño')

@push('css')
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
@endpush

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Personalizado</span>
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
					<div class="slide" data-thumb="{{ asset('images/furniture/design-1.jpg') }}">
						<a href="{{ asset('images/furniture/design-1.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/furniture/design-1.jpg') }}" alt="@yield('title')">
							<div class="flex-caption slider-caption-bg">@yield('title')</div>
						</a>
					</div>
					<div class="slide" data-thumb="{{ asset('images/furniture/design-2.jpg') }}">
						<a href="{{ asset('images/furniture/design-2.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/furniture/design-2.jpg') }}" alt="@yield('title')">
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
					Acompañamos la ambientación de cada espacio
				</div>
			</h2>
			<span>Con mobiliario diseñado a la medida, pensando en:</span>
		</div>

		<div class="clearfix my-5"></div>

		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-couch i-alt"></i></a>
					</div>
					<h3>Ergonomía<span class="subtitle">Para un mejor aprovechamiento del mobiliario.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-tint i-alt"></i></a>
					</div>
					<h3>Estilo<span class="subtitle">Que refleja tu gusto y personalidad.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-thumbs-up i-alt"></i></a>
					</div>
					<h3>Funcionalidad<span class="subtitle">Cumple para lo que fue construido.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-ok i-alt"></i></a>
					</div>
					<h3>Durabilidad<span class="subtitle">Ten por seguro que te durará mucho tiempo.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-dollar i-alt"></i></a>
					</div>
					<h3>Precio<span class="subtitle">El mejor precio en el mercado.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-mobile i-alt"></i></a>
					</div>
					<h3>Tecnología<span class="subtitle">Es un plus e innovación frente a la competencia.</span></h3>
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
