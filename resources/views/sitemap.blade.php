@extends('layouts.master')

@section('title', 'Mapa del Sitio')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Sitemap | {{ config('app.name') }}</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
			</ol>
		</div>
	</section><!-- #page-title end -->
@endsection

@section('content')

	<div class="container clearfix">

		<div class="row">
			<div class="col-12">
				<h3>Páginas</h3>
			</div>
			<div class="col-md-3">
				<ul class="iconlist">
					<li><i class="icon-file-alt"></i><a href="{{ route('Inicio') }}">Inicio</a></li>
					<li><i class="icon-file-alt"></i><a href="{{ route('Nosotros') }}">Nosotros</a></li>
					<li><i class="icon-file-alt"></i><a href="{{ route('Aviso de Privacidad') }}">Aviso de Privacidad</a></li>
					<li><i class="icon-file-alt"></i><a href="{{ route('FAQS') }}">Preguntas Frecuentes</a></li>
					<li><i class="icon-file-alt"></i><a href="https://onhousedmf.com/tienda">Tienda</a></li>
					<li><i class="icon-file-alt"></i><a href="{{ route('Contacto') }}">Contacto</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="iconlist">
					<li><i class="icon-file-alt"></i><a>Arquitectura</a>
						<ul>
							<li><i class="icon-file-alt"></i><a><div>Estudio y Diseño</div></a>
								<ul>
									<li><i class="icon-file-alt"></i><a href="{{ route('Industrial') }}"><div>Estilo Industrial</div></a></li>
									<li><i class="icon-file-alt"></i><a href="{{ route('Minimalista') }}"><div>Estilo Minimalista</div></a></li>
									<li><i class="icon-file-alt"></i><a href="{{ route('Nórdico') }}"><div>Estilo Nórdico</div></a></li>
								</ul>
							</li>
							<li><i class="icon-file-alt"></i><a href="{{ route('Diseño de Interiores') }}"><div>Diseño de Interiores</div></a></li>
							<li><i class="icon-file-alt"></i><a><div>Desarrollo de Proyectos</div></a>
								<ul>
									<li><i class="icon-file-alt"></i><a href="{{ route('Habitacional') }}"><div>Habitacional</div></a></li>
									<li><i class="icon-file-alt"></i><a href="{{ route('Comercial') }}"><div>Comercial</div></a></li>
									<li><i class="icon-file-alt"></i><a href="{{ route('Oficinas') }}"><div>Oficinas</div></a></li>
								</ul>
							</li>
							<li><i class="icon-file-alt"></i><a href="{{ route('Remodelaciones') }}"><div>Remodelaciones</div></a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="iconlist">
					<li><i class="icon-file-alt"></i><a>Mobiliario</a>
						<ul>
							<li><i class="icon-file-alt"></i><a href="{{ route('Diseño de Mobiliario') }}"><div>Diseño</div></a></li>
							<li><i class="icon-file-alt"></i><a href="{{ route('Fabricación de Mobiliario') }}"><div>Fabricación</div></a></li>
							<li><i class="icon-file-alt"></i><a href="{{ route('Instalación de Mobiliario') }}"><div>Instalación</div></a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="iconlist">
					<li><i class="icon-file-alt"></i><a>Domótica</a>
						<ul>
							<li><i class="icon-file-alt"></i><a href="{{ route('Proyecto de Domótica') }}"><div>Proyecto</div></a></li>
							<li><i class="icon-file-alt"></i><a href="{{ route('Integración de Domótica') }}"><div>Integración</div></a></li>
							<li><i class="icon-file-alt"></i><a href="{{ route('Desarrollo de Domótica') }}"><div>Desarrollo</div></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!--.row-->

	</div><!--.container-->
	
@endsection
