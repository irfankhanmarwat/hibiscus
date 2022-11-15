<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere - Mauritius</title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="Mauritius, Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels,  pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln"><meta name="robots" content="all">

<?php include("_scripts.php"); ?>

<script type="text/javascript">

//blurry background
		$(document).ready(function(){
		$('.scroll-pane').jScrollPane();	

//menu				
				$("li.sub").hover(function(){$("li.sub ul.menu2sub").fadeIn(200);$("a.menu2").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub ul.menu2sub").fadeOut(200);$("a.menu2").css({backgroundPosition:'0 0'});});
				//$("li.sub1").hover(function(){$("li.sub1 ul.menu3sub").fadeIn(200);$("a.menu4").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub1 ul.menu3sub").fadeOut(200);$("a.menu4").css({backgroundPosition:'0 0'});});
				$("li.sub2").hover(function(){$("li.sub2 ul.menu4sub").fadeIn(200);$("a.menu5").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub2 ul.menu4sub").fadeOut(200);$("a.menu5").css({backgroundPosition:'0 0'});});

		});

//slideshow
	jQuery(function($){
		

		$.supersized({

			// Functionality
			min_height : 620,

			slide_interval          :   3000,		// Length between transitions

			transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left

			transition_speed		:	1500,		// Speed of transition

			// Components							

			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')

			slides 					:  	[			// Slideshow Images

												{image : '../images/info/1.jpg'}
										]

		});

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

</head>

<body>

	<div id="wrapper">
    
		<?php include("_header.php"); ?>
        
        <div class="hide"></div>
        <div class="show"></div>
        
        <div id="content">
        
        	<h1 class="home_title" style="background:url(../images/mauritius_ttl-ger.png) bottom left no-repeat;">Mauritius</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								<p style="padding-top:4px;"><img src="../images/google-map.png" width="18" height="18" style="padding-bottom:2px; vertical-align:middle; display:inline; margin-bottom:0px; margin-right:3px;"> <a title="Google Karte" href="google-map.htm" style="margin-right:10px; color:#7f7f7f;">Google Karte</a></p>
                                <h2 style="display:none;">Mauritius</h2>
                                
<p><strong>MAURITIUS UND PEREYBERE</strong><br />

MAURITIUS<br />
<p>Mauritius hat eine Bevölkerung von ungefähr 1,2 Millionen, von denen die Mehrheit indischen Ursprungs ist. Der Rest ist kreolisch, chinesisch und europäisch. Die Gesamtfläche beträgt 1865 km², die Insel misst 65 km in der Länge und 45 km in der Breite. Die Höhenunterschiede sind recht groß und der höchste Gipfel liegt bei 828 m Höhe. Die heißeste Jahreszeit ist anders als auf der nördlichen Halbkugel von Dezember bis März (zwischen 25° C und 30° C). Der Rest des Jahres hat ein kühleres Klima; die Temperatur ist zwischen Juni und September am niedrigsten (zwischen 17° C nachts und 25° C am Tag).</p>
<p>Seit der Unabhängigkeit 1968 hält die demokratische Mehrheit die Stabilität des Landes; Dr. Navin Chandra Ramgoolam ist seit 2005 Premierminister und Herr Kailash Purryag seit 2012 Präsident der Republik.
</p>

<p>Die Amtssprache von Mauritius ist Englisch, aber Französisch und Kreolisch werden in der gesprochenen Sprache am meisten benutzt. Chinesisch und weitere orientalische Sprachen werden in der Schule unterrichtet, aber selten gesprochen.</p>
<p>Die lokale Währung der Ile Maurice ist die mauritische Rupie: 1 Euro + Rs 38,5. </p>
<p><strong>URLAUB IN PEREYBERE</strong><br />
Das im Norden von Mauritius gelegene Pereybere ist ohne Zweifel das Paradies auf Erden... Dieses kleine Dorf am Meer hat alles, was man für einen erfolgreichen Urlaub braucht. Es hat sich im Gegensatz zu der Lebhaftigkeit seiner Schwester Grand Baie nebenan, wo Läden, Bars, Restaurants und Discos Ihre Tage und Nächte beleben, etwas Intimität und Ruhe bewahrt. Ein Aufenthalt im Hotel Hibiscus Beach Resort, Spa und Tauchclub in Péreybère bedeutet, das Meiste aus seiner ruhigen und geselligen Atmosphäre zu machen, während man die Freuden des Nordens genießt. </p>


			  </div>                    
				
            
            </div>
			
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
