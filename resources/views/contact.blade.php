@extends('layouts.master')

@section('title', 'Contacto')

@section('page-title')
	<section id="page-title">
		<div class="container clearfix">
			<h1>@yield('title')</h1>
			<span>Ponte en contacto con nosotros</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('Inicio') }}">Inicio</a></li>
				<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
			</ol>
		</div>
	</section><!-- #page-title end -->
@endsection

@section('content')

	<div class="container clearfix" align="center">
		<h2><i class="icon-map-marker2"></i> Corporativo</h2>
		<address class="address-contacto">Atlanta 188, Noche Buena, Benito Juárez, 03720, CDMX.</address>
		<a href="https://goo.gl/maps/1udRJm16kvjUm9c59" class="button" target="_blank"><i class="icon-street-view"></i> Ver Ubicación</a>
	</div><!--.container-->

	<div class="clear my-4"></div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.8735177434758!2d-99.17958934194469!3d19.380102996728564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff9ccc298067%3A0x22e52ca4f5de3b27!2sInhouse%20Parque%20Hundido!5e0!3m2!1ses!2smx!4v1600464852335!5m2!1ses!2smx" frameborder="0" style="width: 100%; min-height: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

	<div class="clear my-4"></div>

	<div class="container clearfix">
		
	    <!-- Contact Form
		============================================= -->
		<div class="col_full">

			@if( Session::has('errors') )
			<div class="alert alert-danger" role="alert">
				<h4 class="alert-heading">¡Ups! Ocurrieron los siguientes errores:</h4>
				@foreach(Session::get('errors')->all() as $error)
				<i class="icon-caret-right"></i> {{ $error }} <br>
				@endforeach
			</div>
			@endif

			@if( Session::has('success') )
			<div class="alert alert-success" role="alert">
				<h4 class="alert-heading">¡Bien hecho!</h4>
				<p>{{ Session::get('success') }}.</p>
				<hr>
				<p class="mb-0">Recibirás una respuesta tan pronto como nos sea posible.</p>
			</div>
			@endif

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h2 class="text-center"><i class="icon-envelope"></i> Envíanos un Email</h2>
					<form class="nobottommargin" id="template-contactform" name="contactform" action="/contactoform" method="post">
							{{ csrf_field() }}
							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Nombre <small>*</small></label>
								<input type="text" id="template-contactform-name" name="nombre" value="" class="sm-form-control" required />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="correo" value="" class=" email sm-form-control" required />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Teléfono</label>
								<input type="text" id="template-contactform-phone" name="telefono" value="" class="sm-form-control" required />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Asunto <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="asunto" value="" class="sm-form-control" required />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-service">Servicio</label>
								<select id="template-contactform-service" name="servicio" class="sm-form-control">
									<option value="Vacío" selected disabled>-- Selecciona --</option>
									<option value="Diseño">Diseño</option>
									<option value="Fabricación">Fabricación</option>
									<option value="Domótica">Domótica</option>
									<option value="Otro">Otro</option>
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Mensaje <small>*</small></label>
								<textarea class=" sm-form-control" id="template-contactform-message" name="mensaje" rows="6" cols="30" required></textarea>
							</div>

							<div class="col_full" align="center">
								<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button nomargin">Enviar</button>
							</div>

							<input type="hidden" name="prefix" value="template-contactform-">

						</form>
				</div>
			</div><!--.row-->

		</div><!-- Contact Form End -->

		<div class="clear line"></div>

		<!-- Contact Info
		============================================= -->
		<div class="row clear-bottommargin">

			<div class="col-lg-4 col-md-4 col-sm-6 bottommargin clearfix">
				<div class="feature-box fbox-center fbox-bg fbox-plain">
					<div class="fbox-icon">
						<a href="tel:5589360792"><i class="icon-phone3"></i></a>
					</div>
					<h3>Llámanos<span class="subtitle">(55) 8936 0792</span></h3>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 bottommargin clearfix">
				<div class="feature-box fbox-center fbox-bg fbox-plain">
					<div class="fbox-icon">
						<a href="//www.facebook.com/OnHouseDMF" target="_blank"><i class="icon-facebook"></i></a>
					</div>
					<h3>Facebook &copy;<span class="subtitle">{{ config('app.name') }}</span></h3>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 bottommargin clearfix">
				<div class="feature-box fbox-center fbox-bg fbox-plain">
					<div class="fbox-icon">
						<a href="//www.instagram.com/onhousedmf" target="_blank"><i class="icon-instagram"></i></a>
					</div>
					<h3>Instagram &copy;<span class="subtitle">@OnHouse_Estudio_DMF</span></h3>
				</div>
			</div>

		</div><!-- Contact Info End -->

	</div><!--.container-->
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/@yield('title')/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush