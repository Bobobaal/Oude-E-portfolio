<?php
session_start();
$_SESSION["pagina"] = "CV";
require("head.php");
require("nav.php");
?>

    <!-- +++++ CV Section +++++ -->

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
				<h4 class='centered'>General information</h4>
				<hr>
				<p>Gender: <span class="rechts">Man</span><br>
				   Date of Birth: <span class="rechts">14th Dec. 1998, (age: <?php
						$geboortedatum = new DateTime("14.12.1998");
				   		$vandaag = new DateTime();
				   		$leeftijd = $vandaag->diff($geboortedatum);
				   		echo $leeftijd->y;
				   		?>)<br> Bonheiden, Belgium</span><br><br>
				   Nationality: <span class="rechts">Belgian</span><br>
				   Cellphone: <span class='rechts'>+32(0) 471 01 99 35</span><br>
				   E-mail: <span class="rechts"><a href="mailto:dietervanmeerbeeck@hotmail.com">dietervanmeerbeeck@hotmail.com</a></span><br>
				   Address: <span class='rechts'>Grote Steenweg 57, 9840 De Pinte</span></p><hr>
				<h4 class="centered">Language skills</h4>
				<hr>
				<p>Dutch: <span class='rechts'>Native language</span><br>
				   French: <span class='rechts'>Medium knowledge</span><br>
				   English: <span class="rechts">Very good knowledge</span>
				</p>
				<hr>
				<h4 class='centered'>Interests</h4>
				<hr>
				<p>Football/Soccer<br>
				Webdesign<br>
				Programming<br>
				Badminton</p>
				<hr>
            </div>
			<div class="col-md-4">
				<h4 class='centered'>Education</h4>
				<hr>
				<h5>2017 - Heden</h5>
				<p>College: Professional Bachelor Applied Computer Science, High School College Ghent</p>
				<h5>2015 - 2017</h5>
				<p>High School: 5th and 6th year Informatics, GO! Lyceum Ghent</p>
				<h5>2014 - 2015</h5>
				<p>High School: 4de year Business, Koninklijk Lyceum, Ghent</p>
				<h5>2013 - 2014</h5>
				<p>High School: 3rd year Business, KTA Mobi, Ghent</p>
				<hr>
            </div>
			<div class="col-md-4">
				<h4 class='centered'>Experience</h4>
				<hr>
                                <h5>2019</h5>
                                <p>Student job, environmental worker, Ivago, Gent</p>
				<h5>2017</h5>
				<p>Student job + internship, ICT-Helpdesk, Department Finance and Budget Flemish Government, Brussels</p>
                                <p>Student job, environmental worker, Ivago, Gent
				<h5>2015 - 2016</h5>
				<p>Student job stock boy Makro, Eke (clothing, central corrider, fish, household textile)</p>
                                <h5>2014</h5>
                                <p>Student job, Monitor playground operation, Amigos De Pinte
				<hr>
				<h4 class='centered'>Informatics knowledge</h4>
				<hr>
				<p>Microsoft Office: <span class="rechts">Very good</span><br>
				   Internet & e-mail: <span class="rechts">Very good</span><br>
				   Visual Basic: <span class="rechts">Good</span><br>
				   Java: <span class="rechts">Good</span><br>
				   HTML: <span class="rechts">Very good</span><br>
				   PHP: <span class="rechts">Good</span><br>
				</p><hr>
            </div>
        </div>
        <!-- /row -->
		</div>
    </div>
    <!-- /container -->


    <!-- +++++ Footer Section +++++ -->

<?php
require("footer.php");
?>