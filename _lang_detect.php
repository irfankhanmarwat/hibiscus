<?php
error_reporting(0);
$currentPage = $_SERVER['PHP_SELF'];
$lang_seek = strpos($currentPage, '-fr.php'); // search for greek language in current page
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
$txt_file = 'languages/text_'.LANGUAGE.'.txt';
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
$accommodation_seek = 		strpos($currentPage, 'accommodation');
$senior_seek = 		strpos($currentPage, 'senior-suite');
$junior_seek = 		strpos($currentPage, 'junior-suite');
$superior_seek = 		strpos($currentPage, 'superior-room');
$royal_seek = 		strpos($currentPage, 'royal-suite');

$restaurant_seek = strpos($currentPage, 'restaurant');

$activities_seek = 		strpos($currentPage, 'activities');
$spa_seek = 		strpos($currentPage, 'spa');
$water_seek = 		strpos($currentPage, 'watersports-activities');
$fitness_seek = 		strpos($currentPage, 'fitness-center');

$diving_seek = 		strpos($currentPage, 'diving-centre');

$info_seek = 		strpos($currentPage, 'mauritius');
$facilities_seek = strpos($currentPage, 'facilities');
$gallery_seek = 		strpos($currentPage, 'gallery');

$spa_seek = 		strpos($currentPage, 'spa');
$diving_seek = 		strpos($currentPage, 'diving-centre');

$guestbook_seek = 		strpos($currentPage, 'guestbook');
$rates_seek = 		strpos($currentPage, 'rates');
$contact_seek = 		strpos($currentPage, 'contact');


if ($index_seek===false)		{ $index_active = 'menu1'; } 		else { $index_active = 'menu1active'; }
if ($accommodation_seek===false && $senior_seek===false && $junior_seek===false && $superior_seek===false && $royal_seek===false)		
								{ $accommodation_active = 'menu2'; } 		else { $accommodation_active = 'menu2active'; }
if ($facilities_seek===false)		{ $facilities_active = 'menu3'; } 		else { $facilities_active = 'menu3active'; }								
if ($restaurant_seek===false)		{ $restaurant_active = 'menu4'; } 		else { $restaurant_active = 'menu4active'; }
if ($activities_seek===false && $water_seek===false && $fitness_seek===false)		{ $activities_active = 'menu5'; } 		else { $activities_active = 'menu5active'; }
if ($info_seek===false)		{ $info_active = 'menu6'; } 		else { $info_active = 'menu6active'; }

if ($gallery_seek===false)		{ $gallery_active = 'menu7'; } 		else { $gallery_active = 'menu7active'; }

if ($spa_seek===false)	{ $spa_active = 'menu8'; } 		else { $spa_active = 'menu8active'; }
if ($diving_seek===false)		{ $diving_active = 'menu9'; } 		else { $diving_active = 'menu9active'; }

//if ($guestbook_seek===false)	{ $guestbook_active = 'menu8'; } 		else { $guestbook_active = 'menu8active'; }
//if ($rates_seek===false)		{ $rates_active = 'menu9'; } 		else { $rates_active = 'menu9active'; }
if ($contact_seek===false)	{ $contact_active = 'menu10'; } 		else { $contact_active = 'menu10active'; }

?>