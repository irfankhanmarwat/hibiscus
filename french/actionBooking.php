<?php
/*
some anti-spam
*/
$bad_array = array("http", "www.", "href", "</a>");
foreach ($_POST as $key=>$val)
{

		foreach ($bad_array as $badwords)
		{
		$pos="";
		$pos = strpos($val, $badwords);
	
			if ($pos!==false)
			{
				echo 'spam error';
				exit();
			}
		}
}

/*
Array
(
	[ArrivalDate] => 05-06-2014
	[DepartureDate] => 06-06-2014
    [TotalNights] => 1
	[AdultsNumber] => 2
	[ChildrenNumber] => 1	
	[age] =>
	[AccommodationType] => Please select...
	[FirstName] => δοκιμη
	[LastName] => δοκιμη
	[Email] => kzar99@gmail.com
	[Phone] => 0030  
	[CellPhone] => 0030  
	[Fax] => 0030  
    [StateCountry] => GREECE
    [Town] => 
    [Address] => 
    [ZipCode] => 
    [Comments] => 
    [hotel_id] => 1353
    
    
)
*/

/*
post data
*/
$ArrivalDate = '';
$DepartureDate = '';
$TotalNights = '';
$AdultsNumber = '';
$ChildrenNumber = '';
$age = '';
$AccommodationType = '';
$FirstName = '';
$LastName = '';
$Email = '';
$Phone = '';
$CellPhone = '';
$Fax = '';
$StateCountry = '';
$Town = '';
$ZipCode = '';
$Comments = '';
$hotel_id = 0;
$Address = '';


if ( isset($_POST['ArrivalDate']) )			{ $ArrivalDate = trim($_POST['ArrivalDate']); }
if ( isset($_POST['DepartureDate']) )		{ $DepartureDate = trim($_POST['DepartureDate']); }
if ( isset($_POST['TotalNights']) )			{ $TotalNights = (int)trim($_POST['TotalNights']); }
if ( isset($_POST['AdultsNumber']) )		{ $AdultsNumber = (int)trim($_POST['AdultsNumber']); }
if ( isset($_POST['ChildrenNumber']) )		{ $ChildrenNumber = (int)trim($_POST['ChildrenNumber']); }
if ( isset($_POST['age']) )					{ $age = trim($_POST['age']); }
if ( isset($_POST['AccommodationType']) )	{ $AccommodationType = trim($_POST['AccommodationType']); }
if ( isset($_POST['FirstName']) )	 		{ $FirstName = trim($_POST['FirstName']); }
if ( isset($_POST['LastName']) )	 		{ $LastName = trim($_POST['LastName']); }
if ( isset($_POST['Email']) )	 			{ $Email = trim($_POST['Email']); }
if ( isset($_POST['Phone']) )	 			{ $Phone = trim($_POST['Phone']); }
if ( isset($_POST['CellPhone']) )	 		{ $CellPhone = trim($_POST['CellPhone']); }
if ( isset($_POST['Fax']) )	 				{ $Fax = trim($_POST['Fax']); }
if ( isset($_POST['StateCountry']) )	 	{ $StateCountry = trim($_POST['StateCountry']); }
if ( isset($_POST['Town']) )	 			{ $Town = trim($_POST['Town']); }
if ( isset($_POST['ZipCode']) )	 			{ $ZipCode = trim($_POST['ZipCode']); }
if ( isset($_POST['Comments']) )	 		{ $Comments = trim($_POST['Comments']); }
if ( isset($_POST['hotel_id']) )			{ $hotel_id = (int)trim($_POST['hotel_id']); }
if ( isset($_POST['Address']) )	 			{ $Address = trim($_POST['Address']); }

$ip = $_SERVER['REMOTE_ADDR'];


/*
url-ify the data for the POST
*/
$fields_string = '';
$fields_string .= 'ArrivalDate='.urlencode($ArrivalDate);
$fields_string .= '&DepartureDate='.urlencode($DepartureDate);
$fields_string .= '&TotalNights='.urlencode($TotalNights);
$fields_string .= '&AdultsNumber='.urlencode($AdultsNumber);
$fields_string .= '&ChildrenNumber='.urlencode($ChildrenNumber);
$fields_string .= '&age='.urlencode($age);
$fields_string .= '&AccommodationType='.urlencode($AccommodationType);
$fields_string .= '&FirstName='.urlencode($FirstName);
$fields_string .= '&LastName='.urlencode($LastName);
$fields_string .= '&Email='.urlencode($Email);
$fields_string .= '&Phone='.urlencode($Phone);
$fields_string .= '&CellPhone='.urlencode($CellPhone);
$fields_string .= '&Fax='.urlencode($Fax);
$fields_string .= '&StateCountry='.urlencode($StateCountry);
$fields_string .= '&Town='.urlencode($Town);
$fields_string .= '&ZipCode='.urlencode($ZipCode);
$fields_string .= '&Comments='.urlencode($Comments);
$fields_string .= '&hotel_id='.urlencode($hotel_id);
$fields_string .= '&Address='.urlencode($Address);
$fields_string .= '&ip='.urlencode($ip);



/*
curl section
*/
$url = 'http://www.greeka.com/redirections/_global/subform_wp.php';

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_POST, 26);
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
$result = curl_exec( $ch );
curl_close($ch);


echo $result;
?>