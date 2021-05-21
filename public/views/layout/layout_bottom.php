		<footer class="page-footer fixed-bottom" style="position:fixed;bottom:0;left:0;width:100%;">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Footer Content</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					© 2014 - <?= date('Y'); ?> Copyright Text
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
		</footer>

	</body>

	<script type="text/javascript" src="public/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/assets/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.datepicker').datepicker({
				autoClose: true,
				firstDay: 1,
				yearRange: 100,
				selectMonths: true, // Creates a dropdown to control month
				selectYears: 2, // Creates a dropdown of 15 years to control year
				showClearBtn: true,
				i18n: {
					months: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
					monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
					weekdays: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
					weekdaysShort: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
					weekdaysAbbrev: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
					today: 'Aujourd\'hui',
					clear: 'Réinitialiser',
					close: 'Fermer',
					labelMonthNext: 'Mois suivant',
					labelMonthPrev: 'Mois précédent',
					labelMonthSelect: 'Selectionner le mois',
					labelYearSelect: 'Selectionner une année',
					cancel: 'Annuler'
				},
				format: 'dd mmmm yyyy'
			});

			// if ($('.datepicker').length) {
			// 	M.toast({html: $(this).toString()});
			// }

			

			$('.scrollspy').scrollSpy();
			$('.sidenav').sidenav();
		});

		$('.datepicker').on("change", function() {
			M.toast({html: $('.datepicker').datepicker('toString')});
		});

		
	</script>

</html>