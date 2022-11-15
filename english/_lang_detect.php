<?php
error_reporting(0);
$currentPage = $_SERVER['PHP_SELF'];
$lang_seek = strpos($currentPage, 'french'); // search for greek language in current page
if ($lang_seek===false)
{ 
$language = 'en'; 
$extension = ''; 
} 
else 
{ 
$language = 'fr'; 
$extension = '-fr'; 
}
define(LANGUAGE, $language );
define(EXTENSIONPAGE, $extension );


if ($language=='en')
{ 
$CssFile = "style.css";
$code = "+30 ";
$en = "active";
$gr = "";
$enext = "#";
$grext = "index-gr.htm";
$weather = "Weather";
} 
if ($language=='fr') 
{ 
$CssFile = "style-fr.css";
$code = " ";
$gr = "active";
$en = "";
$enext = "index.htm";
$grext = "#";
$weather = "Météo";
}


//
// menu css
//
$index_seek = 		strpos($currentPage, 'index');
$accommodation_seek = 		strpos($currentPage, 'hotels/');
$suite_seek = 		strpos($currentPage, 'hotels/suite');
$loft_seek = 		strpos($currentPage, 'hotels/loft');
$superior_seek = 		strpos($currentPage, 'hotels/superior-room');
$royal_seek = 		strpos($currentPage, 'hotels/royal-suite');

$restaurant_seek = strpos($currentPage, 'restaurant');

$activities_seek = 		strpos($currentPage, 'activities');
$spa_seek = 		strpos($currentPage, 'spa');
$water_seek = 		strpos($currentPage, 'activities/watersports-activities');
$fitness_seek = 		strpos($currentPage, 'activities/fitness-center');

$diving_seek = 		strpos($currentPage, 'diving-centre');

$info_seek = 		strpos($currentPage, 'mauritius');
$facilities_seek = strpos($currentPage, 'facilities');
$gallery_seek = 		strpos($currentPage, 'gallery');

$spa_seek = 		strpos($currentPage, 'spa');
$diving_seek = 		strpos($currentPage, 'diving-centre');

$guestbook_seek = 		strpos($currentPage, 'guestbook');
$rates_seek = 		strpos($currentPage, 'rates');
$contact_seek = 		strpos($currentPage, 'contact');



if ($accommodation_seek===false && $suite_seek===false && $loft_seek===false && $superior_seek===false && $royal_seek===false)		
								{ $accommodation_active = 'menu2'; } 		else { $accommodation_active = 'menu2active'; $dot = '../';$dot1 ='../../';}
if ($facilities_seek===false)		{ $facilities_active = 'menu3'; } 		else { $facilities_active = 'menu3active';$dot = ''; $dot1 ='../';}								
if ($restaurant_seek===false)		{ $restaurant_active = 'menu4'; } 		else { $restaurant_active = 'menu4active';$dot = '';  $dot1 ='../';}
if ($activities_seek===false && $water_seek===false && $fitness_seek===false)		{ $activities_active = 'menu5'; } 		else { $activities_active = 'menu5active';$dot = '../';$dot1 ='../../'; }
if ($info_seek===false)		{ $info_active = 'menu6'; } 		else { $info_active = 'menu6active';$dot = '';  $dot1 ='../';}

if ($gallery_seek===false)		{ $gallery_active = 'menu7'; } 		else { $gallery_active = 'menu7active';$dot = ''; $dot1 ='../'; }

if ($spa_seek===false)	{ $spa_active = 'menu8'; } 		else { $spa_active = 'menu8active';$dot = ''; $dot1 ='../';}
if ($diving_seek===false)		{ $diving_active = 'menu9'; } 		else { $diving_active = 'menu9active';$dot = '';  $dot1 ='../';}

//if ($guestbook_seek===false)	{ $guestbook_active = 'menu8'; } 		else { $guestbook_active = 'menu8active'; }
//if ($rates_seek===false)		{ $rates_active = 'menu9'; } 		else { $rates_active = 'menu9active'; }
if ($contact_seek===false)	{ $contact_active = 'menu10'; } 		else { $contact_active = 'menu10active';$dot = '';  $dot1 ='../';}

if ($index_seek===false)		{ $index_active = 'menu1'; } 		else { if($accommodation_seek===false && $activities_seek===false){$index_active = 'menu1active'; $dot = ''; $dot1 ='../';}else{$index_active = 'menu1';}}

if ($guestbook_seek===false && $rates_seek===false && $contact_seek===false)		{  } 		else {$dot = '';$dot1 ='../'; }




// Translations
$txt_file = $dot.'languages/text_'.LANGUAGE.'.txt';
$file_handle = fopen($txt_file, "rb");
while (!feof($file_handle) )
{
$line_of_text = fgets($file_handle);

	if ($line_of_text!="")
	{
		$parts = explode('@@', $line_of_text);
		$language_array_var = $parts[0];
		$language_array_var_text = $parts[1];
		$text_content[$language_array_var] = trim(str_replace("\n", "", $language_array_var_text));
	}
}
fclose($file_handle);

?>