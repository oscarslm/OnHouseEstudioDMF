@extends('layouts.master')

@section('title', 'Inicio')
@section('description', 'Grupo multidisciplinar de profesionales enfocados en proyectos integrales de Arquitectura Domótica y Diseño de Interiores. Fabricación de mobiliario personalizado para vivienda, oficinas o locales comerciales.')
@section('keywords', 'On House, On House DMF, On House Estudio, On House Estudio DMF, diseño de interiores, desarrollo de proyectos, remodelaciones, diseño de muebles, fabricacion de muebles, domotica, obra civil')

@push('css')
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
					<div class="swiper-slide dark" style="background-image: url('{{ asset('images/slider/estilo-rustico.jpg') }}">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-animate="fadeInUp">Diseño de Interiores</h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">En viviendas particulares, oficinas y locales comerciales.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('{{ asset('images/slider/estilo-eclectico.jpg') }}">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-animate="fadeInUp">Estudio y Diseño</h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Montaje de mobiliario en sitio, adecuación de instalaciones, configuraciones y puesta en marcha.</p>
							</div>
						</div>
					</div>
				</div><!--.swiper-wrapper-->
				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
			</div><!--.swiper-container-->
			
		</div><!--.slider-parallax-inner-->

	</section>

@endsection

@section('content')

	<div class="container clearfix">

	    <div class="divcenter center clearfix" style="max-width: 900px;">
			<img class="img-fluid" src="{{ asset('images/logo-variante.png') }}" alt="Logo {{ config('app.name') }}">
			<h1>Bienvenido a <span>{{ config('app.name') }}</span>.</h1>
			<h3>Somos un grupo multidisciplinar de profesionales enfocados en proyectos integrales de Arquitectura Domótica y Diseño de Interiores. Fabricación de mobiliario personalizado para vivienda, oficinas o locales comerciales.</h3>
			<a href="{{ route('Nosotros') }}" class="button button-dark button-large">Conoce más</a>
			<a href="{{ route('Contacto') }}" class="button button-large">Contáctanos</a>
		</div>

		<div class="line"></div>

		<div class="row mb-5">
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn">
					<div class="fbox-icon">
						<a><i class="icon-drafting-compass"></i></a>
					</div>
					<h3>Estudio y Diseño</h3>
					<p>Desarrollamos tu espacio personalizado de acuerdo a Estilos Arquitectónicos de tu preferencia.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="200">
					<div class="fbox-icon">
						<a><i class="icon-door-open"></i></a>
					</div>
					<h3>Diseño de Interiores</h3>
					<p>En viviendas particulares, oficinas y locales comerciales.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="400">
					<div class="fbox-icon">
						<a><i class="icon-object-ungroup"></i></a>
					</div>
					<h3>Desarrollo de Proyectos</h3>
					<p>Anteproyecto, Proyecto Ejecutivo, Visualización 3D e Infoarquitectura.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="600">
					<div class="fbox-icon">
						<a><i class="icon-home"></i></a>
					</div>
					<h3>Remodelaciones</h3>
					<p>Habilitación de espacios, Obra Civil, Acabados, Ingeniería Eléctrica, Automatización y Domótica.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="800">
					<div class="fbox-icon">
						<a><i class="icon-object-group"></i></a>
					</div>
					<h3>Diseño de Mobiliario</h3>
					<p>Creamos conceptos a la medida, funcionales, ergonómicos integrando tecnología con un estilo y sofisticación únicos.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="1000">
					<div class="fbox-icon">
						<a><i class="icon-bed"></i></a>
					</div>
					<h3>Fabricación de Mobiliario</h3>
					<p>Manufactura de mobiliario en maderas, metales, acrílicos, superficies sólidas, rocas/minerales, polímeros, etc.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="1000">
					<div class="fbox-icon">
						<a><i class="icon-couch"></i></a>
					</div>
					<h3>Instalación de Mobiliario</h3>
					<p>Montaje de mobiliario en sitio, adecuación de instalaciones, configuraciones y puesta en marcha.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="1000">
					<div class="fbox-icon">
						<a><i class="icon-desktop"></i></a>
					</div>
					<h3>Diseño Web</h3>
					<p>Contrucción de imagen y contenido digital y creación de portal web.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box fbox-small fbox-plain mb-5" data-animate="fadeIn" data-delay="1000">
					<div class="fbox-icon">
						<a><i class="icon-video"></i></a>
					</div>
					<h3>CCTV</h3>
					<p>Instalación de CCTV, configuración y puesta en marcha.</p>
				</div>
			</div>
		</div><!--.row-->

	</div><!--.container-->

	<div class="section parallax dark nomargin noborder" style="background-image: url('images/bg-light.jpg');" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
		<div class="container center clearfix">

			<div class="emphasis-title">
				<h2>Remodelamos tu Hogar</h2>
				<p class="lead topmargin-sm">Si estás buscando renovar tu mobiliario de tu vivienda, oficinas y locales comercial, estás en el lugar indicado.</p>
			</div>

			<a href="{{ route('Nosotros') }}" class="button button-border button-rounded button-light button-large">Conoce más</a>
			<a href="{{ route('Contacto') }}" class="button button-rounded button-white button-light button-large">Más información</a>

		</div>
	</div>

	<div class="container clearfix">
		<div class="heading-block mt-5 center">
			<h3>Nuestros <span>Clientes</span></h3>
			<span>Estos son algunos de nuestros clientes satisfechos.</span>
		</div>
	</div><!--.container-->

	<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">
		<div class="oc-item"><img src="{{ asset('images/customers/michel-domit.jpg') }}" alt="Michel Domit &copy;"></a></div>
		<div class="oc-item"><img src="{{ asset('images/customers/fiesta-inn-hotel-business-class-mr.jpg') }}" alt="Hotel Fiesta Inn Business Class MR &copy;"></div>
		<div class="oc-item"><img src="{{ asset('images/customers/silver-plate-jeans-co.jpg') }}" alt="Silver Plate Jeans Co &copy;"></div>
		<div class="oc-item"><img src="{{ asset('images/customers/salvatore-ferragamo.jpg') }}" alt="Salvatore Ferragamo &copy;"></div>
		<div class="oc-item"><img src="{{ asset('images/customers/go-mart.jpg') }}" alt="Go Mart &copy;"></div>
		<div class="oc-item"><img src="{{ asset('images/customers/corneliani.jpg') }}" alt="Corneliani &copy;"></div>
		<div class="oc-item"><img src="{{ asset('images/customers/hospital-general-de-mexico.jpg') }}" alt="Hospital General de México &copy;"></div>
		<div class="oc-item"><img src="{{ asset('images/customers/andersons.jpg') }}" alt="Anderson's &copy;"></div>
	</div>

@endsection
