<?php
session_start();
$_SESSION["pagina"] = "Ondernemen en IT";
require( "head.php" );
require( "nav.php" );
?>

<!-- +++++ Informatief gedeelte +++++ -->

<div class="container pt">
	<div class="well">
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><i class="fas fa-suitcase"></i>  Innovatief IT</span></h1>
				<p class="p-lessMargin"><span style="font-weight: bold">Samenvatting van de opdracht:</span><br>
				Als opdracht moesten we in group een innovatief concept bedenken dat IT gerelateerd is. Dat was alles, niet implementeren maar een duidelijk concept uitwerken.<br><br>
                <span style="font-weight: bold">Beschrijving van ons idee:</span><br>
                Een applicatie voor je smartphone die het volgende doet:
                </p>
                <ul class="list">
                    <li>De app zal je de mogelijkheid bieden om je gepast en stijlvol te kleden voor tal van evenementen (trouwfeest, verjaardag, etentje, eerste date ...)</li>
                    <li>Bij de eerste keer openen van de app zal je je moeten aanmelden, dit kan door een account aan te maken of aan te melden via Facebook.</li>
                    <li>Bij de 2de stap zal je je maten moeten opgeven. Dit moet gebeuren aan de hand van het opmeten van je lichaamsdelen (ieder merk verschilt in maat en zo willen wij de consument het beste aanbieden). Je zal ook een foto van jezelf moeten nemen zodat de app jou kan afbeelden met je gekozen kleren aan, zo heb een een beter idee hoe je er mee zal uit zien.</li>
                    <li>Nadat je die allemaal gedaan hebt, beschik je over de mogelijkheid de kleren die je reeds hebt in te "scannen" met de camera van je apparaat (dit is vrijblijvend en moet niet).</li>
                    <li>Als je de vorige stap liever overslaat kan je aan de slag. Je zal eerst een gelegenheid moeten selecteren en de app zal zijn werk doen om je zo mooi mogelijk aan te kleden in real time.</li>
                    <li>Nadat je de kleren geselecteerd heb die de app voor jou heeft gekozen, kan je deze ofwel onmiddelijk aantrekken, ofwel krijg je in de app zelf de mogelijkheid om de kleren te bestellen (natuurlijk worden de goedkoopste opties eerst getoond), maar deze kan je aanpassen met een filter, want misschien draag je liever Gucci dan Fred Perry of Jack & Jones.</li>
                    <li>De laatste stap omvat het afronden en betalen van je bestelling, natuurlijk zal je ook de optie krijgen om te sharen op sociale media hoe mooi jij er zal uitzien.</li>
                    <li>Een bijkomende optie: de app zal je push notificaties sturen indien je bent aangemeld met Facebook. Zo weet de app wanneer er evenementen zijn gepland voor jou en zal de app zelf met voorstellen naar voren komen over hoe je je moet kleden.</li>
                </ul>
                <br>
                <p class="p-lessMargin">
                <span style="font-weight: bold">Naam en slogan voor de app:</span><br>
                ClosetBuddy, your personal stylist in your pocket.
                <br><br>
                <span style="font-weight: bold">Bedrijfsnaam en waarom we deze naam gekozen hebben:</span><br>
                Blitz Coding. Deze naam werd gekozen, omdat we een bedrijf zijn dat gespecialiseerd is in het schrijven van code, maar tegelijk streven we ernaar om deftig onder de mensen te komen met de nodige "BLITZ" -ige fashion.
				</p><br>
                <div class="col-md-8">
                    <p><span style="font-weight: bold">Logo en de betekenis erachter:</span><br>
                    We hebben ons gebaseerd op de overgang van jong naar oud en van slecht gekleed naar altijd mooi gekleed, vandaar de gradient. Het stipje op de i is vervangen door een bliksempje, dat staat voor het "BLITZ"-ige gevoel dat we willen uitstralen. Klik op het logo om het te vergroten.
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="../assets/img/logo.png" data-toggle="lightbox" data-title="Logo Blitz Coding">
                        <img src="../assets/img/logo.png" alt="Logo Blitz Coding" height="100%" width="100%">
                    </a>
                </div>
                <p><span style="font-weight: bold">Meerwaarde voor de maatschappij:</span><br>
                De app zorgt ervoor dat mensen niet meer voor het dilemma staan om de gepaste kledij te vinden voor de gelegenheid waar ze naartoe moeten. Hetzij een sollicitatiegesprek, een bedrijfslunch, een meeting ... De eerste impressie is immers de belangrijkste. Doordat het dilemma sneller opgelost geraakt, doet men er minder lang over om zich om te kleden. Ook heeft de gebruiker de mogelijkheid om via de app te kijken welke kleren hij/zij in zijn/haar kast heeft zonder ook daadwerkelijk de kast te openen.<br><br>
                <span style="font-weight: bold">Onze doelgroep:</span><br>
                Onze doelgroep is voornamelijk tieners en volwassenen, maar de app is ook geschikt voor kinderen.<br><br>
                <span style="font-weight: bold">Gelijkaardige apps en wat onze app zo speciaal maakt:</span><br>
                Er bestaan gelijkaardige apps, maar die zijn meestal gericht op vrouwen. Onze app is zowel voor mannen als voor vrouwen. Ook willen wij de link leggen tussen het zoeken van kleren en het rechtstreeks kopen via de app. Zo maken de winkels een soort van publiciteit via onze app maar tegelijk beschikken ze over een extra platform waar mensen hun kleren kunnen kopen. In tegenstelling to andere apps, bepaalt onze app wat je het beste draagt in functie van het evenement dat je moet bijwonen.<br><br>
                <span style="font-weight: bold">Onze mockup:</span><br>
                    <a href="../assets/img/mockup_reclame.png" data-toggle="lightbox" data-title="Mockup reclame" data-gallery="mockup" style="float: left">
                        <img src="../assets/img/mockup_reclame.png" alt="Mockup reclame" width="50%" height="50%">
                    </a>
                    <a href="../assets/img/mockup_app.png" data-toggle="lightbox" data-title="Mockup app" data-gallery="mockup" style="float: right">
                        <img src="../assets/img/mockup_app.png" alt="Mockup app" width="50%" height="50%">
                    </a>
                <span style="font-weight: bold">Onze commercial:</span><br>
                <a href="https://youtu.be/-e8CMMusnhU&rel=0" data-toggle="lightbox" data-width="1280">Commercial - ClosetBuddy</a></p>
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