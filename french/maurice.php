<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa à l’île Maurice, Océan Indien, Pereybère - Île Maurice</title>
<meta name="description" content="Bienvenue à l’Hibiscus Beach Resort and Spa sur l’île Maurice. L’île Maurice compte environ 1,2 millions d’habitants, la majorité étant d’origine indienne, les autres étant Créoles, Chinois et Européens.">
<meta name="keywords" content="Île Maurice, Hibiscus Beach Resort and Spa, hôtel maurice, chambres maurice, chambres supérieures maurice, suites juniors maurice, suites seniors maurice, Suites royales maurice, hôtels pereybère, chambres pereybère, chambres supérieures pereybère, suites juniors pereybère, suites seniors pereybère, Suites royales pereybère, chambres océan indien, chambres supérieures océan indien, suites juniors océan indien, suites seniors océan indien, Suites royales océan indien, vacances, pereybère, maurice, océan indien, îles, îles océan indien"><meta name="robots" content="all">

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
        
        	<h1 class="home_title" style="background:url(../images/mauritius_ttl-fr.png) bottom left no-repeat;">Île Maurice</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								<p style="padding-top:4px;"><img src="../images/google-map.png" width="18" height="18" style="padding-bottom:2px; vertical-align:middle; display:inline; margin-bottom:0px; margin-right:3px;"> <a title="Google Carte" href="google-map.htm" style="margin-right:10px; color:#7f7f7f;">Google Carte</a></p>
                                <h2 style="display:none;">Île Maurice</h2>
                                
<p><strong>L’ÎLE MAURICE ET PEREYBÈRE</strong><br />
L’ÎLE MAURICE<br />
L’île Maurice compte environ 1,2 millions d’habitants, la majorité étant d’origine indienne, les autres étant Créoles, Chinois et Européens. Elle s’étend sur 1865 km² et mesure 65 km de long et 45 km de large. 
Son relief est assez élevé et son point culminant s'élève à 828 m d'altitude. À l’inverse de l’hémisphère nord, la saison la plus chaude commence en décembre et se termine en mars (entre 25 et 30°C). 
Le reste de l’année, l’île connaît un climat plus frais et les températures les plus basses sont atteintes de juin à septembre (entre 17°C la nuit et 25°C le jour).<br />
Depuis son indépendance en 1968, la majorité démocratique maintient la stabilité du pays. Dr Chandra Ramgoolam en est le Premier ministre et M. Kailash Purryag en est le Président de la République depuis 2012.<br />
La langue officielle de l’île Maurice est l’anglais mais le français et le créole sont le plus souvent utilisés comme dialectes oraux. Le chinois et d’autres langues orientales sont enseignés à l'école mais rarement parlés.<br />
La devise locale de l’île est la roupie mauricienne : 1 euro = 38,5 Rs.
</p>

<p><strong>VACANCES À PEREYBÈRE</strong><br />
Située au nord de l’île Maurice, la commune de Pereybère est un vrai paradis sur terre. Ce petit village de bord de mer possède tous les éléments indispensables à des vacances réussies. Il a su conserver son atmosphère de simplicité et de tranquillité malgré l’effervescence de sa voisine, Grand Baie, où les boutiques, les bars, les restaurants et boîtes de nuit animeront vos jours et vos nuits. Un séjour à l’hôtel Hibiscus Beach Resort, Spa and Dive Club de Péreybère vous permettra d’apprécier pleinement son ambiance sereine et conviviale tout en profitant des plaisirs du Nord. </p>


			  </div>                    
				
            
            </div>
			
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
