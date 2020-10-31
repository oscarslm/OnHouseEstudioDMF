@extends('layouts.master')

@section('title', 'Habitacional')

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

		<div class="title-block">
			<h2>
				<div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					Nos dedicamos a <span class="t-rotate color">crear composiciones desde cero|remodelar cualquier espacio de tu casa</span>.
				</div>
			</h2>
			<span>Hasta todo aquello que puedas imaginarte nosotros lo hacemos realidad.</span>
		</div>

		<p> Cada espacio de tu hogar se vive y se siente de manera diferente, es por eso que es importante la elección de materiales, colores, mobiliario y elementos decorativos que logren eso que buscas transmitir.</p>
		<p>Por otro lado, la tecnología no está peleada con el diseño, fabricamos mobiliario con diseño y tecnología, imagina un mueble con audio integrado, cargador mediante inducción, puertos USB, iluminación, etc. y lo mejor de todo, automatizado por control manual o de voz.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
