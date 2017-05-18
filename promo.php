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
  
  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header" >
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="" class="tm-site-name" color="#FE9A2E"><font color="#FE9A2E">Best Booking</font></a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9" >
	  				<div class="mobile-menu-icon" style="background:#FE9A2E">
		              <i class="fa fa-bars" ></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.php" ><font style="color:#DF7401"><b><i>Accueil</a></font></li>
							<li><a href="promo.php" class="active"><font style="color:#DF7401"><b><i>Promotion</a></font></li>
							<li><a href="contact.php"><font style="color:#DF7401"><b><i>Contact</a></font></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<section class="tm-banner">
	
				<!-- Nav tabs -->
				<div class="tm-home-box-0 ">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotels Tunisie</a>
					    </li>
					</ul>

					<!-- Tab panes -->
					
					    			    
					</div>
				</div>								
			
		<!-- Flexslider -->
		
	</section>
<br><br><br><br><br>
	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			
<?php 
mysql_connect("localhost","root","");
mysql_select_db("book");
 $sql=mysql_query("select * from hotel where promotion='1' ");
while($d=mysql_fetch_array($sql)){
	$datef=$d['datefin'];
	$heure=$d['heure'];
	$tab=explode("-",$datef);
	$date=date("Y-m-d");
	$tabb=explode("-",$date);
	$jours="";
	$mois="";
	$an="";
	for($i=0;$i<3;$i++){
		$jours=($tab[2]-$tabb[2]);
	}
	/************************/
	$t=explode(":",$heure);
	$h=date("h:i");
	$ta=explode(":",$h);
	$hi="";
	
	$mi="";
	for($i=0;$i<3;$i++){
		$mi=($ta[1]-$t[1]);
		$hi=($ta[0]-$t[0]);
	}
	
	?>
			<div class=" col-md-4 ">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center" style="background-image:url(img/<?php echo $d['file'];?>);background-repeat:no-repeat;width:275px;">
<br><br><br>
				<h4><span class = "label label-success">Promotion</span></h4>
				<br>
				<h4><span class = "label label-success"><?php echo $jours;?> j <?php echo abs($hi);?> H <?php echo $mi;?> m</span></h4>
					<a href="details.php?id=<?php echo $d['id'];?>">
						<div class="tm-green-gradient-bg tm-city-price-container" style="background:#FFFFFF">
							<span ><font style="color:#DF7401"><b><?php echo $d['ville'];?></font></span>
							<span><font style="color:#DF7401"><b><?php echo $d['prix'];?> TND</span>
						</div>	
					</a>
					
				</div>	
			
</div><?php } ?>
			</div>
		
	</section>		

	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name 
                
                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

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
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
			// Vimeo API nonsense

/*
			  var player = document.getElementById('player_1');
			  $f(player).addEvent('ready', ready);
			 
			  function addEvent(element, eventName, callback) {
			    if (element.addEventListener) {
			      element.addEventListener(eventName, callback, false)
			    } else {
			      element.attachEvent(eventName, callback, false);
			    }
			  }
			 
			  function ready(player_id) {
			    var froogaloop = $f(player_id);
			    froogaloop.addEvent('play', function(data) {
			      $('.flexslider').flexslider("pause");
			    });
			    froogaloop.addEvent('pause', function(data) {
			      $('.flexslider').flexslider("play");
			    });
			  }
*/

			 
			 
			  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

			  $(".flexslider")
			    .fitVids()
			    .flexslider({
			      animation: "slide",
			      useCSS: false,
			      animationLoop: false,
			      smoothHeight: true,
			      controlNav: false,
			      before: function(slider){
			        $f(player).api('pause');
			      }
			  });
*/


			  

//	For images only
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});
	</script>
 </body>
 </html>