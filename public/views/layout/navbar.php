<header>
	<nav>
		<div class="container">
			<div class="nav-wrapper">
				<a href="<?= $Config->getRacine(); ?>" class="brand-logo">Logo</a>
				<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="sass.html">Sass</a></li>
					<li><a href="badges.html">Components</a></li>
					<li><a href="collapsible.html">Javascript</a></li>
					<li><a href="<?= $Conf->getRacine(); ?> /profile">Profil</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-nav">
		<li>
			<div class="user-view">
				<div class="background">
					<img src="https://materializecss.com/images/office.jpg">
				</div>
				<a href="#user"><img class="circle" src="https://materializecss.com/images/yuna.jpg"></a>
				<a href="#name"><span class="white-text name">John Doe</span></a>
				<a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
			</div>
		</li>
		<li><a href="sass.html">Sass</a></li>
		<li><a href="badges.html">Components</a></li>
		<li><a href="collapsible.html">Javascript</a></li>
		<li><div class="divider"></div></li>
		<li><a href="<?= $Conf->getRacine(); ?> /profile">Profil</a></li>
	</ul>
</header>