<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere</title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels,  pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln">
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
        
        	<h1 class="home_title">Willkommen</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Startseite</h2>
                                <p>Im Norden der Insel Mauritius, gemütlich im kleinen Dorf Pereybere eingebettet und im Herzen der erlesensten Regionen der Insel, bietet das HIBISCUS BEACH RESORT, SPA AND DIVE CLUB unseren Gästen in einem warmen und vertrauten Ambiente eine Oase der Ruhe und Gelassenheit.</p>
								
                                <p>Die Türen unserer einladenden Rezeption schlagen nicht hinter Ihnen zu, sondern öffnen sich vor Ihnen, um den Blick auf einen überraschender Ort natürlicher Pracht freizugeben: einen wunderschönen tropischen Garten, durch den ein hübscher Steinweg führt, der zu einem spektakulären Ausblick auf die Lagune und den Indischen Ozean führt. </p>

<p><strong>WILLKOMMEN IM HIBISCUS BEACH RESORT, SPA UND TAUCHZENTRUM!</strong>
</p>
                                          
				
            
            </div>
            
            
        </div>
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
