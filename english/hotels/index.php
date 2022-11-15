<?php include("../_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa in Mauritius, Indian Ocean, Pereybere - Accommodation</title>
<meta name="description" content="Welcome to  Hibiscus Beach Resort and Spa on Mauritius island. The spacious and attractively decorated rooms of Hibiscus Beach Resort, Spa and Dive club, offer you an ambiance of well being and comfort that will accompany you throughout your stay at the hotel. ">
<meta name="keywords" content="Accommodation, Hibiscus Beach Resort and Spa, mauritius hotel, mauritius rooms, mauritius sea view rooms, mauritius superior rooms, mauritius junior suites, mauritius senior suites, mauritius royal suites, pereybere hotels,  pereybere rooms, pereybere sea view rooms, pereybere superior rooms, pereybere junior suites, pereybere senior suites, pereybere royal suites, indian ocean rooms, indian ocean superior rooms, indian ocean junior suites, indian ocean senior suites, indian ocean royal suites, vacation, pereybere, mauritius, indian ocean, islands, indian ocean islands">
<meta name="robots" content="all">

<?php include("../_scripts.php"); ?>

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

												{image : '../../images/accommodation/1.jpg'},

												{image : '../../images/accommodation/2.jpg'}

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
    
		<?php include("../_header.php"); ?>
        
        <div class="hide"></div>
        <div class="show"></div>
        
        <div id="content">
        
        	<h1 class="home_title" style="background:url(../../images/accom_ttl.png) bottom left no-repeat;">Accommodation</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Accommodation</h2>

                                <p>The spacious and attractively decorated rooms of Hibiscus Beach Resort, Spa and Dive club, offer you an ambiance of well being and comfort that will accompany you throughout your stay at the hotel. All the rooms, without exception, allow you access to an outdoor  terrace or  balcony, a view of the sea or of the garden.</p>
<p>The rooms are furnished with a King size bed, a minibar, an individual safe, a hair dryer, a telephone with direct dial for international calls and free wifi connection. Satellite television (cinema, news, music and children) is also available in all the rooms.
</p>
                                
                                <p>CD and DVD players are available in the Suites.<br />
The bathrooms in the Superior rooms are spacious and the Suites are provided with Jacuzzi.</p>
<p><strong>The different rooms available are:</strong><br />
Superior Room: 47 m2<br />
Junior Suite: 52 m2<br />
Senior Suite: 60 m2<br />
Royal Suite: 94 m2<br />
</p>

					</div>                    
				
           
			
            
            </div>
            
            
        
        </div>
        
        <?php include("../_footer.php"); ?>
    
    </div>

</body>
</html>
