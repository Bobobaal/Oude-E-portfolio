<?php
session_start();
$_SESSION[ "pagina" ] = "CV";
require( "head.php" );
require( "nav.php" );
?>

<!-- +++++ CV gedeelte +++++ -->

<div class="container pt">
	<div class="well wellcv">
		<div class="row mt">
			<div class="col-md-6 col-md-offset-3 centered">
				<h3>Curriculum vitae</h3>
				<hr>
			</div>
		</div>
		<div class="row mt">
			<div class="col-md-4">
				<h4 class='centered'>Algemene informatie</h4>
				<hr>
				<p>Geslacht: <span class="rechts">Man</span><br> Geboortedatum: <span class="rechts">14 dec. 1998, (<?php
						$geboortedatum = new DateTime("14.12.1998");
				   		$vandaag = new DateTime();
				   		$leeftijd = $vandaag->diff($geboortedatum);
				   		echo $leeftijd->y;
				   		?> jaar)<br> Bonheiden, België</span><br><br> Nationaliteit: <span class="rechts">Belg</span><br> Telefoon: <span class='rechts'>+32(0) 471 01 99 35</span><br> E-mail: <span class="rechts"><a href="mailto:dietervanmeerbeeck@hotmail.com">dietervanmeerbeeck@hotmail.com</a></span><br> Adres: <span class='rechts'>Grote Steenweg 57, 9840 De Pinte</span>
				</p>
				<hr>
				<h4 class="centered">Talenkennis</h4>
				<hr>
				<p>Nederlands: <span class='rechts'>Moedertaal</span><br> Frans: <span class='rechts'>Gemiddelde kennis</span><br> Engels: <span class="rechts">Zeer goede kennis</span>
				</p>
				<hr>
				<h4 class='centered'>Interesses</h4>
				<hr>
				<p>Voetbal<br> Webdesign
					<br> Programmeren
					<br> Badminton
				</p>
				<hr>
			</div>
			<div class="col-md-4">
				<h4 class='centered'>Opleiding</h4>
				<hr>
				<h5>2017 - Heden</h5>
				<p>Hoger Onderwijs: Professionele Bachelor Toegepaste Informatica, Hogeschool Gent</p>
				<h5>2015 - 2017</h5>
				<p>Secundair Onderwijs: 5de en 6de jaar Informaticabeheer, GO! Lyceum Gent</p>
				<h5>2014 - 2015</h5>
				<p>Secundair Onderwijs: 4de jaar Handel, Koninklijk Lyceum, Gent</p>
				<h5>2013 - 2014</h5>
				<p>Secundair Onderwijs: 3de jaar Handel, KTA Mobi, Gent</p>
				<hr>
			</div>
			<div class="col-md-4">
				<h4 class='centered'>Ervaring</h4>
				<hr>
                                <h5>2019</h5>
                                <p>Studentenjob, milieuwerker, Ivago, Gent</p>
				<h5>2017</h5>
				<p>Studentenjob + stage, ICT-Helpdesk medewerker, Departement Financiën en Begroting Vlaamse Overheid, Brussel</p>
                                <p>Studentenjob, milieuwerker, Ivago, Gent</p>
				<h5>2015 - 2016</h5>
				<p>Studentenjob vakkenvuller Makro, Eke (confectie, centrale gang, verse vis, huishoudtextiel)</p>
				<h5>2014</h5>
				<p>Studentenjob monitor speelpleinwerking, Amigos De Pinte</p>
				<hr>
				<h4 class='centered'>Kennis in de informatica</h4>
				<hr>
				<p>Microsoft Office: <span class="rechts">Zeer goede kennis</span><br> Internet & e-mail: <span class="rechts">Zeer goede kennis</span><br> Visual Basic: <span class="rechts">Goede kennis</span><br> Java: <span class="rechts">Goede kennis</span><br> HTML: <span class="rechts">Zeer goede kennis</span><br> PHP: <span class="rechts">Goede kennis</span><br>
				</p>
				<hr>
			</div>
		</div>
		<!-- /row -->
	</div>
</div>
<!-- /container -->


<!-- +++++ Footer gedeelte +++++ -->

<?php
require( "footer.php" );
?>