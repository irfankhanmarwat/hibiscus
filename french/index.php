<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa à l’île Maurice, Océan Indien, Pereybère</title>
<meta name="description" content="Bienvenue à l’Hibiscus Beach Resort and Spa sur l’île Maurice. Au nord de Maurice, confortablement installé dans le petit village de Pereybère et au cœur des plus belles régions de l’île, l’Hibiscus Beach Resort, Spa and Dive Club offre à ses clients un havre de tranquillité et de sérénité dans une ambiance chaleureuse et intime.">
<meta name="keywords" content="Hibiscus Beach Resort and Spa, hôtel maurice, chambres maurice, chambres supérieures maurice, suites juniors maurice, suites seniors maurice, Suites royales maurice, hôtels pereybère, chambres pereybère, chambres supérieures pereybère, suites juniors pereybère, suites seniors pereybère, Suites royales pereybère, chambres océan indien, chambres supérieures océan indien, suites juniors océan indien, suites seniors océan indien, Suites royales océan indien, vacances, pereybère, maurice, océan indien, îles, îles océan indien">
<meta name="robots" content="all">

<?php include("_scripts.php"); ?>

<script type="text/javascript">

//blurry background
$(document).ready(function(){

	
	
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

												{image : '../images/index/1.jpg'},

												{image : '../images/index/2.jpg'},
												
												{image : '../images/index/5.jpg'},
												
												{image : '../images/index/6.jpg'},
													
												{image : '../images/index/7.jpg'},
														
												{image : '../images/index/8.jpg'}

										]

		});

	});

</script>

<!--Text - show/hide functionality-->
<script>	
			
			$(".show").live('click', function(){
				$('#content').css('filter', 'alpha(opacity=0)');
				//$('.scroll-pane').css('filter', 'alpha(opacity=0)');
				$('.hide').css('filter', 'alpha(opacity=0)');
				$('.show').css('filter', 'alpha(opacity=0)');
					$(".show").fadeOut(400, function(){
						$(".show").css({"filter":""});
						});
					$("#content").fadeIn(400, function(){
						$("#content").css({"filter":""});
						});
					$(".scroll-pane").fadeIn(200);
					//$(".scroll-pane").fadeIn(200, function(){
					//	$(".scroll-pane").css({"filter":""});
					//	});
					$(".hide").fadeIn(400, function(){
						$(".hide").css({"filter":""});
						});
				
				});
			
			
			
			$('#content').css('filter', 'alpha(opacity=0)');
			//$('.scroll-pane').css('filter', 'alpha(opacity=0)');
			$('.show').css('filter', 'alpha(opacity=0)');
			$('.hide').css('filter', 'alpha(opacity=0)');
			$(".hide").live('click', function(){
				$('#content').css('filter', 'alpha(opacity=0)');
				//$('.scroll-pane').css('filter', 'alpha(opacity=0)');
				$('.show').css('filter', 'alpha(opacity=0)');
				$('.hide').css('filter', 'alpha(opacity=0)');
					$(".hide").fadeOut(400, function(){
						$(".hide").css({"filter":""});
						});
					$(".scroll-pane").fadeOut(200);
					//$(".scroll-pane").fadeOut(200, function(){
					//	$(".scroll-pane").css({"filter":""});
					//	});
					$("#content").fadeOut(400, function(){
						$("#content").css({"filter":""});
						});
					$(".show").fadeIn(600, function(){
						$(".show").css({"filter":""});
						});
				
				});
</script>

<script type="text/javascript">
//intro animation
		$(document).ready(function(){

			$('.logo').css('filter', 'alpha(opacity=0)');
			$('.menu').css('filter', 'alpha(opacity=0)');
			$('#content').css('filter', 'alpha(opacity=0)');
			
			//$('.scroll_arrow_top').css('filter', 'alpha(opacity=0)');
			//$('.scroll_arrow_bot').css('filter', 'alpha(opacity=0)');
			$('.hide').css('filter', 'alpha(opacity=0)');
			$("#header").animate({'margin-top':'0px'}, 1500, function(){
							$(".logo").fadeIn(1200, function(){
									$(".logo").css({"filter":""});
					$(".menu").fadeIn(1200, function(){
					$(".menu").css({"filter":""});
					$("#footer").animate({bottom:'0px'}, 1200, function(){
										$("#lang").fadeIn(1000);
											$("#rates_menu").fadeIn(1000);
												$("#guestbook_menu").fadeIn(1000);
													$("#contact_menu").fadeIn(1000);
													$("#video_menu").fadeIn(1000);
														$("#tour_menu").fadeIn(1000, function(){
															$("#content").fadeIn(300, function(){
																$("#content").css({"filter":""});
																
															});
															$(".scroll-pane").fadeIn(500,function(){
																$('.scroll-pane').jScrollPane();
															});
															//$(".scroll_arrow_top").fadeIn(600, function(){
															//	$(".scroll_arrow_top").css({"filter":""});
															//	});
															//$(".scroll_arrow_bot").fadeIn(600, function(){
															//	$(".scroll_arrow_bot").css({"filter":""});
															//	});
															$(".hide").fadeIn(600, function(){
																$(".hide").css({"filter":""});
															});
//													});
//												});
//											});														
										});								
								});
						});
					
					});
					
				});
                	});
</script>
<style>

#wrapper #header {
	margin-top:-77px;
	}

#wrapper #footer {
	bottom:-81px;
	}

#wrapper #header .innerHeader a.logo{
	display:none;
	}

#wrapper #header .innerHeader .menu{
	display:none;
	}
	
#wrapper #content{
	display:none;
	}

#wrapper #lang{
	display:none;
	}
#wrapper #rates_menu{
	display:none;
	}
#wrapper #guestbook_menu{
	display:none;
	}
	#wrapper #video_menu{
	display:none;
	}
#wrapper #contact_menu{
	display:none;
	}
#wrapper #tour_menu{
	display:none;
	}

#wrapper .show, #wrapper .hide{
	display:none;
	}
	
</style>
</head>

<body>

	<div id="wrapper">
    
		<?php include("_header.php"); ?>
        
        <div class="hide"></div>
        <div class="show"></div>
        
        <div id="content">
        
        	<h1 class="home_title">Bienvenue</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Accueil</h2>
                                
                                <p>Au nord de l'île Maurice, confortablement installé dans le petit village de Pereybère au cœur d'une des plus belles régions de l'île, l'HIBISCUS BEACH RESORT, SPA AND DIVE CLUB offre à nos clients un havre de tranquillité et de sérénité, dans une ambiance chaleureuse et intime.</p>
                               <p> Les portes de notre réception accueillante ne se referment pas sur vous mais s’ouvrent sur le cadre surprenant d’une nature fabuleuse, celui d’un magnifique jardin tropical traversé par un charmant chemin de pierre qui mène à un point de vue spectaculaire sur la lagune et l'océan Indien.</p>
                                <p><strong>BIENVENUE À L’HIBISCUS BEACH RESORT, SPA AND DIVE CLUB!</strong></p>

					</div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
