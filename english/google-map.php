<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa in Mauritius, Indian Ocean, Pereybere - Google map</title>
<meta name="description" content="Welcome to  Hibiscus Beach Resort and Spa on Mauritius island. For beach lovers, a small gate situate in the premises of the hotel or a little lane on the outskirts of the hotel leads you to the most beautiful beaches of Mauritius (50m). The turquoise blue lagoon protected y a wall of coral reefs is a heavenly spot for swimmers and amateur sea sports.">
<meta name="keywords" content="Google map, Hibiscus Beach Resort and Spa, mauritius hotel, mauritius rooms, mauritius superior rooms, mauritius junior suites, mauritius senior suites, mauritius royal suites, pereybere hotels,  pereybere rooms, pereybere superior rooms, pereybere junior suites, pereybere senior suites, pereybere royal suites, indian ocean rooms, indian ocean superior rooms, indian ocean junior suites, indian ocean senior suites, indian ocean royal suites, vacation, pereybere, mauritius, indian ocean, islands, indian ocean islands"><meta name="robots" content="all">

<?php include("_scripts-googlemap.php"); ?>

<script type="text/javascript">

		//blurry background
		$(document).ready(function(){
		$('.scroll-pane').jScrollPane();	
		//menu				
		$("li.sub").hover(function(){$("li.sub ul.menu2sub").fadeIn(200);$("a.menu2").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub ul.menu2sub").fadeOut(200);$("a.menu2").css({backgroundPosition:'0 0'});});
		//$("li.sub1").hover(function(){$("li.sub1 ul.menu3sub").fadeIn(200);$("a.menu4").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub1 ul.menu3sub").fadeOut(200);$("a.menu4").css({backgroundPosition:'0 0'});});
		$("li.sub2").hover(function(){$("li.sub2 ul.menu4sub").fadeIn(200);$("a.menu5").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub2 ul.menu4sub").fadeOut(200);$("a.menu5").css({backgroundPosition:'0 0'});});

		});

</script>


<!--Text - show/hide functionality-->
<script>	
			
			$(".show").live('click', function(){
				$('#content').css('filter', 'alpha(opacity=0)');
				//$('.scrollbars').css('filter', 'alpha(opacity=0)');
				$('.hide').css('filter', 'alpha(opacity=0)');
				$('.show').css('filter', 'alpha(opacity=0)');
					$(".show").fadeOut(400, function(){
						$(".show").css({"filter":""});
						});
					$("#content").fadeIn(400, function(){
						$("#content").css({"filter":""});
						});
					$(".scroll-pane").fadeIn(200);
					//$(".scrollbars").fadeIn(200, function(){
					//	$(".scrollbars").css({"filter":""});
					//	});
					$(".hide").fadeIn(400, function(){
						$(".hide").css({"filter":""});
						});
				
				});
			
			
			
			$('#content').css('filter', 'alpha(opacity=0)');
			//$('.scrollbars').css('filter', 'alpha(opacity=0)');
			$('.show').css('filter', 'alpha(opacity=0)');
			$('.hide').css('filter', 'alpha(opacity=0)');
			$(".hide").live('click', function(){
				$('#content').css('filter', 'alpha(opacity=0)');
				//$('.scrollbars').css('filter', 'alpha(opacity=0)');
				$('.show').css('filter', 'alpha(opacity=0)');
				$('.hide').css('filter', 'alpha(opacity=0)');
					$(".hide").fadeOut(400, function(){
						$(".hide").css({"filter":""});
						});
					$(".scroll-pane").fadeOut(200);
					//$(".scrollbars").fadeOut(200, function(){
					//	$(".scrollbars").css({"filter":""});
					//	});
					$("#content").fadeOut(400, function(){
						$("#content").css({"filter":""});
						});
					$(".show").fadeIn(600, function(){
						$(".show").css({"filter":""});
						});
				
				});
</script>


<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(-19.994443345596032,57.58902651070457);
    var myOptions = {
      zoom: 13,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.HYBRID,
	  scaleControl: true,
    scaleControlOptions: {
        position: google.maps.ControlPosition.RIGHT_CENTER
    },
	mapTypeControl: true,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
        position: google.maps.ControlPosition.LEFT_CENTER
    },
    navigationControl: true,
    navigationControlOptions: {
        style: google.maps.NavigationControlStyle.ZOOM_PAN,
        position: google.maps.ControlPosition.LEFT_CENTER
    }
	
    };
    var map = new google.maps.Map(document.getElementById("flash"), myOptions);
	var contentString = '<div id="contenta">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Hibiscus Beach Resort</h1>'+
    '<div id="bodyContent">'+
    '<p>Hibiscus Beach Resort and Spa in Mauritius, <br>Indian Ocean, Pereybere</p>' +    
    '</div>'+
    '</div>';

var infowindow = new google.maps.InfoWindow({
    content: contentString
});

	var marker = new google.maps.Marker({
      position: latlng, 
      map: map,
      title:"Hotel: Hibiscus Beach Resort"
  });
google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
});
  }
</script>

<style>
#flash {

   position:absolute; left:0; top:0px; overflow:hidden; z-index:0; height:100%; width:100%; 
}
#wrapper #header {

	z-index:10;
	
	}
#wrapper #lang{z-index:10;}
#wrapper #rates_menu{z-index:10;}
#wrapper #guestbook_menu{z-index:10;}
#wrapper #contact_menu{z-index:10;}
#wrapper #flash #contenta {height: auto;}
#wrapper #flash #contenta h1{ font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#d8530d;}
#wrapper #flash #contenta #bodyContent{ font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#7F7F7F;height: auto;}
</style>

</head>

<body onload="initialize()">

	<div id="wrapper">
    
		<?php include("_header.php"); ?>
		<div id="flash" /></div>  
        
                <div class="hide"></div>
        <div class="show"></div>
        
        <div id="content">
        
        	<h1 class="home_title" style="background:url(../images/googlemap_ttl.png) bottom left no-repeat;">Google Map</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								<h2 style="display:none;">Google Map</h2>
                                
<p><strong>MAURITIUS AND PEREYBERE</strong><br />
MAURITIUS<br />
Mauritius has a population of approximately 1,2 million inhabitants, the majority being of Indian origin the others being Creole, Chinese and European. 
The overall area is 1865 km2 and measures 65 km in length and 45 km in width. The relief’s are quite elevated and the highest summit is 828m in altitude.
The hottest season is contrary to the Northern Hemisphere from December to March( between 25C and 30 C). The remaining part of the year has a cooler climate and temperatures are the lowest from June to September( between 17 C at night and 25 C during the day).<br />
Since its Independence in 1968, the democratic majority maintains the stability of the country with  Dr Navin Chandra Ramgoolam as the Prime Minister since 2005 and Mr Kailash Purryag as the President of the Republic since 2012.<br />
The official language in Mauritius is English but French and Creole are most often used as spoken dialects. Chinese and other oriental languages are taught at school but rarely spoken.<br />
The local currency of l’Ile Maurice is the Mauritian Rupee: 1 euro + Rs 38,5.
</p>

<p><strong>HOLIDAYING IN PEREYBERE</strong><br />
Situate in the North of Mauritius, Pereybere is undoubtedly  paradise on earth.. This small village bordering the sea has all the elements for a successful holiday. It has retained its cachet of intimacy and tranquility despite the effervescence of its neighboring sister Grand Baie, where shops, bars, restaurants et discos will animate both your days and nights. A stay at l’Hôtel Hibiscus Beach Resort, Spa and Dive Club de Péreybère, is to make the most of its serene and convivial ambiance whilst enjoying the delights of the North.
</p>


					</div>                    
				
            
            </div>
            
            
        
        </div>


        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
