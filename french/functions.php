<?PHP
function get_facilities($hotel_id, $lang)
{
	require_once ('lib.xml.php');
	
	$url = 'http://www.greeka.com/redirections/_global/xml_facilities_full.php';
	$curlPost = 'hotel_id='.$hotel_id.'&lang='.$lang.'&SUBMIT=Send';
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); 
	$result = curl_exec( $ch ); 
	curl_close($ch); 
	
	
	// clean useless parts from the curl post
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1253">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">', '', $result);
	$result = trim($result);
	
	
	$xml_filename = "xml/facilities.xml";
	$fp = fopen($xml_filename,'w');
	if(!$fp) { die('Error cannot create XML file'); }
	fwrite($fp, stripslashes($result));
	fclose($fp);
	$xml = new Xml;
	$out = $xml->parse($xml_filename);
	unlink($xml_filename);
	
return $out;
}
////////////////////////////////////////////////////////
//
//
//
////////////////////////////////////////////////////////
function get_gallery($hotel_id, $lang)
{
	require_once ('lib.xml.php');
	
	$url = 'http://www.greeka.com/redirections/_global/xml_gallery_full.php';
	$curlPost = 'hotel_id='.$hotel_id.'&lang='.$lang.'&SUBMIT=Send';
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); 
	$result = curl_exec( $ch ); 
	curl_close($ch); 
	
	
	// clean useless parts from the curl post
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1253">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">', '', $result);
	$result = trim($result);
	
	
	$xml_filename = "xml/gallery.xml";
	$fp = fopen($xml_filename,'w');
	if(!$fp) { die('Error cannot create XML file'); }
	fwrite($fp, stripslashes($result));
	fclose($fp);
	$xml = new Xml;
	$out = $xml->parse($xml_filename);
	unlink($xml_filename);
	
return $out;
}

////////////////////////////////////////////////////////
//
//
//
////////////////////////////////////////////////////////
function get_price($hotel_id, $lang)
{
	require_once ('lib.xml.php');
	
	$url = 'http://www.greeka.com/redirections/_global/xml_pricelist_full.php';
	$curlPost = 'hotel_id='.$hotel_id.'&lang='.$lang.'&SUBMIT=Send';
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); 
	$result = curl_exec( $ch ); 
	curl_close($ch); 
	
	
	// clean useless parts from the curl post
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1253">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">', '', $result);
	$result = trim($result);
	
	
	$xml_filename = "xml/pricelist.xml";
	$fp = fopen($xml_filename,'w');
	if(!$fp) { die('Error cannot create XML file'); }
	fwrite($fp, stripslashes($result));
	fclose($fp);
	$xml = new Xml;
	$out = $xml->parse($xml_filename);
	unlink($xml_filename);
	
return $out;
}



////////////////////////////////////////////////////////
//
//
//
////////////////////////////////////////////////////////
function get_price_utf8($hotel_id, $lang)
{
	require_once ('class.xml2array.php');
	
	$url = 'http://www.greeka.com/redirections/_global/xml_pricelist_full_utf8.php';
	$curlPost = 'hotel_id='.$hotel_id.'&lang='.$lang.'&SUBMIT=Send';
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); 
	$result = curl_exec( $ch ); 
	curl_close($ch); 
	
	
	// clean useless parts from the curl post
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1253">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">', '', $result);
	$result = str_replace('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">', '', $result);
	$result = trim($result);
	
	
	$xml_filename = "xml/pricelist.xml";
	$fp = fopen($xml_filename,'w');
	if(!$fp) { die('Error cannot create XML file'); }
	fwrite($fp, stripslashes($result));
	fclose($fp);
	$x = new xml2array($xml_filename);
	$out= $x->getResult();	
	//unlink($xml_filename);
	


	
return $out;
}

?>