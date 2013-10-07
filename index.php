<?php 

/*require_once 'Services/Soundcloud.php';
$sc_client_id = "801db1fa1ebf6447f220ebe09657a89e"; 
$sc_secret = "3e9b2179343f27757c0dca3c000b30b2";
$sc_user = "iramgutzglez";
$sc_pass = "sofiia";
// create client object and set access token
$client = new Services_Soundcloud($sc_client_id, $sc_secret);
// login
$client->credentialsFlow($sc_user, $sc_pass);

$track = json_decode($client->post('tracks', array(
    'track[title]' => 'test',
    //'track[asset_data]' => '/home/clickerdev/sites/dev.clicker360.com/public_html/php-soundcloud/test.mp3'
    'track[asset_data]' => '/var/www/html/php-soundcloud/test.mp3'
)));

// print track link
print $track->permalink_url;*/
?>
<?php
require_once 'Services/Soundcloud.php';
$sc_client_id = "801db1fa1ebf6447f220ebe09657a89e"; 
$sc_secret = "3e9b2179343f27757c0dca3c000b30b2";
$sc_user = "iramgutzglez";
$sc_pass = "sofiia";
// create client object and set access token
$client = new Services_Soundcloud($sc_client_id, $sc_secret);
$client->setAccessToken('YOUR_ACCESS_TOKEN');

if(isset($_GET['code'])){
    $code = $_GET['code'];
    $access_token = $client->accessToken($code);
    echo $access_token;
}

// upload audio file
/*$track = json_decode($client->post('tracks', array(
    'track[title]' => 'test',
    'track[asset_data]' => '/home/clickerdev/sites/dev.clicker360.com/public_html/php-soundcloud/test.mp3',
    'track[asset_data]' => '/var/www/html/php-soundcloud/test.mp3'
)));

// print track link
print $track->permalink_url;*/
?>

