@extends('layouts.master')

@section('title', 'Comercial')

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

		<p>Sabemos lo importante que es tu negocio, por lo que nos preocupamos y nos ocupamos por que funcione correctamente. ¿Cómo? Mediante un proyecto pensado desde un diseño funcional, original, con personalidad, una correcta y óptima operación, hasta el impacto que va a generar al cliente. Esto mediante un análisis de las necesidades primeramente de ti que vas a brindar un servicio, ¿Qué? ¿Cómo? Tanto del cliente para poder ofrecerle un servicio excepcional. No importa si es un espacio pequeño, mediano o grande, lo importante es transmitir al cliente la seguridad de que están en un lugar especial. Esto también puede ser implementado con la tecnología necesaria para que puedas mantener el control de tu negocio a través de control manual o de voz.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
