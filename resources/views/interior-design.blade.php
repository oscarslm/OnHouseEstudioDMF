@extends('layouts.master')

@section('title', 'Diseño de Interiores')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Personalizado</span>
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

		<div class="title-block">
			<h2>
				<div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					 Nos involucramos en el proceso de mejorar la función y cualidades del espacio interior mediante la manipulación de los <span class="t-rotate color">materiales|texturas|objetos|colores</span>, etc.
				</div>
			</h2>
			<span>Esto, con el fin de construir un ambiente confortable que mejore la calidad de vida y cultura de los ocupantes y sea estéticamente atractivo.</span>
		</div>

		<p>Cada mobiliario, cada color, cada textura, cada elemento decorativo e iluminación son de suma importancia para poder lograr la ambientación esperada.</p>
		<p>Nuestro proceso de diseño interior sigue una metodología sistemática y coordinada, incluida la investigación, integración y análisis del conocimiento en el proceso creativo, en el que las necesidades y recursos del cliente son satisfechas para producir un espacio que cumpla con los objetivos del proyecto.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush