<?php 
header('Content-Type: text/html; charset=utf-8');
$hotelid = 2597;
include_once('_lang_detect.php');
include('functions.php');

$out = get_price($hotelid, $currentlang);


if ( isset($out['PriceNotes']) )
{
	if (is_array($out['PriceNotes'])) 	{ $show_notes = implode("", $out['PriceNotes']); }
	else								{ $show_notes = $out['PriceNotes']; }  
}

if ( isset($out['PriceTermns']) )
{
	if (is_array($out['PriceTermns'])) 	{ $show_terms = implode("", $out['PriceTermns']); }
	else								{ $show_terms = $out['PriceTermns']; }
}


$season_array = array("Low", "Medium", "High", "Extra", "Season1", "Season2");
$priceList1 = '';
$priceList2 = '';

if ( isset($out['TotalRooms']) && $out['TotalRooms']>0 )
{
	$priceList1 .= '<div class="tableprice">';
                    	
	foreach ($season_array as $season) 
	{
		if ($out['PriceSeasons']['Season'.$season]!="") 
		{  
			$priceList1 .= '
			<div class="pricelist">
			<ul>
			<li class="title">Pricelist for <br />'.$out['PriceYear'].'</li>
			';
            $bg_count = 0;
            for ($r=0; $r<=$out['TotalRooms']-1; $r++) 
            {
            	$bg_count ++;
				
				$priceList1 .= '<li ';
					if ($bg_count==2){ $priceList1 .= 'class="even colBlack"';} else { $priceList1 .= 'class="odd colBlack"';} 
				$priceList1 .= '>
                <div align="left">';
                
				if ($out['PriceRoomList']['PriceRoom'.$r]['roomdesc']!="") 
				{ 
					$priceList1 .= '<img src="alert.gif" width="13" height="13" title="'.stripslashes($out['PriceRoomList']['PriceRoom'.$r]['roomdesc']).'"> ';
                }
                
				$priceList1 .= $out['PriceRoomList']['PriceRoom'.$r]['roomname'].'
				</div>
                </li>
                ';
                 if ($bg_count==2) { $bg_count = 0;}
			} 
			$priceList1 .= '
			</ul>
			</div>
			<div class="pricelist">
			<ul>
			<li class="title1">
			';
			/*if (strlen($out['PriceSeasons']['Season'.$season])>15) 	{ $priceList1 .= $out['PriceSeasons']['Season'.str_replace(" - ", "<br>-<br>", $season_name)].'<br>&nbsp;'; }
			else 													{ $priceList1 .= $out['PriceSeasons']['Season'.$season][0].'<br>'.$out['PriceSeasons']['Season'.$season][1]; }*/
			
            if (strlen($out['PriceSeasons']['Season'.$season])<15) 	{ $priceList1 .= $out['PriceSeasons']['Season'.$season]."<br><br>";}
			else 													{ $priceList1 .= $out['PriceSeasons']['Season'.$season]."<br>";}
			
			$priceList1 .= '</li>';
 
			$bg_count = 0;
			for ($r=0; $r<=$out['TotalRooms']-1; $r++) 
			{ 
				$bg_count ++;
				$show_price = $out['PriceRoomList']['PriceRoom'.$r]['roomPrice'.$season];
				$show_price = str_replace("{{3}}", "N/A", $show_price);
	
				$priceList1 .= '<li ';
				if ($bg_count==2){ $priceList1 .= 'class="even"';} else { $priceList1 .= 'class="odd"';}
				$priceList1 .= '>'.$show_price.'&nbsp;&euro;</li>';
	 
				if ($bg_count==2) { $bg_count = 0;}
			} 
 
			$priceList1 .= '
			</ul>
			</div>
			<hr style="clear:both; height:5px; visibility:hidden;">
			';
		} // end if ($out['PriceSeasons']['Season'.$season]!="")
	} // end foreach ($season_array as $season)

	$priceList1 .= '
	</div>
	<hr style="clear:both; height:10px; visibility:hidden;">
	<p style="margin-bottom:20px;">
	';

	if ($show_notes!="") 
	{
		$priceList1 .= '
		<strong><u>Notes:</u></strong><br>
		'.$show_notes;
	}

	if ($show_terms!="") 
	{
		$priceList1 .= '
		<br>
		<br>
		<strong><u>Terms:</u></strong><br>
		'.$show_terms;
	}
	$priceList1 .= '</p>';
} 
else 
{ 
	$priceList1 .= 'No pricelist available at the moment'; 
}


if ( isset($out['TotalRooms']) && $out['TotalRooms']>0 )
{
	$priceList2 .= '
		<div class="tableprice2">
			<div id="pricelist">
			<ul style="width:180px; border-left:0px solid #000; margin-left:10px;">
			<li class="title" >&nbsp;<br /><br /></li>
	';
	
	$bg_count = 0;

	for ($r=0; $r<=$out['TotalRooms']-1; $r++) 
	{
		$bg_count ++;
		$priceList2 .= '<li ';
			if ($bg_count==2){ $priceList2 .= 'class="even"';} else { $priceList2 .= 'class="odd"';}
		$priceList2 .= ' style="border-bottom:1px solid #959085; font-weight:bold;">
		<div align="left">';

		if ($out['PriceRoomList']['PriceRoom'.$r]['roomdesc']!="") 
		{ 
			$priceList2 .= '<img src="alert.gif" width="13" height="13" title="'.stripslashes($out['PriceRoomList']['PriceRoom'.$r]['roomdesc']).'"> ';
		}

		$priceList2 .= $out['PriceRoomList']['PriceRoom'.$r]['roomname'].'
		</div>
		</li>
		';
		if ($bg_count==2) { $bg_count = 0;}
	} 
	$priceList2 .= '
	</ul>
	</div>
	';

	foreach ($season_array as $season) 
	{
		if ($out['PriceSeasons']['Season'.$season]!="") 
		{  
			$priceList2 .= '
			<div id="pricelist">
			<ul style="width:115px; border-left:0px solid #000;padding-left:0px;">
				<li class="title1">
			';
			if (strlen($out['PriceSeasons']['Season'.$season])<15) 	{ $priceList2 .= $out['PriceSeasons']['Season'.$season]."<br><br>";}
			else 													{ $priceList2 .= $out['PriceSeasons']['Season'.$season]."<br>";}
			$priceList2 .= '</li>';

			$bg_count = 0;
			for ($r=0; $r<=$out['TotalRooms']-1; $r++) 
			{ 
				$bg_count ++;
				$show_price = $out['PriceRoomList']['PriceRoom'.$r]['roomPrice'.$season];
				$show_price = str_replace("{{3}}", "N/A", $show_price);

				$priceList2 .= '<li ';
					if ($bg_count==2){ $priceList2 .= 'class="even"';} else { $priceList2 .= 'class="odd"';}
				$priceList2 .= '>'.$show_price.'&nbsp;&euro;</li>';

				if ($bg_count==2) { $bg_count = 0;}
			} 
			$priceList2 .= '
			</ul>
			</div>
			';
		} // end if ($out['PriceSeasons']['Season'.$season]!="")
	} // end foreach ($season_array as $season)

	$priceList2 .= '
	</div>
	<hr style="clear:both; height:10px; visibility:hidden;">
	<p style="text-align:left; margin-bottom:10px; margin-top:30px;">
	';

	if ($show_notes!="") 
	{
		$priceList2 .= '
		<strong style="font-size:13px; margin-bottom:5px;">Notes:</strong><br />
		'.$show_notes;
	}

	$priceList2 .= '</p><p style="text-align:left; ">';
	
	if ($show_terms!="") 
	{
		$priceList2 .= '
		<br>
		<strong style="font-size:13px; padding-bottom:5px;">Terms:</strong><br />
		'.$show_terms;
	}
	$priceList2 .= '</p>';
} 
else 
{ 
	$priceList2 .= "No pricelist available at the moment"; 
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort and Spa in Mauritius, Indian Ocean, Pereybere - Rates</title>
<meta name="description" content="Welcome to  Hibiscus Beach Resort and Spa on Mauritius island.">
<meta name="keywords" content="Rates, Hibiscus Beach Resort and Spa, mauritius hotel, mauritius rooms, mauritius superior rooms, mauritius junior suites, mauritius senior suites, mauritius royal suites, pereybere hotels,  pereybere rooms, pereybere superior rooms, pereybere junior suites, pereybere senior suites, pereybere royal suites, indian ocean rooms, indian ocean superior rooms, indian ocean junior suites, indian ocean senior suites, indian ocean royal suites, vacation, pereybere, mauritius, indian ocean, islands, indian ocean islands"><meta name="robots" content="all">
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
<style>
.scroll-pane, .ncontainr{
		width: 100% !important;
		margin-left:0;
	}
@media screen and (max-width: 1024px){
	.tableprice ul.firstul{
		width: 36% !important;
	}
	.tableprice ul{
		/*width: 20% !important;*/
	}
	.tableprice ul li{
		height: 58px !important;
	}
	
}
@media screen and (max-width: 720px){
	.tableprice ul li{
		height: 70px !important;
	}
}
@media screen and (max-width: 480px){
	.tableprice ul li{
		line-height: 12px;
		font-size: 11px;
	}
}
</style>
</head>
<body>
	<div id="wrapper">
    
		<?php include("_header.php"); ?>
        
        <div class="hide"></div>
        <div class="show"></div>
        
        <div id="content">
        
        	<h1 class="home_title" style="background:url(../images/rates_ttl.png) bottom left no-repeat;">Rates</h1>
            
            <div class="text">
            
            	<div class="ncontainr">
                    <div id="tableprice"><?php echo $priceList1;?></div>
                    <div id="tableprice2"><?php echo $priceList2;?></div>

                </div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>
</body>
</html>
