@extends('layouts.master')

@section('title', 'Domótica')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Automatización de espacios</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item">Mobiliario</li>
				<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
			</ol>
		</div>
	</section><!-- #page-title end -->
@endsection

@section('content')

	<div class="container clearfix">

		<p>A través del conjunto de tecnologías aplicadas al control y automatización inteligente, logramos gestionar de manera eficiente el uso de la energía aportando seguridad y confort.</p>
		<p>Imagina poder controlar mediante comandos de voz o un simple toque en tu Smart Phone el aire acondicionado, televisión, iluminación, cortinas en ventanas, reproducir música, abrir o cerrar puertas, monitorear diferentes zonas de tu hogar.</p>
		<p>Todo esto dentro de tu casa e incluso desde cualquier otro lugar donde tengas conexión a internet.</p>

	</div><!--.container-->

	<div class="section">

		<div class="container clear-bottommargin clearfix">

			<div class="heading-block center">
				<h2>Desarrollamos tu proyecto.</h2>
				<span>enfocándonos en:</span>
			</div>

			<div class="row">

							<div class="col-lg-4 bottommargin">
								<img data-animate="fadeInLeftBig" src="{{ asset('images/home-automation/mac-phone.png') }}" alt="iPhone" class="center-block">
							</div>

							<div class="col-lg-4 col-md-6 py-lg-4">

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a><i class="icon-ok"></i></a>
										</div>
										<h3>Diseño de un sistema seguro</h3>
										<p class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500"><span class="t-rotate">Cámaras de Seguridad|Control de Acceso|Monitoreo Remoto</span></p>
									</div>

								</div>

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a><i class="icon-ok"></i></a>
										</div>
										<h3>Ahorro energético</h3>
										<p class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500"><span class="t-rotate">Paneles Solares|Control de Iluminación|Control de Temperatura</span>.</p>
									</div>

								</div>

							</div>

							<div class="col-lg-4 col-md-6 py-lg-4">

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a><i class="icon-ok"></i></a>
										</div>
										<h3>Confort</h3>
										<p class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500"><span class="t-rotate">Iluminación|Temperatura|Aromaterapia|Sonido</span>.</p>
									</div>

								</div>

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a><i class="icon-ok"></i></a>
										</div>
										<h3>Comodidad</h3>
										<p class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500"><span class="t-rotate">Control de aparatos electrónicos|Programación de rutinas para tu día a día|Limpieza en el hogar</span>.</p>
									</div>

								</div>

							</div>

			</div>

		</div><!--.container-->

	</div><!--.section-->

	<div class="clearfix my-5"></div>

	<div class="divcenter center">
		<a href="{{ route('Contacto') }}" class="button">
			Cotiza <strong>tu proyecto</strong> <i class="icon-caret-right"></i>
		</a>
	</div>
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/@yield('title')/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush
