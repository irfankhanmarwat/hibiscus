<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere - Google Karte</title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="Google Carte, Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels,  pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln"><meta name="robots" content="all">

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
        
        	<h1 class="home_title" style="background:url(../images/googlemap_ttl-ger.png) bottom left no-repeat;">Google Karte</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								<h2 style="display:none;">Google Karte</h2>
                                
<p><strong>MAURITIUS UND PEREYBERE</strong><br />

<p>MAURITIUS<br />
Mauritius hat eine Bevölkerung von ungefähr 1,2 Millionen, von denen die Mehrheit indischen Ursprungs ist. Der Rest ist kreolisch, chinesisch und europäisch. Die Gesamtfläche beträgt 1865 km², die Insel misst 65 km in der Länge und 45 km in der Breite. Die Höhenunterschiede sind recht groß und der höchste Gipfel liegt bei 828 m Höhe. Die heißeste Jahreszeit ist anders als auf der nördlichen Halbkugel von Dezember bis März (zwischen 25° C und 30° C). Der Rest des Jahres hat ein kühleres Klima; die Temperatur ist zwischen Juni und September am niedrigsten (zwischen 17° C nachts und 25° C am Tag).
Seit der Unabhängigkeit 1968 hält die demokratische Mehrheit die Stabilität des Landes; Dr. Navin Chandra Ramgoolam ist seit 2005 Premierminister und Herr Kailash Purryag seit 2012 Präsident der Republik.
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
