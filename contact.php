<?php 
mysql_connect("localhost","root","");
mysql_select_db("book");

if(isset($_POST['nom'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$CIN=$_POST['CIN'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql=mysql_query("insert into contact(nom,prenom,CIN,email,message)
values('".$nom."','".$prenom."','".$CIN."','".$email."','".$message."')")or die(mysql_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Best Booking</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
   
  <body class="tm-gray-bg">
  <div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="" class="tm-site-name" color="#FE9A2E"><font color="#FE9A2E">Best Booking</font></a>
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.php" ><font style="color:#DF7401"><b><i>Accueil</a></font></li>
							<li><a href="promo.php" ><font style="color:#DF7401"><b><i>Promotion</a></font></li>
							<li><a href="contact.php" class="active"><font style="color:#DF7401"><b><i>Contact</a></font></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	<br><br><br><br><br>
	<section class="tm-banner" >
<form class="form-horizontal" action="contact.php" method="POST"enctype="multipart/form-data">
                    <div class="col-md-2" ></div>
					<div class="col-lg-8 col-md-8 tm-contact-form-input" >
						<div class="form-group">
							<input type="text" id="nm" name="nom" class="form-control" placeholder="nom" required>
						</div>
						<div class="form-group">
							<input type="text" id="pre" name="prenom" class="form-control" placeholder="prenom" required>
						</div>
						<div class="form-group">
							<input type="number" id="CI" name="CIN"class="form-control" placeholder="CIN" required>
						</div>
						<div class="form-group">
							<input type="ema" id="email"name="email" class="form-control" placeholder="email" required>
						</div>
						<div class="form-group">
							<textarea id="mes"name="message" class="form-control" rows="4" placeholder="message" required></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Envoyer</button> 
						</div>               
					</div>
				</form>
				</section>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name 
                
                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
  	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
  	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});		  	
		});
		$(window).load(function(){
			// Flexsliders
		  	$('.flexslider.flexslider-banner').flexslider({
			    controlNav: false
		    });
		  	$('.flexslider').flexslider({
		    	animation: "slide",
		    	directionNav: false,
		    	slideshow: false
		  	});
		});
	</script>
 </body>
 </html>