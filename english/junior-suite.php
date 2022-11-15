<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa in Mauritius, Indian Ocean, Pereybere - Loft Suite</title>
<meta name="description" content="Welcome to  Hibiscus Beach Resort and Spa on Mauritius island.">
<meta name="keywords" content="Loft Suite, Hibiscus Beach Resort and Spa, mauritius hotel, mauritius rooms, mauritius superior rooms, mauritius junior suites, mauritius senior suites, mauritius royal suites, pereybere hotels,  pereybere rooms, pereybere superior rooms, pereybere junior suites, pereybere senior suites, pereybere royal suites, indian ocean rooms, indian ocean superior rooms, indian ocean junior suites, indian ocean senior suites, indian ocean royal suites, vacation, pereybere, mauritius, indian ocean, islands, indian ocean islands"><meta name="robots" content="all">

<?php include("_scripts.php"); ?>

<script type="text/javascript">

//blurry background
		$(document).ready(function(){
			

			$("body").ezBgResize({

	img     : "images/juniorsuite/a.jpg", // Relative path example.  You could also use an absolute url (http://...).

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

												{image : 'images/juniorsuite/1.jpg'},

												{image : 'images/juniorsuite/2.jpg'},
												{image : 'images/juniorsuite/3.jpg'}

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
        
        	<h1 class="home_title" style="background:url(../images/loftsuite_ttl.png) bottom left no-repeat;">Loft Suite</h1>
            
            <div class="text">
            
            	<div class="scrollblock" id="scrollblock">  
							
                	<div id="scrollheight">
								
                                <h2 style="display:none;">Accommodation - Loft Suite</h2>
                                
                                <p>Offering everything of a Senior Suite and its private balcony.</p>

<div class="listing" style="margin-bottom:0px;">
    <ul>
        <li>Area - 52 m² overlooking the lagoon for the pleasure of your eyes.</li>
        <li>Special Feature - the suites are fitted with a Jacuzzi and large bathroom.</li>
<li>Special Feature - private balcony with sitting area and sun bathing beds.</li>
<li>Special Feature - Tea and Coffee area with handcrafted sofas for your comfort.</li>

    </ul>
</div>

					</div>                    
				
			</div>
			
            <div class="scrollbars" id="scrollbar"> <span id="scroll_up" class="scroll_arrow_top"><img src="images/mouse_up.png" name="up" alt="scrollup" onMouseOver="up.src='images/mouse_up_h.png'" onMouseOut="up.src='images/mouse_up.png'"/></span> <span id="scroll_down" class="scroll_arrow_bot"><img src="images/mouse_down.png" name="down" alt="scrolldown" onMouseOver="down.src='images/mouse_down_h.png'" onMouseOut="down.src='images/mouse_down.png'"/></span>
            </div>

            <br clear="all" />

            <script type="text/javascript"> var div_scroll1 = new TextScroll('div_scroll1', 'scrollblock', 'scroll_up', 'scroll_down', 'scrollbar', 'scrollheight');</script>
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
