<?php include("../_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere - Suite  Meerblick</title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="Suite Meerblick, Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels, pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln">
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

												{image : '../../images/seniorsuite/1.jpg'},

												{image : '../../images/seniorsuite/2.jpg'},
												{image : '../../images/seniorsuite/3.jpg'}

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
        
        	<h1 class="home_title" style="background:url(../../images/suite_ttl-ger.png) bottom left no-repeat;">Suite</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Unterkunft - Suite</h2>
                                
                                <p>Die Senior-Suiten mit ihrer atemberaubenden Aussicht auf die Lagune und dem geräumigen Balkon sind ein Traum, der wahr geworden ist.</p>

<div class="listing" style="margin-bottom:0px;">
    <ul>
        <li>Größe – 60m² mit Ausblick auf die Lagune.</li>
        <li>Besonderheit – die Suiten haben Whirlpools und große Badezimmer.</li>
        <li>Besonderheit – eigener Balkon mit Sitzecke und Liegestühlen.</li>
        <li>Besonderheit – Tee- und Kaffeebereich mit handgemachten Sofas für Ihren Komfort.</li>
    </ul>
</div>

			  </div>                    
				            
            </div>
            
            
        
        </div>
        
        <?php include("../_footer.php"); ?>
    
    </div>

</body>
</html>
