<?php 
// get user IP address
if (getenv("HTTP_CLIENT_IP")) 			{ $ip = getenv("HTTP_CLIENT_IP"); }
else if(getenv("HTTP_X_FORWARDED_FOR")) { $ip = getenv("HTTP_X_FORWARDED_FOR"); }
else if(getenv("REMOTE_ADDR")) 			{ $ip = getenv("REMOTE_ADDR"); }
else 									{ $ip = "UNKNOWN"; }

// request list of countries - selected country based on user IP
$qry_str = "?ip=".$ip;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.greeka.com/redirections/_global/html_countries.php'.$qry_str); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, '3');
$countries_list = trim(curl_exec($ch));
curl_close($ch);


// request list of translations
$qry_str = "?hotel_id=".$hotelid."&language="."french";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.greeka.com/redirections/_global/html_translations.php'.$qry_str); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, '3');
$translations = trim(curl_exec($ch));
curl_close($ch);

$translations = unserialize($translations);

?>
