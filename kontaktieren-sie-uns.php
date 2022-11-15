<?php include("_lang_detect.php"); ?>
<?PHP
    $hotel_id = 2597;
    $lang = "german";

//$hotel_id = 1353;

// connect to greeka db
$greeka_connect = mysql_connect("sqlmaster", "greekao", "grahe1WiMdq8");
$db_connect = mysql_select_db("greekao", $greeka_connect) or die("Cannot Connect to Database");
mysql_query("SET NAMES 'utf8'");
/*
ROOM Listing per selected hotel
*/
$roomList = array();

$room_drop_options = '';
$q3 = "SELECT * FROM greekao.hotel_rates WHERE hotel_id ='$hotel_id'";
$r3 = mysql_query($q3, $greeka_connect);
while($row3 = mysql_fetch_assoc($r3))
{
    if ( $row3['room_'.$lang]!='' )
    {
        $roomList[] = stripslashes($row3["room_".$lang]);
    }
    else if ( $row3['room_english']!='' )
    {
        $roomList[] = stripslashes($row3['room_english']);
    }
}
if ( count($roomList)>0 )
{
    foreach ($roomList as $room) { $room_drop_options .= '<option>'.$room.'</option>'; }
}
else
{
    $room_drop_options .= '<option>Single Room</option><option>Double Room</option><option>Triple Room</option> ';
}
/*
COUNTRY Listing
*/

if (getenv("HTTP_CLIENT_IP")) $ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR")) $ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR")) $ip = getenv("REMOTE_ADDR");
else $ip = "UNKNOWN";

$selected_country = '';

if ($ip!="UNKNOWN")
{
    /*
    old
    $numbers = explode (".",$ip);
    $code = ($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]); 

    $select_ip = "SELECT country_name FROM greekao.ip_countries WHERE ip_from<='$code' AND ip_to>='$code' ";
    $run_select_ip = mysql_query($select_ip, $greeka_connect) or die(mysql_error());
    while ($row_ip = mysql_fetch_array($run_select_ip))
    {
    $selected_country = $row_ip['country_name'];
    }
    */
    
    $sql = 'SELECT c.country, c.iso_code_2 FROM ip2nationCountries c,   ip2nation i WHERE i.ip < INET_ATON("'.$ip.'") AND  c.code = i.country ORDER BY i.ip DESC LIMIT 0,1';
    $res = mysql_query($sql); 
    $row1 = mysql_fetch_array($res);

    $selected_country = strtoupper($row1['country']);   
    
}


// create country drop down options
$country_drop_options = '';
$select1 = "SELECT country_name FROM greekao.ip_countries GROUP BY country_name ORDER BY country_name ";
$run1 = mysql_query($select1, $greeka_connect) or die(mysql_error());
while ($row1 = mysql_fetch_array($run1))
{
$country = $row1['country_name'];

    $country_drop_options .= '<option value="'.$country.'" ';
    if (strtolower($country)==strtolower($selected_country)) { $country_drop_options .= 'selected="selected"';} 
    $country_drop_options .= ' >'.$country.'</option>';

}
$country_drop_options .= '<option value=" ">';
for ($i=1;$i<=68;$i++) { $country_drop_options .= "&nbsp;"; }
$country_drop_options .= '</option>';

$country_drop_options .= '<option value="Unknown" ';
if ($selected_country=="") { $country_drop_options .= 'selected="selected"';} 
$country_drop_options .= '>Not listed...</option>';
?>     

<?php

$country_name = $_GET['country_code'];
$phone_code = '';

$select_code = "SELECT * FROM country_codes WHERE country_name='$country_name'  ";
$run_select_code = mysql_query($select_code) or die(mysql_error());
while ($row_code = mysql_fetch_array($run_select_code))
{
$phone_code = $row_code['phone_code'];
}


?>
<?php
    include("bookingform_scripts.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hibiscus Beach Resort und Spa in Mauritius, Indischer Ozean, Pereybere - KONTAKTIEREN SIE UNS </title>
<meta name="description" content="Willkommen im Hibiscus Beach Resort und Spa auf der Insel Mauritius. Das im Norden von Mauritius in dem kleinen Dorf Pereybere und im Herzen der schönsten Regionen der Insel gelegene Hotel Hibiscus Beach Resort, Spa und Tauchclub bietet unseren Gästen eine Oase des Friedens und der Ruhe in einer warmen und intimen Atmosphäre.">
<meta name="keywords" content="KONTAKTIEREN SIE UNS, Hibiscus Beach Resort und Spa, mauritius hotel, mauritius zimmer, mauritius superior zimmer, mauritius junior suiten, mauritius senior suiten, mauritius royal suiten, pereybere hotels,  pereybere zimmer, pereybere superior zimmer, pereybere junior suiten, pereybere senior suiten, pereybere royal suiten, indischer ozean zimmer, indischer ozean superior zimmer, indischer ozean junior suiten, indischer ozean senior suiten, indischer ozean royal suiten, urlaub, pereybere, mauritius, indischer ozean, inseln, indischer ozean inseln"><meta name="robots" content="all">

<?php include("_scripts.php"); ?>
<script type="text/javascript" src="booking.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $dot; ?>../css/jquery-ui-1.10.3.custom1.css" />
<script type="text/javascript" src="<?php echo $dot; ?>../js/jquery-ui-1.10.3.custom.min.js"></script>
<script>
$(document).ready(function(){

    function DatePickedFrom(durDays, fromField, toField)    {
        var arrivalDate = $("#"+fromField).datepicker("getDate"); // the "From" date    
        var minDepartureDate = new Date(arrivalDate);
        var maxDepartureDate = new Date(arrivalDate);
        var minAllowedDate = new Date(arrivalDate);
        minDepartureDate.setDate(arrivalDate.getDate() + durDays); // +xxx days from selected "From" date 
        maxDepartureDate.setDate(arrivalDate.getDate() + 31); // +365 days from seleced "From: date
        minAllowedDate.setDate(arrivalDate.getDate() + durDays); // allow minimum of +1 day from "From" date        
        $("#"+toField).datepicker('option', 'minDate', minAllowedDate);
        $("#"+toField).datepicker('option', 'maxDate', maxDepartureDate);
        //$("#"+toField).datepicker("setDate", minDepartureDate );      
        //departureDate = $("#"+toField).datepicker("getDate"); 
    };


    var noOfMonths ;
    if($(window).width() < 630){
        noOfMonths = 1;
    }else{
        noOfMonths = 2;
    }
    $( "#ArrivalDate" ).datepicker({
        minDate: 1,
        showOn: "both",
        maxDate:730,
        numberOfMonths: noOfMonths,
        stepMonths: noOfMonths,
        buttonImage: "<?php echo $dot; ?>../images/icon_calendar.png",
        onSelect: function(dateText, inst) 
        { 
            DatePickedFrom(1, 'ArrivalDate', 'DepartureDate'); // number of days to create default duration             
            var arrivalDate = $("#ArrivalDate").datepicker("getDate");      
            var departureDate = $("#DepartureDate").datepicker("getDate");
            var seconds = Math.floor((departureDate - (arrivalDate))/1000);
            var minutes = Math.floor(seconds/60);
            var hours = Math.floor(minutes/60);
            var days = Math.floor(hours/24);
            $('#TotalNights').val(days);
            $('#nightCount').html($('#TotalNights').val());
            if(parseInt(days) === 1){
                $('.nightText').show();
                $('.nightsText').hide();
            }else{
                $('.nightText').hide();
                $('.nightsText').show();
            }                   
        },
        onClose:function(dateText, inst){               
            $("#DepartureDate").focus().trigger('open');
        },
        beforeShow:function(){
            $('.ssnCk').prop('disabled',true);
            $('.ssnCkWrap').show();
            $('.ssnCk').css({'opacity':'0.5'}); 
            $('.ssnCk').next().css({'opacity':'0.5'}); 
        }
    });

    $( "#ArrivalDate" ).datepicker("setDate", new Date());
    $( "#DepartureDate" ).datepicker({
        showOn: "both",
        buttonImage: "<?php echo $dot; ?>../images/icon_calendar.png",
        numberOfMonths: noOfMonths,
        stepMonths: 2,
        maxDate:31,
        minDate: noOfMonths ,
        beforeShow:function(){
            $('.ssnCk').prop('disabled',true);
            $('.ssnCkWrap').show();
            $('.ssnCk').css({'opacity':'0.5'}); 
            $('.ssnCk').next().css({'opacity':'0.5'}); 
        },
        onSelect: function(dateText, inst) 
        {
            var arrivalDate = $("#ArrivalDate").datepicker("getDate");      
            var departureDate = $("#DepartureDate").datepicker("getDate");
            var seconds = Math.floor((departureDate - (arrivalDate))/1000);
            var minutes = Math.floor(seconds/60);
            var hours = Math.floor(minutes/60);
            var days = Math.floor(hours/24);
            $('#TotalNights').val(days);
            $('#nightCount').html($('#TotalNights').val());
            if(parseInt(days) === 1){
                $('.nightText').show();
                $('.nightsText').hide();
            }else{
                $('.nightText').hide();
                $('.nightsText').show();
            }
        }
    });


        $( "#DepartureDate" ).datepicker("setDate", new Date());
        $("#ArrivalDate").attr( 'readOnly' , 'true' );
        $("#DepartureDate").attr( 'readOnly' , 'true' );

        $( "#ArrivalDate, #DepartureDate" ).live('blur',function(){
            var arrivalDate = $("#ArrivalDate").datepicker("getDate");
        });
});
</script>
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
        
        <div class="hide" ></div>
        <div class="show" ></div>
        
         <div id="content" >
        
        	<h1 class="home_title" style="background:url(../images/contact_ttl-ger.png) bottom left no-repeat;">KONTAKTIEREN SIE UNS</h1>
            <h2 style="display:none">KONTAKTIEREN SIE UNS</h2>
            
            <div class="text">
            
            	<div class="ncontainr">  
							
                	<div class="scrollheight">
                  
              <div id="wp-bookingForm">
                            <form method="POST" name="formBooking" id="formBooking" action="actionBooking.php">

			<input type="hidden" value="<?php echo stripslashes($translations['vali_first']);?>" class="vali_first" />

            <input type="hidden" value="<?php echo stripslashes($translations['vali_last']);?>" class="vali_last" />

            <input type="hidden" value="<?php echo stripslashes($translations['vali_phone']);?>" class="vali_phone" />

            <input type="hidden" value="<?php echo stripslashes($translations['vali_cell']);?>" class="vali_cell" />

            <input type="hidden" value="<?php echo stripslashes($translations['vali_code']);?>" class="vali_code" />

            <input type="hidden" value="<?php echo stripslashes($translations['vali_email']);?>" class="vali_email" />

	<div class="col1">

    	<div class="row">

        	<input style="float:left; " placeholder="Arrival" type="text" name="ArrivalDate" id="ArrivalDate" class="input1 input-arrival"> 
            <div style="clear:both;margin-bottom: 12px;"></div>
        </div>

        <div class="row">
            <input placeholder="Departure" type="text" style="float:left; clear: both;" name="DepartureDate" id="DepartureDate" class="input1 input-departure">

            <span class="total-nights" style="float:left;"><input  style="" onchange="update_depart_as_nights(this.value)" size="1" id="TotalNights" type="hidden" name="TotalNights" value="1" /><span style="float:left; clear:both;"><span id="nightCount">1</span> <span class="nightText">Night</span><span class="nightsText" style="display:none;">Nights</span></span></span>
            <div style="clear:both;"></div>
        </div>

        <div class="row"><!--<input placeholder="Adult" type="text" name="AdultsNumber" id="AdultsNumber" class="input1 input-departure" >--><select size="1" id="AdultsNumber" name="AdultsNumber" class="select input-departure" style="margin-right:4px; margin-bottom:6px;">

         <option value="" selected="selected"><?php echo stripslashes($translations['adults_1']);?></option>

            <option value="1">1</option>

            <option value="2">2</option>

            <option value="3">3</option>

            <option value="4">4</option>

            <option value="5">5</option>

            <option value="6">6</option>

            <option value="7">7</option>

            <option value="8">8</option>

            <option value="9">9</option>

            <option value="10">10</option>

          </select><select size="1" id="ChildrenNumber" name="ChildrenNumber" class="select input-departure">

      <option value="" selected="selected"><?php echo stripslashes($translations['children_1']);?></option>

            <option value="0">0</option>

            <option value="1">1</option>

            <option value="2">2</option>

            <option value="3">3</option>

            <option value="4">4</option>

            <option value="5">5</option>

            <option value="6">6</option>

            <option value="7">7</option>

            <option value="8">8</option>

            <option value="9">9</option>

            <option value="10">10</option>

          </select></div>

        <div class="row"><input placeholder="<?php echo stripslashes($translations['children_age_1']);?>" type="text" name="age" id="age" class="input" > </div>

        <div class="row"><!--<input placeholder="Type of Accommodation" type="text" name="AccommodationType" id="AccommodationType" class="input" >-->

<select id="AccommodationType" name="AccommodationType" size="1" class="select">

	<option value="" selected="selected">
	<?php echo stripslashes($translations['room_type']);?>...</option>
        <?php 
                     echo $room_drop_options;
        ?>

</select> </div>

        <div class="row"><input placeholder="<?php echo stripslashes($translations['form_first_name']);?>" type="text" name="FirstName" id="FirstName" class="input required" re > </div>

        <div class="row"><input placeholder="<?php echo stripslashes($translations['form_last_name']);?>" type="text" name="LastName" id="LastName" class="input required" > </div>

        <div class="row"><input placeholder="<?php echo stripslashes($translations['form_email']);?>" type="text" name="Email" id="Email" class="input required" > </div>

        <div class="row"><input placeholder="<?php echo stripslashes($translations['form_phone']);?>" type="text" name="Phone" id="Phone" class="input"> </div>

    </div>

	<div class="col2">

        <div class="row"><input placeholder="<?php echo stripslashes($translations['form_cellphone']);?>" type="text" name="CellPhone" id="CellPhone" class="input"> </div>

        <div class="row rem"><input placeholder="<?php echo stripslashes($translations['form_fax']);?>" type="text" name="Fax" id="Fax" class="input"> </div>

        <div class="row"><!--<input placeholder="Country" type="text" name="StateCountry" id="StateCountry" class="input" >--> <select name="StateCountry" id="StateCountry" class="select">

<?php echo $countries_list;?></option>

<option value="Unknown">Not  listed...</option>

</select></div>

        <div class="row rem"><input placeholder="<?php echo stripslashes($translations['form_town']);?>" type="text" name="Town" id="Town" class="input" > </div>

        <div class="row rem"><input placeholder="<?php echo stripslashes($translations['form_address']);?>" type="text" name="Address" id="Address" class="input" > </div>

        <div class="row rem"><input placeholder="<?php echo stripslashes($translations['form_zip_code']);?>" type="text" name="ZipCode" id="ZipCode" class="input" > </div>

        <div class="row"><textarea placeholder="<?php echo stripslashes($translations['additional_comments']);?>" name="Comments" id="Comments" class="textarea"></textarea></div>

         <div class="row2"><div id="error"></div></div>

         <input name="hotel_id" id="hotel_id" type="hidden" value="<?php echo $hotel_id; ?>" >

       <div class="row2"><input type="SUBMIT" value="<?php echo stripslashes($translations['submit_form']);?>" name="post" class="submit"></div>

    </div>

    <hr style="clear:both; height:40px; visibility:hidden;"/>

    

</form>
</div>

<div id="wp-bookingForm-error">



        <div id="bookingText">Your request has been submitted successfully!<br>You will be contacted as soon as possible<br>Thank you!</div>

        

        <div id="links">

        

        <ul>

        

        <li><img src="http://www.greeka.com/redirections/_global/images/ship_icon.png" width="20" height="20" align="absmiddle" /> <a href="http://www.ferriesingreece.com/booking-start.php?aff=greeka" target="_blank" rel="nofollow">Ferry Tickets</a></li>

        

        <li><img src="http://www.greeka.com/redirections/_global/images/flight.png" width="20" height="20" align="absmiddle" /> <a href="http://www.greeka.com/banner_redirection.php?t=1&i=0&b=g&h=0" target="_blank" rel="nofollow">Flights</a></li>

        

        <li><img src="http://www.greeka.com/redirections/_global/images/weather.png" width="20" height="20" align="absmiddle" /> <a href="http://www.wunderground.com/global/GR.html" target="_blank" rel="nofollow">Weather</a></li>

        

        </ul>

        

        </div>

	</div>

					</div>                    
				
            
            </div>
            
            
        
        </div>
        </div>
        <?php include("_footer.php"); ?>
    
    </div>

</body>
</html>
