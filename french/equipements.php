<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa à l’île Maurice, Océan Indien, Pereybère - Équipements</title>
<meta name="description" content="Bienvenue à l’Hibiscus Beach Resort and Spa sur l’île Maurice. Pour ceux qui aiment la plage, un portillon situé dans l'hôtel et un petit chemin à l’extérieur de l’établissement vous conduisent aux plus belles plages de l'île Maurice.">
<meta name="keywords" content="Équipements, Hibiscus Beach Resort and Spa, hôtel maurice, chambres maurice, chambres supérieures maurice, suites juniors maurice, suites seniors maurice, Suites royales maurice, hôtels pereybère, chambres pereybère, chambres supérieures pereybère, suites juniors pereybère, suites seniors pereybère, Suites royales pereybère, chambres océan indien, chambres supérieures océan indien, suites juniors océan indien, suites seniors océan indien, Suites royales océan indien, vacances, pereybère, maurice, océan indien, îles, îles océan indien"><meta name="robots" content="all">

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

												{image : '../images/facilities/1.jpg'},
		
{image : '../images/facilities/2.jpg'},
		{image : '../images/facilities/3.jpg'},
		{image : '../images/facilities/4.jpg'},
		{image : '../images/facilities/5.jpg'},
		{image : '../images/facilities/6.jpg'},
		{image : '../images/facilities/7.jpg'},
		{image : '../images/facilities/8.jpg'},
		{image : '../images/facilities/9.jpg'},
		{image : '../images/facilities/10.jpg'},
		{image : '../images/facilities/11.jpg'},
		{image : '../images/facilities/12.jpg'}

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
        
        	<h1 class="home_title" style="background:url(../images/facilities_ttl-fr.png) bottom left no-repeat;">Facilities</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Facilities</h2>
                                
<p><strong>Plage et lagune </strong><br />
Pour ceux qui aiment la plage, un portillon situé dans l'hôtel et un petit chemin à l’extérieur de l’établissement vous conduisent aux plus belles plages de l'île Maurice (50 m). Protégé par une barrière de récifs coralliens, le lagon aux eaux turquoise est un endroit paradisiaque pour les nageurs et les amateurs de sports aquatiques.</p>
<p><strong>PISCINE</strong><br />
La magnifique piscine rappelant les contours de l'île Maurice propose une mini cascade, un espace pour les enfants et un jacuzzi en plein air pouvant accueillir huit personnes. Autour de la piscine, à l’ombre des parasols, des chaises longues en bois habillées de petits matelas confortables sont une invitation à la détente et au repos.</p>
<p><strong>PARCS POUR ENFANTS</strong><br />
Le PARC POUR ENFANTS de l’hôtel propose de nombreux jeux de plein air pour les petits enfants.</p>
<p><strong>Autres services </strong><br />
Pour certains services spécifiques (location de voiture, coiffeur, médecin, baby-sitter, blanchisserie, bibliothèque), veuillez vous adresser à la réception. </p>


					</div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
