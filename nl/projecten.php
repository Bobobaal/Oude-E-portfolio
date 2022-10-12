<?php
session_start();
$_SESSION[ "pagina" ] = "Projecten";
require( "head.php" );
require( "nav.php" );
?>

<!-- +++++ Informatief gedeelte +++++ -->

<div class="container pt">
	<div class="well">
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><i class="fas fa-flask"></i>  Mastermind (opdracht voor vak projecten 1)</span></h1>
				<p class="p-lessMargin"><span style="font-weight: bold">Hoe speel je mastermind?</span><br> Mastermind is een spel waarbij 1 persoon een code maaakt (de codemaker) en iemand anders moet proberen de code te kraken (de codekraker). Je hebt 8 verschillende kleuren en 2 evaluatiepinnen. Als een evaluatiepin zwart is betekent het dat je een pin hebt gekozen met de correcte kleur en de correcte positie, als het wit is betekent het dat de kleur erin zit maar niet op de juiste positie geplaatst is. Er 3 moeilijkheidsgraden, gemakkelijk is dat de code bestaat uit 4 posities en elke positie moet een unieke kleur bevatten, normaal is ook met 4 posities maar de kleuren op de posities moeten niet uniek zijn ook komen de evaluatiepinnen niet overeen met de positie van de codepinnen, moeilijk bestaat uit 5 posities waarvan de posities niet een unieke kleur moeten bevatten en 2 posities mogen leeg blijven bij deze moeilijkheidsgraad staan de evaluatiepinnen ook niet op volgorde. Het raden van de code gebeurt in maximaal 12 pogingen, heb je het niet geraden na 12 pogingen heb je verloren.<br>
                                <br>
				<span style="font-weight: bold">Waar de opdracht in het algemeen uit bestond:</span><br>
				Voor onze opdracht moesten we dus een mastermind applicatie maken in java. De applicatie moest aan volgende eisen voldoen:<br>
				<ul class="list">
					<li>3-talig zijn: Nederlands, Engels, Frans.</li>
					<li>Gebruikers moesten zich kunnen aanmelden en registreren.</li>
					<li>3 verschillende moeilijkheidsgraden (de regels per moeilijkheidsgraad waren al vastgelegd door de lectoren)</li>
					<li>Gebruikers kunnen elkaar uitdagen</li>
					<li>Score moest bijgehouden worden van de uitdagingen voor een klassement (+3 bij winst, -1 bij verlies, bij gelijkspel uitdager wint)</li>
					<li>De applicatie moet werken in console en GUI (Grafische User Interface)</li>
				</ul>
				<a href="../assets/img/taal_GUI.png" data-toggle="lightbox" data-title="Taal selecteren in de GUI" data-gallery="mastermind">
					Klik hier voor een gallerij met afbeeldingen van het project.
				</a>
				<a href="../assets/img/login_GUI.png" data-toggle="lightbox" data-title="Aanmelden in de GUI" data-gallery="mastermind">
				</a>
				<a href="../assets/img/keuzemenu_GUI.png" data-toggle="lightbox" data-title="Keuzemenu in de GUI" data-gallery="mastermind">
				</a>
				<a href="../assets/img/spelbord_Console.png" data-toggle="lightbox" data-title="Spelbord in de console" data-gallery="mastermind">
				</a>
				<a href="../assets/img/zetSpelbord_Console.png" data-toggle="lightbox" data-title="Spelbord met een zet op in de console" data-gallery="mastermind">
				</a>
				<a href="../assets/img/uitdagen_console.png" data-toggle="lightbox" data-title="Uitdagen in de console" data-gallery="mastermind">
				</a>
				<a href="../assets/img/klassement_GUI.png" data-toggle="lightbox" data-title="Klassement in de GUI" data-gallery="mastermind">
				</a>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><span class="fab fa-free-code-camp"></span>  Camping Le Passage (GIP opdracht, laatste jaar secundair)</span></h1>
                <p class="p-lessMargin"><span style="font-weight: bold">Wat is een GIP?</span><br>
                    Een GIP of geïntegreerde proef maakt deel uit van de examens in het laatste jaar van het secundair. Het is een opdracht die men moet maken die zich strekt over de verschillende vakken die aan bod komen in de studierichting. Op het einde van het jaar wordt het geheel van het project beoordeeld. Dat is zodat de leerling kan bewijzen dat die zelfstandig een opdracht in zijn/haar vakgebied kan afleveren. Een GIP wordt beoordeeld door niet alleen leerkrachten, maar ook een externe jury die het vakgebied in praktijk uitoefenen.<br><br>
					<span style="font-weight: bold">Waar ging mijn GIP over?</span><br>
					Mijn GIP ging over camping Le Passage en dat is een camping waar ik tijdens de vakantie verblijf in een caravan die mijn ouders daar gekocht hebben. Op die camping hebben ze 2 soorten plaatsen, een sta- of trekplaats en een plaats waar de vaste caravans op staan die mensen daar gekocht hebben. Mijn idee was dus om het reserveren van de sta- of trekplaatsen soepel te laten verlopen en dat vooral tijdens de drukke periodes. De camping is gelokaliseerd in de Ardennen, om precies te zijn in Marcourt. Dat is vlakbij Hotton, Durbuy, La Roche-en-Ardenne en nog andere toeristische plaatsen. De uitbaters van de camping komen uit West-Vlaanderen en hebben de camping al uitgebreid tot 50 plaatsen. 33 van die plaatsen zijn voor caravans die daar blijven staan en waarvoor de eigenaars jaarlijks betalen. De 17 andere plaatsen zijn voor mensen die komen met een mobiele caravan of een tent. De bedoeling van de website is dus dat mensen zich als klant kunnen registreren op de site en dan op hun account een staanplaats kunnen reserveren. Dit wordt allemaal gedaan met de hulp van PHP en MySQL. Omdat er MySQL gebruikt is kunnen de mensen ook hun eigen informatie aanpassen voor als ze ooit zouden verhuizen of wanneer ze een ander e-mailadres zouden hebben. Ook gaan ze een overzicht krijgen van hun reserveringen en als men het wil, kunnen ze die ook aanpassen of annuleren als er dingen tussenkomen.<br>
					<a href="../assets/img/GIP_index.png" data-toggle="lightbox" data-title="Homepagina zonder aangemeld te zijn" data-gallery="GIP">
					Klik hier voor een gallerij met afbeeldingen van mijn GIP opdracht.
					</a>
					<a href="../assets/img/GIP_indexIngelogd.png" data-toggle="lightbox" data-title="Homepagina waar iemand met admin rechten is op ingelogd" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_reserveren.png" data-toggle="lightbox" data-title="Pagina om te reserveren" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_reserveringen.png" data-toggle="lightbox" data-title="Pagina met alle reserveringen (alleen voor gebruikers met admin rechten)" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_profiel.png" data-toggle="lightbox" data-title="Eigen profielpagina" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_geentoegang.png" data-toggle="lightbox" data-title="Geen toegang pagina" data-gallery="GIP">
					</a>
                </p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
	</div>
	<!-- /well -->
</div>
<!-- /container -->


<!-- +++++ Footer Section +++++ -->

<?php
require( "footer.php" );
?>