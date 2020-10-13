@extends('layouts.master')

@section('title', 'Aviso de Privacidad')

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

	<div class="container clearfix">

		<p>Con fundamento en la Ley Federal de Protección de Datos Personales en Posesión de Particulares hacemos de su conocimiento que <strong>OnHouse Estudio DMF S.A.S.</strong> con domicilio en Atlanta 188, Noche Buena, Benito Juárez, 03720 Ciudad de México, CDMX, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección.</p>
		<p>Sus datos personales incluso los sensibles, patrimoniales o financieros que usted proporcione en el Contrato del Servicio o en cualquier otro documento o medio físico o electrónico, serán utilizados únicamente con motivo de la operación que nos relaciona y se tratarán para todos los fines vinculados con dicha relación, tales como: proveer los servicios que ha solicitado; notificarle sobre nuevos servicios o productos que tengan relación con los ya contratados o adquiridos; comunicarle sobre cambios en los mismos; realizar evaluaciones periódicas de nuestros servicios a efecto de mejorar la calidad de los mismos; evaluar la calidad del servicio que brindamos, y en general, para dar cumplimiento a las obligaciones que hemos contraído con usted.</p>
		<p>Es importante informarle que usted tiene derecho al Acceso, Rectificación y Cancelación de sus datos personales, a Oponerse al tratamiento de los mismos o a revocar el consentimiento que para dicho fin nos haya otorgado. Para ello, es necesario que envíe la solicitud, en los términos que marca la Ley en su Art. 29, a nuestra área Administrativa, ubicada en las instalaciones de la Empresa: Atlanta 188, Noche Buena, Benito Juárez, 03720 Ciudad de México, CDMX, o bien, vía correo electrónico a <a title="Enviar correo electrónico" href="mailto:contacto@onhousedmf.com">contacto@onhousedmf.com</a>, el cual solicitamos confirme vía telefónica para garantizar su correcta recepción; El responsable dará respuesta de acuerdo a lo establecido en el Art. 32 aplicándose las restricciones establecidas en el Art. 34.</p>
		<p>Por otra parte, hacemos de su conocimiento que sus datos seguirán siendo utilizados mientras usted decida seguir con el servicio contratado; con el objetivo general de cumplir con las finalidades para las cuales ha proporcionado sus datos, y de acuerdo a lo establecido en el Art.37. En caso de que no obtengamos su oposición expresa para que sus datos personales sean transferidos en la forma y términos antes descrita, entenderemos que ha otorgado su consentimiento en forma tácita para ello.</p>
		<p>En caso de que no esté en de acuerdo con el presente @yield('title') y de que no desee recibir mensajes de nuestra parte, puede enviarnos su solicitud por medio de la dirección electrónica: <a href="mailto:administracion@onhousedmf.com">administracion@onhousedmf.com</a> El presente aviso así como sus modificaciones estarán a su disposición en la página de internet <a title="Página Web {{ config('app.name') }}" href="//onhousedmf.com">onhousedmf.com</a></p>
		<p class="text-right">Fecha de última actualización: 02/10/2020</p>

	</div><!--.container-->
	
@endsection

@push('js')
<script>
    jQuery('#primary-menu ul li').filter(function () {
        return (/@yield('title')/i).test(jQuery(this).text());
    }).closest("li").addClass("current");
</script>
@endpush