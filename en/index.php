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
				<img class='img-circle' src="../assets/img/Foto_Ik.jpg" alt="Foto of myself"><br>
				<h1><span class="label label-danger"><i class="far fa-user-circle"></i>  Who am I?</span></h1>
				<p>Hello, my name is Dieter Van Meerbeeck I was born on 14th December 1998 (
					<?php $geboortedatum = new DateTime("14.12.1998"); $vandaag = new DateTime(); $leeftijd = $vandaag->diff($geboortedatum);echo $leeftijd->y; ?> years old). I'm studying applied informatics (professional bachelor) at the High School College of Ghent (HoGent). I was originally raised in Muizen but because of a drastic change in our family, at a young age, my mother decided to live near Ghent along with my brother, sisters and I.</p>
				<p>I got my interests for webdesign when I was 13 years old, the school I was in at the time they had exams 2 weeks before the beginning of the Easter vacation. Right before those exams we got a form where we could choose from a select few workshops we could follow on the last day before Easter vacation. I then chose for the workshop html and I found it so interesting that I started to experiment with it more at home, then I decided to follow informatics in my last 2 years of high school. In the first year of those 2 years I also developed an interest in java programming.
				</p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><span class="glyphicon glyphicon-education"></span>  Education</span></h1>
				<p>I graduated at the GO! Lyceum Gent where I followed informatics. On the proclamation I received a reward for helping my classmates on their GIP (integrated project) project. Because I helped them they changed my nickname to PHP-Helpdesk in our Facebook messenger group chat. That was because our GIP project involved making a website with PHP where there was a database connected to it where all important information was stored on it.</p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><span class="glyphicon glyphicon-headphones"></span>  Free time</span></h1>
				<p>In my free time I like to listen to music, my favorite musicians are Taylor Swift and Ed Sheeran. Besides listening to music, I like to watch a good movie or serie in the evening/night. My all-time favorite serie is Criminal minds and my favorite movie series is Harry Potter. Most of the time when I listen to music I like to play games where I don't really need the game sound like FIFA, but I don't listen to music when it's a game with a storyline that you follow. My favorite game series is Mass Effect, and sometimes I like to drive a truck in Euro Truck Simulator 2 and American Truck Simulator.</p>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
	</div>
</div>
<!-- /container -->


<!-- +++++ Footer Section +++++ -->

<?php
require( "footer.php" );
?>