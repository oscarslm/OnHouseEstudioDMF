@extends('layouts.master')

@section('title', 'Estilo Rústico')

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

		<img src="{{ asset('images/slider/estilo-rustico.jpg') }}" class="img-fluid" align="@yield('title')">

		<div class="clearfix my-5"></div>

		<div class="title-block">
			<h2>
				<div class="text-rotater d-none d-lg-block" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					Este estilo tiene como objetivo lograr un ambiente <span class="t-rotate color">relajado|confortable|tradicional</span>.
				</div>
				<div class="d-block d-lg-none">Este estilo tiene como objetivo lograr un ambiente relajado, confortable y tradicional.</div>
			</h2>
			<span>Que recuerda a la naturaleza.</span>
		</div>

		<p>Toda composición de <strong>@yield('title')</strong> tiene la madera presente de alguna forma en la decoración. Lo más habitual es decorar las paredes con piedra. Suelen utilizarse colores neutros azules, marrones, verdes o tonos cálidos en elementos decorativos y en muros colores blancos o crudos o tonos más fuertes para crear contrastes.</p>
		<p>En este estilo no puede faltar la incorporación de flores y plantas. Para finalizar, una decoración rustica no está completa si no disponemos de piezas antiguas, alfombras, cuadros de paisajes o familiares con marcos de madera.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush