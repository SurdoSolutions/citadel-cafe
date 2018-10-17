<?php 
	//message vars
	$msg = '';
	$msgClass = '';
    $currentHome = "active";
    $currentAbout;
    $currentProjects;
    $currentContact;
    $pageTitle = "Citadel Cafe | Coffee, Turkish Delight, and more!";
    $styleFile = null;

	//check for submission
	if(filter_has_var(INPUT_POST, 'submit')){
		//Get form data
		$email = htmlspecialchars($_POST['email']);
	

		//check required files

		if(!empty($email)){
			//passed
			//validate email:
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				//failed
				$msg = "Invalid email address. Please try again.";
				$msgClass = "alert-danger";
			}else{
				//passed validation
				$msg = 'Your message has been successfully validated.';
				$msgClass = 'alert-success';

				//recipient
				$toEmail = 'contact@surdosolutions.com';
				//subject
				$subject = 'Newsletter Subscription';
				//body
				$body = '
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Subscription</h4>
				';

				//Email headers:
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";

				//Additional headers
				$headers .= "From: <".$email.">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					//sent
					$msg = 'Thanks for subscribing! Stay tuned for updates.';
					$msgClass = 'alert-success';
				}else{
					$msg = 'Your email was not sent.';
					$msgClass = 'alert-danger';
				}
			}
		}else{
			$msg = 'Please fill the field.';
			$msgClass = 'alert-danger';
		}
	}
?>
<?php include('inc/header.php')?>
    <div id="fb-root"></div>
    
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <section id="top">
    </section>
    
    <section id="showcase">
        <h1 id="content">Welcome to</h1>
        <img src="img/Citadel%20Horizontal%20Logo%20PNG.png" alt="some image" id="logo">
<!--        Move back to header after promotional banner removed-->
    </section>
    
    <header>
        <div class="jumbotron">
            <div class="innerjumbo">
                <h1><i class="fa fa-coffee" aria-hidden="true"></i> NOW OFFERING <span id="announcement"><strong>ONLINE</strong></span> ORDERS!</h1>
                <div class="gh-button-ifrm" data-customer-id="669606" data-restaurant-name="Citadel Cafe Restaurant" data-button-type="branded" data-button-color="red" data-button-size="large" data-env="prod" data-url="citadel-cafe-restaurant-4734-cemetery-rd-hillard" data-tracking-id="58865" data-restaurant-address="4734 Cemetery Rd, Hillard OH, 43228" data-version="1.0" data-link-type="gh" target="_blank"></div>
                <h2>Our Signature Turkish Delight</h2>
                <h2>Fresh Baklava and Cheese Rolls</h2>
                <h2>Coffee, Cappucinos, and Frappes</h2>
                <h2>And more!</h2>
            </div>
        </div>
    </header>
    
    <section id="section-a">
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <h1><a href="gallery.php" target="_blank">Gallery</a></h1>
        <h2>Also, check us out on Instagram!</h2>
        
        <div id="instagram-embed">
          <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:41.01851851851852% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BY1C0hPAaIb/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Citadel Café (@citadel.cafe)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-09-09T17:34:06+00:00">Sep 9, 2017 at 10:34am PDT</time></p></div></blockquote>
          <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
        </div>
    </section>
    
    <section id="section-b">
        <h1><a href="citadel-menu.html" target="_blank">Menu</a></h1>
        <h3>Click the image if you'd like to download a pdf version of our menu!</h3>
        <div class="container-fluid">
           <div class="row">
            <div class="col-lg-4 col-sm-6"><a href="img/citadel-menu-201807.pdf" target="_blank"><img id="menu" src="img/201807-citadel-menu-1.jpg" alt="A menu"></a></div>
            <div class="col-lg-4 col-sm-6"><a href="img/citadel-menu-201807.pdf" target="_blank"><img id="menu" src="img/201807-citadel-menu-2.jpg" alt="A menu"></a></div>
            <div class="col-lg-4 col-sm-6"><a href="img/citadel-menu-201807.pdf" target="_blank"><img id="menu" src="img/201807-citadel-menu-3.jpg" alt="A menu"></a></div>
        </div>
        </div>
    </section>
    
    <section id="section-c">
        <div id="map">
           <a href="https://www.google.com/search?q=Citadel+Cafe,+4734+Cemetery+Rd,+Hilliard,+OH+43026&ludocid=10861006248789419591&gws_rd=ssl#gws_rd=ssl" target="_blank"><h1>4734 Cemetery Road, Hilliard, OH</h1></a>
            <div id="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.8914833241574!2d-83.14513108472794!3d40.03320218679948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883893dd3d1c68c9%3A0x96ba0ba3a2642647!2sCitadel+Cafe!5e0!3m2!1sen!2sus!4v1505840861255" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>    

    <section id="section-d">
       
        <div id="h1-and-social">
            <h1 id="about-us">Our Promise</h1>
        </div>
        
        <div class="container">
            <p>Citadel Cafe is the Columbus area’s newest cafe. Our homey Hilliard fortress has the finest drinks and dedicated customer service. Our dream of providing a new alternative to generic coffee chains inspired us to find the best coffee beans, tastiest pastries, and finest desserts. Our commitment to providing the best for our guests includes serving only freshly-roasted coffee and securing daily deliveries of fresh donuts, muffins, lemon bars, and other delicious pastries. The menu we've put together provides a wide range of heavenly flavors; be it our handcrafted Frozen Caramel Chai or our famous Citadel Apricot drink, you’re sure to find something you love. Grilled deli sandwiches provide accessible lunch options, and the Turkish delight, baklava, and ice cream are for guests with a sweet tooth for both the exotic and the traditional. Make Citadel Cafe your next destination for a coffee date, study spot, lunch joint, or hangout corner!</p>

            <p>At Citadel Cafe, we value diversity and believe that appreciating American culture means enjoying its unique flavors. That is why we offer delicious drinks and eats that most people have not had the opportunity to try. Named after the iconic Aleppo Citadel, our cafe is a means of paying homage to our rich heritage. We invite everyone to come try the foods we grew up enjoying, along with the traditional American treats we all love.</p>
        </div>

        <div class="fb-like" data-href="https://www.facebook.com/citadelcafehilliard/" data-width="10px" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

        <div id="feedback-div"><a href="contact.php"><button id="feedback"><i class="fa fa-paper-plane"></i> Feedback? Let it all out!</button></a></div>
        
    </section>
    
    <section id="section-e">
       <h1>Jobs</h1>
        <h2>Looking for Work? Interested in providing the best cafe experience possible? <a href="contact.php">Introduce yourself!</a></h2>
    </section>
    <?php include('inc/footer.php') ?>
    
