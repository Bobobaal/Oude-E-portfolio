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
					<li><a href="projecten.php" <?php if($_SESSION["pagina"] == "Projects"){ echo "class='actief'"; }?>>Projects<?php if($_SESSION["pagina"] == "Projects"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
					<li><a href="contact.php" <?php if($_SESSION["pagina"] == "Contact"){ echo "class='actief'"; }?>>Contact<?php if($_SESSION["pagina"] == "Contact"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                   	<li class="dropdown"><p class="dropdown-toggle <?php if($_SESSION["pagina"] == "Individual and IT" or $_SESSION["pagina"] == "International and IT" or $_SESSION["pagina"] == "Business and IT"){ echo "actief"; }?>" data-toggle="dropdown" role="button" aria-expanded="false">iTalent<span class="caret"></span></p>
                		<ul class="dropdown-menu" role="menu">
                    		<li><a href="individu.php" <?php if($_SESSION["pagina"] == "Individual and IT"){ echo "class='actief'"; }?>>Individual and IT<?php if($_SESSION["pagina"] == "Individual and IT"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                    		<li><a href="internationaal.php" <?php if($_SESSION["pagina"] == "International and IT"){ echo "class='actief'"; }?>>International and IT<?php if($_SESSION["pagina"] == "International and IT"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                    		<li><a href="innovIT.php" <?php if($_SESSION["pagina"] == "Business and IT"){ echo "class='actief'"; }?>>Business and IT<?php if($_SESSION["pagina"] == "Business and IT"){ echo " <span class='glyphicon glyphicon-ok'></span>";} ?></a></li>
                		</ul>
                	</li>
                    <li class="dropdown">
                    	<p class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language<span class="caret"></span></p>
                		<ul class="dropdown-menu" role="menu">
                    		<li><a href=""><span class="flag-icon flag-icon-us"></span>English <span class="glyphicon glyphicon-ok"></span></a></li>
                   			<li><a href=<?php echo "../nl/" . basename($_SERVER['PHP_SELF']);?>><span class="flag-icon flag-icon-nl"></span>Dutch</a></li>
               			</ul>
                	</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>