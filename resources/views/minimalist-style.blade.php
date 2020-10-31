@extends('layouts.master')

@section('title', 'Estilo Minimalista')

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

		<img src="{{ asset('images/slider/estilo-minimalista.jpg') }}" class="img-fluid" align="@yield('title')">

		<div class="clearfix my-5"></div>

		<div class="title-block">
			<h2>
				<div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					Siempre en tendencia y nos lleva hacia la <span class="t-rotate color">simplificación|abstracción|sobriedad</span> en las composiciones.
				</div>
			</h2>
			<span>Gracias a la ausencia total de adornos innecesarios se logra un purismo en cuanto a forma y estructura.</span>
		</div>

		<p>Uso de <strong>materiales 100% naturales</strong>, maderas, piedras, alambres. También se usan materiales cerámicos tanto para el suelo como paredes.</p>
		<p>Es buena idea añadir algunos elementos decorativos de tamaño grande o medio, puede servir muy bien un cuadro o una escultura.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush