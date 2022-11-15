<?php include("../_lang_detect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa à l’île Maurice, Océan Indien, Pereybère - Activités</title>
<meta name="description" content="Bienvenue à l’Hibiscus Beach Resort and Spa sur l’île Maurice. Sautez dans la mer ou laissez votre corps flotter dans les eaux fraîches de la piscine. Nous vous proposons diverses activités qui vous laisseront des souvenirs impérissables.">
<meta name="keywords" content="Activités, Hibiscus Beach Resort and Spa, hôtel maurice, chambres maurice, chambres supérieures maurice, suites juniors maurice, suites seniors maurice, Suites royales maurice, hôtels pereybère, chambres pereybère, chambres supérieures pereybère, suites juniors pereybère, suites seniors pereybère, Suites royales pereybère, chambres océan indien, chambres supérieures océan indien, suites juniors océan indien, suites seniors océan indien, Suites royales océan indien, vacances, pereybère, maurice, océan indien, îles, îles océan indien"><meta name="robots" content="all">

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

												{image : '../../images/activities/1.jpg'},

												{image : '../../images/activities/2.jpg'}

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
        
        	<h1 class="home_title" style="background:url(../../images/activities_ttl-fr.png) bottom left no-repeat;">Activités</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
								
                                <h2 style="display:none;">Activités</h2>
                                
                                <p>Sautez dans la mer ou laissez votre corps flotter dans les eaux fraîches de la piscine. Nous vous proposons diverses activités qui vous laisseront des souvenirs impérissables.</p>

<p><strong>Plage</strong><br />
Bordée de palmiers, notre plage est l’un des plus beaux joyaux de l’île. Accolée à la piscine, elle donne également sur la jetée d’où vous pouvez plonger dans un monde d’amusement.</p>

<p><strong>Lagune</strong><br />
Protégée par des récifs coralliens naturels, la lagune aux eaux turquoise de l’hôtel est un véritable paradis pour les amateurs de plongée au tuba, des nageurs et de tous ceux qui apprécient les sports aquatiques.</p>

<p><strong>Sports aquatiques</strong><br />
Nous proposons une grande variété de sports et d’activités aquatiques adaptés à tous les goûts.<br />
Gratuit (uniquement pour les résidents) : pédalo et kayak.<br />
Pour une somme modique : plongée, pêche en haute mer, croisière en catamaran, randonnée sous-marine et safari sous-marin et ski nautique.</p>

<p><strong>Piscine </strong><br />
  Avec  sa forme rappelant les contours de l’île et sa cascade, vous pouvez en sortant  prendre un bain de soleil sur des chaises longues ou vous faire masser dans  notre jacuzzi pouvant accueillir 8 personnes.</p>

<p><strong>Sport</strong><br />
Activités gratuites (pour les résidents uniquement) : volleyball, terrain de boules, gymnase, centre de musculation, ping-pong et aquagym. Pour une somme modique : VTT, piscine, scooters, golf et équitation (à 6 kms de l’hôtel). SPA. Espace somptueux et luxueux dédié à la remise en forme. Ouvert tous les jours de 10 heures à midi. Hammam et sauna, massages relaxants, soins corporels, jacuzzi.</p>

<p><strong>Excursions</strong><br />
Des excursions et des sorties shopping peuvent être organisés avec des tours opérateurs locaux à la réception.</p>

<p><strong>Divertissements</strong><br />
De la musique live durant l’apéritif et le dîner et des animations culturelles proposées après le dîner font partie de l’expérience magique que nous vous offrons.</p>

<p><strong>Cinéma</strong><br />
Un cinéma équipé d’un système de son THX et d’un système de projection DLP accueille 30 personnes et propose des films pour le plaisir des petits et des grands. Il permet également la projection en direct de nombreux événements sportifs sur un écran géant 16:9 de 110".</p>

<p><strong>Autres services</strong><br />
Tours opérateurs, guichet d’information et d’excursions, location de voiture,  médecin joignable par téléphone (24h/24), coiffeur, bibliothèque et blanchisserie.</p>

</div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("../_footer.php"); ?>
    
    </div>

</body>
</html>
