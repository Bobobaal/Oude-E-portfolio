	<!-- Static navbar -->
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Dieter Van Meerbeeck</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" <?php if($_SESSION["pagina"] == "Home"){ echo "class='actief'"; }?>>Home<?php if($_SESSION["pagina"] == "Home"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
					<li><a href="cv.php" <?php if($_SESSION["pagina"] == "CV"){ echo "class='actief'"; }?>>CV<?php if($_SESSION["pagina"] == "CV"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
					<li><a href="projecten.php" <?php if($_SESSION["pagina"] == "Projecten"){ echo "class='actief'"; }?>>Projecten<?php if($_SESSION["pagina"] == "Projecten"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
					<li><a href="contact.php" <?php if($_SESSION["pagina"] == "Contact"){ echo "class='actief'"; }?>>Contact<?php if($_SESSION["pagina"] == "Contact"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                    <li class="dropdown"><p class="dropdown-toggle <?php if($_SESSION["pagina"] == "Individu en IT" or $_SESSION["pagina"] == "Internationaal en IT" or $_SESSION["pagina"] == "Ondernemen en IT"){ echo "actief"; }?>" data-toggle="dropdown" role="button" aria-expanded="false">iTalent<span class="caret"></span></p>
                		<ul class="dropdown-menu" role="menu">
                    		<li><a href="individu.php" <?php if($_SESSION["pagina"] == "Individu en IT"){ echo "class='actief'"; }?>>Individu en IT<?php if($_SESSION["pagina"] == "Individu en IT"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                    		<li><a href="internationaal.php" <?php if($_SESSION["pagina"] == "Internationaal en IT"){ echo "class='actief'"; }?>>Internationaal en IT<?php if($_SESSION["pagina"] == "Internationaal en IT"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                    		<li><a href="innovIT.php" <?php if($_SESSION["pagina"] == "Ondernemen en IT"){ echo "class='actief'"; }?>>Ondernemen en IT<?php if($_SESSION["pagina"] == "Ondernemen en IT"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                		</ul>
                	</li>
                    <li class="dropdown"><p class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Taal<span class="caret"></span></p>
                		<ul class="dropdown-menu" role="menu">
                    		<li><a href=<?php echo "../en/" . basename($_SERVER['PHP_SELF']);?>><span class="flag-icon flag-icon-us"></span>Engels</a></li>
                    		<li><a href=""><span class="flag-icon flag-icon-nl"></span>Nederlands<span class="glyphicon glyphicon-ok"></span></a></li>
                		</ul>
                	</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>