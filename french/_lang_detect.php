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

// Translations
/*$txt_file = 'languages/text_'.LANGUAGE.'.txt';
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

*/

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
$index_seek = 		strpos($currentPage, 'index.php');
$accommodation_seek = 		strpos($currentPage, 'hebergement');
$suite_seek = 		strpos($currentPage, 'hebergement/suite');
$loft_seek = 		strpos($currentPage, 'hebergement/loft');
$superior_seek = 		strpos($currentPage, 'hebergement/chamber-superieure');
$royal_seek = 		strpos($currentPage, 'hebergement/suite-royale');

$restaurant_seek = strpos($currentPage, 'restaurant');

$activities_seek = 		strpos($currentPage, 'activites');
$spa_seek = 		strpos($currentPage, 'spa');
$water_seek = 		strpos($currentPage, 'activites/aquatiques-sportives');
$fitness_seek = 		strpos($currentPage, 'activites/centre-fitness');

$diving_seek = 		strpos($currentPage, 'centre-plongee');

$info_seek = 		strpos($currentPage, 'maurice');
$facilities_seek = strpos($currentPage, 'equipements');
$gallery_seek = 		strpos($currentPage, 'gallerie');

$spa_seek = 		strpos($currentPage, 'spa');

$guestbook_seek = 		strpos($currentPage, 'livre-dor');
$rates_seek = 		strpos($currentPage, 'tarifs');
$contact_seek = 		strpos($currentPage, 'nous-contacter');


if ($accommodation_seek===false && $suite_seek===false && $loft_seek===false && $superior_seek===false && $royal_seek===false)		
								{ $accommodation_active = 'menu2'; } 		else { $accommodation_active = 'menu2active'; $dot = '../';$dot1 ='../../';}
if ($facilities_seek===false)		{ $facilities_active = 'menu3'; } 		else { $facilities_active = 'menu3active';$dot = ''; $dot1 ='../';}								
if ($restaurant_seek===false)		{ $restaurant_active = 'menu4'; } 		else { $restaurant_active = 'menu4active';$dot = '';  $dot1 ='../';}
if ($activities_seek===false && $water_seek===false && $fitness_seek===false)		{ $activities_active = 'menu5'; } 		else { $activities_active = 'menu5active';$dot = '../';$dot1 ='../../'; }
if ($info_seek===false)		{ $info_active = 'menu6'; } 		else { $info_active = 'menu6active';$dot = '';  $dot1 ='../';}

if ($gallery_seek===false)		{ $gallery_active = 'menu7'; } 		else { $gallery_active = 'menu7active';$dot = ''; $dot1 ='../'; }

if ($spa_seek===false)	{ $spa_active = 'menu8'; } 		else { $spa_active = 'menu8active';$dot = ''; $dot1 ='../';}
if ($diving_seek===false)		{ $diving_active = 'menu9'; } 		else { $diving_active = 'menu9active';$dot = '';  $dot1 ='../';}

if ($guestbook_seek===false)	{ $guestbook_active = 'menu8'; } 		else { $guestbook_active = 'menu8active'; $dot = '';  $dot1 ='../';}
if ($rates_seek===false)		{ $rates_active = 'menu9'; } 		else { $rates_active = 'menu9active'; $dot = '';  $dot1 ='../';}
if ($contact_seek===false)	{ $contact_active = 'menu10'; } 		else { $contact_active = 'menu10active';$dot = '';  $dot1 ='../';}

if ($index_seek===false)		{ $index_active = 'menu1'; } 		else { if($accommodation_seek===false && $activities_seek===false){$index_active = 'menu1active'; $dot = ''; $dot1 ='../';}else{$index_active = 'menu1';}}
?>