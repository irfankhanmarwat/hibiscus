<?PHP
error_reporting(0);
$hotel_id = (int)$_GET['hotel_id'];
$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$title = addslashes($_POST['title']);
$post = addslashes($_POST['post']);
$hotelname = addslashes($_POST['hotelname']);
$location = addslashes($_POST['location']);
$mygroup = addslashes($_POST['mygroup']);


$data = 'hotel_id='.$hotel_id.'';
$data .= '&name='.$name.'';
$data .= '&email='.$email.'';
$data .= '&title='.$title.'';
$data .= '&post='.$post.'';
$data .= '&hotelname='.$hotelname.'';
$data .= '&location='.$location.'';
$data .= '&mygroup='.$mygroup.'';

$url = 'http://www.greeka.com/redirections/_global/guestbook2/process3.php';
$curlPost = $data.'&SUBMIT=Send';

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); 
$result = curl_exec( $ch ); 
curl_close($ch); 

echo $result;
?>