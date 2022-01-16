<div class="header-wrapper header-transparent">
	<!-- .header.header-style01 start -->
	<header id="header"  class="header-style01">
		<!-- .container start -->
		<div class="container">
			<!-- .main-nav start -->
			<div class="main-nav">
				<!-- .row start -->
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-default nav-left" role="navigation">

							<!-- .navbar-header start -->
							<div class="navbar-header">
								<div class="logo">
									<a href="{{ route('pages.index') }}">
										<img src="img/logo.png" alt="Trucking Transportation and Logistics HTML Template"/>
									</a>
								</div><!-- .logo end -->
							</div><!-- .navbar-header start -->

							<!-- MAIN NAVIGATION -->
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav">

									<li><a href="{{ route('pages.index') }}">{{ __('Kezdőlap') }}</a></li>

									<li><a href="{{ route('pages.about') }}">{{ __('Rólunk') }}</a></li>

									<li><a href="{{ route('pages.services') }}">{{ __('Szolgáltatásaink') }}</a></li>

									<li><a href="{{ route('pages.contact') }}">{{ __('Kapcsolat') }}</a></li>
								</ul><!-- .nav.navbar-nav end -->

								<!-- RESPONSIVE MENU -->
								<div id="dl-menu" class="dl-menuwrapper">
									<button class="dl-trigger">Open Menu</button>

									<ul class="dl-menu">

									<li><a href="{{ route('pages.index') }}">{{ __('Kezdőlap') }}</a></li>

									<li><a href="{{ route('pages.about') }}">{{ __('Rólunk') }}</a></li>

									<li><a href="{{ route('pages.services') }}">{{ __('Szolgáltatásaink') }}</a></li>

									<li><a href="{{ route('pages.contact') }}">{{ __('Kapcsolat') }}</a></li>
									</ul><!-- .dl-menu end -->
								</div><!-- #dl-menu end -->

								<!-- #search start -->
								<!-- #search end -->
							</div><!-- MAIN NAVIGATION END -->
						</nav><!-- .navbar.navbar-default end -->
					</div><!-- .col-md-12 end -->
				</div><!-- .row end -->
			</div><!-- .main-nav end -->
		</div><!-- .container end -->
	</header><!-- .header.header-style01 -->
</div>
