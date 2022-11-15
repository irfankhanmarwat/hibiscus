<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa in Mauritius, Indian Ocean, Pereybere</title>
<meta name="description" content="Welcome to  Hibiscus Beach Resort and Spa on Mauritius island. In the north of Mauritius, cozily nestled in the small village of Pereybere and in the heart of the choicest regions of the island, hibiscus beach resort, spa and dive club offers to our clients a haven of tranquillity and serenity in an ambiance of warmth and intimacy.">
<meta name="keywords" content="Guestbook, Hibiscus Beach Resort and Spa, mauritius hotel, mauritius rooms, mauritius superior rooms, mauritius junior suites, mauritius senior suites, mauritius royal suites, pereybere hotels,  pereybere rooms, pereybere superior rooms, pereybere junior suites, pereybere senior suites, pereybere royal suites, indian ocean rooms, indian ocean superior rooms, indian ocean junior suites, indian ocean senior suites, indian ocean royal suites, vacation, pereybere, mauritius, indian ocean, islands, indian ocean islands">
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

												{image : 'images/index/1.jpg'},

												{image : 'images/index/2.jpg'},
												
												{image : 'images/index/5.jpg'},
												
												{image : 'images/index/6.jpg'},
													
												{image : 'images/index/7.jpg'},
														
												{image : 'images/index/8.jpg'}

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
        
        	<h1 class="home_title">Welcome</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Home</h2>
                                
                                <p>In the north of Mauritius, cosily nestled in the small village of Pereybere and in the heart of the choicest regions of the island, HIBISCUS BEACH RESORT, SPA AND DIVE CLUB  offers to our clients a haven of tranquillity and serenity in an ambiance of warmth and intimacy.</p>
                                
                                <p>The doors of our welcoming reception do not slam on your back but open in front of you a surprising site of natural splendour: a magnificent tropical garden run across by a charming stone footpath which leads to a spectacular view of the lagoon and the Indian Ocean.</p>
                                <p><strong>WELCOME TO HIBISCUS BEACH RESORT, SPA AND DIVE CLUB!</strong></p>

					</div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
