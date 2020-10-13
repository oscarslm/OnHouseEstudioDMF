@extends('layouts.master')

@section('title', 'Nosotros')

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

		<p>Somos un grupo multidiscilplinar de profesionales enfocados en proyectos integrales de Arquitectura Dom&oacute;tica y Dise&ntilde;o de Interiores en viviendas particulares, oficinas y locales comerciales, mediante la automatizaci&oacute;n de espacios gracias a sistemas tecnol&oacute;gicos de gesti&oacute;n energ&eacute;tica, comunicaciones, seguridad y bienestar interior con el fin de mejorar su habitabilidad y experiencia al usuario.</p>
		<p>Nos encargamos desde remodelaciones hasta proyectos &uacute;nicos y personalizados, fabricaci&oacute;n de mobiliario a la medida cubriendo las necesidades de cada vivienda, oficina y local comercial combinando siempre funcionalidad y est&eacute;tica.</p>
		<p>En <strong>OnHouseEstudioDMF</strong> queremos que nuestros clientes disfruten la experiencia pero sobre todo, el resultado.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/@yield('title')/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush