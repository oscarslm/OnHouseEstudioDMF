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
							<li><a href="#"><div>Arquitectura</div></a>
								<ul>
									<li><a href="#"><div>Estudio y Diseño</div></a>
										<ul>
											<li><a href="{{ route('Industrial') }}"><div>Estilo Industrial</div></a></li>
											<li><a href="{{ route('Minimalista') }}"><div>Estilo Minimalista</div></a></li>
											<li><a href="{{ route('Nórdico') }}"><div>Estilo Nórdico</div></a></li>
											<li><a href="{{ route('Rústico') }}"><div>Estilo Rústico</div></a></li>
											<li><a href="{{ route('Ecléctico') }}"><div>Estilo Ecléctico</div></a></li>
										</ul>
									</li>
									<li><a href="{{ route('Diseño de Interiores') }}"><div>Diseño de Interiores</div></a></li>
									<li><a href="#"><div>Desarrollo de Proyectos</div></a>
										<ul>
											<li><a href="{{ route('Habitacional') }}"><div>Habitacional</div></a></li>
											<li><a href="{{ route('Oficinas') }}"><div>Oficinas</div></a></li>
											<li><a href="{{ route('Comercial') }}"><div>Comercial</div></a></li>
										</ul>
									</li>
									<li><a href="{{ route('Remodelaciones') }}"><div>Remodelaciones</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Mobiliario</div></a>
								<ul>
									<li><a href="{{ route('Diseño de Mobiliario') }}"><div>Diseño</div></a></li>
									<li><a href="{{ route('Fabricación de Mobiliario') }}"><div>Fabricación</div></a></li>
									<li><a href="{{ route('Instalación de Mobiliario') }}"><div>Instalación</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Domótica</div></a>
								<ul>
									<li><a href="{{ route('Proyecto de Domótica') }}"><div>Proyecto</div></a></li>
									<li><a href="{{ route('Integración de Domótica') }}"><div>Integración</div></a></li>
									<li><a href="{{ route('Desarrollo de Domótica') }}"><div>Desarrollo</div></a></li>
								</ul>
							</li>
							<li><a href="https://onhousedmf.com/tienda" target="_blank"><div>Tienda</div></a></li>
							<li><a href="#" target="_blank"><div>Blog</div></a></li>
							<li><a href="{{ route('Contacto') }}"><div>Contacto</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div><!--.container-->

			</div><!--#header-wrap-->

		</header><!-- #header end -->
