<?php
session_start();
$_SESSION[ "pagina" ] = "Projects";
require( "head.php" );
require( "nav.php" );
?>

<!-- +++++ Informatief gedeelte +++++ -->

<div class="container pt">
	<div class="well">
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><i class="fas fa-flask"></i>  Mastermind (assignement for projects 1)</span></h1>
				<p class="p-lessMargin"><span style="font-weight: bold">How do you play mastermind?</span><br> Mastermind is a game where 1 person creates a code (code creator) and another person has to crack the code (code cracker). You have 8 different colors and 2 colors for evaluation. When evaluationcolor is black you placed your colored pin in the right spot, when it's white you chose the right color but not the right place. There are 3 different difficulties, easy exist of a code with 4 pins and each pin has to be an unique color, normal is also with 4 pins but the colors don't have to be unique and the evaluation won't be in the order of your guessed pins, hard is a code with 5 pins but the colors are not unique and it's possible that a maximum of 2 positions could be empty and just like in normal the evaluation won't be in the order of your pins. You can only guess a maximum of 12 times.<br><br>
				<span style="font-weight: bold">What the assignement was all about:</span><br>
				For our assignement we had to make a mastermind application in java. The application had to comply to the following requirements:
				<ul class="list">
					<li>Had to be in the following languages: Dutch, English, French.</li>
					<li>Users have the ability to login or register.</li>
					<li>3 different difficulties (Already made up by the teachers)</li>
					<li>Users can challenge each other</li>
					<li>A score had to be saved to create a leaderbord (+3 when you win, -1 when you lose, if tied challenger wins)</li>
					<li>The application had to work in a console and in a GUI (Graphical User Interface)</li>
				</ul>
				<a href="../assets/img/taal_GUI.png" data-toggle="lightbox" data-title="Language selection in the GUI" data-gallery="mastermind">
					Click here to open a gallery with images of the project.
				</a>
				<a href="../assets/img/login_GUI.png" data-toggle="lightbox" data-title="Logging in in the GUI" data-gallery="mastermind">
				</a>
				<a href="../assets/img/keuzemenu_GUI.png" data-toggle="lightbox" data-title="Menu with options in the GUI" data-gallery="mastermind">
				</a>
				<a href="../assets/img/spelbord_Console.png" data-toggle="lightbox" data-title="Gameboard in the console" data-gallery="mastermind">
				</a>
				<a href="../assets/img/zetSpelbord_Console.png" data-toggle="lightbox" data-title="Gameboard with a move on in the console" data-gallery="mastermind">
				</a>
				<a href="../assets/img/uitdagen_console.png" data-toggle="lightbox" data-title="Challenging in the console" data-gallery="mastermind" style="float:right">
				</a>
				<a href="../assets/img/klassement_GUI.png" data-toggle="lightbox" data-title="Leaderboard in the GUI" data-gallery="mastermind">
				</a>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><span class="fab fa-free-code-camp"></span>  Camping Le Passage (Integrated project, last year of high school)</span></h1>
                <p class="p-lessMargin"><span style="font-weight: bold">What is an integrated project?</span><br>
                    An integrated project is part of the final exams in the last year of high school. The assignement involves all the things you've seen in your field of study. The project gets evaluated at the end of the school year. It's a way for a student to proof they can deliver a finalised project on their own in their field of study. The projects is not only evaluated by the teachers but also by an exernal jury that works in the field of study the student is following.<br><br>
					<span style="font-weight: bold">What was my integrated project about?</span><br>
					My integrated project was about camping Le Passage, it's a camping where I stay during the vacation in a caravan my parents bought there. The camping has 2 types of plots, the first type is for people that come and go with a tent and the second type is for people that bought a caravan their and the caravan stays on the camping. My idea was to make the reservations for the first type of spot much smoother, which is very convient during the busy periods in the year. The camping is located in the Ardens, Marcourt to be precise. That's near Hotton, Durbuy, La Roch-en-Ardenne and other tourist destinations. The owners of the camping or from West-Flanders and they expanded the camping to a camping with 50 plots. 33 of those plots are type 2 plots, the other 17 are type 1 plots. The purpose of the website is that (future) customers can register and log on on the site and be able to create a reservation for a type 1 plot. This is all done by using PHP and MySQL so people can change their personal information if they move or have a new e-mail address. They're also able to look at a list of their reservations and they have the ability to change or cancel their reservation if something important has come up.<br>
					<a href="../assets/img/GIP_index.png" data-toggle="lightbox" data-title="Homepage when you're not logged on" data-gallery="GIP">
					Click here for a gallery with images of my integrated project.
					</a>
					<a href="../assets/img/GIP_indexIngelogd.png" data-toggle="lightbox" data-title="Homepage where someone with admin rights has logged on" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_reserveren.png" data-toggle="lightbox" data-title="Page to place a reservation" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_reserveringen.png" data-toggle="lightbox" data-title="Page with all reservations (only for users with admin rights)" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_profiel.png" data-toggle="lightbox" data-title="Own profile page" data-gallery="GIP">
					</a>
					<a href="../assets/img/GIP_geentoegang.png" data-toggle="lightbox" data-title="No access page" data-gallery="GIP">
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