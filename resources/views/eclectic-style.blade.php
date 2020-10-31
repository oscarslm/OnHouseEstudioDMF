@extends('layouts.master')

@section('title', 'Estilo Ecléctico')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Estudio y Diseño</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item"><a>Arquitectura</a></li>
				<li class="breadcrumb-item"><a>Estudio y Diseño</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{ Request::url() }}">@yield('title')</a></li>
			</ol>
		</div>
	</section><!-- #page-title end -->
@endsection

@section('content')

	<div class="container clearfix">

		<img src="{{ asset('images/slider/estilo-eclectico.jpg') }}" class="img-fluid" align="@yield('title')">

		<div class="clearfix my-5"></div>

		<div class="title-block">
			<h2>
				<div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					Es una forma de vestir los espacios con un estilo <span class="t-rotate color">original|único|dinámico</span>.
				</div>
			</h2>
			<span>Resulta de la combinación y mezcla de distintos estilos.</span>
		</div>

		<p>No sobrecargar los ambientes con muchos elementos y elegir cuidadosamente los objetos decorativos para crear un espacio armonioso. Combina elementos de estilo rústico, modernos, industriales, minimalistas, románticos, entre otros.</p>
		<p>Los muebles serán los objetos de mayor tamaño en tus espacios y no dudes en combinar un sofá estilo romántico con patas y cabezal de madera tallada junto a una imponente cómoda de metal de estilo industrial.</p>
		<p>Elementos como alfombras de piel sintética, tapices en las paredes, cortinas floreadas, rayadas o lisas, objetos vintage, grandes espejos, cuadros, sillas de metal de colores, están cien por cien permitidos.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush