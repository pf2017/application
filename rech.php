<?php 
mysql_connect("localhost","root","");
mysql_select_db("book");
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
 <script>
	function ch(){
		
		var i=document.getElementById('c').value;
		alert(i);
		for (j=1;j<i;j++){
			var k=j+1;
		document.getElementById(j).style.visibility='visible';
		}
		
		
		
		
		
		
	}
</script>
<script>
	function ef1(){
		
		var ii=document.getElementById('enf').value;
		for (jj=0;jj<ii;jj++){
			var kk=jj+1;
		document.getElementById("l"+kk).innerHTML='<div class="form-group"><select name="ad"><option value="">Age</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div>';
		}
		
		
		
		
		
		
	}
</script>
<script>
	function a(a){
		
		var i=a;
		alert(i);
		for (j=1;j<=i;j++){
		document.getElementById('age'+j).style.visibility='visible';
		}
		
		
		
		
		
		
	}
</script>
<script>
	function a1(a1){
		
		var i=a1;
		alert(i);
		for (j=1;j<=i;j++){
		document.getElementById('age1'+j).style.visibility='visible';
		}
		
		
		
		
		
		
	}
</script>
<script>
	function a2(a2){
		
		var i=a2;
		alert(i);
		for (j=1;j<=i;j++){
		document.getElementById('age2'+j).style.visibility='visible';
		}
		
		
		
		
		
		
	}
</script>
<script>
	function a3(a3){
		
		var i=a3;
		alert(i);
		for (j=1;j<=i;j++){
		document.getElementById('age3'+j).style.visibility='visible';
		}
		
		
		
		
		
		
	}
</script>
<script>
	function a4(){
		var i=document.getElementById('c').value;
		for(j=1;j<=i;j++){
			var k=j+1;
		document.getElementById('i'+j).innerHTML='<div class="input-group" > <label style="color:#000;">Chambre'+k+' :</label> </div>';
							                					                  
							               
		document.getElementById('a'+j).innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c"  required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('b'+j).innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ab'+j+'();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		}
		
		
		
		
		
		
	}
</script>
<script>
	function ab0(){
		
							                					                  
							               
		document.getElementById('c1').innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('d1').innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
		
		
		
	}
	function ab1(){
		
							                					                  
							               
		document.getElementById('c2').innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('d2').innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
		
		
		
	}
	function ab2(){
		
							                					                  
							               
		document.getElementById('c3').innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('d3').innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
		
		
		
	}
	function ab3(){
		
							                					                  
							               
		document.getElementById('c4').innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('d4').innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
		
		
		
	}
	function ab4(){
		
							                					                  
							               
		document.getElementById('c5').innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('d5').innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
		
		
		
	}
</script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
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
						
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
  	<!-- Banner -->
	<section class="tm-banner ">
	
				<!-- Nav tabs -->
				<div class="tm-home-box-0 ">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotels Tunisie</a>
					    </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content" >
					    <div class="row " style="background-color:#FE9A2E;">
					   
								<form action="rech.php" method="post" class="hotel-search-form" >
									<div class="tm-form-inner">
									 <div class=" col-md-2">
										<div class="form-group">
										<label>Destination</label>
							            	 <select class="form-control" name="des" required="true">
							            	 	<option value=""></option>
							            	 	<option value="tunis">tunis</option>
												<option value="jerba">jerba</option>
												<option value="hammamet">hammamet</option>
												<option value="monastir">monastir</option>
											</select> 
							          	</div></div>
							       
									  
							          	<div class=" col-md-1">
							          <div class='input-group date' id='datetimepicker2'>
											<label>Arrivée le</label>
							                      <select class="form-control" name="jours" placeholder="Jours" required="true">
                                        <option value="">Jours</option>
                                        <div id="contenuJour" class="contenuFakeSelect bclr4 bgclr1" style="display: block;">
				<ul class="bgclr1">
				<option><li><time datetime="01">Lun. 01</time></li></option>
				<option><li><time datetime="02">Mar. 02</time></li></option>
				<option><li><time datetime="03">Mer. 03</time></li></option>
				<option><li><time datetime="04">Jeu. 04</time></li></option>
				<option><li><time datetime="05">Ven. 05</time></li></option>
				<option><li><time datetime="06">Sam. 06</time></li></option>
				<option><li><time datetime="07">Dim. 07</time></li></option>
				<option><li><time datetime="08">Lun. 08</time></li></option>
				<option><li><time datetime="09">Mar. 09</time></li></option>
				<option><li><time datetime="10">Mer. 10</time></li></option>
				<option><li><time datetime="11">Jeu. 11</time></li></option>
				<option><li><time datetime="12">Ven. 12</time></li></option>
				<option><li><time datetime="13">Sam. 13</time></li></option>
				<option><li><time datetime="14">Dim. 14</time></li></option>
				<option><li><time datetime="15">Lun. 15</time></li></option>
				<option><li><time datetime="16">Mar. 16</time></li></option>
				<option><li><time datetime="17">Mer. 17</time></li></option>
				<option><li><time datetime="18">Jeu. 18</time></li></option>
				<option><li><time datetime="19">Ven. 19</time></li></option>
			    <option><li><time datetime="20">Sam. 20</time></li></option>
				<option><li><time datetime="21">Dim. 21</time></li></option>
				<option><li><time datetime="22">Lun. 22</time></li></option>
				<option><li><time datetime="23">Mar. 23</time></li></option>
				<option><li><time datetime="24">Mer. 24</time></li></option></ul>
                                 </select>
							                </div>
							            </div></div>
										
										<div class=" col-md-1">
							        <div class='input-group date' id='datetimepicker2'>
									<label style="visibility: hidden">Arrivée le</label>
							                      <select class="form-control" name="mois" placeholder="mois" required="true">
                                        <option value="">Mois</option>
                                        <option value="1">Mars 2017</option>
                                        <option value="2">Avril 2017</option>
                                        <option value="3">Mai 2017</option>
                                        <option value="4">Juin 2017</option>
                                    </select>
												  </div></div>
										 <div class="col-md-1">
							            <div class="form-group margin-bottom-0 ">
										<label>Nuits</label>
							                <select class="form-control" name="ville">
							            	 	<option value=""></option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div></div>
										<div class=" col-md-2">
										<label>Nombre de chambre</label>
										   <div class="form-group margin-bottom-0 ">
										   
							                 <select class="form-control" name="nb_ch" id="c" onchange="a4();" required="true">
							            	 	<option value=""></option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div>
										</div>
										
											<div class="col-md-1">
							            <div class="form-group margin-bottom-0 ">
										<label>Adulte(s)</label>
							                <select class="form-control" name="ad0" required="true">
							            	 	<option value=""> </option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div></div>
										<div class=" col-md-1">
										   <div class="form-group margin-bottom-0 ">
										   <label>Enfant(s)</label>
							                 <select class="form-control" name="enf0" onchange="ab0();" required="true">
							            	 	<option value=""></option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div></div>
										
									<div class="col-md-2">									
                                    <div class="form-group  text-center"> 
						            <button type="submit" name="submit" class="tm-yellow-btn">Modifier la recherche</button>
						            </div> 									
                                   		</div>		
									  	
									</div>	
									
                                		
						             
								</form></div>		
									</div>	</div>
						
					   						
			
		<!-- Flexslider -->
		
	</section>
					   			    
					
	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
	
		
	
		<div class="section-margin-top">
			
			<div class="row">
			<?php 
			$ville=$_GET['des'];
			$nb_ch=$_GET['nb_ch'];
			
			$sql=mysql_query("select * from hotel where ville='".$ville."' and nb_ch='".$nb_ch."' ")or die(mysql_error());
			$c=mysql_num_rows($sql);
while($d=mysql_fetch_array($sql)){?>
<div class="col-md-6">
			<div class="panel panel-default">
  <div class="panel-heading"><?php echo $d['nom'];?> <br><?php echo $d['nb_et'];?></div>
  <div class="panel-body">
           <div class="row">
					<div class="tm-tours-box-1 col-md-6">
						<img src="img/<?php echo $d['file'];?>" width="50%"  alt="image" class="img-responsive">
						</div>
						<div class="tm-tours-box-1 col-md-3">
						<input type="radio" name="1" value="chambre double">chambre double <br>
								<input type="radio" name="1"  value="chambre individuelle" >chambre individuelle
								
						</div></div>
						<div class="row">
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								<?php echo $d['prix'];?>
							</div>
							<a href="details.php?id=<?php echo $d['id'];?>" class="tm-tours-box-1-link-right">
								Details								
							</a>							
						</div>
					</div>					
</div></div></div><?php } ?>
				
			</div>		
		</div>
	</section>		
	
	<!-- white bg -->
	
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
		    $('.flexslider').flexslider({
			    controlNav: false
		    });
	  	});
	</script>
 </body>
 </html>
