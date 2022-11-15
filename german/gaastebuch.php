<?php include("_lang_detect.php"); ?>
<?php

$hotel_id = 2597;
$url = 'http://www.greeka.com/redirections/_global/xml_guestbook_hotel.php?hotel_id='.$hotel_id;

//$result = file_get_contents($url);

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
//	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
//  curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); 
$result = curl_exec( $ch ); 
curl_close($ch); 

$xml_filename = "xml/guestbook.xml";
$fp = fopen($xml_filename,'w');
if(!$fp) { die('Error cannot create XML file'); }
fwrite($fp, stripslashes($result));
fclose($fp);

require_once "simplexml.class.php";
$sxml = new simplexml;
$data = $sxml->xml_load_file($xml_filename);
$data = $sxml->xml_load_file($xml_filename, "array");

if ($data!='')
{
	if ($data['guestbook_post'][1]!='')
	{
		$totalGuestbookPosts = count($data['guestbook_post']);
	}
	else
	{
		$totalGuestbookPosts = 1;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere - GÄSTEBUCH</title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="GÄSTEBUCH, Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels,  pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln"><meta name="robots" content="all">

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
					$(".scrollblock").fadeIn(200);
					//$(".scrollbars").fadeIn(200, function(){
//						$(".scrollbars").css({"filter":""});
//						});
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
	
<style>
/**{ font-family:Arial, Helvetica, sans-serif; color:#7f7f7f; font-size: 14px;}*/
#reviewData p.textTitle { font-weight:bold;  padding-top:0px; margin:0px;}
#reviewData p.textDate { font-style:italic;  padding-top:6px; margin:0px;}
#reviewData p.textText { padding-top:3px; margin:0;px}
.successResponce{ margin-top:3px; font-size: 14px;}
.failedResponce{margin-top:3px; font-size: 14px;}
#view-reviews{font-size: 14px;}
#buttonFormAdd{ cursor: pointer;
    font-size: 14px;
    margin-bottom: 0;
    margin-right: 0;
    position: absolute;
    right: 17px;
    width: 150px;
	color:#404040;}
#buttonFormAdd u:hover {text-decoration:none;}
#buttonFormRem{ cursor: pointer;
    font-size: 14px;
    margin-bottom: 0;
    margin-right: 0;
    position: absolute;
    right: 14px;
    width: 120px;
	color:#404040;}
#buttonFormRem u:hover {text-decoration:none;}
#form1{margin-left:0px; margin-top:0x; font-size:14px;}
#form1 strong{color:#7f7f7f; font-size: 14px;}
#submit-form{width:64px; height:25px; margin-left:0px;text-align:center;}
.inputa{ width:180px;}
#reset-form{width:80px; height:25px;}
#postText{height:43px; width:180px;}
#reviewData{margin-top:1px; width:97%;}
#reviewData ul.reviewData{list-style:none; padding-left:0px;}
textarea{resize:none; height:33px;}
#buttonreset{position:absolute; top:148px; right:0; text-decoration:underline; cursor:pointer;}
#buttonreset:hover{text-decoration:none;}
#addForm{ font-size:14px;}
@media screen and (max-width: 720px){
.inputa{ width:100%;}
#postText{width:100%;height:22px}
}

</style>

<script type="text/javascript">
$(document).ready(function(){
	$("#addForm").hide();
	$("#successResponce").hide();
	$("#failedResponce").hide();
	$("#buttonFormRem").hide();
	$("#loading").hide();
	$("#buttonreset").hide();
	
	$('.scroll-pane').jScrollPane();

	
	$("#buttonreset").live('click', function() {	
			$("#buttonreset").hide();
	return false;
	});	
	
	$("#buttonFormAdd").live('click', function() {	
		$("#buttonFormAdd").toggle();
		$("#buttonFormRem").toggle();
		//$("#scrollbar").hide();
		$("#reviewData").slideToggle(800);	
		$("#addForm").slideToggle(800,function(){
			$('.scroll-pane').jScrollPane();
		});		
		//$('.scrollblock').css('height', '150px');
		

	return false;
	});	
	
	$("#buttonFormRem").live('click', function() {
		$("#buttonFormAdd").toggle();
		$("#buttonFormRem").toggle();
		//$('.scrollblock').css('height', '136px');
		$("#reviewData").slideToggle(800);
		$("#addForm").slideToggle(800,function(){
			$('.scroll-pane').jScrollPane();
		});		
		$("#successResponce").hide();
		$("#failedResponce").hide();
		$(".dragger").toggle();
		$(".dragger_container").toggle();			
	return false;
	});		
	
	
	
	$("#view-reviews").live('click', function() {
	
	window.location.replace("guestbook.htm");
	
	return false;
	});		
	
	$("#submit-form").live('click', function() {
		
		
		var nameUser = $("#nameUser").val();
		var emailuser = $("#emailuser").val();
		var postTitle = $("#postTitle").val();
		var postText = $("#postText").val();
		
		if ( nameUser == '' )
		{
			alert("Please type your name");
			$('#nameUser').focus();
		}
		else if ( emailuser == '' )
		{
			alert("Please type your email");
			$('#emailuser').focus();		
		}
		else if ( postTitle == '' )
		{
			alert("Please type a title for the review");
			$('#postTitle').focus();		
		}
		else if ( postText == '' )
		{
			alert("Please type your review");
			$('#postText').focus();		
		}
		else
		{	
		
			var dataStringAdd = $("form#form1").serialize();
			$("#buttonFormAdd").hide();
		$("#buttonFormRem").hide();
		$("#loading").show();
			
			$.ajax({
				type: "POST",
				url: 'guestbook_post.php?hotel_id=2597',
				//url: 'http://www.greeka.com/redirections/_global/guestbook2/process3.php?hotel_id=386',
				data: dataStringAdd,
				cache: false,
				success: function(htmlResponce){
					
					if (htmlResponce=='ok')
					{
						$("#addForm").hide();
						$("#successResponce").show();
						$("#buttonFormAdd").hide();
						$("#buttonFormRem").hide();	
						$("#loading").hide();
					}
					else
					{
						$("#addForm").hide();
						$("#failedResponce").show();
						$("#failedResponceText").append(htmlResponce);
						$("#buttonFormAdd").hide();
						$("#buttonFormRem").hide();
						$("#loading").hide();
					}
				}
			});	
		}
	return false;
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
        
        	<h1 class="home_title" style="background:url(../images/guestbook_ttl-ger.png) bottom left no-repeat;">GÄSTEBUCH</h1>
            
            <div class="text">
                                                        <div id="buttonFormAdd">
    
                                            <img src="../images/expand.gif" border="0"  style="margin-right:5px; display:inline; cursor:pointer; padding-bottom: 2px; vertical-align: middle;" /><u>Bewertung schreiben</u>
    
                                            </div>
    
                                            <div id="buttonFormRem">
    
                                            <img src="../images/collapse.gif" border="0"  style="margin-right:5px; display:inline; cursor:pointer; padding-bottom: 2px; vertical-align: middle;" /><u>Schließen Form</u>
    
                                            </div>

            
            	<div class="ncontainr" style="height:156px;"> 
                    
                    <div style="margin-left:10px;" class="button2">
    
                                            
    
                                            <div id="loading" >
    
                                            <img src="../images/loading2.gif" border="0"  style="margin-right:3px;" />
    
                                        
    
                                            </div>										
    
                                            
    
                                        </div>	
    
                                        <div id="addForm">
        
                                            <form name="form1" id="form1" method="post" action="" onSubmit="javascript:return vali();">
    
                                            <table class="gtable" border="0" cellpadding="3" cellspacing="3">
    
                                            <tr> 
    
                                            <td><strong>Name: </strong></td>
    
                                            <td class="gCol2"><input type="text" name="name" class="inputa" id="nameUser"></td>
                                            </tr>
    
                                            <tr> 
    
                                            <td><strong>Email: </strong></td>
    
                                            <td class="gCol2"><input type="text" name="email" class="inputa" id="emailuser"><!--<span style="margin-left:3px;">Show email </span><input type="checkbox" name="email2" value="1">--></td>
                                            </tr>
    
                                            <tr> 
    
                                            <td><strong>Titel des Beitrags: </strong></td>
    
                                            <td class="gCol2"><input type="text" name="title" class="inputa" id="postTitle"></td>
                                            </tr>
    
                                            <tr> 
    
                                            <td><strong>Beitrag: </strong></td>
    
                                            <td class="gCol2"><textarea name="post" id="postText" cols="20" style="font-size:13px;" rows="4" wrap="VIRTUAL"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <input name="hotelname" type="hidden" value="Rania">
                                                
                                                <input name="location" type="hidden" value="mykonos">
                                                
                                                <input name="mygroup" type="hidden" value="cyclades">
                                            </td>
                                            
											<td align="left">
                                              	<input name="submit" type="submit" id="submit-form" value="Einreichen" >
                                            	<input type="reset" name="Reset" id="reset-form" value="Rücksetzen">
                                            </td>
                                            </tr>
                                            </table>
    
                                           
    
                                          
    
                                          </form>
    
                                        
    
                                        </div>
    
                                        <div id="reviewData">
    										<p>
                                            <?php
    
                                            if ($data!='')
    
                                            {
    
                                            ?>
    
    
    
                                                
    
                                                <ul class="reviewData" id="reviewsHolder">
    
                                                <?php
    
                                                if ($data['guestbook_post'][1]!='')
    
                                                {
    
                                                    foreach ($data['guestbook_post'] as $post)
    
                                                    {
    
                                                ?>
    
                                                    <li>
    
                                                        <p class="textTitle"><?php echo utf8_decode($post['title']);?></p>
    
                                                        <p class="textDate"><?php echo utf8_decode($post['name']);?> wrote on <?php echo date("M d, Y H:i", utf8_decode($post['date']));?>:</p>
    
                                                        <p class="textText"><?php echo nl2br(stripslashes(utf8_decode($post['post'])));?></p>	
    
                                                    </li><br />
    
                                                <?php
    
                                                    }
    
                                                }
    
                                                else
    
                                                {
    
                                                ?>
    
                                                <li>
    
                                                    <p class="textTitle"><?php echo utf8_decode($data['guestbook_post']['title']);?></p>
    
                                                    <p class="textDate">Date of post: <?php echo date("M d, Y H:i", utf8_decode($data['guestbook_post']['date']));?>
    
                                                    <span style="float:right; display:inline">Author: <?php echo utf8_decode($data['guestbook_post']['name']);?></span>
    
                                                    </p>
    
                                                    <p class="textText"><?php echo nl2br(utf8_decode($data['guestbook_post']['post']));?></p>
    
                                                </li><br />
    
                                                <?php
    
                                                }
    
                                                ?>
    
                                                </ul>
    
                                            
    
                                            
    
                                            <?
    
                                            }
    
                                            else // if hotel has no posts
    
                                            {
    
                                            ?>
    
                                            No reviews found
    
                                            <?
    
                                            }// end if ($data!='')
    
                                            ?>
    									</p>
                                        </div>
    
                                        
    
    
    
                                        
    
                                        <div id="successResponce">
    <p>
                                        
    
                                            <b>Thank you! </b>Your post has been successfully submitted. It must first be approved by the administrator before appearing online.<br />
    
                                            <a href="" id="view-reviews">Back to reviews</a>
    </p>
                                        </div>
    
                                        <div id="failedResponce">
    
                                        <p>There has been an error with your post. Please fill in the form and try to submit your post again.</p>
    
                                            <div id="failedResponceText" style="color:#FF0000;"></div>
    
                                            <p><a href="" id="view-reviews">Back to reviews</a></p>
    
                                        </div>
    
                                        
    
    
                </div>                    
				
            
            </div>
            
            
        
        </div>
        
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
