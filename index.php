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
  <script>
	function ch(){
		
		var i=document.getElementById('c').value;
		alert(i);
		for (j=2;j<i;j++){
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
		for(j=2;j<=i;j++){
			var k=j;
		document.getElementById('i'+j).innerHTML='<div class="input-group" > <label style="color:#000;">Chambre'+k+' :</label> </div>';
							                					                  
				var g=j-1;			               
		document.getElementById('a'+j).innerHTML='<label>Adulte(s)</label><select class="form-control" name="nb_c" id="c"  required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';
		document.getElementById('b'+j).innerHTML='<label>Enfant(s)</label><select class="form-control" name="nb_c" id="c" onchange="ab'+g+'(this.value);" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		}
		
		
		
		
		
		
	}
</script>
<script>
	function ab0(a){
		
			var v=a;
for(j=0;j<a;j++){			
							               
		document.getElementById('c1'+j).innerHTML='<label>Age(s)</label><select class="form-control" name="nb_c" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
}
		
		
		
		
		
	}
	function ab1(b){
		
				var v=b;
for(j=0;j<b;j++){			                					                  
							               
		document.getElementById('c2'+j).innerHTML='<label>Age(s)</label><select class="form-control" name="nb_c" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
}
		
		
	}
	function ab2(c){
		
			var v=c;
for(j=0;j<c;j++){				                					                  
							               
		document.getElementById('c3'+j).innerHTML='<label>Age(s)</label><select class="form-control" name="nb_c" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
}
		
		
		
		
		
	}
	function ab3(d){
		
							                					                  
		var v=d;
for(j=0;j<d;j++){					               
		document.getElementById('c4'+j).innerHTML='<label>Age(s)</label><select class="form-control" name="nb_c" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
}
		
		
		
		
		
	}
	function ab4(e){
		
							                					                  
				var v=e;
for(j=0;j<e;j++){			               
		document.getElementById('c5'+j).innerHTML='<label>Age(s)</label><select class="form-control" name="nb_c" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ';

		
		
		
		
}
		
		
	}
</script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
element.style {
}
templatemo-style.css:62
.tm-nav li a.active, .tm-nav li a:focus, .tm-nav li a:hover {
    background: #FE9A2E;
    color: #000;
}</style>
<script>
element.style {
}
bootstrap.min.css:5
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
font[Attributes Style] {
    color: rgb(0, 0, 0);
}
</script>
<script>
       $(function()
       {$('#ch<%=j%>').change(function(){
          code=$('#ch<%=j%>').val();
        
         $.ajax({
             type:'POST',
             url:'getniveau',
             data:'code='+code,
             success:function(data)
             {
                 alert(data);
                     $('#des0').html('<li><label for="des0" ><input type="checkbox" value="" name="ch0" id="des0"><span id="fil0">'+data+'</span></label></li>');
             }
         });
           
           
       });     
      
         
            
            
    } ); 
        
        
        
        </script>
        <script>
       $(function()
       {$('#c').change(function(){
          code=$('#c').val();
        alert.(code);
         
                 
         $('#aa').html('<label>Adulte(s)</label><select class="form-control" name="nb_ch" id="c" onchange="ch();" required="ture"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> ');
    
           
           
       });     
      
         
            
            
    } ); 
        
        
        
        </script>
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
							<li><a href="index.php" class="active"><font style="color:#DF7401"><b><i>Accueil</a></font></li>
							<li><a href="promo.php" ><font style="color:#DF7401"><b><i>Promotion</a></font></li>
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
					<div class="tab-content" >
					    <div class="row" >
					    <div class="form-group col-md-3">
						<input type="hidden">
						</div>
						 <div class="form-group col-md-6" style="background-color:#FE9A2E;" >
								<form action="rech.php"  class="hotel-search-form" >
									<div class="tm-form-inner">

										<div class="form-group">
										<label>Destination</label>
							            	 <select class="form-control" name="des" required="ture">
							            	 	<option value=""></option>
							            	 	<option value="tunis">tunis</option>
												<option value="jerba">jerba</option>
												<option value="hammamet">hammamet</option>
												<option value="monastir">monastir</option>
											</select> 
							          	</div>
							          <div class="col-md-12">
									  
							          	<div class="form-group col-md-6">
							             &nbsp;&nbsp;   <div class='input-group date' id='datetimepicker2'>
											<label>Arrivée le</label>
							                      <select class="form-control" name="jours" placeholder="Jours" required="ture">
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
							            </div>
										
										<div class="form-group col-md-6">
							       <br>   <div class='input-group date' id='datetimepicker2'>
										&nbsp;&nbsp;&nbsp;&nbsp;
							                      <select class="form-control" name="mois" placeholder="mois" required="ture">
                                        <option value="">Mois</option>
                                        <option value="1">Mars 2017</option>
                                        <option value="2">Avril 2017</option>
                                        <option value="3">Mai 2017</option>
                                        <option value="4">Juin 2017</option>
                                    </select>
												  </div></div>
										 <div class="col-md-12">
							            <div class="form-group margin-bottom-0 col-md-6">
										<label>Nuits</label>
							                <select class="form-control" name="ville">
							            	 	<option value=""></option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div>
										<label>Nombre de chambre</label>
										   <div class="form-group margin-bottom-0 col-md-6">
										   
							                 <select class="form-control" name="nb_ch" id="c" onchange="a4();" required="ture">
							            	 	<option value=""></option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div>
										</div></div>
										<div class="col-md-12">
							          	<div class="form-group col-md-2">
							                <div class='input-group' >
							                 <label style="color:#000;">Chambre 1 :</label>					                  
							                </div>
							            </div>
							            <div class="form-group margin-bottom-0 col-md-2">
										<label>Adulte(s)</label>
							                <select class="form-control" name="ad0" required="ture">
							            	 	<option value=""> </option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div>
										   <div class="form-group margin-bottom-0 col-md-2">
										   <label>Enfant(s)</label>
							                 <select class="form-control" name="enf0" onchange="ab0(this.value);" required="ture">
							            	 	<option value=""></option>
							            	 	<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
							            </div>
										<div class="form-group margin-bottom-0 col-md-1"  id="c10">
										   
							            </div>
										
										<div class="form-group margin-bottom-0 col-md-1" id="c11">
										   
							            </div>
										
										<div class="form-group margin-bottom-0 col-md-1" id="c12">
										   
							            </div>
										
										<div class="form-group margin-bottom-0 col-md-1" id="c13">
										   
							            </div>
										
										<div class="form-group margin-bottom-0 col-md-1" id="c14">
										   
							            </div>
										
									</div>
								
										<div class="col-md-12">
							          	<div class="form-group col-md-2" id="i2">
							                
							            </div>
							            <div class="form-group margin-bottom-0 col-md-2" id="a2" >
										 
							            </div>
										   <div class="form-group margin-bottom-0 col-md-2" id="b2" >
										   
							            </div>
									<div class="form-group margin-bottom-0 col-md-2" id="c20">
										   
							            </div>
										
									<div class="form-group margin-bottom-0 col-md-2" id="c21">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c22">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c23">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c24">
										   
							            </div>
								
										</div><div class="col-md-12">
							          	<div class="form-group col-md-2" id="i3">
							                
							            </div>
							            <div class="form-group margin-bottom-0 col-md-2" id="a3">
										 
							            </div>
										   <div class="form-group margin-bottom-0 col-md-2" id="b3">
										   
							            </div>
									<div class="form-group margin-bottom-0 col-md-2" id="c40">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c41">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c42">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c43">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="c44">
										   
							            </div>
								
										</div><div class="col-md-12">
							          	<div class="form-group col-md-2" id="i4">
							                
							            </div>
							            <div class="form-group margin-bottom-0 col-md-2" id="a4">
										 
							            </div>
										   <div class="form-group margin-bottom-0 col-md-2" id="b4">
										   
							            </div>
									<div class="form-group margin-bottom-0 col-md-2" id="c5">
										   
							            </div>
										<div class="form-group margin-bottom-0 col-md-2" id="d5">
										   
							            </div>
									
								
										</div>
										 <div class="form-group "> 
						            <center><button type="submit" name="submit" class="tm-yellow-btn">Rechercher</button></center>
						            </div>
										</div>
									  	
									</div>	
                                  									
                                    									
                                   								
						             
								</form></div>
							</div>
					    </div>
					    			    
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
 $sql=mysql_query("select * from hotel ");
while($d=mysql_fetch_array($sql)){?>
			<div class=" col-md-4 ">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">

				

					<img src="img/<?php echo $d['file'];?>" alt="image" width="100%"class="img-responsive">
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