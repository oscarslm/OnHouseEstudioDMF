@extends('layouts.master')

@section('title', 'Estilo Industrial')

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

		<img src="{{ asset('images/slider/estilo-industrial.jpg') }}" class="img-fluid" align="@yield('title')">

		<div class="clearfix my-5"></div>

		<div class="title-block">
			<h2>
				<div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					Es un estilo <span class="t-rotate color">muy urbano|despreocupado</span>.
				</div>
			</h2>
			<span>Es común observar las instalaciones y estructuras aparentes.</span>
		</div>

		<p>Esto quiere decir que no están ocultas por ningún elemento. Sensación de amplitud, techos altos y dobles alturas con tapancos.</p>
		<p>En la decoración se utilizan materiales urbanos como:<br>
		<ul class="pl-4">
			<li>Metal</li>
			<li>Aluminio</li>
			<li>Ladrillos</li>
			<li>Cemento</li>
			<li>Vidrio</li>
		</ul>
		son algunos de los elementos básicos de este estilo.</p>

		<p>El punto radica en dejar expuestos estos elementos sin añadir yesos o pinturas. Tendencias vintage, una mezcla entre elementos nuevos y antiguos hacen la amalgama perfecta. Uso de lámparas de diversos diseños y ventanales ayudan a iluminar y apreciar mejor los espacios.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush