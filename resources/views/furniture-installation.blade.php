@extends('layouts.master')

@section('title', 'Instalación')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Por profesionales en el ramo</span>
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
					<div class="slide" data-thumb="{{ asset('images/furniture/installation-1.jpg') }}">
						<a href="{{ asset('images/furniture/installation-1.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/furniture/installation-1.jpg') }}" alt="@yield('title')">
							<div class="flex-caption slider-caption-bg">@yield('title')</div>
						</a>
					</div>
					<div class="slide" data-thumb="{{ asset('images/furniture/installation-2.jpg') }}">
						<a href="{{ asset('images/furniture/installation-2.jpg') }}" data-lightbox="gallery-item">
							<img src="{{ asset('images/furniture/installation-2.jpg') }}" alt="@yield('title')">
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
					Instalamos cuidadosamente el mobiliario
				</div>
			</h2>
			<span>Supervisado por especialistas:</span>
		</div>

		<p>Una vez listas todas las piezas, nosotros nos encargamos de armar de manera cuidadosa cada elemento de tu espacio con supervisión especializada todo el tiempo.</p>

		<div class="clearfix my-5"></div>

		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-truck i-alt"></i></a>
					</div>
					<h3>Transporte<span class="subtitle">Traslado cuidadoso del mobiliario.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-people-carry i-alt"></i></a>
					</div>
					<h3>Personal especializado<span class="subtitle">Para la instalación y traslado del mobiliario.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-user-cog i-alt"></i></a>
					</div>
					<h3>Cuadrilla de instalación<span class="subtitle">Que cumple con estrictas normas para la instalación.</span></h3>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 offset-md-4 col-lg-3 offset-lg-0">
				<div class="feature-box fbox-center fbox-outline fbox-effect">
					<div class="fbox-icon">
						<a><i class="icon-user-friends i-alt"></i></a>
					</div>
					<h3>Cuadrilla de acabado<span class="subtitle">Que cuida estrictamente los terminados del mobiliario.</span></h3>
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
