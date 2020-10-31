@extends('layouts.master')

@section('title', 'Oficinas')

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

		<p>El 60% de un día lo pasas en la oficina y ya que es uno de los lugares en donde pasas mas tiempo, no tiene por que ser un martirio estar en él. El mobiliario y la decoración son muy importantes para crear ambientes super confortables en donde los trabajadores puedan desempeñar de manera óptima sus labores e incluso ser mucho más eficientes mediante espacios que sean agradables visualmente, espacios de esparcimiento, con vegetación al interior, correctamente distribuidos, con mucha iluminación y buena ventilación para evitar el síndrome del edificio enfermo, añadiendo que el mobiliario sea ergonómicamente el adecuado para la comodidad del usuario. Todo esto también con la posibilidad de que sean controladas mediante control manual o de voz.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
