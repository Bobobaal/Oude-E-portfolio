<?php
session_start();
$_SESSION[ "pagina" ] = "Home";
require( "head.php" );
require( "nav.php" );
?>


<!-- +++++ Informatief gedeelte +++++ -->

<div class="container pt">
	<div class="well">
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<img class='img-circle' src="../assets/img/Foto_Ik.jpg" alt="Foto van mezelf"><br>
				<h1><span class="label label-danger"><i class="far fa-user-circle"></i>  Wie ben ik?</span></h1>
				<p>Hallo, mijn naam is Dieter Van Meerbeeck en ben geboren op 14 december 1998 (
					<?php $geboortedatum = new DateTime("14.12.1998"); $vandaag = new DateTime(); $leeftijd = $vandaag->diff($geboortedatum);echo $leeftijd->y; ?> jaar). Ik studeer Toegepaste Informatica (professionele bachelor) aan de Hogeschool van Gent (HoGent). Ik ben afkomstig van Muizen maar door een drastische gezinswijziging op jonge leeftijd besloot mijn moeder te verhuizen dichtbij Gent met mijn broer, zussen en mij voor verschillende redenen.</p>
				<p>Toen ik 13 jaar was raakte ik geïnteresseerd in webdesign, in de school waar ik toen zat hadden we 2 weken voor de paasvakantie examens. De week voor die examens kregen we een formulier waar verschillende workshops op stonden en een paar uit mochten kiezen. Ik heb toen gekozen voor de workshop html en vond het zo interessant dat ik thuis verder begon te experimenteren, toen besloot ik dat ik informaticabeheer zou volgen in het 5de en 6de secundair. Eenmaal in het 5de secundair begon ik ook grote interesse te krijgen in java programmeren.
				</p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><span class="glyphicon glyphicon-education"></span>  Opleiding</span></h1>
				<p>Ik ben afgestudeerd aan het GO! Lyceum Gent in de richting informaticabeheer. Op de proclamatie heb ik van de school een prijs gekregen voor het helpen van mijn klasgenoten bij hun GIP project. Wegens het helpen stond ik in onze Facebook messenger groep was mijn bijnaam de PHP-helpdesk. Want als GIP project moesten we een website maken met behulp van PHP en die website was verbonden met een databank waar alle belangrijke gegevens werden opgeslagen.</p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><span class="glyphicon glyphicon-headphones"></span>  Vrije tijd</span></h1>
				<p>In mijn vrije tijd luister ik graag naar muziek, mijn favoriete muzikanten zijn Taylor Swift en Ed Sheeran. Daarnaast spendeer ik soms ook graag mijn vrije tijd met een goede film of serie in de avond/nacht, mijn all-time favoriete serie is Criminal Minds en mijn favoriete films zijn de Harry Potter films. Meestal tijdens het muziek luisteren speel ik wel eens een game als ik niet echt het geluid nodig heb zoals bij FIFA, als het gaat om een game waar een verhaallijn aan hangt natuurlijk niet. Mijn favoriete game serie is Mass Effect, en soms rij ik graag wel eens in een vrachtwagen op Euro Truck Simulator 2 of American Truck Simulator.</p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
	</div>
</div>
<!-- /container -->


<!-- +++++ Footer +++++ -->

<?php
require( "footer.php" );
?>