<?php
session_start();
$_SESSION[ "pagina" ] = "Business and IT";
require( "head.php" );
require( "nav.php" );
?>

<!-- +++++ Informatief gedeelte +++++ -->

<div class="container pt">
	<div class="well">
		<div class="row mt centered">
			<div class="col-md-12 centered">
				<h1><span class="label label-danger"><i class="fas fa-suitcase"></i>  Innovative and IT</span></h1>
				<p class="p-lessMargin"><span style="font-weight: bold">Summary of the assignment:</span><br>
				For the assignement we had to work in a group and we had to think of an innovative concept that was related to IT. We only needed to work out the concept itself, not to implement it.<br><br>
                <span style="font-weight: bold">A description of our idea:</span><br>
                A smartphone application that can do the following:
                </p>
                <ul class="list">
                    <li>The app gives you the ability to dress yourself appropriate and stylish for numerous different events (wedding, birthday, nice diner, first date ...)</li>
                    <li>When you open the app for the first time you'll have to login, you can do this by making an account or log in with your Facebook account.</li>
                    <li>As 2nd step you'll have to enter your measurements. You'll do this by measuring all your body parts (every brand has a different size and want to give the consumer the best option). You also have to take a picture of yourself and with that picture the app will be able to show you how you'll look with the clothes you chose, this way you'll have a better idea of how you will look at the event you're going.</li>
                    <li>After you did all that, you will have the option to "scan" your own clothes with the camera of the device you're using (this is optional, you don't have to do this).</li>
                    <li>Now you're ready to use the app. First you'll have to select the type of event you're going to, the app will do its job and dress you nicely in real time on the app.</li>
                    <li>After you selected the clothes the app suggested you'll be able to put them on if you scanned them in, or you will get the possibility to buy them if you don't have them (ofcourse the cheapest brand will be show first), but you can change the filter that it doesn't happen, because maybe you prefer Gucci over Fred Perry or Jack & Jones.</li>
                    <li>The last step is about wrapping up your order, you'll also get the option to share on social media of how you will look on the event.</li>
                    <li>A fully optional option: the app is able to send you push notification when you're logged on with your Facebook account. The app is then able to know when there's an event scheduled and will suggest you some clothes for it.</li>
                </ul><br>
                <p class="p-lessMargin">
                <span style="font-weight: bold">Name and tagline for the app:</span><br>
                ClosetBuddy, your personal stylist in your pocket.
                <br><br>
                <span style="font-weight: bold">Company name and why we chose it:</span><br>
                Blitz Coding. This name was chosen because we're a company that is specialised in writing code, but at the same time we strive to look nice when we go among the people with the needed "BLITZ" fashion.
				</p><br>
                <div class="col-md-8">
                    <p><span style="font-weight: bold">Logo and the meaning behind it:</span><br>
                    We based it on the transition from young to olf and from bad clothed to being clothed really nice, that's why we used the gradient. The dot on the i is replaced by a small lightning, that stands for the "BLITZ"-y feeling that we want to emit. Click on the logo to enlarge it.
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="../assets/img/logo.png" data-toggle="lightbox" data-title="Logo Blitz Coding">
                        <img src="../assets/img/logo.png" alt="Logo Blitz Coding" height="100%" width="100%">
                    </a>
                </div>
                <p><span style="font-weight: bold">Added value for society:</span><br>
                The app makes sure nobody is gonna have the dilemma of finding the proper clothes for the event they're going to. Be it an interview, a company lunch, an important meeting ... The first impression is the most important thing. And because the dilemma is solved quicker than before, people will be able to put on clothes faster than before. The user will also have the possibility to look what they have in their closet without actually opening it.<br><br>
                <span style="font-weight: bold">Our target group:</span><br>
                Our target group is primarely teenagers and adults, but it's also suitable for children.<br><br>
                <span style="font-weight: bold">Similar apps and what makes ours special:</span><br>
                Similar apps do exist, but they're mostly focused on women. Our app is for both men and women. We also want to make a link between searching clothes and buying them directly through our app. That way stores will have soms kind of publicity through our app, but at the same time they will have an extra platform where they will be able to sell their clothes on. In contradiction to other apps, our app determines what is best suitable to wear for the event you're going to.<br><br>
                <span style="font-weight: bold">Our mockup:</span><br>
                    <a href="../assets/img/mockup_reclame.png" data-toggle="lightbox" data-title="Mockup commercial" data-gallery="mockup" style="float: left">
                        <img src="../assets/img/mockup_reclame.png" alt="Mockup reclame" width="50%" height="50%">
                    </a>
                    <a href="../assets/img/mockup_app.png" data-toggle="lightbox" data-title="Mockup app" data-gallery="mockup" style="float: right">
                        <img src="../assets/img/mockup_app.png" alt="Mockup app" width="50%" height="50%">
                    </a>
                <span style="font-weight: bold">Our commercial:</span><br>
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