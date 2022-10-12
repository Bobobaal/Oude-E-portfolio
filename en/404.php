<?php
session_start();
$_SESSION[ "pagina" ] = "Error 404";
require( "head.php" );
require( "nav.php" );
?>

<!-- +++++ Informatief gedeelte +++++ -->

<div class="container pt">
		<div class="row mt">
			<div class="col-md-12">
				<div class="jumbotron">
					<h1><span class="label label-danger">Oops... Error 404</span></h1>
					<p>The page you are looking for doesn't exist or is deleted recently.</p>
					<p><a class="btn btn-danger btn-lg" href="index.php" role="button">To the homepage</a></p>
				</div>
			</div>
			<!-- /col-md-12 -->
		</div>
		<!-- /row -->
</div>
<!-- /container -->


<!-- +++++ Footer Section +++++ -->

<div id="footer404">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>My Links</h4>
				<p>
					<a href="https://www.linkedin.com/in/dieter-van-meerbeeck-a738a6160/" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
					<br/>
					<a href="https://www.facebook.com/Dieter.Van.Meerbeeck.1998" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
				</p>
			</div>
			<!-- /col-md-4 -->
			<div class="col-md-4" style="float: right">
					<h4>DISCLAIMER</h4>
					<p>This website is a work in progress, Changes are possible.</p>
			</div>
			<!-- /col-md-4 -->
		</div>
	</div>
</div>