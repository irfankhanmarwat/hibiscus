<?php include("_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa à l’île Maurice, Océan Indien, Pereybère - NOUS CONTACTER</title>
<meta name="description" content="Bienvenue à l’Hibiscus Beach Resort and Spa sur l’île Maurice. Au nord de Maurice, confortablement installé dans le petit village de Pereybère et au cœur des plus belles régions de l’île, l’Hibiscus Beach Resort, Spa and Dive Club offre à ses clients un havre de tranquillité et de sérénité dans une ambiance chaleureuse et intime.">
<meta name="keywords" content="NOUS CONTACTER, Hibiscus Beach Resort and Spa, hôtel maurice, chambres maurice, chambres supérieures maurice, suites juniors maurice, suites seniors maurice, Suites royales maurice, hôtels pereybère, chambres pereybère, chambres supérieures pereybère, suites juniors pereybère, suites seniors pereybère, Suites royales pereybère, chambres océan indien, chambres supérieures océan indien, suites juniors océan indien, suites seniors océan indien, Suites royales océan indien, vacances, pereybère, maurice, océan indien, îles, îles océan indien"><meta name="robots" content="all">

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

												{image : '../images/index/1.jpg'},

												{image : '../images/index/2.jpg'},
												
//												{image : '../images/index/3.jpg'},
//												
//												{image : '../images/index/4.jpg'},
												
												{image : '../images/index/5.jpg'}

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
					$(".scroll-pane").fadeOut(200);
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

<body style="min-height:630px;">

	<div id="wrapper" style="min-height:630px;">
    
		<?php include("_header.php"); ?>
        
        <div class="hide" style="margin-left:406px;	margin-top:114px;"></div>
        <div class="show" style="margin-left:406px;	margin-top:114px;"></div>
        
         <div id="content"  style="width: 713px;top:45%; height: 450px;background:url(../images/contentbg2.png) no-repeat;">
        
        	<h1 class="home_title" style="background:url(../images/contact_ttl-fr.png) bottom left no-repeat;">NOUS CONTACTER</h1>
            <h2 style="display:none">NOUS CONTACTER</h2>
            
            <div class="text">
            
            	<div class="scrollblock" id="scrollblock" style="width: 680px; height: 346px; margin-top:5px;">  
							
                	<div class="scrollheight">
                  
              <iframe src=""http://www.greeka.com/redirections/_global/booking_form_2c.php?hotel_id=2597&lang=french" width="680" height="335" frameborder="0" allowtransparency="yes" style="overflow:hidden; margin-top:0px;"></iframe>

					</div>                    
				
            
            </div>
            
            
        
        </div>
        </div>
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
