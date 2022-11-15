<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere - Suite Senior</title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="Suite Senior, Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels,  pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln"><meta name="robots" content="all">

<?php include("_scripts.php"); ?>

<script type="text/javascript">

//blurry background
		$(document).ready(function(){
			

			$("body").ezBgResize({

	img     : "images/seniorsuite/a.jpg", // Relative path example.  You could also use an absolute url (http://...).

	opacity : 1, // Opacity. 1 = 100%.  This is optional.

	center  : true // Boolean (true or false). This is optional. Default is true.

			});
			
//menu				
				$("li.sub").hover(function(){$("li.sub ul.menu2sub").fadeIn(200);$("a.menu2").css({backgroundPosition:'0 -15px'});}, function(){$("li.sub ul.menu2sub").fadeOut(200);$("a.menu2").css({backgroundPosition:'0 0'});});
				$("li.sub1").hover(function(){$("li.sub1 ul.menu3sub").fadeIn(200);$("a.menu4").css({backgroundPosition:'0 -15px'});}, function(){$("li.sub1 ul.menu3sub").fadeOut(200);$("a.menu4").css({backgroundPosition:'0 0'});});
				$("li.sub2").hover(function(){$("li.sub2 ul.menu4sub").fadeIn(200);$("a.menu5").css({backgroundPosition:'0 -15px'});}, function(){$("li.sub2 ul.menu4sub").fadeOut(200);$("a.menu5").css({backgroundPosition:'0 0'});});

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

												{image : '../images/seniorsuite/1.jpg'},

												{image : '../images/seniorsuite/2.jpg'},
												{image : '../images/seniorsuite/3.jpg'}

										]

		});

	});

</script>

<!--Text - show/hide functionality-->
<script>	
			
			$(".show").live('click', function(){
				$('#content').css('filter', 'alpha(opacity=0)');
				$('.scrollbars').css('filter', 'alpha(opacity=0)');
				$('.hide').css('filter', 'alpha(opacity=0)');
				$('.show').css('filter', 'alpha(opacity=0)');
					$(".show").fadeOut(400, function(){
						$(".show").css({"filter":""});
						});
					$("#content").fadeIn(400, function(){
						$("#content").css({"filter":""});
						});
					$(".scrollblock").fadeIn(200);
					$(".scrollbars").fadeIn(200, function(){
						$(".scrollbars").css({"filter":""});
						});
					$(".hide").fadeIn(400, function(){
						$(".hide").css({"filter":""});
						});
				
				});
			
			
			
			$('#content').css('filter', 'alpha(opacity=0)');
			$('.scrollbars').css('filter', 'alpha(opacity=0)');
			$('.show').css('filter', 'alpha(opacity=0)');
			$('.hide').css('filter', 'alpha(opacity=0)');
			$(".hide").live('click', function(){
				$('#content').css('filter', 'alpha(opacity=0)');
				$('.scrollbars').css('filter', 'alpha(opacity=0)');
				$('.show').css('filter', 'alpha(opacity=0)');
				$('.hide').css('filter', 'alpha(opacity=0)');
					$(".hide").fadeOut(400, function(){
						$(".hide").css({"filter":""});
						});
					$(".scrollblock").fadeOut(200);
					$(".scrollbars").fadeOut(200, function(){
						$(".scrollbars").css({"filter":""});
						});
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
        
        	<h1 class="home_title" style="background:url(../images/suite_ttl-fr.png) bottom left no-repeat;">Suite</h1>
            
            <div class="text">
            
            	<div class="ncontainr" >  
							
                	<div id="scrollheight">
								
                                <h2 style="display:none;">Hébergement - Suite</h2>
                                
                                <p>With breathtaking view on the lagoon and a spacious area on the balcony the Senior Suite is a 'dream come true'.</p>

<div class="listing">
    <ul>
        <li>Area - 60m² overlooking the lagoon for the pleasure of your eyes.</li>
        <li>Special Feature - the suites are fitted with a Jacuzzi and large bathroom.</li>
        <li>Special Feature - private balcony with sitting area and sun beds.</li>
        <li>Special Feature - tea and coffee area with handcrafted sofas for your comfort.</li>
    </ul>
</div>

					</div>                    
				
             </div>
			
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
