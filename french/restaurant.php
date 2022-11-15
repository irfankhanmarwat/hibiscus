<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa à l’île Maurice, Océan Indien, Pereybère - Restaurant</title>
<meta name="description" content="Bienvenue à l’Hibiscus Beach Resort and Spa sur l’île Maurice. Donnant sur la mer et la piscine, notre restaurant en plein air est un espace privilégié où vous pouvez vous restaurer en couple, en famille ou avec des amis pour des moments de détente inoubliables.">
<meta name="keywords" content="Restaurant, Hibiscus Beach Resort and Spa, hôtel maurice, chambres maurice, chambres supérieures maurice, suites juniors maurice, suites seniors maurice, Suites royales maurice, hôtels pereybère, chambres pereybère, chambres supérieures pereybère, suites juniors pereybère, suites seniors pereybère, Suites royales pereybère, chambres océan indien, chambres supérieures océan indien, suites juniors océan indien, suites seniors océan indien, Suites royales océan indien, vacances, pereybère, maurice, océan indien, îles, îles océan indien"><meta name="robots" content="all">

<?php include("_scripts.php"); ?>

<script type="text/javascript">

//blurry background
		$(document).ready(function(){
			$('.scroll-pane').jScrollPane();

//menu				
				$("li.sub").hover(function(){$("li.sub ul.menu2sub").fadeIn(200);$("a.menu2").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub ul.menu2sub").fadeOut(200);$("a.menu2").css({backgroundPosition:'0 0'});});
				$("li.sub1").hover(function(){$("li.sub1 ul.menu3sub").fadeIn(200);$("a.menu4").css({backgroundPosition:'0 -19px'});}, function(){$("li.sub1 ul.menu3sub").fadeOut(200);$("a.menu4").css({backgroundPosition:'0 0'});});
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

												{image : '../images/restaurant/1.jpg'},
												{image : '../images/restaurant/2.jpg'},
												{image : '../images/restaurant/3.jpg'},
												{image : '../images/restaurant/4.jpg'},
												{image : '../images/restaurant/5.jpg'},
												{image : '../images/restaurant/6.jpg'},
												{image : '../images/restaurant/7.jpg'},
												{image : '../images/restaurant/8.jpg'},
												{image : '../images/restaurant/9.jpg'},
												{image : '../images/restaurant/10.jpg'},
												{image : '../images/restaurant/11.jpg'},	
												{image : '../images/restaurant/12.jpg'},
												{image : '../images/restaurant/13.jpg'},
												{image : '../images/restaurant/14.jpg'}

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
	
</head>

<body>

	<div id="wrapper">
    
		<?php include("_header.php"); ?>
        
        <div class="hide"></div>
        <div class="show"></div>
        
        <div id="content">
        
        	<h1 class="home_title" style="background:url(../images/restaurant_ttl-fr.png) bottom left no-repeat;">Restaurant & Bar</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Restaurant & Bar</h2>
                                
                                <p>Donnant sur la mer et la piscine, notre restaurant en plein air est un espace privilégié où vous pouvez vous restaurer en couple, en famille ou avec des amis pour des moments de détente inoubliables.</p>

<p>Le principal restaurant de l’Hibiscus Beach Resort, Spa and Dive Club vous accueille de 7 heures à 10 heures pour le petit déjeuner, de midi à 15 heures pour le déjeuner et de 19h30 à 22h30 pour le dîner.<br />
En des  certaines occasions spéciales, le déjeuner, le dîner et le buffet sont animés par des fêtes de gala et des démonstrations de cuisine. </p>

<p>Le bar principal situé à l’entrée du restaurant est ouvert jusqu’à minuit et propose une grande variété de cocktails exotiques et de jus de fruits frais. Des boissons sans alcool sont également disponibles entre midi et 15 heures.</p>

<p>De 16 heures à 19 heures, vous pouvez vous délecter au snack-bar d’une tasse de thé ou de café, de pâtisseries, de pancakes, de glaces, d'en-cas et d'autres douceurs inspirées par les différentes cultures culinaires de l'île. </p>

			  </div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
