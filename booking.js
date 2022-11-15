function isValidEmailAddress(emailAddress) {

	var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);



	return pattern.test(emailAddress);

}



	$(window).resize(function(){

		if($(window).width() < 630){

			$( "#ArrivalDate" ).datepicker('option', 'numberOfMonths', 1);
			$( "#DepartureDate" ).datepicker('option', 'numberOfMonths', 1);

		}else{

			$( "#ArrivalDate" ).datepicker('option', 'numberOfMonths', 2);
			$( "#DepartureDate" ).datepicker('option', 'numberOfMonths',  2);

		}


}); 


function stateChange()

{

	if (xmlHttp.readyState == 4) {

			

			var result=xmlHttp.responseText;

			

			document.getElementById("Phone").value=result;

			document.getElementById("CellPhone").value=result;

			document.getElementById("Fax").value=result;

			}

}

jQuery(document).ready(function(e) {



    jQuery('#formBooking').bind('submit', function(e) 

	{

		e.preventDefault();

		jQuery('#error').html('');

		

		if(jQuery('#FirstName').val() == '')

		{

			jQuery('#error').html($('.vali_first').val());

			jQuery('#FirstName').focus();

			return false;

		}

		

		if($('#LastName').val() == '')

		{

			jQuery('#error').html($('.vali_last').val());

			jQuery('#LastName').focus();

			return false;

		}

		

		if(jQuery('#Email').val() == '' || isValidEmailAddress(jQuery('#Email').val()) != true)

		{

			jQuery('#error').html($('.vali_email').val());

			jQuery('#Email').focus();

			return false;

		}

				

		

		jQuery.ajax(

		{

			url : 'actionBooking.php',

			type: "POST",

			data: jQuery("#formBooking").serialize(),

			success:function(data, textStatus, jqXHR)

			{

				//data: return data from server

				if(data == 'ok')

				{

					$('#wp-bookingForm').hide();

					$('#wp-bookingForm-error').show();

				}

				else

				{

					$('#error').html('Error in submitting form: '+data).show();

				}

			},

			error: function(jqXHR, textStatus, errorThrown)

			{

				//if fails   

				console.log('faile');  

				console.log(textStatus);  

			}

		});

	});			

});	



$(document).ready(function()

{



	$(function() {

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

			buttonImage: "images/icon_calendar.png",

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

				$("#DepartureDate").focus().datepicker('open');

					

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

			buttonImage: "images/icon_calendar.png",

			numberOfMonths: noOfMonths,

			stepMonths: 2,

			maxDate:31,

			minDate: noOfMonths	,

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

	});

	$( "#ArrivalDate, #DepartureDate" ).bind('click',function(){

		var arrivalDate = $("#ArrivalDate").datepicker("getDate");

	});

	function DatePickedFrom(durDays, fromField, toField)	{

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

});

