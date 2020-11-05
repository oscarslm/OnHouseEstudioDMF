@extends('layouts.master')

@section('title', 'Estilo Nórdico')

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

		<img src="{{ asset('images/slider/estilo-nordico.jpg') }}" class="img-fluid" align="@yield('title')">

		<div class="clearfix my-5"></div>

		<div class="title-block">
			<h2>
				<div class="text-rotater d-none d-lg-block" data-separator="|" data-rotate="bounceIn" data-speed="2500">
					El diseño nórdico se basa en <span class="t-rotate color">espacios luminosos|paredes blancas|colores muy claros</span>.
				</div>
				<div class="d-block d-lg-none">El diseño nórdico se basa en espacios luminosos, paredes blancas y colores muy claros.</div>
			</h2>
			<span>Es carente de ornamentación.</span>
		</div>

		<p>La tendencia en paredes es utilizar cuadros grandes con retratos fotográficos en blanco y negro, uso de mobiliario de madera, creando conjuntos y espacios funcionales y llenos de confort.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush