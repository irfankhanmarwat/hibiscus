<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>

<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />

<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/supersized.3.2.5.min.js"></script>

<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<!--NewWindow() funtions for twitter and facebook-->
<script type="text/javascript">
<!--
function NewWindow(mypage, myname, w, h, scroll) {
 var winl = (screen.width - w) / 2;
 var wint = (screen.height - h) / 2;
 winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable = no'
 win = window.open(mypage, myname, winprops)
 if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
 window.open(theURL,winName,features);
}
//-->
</script>

<!--Weather-->
<script src="js/jquery.simpleWeather.js" charset="utf-8"></script>
<script type="text/javascript">
		    $.simpleWeather({
            zipcode: 'MPXX0004',
            unit: 'c',
            success: function(weather) {
                    html = '<?php echo $weather;  ?>:';
                    html += '<img src="'+weather.thumbnail+'" align="absmiddle">';
					html += weather.temp+'&deg; '+weather.units.temp;
                    $("#weather").html(html);
            },
            error: function(error) {
                    $("#weather").html("<p>"+error+"</p>");
            }
    });
</script>

<link rel="stylesheet" type="text/css" href="colorbox.css" />
<script type="text/javascript" src="colorbox/jquery.colorbox.js"></script>
<script>
	$(document).ready(function () {
		$(".image-map").colorbox({maxHeight: window.innerHeight});
		$(".toura").colorbox({iframe:true, innerWidth:950, innerHeight:570});
		$(".tourb").colorbox({iframe:true, innerWidth:950, innerHeight:570});
		$(".google-map").colorbox({iframe:true, innerWidth:502, innerHeight:462});
		$("a[rel='lightbox[hotel]']").colorbox();
		$("a[rel='lightbox[hotel2]']").colorbox({iframe:true, innerWidth:560, innerHeight:315});
		
		$('#pauseslide').live('click',function(){
			api.playToggle();
			$(this).find('i').toggleClass('fa-play');
			$(this).find('i').toggleClass('fa-pause');
		});

	});
</script>
<script type="text/javascript">
$(document).ready(function() {
  $(".ncontainr").mCustomScrollbar();
  $('.fancybox').fancybox();
});
</script>
<script>
	$(document).ready(function(){
		$('.resp_menutrig').click(function(){
			$('.resp_menu').animate({right:0});
		});
		$('.rsp_close').click(function(){
			if($(window).width() > 460){
				$('.resp_menu').animate({right:'-280px'});
			}
			else{
				$('.resp_menu').animate({right:'-600px'});
			}
		});
		if($(window).width() <= 460){
			$('.resp_menu').css('right','-600px');
		}
		
    });
	$(window).resize(function(){
		if($(window).width() > 1024){
			$('.resp_menu').css('right','-280px');
		}
		else{
			$('.resp_menu').css('right','-600px');
		}
	});
</script>