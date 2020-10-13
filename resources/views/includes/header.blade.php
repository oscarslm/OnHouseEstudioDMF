		<header id="header" class="dark full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ route('Inicio') }}" class="standard-logo" data-dark-logo="{{ asset('images/logo-dark.png') }}"><img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }} Logo"></a>
						<a href="{{ route('Inicio') }}" class="retina-logo" data-dark-logo="{{ asset('images/logo-dark@2x.png') }}"><img src="{{ asset('images/logo@2x.png') }}" alt="{{ config('app.name') }} Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-4">

						<ul>
							<li><a href="{{ route('Nosotros') }}"><div>Nosotros</div></a></li>
							<li><a href="#"><div>Estudio y Diseño</div></a>
								<ul>
									<li><a href="#"><div>Estilo Industrial</div></a></li>
									<li><a href="#"><div>Estilo Minimalista</div></a></li>
									<li><a href="#"><div>Estilo Nórdico</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Fabricación e Instalación</div></a></li>
							<li><a href="#"><div>Domótica</div></a></li>
							<li><a href="#"><div>Tienda</div></a></li>
							<li><a href="{{ route('Contacto') }}"><div>Contacto</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div><!--.container-->

			</div><!--#header-wrap-->

		</header><!-- #header end -->
