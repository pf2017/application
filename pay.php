<?php 
mysql_connect("localhost","root","");
mysql_select_db("book");
if(isset($_POST['num'])){
	$num=$_POST['num'];
	$nom=$_POST['no'];
	$prenom=$_POST['pre'];
	$adresse_email=$_POST['email'];
	$mode_de_paiement=$_POST['mode'];
	$id=$_POST['id'];
	$code=$_POST['code'];
	mysql_connect("localhost","root","");
mysql_select_db("dab");
	$sql=mysql_query("select * from carte where num='".$num."'")or die(mysql_error());
$exist=mysql_num_rows($sql);
if($exist==0){
	header("location: ./pay.php?id=".$id."&c=0");
}
$date="";
$solde=0;
while($d=mysql_fetch_array($sql)){
	$date=$d['code'];
	$solde=$d['solde'];
	
}

if($date!=$code){
	header("location: ./pay.php?id=".$id."&d=0");
}



mysql_connect("localhost","root","");
mysql_select_db("book");
$req=mysql_query("select * from hotel where id='".$id."'")or die(mysql_error());
$prix=0;
while($dd=mysql_fetch_array($req)){
	$prix=$dd['prix'];
}

if($solde<$prix ){
	header("location: ./pay.php?id=".$id."&s=0");
}

$nvsld=$solde-$prix;
mysql_connect("localhost","root","");
mysql_select_db("dab");
	$rq=mysql_query("update carte set solde='".$nvsld."' where num='".$num."'")or die(mysql_error());
	mysql_connect("localhost","root","");
mysql_select_db("book");
	$reqt=mysql_query("insert into reservation (prenom,nom,adresse_email,mode_de_paiement) values
	                    ('".$prenom."','".$nom."','".$adresse_email."','".$mode_de_paiement."') ")or die(mysql_error());
header("location:../facture/blank.php?nom=".$nom."&id=".$id."");}

?><!DOCTYPE html>
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
  	<!-- Header -->
	<?php if(isset($_GET['c'])){?><script>alert("la numero de votre carte invalide"); </script><?php } ?>
		<?php if(isset($_GET['d'])){?><script>alert("le code de votre carte invalide"); </script><?php } ?>

			<?php if(isset($_GET['s'])){?><script>alert("votre solde inssufiszqante"); </script><?php } ?>

  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name" color="#7D0541"><font color="#FE9A2E">Best booking</font></a>		
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	
	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">


	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
				<div class="row">
			<!-- slider -->
			<?php $id=$_GET['id'];
			$sql=mysql_query("select * from hotel where id='".$id."' ");
while($d=mysql_fetch_array($sql)){?>
			<div class="col-md-12">
			<br><div class="col-md-10">
		<h3>Nom Hotel :<?php echo $d['nom'];?> (<?php echo $d['ville'];?>) <i class="fa fa-star" style="color:#cccc00;"></i><i class="fa fa-star" style="color:#cccc00;"></i> </h3> 
			</div>
			
			<div class="col-md-2">
			<a href="rech.php" class="btn btn-default">Voir autres hotels</a>
			</div>
			<br><hr>
			<div class="col-md-8">
		<h3>Payement Total= <?php echo $d['prix'];?> TND </h3> 
			</div>
			
			<div class="col-md-4">
			<a href="pay.php" class="btn  btn-info">Je paye en ligne</a>
			<a href="#" class="btn  btn-primary">Je paye a l'agence</a>
			</div>
			<br><hr>
			<div class="col-md-6">
			<div class="flexslider ">
			  <ul class="slides">
			  <?php $p=mysql_query("select * from chambre where id_hotel='".$d['id']."'");
			  while($dd=mysql_fetch_array($p)){?>
			    <li>
			      <img src="./book/admin/uploads/<?php echo $dd['file'];?>" width="250px" height="250px"  />
			      			      
			    </li>
			  <?php } ?>
			  </ul>
			</div>
			</div>
			<div class="col-md-3">
						<form action="./pay.php" method="post">
																  <label for="firstname" class="bp_form__field__label"> Prénom:</label>
																  <input type="text" name="pre" id="firstname" class="form-control" value="" required >
																  
																<input type="hidden" name="id" value="<?php echo $id;?>"> 
																
                                                            
															<label for="lastname" class="bp_form__field__label">Nom:</label>
															<input type="text" name="no" id="lastname" class="form-control" value="" size="20" required>
															</div>
															<div class="col-md-3">
															<label for="email" >Adresse e-mai:</label>
															<input type="text" id="email" class="form-control" name="email" value="" required>
															<label for="optional_password">Mot de passe: </label>
															<input type="password" class="form-control" name="password" id="optional_password" required>
															</div>
															<div class="col-md-3">
															<label for="firstname" > telephone:</label>
																  <input type="text"class="form-control" name="numtel" id="firstname" class="bp_input_textbp_form__field__input" value="" required>
															<div class="form-group">
                                                                <label for="submit-Beds">mode de paiement:</label>
                                                                <select  class="form-control"  name="mode" required>
																<option></option>
																<option>E-dinar Smart </option>
														        <option>Visa electron postal</option>
																<option>Carte CIB</option>
																<option>E-dinar Universel</option>
																</select>
                                                            </div> </div>
                                                            <div class="col-md-3">															
															<label>numero de la carte </label>
															<input type="text" class="form-control"  name="num" pattern="\d*" required>
															<label>code </label>
															<input type="password" class="form-control"  name="code" pattern="\d*" required>
															</div><br>
															 <div class="col-md-6">
											<div class="form-group" align="center">
                                    <button type="submit" class="btn  btn-info">Reserver</button>
									
									</div>
                                </div>
								</form><!-- /.form-group -->            
					
			</div>
			</div>
		</div>
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Autres details</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- Testimonial -->
				<div class="col-lg-12">
					<h4><b>1-presentation :</b></h4>
					<p>L’hôtel Sindbad se situe directement sur la plage. C’est un hôtel moderne et confortable, construit en 1966 et rénové en 2008/2009/2014. Le style architectural est oriental avec une touche occidentale et l’hôtel se trouve au milieu d’un jardin luxuriant. Situation : 2 km du centre d’Hammamet 5 km des golfs Citrus et Yasmine 5 km de Hammamet Yasmine 70 km de l’aéroport de Tunis Carthage 100 km de l’aéroport de Monastir 40 km de l’aéroport d’Enfidha.</p>
					<h4><b> 2-Les chambres :</b></h4>
					<p>L’hôtel Sindbad se situe directement sur la plage. C’est un hôtel moderne et confortable, construit en 1966 et rénové en 2008/2009/2014. Le style architectural est oriental avec une touche occidentale et l’hôtel se trouve au milieu d’un jardin luxuriant. Situation : 2 km du centre d’Hammamet 5 km des golfs Citrus et Yasmine 5 km de Hammamet Yasmine 70 km de l’aéroport de Tunis Carthage 100 km de l’aéroport de Monastir 40 km de l’aéroport d’Enfidha.</p>
					<h4><b>3-Activités de loisir :</b></h4>
					<p>L’hôtel Sindbad se situe directement sur la plage. C’est un hôtel moderne et confortable, construit en 1966 et rénové en 2008/2009/2014. Le style architectural est oriental avec une touche occidentale et l’hôtel se trouve au milieu d’un jardin luxuriant. Situation : 2 km du centre d’Hammamet 5 km des golfs Citrus et Yasmine 5 km de Hammamet Yasmine 70 km de l’aéroport de Tunis Carthage 100 km de l’aéroport de Monastir 40 km de l’aéroport d’Enfidha.</p>
					<h4><b> 4- Restaurant Thai « Manora » :</b></h4>
					<p>L’hôtel Sindbad se situe directement sur la plage. C’est un hôtel moderne et confortable, construit en 1966 et rénové en 2008/2009/2014. Le style architectural est oriental avec une touche occidentale et l’hôtel se trouve au milieu d’un jardin luxuriant. Situation : 2 km du centre d’Hammamet 5 km des golfs Citrus et Yasmine 5 km de Hammamet Yasmine 70 km de l’aéroport de Tunis Carthage 100 km de l’aéroport de Monastir 40 km de l’aéroport d’Enfidha.</p>
					<h4><b> 6- « The Pool »/Lounge :</b></h4>
					<p>L’hôtel Sindbad se situe directement sur la plage. C’est un hôtel moderne et confortable, construit en 1966 et rénové en 2008/2009/2014. Le style architectural est oriental avec une touche occidentale et l’hôtel se trouve au milieu d’un jardin luxuriant. Situation : 2 km du centre d’Hammamet 5 km des golfs Citrus et Yasmine 5 km de Hammamet Yasmine 70 km de l’aéroport de Tunis Carthage 100 km de l’aéroport de Monastir 40 km de l’aéroport d’Enfidha.</p>
						
				</div>							
</div>		<?php } ?>	
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
