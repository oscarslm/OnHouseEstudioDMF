@extends('layouts.master')

@section('title', 'Nosotros')
@section('description', 'Somos una empresa mexicana, con gran experiencia en la elaboración de Proyectos Integrales de Arquitectura, Diseño, Domótica e Inmótica. Brindamos Soluciones de Interiorismo, Diseño de Espacios Creativos visualmente en tendencia.')
@section('keywords', 'On House, On House DMF, On House Estudio, On House Estudio DMF, proyectos de arquitectura, arquitectura, diseño de interiores, desarrollo de proyectos, remodelaciones, diseño de muebles, fabricacion de muebles, domotica, inmotica, obra civil')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Acerca de {{ config('app.name') }}</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
			</ol>
		</div>
	</section><!-- #page-title end -->
@endsection

@section('content')

	<div class="container clearfix">

		<div class="row">
			<div class="col-12">
				<p class="mb-0">Somos una empresa mexicana, con gran experiencia en la elaboración de <strong>Proyectos Integrales de Arquitectura</strong>, <strong>Diseño</strong>, <strong>Domótica</strong> e <strong>Inmótica</strong>. Brindamos <u>Soluciones de Interiorismo</u>, <u>Diseño y Fabricación de Mobilario</u> de acuerdo a las necesidades de nuestros usuarios a través de un proyecto con estilo y tecnología, que permita disfrutar y vivir una experiencia diferente de los espacios con fines residenciales, empresariales, educativos, hospitalarios, recreativos, entre otros. Todo esto gracias a una atención personalizada y un trato cercano a nuestros usuarios.</p>
			</div>
			<div class="col-12">
				<div class="divider divider-center"><i class="icon-cloud"></i></div>
			</div>
			<div class="col-lg-4">
				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<h4>Nuestra <span>Misión</span>.</h4>
				</div>
				<p>Construir y transformar espacios a través de diseño y tecnología, creando funcionalidad, estilo y una experiencia distinta de vivir el día a día para nuestros clientes.</p>
			</div>
			<div class="col-lg-4">
				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<h4>Nuestra <span>Visión</span>.</h4>
				</div>
				<p>Somos la mejor empresa del ramo, creando espacios con habitabilidad de forma eficiente, en tendencia, automatizada, confortable visual y espacialmente para el día a día de las personas.</p>
			</div>
			<div class="col-lg-4">
				<div class="heading-block fancy-title nobottomborder title-bottom-border">
					<h4>Nuestros <span>Valores</span></h4>
				</div>
				<ul class="pl-4">
					<li>Compromiso</li>
					<li>Calidad</li>
					<li>Trabajo en equipo</li>
					<li>Sustentabilidad</li>
					<li>Impacto social</li>
				</ul>
			</div>
		</div><!--.row-->

	</div><!--.container-->

	<div class="section parallax dark" style="background-image: url({{ asset('images/home-testi-bg.jpg')}}); background-size: cover; padding: 100px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -500px;">
		<div class="container clearfix">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center">En <strong><u>{{ config('app.name') }}</u></strong> queremos que nuestros clientes disfruten la experiencia pero sobre todo, el resultado.</h4>
				</div>
				<div class="col-lg-3 center" data-animate="bounceIn">
					<i class="i-plain i-large divcenter nobottommargin icon-time"></i>
					<div class="counter counter-lined"><span data-from="10" data-to="40" data-refresh-interval="50" data-speed="4000" data-comma="true"></span>+</div>
					<h5>Horas a la Semana</h5>
				</div>
				<div class="col-lg-3 center" data-animate="bounceIn" data-delay="200">
					<i class="i-plain i-large divcenter nobottommargin icon-code"></i>
					<div class="counter counter-lined"><span data-from="10" data-to="45" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div>
					<h5>Cotizaciones al día</h5>
				</div>
				<div class="col-lg-3 center" data-animate="bounceIn" data-delay="400">
					<i class="i-plain i-large divcenter nobottommargin icon-briefcase"></i>
					<div class="counter counter-lined"><span data-from="1" data-to="60" data-refresh-interval="50" data-speed="3500" data-comma="true"></span></div>
					<h5>Proyectos Completados</h5>
				</div>
				<div class="col-lg-3 center col_last" data-animate="bounceIn" data-delay="600">
					<i class="i-plain i-large divcenter nobottommargin icon-dribbble2"></i>
					<div class="counter counter-lined"><span data-from="1" data-to="40" data-refresh-interval="30" data-speed="2700" data-comma="true"></span></div>
					<h5>Clientes</h5>
				</div>
			</div><!--.row-->
		</div><!--.container-->
	</div><!--.section-->

	<div class="clear"></div>

	<div class="container">
		<div class="promo promo-light">
			<h3>Llámanos al <span>(55) 8936 0792</span> o escríbenos a <span>contacto@onhousedmf.com</span></h3>
			<span>Para resolver tus dudas, hacer una cotización y/o brindarte atención personalizada.</span>
			<a href="{{ route('Contacto') }}" class="button button-xlarge button-rounded">Contáctanos</a>
		</div><!--.promo-->
	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/@yield('title')/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush