<?php
session_start();
$_SESSION["pagina"] = "Contact";
require("head.php");
require("nav.php");
$_POST["naam"] = "";
$_POST["email"] = "";
$_POST["onderwerp"] = "";
$_POST["tekst"] = "";
$geldigemail = false;
if(isset($_POST["verstuur"])){
	if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$geldigemail = true;
	} else{
		$geldigemail = false;
	}
}
if(isset($_POST["verstuur"]) && isset($_POST["naam"]) && isset($_POST["email"]) && isset($_POST["onderwerp"]) && isset($_POST["tekst"]) && $_POST["naam"] != "" && $_POST["email"] != "" && $_POST["onderwerp"] != "" && $_POST["tekst"] != "" && $geldigemail == true){
	$naar = "dietervmb@portfolio-dieter.dx.am";
	$onderwerp = $_POST["onderwerp"];
	$tekst = $_POST["tekst"];
	$email = "---------------------------------------------------------------------------\r\nReageer via volgende e-mail: " . $_POST["email"] . "\r\nNaam persoon: " . $_POST["naam"] . "\r\n---------------------------------------------------------------------------\r\n";
	mail($naar, $onderwerp, $tekst, $email);
	$success = true;
}else{
	$success = false;
}
?>


<!-- +++++ Contact Section +++++ -->

<div class="container pt">
	<div class="well">
	<div class="row mt">
		<div class="col-md-6 col-md-offset-3 centered">
			<h3>CONTACTEER MIJ</h3>
			<hr>
			<p>Voor vragen of eventuele opmerkingen kunt u me altijd contacteren via het formulier hieronder.<br> Alle velden in het formulier zijn verplicht om in te vullen!</p>
		</div>
	</div>
	<div class="row mt">
		<div class="col-md-8 col-md-offset-2">
			<form role="form" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" id="form">
				<div class="form-group <?php if($_POST["naam"] == "" && isset($_POST["verstuur"])){ echo 'has-warning has-feedback';}  ?>">
					<label for="naam">Uw naam:</label>
					<input type="text" class="form-control" id="naam" name="naam" value="<?php @$naam=$_POST["naam"]; if(isset($naam) && $success == false){$naam=htmlspecialchars($naam); $naam=stripslashes($naam); echo $naam;}?>">
					<?php
					if($_POST["naam"] == "" && isset($_POST["verstuur"])){ echo '<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-describedby="reden"></span>'; echo '<span id="reden" class="help-block">Dit veld is verplicht om ingevuld te worden!</span>';}?>
					<br>
				</div>
				<div class="form-group <?php if($geldigemail != true && isset($_POST["verstuur"]) && $_POST["email"] != ""){ echo 'has-error has-feedback';} if($_POST["email"] == "" && isset($_POST["verstuur"])){ echo 'has-warning has-feedback';}  ?>">
					<label for="email">Uw e-mailadres:</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php @$email=$_POST["email"]; if(isset($email) && $success == false){$email=htmlspecialchars($email); $email=stripslashes($email); echo $email;}?>">
					<?php if($geldigemail != true && $_POST["email"] != ""){ echo '<span class="glyphicon glyphicon-remove form-control-feedback" aria-describedby="reden"></span>'; echo '<span id="reden" class="help-block">Gelieve een geldig e-mailadres in te vullen!</span>';}
					if($_POST["email"] == "" && isset($_POST["verstuur"])){ echo '<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-describedby="reden"></span>'; echo '<span id="reden" class="help-block">Dit veld is verplicht om ingevuld te worden!</span>';}?>
					<br>
				</div>
				<div class="form-group <?php if($_POST["onderwerp"] == "" && isset($_POST["verstuur"])){ echo 'has-warning has-feedback';}  ?>">
					<label for="onderwerp">Onderwerp:</label>
					<input type="text" class="form-control" id="onderwerp" name="onderwerp" value="<?php @$onderwerp=$_POST["onderwerp"]; if(isset($onderwerp) && $success == false){$onderwerp=htmlspecialchars($onderwerp); $naam=stripslashes($onderwerp); echo $onderwerp;}?>">
					<?php
					if($_POST["onderwerp"] == "" && isset($_POST["verstuur"])){ echo '<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-describedby="reden"></span>'; echo '<span id="reden" class="help-block">Dit veld is verplicht om ingevuld te worden!</span>';}?>
					<br>
				</div>
				<div class="form-group <?php if($_POST["tekst"] == "" && isset($_POST["verstuur"])){ echo 'has-warning has-feedback';}  ?>">
					<label for="tekst">Vra(a)g(en)/opmerking(en):</label>
					<textarea class="form-control" rows="6" id="tekst" name="tekst"><?php @$tekst=$_POST["tekst"]; if(isset($tekst) && $success == false){$tekst=htmlspecialchars($tekst); $naam=stripslashes($tekst); echo $tekst;}?></textarea>
					<?php
					if($_POST["tekst"] == "" && isset($_POST["verstuur"])){ echo '<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-describedby="reden"></span>'; echo '<span id="reden" class="help-block">Dit veld is verplicht om ingevuld te worden!</span>';}?>
					<br>
					<?php if($success == true){ echo "<p style='float: left'>Bedankt voor uw vra(a)g(en)/opmerking(en), ik zal zo spoedig mogelijk contact met u opnemen!";} ?></p><button type="submit" class="btn btn-danger float_center" name="verstuur">VERZENDEN</button>
				</div>
			</form>
		</div>
	</div>
	<!-- /row -->
	</div>
<!-- /well -->
</div>
<!-- /container -->


<!-- +++++ Footer Section +++++ -->

<?php
require("footer.php");
?>