@extends('layouts.master')

@section('title', 'Remodelaciones')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>A la medida</span>
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
					 Remodelar no solo es <span class="t-rotate color">repintar de otro color los muros|cambiar los muebles de lugar</span>.
				</div>
			</h2>
			<span>Remodelamos tu casa, tu departamento, tus oficinas, tu negocio y cualquier lugar que desees.</span>
		</div>

		<p>Cada espacio influye en nuestras vidas y nos genera distintos sentimientos, es por eso que es muy importante conocer los gustos de nuestros clientes para poder trabajar con base en ello y lograr los objetivos esperados, todo esto mediante un levantamiento previo de lo existente, la revisión de sistemas mecánicos, eléctricos y estructurales para determinar si la remodelación implicará un cambio en estos.</p>
		<p>Cada espacio por sencillo que parezca, influye de alguna manera en tu día a día ya sea de manera positiva o negativa, transforma con nosotros y crea otra perspectiva de tus espacios.</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/Arquitectura/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
